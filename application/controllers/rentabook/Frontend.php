<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Frontend extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
         $this->load->model('superadmin/Crud');
         $this->load->library('pagination');
         $this->ipaddress =$this->input->ip_address();
         date_default_timezone_set('asia/kolkata');
         $this->date = date('Y-m-d H:i:s');
         $this->load->model('rentabook/frontend_model','home_model');
         $this->load->model(array('Common_model','Front_model','superadmin/Crud','rentabook/addtocart_model'));
         $data["category_data"]=$this->home_model->get_cate_subcat_books();
         $this->ip_address=$this->input->ip_address();
         $this->user_id=$this->session->userdata("user_id");
    }
    public function index(){
        //$this->session->set_userdata('user_id',26);
        $data['famous_data']=$this->home_model->getFamousBooks();
        $data['new_data']=$this->home_model->getNewBooks();
        $data['award_data']=$this->home_model->getAwardedBooks();
        $data["category_data"]=$this->home_model->get_cate_subcat_books();
        //get cart total count to menubar
        $data['total_item']=$this->addtocart_model->get_cart_count();
        //get slider
        $data['slider_data'] = $this->home_model->get_slider();
        $data['index_wish_result']=$this->home_model->return_wishlist();
        $this->load->view('rentabook/index',$data);
    }
    public function privacy(){
        $this->load->view('rentabook/privacy_view');
    }
    public function terms(){
        $data['books_data']=$this->home_model->get_all_books();
        //get cart total count to menubar
        $data['total_item']=$this->addtocart_model->get_cart_count();
        $this->load->view('rentabook/terms_view',$data);
    }
     public function book_description(){
      $this->session->set_userdata('desc_url',current_url());
        //getting all books to frontend
        $bookid=base64_decode($this->uri->segment(4));
        $ip = $_SERVER['REMOTE_ADDR'];
        /*Getting related books*/
        $data['realted_book_data'] = $this->home_model->getReatedBooks($bookid);
        /*End*/
        $data['view_count'] = $this->home_model->bookview_ip($ip,$bookid);
        $data['famous_data']=$this->home_model->getFamousBooks();
        $data["category_data"]=$this->home_model->get_cate_subcat_books();
        $data['product_detail']=$this->home_model->get_all_products($bookid);
        $data['total_item']=$this->addtocart_model->get_cart_count();
        $data['description_wish_result']=$this->home_model->return_wishlist();
        $this->load->view('rentabook/description_view',$data);
    }
      public function home_filter(){
        $data['total_item']=$this->addtocart_model->get_cart_count();
        $this->load->view('rentabook/home_filter',$data); 
    }
    public function test5(){
        $this->home_model->test();
    }
    public function checkout(){
        /*Related Books functions*/
        $cart_bookids = $this->home_model->getCartBookIds();
        if($cart_bookids != null){
            $authors_array = $this->home_model->getAuthors($cart_bookids);
            $data['cart_related_books'] = $this->home_model->getCartRelatedBooks($authors_array);
        }
        $data['new_data']=$this->home_model->getNewBooks();
        /*Related Books Functions END*/
        $data["category_data"]=$this->home_model->get_cate_subcat_books();
        $data['total_price']=$this->addtocart_model->total_amt();
        $data['total_sp']=$this->addtocart_model->total_sellingprice();
        $data['total_item']=$this->addtocart_model->get_cart_count();
        $data['total_ship_char']=$this->addtocart_model->total_shippingcharge();
        $data['checkout_data']=$this->home_model->data_fetch_checkout();
        // echo $this->db->last_query();exit;
        //sending wishlist id to frontend_mode
        $data['wish_result']=$this->home_model->return_wishlist();
        
        $this->load->view("rentabook/checkout",$data);
    }

    public function payment(){
        $this->load->view("tutor_payment/payuform");
    } 

    public function cod_online(){
      
        $data['total_item']=$this->addtocart_model->get_cart_count();
        //$data['famous_data']=$this->home_model->getFamousBooks();
        $data['new_data']=$this->home_model->getNewBooks();
        $data['total_sp']=$this->addtocart_model->total_sellingprice();
        $data['index_wish_result']=$this->home_model->return_wishlist();
        $this->load->view("rentabook/cod_online",$data);
    }

    public function logout(){
        // $this->session->unset_userdata();
        //print_r($_SESSION);
        session_destroy();
        redirect("book");
        //$this->session->unset_userdata('dis_amt');
    }

    function search()
    {
      extract($_POST);
      if(isset($sort)){
        if(isset($searchstr)){
          $this->session->unset_userdata('sort');  
        }
        $this->session->set_userdata('sort',$sort);
      }
        // get search string
        $search = ($this->input->post("searchstr"))? $this->input->post("searchstr") : "NIL";

        $search = ($this->uri->segment(3)) ? $this->uri->segment(3) : $search;

        // pagination settings
        $config = array();
        $config['base_url'] = site_url("books/search/$search");
        $config['total_rows'] = $this->home_model->get_books_count($search);
        $data['count'] = $config['total_rows'];
        $config['per_page'] = PERPAGE;
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"]/$config["per_page"];
        $config["num_links"] = floor($choice);

        // integrate bootstrap pagination
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
              
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['author'] = $this->home_model->getDistinctAuthors();
        $data['maxPrice'] = $this->home_model->getPriceFilter();
        $data['language'] = $this->home_model->getLanguages(); 
        // get books list
        if(!empty($this->session->userdata('sort'))){
          $sort = $this->session->userdata('sort');
          $data['search'] = $this->home_model->get_books($config['per_page'], $data['page'], $search,$sort);
        }else{
          $data['search'] = $this->home_model->get_books($config['per_page'], $data['page'], $search);  
        }
        $data['links'] = $this->pagination->create_links();
        //Load view
        $this->load->view('rentabook/home_filter',$data);
    }    
    
 //  function search(){
 //    $this->load->library("pagination");
 //    $search = ($this->input->post("searchstr"))? $this->input->post("searchstr") : "NIL";
 //    $config = array();
 //    $config["base_url"] =  base_url()."frontend/search";
 //    $config["total_rows"] = $this->home_model->count_all();
 //    $config["per_page"] = 5;
 //    $config["uri_segment"] = 3;
 //    $config["use_page_numbers"] = TRUE;
 //    $config["full_tag_open"] = '<ul class="pagination">';
 //    $config["full_tag_close"] = '</ul>';
 //    $config["first_tag_open"] = '<li>';
 //    $config["first_tag_close"] = '</li>';
 //    $config["last_tag_open"] = '<li>';
 //    $config["last_tag_close"] = '</li>';
 //    $config['next_link'] = '&gt;';
 //    $config["next_tag_open"] = '<li>';
 //    $config["next_tag_close"] = '</li>';
 //    $config["prev_link"] = "&lt;";
 //    $config["prev_tag_open"] = "<li>";
 //    $config["prev_tag_close"] = "</li>";
 //    $config["cur_tag_open"] = "<li class='active'><a href='#'>";
 //    $config["cur_tag_close"] = "</a></li>";
 //    $config["num_tag_open"] = "<li>";
 //    $config["num_tag_close"] = "</li>";
 //    $config["num_links"] = 1;
 //    $this->pagination->initialize($config);
 //    $page = $this->uri->segment(3);
 //    $start = ($page - 1) * $config["per_page"];

 //    $view_output = array(
 //     'pagination_link'  => $this->pagination->create_links(),
 //     'country_table'   => $this->frontend_model->fetch_details($config["per_page"], $start,$search)
 //    );

 //   echo json_encode($view_output);
 // }

    public function sucess()
    {
        $this->load->view("rentabook/sucess");
    }
      public function wishlist()
      {
        $bookid=$this->uri->segment(4);
        $wres=$this->home_model->wishlist($bookid);
        if($wres==1)
            redirect("checkout");
      }

      public function addRemoveWishlist(){
        $uid=$this->session->userdata("user_id");
        if(!empty($uid)){
          $bookid = $this->input->post('b_id');
          $this->home_model->wishlist($bookid);
        }
        redirect("signup/book"); 
      }

      public function delete_cart()
      {
        $bookid=$this->uri->segment(4);
        $res=$this->home_model->cart_delete($bookid);
        if($res)
            $this->session->unset_userdata("dis_amt");
            redirect("rentabook/frontend/checkout");
      }
    public function shipping_order(){
   if($this->session->userdata("user_id"))
   {
   //if user session is not there
   if($this->session->userdata("alltotal")){
        $this->session->set_userdata('lastUrl',current_url());
       $data['total_price']=$this->addtocart_model->total_amt();
       $data['total_sp']=$this->addtocart_model->total_sellingprice();
       $data['total_item']=$this->addtocart_model->get_cart_count();
       $data['total_ship_char']=$this->addtocart_model->total_shippingcharge();
       $data['ship']=$this->addtocart_model->user_shipping();
       $data['famous_data']=$this->home_model->getFamousBooks();
      $data['index_wish_result']=$this->home_model->return_wishlist();
        $address_count=$this->Crud->commonCheck('user_id','rl_shipping_tbl',['user_id'=>$this->user_id]);
         //echo $address_count;exit;
       if($address_count)
       {
         $data['ship_details']=$this->home_model->get_shipping_details($this->user_id);
         // print_r($data['ship_details']);exit;
         $this->load->view(BOOK.'shipping_order_new',$data);

       }
       else
       {
                $this->load->view(BOOK.'shipping_order_new',$data);
  
       }
      }
   else
       redirect("book");
}
else {
   redirect("signup");
  }
}
  public function myorders(){
    $data['orderResult'] = $this->home_model->getUserOrders(); 
    $data['total_item']=$this->addtocart_model->get_cart_count();
    $this->load->view(BOOK.'myorders_view',$data);
  }

  public function orderDetails(){
    $orderid = base64_decode($this->uri->segment(3));
    $data['orderDetailResult'] =$this->home_model->getOrderDetails($orderid);
    $data['shipDetailResult'] = $this->home_model->getShipDetails($orderid);
    $data['totalShipAmt'] = $this->home_model->getTotalShipAmt($orderid);
    $data['total_item']=$this->addtocart_model->get_cart_count();
    $this->load->view(BOOK.'order_details',$data); 
  }

  public function wishlistPage(){
    $uid = $this->session->userdata('user_id');
    $data['wishResult'] = $this->home_model->getWishlistData($uid);
    $this->load->view('rentabook/wishlist_view',$data);
  }

  public function removeWishlist(){
    $book_id = base64_decode($this->uri->segment('3'));
    $result = $this->home_model->removeWishlist($book_id);
    if($result){
      redirect('book/wishlist');
    }else{
      echo "Somthing Went wrong";
    }
  }

  
}
?>