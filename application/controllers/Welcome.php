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
     * Detail :load View page for User Information 
     * Date   : 24-04-2020                                                         *
     *******************************************************************************/
    public function crud()
  {
        $data['title'] = "User Details";
        $this->load->view('skeleton_view', $data);
   }
    
     /*******************************************************************************
     *                                                              *
     * Detail : Table listing User Information 
     * Date   : 24-04-2020                                                         *
     *******************************************************************************/

  public function userdetails_lists()
  {
        $list = $this->Welcome_Model->get_userdetaillist_datatable();
        $data = array(); 
        $no   = $_POST['start'];
        $i    = 0;
        $row  = array();

        foreach ($list as $user_detail) {
            
         $no++;
            
            $row[0] = $no;
            $row[1] = '<span style="overflow: visible; position: relative; width: 80px;">
                        <div class="dropdown"><a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                  
                        <i class="flaticon-more-1"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                        <ul class="kt-nav">

                        <a href="#"><li class="kt-nav__item">
                        <span class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-contract"></i>
                        <span class="kt-nav__link-text " data-id="'.$user_detail->id.'">View</span>
                        </span></li></a>

                        <a href="#?id='.$user_detail->id.'"><li class="kt-nav__item">
                        <span class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-contract"></i>
                        <span class="kt-nav__link-text Customerdetail_update" data-id="'.$user_detail->id.'">Edit</span>
                        </span></li></a>
                    
                          <li class="kt-nav__item">
                        <span class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-trash"></i>                                               
                        <span class="kt-nav__link-text kt_del_usersinformation" id='.$user_detail->id.' data-id='.$user_detail->id.'>Delete</span></span></li>

                       </ul></div></div></span>';
            $row[2]  = $user_detail->cust_type;
            $row[3]  = $user_detail->cust_name;
            $row[4]  = $user_detail->cust_add1;
            $row[5]  = $user_detail->cust_add2;
            $row[6]  = $user_detail->cust_country;
            $row[7]  = $user_detail->cust_city;
            $row[8]  = $user_detail->cust_region;           
            $row[9]  = $user_detail->cust_zip;
            $row[10] = $user_detail->cust_email;
            $row[11] = $user_detail->cust_officephone;
            $row[12] = $user_detail->cust_mobile;
            $row[13] = $user_detail->cust_fax;
            $row[14] = $user_detail->cust_website;                     
            
            $data[$i] = $row;
            $i++;

        }

        $output = array(
                    "draw"                => $_POST['draw'],
                    "recordsTotal"        => $this->Welcome_Model->count_alls(),
                        "recordsFiltered" => $this->Welcome_Model->count_filtered(),
                    "data"                => $data,
                );
        echo json_encode($output);
  }
     /*******************************************************************************
     * Author : Bincy                                                              *
     * Detail : Show table datas in User Information 
     * Date   : 24-04-2020                                                         *
     *******************************************************************************/

   public function user_information_click()
   {
        $output = array();  
        $data   =$this->Welcome_Model->fetch_single_user($_POST['user_id']);
        echo json_encode($data);
   }


     /*******************************************************************************
     * Author : Bincy                                                              *
     * Detail : Save datas  for User Information table
     * Date   : 24-04-2020                                                         *
     *******************************************************************************/
    public function userinformation_save()
    {
    $data=$this->Welcome_Model->Userdetailsave();
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
