<?php 
class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
	 $this->load->model('api/Booksapi_model','front');
  }
	public function get_data(){
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
          $cols = array("title","image","book_id","familiarity_type");
          $table="rl_books_tbl";
          $where_1=array('familiarity_type'=>1);
          $where_2=array('familiarity_type'=>2,'familiarity_type'=>3);
          $data['book_data']=$this->front->get_all_books($cols,$table,$where_1,$where_2);
          $data['cat_subcat_data']=$this->front->get_cate_subcat_books();
          $data['slider_data'] =$this->front->get_slider();
          $data['get_cart_count']=$this->front->get_cart_count($userid);
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

    public function book_description(){
      $response = array();
      $inputData = file_get_contents('php://input');
       if(!empty($inputData)){
          if(isJson($inputData)){
               $reqdata=json_decode($inputData);
               $bookid = (isset($reqdata->bookid))?$reqdata->bookid:'';
               $ip = $_SERVER['REMOTE_ADDR'];
              $error=0;
              $error_msg='';
        if(empty($bookid)){
           $error=1;
           $error_msg.='Bookid is required';
       }
       if($error==0){
            $data['book_view_count']=$this->front->bookview_ip($bookid,$ip);
            $data['get_publiser']=$this->front->get_publisher_auther($bookid);
        if(!empty($data)){
          $response['code'] = SUCCESS_CODE;
          $response['message'] = "Success";
          $response['description'] = "Records Found";
          $response['result'] = $data;
        }
        else{
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
  /**
   * [book_description description]
   * @return [type] [json]
   */
   public function checkout(){
      $response = array();
      $inputData = file_get_contents('php://input');
       if(!empty($inputData)){
          if(isJson($inputData)){
               $reqdata=json_decode($inputData);
               $userid=(isset($reqdata->userid))?$reqdata->userid:'';
               $bookid = (isset($reqdata->bookid))?$reqdata->bookid:'';
               $quantity = (isset($reqdata->quantity))?$reqdata->quantity:'';
               $ip = $_SERVER['REMOTE_ADDR'];
              $error=0;
              $error_msg='';
        if(empty($userid && $bookid && $quantity)){
           $error=1;
           $error_msg.='Userid,Bookid and Quantity is required';
       }
       if($error==0){
            $data['cat_subcat_data']=$this->front->get_cate_subcat_books();
            $data['get_cart_count']=$this->front->get_cart_count($userid);
            $res=$this->front->total_amt($userid);
            $data['total_price']=$res->total;
            $data['total_sp']=$this->front->total_sellingprice($userid);
            $data['cart_count']=$this->front->get_cart_count($userid);
            $data['total_ship_charge']=$this->front->total_shippingcharge($userid);
        if(!empty($data)){
          $response['code'] = SUCCESS_CODE;
          $response['message'] = "Success";
          $response['description'] = "Records Found";
          $response['result'] = $data;
        }
        else{
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