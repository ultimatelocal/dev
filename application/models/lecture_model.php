<?php

if (!defined('BASEPATH'))
    exit('No direct access is allowed!');

class Lecture_Model extends CI_Model {

    function __construct() {
        $this->load->database();
        $this->load->library('session');
    }
    function savelecture_model() {
        
    }
}
?>