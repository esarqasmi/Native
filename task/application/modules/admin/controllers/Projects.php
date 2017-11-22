<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends MX_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('User_model');
         $this->load->model('Projects_model');
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
       $LIST = $this->Projects_model->get();
 
        $ARRY['LIST'] = $LIST;
        $ARRY['MESSAGE'] = "";
        $this->load->view('header', $ARRY);
        $this->load->view('projects', $LIST);
      }
       
    }
    public function add_projects() {  
 
  if ($this->input->post('team_member')) {
  // 
   
   				$config['upload_path']          =  './uploads/'  ;
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
			 
$this->upload->initialize($config);
                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors()); 

                         $this->index();  
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						  //$data['upload_data']['full_path'];
						  $path=base_url().'uploads/'.$data['upload_data']['file_name'];
	 $insert = $this->Projects_model->save_projects( $this->input->post('team_member'),  $this->input->post('descp'), $path, $this->input->post('address'));  
	  if($insert){
	   $this->index();  
	   } 
                        
                }
   
   

	  }
	}
 public function list_projects($msg = null) {  
  $LIST = $this->Projects_model->get();
 
        $ARRY['LIST'] = $LIST;
        $ARRY['MESSAGE'] = "";
        $this->load->view('header', $ARRY);
        $this->load->view('projects', $ARRY);
	}
}
