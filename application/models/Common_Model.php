<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   

class Common_Model extends CI_Model
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
    public function get_all_table_data($table)
     {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('del_flag',1);
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
    
 
}