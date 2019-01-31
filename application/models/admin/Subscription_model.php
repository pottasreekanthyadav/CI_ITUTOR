<?php
class Subscription_model extends CI_model
{
    public function update_subscription_get($table,$where){
    	$this->db->where($where);
         $res=$this->db->get($table);
         $data['result']=$res->row();
        $data['cls']=$this->db->select('category_id,category_name')->get('rl_category_tbl')->result();
        // print_r($data['cls']);exit;
        $data['type']=$this->db->get('rl_tutor_types_main_tbl')->result(); return $data;
    } 
    public function update_subscription($table,$where,$data){
    	$this->db->where($where);
    	$res=$this->db->update($table,$data);
    	return $res;
    }

  
}
?>

	