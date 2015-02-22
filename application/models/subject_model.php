<?php

if (!defined('BASEPATH'))
    exit('No direct access is allowed!');

class Subject_Model extends CI_Model {

    function __construct() {
        $this->load->database();
        $this->load->library('session');
    }

    function loadsubject_model() {
        $accountid = $this->session->userdata('accountid');
        $userlevel = $this->session->userdata('userlevel');
        switch ($userlevel) {
            case ('1'):
                $result = $this->db->get_where('subject', array('accountid' => $accountid));
                break;

            case ('2'):
                $result = $this->db->get_where('view_student_subject', array('accountid' => $accountid));
                break;
            case ('88'):
                //none
                break;

            default:
        }

        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
    }

    function subjectcontent_model($subjectid) {
        $userlevel = $this->session->userdata('userlevel');
        switch ($userlevel) {
            case '1':
                //get all contents for selected subject
                $content_query = $this->db->get_where('subject', array('subjectid' => $subjectid));
                break;

            case '2':
                $content_query = $this->db->get_where('student_subject', array('subjectid' => $subjectid));
                break;
            case '88':
                //none
                break;

            default:
        }
        $content = $content_query->result_array();
        //load lectures and videos
        $lectures_query = $this->db->get_where('lecture', array('subjectid' => $subjectid));
        $lectures = $lectures_query->result_array();
        //get all students enrolled in the subject
        $studentlist_query = $this->db->get_where('student_subject', array('subjectid' => $subjectid));
        if ($studentlist_query->num_rows() > 0) {
            $student_list = $studentlist_query->result_array();
            foreach ($student_list as $student) {
                $student_accountid = $student['accountid'];
                $this->db->select_avg('student_grade');
                //get grades of student
                $grade_query = $this->db->get_where('student_grade', array('accountid' => $student_accountid, 'subjectid' => $subjectid));
                $grade = $grade_query->result_array();
                //get info of student
                $student_info_query = $this->db->get_where('member_info', array('accountid' => $student_accountid));
                $student_info = $student_info_query->result_array();
                //section of student
                //$section = $student['section'];array_push($student_info, $section);
                $section="Section"; //BUG
                array_push($student_info, $section);
                $row[] = array('grade' => $grade, 'info' => $student_info);
            }
            $result = array('content' => $content, 'student_list' => $row, 'lectures' => $lectures);
        } else {
            $result = array('content' => $content, 'student_list' => 'no student', 'lectures' => $lectures);
        }

        //                $result=array('content'=>$content,
        //                    'student_list'=>$student_list,
        //                    'student_info'=>$student_info,
        //                    'grade'=>$grade);

        if ($result != null) {
            return $result;
        }
    }

    function upload_subject($title,$filename)
    {
         $data = array(
            'lecture_name'      => $filename,
            'pdf_link'         => $title
        );
        
        return $this->db->insert('lecture', $data);
        

    }

}
