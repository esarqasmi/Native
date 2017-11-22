<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('User_model');
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
        $this->load->view('login'); 
      }
       
    }

    public function login() {
      //  print"<pre>";
    // print_r($this->input->post()); 
        if ($this->input->post('user_password')) {
            $log_post_email = $this->input->post('user_name');
          //  $log_post_password = md5($this->input->post('user_password')); 
            $log_post_password =  $this->input->post('user_password'); 

            $active_admin = $this->User_model->get_where_email_pass($log_post_email, $log_post_password); 
            $this->output->set_content_type('application_json');

            if ($active_admin) {

                $active_admin = $active_admin[0];
                $user_data = ['active_user_id' => $active_admin['id'], 'active_user' => $active_admin['type'], '_is_logged_in' => 1];
                $this->set_sess($user_data);
	 
                $this->output->set_output(json_encode(['result' => 1]));

                //================== To avoid form resubmission CACHE_MISS ERR ========================
                $this->output->set_header('cache-Control: no-store, no-cache, must-revalidate');
                $this->output->set_header("cache-Control: post-check=0, pre-check=0", false);
                $this->output->set_header("Pragma: no-cache");
                $this->output->set_header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
                //=====================================================================================
                redirect('admin/dashboard');
                return false;
            } else {

                $this->load->view('login');
            }
        } else {
            redirect('admin/Login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
		//session_destroy();
        redirect('admin/Login');
    }

    public function set_sess($arr_sess) {
        $this->session->set_userdata($arr_sess);
    }

    public function randomPassword() {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

}
