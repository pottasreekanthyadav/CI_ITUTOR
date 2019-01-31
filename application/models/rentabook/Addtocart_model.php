<?php
class Addtocart_model extends CI_model
{
   public function getStock($book_id){
        $this->db->select('stock');
        $this->db->from('rl_books_tbl');
        $this->db->where("book_id",$book_id);
        $res=$this->db->get();
        $row=$res->row();
   }
   public function getExistingQty(){
        $res = $this->db->select("qty")->from("rl_cart_tbl")->where('book_id',$book_id)->get();
        $qty = $res->row();
        return $qty;
   }    
   public function addtocart($book_id,$new_qty){
        //CHECKING BOOK IS THERE OR NOT
        $this->db->select('shipping_charge,selling_price,stock');
        $this->db->from('rl_books_tbl');
        $this->db->where("book_id",$book_id);
        $res=$this->db->get();
        $row=$res->row();
        //fetching book selling price and shipping charge from book table
        $book_selling_price=$row->selling_price;
        $book_shipping_charge=$row->shipping_charge;
        $book_stock = $row->stock;
        
        $uid=$this->session->userdata('user_id');
        $array=array('book_id'=>$book_id,'user_id'=>$uid,'cart_status'=>0);
        $this->db->select('book_id,qty');
        $this->db->from('rl_cart_tbl');
        $this->db->where($array);
        $cart_res=$this->db->get();
        $count=$cart_res->num_rows();
        if($count>0){
        //if book already available update qty and total
        $fetch_cart_data=$cart_res->row();
        $cart_qty=$fetch_cart_data->qty;
        $update_qty=$new_qty+$cart_qty;
        //total update insert into cart table
        $update_total=($update_qty*$book_selling_price)+($update_qty*$book_shipping_charge);
        $update_total_sp=$update_qty*$book_selling_price;
        $update_total_shipp=$update_qty*$book_shipping_charge;
            if($cart_qty < $book_stock){
                $update=$this->db->query("update rl_cart_tbl SET qty=$update_qty,total=$update_total ,total_sp=$update_total_sp,total_shipcharge=$update_total_shipp where book_id=$book_id and user_id=$uid and cart_status=0");
                if($update)
                    return true;
                else
                    return "not update";
            }
        }
        else{
             //if book not available in cart then adding book to rl_cart_tbl
            $total=($new_qty*$book_selling_price)+($new_qty*$book_shipping_charge);
            $total_selli_sp=$new_qty*$book_selling_price;
            $total_shipping=$new_qty*$book_shipping_charge;
            $uid=$this->session->userdata('user_id');
            $added_on=date('Y-m-d');
           if($cart_qty < $book_stock){
            $insert=$this->db->query("insert into rl_cart_tbl(book_id,user_id,qty,selling_price,total_sp,shipping_charge,total_shipcharge,total,added_on) values($book_id,$uid,$new_qty,$book_selling_price,$total_selli_sp,$book_shipping_charge,$total_shipping,$total,'$added_on')");
            if($insert)
                    return true;
            }
        }
   }
   
   public function total_amt()
        {
        $uid=$this->session->userdata('user_id');
        $this->db->select_sum('total');
        $this->db->from('rl_cart_tbl');
        $array=array('cart_status'=>0,'payment_status'=>0,'user_id'=>$uid);
        $this->db->where($array);
        $query=$this->db->get();
        $ret=$query->row();
        $this->session->set_userdata('alltotal',$ret->total);
        return $ret;
        }

   public function total_sellingprice()
  {
        $uid=$this->session->userdata('user_id');
        $this->db->select_sum('total_sp');
        $this->db->from('rl_cart_tbl');
        $array=array('cart_status'=>0,'user_id'=>$uid);
        $this->db->where($array);
        $query_s=$this->db->get();
        $ret_ship=$query_s->row();
        $this->session->set_userdata('totalsp',$ret_ship->total_sp);
        return $ret_ship;
  }

  public function total_shippingcharge()
  {
        $uid=$this->session->userdata('user_id');
        $this->db->select_sum('total_shipcharge');
        $this->db->from('rl_cart_tbl');
        $array=array('cart_status'=>0,'user_id'=>$uid);
        $this->db->where($array);
        $query=$this->db->get();
        $ret_sp_charge=$query->row();
        return $ret_sp_charge;
  }
 public function get_cart_count()
  {
        $uid=$this->session->userdata('user_id');
        $this->db->select_sum('qty');
        $this->db->from('rl_cart_tbl');
        $array=array('cart_status'=>0,'user_id'=>$uid);
        $this->db->where($array);
        $query=$this->db->get();
        $ret=$query->row();
        return $ret;
  }
  public function get_view_count()
  {
       $query=$this->db->query('select count(last_login_ip) as view from rl_users_tbl');
       return $query;
  }

  public function user_shipping()
    {
        $uid=$this->session->userdata('user_id');
        $this->db->select("*"); 
        $this->db->from("rl_users_tbl");
        $this->db->where("id",$uid);
        $res=$this->db->get();
        return $res;
     }
  public function get_publisher_auther($bookid)
  {
    //$query=$this->db->query("select i.author,i.publisher,i.isbn_number,b.title from  rl_inventory_tbl i inner join rl_books_tbl b on b.title=i.book_title");
    $this->db->select("i.author,i.publisher,i.isbn_number,b.title,b.book_id");
    $this->db->from("rl_inventory_tbl i");
    $this->db->join('rl_books_tbl b','b.title=i.book_title','inner');
    $where=array("book_id"=>$bookid,"inventory_status"=>1);
    $this->db->where($where);
    $query=$this->db->get();
    //$q=$query->row();
    return $query;
  }
  public function user_coupon($user_coupon)
    {
        $condition=array('code'=>$user_coupon,'status'=>1);
        $this->db->select("code,valid_from,valid_till,type,worth");
        $this->db->from("rl_book_coupons_tbl");
        $this->db->where($condition);
        $res=$this->db->get();
        return $res;
    }
    public function qty()
    {
        $uid=$this->session->userdata('user_id');
        $this->db->select_sum('qty');
        $this->db->from('rl_cart_tbl');
        $array=array('user_id'=>$uid,'cart_status'=>0);
        $this->db->where($array);
        $sum=$this->db->get();
        return $sum->row();
    }

    public function count_slider()
    {
        return $this->db->count_all("rl_book_slider_tbl");
    }
    public function count_checkout()
    {
        $uid=$this->session->userdata('user_id');
        $this->db->where("user_id",$uid);
        $this->db->count_all("rl_cart_tbl");
        //echo $this->db->last_query();
    }
    
    public function add_wishlist($bookid){
        $uid=$this->session->userdata("user_id");
        $date=date("Y-m-d");
        $res=$this->db->query("select book_id from rl_book_wishlist_tbl where book_id=$bookid and user_id=$uid");
        $count=$res->num_rows();
        if($count>0)
            $this->db->query("delete from rl_book_wishlist_tbl where book_id=$bookid and user_id=$uid");
        else
            $this->db->query("insert into rl_book_wishlist_tbl(book_id,user_id,added_on) values($bookid,$uid,$date)");
        return 1;
    }
}
?>