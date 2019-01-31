<?php
class Shipping_cont extends CI_controller
{
	public function __construct()
	{
      parent::__construct();
      $this->load->model(array('superadmin/Crud','rentabook/payment_model','rentabook/shipping_model','rentabook/addtocart_model'));
      $this->load->model('frontend_model','f');
      $this->load->model('rentabook/frontend_model','home_model');
      $this->user_id=$this->session->userdata('user_id');
	}
 
     public function shipping()
     {
		$data['total']=$this->addtocart_model->total_amt();
		
        //$this->addtocart_model->total_amt()->total;
	    $total_qty=$this->addtocart_model->qty()->qty;
	    if($this->session->userdata('dis_amt'))
	    {
	    	$dis_count=$this->session->userdata('dis_amt');
	    }
	    else
	    {
	    	$dis_count=0;
	    }
	    $total_amt=$this->addtocart_model->total_amt()->total-$dis_count;
		$o_id=$this->shipping_model->order_shipping($total_amt,$total_qty,$dis_count);
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name','name','required|trim',array('required'=>'Name is required'));
		$this->form_validation->set_rules('mobile','mobile','required|trim|max_length[10]|min_length[10]|numeric',
			array('required'=>'Mobile is required',
				  'max_length'=>'Mobile length is 10',
				  'min_length'=>'Mobile length is 10',
				  'numeric'=>'Only numbers allowed'
		));
		$this->form_validation->set_rules('pincode','pincode','required|trim|max_length[6]|min_length[6]|numeric',
			array('required'=>'Pincode is required',
				  'max_length'=>'Pincode length is 6',
				  'min_length'=>'Pincode length is 6',
				  'numeric'=>'Only numbers allowed'
		));
		$this->form_validation->set_rules('locality','locality','required|trim',array('required'=>'Locality is required'));
		$this->form_validation->set_rules('email','email','required|valid_email|trim',array('required'=>'Email is required','valid_email'=>'Email is not valid'));
		$this->form_validation->set_rules('address','address','required|trim',array('required'=>'Address is required'));
		// $this->form_validation->set_rules('district','district','required|trim',array('required'=>'District is required'));
		// $this->form_validation->set_rules('state','state','required|trim',array('required'=>'State is required'));
		$this->form_validation->set_rules('landmark','landmark','trim');
		$this->form_validation->set_rules('1mobile','mobile','trim|max_length[10]|min_length[10]|numeric',
			array('required'=>'Mobile is required',
				  'max_length'=>'Mobile length is 10',
				  'min_length'=>'Mobile length is 10',
				  'numeric'=>'Only numbers allowed'
		));
		$this->form_validation->set_error_delimiters('<span style="color:red;">','</span>');
        
        if($this->form_validation->run()){
	    extract($_POST);
			$u_name=$this->session->set_userdata("uname",$name);
            $u_mobile=$this->session->set_userdata("umobile",$mobile);
            $u_email=$this->session->set_userdata("uemail",$email);
			$data=array('name'=>ucfirst($name),
					        'mobileno'=>$mobile,
					        'pincode'=>$pincode,
					        'locality'=>$locality,
					        'address'=>$address,
					        'landmark'=>$landmark,
					        'almobile'=>$lmobile,
					        'address_type'=>$addr_type,
					        'order_id'=>$o_id,
					        'user_id'=>$this->user_id,
					        'email'=>$email,
					        'added_on'=>DATE
					        );
				$this->load->model('shipping_model');
				$order_suc=$this->shipping_model->user_adress($data);
				if($order_suc)
					redirect('rentabook/frontend/cod_online');
		}
        $data["category_data"]=$this->f->get_cate_subcat_books();
        $data['total_price']=$this->addtocart_model->total_amt();
        $data['total_sp']=$this->addtocart_model->total_sellingprice();
        $data['total_item']=$this->addtocart_model->get_cart_count();
        $data['total_ship_char']=$this->addtocart_model->total_shippingcharge();
        $data['ship']=$this->addtocart_model->user_shipping();
		$this->load->view("rentabook/shipping_order",$data);
	}


	public function cod_online_pay()
	{
		extract($_POST);
		if(isset($submit))
		{
			if($payment_type==1)
			{
				$update=$this->payment_model->update_order($payment_type);
                if($update){
                	//$session_data = array('ord_id,alltotal,dis_amt');
                	// $this->session->unset_userdata($session_data);
                	//unset($_SESSION['ord_id']);
                	$this->session->unset_userdata("'dis_amt'");
                	$this->session->unset_userdata("coupon_code");
                	$this->session->unset_userdata("alltotal");
                	redirect("rentabook/frontend/sucess");
                }
                	//echo "sucess";
			}
			else{
			//code for online
             redirect("rentabook/frontend/payment");
				
		}

		}
	}
}
?>