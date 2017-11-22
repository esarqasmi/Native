<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class  Main_model extends CI_Model {
 

    public function save_contact($author, $text, $email) {
	 
        $this->db->insert('contacts',array('username'=> $author, 'message'=> $text, 'email'=>$email));
        return $this->db->insert_id();
    }
	 
  public function	get_testimonials(){
	   $qry = $this->db->get('testimonials');
    
        return $qry->result_array();
	  }
	 
  public function	get_team(){
	   $qry = $this->db->get('team'); 
        return $qry->result_array();
	  }
  public function	get_project(){
	   $qry = $this->db->get('projects'); 
        return $qry->result_array();
	  }
  public function	get_map(){
        $this->db->where(['data_key' => 'map_link']); 
        $qry = $this->db->get('data'); 
        return $qry->result_array();
	  }
 
}
