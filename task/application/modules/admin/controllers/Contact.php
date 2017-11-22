<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MX_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('User_model');
         $this->load->model('Contact_model');
    }

    public function index($msg=null) {  
       $LIST = $this->Contact_model->get(); 
        $ARRY['LIST'] = $LIST;
        $ARRY['MESSAGE'] = $msg;
        $this->load->view('header', $ARRY ); 
        $this->load->view('contact', $LIST); 
    }
    public function save_contact($msg = null) {  
  if ($this->input->post('username')) {
   $insert_contact = $this->Contact_model->save_contact( $this->input->post('username'),  $this->input->post('message'),$this->input->post('email'));  
   if($insert_contact){
	   $this->index();  
	   }
	  }
	} 
	
	
	
    public function show_message($msg) {  
       $LIST = $this->Contact_model->get(); 
        $ARRY['LIST'] = $LIST;
        $ARRY['MESSAGE'] = $msg;
        $this->load->view('header', $ARRY ); 
        $this->load->view('contact', $LIST); 
    }
    public function reply($msg_id) {  
	$LIST = $this->Contact_model->get_message_email($msg_id);   
        $ARRY['LIST'] = $LIST; 
        $this->load->view('header', $ARRY ); 
        $this->load->view('reply', $LIST);
}
    public function send_reply() {  
	 
            $user_name = $this->input->post('user_name'); 
            $user_email = $this->input->post('email'); 
			 
        $_Parent_email = 'abc@gmail.com';

        $msgp1 = $this->eml_fhalf();
        $msgp3 = $this->eml_shalf();
        $msgp2 =   $this->input->post('reply_message');

        $msg = $msgp1 . $msgp2 . $msgp3;

        $this->load->library('email');

        $config['protocol'] = "smtp";
// does not have to be gmail
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = 'qurat.developer@gmail.com';
        $config['smtp_pass'] = 'Space123';
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";
        $config['wordwrap'] = TRUE;

        $this->email->initialize($config);

        $this->email->from('qurat.developer@gmail.com', 'Realestate Admin');
        $this->email->to($user_email);
        $this->email->subject('Reply From admin');
        $this->email->message($msg);

        $this->email->send();
		  
        $this->show_message('Message sent to user successfully.');
        return;
    }

    public function eml_fhalf() {

        $msgp1 = '<table border="0" cellpadding="0"  cellspacing="0" height="100%" width="100%" id="bodyTable">
                        <tr>
                            <td align="center" valign="top" >
                                <table border="0" style=" cellpadding="20" cellspacing="0" width="600" id="emailContainer">
                                    <tr>
                                        <td align="center" valign="top">
                                            <table border="0" style="background-color:#2c3742;" cellpadding="20" cellspacing="0" width="100%" id="emailHeader">
                                                <tr>
                                                    <td align="center" valign="top">
                                                        <h1 style="color:white;" > <b>Reply From Admin</b> </h1>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="top">
                                            <table border="0" cellpadding="20"  cellspacing="0" width="100%" id="emailBody">
                                                <tr>
                                                    <td align="center" valign="top">';
        return $msgp1;
    }

    public function eml_shalf() {

        $msgp2 = '                      </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" valign="top">
                                            <table border="0" style="background-color:#2c3742;" cellpadding="20" cellspacing="0" width="100%" id="emailFooter">
                                                <tr>
                                                    <td align="center" style="color:white;" valign="top">
                                                        Copyright 2016
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>';
        return $msgp2;
    }
}
