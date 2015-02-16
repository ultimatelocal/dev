<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('subject_model');
        $this->load->helper('url');
    }
    

    public function get_user() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->user_model->checkLogin_model($username, $password);
        if ($user != null) {
//            $userdata = array(
////            'username'  => $username,
////            'password'  => $password,
//            'logged_in' => TRUE
//            );
            $this->session->set_userdata($user);
            $this->session->set_userdata('login', 'true');
            $accountid = $this->session->userdata('accountid');
            $subject = $this->subject_model->loadsubject_model();
            $set_subject = array('subjects' => $subject);
            $this->session->set_userdata($set_subject);
//            echo json_encode($set_subject);
            echo json_encode($user);
//            $this->_render('pages/dashboard');
        } else {
            $result = array('error' => 'Log-in failed. Please make sure that your Username or Password is correct.');
            echo json_encode($result);
        }
    }

    public function checkfields() {
        $type=$this->input->get('type');
        switch($type) {
            case 'username':
                $field = $this->input->get('username');
                $tbl='username';
                $check = $this->user_model->validate_model($field,$tbl);
                if ($check != null) {
                    $isAvailable=false;
                    //$result = array('username' => $checkusername);
                    echo json_encode(array('valid' => $isAvailable,));
                } else {
                    $isAvailable=true;
                    //$result = array('username' => $checkusername);
                    echo json_encode(array('valid' => $isAvailable,));
                }
                break;
                
            case 'email':
                $field = $this->input->get('email');
                $tbl='email';
                $check = $this->user_model->validate_model($field,$tbl);
                if ($check != null) {
                    $isAvailable=false;
                    //$result = array('username' => $checkusername);
                    echo json_encode(array('valid' => $isAvailable,));
                } else {
                    $isAvailable=true;
                    //$result = array('username' => $checkusername);
                    echo json_encode(array('valid' => $isAvailable,));
                }
            break;
            
            case 'accountid':
                $field = $this->input->get('id');
                $tbl='accountid';
                $check = $this->user_model->validate_model($field,$tbl);
                if ($check != null) {
                    $isAvailable=false;
                    //$result = array('username' => $checkusername);
                    echo json_encode(array('valid' => $isAvailable,$check));
                } else {
                    $isAvailable=true;
                    //$result = array('username' => $checkusername);
                    echo json_encode(array('valid' => $isAvailable,));
                }
                break;
                
        }      
    }
    
    public function register() {
        $accountid=$this->input->post('accountid');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $email=$this->input->post('email');
        $firstName=$this->input->post('firstName');
        $lastName=$this->input->post('lastName');
        $middleName=$this->input->post('middleName');
        $birthDate=$this->input->post('birthDate');
        $gender=$this->input->post('gender');
        $address=$this->input->post('address');
        $phoneNumber=$this->input->post('phoneNumber');
        $guardianName=$this->input->post('guardianName');
        $guardianMobileno=$this->input->post('guardianMobileno');
        $guardianAddress=$this->input->post('guardianAddress');
        
        $register=$this->user_model->register_model($accountid,$username,$password,$email,$firstName,$lastName,$middleName,$birthDate,$gender,$address,$phoneNumber,$guardianName,$guardianMobileno,$guardianAddress);
//        $system_id, $username, $password, $email, $firstName, $lastName, $middleName, $birthDate, $gender, $address, $phoneNumber, $guardianName, $guardianMobileno, $guardianAddress
//        $values=array(
//            'system_id'=>$system_id,
//            'username'=>$username,
//            'email'=>$email,
//            'firstName'=>$firstName,
//            'lastName'=>$lastName,
//            'middleName'=>$middleName,
//            'birthDate'=>$birthDate,
//            'gender'=>$gender,
//            'address'=>$address,
//            'phoneNumber'=>$phoneNumber,
//            'guardianName'=>$guardianName,
//            'guardianMobileno'=>$guardianMobileno,
//            'guardianAddress'=>$guardianAddress);
        
         
        echo json_encode(array('result1'=>$result1,'result2'=>$result2));
    }
}
