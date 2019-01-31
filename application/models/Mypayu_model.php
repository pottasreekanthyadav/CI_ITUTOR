<?php
class Mypayu_model extends CI_model
{
   public function payment_info_update($table,$where,$data){
   	 $this->db->where($where);
   	 $res=$this->db->update($table,$data);
   	 return $res;
   }
 public function add_payment_ifo($table,$data){
 	$res=$this->db->insert($table,$data);
 	return $res;
 }
}
