<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Subject extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form','url'));

    }
   function index(){
         $this->js[]='custom/lecture_actions.js';
         $this->_render('/pages/subject_page',array('error'=>''));

     }
   
function do_upload() 
  {
    $lecname =  $this->input->post('title');

    $userfolder = $this->session->userdata('username');

    $create_folder = mkdir('./uploads/'.$userfolder.'-'.$lecname.'', 0777, true);  
    $config['upload_path'] = './uploads/'.$userfolder.'-'.$lecname.'';
    $config['allowed_types'] = 'gif|jpg|png|pdf';
    $config['max_size'] = '4000';
    $config['max_width']  = '1024';
    $config['max_height']  = '768';


    $this->load->library('upload', $config);

    if (!$this->upload->do_upload())
    {
      $error = array('error' => $this->upload->display_errors());  
      $this->load->view('welcome_message',$error);
    }
    else
    {
      $data = array('upload_data' => $this->upload->data());
      $this->_render('pages/subject_page');
    }
  }


  
}
?>
