<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Image_model extends CI_Model{
    
    function __construct() {
    //     Set table name
        $this->table = 'web_desc_home_banners';
    }

    Public function insert($data = array()) {
        if (!empty($data)) {
            // insert data
            $insert = $this->db->insert($this->table, $data);
            
            return $insert?$this->db->insert_id():false;
        }
        else {
            false;
        }
    }

    Public function update($data, $id) {
        if (!empty($data) && !empty($id)) {
            // update model
            $update = $this->db->update($this->table, $data, array('id' => $id));

            return $update?true:false;
        }
        else{
            return false;
        }
    }
    // get List
    public function getImgList() {        
        $this->db->select(array('e.id', 'e.header_title','e.description','e.cta_text', 'e.is_promo', 'e.promo_start_at', 'e.promo_end_at', 'header_url', 'cta_url', 'bg_desk_url', 'bg_mob_url', 'display_order'));
        $this->db->from('web_desc_home_banners e');  
        $this->db->order_by('e.id', 'DESC');     
        $query = $this->db->get();
        return $query->result_array();
        }

    // delete image
    public function delete($id){
        $delete = $this->db->delete($this->table, array('id' => $id));

        return $delete?true:false;
    }

    // ////// Get row details
    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from($this->table);
        
        if(array_key_exists("conditions", $params)){
            foreach($params['conditions'] as $key => $val){
                $this->db->where($key, $val);
            }
        }
        
        if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
            $result = $this->db->count_all_results();
        }else{
            if(array_key_exists("id", $params)){
                $this->db->where('id', $params['id']);
                $query = $this->db->get();
                $result = $query->row_array();
            }else{
                $this->db->order_by('header_title', 'asc');
                if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                    $this->db->limit($params['limit'],$params['start']);
                }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                    $this->db->limit($params['limit']);
                }
                
                $query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }
        
        // Return fetched data
        return $result;
    } 


}

