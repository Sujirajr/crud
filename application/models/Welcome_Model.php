<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   

class Welcome_Model extends CI_Model
{

    private $table = 'users_information';
    private $column_order = array(null, 'cust_type','cust_name','cust_add1','cust_add2','cust_country','cust_city','cust_region','cust_zip','cust_email','cust_officephone','cust_mobile','cust_fax','cust_website');
    private $column_search = array('cust_type','cust_name','cust_add1','cust_add2','cust_country','cust_city','cust_region','cust_zip','cust_email','cust_officephone','cust_mobile','cust_fax','cust_website');
    private $order = array('id' => 'DESC');

    
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

    /*******************************************************************************
     * Author : Bincy                                                              *
     * Detail : User Information deletion
     * Date   : 24-04-2020                                                         *
     *******************************************************************************/ 

    public function Userdetaildelete()
    {
        $data = array(
                'del_flag' => 0
        );

     $id=$this->input->post('id');
     $this->db->where('id', $id);
     $result=$this->db->update('users_information',$data);

    return $result;
    
    }

     /*******************************************************************************
     * Author : Bincy                                                              *
     * Detail : count the table for User Information 
     * Date   : 24-04-2020                                                         *
     *******************************************************************************/

      public function count_alls()
    {
        $this->db->from($this->table);
        $this->db->where('del_flag',1);
        return $this->db->count_all_results();
    }

     public   function count_filtered()
    {
        $this->_get_datatables_userdetails();
        $this->db->where('users_information.del_flag',1);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function get_userinformation_edit($id)
    {
        $this->db->select('*');
        $this->db->from('users_information');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    
    // public function user_information

    
    /*******************************************************************************
     * Author : Bincy                                                              *
     * Detail : get the details for User Information 
     * Date   : 24-04-2020                                                         *
     *******************************************************************************/

     public function get_userdetaillist_datatable()
    {

        $this->_get_datatables_userdetails();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $this->db->select('u.id,u.cust_type,u.cust_name,u.cust_add1,u.cust_add2,u.cust_country,u.cust_city,u.cust_region,u.cust_zip,u.cust_email,u.cust_officephone,u.cust_mobile,u.cust_fax,u.cust_website');
        $this->db->from('users_information as u');
       
        $this->db->where('u.del_flag',1);
        $query = $this->db->get();
        return $query->result();
    } 
     /*******************************************************************************
     * Author : Bincy                                                              *
     * Detail : update for User Information 
     * Date   : 24-04-2020                                                         *
     *******************************************************************************/

    public function user_updates(){
        $id              =$this->input->post('user_id');
        $cust_type       =$this->input->post('cust_type');
        $cust_name       =$this->input->post('cust_name');
        $cust_add1       =$this->input->post('cust_add1');
        $cust_add2       =$this->input->post('cust_add2');
        $cust_country    =$this->input->post('cust_country');
        $cust_city       =$this->input->post('cust_city');
        $cust_region     =$this->input->post('cust_region');
        $cust_zip        =$this->input->post('cust_zip');
        $cust_email      =$this->input->post('cust_email');
        $cust_officephone=$this->input->post('cust_officephone');
        $cust_mobile     =$this->input->post('cust_mobile');
        $cust_fax        =$this->input->post('cust_fax');
        $cust_website    =$this->input->post('cust_website');
        $this->db->set('cust_type', $cust_type);
        $this->db->set('cust_name', $cust_name);
        $this->db->set('cust_add1', $cust_add1);
        $this->db->set('cust_add2', $cust_add2);
        $this->db->set('cust_country', $cust_country);
        $this->db->set('cust_city', $cust_city);
        $this->db->set('cust_region', $cust_region);
        $this->db->set('cust_zip', $cust_zip);
        $this->db->set('cust_email', $cust_email);
        $this->db->set('cust_officephone', $cust_officephone);
        $this->db->set('cust_mobile', $cust_mobile);
        $this->db->set('cust_fax', $cust_fax);
        $this->db->set('cust_website', $cust_website);
        $this->db->where('id', $id);
        $result=$this->db->update('users_information');
        return $result; 
    }

    public function fetch_single_user($user_id)  
      {  
          $this->db->select("*");  

           $this->db->where("id", $user_id);  
           $query=$this->db->get('users_information');  
           return $query->result();  
      } 

    /*******************************************************************************
     * Author : Bincy                                                              *
     * Detail : User Information pagination
     * Date   : 24-04-2020                                                         *
     *******************************************************************************/

    public  function _get_datatables_userdetails()
    {
        if($this->input->post('cust_type'))
        {
            $this->db->where('cust_type', $this->input->post('cust_type'));
        }
        if($this->input->post('cust_name'))
        {
            $this->db->like('cust_name', $this->input->post('cust_name'));
        }
        if($this->input->post('cust_add1'))
        {
            $this->db->like('cust_add1', $this->input->post('cust_add1'));
        }
        if($this->input->post('cust_add2'))
        {
            $this->db->like('cust_add2', $this->input->post('cust_add2'));
        }
        if($this->input->post('cust_country'))
        {
            $this->db->like('cust_country', $this->input->post('cust_country'));
        }
        if($this->input->post('cust_city'))
        {
            $this->db->like('cust_city', $this->input->post('cust_city'));
        }
        if($this->input->post('cust_region'))
        {
            $this->db->like('cust_region', $this->input->post('cust_region'));
        }
        if($this->input->post('cust_zip'))
        {
            $this->db->like('cust_zip', $this->input->post('cust_zip'));
        }
        if($this->input->post('cust_email'))
        {
            $this->db->like('cust_email', $this->input->post('cust_email'));
        }
        if($this->input->post('cust_officephone'))
        {
            $this->db->like('cust_officephone', $this->input->post('cust_officephone'));
        }
           if($this->input->post('cust_mobile'))
        {
            $this->db->like('cust_mobile', $this->input->post('cust_mobile'));
        }
           if($this->input->post('cust_fax'))
        {
            $this->db->like('cust_fax', $this->input->post('cust_fax'));
        }
           if($this->input->post('cust_website'))
        {
            $this->db->like('cust_website', $this->input->post('cust_website'));
        }



        $this->db->from($this->table);
        $i = 0; 
        foreach ($this->column_search as $item) 
        {
            if($_POST['search']['value']) 
            {               
                if($i===0) // first loop
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); 
            }
            $i++;
        }       
        if(isset($_POST['order'])) { 
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if(isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
 
}

    /*******************************************************************************
     * Author : Bincy                                                              *
     * Detail : User Information save
     * Date   : 24-04-2020                                                         *
     *******************************************************************************/

      public function Userdetailsave(){
        $data  = array( 
                   'cust_type'        => $this->input->post('cust_type'), 
                   'cust_name'        => $this->input->post('cust_name'),        
                   'cust_add1'        => $this->input->post('cust_add1'),
                   'cust_add2'        => $this->input->post('cust_add2'), 
                   'cust_country'     => $this->input->post('cust_country'),        
                   'cust_city'        => $this->input->post('cust_city'),
                   'cust_region'      => $this->input->post('cust_region'), 
                   'cust_zip'         => $this->input->post('cust_zip'),        
                   'cust_email'       => $this->input->post('cust_email'),
                   'cust_officephone' => $this->input->post('cust_officephone'), 
                   'cust_mobile'      => $this->input->post('cust_mobile'),        
                   'cust_fax'         => $this->input->post('cust_fax'),
                  'cust_website'      => $this->input->post('cust_website')

                 );
        $result = $this->db->insert('users_information',$data);
        return $result;
    }



}