<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class  Contact_model extends CI_Model {

 
  public function get($user_id = null) {
 
      $qry = $this->db->get('contacts'); 
        return $qry->result_array();
    }

    public function save_contact($author, $text, $email) {
	 
        $this->db->insert('contacts',array('username'=> $author, 'message'=> $text, 'email'=>$email));
        return $this->db->insert_id();
    }

    public function get_message_email($msg_id) {
	 
      //  $qry = $this->db->get('contacts'); 
        $qry = $this->db->get_where('contacts', ['id' => $msg_id]);
        return $qry->result_array();
    }
	
	
 
}
