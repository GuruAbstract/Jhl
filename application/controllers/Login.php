<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->Model("LoginModel");
    }


    public function login(){
        //Validate Inputs
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == TRUE){

            //If validation rules 
            $email          = $this->input->post('email');
            $password       = hash("sha256", $this->input->post('password'));

            //Check if user exist in db
            $result = $this->LoginModel->UserLogin($email, $password);
            
            if($result->EMAIL != NULL && isset($result->HNAME)){
                $HospitalData = array(
                    'HID'               =>  $result->HID,
                    'HNAME'              =>  $result->HNAME,
                    'REG_NO'            =>  $result->REGNO,
                    'PHY_ADDRESS'       =>  $result->PHY_ADDRESS,
                    'STATUS'            =>  $result->STATUS,
                    'EMAIL'             =>  $result->EMAIL,
                    'PHONE'             =>  $result->PHONE,
                    'PROF_IMG'          =>  $result->PROF_IMG,
                    'REG_DATE'          =>  $result->REG_DATE,
                    'IsLoggedInH'        =>  TRUE
                );

                //Create/Initiate user session
                $this->session->set_userdata($HospitalData);

                redirect(base_url('Hospital/dashboard'));
            }
            else if($result->EMAIL !=NULL && isset($result->FNAME)){
                $UsersData = array(
                    'UID'               =>  $result->UID,
                    'FNAME'             =>  $result->FNAME,
                    'LNAME'             =>  $result->LNAME,
                    'CATEGORY'          =>  $result->PHY_ADDRESS,
                    'STATUS'            =>  $result->STATUS,
                    'EMAIL'             =>  $result->EMAIL,
                    'PHONE'             =>  $result->PHONE,
                    'PROF_IMG'          =>  $result->PROF_IMG,
                    'REG_DATE'          =>  $result->REG_DATE,
                    'IsLoggedInU'        =>  TRUE
                );

                //Create/Initiate user session
                $this->session->set_userdata($UsersData);

                redirect(base_url('Users/dashboard'));
            }
            else {
                //If user not found
                $this->session->set_flashdata('UserLoginFailed', 'Invalid Login credentials');
                redirect(current_url());
            }
        }
        
        if($this->session->userdata('IsLoggedInH')){
            redirect(base_url('Hospital/dashboard'));
        }
        else if($this->session->userdata('IsLoggedInU')){
            redirect(base_url('Users/dashboard'));
        }
        else {
            $this->load->view('website/login');
        }
    }

}

?>