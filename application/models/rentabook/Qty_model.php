<?php
class Qty_model extends CI_model
{
  public function fetch_dec_qty($cart_id)
  {
    //$que=$this->db->query("select selling_price,shipping_charge,qty from rl_cart_tbl where cart_id=$cart_id");
    $this->db->select('selling_price,shipping_charge,qty');
    $this->db->from('rl_cart_tbl');
    $condition=array("cart_id"=>$cart_id);
    $this->db->where($condition);
    $que=$this->db->get();
    return $que;
    echo $this->db->last_query();
  }

  public function update_dec_qty($new_total,$new_qty,$cart_id,$new_total_selling,$new_total_shipping)
  {
    $sql_update="update rl_cart_tbl set qty=$new_qty,total=$new_total,total_sp=$new_total_selling,total_shipcharge=$new_total_shipping where cart_id=$cart_id";
   return $this->db->query($sql_update);
  }

  public function fetch_inc_qty($cart_id)
  {
    $this->db->select('c.selling_price,c.shipping_charge,c.qty,b.stock');
    $this->db->from('rl_cart_tbl c');
    $this->db->join('rl_books_tbl b','b.book_id=c.book_id','inner');
    $condition=array("cart_id"=>$cart_id);
    $this->db->where($condition);
    return $this->db->get();
  }

  public function update_inc_qty($new_total,$new_qty,$cart_id,$new_total_sell,$new_total_shipp)
  {
    $sql_update="update rl_cart_tbl set qty=$new_qty,total=$new_total,total_sp=$new_total_sell,total_shipcharge=$new_total_shipp where cart_id=$cart_id";
   return $this->db->query($sql_update);
  }
}


?>