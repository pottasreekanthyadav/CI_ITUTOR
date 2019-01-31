<?php
class Shipping_model extends CI_model{
	public function user_adress($data){
		$output=$this->db->insert("rl_shipping_tbl",$data);
		return $output;
	}
	public function order_shipping($total_amt,$total_qty,$dis_count){
		$total=$this->session->userdata('alltotal');
		$qty=$total_qty;
		$tot_amt=$total_amt;
		$discount=$dis_count;
		$uid=$this->session->userdata('user_id');
		$ord_date=date('Y-m-d H:i:s');
		$this->db->query("insert into rl_book_orders_tbl(user_id,total_qty,subtotal_amt,discount_amt,total_amt,order_date) values($uid,$qty,$total,$discount,$tot_amt,'$ord_date')");
		$oid=$this->db->insert_id();
		$this->session->set_userdata("ord_id",$oid);
		return $oid;
	}
}

?>