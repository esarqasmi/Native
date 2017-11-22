<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class  User_model extends CI_Model {

    public function get($user_id = null) {
        if ($user_id === null) {
            $qry = $this->db->get('users');
        } else {
            $qry = $this->db->get_where('users', ['id' => $user_id]);
        }
        return $qry->result_array();
    }
    
    

    public function get_where_email_pass($log_post_email, $log_post_password) {
	 
        $this->db->where(['username' => $log_post_email]);
        $this->db->where(['password' => $log_post_password]);
        $qry = $this->db->get('users'); 
        return $qry->result_array();
    } 
	
	 public function save_map($data_key, $data_value) {
	 $this->db->where(['data_key' => 'map_link']); 
        $qry = $this->db->get('data'); 
		$res=$qry->result_array();
		 if(empty($res)){
		 $this->db->insert('data',array('data_key'=> $data_key, 'data_value'=> $data_value));
        	return $this->db->insert_id();
			 }else{
	 
		$this->db->set('data_value', $data_value );  //Set the column name and which value to set.. 
		$this->db->where('data_key', $data_key );
 
        if( $this->db->update('data'))
      {
        return true;
      }
      else
      {
        return false;
      }
			 }
    }
	
	
    public function get_map() {
	  
        $qry = $this->db->get('data'); 
        $qry = $this->db->where(['data_key'=>'map_link']); 
        return $qry->result_array();
    } 
 
}
