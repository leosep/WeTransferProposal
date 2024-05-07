<?php
class Files_model extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }
   public function insert($name, $type, $size, $file, $id_transfer, $id=null){
      $data = array(
         'name' => $name,
         'type' => $type,
         'size' => $size,
         'file' => $file,
         'id_transfer' => $id_transfer
 
      );
      if($id){
         $this->db->where('id', $id);
         $this->db->update('files', $data);
      }else{
         $this->db->insert('files', $data);
      } 
   }
   public function delete($id){
      $this->db->where('id', $id);
      $this->db->delete('files');
   }
   public function get_by_id($id){
      $this->db->select('name, type, size, file, id_transfer');
      $this->db->from('files');
      $this->db->where('id', $id);
      $query = $this->db->get();
      $result = $query->row();
      return $result;
   }
    public function get_by_file_trasnfer($file,$id_transfer){
        $this->db->select('name, type, size, file, id_transfer');
        $this->db->from('files');
        $this->db->where('file', $file);
        $this->db->where('id_transfer', $id_transfer);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }


   public function get_by_transfer($id_transfer){
      $this->db->select('id, name, type, size, file, id_transfer');
      $this->db->from('files');
      $this->db->where('id_transfer', $id_transfer);
      $query = $this->db->get();
      $result = $query->result_array();
      return $result;
   }
   public function get_all(){
      $this->db->select('id, name, type, size, file, id_transfer');
      $this->db->from('files');
      $this->db->order_by('id', 'asc');
      $query = $this->db->get();
      $result = $query->result();
      return $result;
   }
}