<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('IsLoggedInU')){
            redirect(base_url('Login/login'));
        }
    }



	//Homepage
    public function dashboard(){

        $this->load->view('users/dashboard');
    }
    
    function logout(){
        $this->session->unset_userdata('UID');
        $this->session->unset_userdata('FNAME');
        $this->session->unset_userdata('LNAME');
        $this->session->unset_userdata('CATEGORY');
        $this->session->unset_userdata('STATUS');
        $this->session->unset_userdata('EMAIL');
        $this->session->unset_userdata('PHONE');
        $this->session->unset_userdata('PROF_IMG');
        $this->session->unset_userdata('REG_DATE');
        $this->session->unset_userdata('IsLoggedIn');
        $this->session->sess_destroy();
        redirect(base_url('Website'));
    }

}

?>