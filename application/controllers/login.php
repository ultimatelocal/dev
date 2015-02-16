<?php 
class Login extends MY_Controller {
    function __construct() {
        parent::__construct();
        //load session and connect to database
        $this->load->model('user_model','login',TRUE);
        $this->load->helper(array('form', 'url','html'));
        $this->load->library(array('form_validation','session'));
        $this->load->database();
    }
    public function index() {
        if($this->session->userdata('login'))
    {
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['accountid'] = $session_data['accountid'];
        $data['userlevel'] = $session_data['userlevel'];
        $data['email']=$session_data['email'];
        $data['contactno']=$session_data['contactno'];
        $data['account_status']=$session_data['account_status'];
        $this->_render('pages/dashboard');

    } else {
    //If no session, redirect to login page
        //redirect('c_login', 'refresh');
    $this->load->helper(array('form','html'));
    $this->_renderLogin('pages/login'); //load view for login
        }
    }
    public function userlogin() {
        $this->load->model('user_model');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $user=$this->user_model->checkLogin_model($username,$password);
        
        if($user!=null){
            echo $username.$password;
            var_dump($user);
        }
    }
}
?>