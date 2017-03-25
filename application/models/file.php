<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class File extends CI_Model{
    /*
     * get rows from the files table
     */
    function getRows($grp_id, $params = array()){
        
       
        $this->db->select('*');
        $this->db->from('document');
        $this->db->where('group_id',$grp_id);
        $this->db->order_by('date_uploaded','desc');
        if(array_key_exists('file',$params) && !empty($params['file'])){
            $this->db->where('file',$params['file']);
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
        //return fetched data
        return $result;
    }

}