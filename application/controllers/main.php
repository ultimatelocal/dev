<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
    }

    public function index() {
        //initial page load -if not login, load login page. if yes, load dashboard
//        $this->js[] = "custom/main.js";
//        $this->css[] = "custom/main.css";
//        $this->session->set_userdata('login','true');
        
        if($this->session->userdata('login')=='true'){
            $this->session->all_userdata();
            $this->_render('pages/dashboard');
        }
        else {
            $this->js[]='custom/signin.js';
            $this->_renderLogin('pages/login');
        }
    }

    public function dashboard() {
        //dashboard
        $this->_render('pages/dashboard');
    }
    
    public function register() {
        $this->js[]="custom/registration-wizard.js";
//        $this->js[]="demo/form-validation.js";
        $this->js[]="demo/form-component.js";
        $this->_renderLogin('pages/register');
    }
    
    public function logout() {
        $this->session->sess_destroy();
        $this->js[]='custom/signin.js';
        redirect();
    }

}
