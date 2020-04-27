<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


function __construct()
    {
        parent::__construct();
        //authenticate();
        $this->load->helper('url');
        $this->load->model('Welcome_Model'); 
         
    }
  
  public function index()
  {
    
        $data['st'] =$this->test();
        $data['title'] = "Process Update";
        $this->load->view('pro', $data);
  }
  public function test(){
         
          $view_data["to_do"] = $this->Welcome_Model->get_statusto_do();
          $view_data["in_progress"] = $this->Welcome_Model->get_statusin_progress();
          $view_data["done"] = $this->Welcome_Model->get_statusdone();
          $newview_data = array_merge(array($view_data["to_do"]), array($view_data["in_progress"]), array($view_data["done"]));
         return json_encode($newview_data);



  }
  public function employee()
  {
    
        $data['title'] = "Process Update";
        $this->load->view('employee_crud/employee_details', $data);
  }
     /*******************************************************************************
     * Author : Bincy                                                              *
     * Detail :View page for User Information 
     * Date   : 24-04-2020                                                         *
     *******************************************************************************/
    public function crud()
  {
    
        $data['title'] = "User Details";
        $this->load->view('skeleton_view', $data);
  }
    /*******************************************************************************
   * Author : Bincy                                                     *
     * Detail :View page for User Information 
     * Date   : 24-04-2020                                                         *
     *******************************************************************************/

   public function userinformation_edit()
   {
        $id=$this->input->post('id');
        $data['title'] = "Edit User Information";
        $data['user_information_edit'] =$this->Welcome_Model->get_userinformation_edit($id);
//         print_r($data['user_information_edit'] );
// exit();
        
     $this->load->view('userinformation_edit', $data);
   }

     /*******************************************************************************
     * Author : Bincy                                                              *
     * Detail : Table listing User Information 
     * Date   : 24-04-2020                                                         *
     *******************************************************************************/

  public function userdetails_lists()
  {
   $list = $this->Welcome_Model->get_userdetaillist_datatable();
        $data = array(); 
        $no = $_POST['start'];
        foreach ($list as $user_detail) {
            $no++;
            $row   = array();
            $row[] = $no;
            $row[] = $user_detail->cust_type;
            $row[] = $user_detail->cust_name;
            $row[] = $user_detail->cust_add1;
            $row[] = $user_detail->cust_add2;
            $row[] = $user_detail->cust_country;
            $row[] = $user_detail->cust_city;
            $row[] = $user_detail->cust_region;           
            $row[] = $user_detail->cust_zip;
            $row[] = $user_detail->cust_email;
            $row[] = $user_detail->cust_officephone;
            $row[] = $user_detail->cust_mobile;
            $row[] = $user_detail->cust_fax;
            $row[] = $user_detail->cust_website;                     
            $row[] = '<span style="overflow: visible; position: relative;    width: 80px;">
                        <div class="dropdown"><a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                  
                        <i class="flaticon-more-1"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                        <ul class="kt-nav">

                        <a href="'.base_url().'welcome/userinformation_edit?id='.$user_detail->id.'"><li class="kt-nav__item">
                        <span class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-contract"></i>
                        <span class="kt-nav__link-text">Edit</span>
                        </span></li></a>
                    
                          
                    
                        <li class="kt-nav__item">
                        <span class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-trash"></i>                                               
                        <span class="kt-nav__link-text kt_del_usersinformation" id='.$user_detail->id.' data-id='.$user_detail->id.'>Delete</span></span></li>

                       </ul></div></div></span>';
                      $data[] = $row;
        }

        $output = array(
                    "draw"            => $_POST['draw'],
                    "recordsTotal"    => $this->Welcome_Model->count_alls(),
                        "recordsFiltered" => $this->Welcome_Model->count_filtered(),
                    "data" => $data,
                );
        echo json_encode($output);
  }

     /*******************************************************************************
     * Author : Bincy                                                              *
     * Detail : Save table for User Information 
     * Date   : 24-04-2020                                                         *
     *******************************************************************************/
    public function userinformation_save()
    {
    $data=$this->Welcome_Model->Userdetailsave();
    echo json_encode($data);
    }

     /*******************************************************************************
     * Author : Bincy                                                              *
     * Detail : update table for User Information 
     * Date   : 24-04-2020                                                         *
     *******************************************************************************/

    public function user_information_edit()
  {
    $data=$this->Welcome_Model->user_updates();
    echo json_encode($data);
  }
    /*******************************************************************************
     * Author : Bincy                                                              *
     * Detail :deletion for User Information 
     * Date   : 24-04-2020                                                         *
     *******************************************************************************/
  
   public function user_delete()
  {
    $data=$this->Welcome_Model->Userdetaildelete();
    echo json_encode($data);
  }
  
  public function get_users()
  {
     
     $users_information = array();

    if ($result = $this->db->query("SELECT * FROM users_information")) {

    foreach ($result->result() as $key => $value) {
        $users_information[] = $value;
    }
      echo json_encode($users_information);
    }

  }

  public function add_update_user()
  {
     
    $view_data["done"] = $this->Welcome_Model->insert_update_user(); 


  }

  
}
