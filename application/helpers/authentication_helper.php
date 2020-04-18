 <?php 
    /*******************************************************************************
     * Author : Edwin                                                              *
     * Detail : Helper for Check session in all Controller & Functions
     * Date   : 08-02-2020                                                         *
     *******************************************************************************/
defined('BASEPATH') OR exit('No direct script access allowed');
function __construct()
    {
        $ci->load->database();
    }
function authenticate() {
    $ci =& get_instance();
    $admin_id=$ci->session->userdata('admin_id');
    $username=$ci->session->userdata('username'); 
    if(isset($admin_id) && !empty($admin_id) && isset($username) && !empty($username)) {
      return TRUE;
    } else{
       redirect('/login'); 
    }
   }


   function can($permission) {

    $ci =& get_instance();
    $privilages=$ci->session->userdata('privilages');
    // print_r($privilages);
    // exit();
       if(in_array($permission, $privilages)){
            return true;
            } else{
            return false;
            }

         }

  function is_employee() {
    $ci =& get_instance();
    $branch_id=$ci->session->userdata('branch_id');
    $department_id=$ci->session->userdata('department_id');
    $designation_id=$ci->session->userdata('designation_id');

    if(isset($branch_id) && !empty($branch_id) && isset($department_id) && !empty($department_id) && isset($designation_id) && !empty($designation_id)){
        return true;
    } else{
        return false;
    }
    }

  function get_branch() {
    $ci =& get_instance();
    $branch_id=$ci->session->userdata('branch_id');

    if(isset($branch_id) && !empty($branch_id)){
        return $branch_id;
    } else{
        return false;
    }
    }


  function get_department() {
    $ci =& get_instance();
    $department_id=$ci->session->userdata('department_id');

    if(isset($department_id) && !empty($department_id)){
        return $department_id;
    } else{
        return false;
    }
    }

  function get_designation() {
    $ci =& get_instance();
    $designation_id=$ci->session->userdata('designation_id');

    if(isset($designation_id) && !empty($designation_id)){
        return $designation_id;
    } else{
        return false;
    }
    }

    function is_assignee() {
       $ci =& get_instance();
       $assignee_id=$ci->session->userdata('admin_id');
       $ci->db->select('*');
       $ci->db->from('qpayroll_authorization_levels');
       $ci->db->where('qpayroll_authorization_levels.employee_id',$assignee_id);
       $query = $ci->db->get();
       $result = $query->result();
      if(count($result)>=1){
        return true;
      } else{
        return false;
      }
   
    }


    function is_salary_assignee() {
       $ci =& get_instance();
       $assignee_id=$ci->session->userdata('admin_id');
       $ci->db->select('*');
       $ci->db->from('qpayroll_authorization_levels');
       $ci->db->join('qpayroll_authorization_settings', 'qpayroll_authorization_levels.authorization_id = qpayroll_authorization_settings.id'); 
       $ci->db->where('qpayroll_authorization_settings.module_type','salary_revision');
    
       $ci->db->where('qpayroll_authorization_levels.employee_id',$assignee_id);
       $query = $ci->db->get();
       $result = $query->result();
      if(count($result)>=1){
        return true;
      } else{
        return false;
      }
   
    }


    function is_expense_assignee() {
       $ci =& get_instance();
       $assignee_id=$ci->session->userdata('admin_id');
       $ci->db->select('*');
       $ci->db->from('qpayroll_authorization_levels');
       $ci->db->join('qpayroll_authorization_settings', 'qpayroll_authorization_levels.authorization_id = qpayroll_authorization_settings.id'); 
       $ci->db->where('qpayroll_authorization_settings.module_type','expense_claim');
    
       $ci->db->where('qpayroll_authorization_levels.employee_id',$assignee_id);
       $query = $ci->db->get();
       $result = $query->result();
      if(count($result)>=1){
        return true;
      } else{
        return false;
      }
   
    }




    function is_cash_assignee() {
       $ci =& get_instance();
       $assignee_id=$ci->session->userdata('admin_id');
       $ci->db->select('*');
       $ci->db->from('qpayroll_authorization_levels');
       $ci->db->join('qpayroll_authorization_settings', 'qpayroll_authorization_levels.authorization_id = qpayroll_authorization_settings.id'); 
       $ci->db->where('qpayroll_authorization_settings.module_type','cash_advance');
    
       $ci->db->where('qpayroll_authorization_levels.employee_id',$assignee_id);
       $query = $ci->db->get();
       $result = $query->result();
      if(count($result)>=1){
        return true;
      } else{
        return false;
      }
   
    }



    function is_reimbursement_assignee() {
       $ci =& get_instance();
       $assignee_id=$ci->session->userdata('admin_id');
       $ci->db->select('*');
       $ci->db->from('qpayroll_authorization_levels');
       $ci->db->join('qpayroll_authorization_settings', 'qpayroll_authorization_levels.authorization_id = qpayroll_authorization_settings.id'); 
       $ci->db->where('qpayroll_authorization_settings.module_type','reimbursement');
    
       $ci->db->where('qpayroll_authorization_levels.employee_id',$assignee_id);
       $query = $ci->db->get();
       $result = $query->result();
      if(count($result)>=1){
        return true;
      } else{
        return false;
      }
   
    }
    

    function is_recruitment_assignee() {
       $ci =& get_instance();
       $assignee_id=$ci->session->userdata('admin_id');
       $ci->db->select('*');
       $ci->db->from('qpayroll_authorization_levels');
       $ci->db->join('qpayroll_authorization_settings', 'qpayroll_authorization_levels.authorization_id = qpayroll_authorization_settings.id'); 
       $ci->db->where('qpayroll_authorization_settings.module_type','recruitment');
       $ci->db->where('qpayroll_authorization_levels.employee_id',$assignee_id);
       $query = $ci->db->get();
       $result = $query->result();
      if(count($result)>=1){
        return true;
      } else{
        return false;
      }
   
    }


     function is_show_guide() {
       $ci =& get_instance();
       $employee_id=$ci->session->userdata('admin_id');
       $ci->db->select('*');
       $ci->db->from('qpayroll_general_setting');
       $ci->db->where('qpayroll_general_setting.employee_id',$employee_id);
       $ci->db->where('qpayroll_general_setting.field_name','user_guide');
       $ci->db->where('qpayroll_general_setting.field_value','1');
       $query = $ci->db->get();
       $result = $query->result();
      if(count($result)>=1){
        return true;
      } else{
        return false;
      }
   
    }
