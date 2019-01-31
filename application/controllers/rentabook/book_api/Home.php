<?php 
class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
	 $this->load->model('api/Booksapi_model','front');
  }
  public function getMenu(){
      $response = array();
      $data['menu']=$this->front->get_cate_subcat_books();
      if(!empty($data)){
        $response['code'] = SUCCESS_CODE;
        $response['message'] = "Success";
        $response['description'] = "Records Found";
        $response['result'] = $data;
    }else{
        $response['code'] = FAIL_CODE;
        $response['message'] = "Failed";
        $response['description'] = "Records not Found"; 
    }
  echo json_encode($response);
  }

  public function getSlider(){
      $response = array();
      $data['sliders']=$this->front->get_slider();
      if(!empty($data)){
        $response['code'] = SUCCESS_CODE;
        $response['message'] = "Success";
        $response['description'] = "Records Found";
        $response['result'] = $data;
    }else{
        $response['code'] = FAIL_CODE;
        $response['message'] = "Failed";
        $response['description'] = "Records not Found"; 
    }
  echo json_encode($response);
  }

  public function getCartItemsCount(){
    $response = array();
    $inputData=file_get_contents('php://input');
    if(!empty($inputData)){
     if(isJson($inputData)){
        $reqdata=json_decode($inputData);
        $userid=(isset($reqdata->userid))?$reqdata->userid:'';
        $error=0;
        $error_msg='';
        if(empty($userid)){
          $error=1;
          $error_msg.='Userid is required';
        }
        if($error==0){
          $data['cart_count']=$this->front->get_cart_count($userid);
        if(!empty($data)){
          $response['code'] = SUCCESS_CODE;
          $response['message'] = "Success";
          $response['description'] = "Records Found";
          $response['result'] = $data;
        }else{
          $response['code'] = FAIL_CODE;
          $response['message'] = "Failed";
          $response['description'] = "Records not Found"; 
        }
      }else{
        $response['code']=VALIDATION_CODE;
        $response['message']="Validation error";
        $response['description']=rtrim($error_msg,',');
      }
    }else{
      $response[CODE]=VALIDATION_CODE;
      $response[MESSAGE]='Validation error';
      $response[DESCRIPTION]='Input data should be in JSON format only';
    }
  }else{
    $response[CODE] = FAIL_CODE;
    $response[MESSAGE] = 'Fail';
    $response[DESCRIPTION] = 'data is empty';
  }
 echo json_encode($response);
  }

  public function getFamousBooks(){
      $response = array();
      $cols = array("title","image","book_id");
      $table="rl_books_tbl";
      $condition=array('familiarity_type'=>3);
      $data['famousBooks']=$this->front->get_all_books($cols,$table,$condition);
      if(!empty($data)){
        $response['code'] = SUCCESS_CODE;
        $response['message'] = "Success";
        $response['description'] = "Records Found";
        $response['result'] = $data;
    }else{
        $response['code'] = FAIL_CODE;
        $response['message'] = "Failed";
        $response['description'] = "Records not Found"; 
    }
  echo json_encode($response);
  }
    public function getAwardWinBooks(){
      $response = array();
      $cols = array("title","image","book_id");
      $table="rl_books_tbl";
      $condition=array('familiarity_type'=>2);
      $data['famousBooks']=$this->front->get_all_books($cols,$table,$condition);
      if(!empty($data)){
        $response['code'] = SUCCESS_CODE;
        $response['message'] = "Success";
        $response['description'] = "Records Found";
        $response['result'] = $data;
    }else{
        $response['code'] = FAIL_CODE;
        $response['message'] = "Failed";
        $response['description'] = "Records not Found"; 
    }
  echo json_encode($response);
  }

    public function getNewBooks(){
      $response = array();
      $cols = array("title","image","book_id");
      $table="rl_books_tbl";
      $condition=array('familiarity_type'=>1);
      $data['famousBooks']=$this->front->get_all_books($cols,$table,$condition);
      if(!empty($data)){
        $response['code'] = SUCCESS_CODE;
        $response['message'] = "Success";
        $response['description'] = "Records Found";
        $response['result'] = $data;
    }else{
        $response['code'] = FAIL_CODE;
        $response['message'] = "Failed";
        $response['description'] = "Records not Found";
    }
  echo json_encode($response);
  }

  public function getBookDescription(){
    $response = array();
    $inputData=file_get_contents('php://input');
    if(!empty($inputData)){
     if(isJson($inputData)){
        $reqdata=json_decode($inputData);
        $bookid=(isset($reqdata->bookid))?$reqdata->bookid:'';
        $error=0;
        $error_msg='';
        if(empty($bookid)){
          $error=1;
          $error_msg.='Bookid is required';
        }
        if($error==0){
          $data['bookDescription']=$this->front->getBookDetails($bookid);
        if(!empty($data)){
          $response['code'] = SUCCESS_CODE;
          $response['message'] = "Success";
          $response['description'] = "Records Found";
          $response['result'] = $data;
        }else{
          $response['code'] = FAIL_CODE;
          $response['message'] = "Failed";
          $response['description'] = "Records not Found"; 
        }
      }else{
        $response['code']=VALIDATION_CODE;
        $response['message']="Validation error";
        $response['description']=rtrim($error_msg,',');
      }
    }else{
      $response[CODE]=VALIDATION_CODE;
      $response[MESSAGE]='Validation error';
      $response[DESCRIPTION]='Input data should be in JSON format only';
    }
  }else{
    $response[CODE] = FAIL_CODE;
    $response[MESSAGE] = 'Fail';
    $response[DESCRIPTION] = 'data is empty';
  }
 echo json_encode($response);
  }
  public function search(){
    $response = array();
    $inputData=file_get_contents('php://input');
    if(!empty($inputData)){
     if(isJson($inputData)){
        $reqdata=json_decode($inputData);
        $search_string=(isset($reqdata->search))?$reqdata->search:'';
        $error=0;
        $error_msg='';
        if(empty($search_string)){
          $error=1;
          $error_msg.='Search data required';
        }
        if($error==0){
          $data['search_result']=$this->front->getSearchData($search_string);
        if(!empty($data)){
          $response['code'] = SUCCESS_CODE;
          $response['message'] = "Success";
          $response['description'] = "Records Found";
          $response['result'] = $data;
        }else{
          $response['code'] = FAIL_CODE;
          $response['message'] = "Failed";
          $response['description'] = "Records not Found"; 
        }
      }else{
        $response['code']=VALIDATION_CODE;
        $response['message']="Validation error";
        $response['description']=rtrim($error_msg,',');
      }
    }else{
      $response[CODE]=VALIDATION_CODE;
      $response[MESSAGE]='Validation error';
      $response[DESCRIPTION]='Input data should be in JSON format only';
    }
  }else{
    $response[CODE] = FAIL_CODE;
    $response[MESSAGE] = 'Fail';
    $response[DESCRIPTION] = 'data is empty';
  }
 echo json_encode($response);
  }

  public function checkout(){
    $response = array();
    $inputData=file_get_contents('php://input');
    if(!empty($inputData)){
     if(isJson($inputData)){
        $reqdata=json_decode($inputData);
        $userid=(isset($reqdata->userid))?$reqdata->userid:'';
        $error=0;
        $error_msg='';
        if(empty($userid)){
          $error=1;
          $error_msg.='Userid is required';
        }
        if($error==0){
          $data['cart_count']=$this->front->data_fetch_checkout($userid);
        if(!empty($data)){
          $response['code'] = SUCCESS_CODE;
          $response['message'] = "Success";
          $response['description'] = "Records Found";
          $response['result'] = $data;
        }else{
          $response['code'] = FAIL_CODE;
          $response['message'] = "Failed";
          $response['description'] = "Records not Found"; 
        }
      }else{
        $response['code']=VALIDATION_CODE;
        $response['message']="Validation error";
        $response['description']=rtrim($error_msg,',');
      }
    }else{
      $response[CODE]=VALIDATION_CODE;
      $response[MESSAGE]='Validation error';
      $response[DESCRIPTION]='Input data should be in JSON format only';
    }
  }else{
    $response[CODE] = FAIL_CODE;
    $response[MESSAGE] = 'Fail';
    $response[DESCRIPTION] = 'data is empty';
  }
 echo json_encode($response);
  }


  public function increaseQuantity(){
    $response = array();
    $inputData=file_get_contents('php://input');
    if(!empty($inputData)){
     if(isJson($inputData)){
        $reqdata=json_decode($inputData);
        $userid=(isset($reqdata->userid))?$reqdata->userid:'';
        $cartid=(isset($reqdata->cartid))?$reqdata->cartid:'';
        $error=0;
        $error_msg='';
        if(empty($userid && $cartid)){
          $error=1;
          $error_msg.='Userid and Cartid is required';
        }
        if($error==0){
          $data['result']=$this->front->quantityIncrease($cartid);
        if($data['result'] == 1){
          $response['code'] = SUCCESS_CODE;
          $response['message'] = "Success";
          $response['description'] = "Quantity Increased";
          $response['result'] = $data;
        }else{
          $response['code'] = FAIL_CODE;
          $response['message'] = "Failed";
          $response['description'] = "Quantity Not Increased"; 
        }
      }else{
        $response['code']=VALIDATION_CODE;
        $response['message']="Validation error";
        $response['description']=rtrim($error_msg,',');
      }
    }else{
      $response[CODE]=VALIDATION_CODE;
      $response[MESSAGE]='Validation error';
      $response[DESCRIPTION]='Input data should be in JSON format only';
    }
  }else{
    $response[CODE] = FAIL_CODE;
    $response[MESSAGE] = 'Fail';
    $response[DESCRIPTION] = 'data is empty';
  }
 echo json_encode($response);
  }


  public function decreaseQuantity(){
    $response = array();
    $inputData=file_get_contents('php://input');
    if(!empty($inputData)){
     if(isJson($inputData)){
        $reqdata=json_decode($inputData);
        $userid=(isset($reqdata->userid))?$reqdata->userid:'';
        $cartid=(isset($reqdata->cartid))?$reqdata->cartid:'';
        $error=0;
        $error_msg='';
        if(empty($userid && $cartid)){
          $error=1;
          $error_msg.='Userid and Cartid is required';
        }
        if($error==0){
          $data['result']=$this->front->quantityDecrease($cartid);
        if($data['result'] == 1){
          $response['code'] = SUCCESS_CODE;
          $response['message'] = "Success";
          $response['description'] = "Quantity Updated";
          $response['result'] = $data;
        }else{
          $response['code'] = FAIL_CODE;
          $response['message'] = "Failed";
          $response['description'] = "Quantity Not Decreased"; 
        }
      }else{
        $response['code']=VALIDATION_CODE;
        $response['message']="Validation error";
        $response['description']=rtrim($error_msg,',');
      }
    }else{
      $response[CODE]=VALIDATION_CODE;
      $response[MESSAGE]='Validation error';
      $response[DESCRIPTION]='Input data should be in JSON format only';
    }
  }else{
    $response[CODE] = FAIL_CODE;
    $response[MESSAGE] = 'Fail';
    $response[DESCRIPTION] = 'data is empty';
  }
  echo json_encode($response);
 }

  public function addtocart(){
    $response = array();
    $inputData=file_get_contents('php://input');
    if(!empty($inputData)){
     if(isJson($inputData)){
        $reqdata=json_decode($inputData);
        $userid=(isset($reqdata->userid))?$reqdata->userid:'';
        $bookid=(isset($reqdata->bookid))?$reqdata->bookid:'';
        $error=0;
        $error_msg='';
        if(empty($userid && $bookid)){
          $error=1;
          $error_msg.='userid and bookid is required';
        }
        if($error==0){
          $data['result']=$this->front->addBookToCart($bookid);
        if($data['result'] == 1){
          $response['code'] = SUCCESS_CODE;
          $response['message'] = "Success";
          $response['description'] = "Added to cart";
          $response['result'] = $data;
        }else{
          $response['code'] = FAIL_CODE;
          $response['message'] = "Failed";
          $response['description'] = "Not added to cart"; 
        }
      }else{
        $response['code']=VALIDATION_CODE;
        $response['message']="Validation error";
        $response['description']=rtrim($error_msg,',');
      }
    }else{
      $response[CODE]=VALIDATION_CODE;
      $response[MESSAGE]='Validation error';
      $response[DESCRIPTION]='Input data should be in JSON format only';
    }
  }else{
    $response[CODE] = FAIL_CODE;
    $response[MESSAGE] = 'Fail';
    $response[DESCRIPTION] = 'data is empty';
  }
  echo json_encode($response);
  }

  public function deleteCart(){
    $response = array();
    $inputData=file_get_contents('php://input');
    if(!empty($inputData)){
     if(isJson($inputData)){
        $reqdata=json_decode($inputData);
        $userid=(isset($reqdata->userid))?$reqdata->userid:'';
        $cartid=(isset($reqdata->cartid))?$reqdata->cartid:'';
        $error=0;
        $error_msg='';
        if(empty($userid && $cartid)){
          $error=1;
          $error_msg.='Userid and Cartid is required';
        }
        if($error==0){
          $data['result']=$this->front->deleteFromCart($cartid);
        if($data['result'] == 1){
          $response['code'] = SUCCESS_CODE;
          $response['message'] = "Success";
          $response['description'] = "Cart Item Deleted";
          $response['result'] = $data;
        }else{
          $response['code'] = FAIL_CODE;
          $response['message'] = "Failed";
          $response['description'] = "Cart Item not Deleted"; 
        }
      }else{
        $response['code']=VALIDATION_CODE;
        $response['message']="Validation error";
        $response['description']=rtrim($error_msg,',');
      }
    }else{
      $response[CODE]=VALIDATION_CODE;
      $response[MESSAGE]='Validation error';
      $response[DESCRIPTION]='Input data should be in JSON format only';
    }
  }else{
    $response[CODE] = FAIL_CODE;
    $response[MESSAGE] = 'Fail';
    $response[DESCRIPTION] = 'data is empty';
  }
  echo json_encode($response);  
  }

  public function cartPriceDetails(){
    $response = array();
    $inputData=file_get_contents('php://input');
    if(!empty($inputData)){
     if(isJson($inputData)){
        $reqdata=json_decode($inputData);
        $userid=(isset($reqdata->userid))?$reqdata->userid:'';
        $error=0;
        $error_msg='';
        if(empty($userid)){
          $error=1;
          $error_msg.='Userid is required';
        }
        if($error==0){          
          $data['total_selling_price']=$this->front->total_sellingprice($userid);
          $data['total_shipping_charge']=$this->front->total_shippingcharge($userid);
          $data['total_payable_amount'] = $this->front->total_amt($userid);
        if(!empty($data)){
          $response['code'] = SUCCESS_CODE;
          $response['message'] = "Success";
          $response['description'] = "Cart Price Details found";
          $response['result'] = $data;
        }else{
          $response['code'] = FAIL_CODE;
          $response['message'] = "Failed";
          $response['description'] = "Cart Price Details not found"; 
        }
      }else{
        $response['code']=VALIDATION_CODE;
        $response['message']="Validation error";
        $response['description']=rtrim($error_msg,',');
      }
    }else{
      $response[CODE]=VALIDATION_CODE;
      $response[MESSAGE]='Validation error';
      $response[DESCRIPTION]='Input data should be in JSON format only';
    }
  }else{
    $response[CODE] = FAIL_CODE;
    $response[MESSAGE] = 'Fail';
    $response[DESCRIPTION] = 'data is empty';
  }
  echo json_encode($response);
  }

  public function shipAddress(){
    $response = array();
    $inputData=file_get_contents('php://input');
    if(!empty($inputData)){
     if(isJson($inputData)){
        $reqdata=json_decode($inputData);
        $userid=(isset($reqdata->userid))?$reqdata->userid:'';
        $error=0;
        $error_msg='';
        if(empty($userid)){
          $error=1;
          $error_msg.='Userid is required';
        }
        if($error==0){
          $data['ship_address'] = $this->front->getShipAddress($userid);
          
        if(!empty($data)){
          $response['code'] = SUCCESS_CODE;
          $response['message'] = "Success";
          $response['description'] = "Shipping Address found";
          $response['result'] = $data;
        }else{
          $response['code'] = FAIL_CODE;
          $response['message'] = "Failed";
          $response['description'] = "Shipping Address not found"; 
        }
      }else{
        $response['code']=VALIDATION_CODE;
        $response['message']="Validation error";
        $response['description']=rtrim($error_msg,',');
      }
    }else{
      $response[CODE]=VALIDATION_CODE;
      $response[MESSAGE]='Validation error';
      $response[DESCRIPTION]='Input data should be in JSON format only';
    }
  }else{
    $response[CODE] = FAIL_CODE;
    $response[MESSAGE] = 'Fail';
    $response[DESCRIPTION] = 'data is empty';
  }
  echo json_encode($response);
  }

  public function addOrRemoveWishlist(){
    $response = array();
    $inputData=file_get_contents('php://input');
    if(!empty($inputData)){
     if(isJson($inputData)){
        $reqdata=json_decode($inputData);
        $userid=(isset($reqdata->userid))?$reqdata->userid:'';
        $bookid=(isset($reqdata->bookid))?$reqdata->bookid:'';
        $error=0;
        $error_msg='';
        if(empty($userid && $bookid)){
          $error=1;
          $error_msg.='Userid and Bookid is required';
        }
        if($error==0){
          $data['result']=$this->front->addRemoveWishlist($bookid,$userid);
        if($data['result'] == 1){
          $response['code'] = SUCCESS_CODE;
          $response['message'] = "Success";
          $response['description'] = "Item Removed from wishlist";
          $response['result'] = $data;
        }elseif($data['result'] == 2){
          $response['code'] = SUCCESS_CODE;
          $response['message'] = "Success";
          $response['description'] = "Item added to wishlist";
          $response['result'] = $data;
        }
        else{
          $response['code'] = FAIL_CODE;
          $response['message'] = "Failed";
          $response['description'] = "Item not added/removed"; 
        }
      }else{
        $response['code']=VALIDATION_CODE;
        $response['message']="Validation error";
        $response['description']=rtrim($error_msg,',');
      }
    }else{
      $response[CODE]=VALIDATION_CODE;
      $response[MESSAGE]='Validation error';
      $response[DESCRIPTION]='Input data should be in JSON format only';
    }
  }else{
    $response[CODE] = FAIL_CODE;
    $response[MESSAGE] = 'Fail';
    $response[DESCRIPTION] = 'data is empty';
  }
 echo json_encode($response);
  }

  public function myOrders(){
    $response = array();
    $inputData=file_get_contents('php://input');
    if(!empty($inputData)){
     if(isJson($inputData)){
        $reqdata=json_decode($inputData);
        $userid=(isset($reqdata->userid))?$reqdata->userid:'';
        $error=0;
        $error_msg='';
        if(empty($userid)){
          $error=1;
          $error_msg.='Userid is required';
        }
        if($error==0){
          $data['user_orders']=$this->front->getUserOrders($userid);
        if(!empty($data)){
          $response['code'] = SUCCESS_CODE;
          $response['message'] = "Success";
          $response['description'] = "Order Records Found";
          $response['result'] = $data;
        }else{
          $response['code'] = FAIL_CODE;
          $response['message'] = "Failed";
          $response['description'] = "Order Records not Found"; 
        }
      }else{
        $response['code']=VALIDATION_CODE;
        $response['message']="Validation error";
        $response['description']=rtrim($error_msg,',');
      }
    }else{
      $response[CODE]=VALIDATION_CODE;
      $response[MESSAGE]='Validation error';
      $response[DESCRIPTION]='Input data should be in JSON format only';
    }
  }else{
    $response[CODE] = FAIL_CODE;
    $response[MESSAGE] = 'Fail';
    $response[DESCRIPTION] = 'data is empty';
  }
 echo json_encode($response);  
  }

  public function ordersDetails(){
    $response = array();
    $inputData=file_get_contents('php://input');
    if(!empty($inputData)){
     if(isJson($inputData)){
        $reqdata=json_decode($inputData);
        $userid=(isset($reqdata->userid))?$reqdata->userid:'';
        $orderid=(isset($reqdata->orderid))?$reqdata->orderid:'';
        $error=0;
        $error_msg='';
        if(empty($userid && $orderid)){
          $error=1;
          $error_msg.='Userid and Orderid is required';
        }
        if($error==0){
          $data['order_details']=$this->front->getOrderDetails($userid,$orderid);
          $data['ship_charge'] = $this->front->getTotalShipAmt($orderid);
          $data['ship_details'] = $this->front->getShipDetails($orderid);
        if(!empty($data)){
          $response['code'] = SUCCESS_CODE;
          $response['message'] = "Success";
          $response['description'] = "Records Found";
          $response['result'] = $data;
        }else{
          $response['code'] = FAIL_CODE;
          $response['message'] = "Failed";
          $response['description'] = "Records not Found"; 
        }
      }else{
        $response['code']=VALIDATION_CODE;
        $response['message']="Validation error";
        $response['description']=rtrim($error_msg,',');
      }
    }else{
      $response[CODE]=VALIDATION_CODE;
      $response[MESSAGE]='Validation error';
      $response[DESCRIPTION]='Input data should be in JSON format only';
    }
  }else{
    $response[CODE] = FAIL_CODE;
    $response[MESSAGE] = 'Fail';
    $response[DESCRIPTION] = 'data is empty';
  }
 echo json_encode($response);  
  }

  public function wishlist(){
    $response = array();
    $inputData=file_get_contents('php://input');
    if(!empty($inputData)){
     if(isJson($inputData)){
        $reqdata=json_decode($inputData);
        $userid=(isset($reqdata->userid))?$reqdata->userid:'';
        $error=0;
        $error_msg='';
        if(empty($userid)){
          $error=1;
          $error_msg.='Userid is required';
        }
        if($error==0){
          $data['result'] = $this->front->getWishlist($userid);
        if(!empty($data['result'])){
          $response['code'] = SUCCESS_CODE;
          $response['message'] = "Success";
          $response['description'] = "Records found";
          $response['result'] = $data;
        }else{
          $response['code'] = FAIL_CODE;
          $response['message'] = "Failed";
          $response['description'] = "Records not found"; 
        }
      }else{
        $response['code']=VALIDATION_CODE;
        $response['message']="Validation error";
        $response['description']=rtrim($error_msg,',');
      }
    }else{
      $response[CODE]=VALIDATION_CODE;
      $response[MESSAGE]='Validation error';
      $response[DESCRIPTION]='Input data should be in JSON format only';
    }
  }else{
    $response[CODE] = FAIL_CODE;
    $response[MESSAGE] = 'Fail';
    $response[DESCRIPTION] = 'data is empty';
  }
  // echo $this->db->last_query();
  echo json_encode($response);  
  }

  public function applyCoupon(){
    $response = array();
    $inputData=file_get_contents('php://input');
    if(!empty($inputData)){
     if(isJson($inputData)){
        $reqdata=json_decode($inputData);
        $userid=(isset($reqdata->userid))?$reqdata->userid:'';
        $coupon=(isset($reqdata->coupon))?$reqdata->coupon:'';
        $error=0;
        $error_msg='';
        if(empty($userid && $coupon)){
          $error=1;
          $error_msg.='userid and coupon is required';
        }
        if($error==0){
            $total_amount = $this->front->total_amt($userid);
            $result = $this->front->getCouponDiscount($coupon);
            $count = $result->num_rows();
            if($count == 1){
              $result_coupon = $result->row();
              $from = $result_coupon->valid_from;
              $till = $result_coupon->valid_till;
              $status = $result_coupon->status;
              if(DATE>=$from && DATE<=$till && $status == 1){
                $coupon_type = $result_coupon->type;
                $coupon_worth = $result_coupon->worth;
                if($coupon_type == 1){
                  $total = $total_amount->total;
                  $discount_amount = ceil(($total * $coupon_worth) / 100);
                  $data['validity'] = "Valid Coupon";  
                }else{
                  $data['validity'] = "Valid Coupon";  
                  $discount_amount = $coupon_worth;
                }
              }else{
                $data['validity'] = "Invalid Coupon";
                $discount_amount = 0;
              }
            }else{
              $data['validity'] = "Invalid Coupon";
              $discount_amount = 0;
            }
        $data['coupon_discount'] = $discount_amount;
        if(!empty($data)){
          $response['code'] = SUCCESS_CODE;
          $response['message'] = "Success";
          $response['description'] = "Records Found";
          $response['result'] = $data;
        }else{
          $response['code'] = FAIL_CODE;
          $response['message'] = "Failed";
          $response['description'] = "Records not Found"; 
        }
      }else{
        $response['code']=VALIDATION_CODE;
        $response['message']="Validation error";
        $response['description']=rtrim($error_msg,',');
      }
    }else{
      $response[CODE]=VALIDATION_CODE;
      $response[MESSAGE]='Validation error';
      $response[DESCRIPTION]='Input data should be in JSON format only';
    }
  }else{
    $response[CODE] = FAIL_CODE;
    $response[MESSAGE] = 'Fail';
    $response[DESCRIPTION] = 'data is empty';
  }
  echo json_encode($response);
  }
}
?>