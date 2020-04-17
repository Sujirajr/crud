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

    public function crud()
  {
    
        $data['title'] = "Survey Responses";
$this->load->view('skeleton_view', $data);
  }
  
}
