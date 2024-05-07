<?php
class Transfer_model extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }
   public function insert($date, $sender, $recipient, $message, $token, $id=null){
      $data = array(
         'date' => $date,
         'sender' => $sender,
         'recipient' => $recipient,
         'message' => $message,
         'token' => $token
 
      );
      if($id){
         $this->db->where('id', $id);
         $this->db->update('transfer', $data);
      }else{
         $this->db->insert('transfer', $data);
         
         return $this->db->insert_id();
      } 
   }
   public function delete($id){
      $this->db->where('id', $id);
      $this->db->delete('transfer');
   }
   public function get_by_id($id){
      $this->db->select('date, sender, recipient, message, token');
      $this->db->from('transfer');
      $this->db->where('id', $id);
      $query = $this->db->get();
      $result = $query->row();
      return $result;
   }
   public function get_by_token($token){
      $this->db->select('id, date, sender, recipient, message');
      $this->db->from('transfer');
      $this->db->where('token', $token);
      $query = $this->db->get();
      $result = $query->row();
      return $result;
   }
   public function get_all(){
      $this->db->select('id, date, sender, recipient, message, token');
      $this->db->from('transfer');
      $this->db->order_by('id', 'asc');
      $query = $this->db->get();
      $result = $query->result();
      return $result;
   }
}