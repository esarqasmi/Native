<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class  Projects_model extends CI_Model {

 
  public function get($user_id = null) {
 
            $qry = $this->db->get('projects');
    
        return $qry->result_array();
    }

    public function save_projects($author, $text, $path, $address) {
	 
        $this->db->insert('projects',array('name'=> $author, 'descp'=> $text, 'image'=>$path, 'address'=>$address));
        return $this->db->insert_id();
    }
 
}
