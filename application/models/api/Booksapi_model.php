<?php
class Booksapi_model extends CI_model
{
	   public function __construct() {
        parent::__construct();
        date_default_timezone_set('asia/kolkata');
        $this->date=date('Y-m-d');
    }
/*Below are the Methods for books module*/
public function get_all_books($cols,$table,$where)
{
	//get all books product from database
    $this->db->select($cols);
    $this->db->from($table);
    $this->db->where($where);
    $res = $this->db->get();
    $count = $res->num_rows();	  
	 if($count > 0){
	 	return $res->result();
	 }
   else{
    return null;//if ->row() then use (object) null
  }
}
public function get_cate_subcat_books()
	{
		$this->db->select('category_id,title');
		$this->db->from('rl_book_categories_tbl');
		$this->db->where('category_status',1);
		$res=$this->db->get();
		$final=array();
		if($res->num_rows()>0)
		{
			foreach($res->result() as $row)
			{
				$this->db->select('subcategory_id,title');
                $this->db->from('rl_book_subcategories_tbl');
                $this->db->where('category_id',$row->category_id);
                $q=$this->db->get();
                if($q->num_rows()>0)
                {
                	$row->subcategory_name=$q->result();
                }
                array_push($final, $row);
			} 
		}
		return $final;
	}
	public function get_cat()
	{
		$data = $this->db->get("rl_book_categories_tbl");
		return $data;

	}
public function get_all_products($pid)
{
	//get product details from database
	$this->db->select("*");
	$this->db->from("rl_books_tbl");
	$this->db->where("book_id",$pid);
	$data = $this->db->get();	   
	return $data;
}

	public function get_total_record()
   {
    $res=$this->db->get("rl_books_tbl");
    $count=$res->num_rows();
    return $count;
   }
   public function get_limit_books($nr,$si)
   {
    $this->db->limit($nr,$si);
    $res=$this->db->get("rl_books_tbl");
    return $res;
   }
   
	public function search_record($str)
    {
      $this->db->select("*");
      $this->db->from("rl_books_tbl");
      $this->db->like('title',$str,'after');
      $res=$this->db->get();
      return $res;
    }
    public function wishlist($bookid)
    {

    	$uid=$this->session->userdata("user_id");
    	$res=$this->db->query("select wish_id from rl_book_wishlist_tbl where user_id=$uid and book_id=$bookid");
    	$count=$res->num_rows();
    	if($count==0){
    		//echo $bookid;
    		$date=date("Y-m-d");
    		$res=$this->db->query("insert into rl_book_wishlist_tbl (book_id,user_id,added_on) values($bookid,$uid,$date)");
    		
    	}
    	else
    	{
    		$this->db->query("delete from rl_book_wishlist_tbl where book_id=$bookid and user_id=$uid");
    		
    	}
    }
    public function cart_delete($bookid)
    {
    	$uid=$this->session->userdata("user_id");
      return $this->db->query("delete from rl_cart_tbl where book_id=$bookid and user_id=$uid");

    }
    public function get_slider(){
   	$this->db->select('slider_id,slider_title,slider_image,slider_url,slider_description');
   	$this->db->from('rl_book_slider_tbl');
   	$this->db->where('slider_status',1);
   	$res = $this->db->get();
    $count = $res->num_rows();
    if($count>0)
   	   return $res->result();
    else
       return null;
   }
   public function getBookDetails($bookid){
     $res = $this->db->select('title,author,publisher,isbn,description')
                     ->from('rl_books_tbl')
                     ->where('book_id',$bookid)
                     ->order_by('title')
                     ->get();
     $count=$res->num_rows();
     if($count==1){
      $book_data = $res->row();
      return $book_data;
     }
     else{
      return (object) null;
     }

   }
  public function bookview_ip($ip,$bookid){
  	$data = array('book_id'=>$bookid,'user_ip'=>$ip);
  	$result_views = $this->db->select('bookviews_id')->from('rl_bookviews_tbl')->where($data)->get();
    $count = $result_views->num_rows();
  	if($count==0){
  		$res = $this->db->insert('rl_bookviews_tbl',$data);
  		if($res){
  			return $count;
  		}
  		else
  			return $count;
  	}
  	else{
  		return $count;
  	}
   }

  public function total_amt($uid){
    $array=array('cart_status'=>0,'payment_status'=>0,'user_id'=>$uid);
    $res = $this->db->select_sum('total')->from('rl_cart_tbl')->where($array)->get();
    $count = $res->num_rows();
    if($count == 1){
      $ret=$res->row();
      return $ret;
    }else{
      return (object) null;
    }
  }
  public function total_sellingprice($uid){
    $array=array('cart_status'=>0,'user_id'=>$uid);
    $res = $this->db->select_sum('total_sp')->from('rl_cart_tbl')->where($array)->get();
    $count = $res->num_rows();
    if($count == 1){
      $total_selling_price = $res->row();
      return $total_selling_price;
    }else{
      return (object) null;
    }
  }
  public function get_cart_count($uid){
    $array=array('cart_status'=>0,'user_id'=>$uid);
    $res = $this->db->select_sum('qty')->from('rl_cart_tbl')->where($array)->get();
    $count = $res->num_rows(); 
     if($count == 1){
      $cart_count=$res->row();
      return $cart_count;
  }else{
    return (object) null;
  }
}
  public function total_shippingcharge($uid){
    $array=array('cart_status'=>0,'user_id'=>$uid);
    $result = $this->db->select_sum('total_shipcharge')->from('rl_cart_tbl')->where($array)->get();
    $count = $result->num_rows();
    if($count == 1){
      $ret_sp_charge=$result->row();
      return $ret_sp_charge;
    }else{
      return (object) null;
    }
  }    

  public function data_fetch_checkout($uid){
    $condition = array("cart.user_id"=>$uid,"cart.cart_status"=>0);
    $result = $this->db->select("book.book_id,book.title,book.image,book.price,book.stock,cart.qty,cart.total,cart.cart_id,cart.selling_price")
                        ->from("rl_cart_tbl cart")
                        ->where($condition)
                        ->join('rl_books_tbl book','book.book_id=cart.book_id','inner')
                        ->order_by('cart.cart_id','desc')
                        ->get();
    $count = $result->num_rows();
    if($count>0){
      $res = $result->result(); 
      return $res;
    }else{
      return null;
    } 
  }
  public function getSearchData($searchstr){
    $search_data = $this->db->select('book_id,title,image')
              ->from('rl_books_tbl')
              ->like('title',$searchstr,'both')
              ->or_like('author',$searchstr,'both')
              ->get();
    $count = $search_data->num_rows();
    if($count>0){
      return $search_data->result();  
    }
    else{
      return null;
    }
  }

  public function quantityIncrease($cartid){
      $cart_result = $this->db->select('qty,book_id,selling_price,shipping_charge')
                              ->from('rl_cart_tbl')
                              ->where('cart_id',$cartid)
                              ->get()
                              ->row();
      $book_id = $cart_result->book_id;
      $quantity = $cart_result->qty;
      $stock_result = $this->db->select('stock')
                               ->from('rl_books_tbl')
                               ->where('book_id',$book_id)
                               ->get()
                               ->row();
      $bookstock = $stock_result->stock;
      if($bookstock > $quantity){
        $update['qty'] = $quantity+1;
        $newQty = $update['qty'];
        $update['total_sp'] = $newQty * $cart_result->selling_price;
        $update['total_shipcharge'] = $newQty * $cart_result->shipping_charge;
        $update['total'] = ($newQty * $cart_result->shipping_charge) + ($newQty * $cart_result->selling_price);
        $update_result = $this->db->where('cart_id',$cartid)->set($update)->update('rl_cart_tbl');
             // echo $this->db->last_query();exit;
        if($update_result){
          return 1;
        }
        else{
          return 0;
        }
      }
    }

    public function quantityDecrease($cartid){
      $cart_result = $this->db->select('qty,book_id,selling_price,shipping_charge')
                              ->from('rl_cart_tbl')
                              ->where('cart_id',$cartid)
                              ->get()
                              ->row();
      $book_id = $cart_result->book_id;
      $quantity = $cart_result->qty;
      $stock_result = $this->db->select('stock')
                               ->from('rl_books_tbl')
                               ->where('book_id',$book_id)
                               ->get()
                               ->row();
      $bookstock = $stock_result->stock;
      if($quantity>1){
        $update['qty'] = $quantity-1;
        $newQty = $update['qty'];
        $update['total_sp'] = $newQty * $cart_result->selling_price;
        $update['total_shipcharge'] = $newQty * $cart_result->shipping_charge;
        $update['total'] = ($newQty * $cart_result->shipping_charge) + ($newQty * $cart_result->selling_price);
        $update_result = $this->db->where('cart_id',$cartid)->set($update)->update('rl_cart_tbl');
             // echo $this->db->last_query();exit;
        if($update_result){
          return 1;
        }
        else{
          return 0;
        }
      }
    }

    public function addBookToCart($bookid){
      $row=$this->db->select('shipping_charge,selling_price,stock')
               ->from('rl_books_tbl')
               ->where("book_id",$book_id)
               ->get()->row();
      $book_selling_price=$row->selling_price;
      $book_shipping_charge=$row->shipping_charge;
      $book_stock = $row->stock;
      
      $condition=array('book_id'=>$book_id,'user_id'=>$uid,'cart_status'=>0);
      $cart_res = $this->db->select('book_id,qty')
                           ->from('rl_cart_tbl')
                           ->where($condition)
                           ->get();
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
            $updateCondition = array(
                          'book_id'=>$book_id,
                          'user_id'=>$uid,
                          'cart_status'=>0
                        );
            $updateSet = array(
                          'qty'=>$update_qty,
                          'total'=>$update_total,
                          'total_sp'=>$update_total_sp,
                          'total_shipcharge'=>$update_total_shipp
                        );
            $update=$this->db->where($updateCondition)->set($updateSet)->update('rl_cart_tbl');
            // $this->db->query("update rl_cart_tbl SET qty=$update_qty,total=$update_total ,total_sp=$update_total_sp,total_shipcharge=$update_total_shipp where book_id=$book_id and user_id=$uid and cart_status=0");
            if($update)
                return 1;
            else
                return 0;
            }
        }
    }

    public function deleteFromCart($cartid){
      $condition = array("cart_id"=>$cartid);
      $result_delete = $this->db->delete("rl_cart_tbl",$condition);
      $affected_row = $this->db->affected_rows();
      if($affected_row == 1)
        return 1;
      else
        return 0;
    } 
  public function user_shipping($uid){
    $this->db->select("*"); 
    $this->db->from("rl_users_tbl");
    $this->db->where("id",$uid);
    $result=$this->db->get();
    $count=$result->num_rows();
    if($count>0)
    return $result->row();
    else
    return (object) null;
 }
 public function addRemoveWishlist($bookid,$userid){
    $condition = array('book_id'=>$bookid,'user_id'=>$userid);
    $res = $this->db->select('wish_id')->from('rl_book_wishlist_tbl')->where($condition)->get();
    $count = $res->num_rows();
    if($count == 1){
      $wishresult = $res->row();
      $wish_id = $wishresult->wish_id;
      $cond = array('wish_id'=>$wish_id);
      $remove = $this->db->delete('rl_book_wishlist_tbl',$cond);
      $affected_row = $this->db->affected_rows();
      if($affected_row == 1)
        return 1;
      else
        return 0;
    }
    else{
      $data = array('book_id'=>$bookid,'user_id'=>$userid,'added_on'=>date('Y-m-d'));
      $add = $this->db->insert('rl_book_wishlist_tbl',$data);
      $affected_row = $this->db->affected_rows();
      if($affected_row == 1)
        return 2;
      else
        return 0;
    }
 }

 public function getUserOrders($uid){
    $condition = array('user_id'=>$uid,'confirmation'=>1);
    $userOrderResult = $this->db->select('order_id,total_qty,total_amt,order_date,payment_type')
                                ->from('rl_book_orders_tbl')
                                ->where($condition)
                                ->order_by('order_id','desc')
                                ->get();
    $count=$userOrderResult->num_rows();
    if($count>0){
      return $userOrderResult->result();
    }
    else{
      return null;
    }
  }

  public function getOrderDetails($uid,$orderid){
    $condition = array('cart.user_id'=>$uid,'order.confirmation'=>1,'order.order_id'=>$orderid);
    $userOrderResult=$this->db->select('book.book_id,book.title,book.image,book.price,book.shipping_charge,cart.qty,cart.total,order.order_status,order.order_id')
             ->from('rl_books_tbl book')
             ->join('rl_cart_tbl cart','book.book_id = cart.book_id','inner')
             ->join('rl_book_orders_tbl order','cart.order_id = order.order_id','inner')
             ->where($condition)
             ->get();
    $count=$userOrderResult->num_rows();
    if($count>0){
      return $userOrderResult->result();
    }
    else{
      return null;
    }
  }

  public function getTotalShipAmt($orderid){
    $uid = $this->session->userdata('user_id');
    $condition = array('cart.user_id'=>$uid,'order.confirmation'=>1,'order.order_id'=>$orderid);
    $shipTotalResult=$this->db->select_sum('book.shipping_charge')
             ->from('rl_books_tbl book')
             ->join('rl_cart_tbl cart','book.book_id = cart.book_id','inner')
             ->join('rl_book_orders_tbl order','cart.order_id = order.order_id','inner')
             ->where($condition)
             ->get();
    $count = $shipTotalResult->num_rows();
    if($count==1)
      return $shipTotalResult->row();   
    else
      return null;
  }

  public function getShipDetails($orderid){
    $condition = array('order.order_id'=>$orderid);
    $orderShipResult = 
              $this->db->select('ship.address,order.payment_type,order.total_qty,order.subtotal_amt,order.discount_amt,order.total_amt,order.order_id')
                       ->from('rl_book_orders_tbl order')
                       ->join('rl_shipping_tbl ship','order.order_id = ship.order_id','inner')
                       ->where($condition)
                       ->get();
    $count = $orderShipResult->num_rows();
    if($count == 1){
      return $orderShipResult->row();
    }
    else{
      return null;
    }
  }

  public function getWishlist($userid){
    // $condition = array('user_id'=>$userid);
        $res = $this->db->select('b.book_id,b.title,b.image,b.price,b.selling_price')
             ->from('rl_books_tbl b')
             ->join('rl_book_wishlist_tbl w','b.book_id = w.book_id','inner')
             ->where('w.user_id',$userid)
             ->order_by('w.added_on','asc')
             ->get();
    $count = $res->num_rows();
    if($count>0){
      return $res->result();
    }
    else{
      return null;
    }
  }

  public function getCouponDiscount($coupon){
    $res_coupon = $this->db->select('*')
                           ->from('rl_book_coupons_tbl')
                           ->where('code',$coupon)
                           ->get();
    return $res_coupon;
  }

  public function getShipAddress($user_id){
    $query=$this->db->query("select * from rl_shipping_tbl where user_id=$user_id and shipping_id=(select max(shipping_id) from rl_shipping_tbl where user_id=$user_id)");
    // echo $this->db->last_query();exit;
    $count=$query->num_rows();
    if($count>0){
      return $query->row();
    }
    else{
      return null;
    }
  }
}
?>

	