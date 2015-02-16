<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    // Page resources
    protected $js = array();
    protected $css = array();
    protected $fonts = array();
    protected $images=array();
    protected $plugins=array();
    
    // Page data
    protected $data = array();

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('parser');
        $this->load->model('subject_model');
        
    }

    public function _render($view) {
        $data = $this->data;
        $data['css'] = $this->css;
        $data['js'] = $this->js;
        $data['plugins']=$this->plugins;
        $data['images']=$this->images;
        
//        $this->session->set_userdata('login','true');
        $system_id=$this->session->userdata('system_id');
        $userlvl=$this->session->userdata('userlvl');
        $subj= $this->subject_model->loadsubject_model($system_id,$userlvl);
        if($subj!=null) {
        foreach($subj as $s) {
            $subj_id[]=$s;
        }
        $data['subject']=$subj_id;
        }
        $data['head'] = $this->load->view('templates/head', $data, true);
        if($this->session->userdata('login')=='true'){
        $data['nav']=$this->load->view('templates/nav',$data,true);
        $data['main_nav'] = $this->load->view('templates/main_nav', $data, true);
        $data['side_nav'] = $this->load->view('templates/side_nav', $data, true);
        $data['footer'] = $this->load->view('templates/footer', $data, true);
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        }
        $data['additional']=$this->load->view('templates/additional',$data,true);
        $data['content'] = $this->load->view($view, $data, true);

        $this->load->view('templates/skeleton', $data);
    }
    public function _renderLogin($view) {
        $data = $this->data;
        $data['css'] = $this->css;
        $data['js'] = $this->js;
        $data['plugins']=$this->plugins;
        $data['images']=$this->images;
        
        
        $data['head'] = $this->load->view('templates/head', $data, true);
        $data['nav']='';
        $data['main_nav'] = '';
        $data['side_nav'] = '';
        $data['footer'] = '';
        $data['additional']='';
        $data['content'] = $this->load->view($view, $data, true);
        
        $data['scripts'] = $this->load->view('templates/scripts', $data, true);
        $this->load->view('templates/skeleton', $data);
    }

}

?>