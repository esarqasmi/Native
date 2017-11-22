<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonials extends MX_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('User_model');
         $this->load->model('Testimonial_model');
    }

    public function index($msg = null) { 
 if(($this->session->userdata('logged_in') == TRUE))
  {
    if(($this->session->userdata('username') != "" ))
    {
        $this->welcome();
    }
  }
    else {
       $LIST = $this->Testimonial_model->get();
 
        $ARRY['LIST'] = $LIST;
        $ARRY['MESSAGE'] = "";
        $this->load->view('header', $ARRY);
        $this->load->view('testimonials', $LIST);
      }
       
    }
    public function add_testimonial($msg = null) {  
  if ($this->input->post('author')) {
   $active_admin = $this->Testimonial_model->save_testimonial( $this->input->post('author'),  $this->input->post('testimonial'));  
   if($active_admin){
	   $this->index();  
	   }
	  }
	}
 public function list_testimonial($msg = null) {  
  $LIST = $this->Testimonial_model->get();
 
        $ARRY['LIST'] = $LIST;
        $ARRY['MESSAGE'] = "";
        $this->load->view('header', $ARRY);
        $this->load->view('testimonials', $ARRY);
	}
}
