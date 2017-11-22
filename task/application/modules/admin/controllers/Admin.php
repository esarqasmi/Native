<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	  public function __construct() {
        parent::__construct();

        $this->load->model('User_model'); 
    }

	 
	public function index()
	{  $this->load->view('header');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}
	public function map()
	{  $this->load->view('header');
		$this->load->view('map');
		$this->load->view('footer');
	}
	public function add_map()
	{   
  if ($this->input->post('map_link')) {
   $active_admin = $this->User_model->save_map( 'map_link',  $this->input->post('map_link'));  
   if($active_admin){
	   $this->map();  
	   }
	  }
	}
	
	 public function list_map_onadmin($msg = null) {  
return  $LIST = $this->User_model->get_map();
  
	}	
}
