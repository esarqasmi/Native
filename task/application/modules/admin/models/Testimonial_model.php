<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class  Testimonial_model extends CI_Model {

 
  public function get($user_id = null) {
 
            $qry = $this->db->get('testimonials');
    
        return $qry->result_array();
    }

    public function save_testimonial($author, $text) {
	 
        $this->db->insert('testimonials',array('author'=> $author, 'testimonial'=> $text));
        return $this->db->insert_id();
    }
 
}
