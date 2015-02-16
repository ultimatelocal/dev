<?php

if (!defined('BASEPATH'))
    exit('No direct access is allowed!');

class User_Model extends CI_Model {

    function __construct() {
        $this->load->database();
    }

    function checkLogin_model($username, $password) {
        $this->db->select('*');
        $this->db->from('account');
        $this->db->where(array('username' => $username, 'password' => $password));
        $this->db->join('member_info', 'member_info.accountid = account.accountid', 'inner');
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    function validate_model($field, $tbl) {
        $this->db->select('*');
        $this->db->from('account');
        $this->db->where($tbl, $field);
        $check = $this->db->get();

        if ($check->num_rows() > 0) {
            return $check->row();
        }
    }

    function register_model($accountid, $username, $password, $email, $firstName, $lastName, $middleName, $birthDate, $gender, $address, $contactNo, $guardianName, $guardiancontactNo, $guardianAddress) {
        //1 = instructor
        //2 = student
        //88 = admin
        $sql = "INSERT INTO `account`(`accountid`, `userlvl`, `username`, `password`, 
            `email`, `contactno`, `account_status`)
        VALUES (" . $this->db->escape($system_id) . ", " . $this->db->escape('2') . ", " .
                $this->db->escape($username) . ", " . $this->db->escape($password) . ", " .
                $this->db->escape($email) . ", " . $this->db->escape($phoneNumber) . ", " .
                $this->db->escape('Active') . ")";
        $this->db->query($sql);
        $rs1 = $this->db->affected_rows();

        $sql2 = "INSERT INTO `member_info`(`accountid`, "
                . "`accountid`, `user_lastname`, `user_firstname`, "
                . "`user_middlename`, `user_bday`, `gender`, `address`, "
                . "`user_email`, `user_mobileno`, `guardname`, "
                . "`guardmobno`, `guardian_address`, `user_pic`) VALUES "
                . "(" . $this->db->escape($accountid) . ", " . $this->db->escape($accountid) . ", " .
                $this->db->escape($lastName) . ", " . $this->db->escape($firstName) . ", " .
                $this->db->escape($middleName) . ", " . $this->db->escape($birthDate) . ", " .
                $this->db->escape($gender) . ", " . $this->db->escape($address) . ", " .
                $this->db->escape($email) . ", " . $this->db->escape($contactNo) . ", " .
                $this->db->escape($guardianName) . ", " . $this->db->escape($guardianAddress) . ", " .
                $this->db->escape($guardiancontactNo) . ", " . $this->db->escape('profile/profile.png') . ")";
        $this->db->query($sql2);
        $rs2 = $this->db->affected_rows();

        $result = array(
            'result1' => $rs1,
            'result2' => $rs2
        );
//        if(($rs1=='1')&& ($rs2=='1')) {
//            $result=array('result1'=>true,
//                          'result2'=>true);
//            
//        } else {
//            $result=array('result1'=>false,
//                          'result2'=>false);
//        }
        return $result;
    }

}
