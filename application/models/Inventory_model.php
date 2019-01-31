<?php

Class Inventory_model extends CI_Model {

    public function __construct() {

        parent::__construct();
    }
    public function getVendorList()
    {
        $response = array();
        $where = array('trash'=>0,'vendor_status'=>1);
        $sql = $this->db->select("vendor_id,vendor_name,vendor_code")->from('rl_vendors_table')->where($where)->get();
        $count = $sql->num_rows();
        $resposne['code'] = ($count > 0) ? 200 : 204;
        $resposne['message'] = ($count > 0) ? 'Success' : 'Fail';
        $resposne['description'] = ($count > 0) ? "$count results found" : 'No results found..!';
        $resposne['vendor_list'] = ($count > 0) ? $sql->result() : array();
        return json_encode($resposne);
    }
}