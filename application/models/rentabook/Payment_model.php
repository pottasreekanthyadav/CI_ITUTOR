<?php
class Payment_model extends CI_model
{
	public function update_order($payment_type)
	{
		$uid=$this->session->userdata("user_id");
		$order_id=$this->session->userdata("ord_id");
		$res=$this->db->query("update rl_cart_tbl set order_id=$order_id,payment_type=$payment_type where user_id=$uid and cart_status=0");
		// if($res)
		// 	{
		// 	$sql_order=$this->db->query("update rl_book_orders_tbl set order_status=1,payment_type=$payment_type,confirmation=1 where user_id=$uid and order_status=0 and order_id=$order_id");
		//     return $sql_order;
		// 	}
		return $res;
	}
	public function update_cod_order($payment_type)
	{
		$uid=$this->session->userdata("user_id");
		$order_id=$this->session->userdata("ord_id");
		$res=$this->db->query("update rl_cart_tbl set cart_status=1,order_id=$order_id,payment_type=$payment_type where user_id=$uid and cart_status=0");
		if($res)
			{
			$sql_order=$this->db->query("update rl_book_orders_tbl set order_status=1,payment_type=$payment_type,confirmation=1 where user_id=$uid and order_status=0 and order_id=$order_id");

			//echo $sql_order;exit;
		    return 1;
			}
	}
}


?>