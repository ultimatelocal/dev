<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Subject extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('subject_model');
        $this->load->helper('url');
        $this->load->helper('form');

    }
   public function loadsubject_model($accountid,$userlevel) {
       $subject = $this->subject_model->loadsubject_model($accountid);
       print_r($subject);   
       
   }
   public function display() {
       if($this->session->userdata('accountid')!=null) {
    $subjectid=$this->uri->segment(3);
    $userlevel=$this->session->userdata('userlevel');
    $content=$this->subject_model->subjectcontent_model($subjectid,$userlevel);
//        array('content'=>$content);
    $subj_content=array('content'=>$content);

    $this->session->set_userdata($subj_content);
    $this->css[]="custom/main.css";
    $this->js[]="custom/tables.js";
    $this->js[]="custom/lecture_actions.js";
    $this->js[]="custommodal.js";
    $this->js[]="pdfobject.js";
    $this->js[]="jquery.form.min.js";

    $this->_render('pages/subject_page');
       } else {
           redirect('main/','refresh');
       }

    }
    
    public function create_subject() {
       if($this->session->userdata('system_id')!=null) {
    $subj_id=$this->uri->segment(3);
    $userlvl=$this->session->userdata('userlevel');
    
//    $this->js[]="custom/tables.js";
//    $this->js[]="custommodal.js";
//    $this->js[]="pdfobject.js";

    $this->_render('pages/create_subject');
       } else {
           redirect('main/','refresh');
       } 
    }

}
?>
