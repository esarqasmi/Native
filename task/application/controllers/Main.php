<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 
    public function __construct() {
        parent::__construct();
 
         $this->load->model('Main_model');
    }
	public function index()
	{ 
		$this->load->view('header');
		if($this->uri->total_segments() === 0){
			//user came in by default_controller
			$this->load->view('slider');
		}

		$this->load->view('home_page'); 
		$this->load->view('footer');
		
	}
	
	public function add_contact(){ 
  if ($this->input->post('username')) {
   $insert_contact = $this->Main_model->save_contact( $this->input->post('username'),  $this->input->post('message'),$this->input->post('email'));  
   if($insert_contact){
	  // $this->index(); 
	    $this->message('Message successfully sent.'  );   
	  }else{ 
		 $this->message('Error Occured! Message Not sent.');    
		  }
	} 
		}
		
		
 public function message($msg){ 
 $message = array('message' => $msg);
 $this->load->view('header');
 $this->load->view('message',$message);
 $this->load->view('footer');
		}
		
		
	public function contact_page()
	{ 
		$this->load->view('header'); 
		$this->load->view('contact'); 
		$this->load->view('footer');
		
	}
  public function list_testimonial_onhome($msg = null) {  
return  $LIST = $this->Main_model->get_testimonials();
  
	}	
  public function list_team_onhome($msg = null) {  
return  $LIST = $this->Main_model->get_team();
  
	}
  public function list_project_onhome($msg = null) {  
return  $LIST = $this->Main_model->get_project();
  
	}
		 public function list_map_onhome($msg = null) {  
return  $LIST = $this->Main_model->get_map();
  
	}	
}
