<?php 
class Order_details_model extends CI_model{
	public function get_shipping_details($oid){
		$this->db->where('order_id',$oid);
		$this->db->select('order_id,name,mobileno,pincode,address,district,state,locality,landmark,almobile');
		$this->db->from('rl_shipping_tbl');
		return $this->db->get();
		//echo $this->db->last_query();
	}
	public function get_order_details($oid){
		$condition = array('order_id'=>$oid,'confirmation'=>1);
		$this->db->select('order_id,order_date');
		$this->db->where($condition);
		$res = $this->db->get('rl_book_orders_tbl');
		return $res;
	}
	public function get_book_details($oid){
		$this->db->select('books.book_id,books.title,books.selling_price,cart.total_shipcharge,cart.qty,cart.total');
		$this->db->from('rl_cart_tbl cart');
		$this->db->where('cart.order_id',$oid);
		$this->db->join('rl_books_tbl books','cart.book_id = books.book_id','inner');
		$this->db->order_by('books.title');
		$result = $this->db->get();
		//echo $this->db->last_query();
		return $result;
	}
	public function get_total($oid){
		$condition = array('order_id'=>$oid,'confirmation'=>1);
		$this->db->select('discount_amt,total_amt');
		$this->db->from('rl_book_orders_tbl');
		$this->db->where($condition);
		$res = $this->db->get();
		return $res;
	}
}

 ?>