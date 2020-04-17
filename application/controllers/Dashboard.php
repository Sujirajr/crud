<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        authenticate();
        $this->load->helper('url');        
    }
     /*******************************************************************************
     * Author : Edwin                                                              *
     * Detail : Load Dashboard View         
     * Date   : 08-02-2020                                                         *
     *******************************************************************************/
    public function index()
    {
        $data['title'] = "Dashboard";
        $this->load->view('dashboard/dashboard', $data);
    }
   
    public function process()
    {
        $data['title'] = "Process Update";
        $this->load->view('process', $data);
    }
     public function board()
    {
        $data['title'] = "Process Update";
        $this->load->view('board', $data);
    }
}