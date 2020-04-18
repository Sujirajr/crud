<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('max_execution_time', 0); 
ini_set('memory_limit','2048M');
class Common extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        authenticate();
        $this->load->helper('url');
        $this->load->model('Common_Model'); 
        $this->load->model('BasicSettings_Model');
        $this->load->model('Employee_type_model'); 
        $this->load->model('Common_pipeline_process_model'); 
        $this->load->model('Onboard_method_model'); 
        $this->load->model('Documentation_method_model'); 
        $this->load->model('Comon_pipeline_stage_model'); 
        $this->load->model('Common_pipeline_model'); 
        $this->load->model('Vacancyopened_Model');
        $this->load->model('Designation_category_model');
        $this->load->model('Completed_Recruitmentjobs_Model');
        $this->load->model('Completed_Onboardjobs_Model');
    }
    
    public function db_add_update()
    {
      if ($_REQUEST['What'] == "recruitment_method_save") {
          $this->BasicSettings_Model->recruitmethod_submit($_REQUEST);
      }
      if ($_REQUEST['What'] == "recruitmethod_update") {
          $this->BasicSettings_Model->recruitmethod_update($_REQUEST);
      }
      if ($_REQUEST['What'] == "recruitmethod_delete")
      {
          $this->BasicSettings_Model->recruitmethod_delete($_REQUEST);
      }

          if ($_REQUEST['What']=="employee_type_save")
          {
            $this->Employee_type_model->employee_type_detailsubmit($_REQUEST);
          }
          if ($_REQUEST['What']=="employee_type_edit")
          {
            
            $this->Employee_type_model->employee_type_detailupdate($_REQUEST);
          }
           if ($_REQUEST['What']=="employee_type_delete")
          {
            
            $this->Employee_type_model->employee_type_delete($_REQUEST);
          }
          if ($_REQUEST['What']=="common_pipeline_proces_save")
          {

            $this->Common_pipeline_process_model->common_pipeline_process_detailsubmit($_REQUEST);
           }

            if ($_REQUEST['What']=="common_pipeline_proces_update")
      {
        
        $this->Common_pipeline_process_model->common_pipeline_process_detailupdate($_REQUEST);
      }
        if ($_REQUEST['What']=="common_pipeline_process_delete")
      {
        
        $this->Common_pipeline_process_model->common_pipeline_process_delete($_REQUEST);
      }
      if ($_REQUEST['What']=="onboard_method_save")
      {
        $this->Onboard_method_model->onboard_method_detailsubmit($_REQUEST);
      }
      if ($_REQUEST['What']=="onboard_method_edit")
      {
        
        $this->Onboard_method_model->onboard_method_detailupdate($_REQUEST);
      }
        if ($_REQUEST['What']=="onboard_method_delete")
      {
        
        $this->Onboard_method_model->onboard_method_delete($_REQUEST);
      }
      
       if ($_REQUEST['What']=="documentation_method_save")
      {
        $this->Documentation_method_model->document_method_detailsubmit($_REQUEST);
      }
       if ($_REQUEST['What']=="documentation_method_edit")
      {
        $this->Documentation_method_model->document_method_detailupdate($_REQUEST);
      }
        if ($_REQUEST['What']=="document_method_delete")
      {
        
        $this->Documentation_method_model->document_method_delete($_REQUEST);
      }
        // Assign Recruitment Method Submit
        if ($_REQUEST['What'] == "assign_recruitmethod_save") {
            $this->Vacancyopened_Model->assign_recruitmethod_submit($_REQUEST);
        }
      
       if ($_REQUEST['What']=="common_pipeline_stage_save")
      {
       
        $this->Comon_pipeline_stage_model->Comon_pipeline_stage_detailsubmit($_REQUEST);
      }
         if ($_REQUEST['What']=="common_pipeline_stage_delete")
      {
        
        $this->Comon_pipeline_stage_model->Comon_pipeline_stage_delete($_REQUEST);
      }
      
        if ($_REQUEST['What']=="common_pipeline_save")
      {
     
        $this->Common_pipeline_model->Common_pipeline_detailsubmit($_REQUEST);
      }

         if ($_REQUEST['What']=="common_pipeline_delete")
      {
        
        $this->Common_pipeline_model->common_pipeline_delete($_REQUEST);
      }
       if ($_REQUEST['What']=="designation_category_save")
      {
       
        $this->Designation_category_model->designation_category_detailsubmit($_REQUEST);
      }
        if ($_REQUEST['What']=="designation_category_edit")
      {
        $this->Designation_category_model->designation_category_detailupdate($_REQUEST);
      }
      
      
        if ($_REQUEST['What']=="designation_category_delete")
      {
        
        $this->Designation_category_model->designation_category_delete($_REQUEST);
      }
      // Assign Onboard Process Submit
      if ($_REQUEST['What'] == "assign_onboardprocess_save") {
        $this->Completed_Recruitmentjobs_Model->assign_onboardprocess_submit($_REQUEST);
      }

      // Assign Documentation Process Submit
      if ($_REQUEST['What'] == "assign_documentnprocess_save") {
          $this->Completed_Onboardjobs_Model->assign_documentnprocess_submit($_REQUEST);
      }

      }

    /*******************************************************************************
    * Detail : This common function fetch data from dynamic tables with where condition AJAX DataTable Edit.[Parameters => $table(table name)]
    * Date   : 06-04-2020                                                         *
    *******************************************************************************/

     public function ajax_edit_data()
    {
     $result =$this->Common_Model->get_single_table_data($_REQUEST['table'],$_REQUEST['id']);
     echo json_encode($result);
    }
     public function designation_category_edit()
    {
     $result =$this->Designation_category_model->get_single_table_data($_REQUEST['table'],$_REQUEST['id']);
     echo json_encode($result);
    }
     public function common_pipeline_stage_edit_data()
    {
     $result =$this->Comon_pipeline_stage_model->get_single_table_data($_REQUEST['table'],$_REQUEST['id']);
     echo json_encode($result);
    }
    
     public function common_pipeline_stage_processedit_data()
    {
     $result =$this->Comon_pipeline_stage_model->get_stage_process_data($_REQUEST['table'],$_REQUEST['id']);
     echo json_encode($result);
    }
 
}
