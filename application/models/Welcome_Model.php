<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   

class Welcome_Model extends CI_Model
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /*******************************************************************************
     * Author : Edwin                                                              *
     * Detail : This common function fetch data from dynamic tables.[Parameters => $table(table name)]
     * Date   : 09-02-2020                                                         *
     *******************************************************************************/
    public function get_statusto_do()
     {
        $this->db->select('key_name as id,title,class');
        $this->db->from('qrecruitment_process_status');
        $query = $this->db->get();
       
      

    $return = array();

    foreach ($query->result() as $category)
    {
        $return[$category->id] = $category;
        $return[$category->id]->item = $this->get_allprocess(); 
    }
    $return = $return['to_do'];

    return $return;



     }


     public function get_statusin_progress()
     {
        $this->db->select('key_name as id,title,class');
        $this->db->from('qrecruitment_process_status');
        $query = $this->db->get();
       
      

    $return = array();

    foreach ($query->result() as $category)
    {
        $return[$category->id] = $category;
        $return[$category->id]->item = $this->get_allprocess(); 
    }
    $return = $return['in_progress'];

    return $return;



     }

public function get_statusdone()
     {
        $this->db->select('key_name as id,title,class');
        $this->db->from('qrecruitment_process_status');
        $query = $this->db->get();
       
      

    $return = array();

    foreach ($query->result() as $category)
    {
        $return[$category->id] = $category;
        $return[$category->id]->item = $this->get_allprocess(); 
    }
    $return = $return['done'];

    return $return;



     }

       public function get_allprocess()
     {
        $this->db->select('*');
        $this->db->from('test_pipeline_process');
        $query = $this->db->get();
        return $query->result();
     }


    /*******************************************************************************
     * Author : Edwin                                                              *
     * Detail : This common function fetch data from dynamic tables with where condition.[Parameters => $table(table name)]
     * Date   : 10-02-2020                                                         *
     *******************************************************************************/
    public function get_single_table_data($table,$id)
     {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('id',$id);
        $this->db->where('del_flag',1);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
     }

    public function get_user_data()
    {

    }

    public function insert_update_user()
    {
        $ajax_data = json_decode(file_get_contents('php://input'), true);
        $name       = $db->real_escape_string($ajax_data['name']);
        $email      = $db->real_escape_string($ajax_data['email']);
        $position   = $db->real_escape_string($ajax_data['position']);
        $date       = new DateTime($db->real_escape_string($ajax_data['dob']));
        $user_dob   = $date->format('Y-m-d');
        $id         = (@$ajax_data['id']!="") ? $db->real_escape_string(@$ajax_data['id']) : '';
        if($id!="") :
            $query = " UPDATE users_information SET name= '$name', email='$email',
             position='$position',dob='$user_dob' WHERE id=$id";
            $msg = "Successfully Updated Your Record";
        else: 
            $query = " INSERT INTO users_information SET name= '$name', email='$email',
             position='$position',dob='$user_dob'";
            $msg = "Successfully Inserted Your Record";         
        endif;
        $sql = $db->query($query);
        echo $msg;

    }     
    
 
}