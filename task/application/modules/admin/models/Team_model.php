<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class  Team_model extends CI_Model {

 
  public function get($user_id = null) {
 
            $qry = $this->db->get('team');
    
        return $qry->result_array();
    }

    public function save_team($author, $text, $path) {
	 
        $this->db->insert('team',array('name'=> $author, 'descp'=> $text, 'path'=>$path));
        return $this->db->insert_id();
    }
 
}
