<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transfer extends CI_Controller {

	  function  __construct() {
        parent::__construct();
    }
    
    function send(){
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        
        $filesErrors = "<br />Errors:<br />";
        
        $data = array();
        if($this->input->post('fileSubmit') && !empty($_FILES['files']['name'])){
			
			$keys = array_keys($_FILES['files']['name']);
			$filesCount = end($keys);

            for($i = 0; $i <= $filesCount; $i++){
		
				if(isset($_FILES['files']['name'][$i])) {
					
					$_FILES['file']['name'] = $_FILES['files']['name'][$i];
					$_FILES['file']['type'] = $_FILES['files']['type'][$i];
					$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
					$_FILES['file']['error'] = $_FILES['files']['error'][$i];
                    $filesErrors = $filesErrors.$_FILES['files']['name'][$i].": ".$_FILES['files']['error'][$i]."<br />";
					$_FILES['file']['size'] = $_FILES['files']['size'][$i];
				
					$uploadPath = 'uploads/files/';
					$config['file_name']  = bin2hex(random_bytes(16));
					$config['upload_path'] = $uploadPath;

					$ext=preg_replace("/.*\.([^.]+)$/","\\1", $_FILES['file']['name']);
					$fileType=$_FILES['file']['type'];
                    $config['allowed_types'] = "*";
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('file')){
						$fileData = $this->upload->data();
						$uploadData[$i]['file_name'] = $_FILES['file']['name'];
						$uploadData[$i]['created'] = date("Y-m-d H:i:s");
						$uploadData[$i]['modified'] = date("Y-m-d H:i:s");
						$uploadData[$i]['file_ext'] = $fileData['file_ext'];
						$uploadData[$i]['file_size'] = $fileData['file_size'];
						$uploadData[$i]['orig_name'] = $fileData['orig_name'];
						
					}
				}
            }
          
            if(!empty($uploadData)){
                // Insert file information into the database
				$this->load->model('transfer_model');
         		$identity = $this->transfer_model->insert(date("Y-m-d H:i:s"), $this->input->post('emailFrom'), $this->input->post('emailTo'), $this->input->post('message'), 0);
				
				$token = md5($identity);

				$this->transfer_model->insert(date("Y-m-d"), $this->input->post('emailFrom'), $this->input->post('emailTo'), $this->input->post('message'), $token, $identity);
				
				$this->load->model('files_model');
				
				$totalKb = 0;

				for ($i = 0; $i <= $filesCount; ++$i) {
					if(isset($uploadData[$i])) {	
						$totalKb = $totalKb + $uploadData[$i]['file_size'];			
         				$this->files_model->insert($uploadData[$i]['file_name'], $uploadData[$i]['file_ext'], $uploadData[$i]['file_size'], $uploadData[$i]['orig_name'], $identity);
					}
				}

				$this->load->library('email'); // load email library
				$this->email->from('user@email.com', 'Ford F-150');
				$this->email->to($this->input->post('emailTo'));
				$this->email->subject($this->input->post('emailFrom').' le ha enviado un archivo');
				
				$mailData = array();
				$mailData['transfer'] = $this->transfer_model->get_by_id($identity);
				$mailData['files'] = $this->files_model->get_by_transfer($identity);

				$mailData['mailFrom'] = $this->input->post('emailFrom');
				$mailData['mailTo'] = $this->input->post('emailTo');
				$mailData['message'] = $this->input->post('message');
				$mailData['total'] = $totalKb;
				$mailData['token'] = $token;
				$mailData['expiryDate'] = date('Y-m-d', strtotime(date("Y-m-d"). ' + 7 days'));

				$msg = $this->load->view('mail_to', $mailData, true);
				
				$this->email->message($msg);
	
				if ($this->email->send()) {
					echo "Mail Sent!";
					echo $this->email->print_debugger();
				} else {
					echo "There is error in sending mail!";
					echo $this->email->print_debugger();
				}

				$this->email->from('user@mail.com', 'Ford F-150');
				$this->email->to($this->input->post('emailFrom'));
				$this->email->subject('Gracias por utilizar la Ford F-150');
				$msg = $this->load->view('mail_sender', $mailData, true);
				$this->email->message($msg);
				if ($this->email->send()) {
					echo "Mail Sent!";
					echo $this->email->print_debugger();
				} else {
					echo "There is error in sending mail!";
					echo $this->email->print_debugger();
				}

		    } else {
                echo $filesErrors."<br />".$this->upload->display_errors('<p>', '</p>');;
                
            }
        }

    }

	public function index()
	{
		$this->load->view('header_transfer');
		$this->load->view('content_transfer');
		$this->load->view('footer_transfer');
	}

	public function download($token=null)
	{

		$this->load->model('transfer_model');
		$this->load->model('files_model');
		
		$transfer = $this->transfer_model->get_by_token($token);
		$files_array = $this->files_model->get_by_transfer($transfer->id);
		
		
		$Data = array();
		$Data['token'] = $token;
		$Data['files'] = $files_array;
		$Data['message'] = $transfer->message;
		
		$this->load->view('header_download');
		$this->load->view('content_download', $Data);
		$this->load->view('footer_download');
		
	}

	public function get_file($file, $token)
	{
		
		$this->load->model('transfer_model');
		$this->load->model('files_model');
		
		$transfer = $this->transfer_model->get_by_token($token);
		
		if (isset($transfer->id)) {
			$files_array = $this->files_model->get_by_file_trasnfer($file, $transfer->id);

				$path = 'uploads/files/'.$files_array->file; // the file made available for download via this PHP file
				$name = $files_array->name;
				$mm_type="application/octet-stream"; // modify accordingly to the file type of $path, but in most cases no need to do so

				header("Pragma: public");
				header("Expires: 0");
				header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
				header("Cache-Control: public");
				header("Content-Description: File Transfer");
				header("Content-Type: " . $mm_type);
				header("Content-Length: " .(string)(filesize($path)) );
				header('Content-Disposition: attachment; filename="'.basename($name).'"');
				header("Content-Transfer-Encoding: binary\n");

				readfile($path); // outputs the content of the file
			//}

			exit();
		}
	}

	public function get_files_zip($token)
	{
		$this->load->model('transfer_model');
		$this->load->model('files_model');
		
		$transfer = $this->transfer_model->get_by_token($token);
		
		if (isset($transfer->id)) {
			$files_array = $this->files_model->get_by_transfer($transfer->id);

			$timestamp = new DateTime();
					
			if(count($files_array) > 0) {
		
				$zip = new ZipArchive;
				$download = dirname(__FILE__)."/../../uploads/files/zips/".$token.".zip";
				$zip->open($download, ZipArchive::CREATE);
				
				foreach ($files_array as $item) {
					$zip->addFile(dirname(__FILE__)."/../../uploads/files/".$item['file'], $item['name']); 
				}

				$zip->close();
				
				if (file_exists($download)) {
					header('Content-Type: application/zip');
					header('Content-disposition: attachment; filename='.$token.'.zip');
					header('Content-Length: ' . filesize($download));
					readfile($download);
				}
			}

		}
		
	}

}
