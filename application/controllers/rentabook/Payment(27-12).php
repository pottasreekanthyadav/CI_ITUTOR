<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Payment extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
         $this->load->model(array('Common_model','Front_model','superadmin/Crud','rentabook/addtocart_model','rentabook/payment_model'));
         $this->load->model('rentabook/frontend_model','home_model');
         $this->ip_address=$this->input->ip_address();
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
                   $this->load->view("rentabook/sucess",$data);
                
         }
        }
    }
}
?>