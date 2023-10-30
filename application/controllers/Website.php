<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('WebsiteModel');
    }



	//Homepage
    public function index(){
        $data['totalHospitals'] = $this->WebsiteModel->totalHospital();
        $data['totalCountries'] = $this->WebsiteModel->totalCountry();
        $this->load->view('website/home', $data);
    }
    
    public function volunteer(){
        $data['allRegs'] = $this->WebsiteModel->fetchRegions();
        $this->load->view('website/volunteer', $data);
    }
    
    public function hospitalRegistration(){
        //Hospita Registration Validation
        $this->form_validation->set_rules('HName', 'Hospital Name', 'trim|required|is_unique[hospital.HNAME]');
        $this->form_validation->set_rules('regNumber', 'Registration Number', 'trim');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('passwordConf', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('address', 'Address', 'trim');
        $this->form_validation->set_rules('region', 'Region', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[hospital.EMAIL]|is_unique[users.EMAIL]',
            array('is_unique' => 'This email already exist.'));
        $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|numeric|is_unique[hospital.PHONE]|is_unique[users.PHONE]|regex_match[/^[0-9]{10}$/]',
            array('numeric' => 'Provide valid Phone Number', 'is_unique' => 'This phone number already exist.'));

        //left over
        //validate phone (accept only numbers)
        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'HNAME'             =>  $this->input->post('HName'),
                'REG_NO'            =>  $this->input->post('regNumber'),
                'PASSWORD'          =>  hash("sha256", $this->input->post('password')),
                'PHY_ADDRESS'       =>  $this->input->post('address'),
                'EMAIL'             =>  $this->input->post('email'),
                'PHONE'             =>  $this->input->post('phone'),
                'RID'               =>  $this->input->post('region'),
                'STATUS'            =>  "active"
                
            );
            
            $this->load->model("Registration");
            $this->Registration->hospitalRegistration($data);
            
            $this->session->set_flashdata('UserSuccessReg', 'You are successful register the hospital');
            redirect(base_url("Login/login"));
        }else {
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'err' => validation_errors()
                    //'err' => form_error('phone')
                );
                //var_dump($data);
                $this->session->set_flashdata("msgRegValidationErr", $data['err']);
            }
            $data['allRegs'] = $this->WebsiteModel->fetchRegions();
            $this->load->view("website/register", $data);
        }
    }
    
    public function userRegistration(){
        //Hospita Registration Validation
        $this->form_validation->set_rules('firstName', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastName', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('passwordconf', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('category', 'Category', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[hospital.EMAIL]|is_unique[users.EMAIL]',
            array('is_unique' => 'This email already exist.'));
        $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|numeric|is_unique[hospital.PHONE]|is_unique[users.PHONE]|regex_match[/^[0-9]{10}$/]',
            array('numeric' => 'Provide valid Phone Number', 'is_unique' => 'This phone number already exist.'));

        //left over
        //validate phone (accept only numbers)
        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'FNAME'             =>  $this->input->post('firstName'),
                'LNAME'            =>  $this->input->post('lastName'),
                'PASSWORD'          =>  hash("sha256", $this->input->post('password')),
                'CATEGORY'       =>  $this->input->post('category'),
                'EMAIL'             =>  $this->input->post('email'),
                'PHONE'             =>  $this->input->post('phone'),
                'STATUS'            =>  "active"
                
            );
            
            $this->load->model("Registration");
            $this->Registration->userRegistration($data);
            
            $this->session->set_flashdata('UserSuccessReg', 'You are successful registered');
            redirect(base_url("Login/login"));
        }else {
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'err' => validation_errors()
                    //'err' => form_error('phone')
                );
                //var_dump($data);
                $this->session->set_flashdata("msgRegValidationErr", $data['err']);
            }
            $data['allRegs'] = $this->WebsiteModel->fetchRegions();
            $this->load->view("website/registerUser", $data);
        }
    }
    
    public function donate(){
        $this->load->view('website/donate');
    }
    
    //donate item
     public function donateItem(){
        $data['region'] = $this->uri->segment(3);
        $this->load->view("website/viewpress", $data);
    }
    
    //regions
     public function regions(){
         
        $data['region'] =$this->WebsiteModel->allRegions();
        $this->load->view("website/regions",$data);
    }
    
    //Pyment
    public function payment(){

        $this->load->view('website/payment');
    }

}

?>