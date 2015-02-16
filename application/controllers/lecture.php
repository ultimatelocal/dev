<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lecture extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('lecture_model');
        $this->load->helper('url');
    }

    public function save_lecture() {
        $lecture_id = $_POST['lectureid'];
        $lecture_title = $_POST['lecture_title'];
//        condition for pdf link
        if (!$_FILES['pdf_link']) {
            
        } else {
            
        } //end for pdf link

//        trim youtube link
        if (isset($_POST['video_link'])) {
            $video_link_whole = $_POST['video_link'];
            $video_link = $_POST['video_link'];
            preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $video_link_whole, $matches);
            $video_link = $matches['1'];
            echo $video_link;
        } //end of trimming
    }

}

?>