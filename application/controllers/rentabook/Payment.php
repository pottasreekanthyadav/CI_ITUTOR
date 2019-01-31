<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Payment extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
         $this->load->model(array('Common_model','Front_model','superadmin/Crud','rentabook/addtocart_model','rentabook/payment_model'));
         $this->load->model('rentabook/frontend_model','home_model');
         $this->ip_address=$this->input->ip_address();
         $this->mobile=$this->session->userdata('user_mobile');
         $this->order_id=$this->session->userdata('ord_id');
         $this->email=$this->session->userdata('email');
    }
 public function payment_info_update(){
 $amount=$_POST["amount"];
 $txnid=$_POST['razorpay_payment_id'];
 $order_id=$_POST['order_id'];
 $status_desc=(isset($txnid))?"success":"failure";
 $name=$this->session->userdata('user_name');
 $user_id=$this->session->userdata('user_id');
 $this->session->set_userdata('amount',$amount);
 $this->session->set_userdata('status_desc',$status_desc);
 $this->session->set_userdata('txnid',$txnid);
 $this->session->set_userdata('status_desc',$status_desc);
 $user_type=$this->session->userdata('user_type');
 if($status_desc=='success')
 {
    $payment_status=1;
 }
 else
 {
    $payment_status=2;
 }
        $insert_data=array(
        'name'=>$name,
        'transaction_id'=>$txnid,
        'amount'=>$amount,
        'payment_date'=>DATE,
        'payment_status'=>$payment_status,
        'status_desc'=>$status_desc,
        'user_id'=>$user_id,
        'user_type'=>$user_type,
        'order_id'=>$order_id
    );
        $res=json_decode($this->Crud->commonInsert("rl_books_payment_info_tbl",$insert_data));
        if($res->code==SUCCESS_CODE)
        {
         $user_recs=json_decode($this->get_shipping_details());
         if($user_recs->code==SUCCESS_CODE)
                    {
                         $user_details=$user_recs->result[0];
            order_sms_send('1234',$user_details->mobileno,"Dear user,");
            if($_SERVER['HTTP_HOST']=="https")
          {
               $email_data=array('name'=>$user_details->name,'email'=>$this->user_details->email,'mobile'=>$user_details->mobileno);
               $message=$this->load->view('rentabook/emailtemp/order_mail',$email_data,true);
               $email_res=send_user_email('sjitendra077@gmail.com','request@itsmytutor.com','Itsmytutor Book shopping',$message);
           }
                    }
           redirect("rentabook/frontend/sucess");
         }
         else
         {
            echo "something went wrong";
         }

    } 
    public function  online_pay()
    {
      
        //echo "hi";exit;
        extract($_POST);
        if(isset($submit))
        {
            
            //payment_type==1 means cod, and payment_type==2 means online
            if($payment_type==2)
            {
              
                $update=$this->payment_model->update_order($payment_type);
                if($update){
                   $this->load->view(BOOK.'payment/razorpay_book_form');
                }
                    //echo "sucess";
            }
           else if($payment_type==1)
         {

            //echo $payment_type;exit;
            $update=$this->payment_model->update_cod_order($payment_type);
            if($update==1)
                   $data['total_item']=$this->addtocart_model->get_cart_count();
                    $data['new_data']=$this->home_model->getNewBooks();
                $user_recs=json_decode($this->get_shipping_details());
                    if($user_recs->code==SUCCESS_CODE)
                    {
                         $user_details=$user_recs->result[0];
                         //echo $user_details->mobileno;exit;
                     order_sms_send('1234567',$user_details->mobileno,"Dear user,");
          // if($_SERVER['HTTP_HOST']!="localhost")
          // {
          //   echo $_SERVER['HTTP_HOST'];exit;
          //      $email_data=array('name'=>$user_details->name,'email'=>$this->user_details->email,'mobile'=>$user_details->mobileno);
          //      print_r($email_data);exit;
          //      $message=$this->load->view('rentabook/emailtemp/order_mail',$email_data,true);
          //      $email_res=send_user_email('sjitendra077@gmail.com','request@itsmytutor.com','Itsmytutor Book shopping',$message);
          //  }
                    }
                    // $this->session->set_userdata('lastUrl',current_url());
                     $this->load->view("rentabook/sucess",$data);
              }
        }
    }
    public function get_shipping_details(){
        $params['cols']="name,email,mobileno";
        $params['table']="rl_shipping_tbl";
        $params['wherecondition']=array('order_id'=>$this->order_id);
        $ship_details=$this->Common_model->commonget($params);
        // print_r(json_decode($ship_details));exit;
        return $ship_details;
    }
    public function test_email(){
          $this->send_user_email('jitendra.richlabz@gmail.com','request@itsmytutor.com','hiii','hiii new');
    }
    
}
?>