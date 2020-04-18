<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Login_Model');
        $this->load->library('session');
        $this->load->library('encryption');
        
    }
     /*******************************************************************************
     * Author : Edwin                                                              *
     * Detail : Load Login View                                                    *
     * Date   : 08-02-2020                                                         *
     *******************************************************************************/
    public function index()
    {
        $this->load->view('login/login');
    }
     /*******************************************************************************
     * Author : Edwin                                                              *
     * Detail : Check Login and create Session Data
     * Date   : 08-02-2020                                                         *
     *******************************************************************************/
    public function loginaction()
    {
	       $username = $this->input->post('username');
          $password = md5($this->input->post('password'));
        
        $admin_details  = $this->Login_Model->login_admin($username, $password);
        if (empty($admin_details)) {
            return false;
            exit();
        } else {
            foreach ($admin_details as $key => $value) {
            $this->session->set_userdata("admin_id", $value->id);
            $this->session->set_userdata("username", $value->username);
            $this->session->set_userdata("first_name", $value->first_name);
            $this->session->set_userdata("last_name", $value->last_name);
            $this->session->set_userdata("language", $value->language);
            $this->session->set_userdata("admin_pic", $value->admin_pic); 
            $allprivilages = explode(',', $value->privilages);
            $this->session->set_userdata("privilages", $allprivilages);

            if(isset($value->branch_id) && !empty($value->branch_id))
            {
            $this->session->set_userdata("branch_id", $value->branch_id);
            }
            if(isset($value->department_id) && !empty($value->department_id))
            {
            $this->session->set_userdata("department_id", $value->department_id);
            }    
            if(isset($value->designation_id) && !empty($value->designation_id))
            {
            $this->session->set_userdata("designation_id", $value->designation_id);
            }    
             }
          echo json_encode("success");
          //print_r($this->session->all_userdata());
          exit();
              }
    }
    /*******************************************************************************
     * Author : Edwin                                                              *
     * Detail : Logout and Unset Session Data
     * Date   : 08-02-2020                                                         *
     *******************************************************************************/
    public function logoutaction()
    {   
    	foreach (array_keys($this->session->userdata) as $key)
        {
            $this->session->unset_userdata($key);
        }
        redirect(base_url());
    }
    
}