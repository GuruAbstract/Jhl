<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('IsLoggedInH')){
            redirect(base_url('Login/login'));
        }
        $this->load->model('HospitalModel');
    }



	//Homepage
    public function dashboard(){

        $this->load->view('hospital/dashboard');
    }
    
    function newNeeds(){
        $data['needs'] = $this->HospitalModel->allNeeds();
        $this->load->view("hospital/new_need",$data);
    }
    
    function logout(){
        $this->session->unset_userdata('HID');
        $this->session->unset_userdata('HNAME');
        $this->session->unset_userdata('REG_NO');
        $this->session->unset_userdata('PHY_ADDRESS');
        $this->session->unset_userdata('STATUS');
        $this->session->unset_userdata('EMAIL');
        $this->session->unset_userdata('PHONE');
        $this->session->unset_userdata('PROF_IMG');
        $this->session->unset_userdata('IsLoggedIn');
        $this->session->sess_destroy();
        redirect(base_url('Website'));
    }
    
    function needs(){
        $hid = $this->session->userdata('HID');
        $data['requirements'] = $this->HospitalModel->ourNeeds($hid);
        $this->load->view('hospital/needs', $data);
    }

}

?>