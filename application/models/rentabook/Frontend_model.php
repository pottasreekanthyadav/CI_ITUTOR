<?php
class Frontend_model extends CI_model
{
  public function __construct() {
    parent::__construct();
    date_default_timezone_set('asia/kolkata');
    $this->date=date('Y-m-d');
  }
  public function getFamousBooks(){
    $condition = array('familiarity_type'=>3,'status'=>1);
    $res = $this->db->select('title,image,book_id')->from('rl_books_tbl')->where($condition)->order_by('book_id','desc')->get();
  	$count = $res->num_rows();
    if($count>0){
      return $res->result();  
    }
    else{
      return null;
    }
  }
  public function getNewBooks(){
    $condition = array('familiarity_type'=>1,'status'=>1);
    $res = $this->db->select('title,image,book_id')->from('rl_books_tbl')->where($condition)->order_by('book_id','desc')->get();
    $count = $res->num_rows();
    if($count>0){
      return $res->result();
    }
    else{
      return null;
    }
  }

  public function getAwardedBooks(){
    $condition = array('familiarity_type'=>2,'status'=>1);
    $res = $this->db->select('title,image,book_id')->from('rl_books_tbl')->where($condition)->order_by('book_id','desc')->get();
    $count = $res->num_rows();
    if($count>0){
      return $res->result();  
    }
    else{
      return null;
    }
  }
  public function get_cate_subcat_books()
  	{
  		$this->db->select('title,category_id');
  		$this->db->from('rl_book_categories_tbl');
  		$this->db->where('category_status',1);
  		$res=$this->db->get();
  		$final=array();
  		if($res->num_rows()>0)
  		{
  			foreach($res->result() as $row)
  			{
  				$this->db->select('title,subcategory_id');
                  $this->db->from('rl_book_subcategories_tbl');
                  $this->db->where('category_id',$row->category_id);
                  $sub_res=$this->db->get();
                  if($sub_res->num_rows()>0)
                  {
                  	$row->subcategory_name=$sub_res->result();
                  }
                  array_push($final, $row);
  			} 
  		}
  		return $final;
  	}
  	public function get_cat()
  	{
  		return $this->db->get("rl_book_categories_tbl");
  	}
  public function get_all_products($bookid)
  {
  	//get product details from database
  	$this->db->select("book_id,title,description,image,selling_price,author,publisher");
  	$this->db->from("rl_books_tbl");
  	$this->db->where("book_id",$bookid);
  	$res = $this->db->get();	  
  	return $res;
  }

	public function data_fetch_checkout()
	{
	$uid=$this->session->userdata("user_id");
    $condition = array("cart.user_id"=>$uid,"cart.cart_status"=>0,"payment_type"=>0,"payment_status"=>0);
    $result = $this->db->select("book.book_id,book.title,book.image,book.price,book.stock,cart.qty,cart.total,cart.cart_id,cart.selling_price")
                        ->from("rl_cart_tbl cart")
                        ->where($condition)
                        ->join('rl_books_tbl book','book.book_id=cart.book_id','inner')
                        ->order_by('cart.cart_id','desc')
                        ->get();
    return $result;
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

    function get_books($limit, $start, $st = NULL,$sort = NULL,$lang = NULL)
    {
      $uid = $this->session->userdata('user_id');
      if ($st == "NIL") $st = "";
      if($sort!= null){
        // $sql = "select book_id,title,image,selling_price from rl_books_tbl where title like '%$st%' order by selling_price $sort limit " . $start . ", " . $limit;
        $sql = "select b.book_id,b.title,b.image,b.selling_price,w.book_id as wb_id,w.user_id from rl_books_tbl b left join rl_book_wishlist_tbl w on b.book_id = w.book_id where b.title like '%$st%' and b.status = 1 order by b.selling_price $sort limit " . $start . ", " . $limit;
        
      }
      else{
        // $sql = "select book_id,title,image,selling_price from rl_books_tbl where title like '%$st%' order by title asc limit " . $start . ", " . $limit;
        $sql = "select b.book_id,b.title,b.image,b.selling_price,w.book_id as wb_id,w.user_id from rl_books_tbl b left join rl_book_wishlist_tbl w on b.book_id = w.book_id where b.title like '%$st%' and b.status = 1 order by title asc limit " . $start . ", " . $limit;
      }
        
        
        $query = $this->db->query($sql);
        return $query->result();
    }

    function get_books_count($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select book_id,title,image,selling_price from rl_books_tbl where title like '%$st%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    public function wishlist($bookid){
    	$uid=$this->session->userdata("user_id");
    	$res=$this->db->query("select wish_id from rl_book_wishlist_tbl where user_id=$uid and book_id=$bookid");
    	$count=$res->num_rows();
    	if($count==0){
    		//echo $bookid;
    		$date=date("Y-m-d");
    		$res=$this->db->query("insert into rl_book_wishlist_tbl (book_id,user_id,added_on) values($bookid,$uid,'$date')");
    	}
    	else
    	{
    		$this->db->query("delete from rl_book_wishlist_tbl where book_id=$bookid and user_id=$uid");
    		
    	}
    	//return 1;
    }
    public function return_wishlist()
    {
      $uid=$this->session->userdata("user_id");
      if(empty($uid))
        $uid=0;
      else
        $uid=$uid;
    	$res=$this->db->query("select book_id from rl_book_wishlist_tbl where user_id=$uid");
    	
    	$count=$res->num_rows();
    	if($count>0)
    		return $res->result();
    	else
    		return (object) null;
    }
    
    public function cart_delete($bookid)
    {
    	$uid=$this->session->userdata("user_id");
      return $this->db->query("delete from rl_cart_tbl where book_id=$bookid and user_id=$uid");

    }
     public function get_slider(){
   	$this->db->select('*');
   	$this->db->from('rl_book_slider_tbl');
   	$this->db->where('slider_status',1);
   	$res = $this->db->get();
   	return $res;
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
  public function getLanguages(){
    $result_lang = $this->db->select('language')->distinct()->get('rl_books_tbl');
    $count = $result_lang->num_rows();
    if($count>0){
      return $result_lang->result();
    }
    else{
      return null;
    }
  }
  public function getDistinctAuthors(){
    $res = $this->db->select('author')->distinct()->where('familiarity_type','3')->order_by('author','asc')->limit(10)->get('rl_books_tbl');
    $count = $res->num_rows();
    if($count>0){
      return $res->result();
    }
    else{
      return null;
    }
  }
  public function getPriceFilter(){
    $maxPrice = $this->db->select_max('price')->get('rl_books_tbl');
    return $maxPrice->row();
  }
 
  public function getReatedBooks($bookid){
  	$res = $this->db->select('author')->from('rl_books_tbl')->where('book_id',$bookid)->order_by('book_id','desc')->get();
  	$count = $res->num_rows();
  	if($count==1){
  		$result_author = $res->row();
  		$author = $result_author->author;
  		$result_related = $this->db->select('title,book_id,image')->from('rl_books_tbl')->where('author',$author)->order_by('title','asc')->get();
  		return $result_related->result();
  	}
  	else{
  		return null;
  	}
  }
  public function getCartBookIds(){
  	$uid = $this->session->userdata('user_id');
    $condition = array('user_id'=>$uid,'cart_status'=>0);
  	$bookid_result = $this->db->select('book_id')->from('rl_cart_tbl')->where($condition)->get();
  	$count = $bookid_result->num_rows();
  	if($count>0){
  		return $bookid_result;
  	}
  	else{
  		return null;
  	}
  }
  public function getAuthors($book_result){
  	$author = array();
  	foreach($book_result->result() as $brow){
  		$a_res = $this->db->select('author')->from('rl_books_tbl')->where('book_id',$brow->book_id)->get()->row();
  		 $author_name = $a_res->author;
  		array_push($author,$author_name);
  	}
  	return $author;
  }
 
  public function getCartRelatedBooks($authors_array){
  	$res = $this->db->select('book_id,title,image')
                    ->from('rl_books_tbl')
                    ->where_in('author',$authors_array)
                    ->get()
                    ->result();
    // echo $this->db->last_query();
  	 return $res;
  }
  public function get_shipping_details($user_id){
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
  public function getUserOrders(){
    $uid = $this->session->userdata('user_id');
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

  public function getOrderDetails($orderid){
    $uid = $this->session->userdata('user_id');
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


   function count_all(){
     $query = $this->db->get("countries");
      return $query->num_rows();
 }

 function fetch_details($limit, $start,$search){
      $output = '';
      $this->db->select("*");
      $this->db->from("rl_books_tbl");
      $this->db->order_by("title", "ASC");
      $this->db->like("title","%$search%");
      $this->db->limit($limit, $start);
      $query = $this->db->get();

  }

  public function getWishlistData($userid){
    $res = $this->db->select('b.book_id,b.title,b.image,b.price,b.selling_price')
             ->from('rl_books_tbl b')
             ->join('rl_book_wishlist_tbl w','b.book_id = w.book_id','inner')
             ->where('user_id',$userid)
             ->order_by('w.added_on','asc')
             ->get();
             // echo $this->db->last_query();exit;
    $count = $res->num_rows();
    if($count>0){
      return $res->result();
    }
    else{
      return null;
    }
  }

  public function removeWishlist($book_id){
    $res = $this->db->where('book_id',$book_id)->delete('rl_book_wishlist_tbl');
    return $res;
  }
}
?>

	