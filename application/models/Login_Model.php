<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model
{
    
    /*******************************************************************************
     * Author : Edwin                                                              *
     * Detail : Check Login
     * Date   : 08-02-2020                                                         *
     *******************************************************************************/
    function login_admin($username, $password)
    {
        $this->db->select('*');
        $this->db->from('qpayroll_admins');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('del_flag', 1);
        $this->db->limit(1);
        $query = $this->db->get();
        if(empty($query->result())){
        $this->db->select('*');
        $this->db->from('qpayroll_employees');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('employee_status', 1);
        $this->db->limit(1);
        $query1 = $this->db->get();
        return $query1->result();
        }else{
         return $query->result();
        }
    }

    
   
}