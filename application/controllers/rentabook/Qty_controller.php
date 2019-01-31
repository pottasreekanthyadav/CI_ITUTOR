<?php
class Qty_controller extends CI_controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model("rentabook/qty_model");
		$this->load->model("rentabook/addtocart_model");
		$this->load->model('rentabook/frontend_model','home_model');
	}
	public function dec_qty()
	{
		$c_id=$this->uri->segment(4);
		//echo $c_id;
		//$c_id=$this->input->post('cart_id');
		unset($_SESSION['dis_amt']);
		if(!empty($c_id) && is_numeric($c_id))
		{
			$res=$this->qty_model->fetch_dec_qty($c_id);
			$row=$res->row();
			if($row->qty>1)
			{
			$new_qty=$row->qty-1;
			$new_total=($new_qty*$row->selling_price)+($new_qty*$row->shipping_charge);
			//total selling price(total_sp) and shipping charge(total_shipcharge) update in cart table
			$new_total_selling=$new_qty*$row->selling_price;
			$new_total_shipping=$new_qty*$row->shipping_charge;
			//updating cart qty
			$update=$this->qty_model->update_dec_qty($new_total,$new_qty,$c_id,$new_total_selling,$new_total_shipping);
			if($update)
				redirect('rentabook/frontend/checkout');
				//echo "sucess";
			else
				echo "Something went wrong..!";
			//end
		    }
		    else
		        redirect('rentabook/frontend/checkout');
		}
		else
		{
			echo "wrong";
		}
	}

	public function inc_qty()
	{
		$cart_id=$this->uri->segment(4);
		//$cart_id=$_GET["cid"];
		//echo $cart_id;exit;
		unset($_SESSION['dis_amt']);
		if(!empty($cart_id) && is_numeric($cart_id)){
			$res=$this->qty_model->fetch_inc_qty($cart_id);
			$row=$res->row();
            if($row->qty<$row->stock){
			$new_qty=$row->qty+1;
			$new_total=($new_qty*$row->selling_price)+($new_qty*$row->shipping_charge);
			//total selling price(total_sp) and shipping charge(total_shipcharge) update in cart table
			$new_total_sell=$new_qty*$row->selling_price;
			$new_total_shipp=$new_qty*$row->shipping_charge;
			//updating cart qty
			$update=$this->qty_model->update_inc_qty($new_total,$new_qty,$cart_id,$new_total_sell,$new_total_shipp);
			if($update)
				redirect('rentabook/frontend/checkout');
				//echo "sucess";
			else
				echo "Something went wrong..!";
			//end
		}
		$cart_bookids = $this->home_model->getCartBookIds();
        if($cart_bookids != null){
            $authors_array = $this->home_model->getAuthors($cart_bookids);
            $data['cart_related_books'] = $this->home_model->getCartRelatedBooks($authors_array);
        }
        $data['new_data']=$this->home_model->getNewBooks();
		$data['cmsg']="No More Books Available";
        $data['total_price']=$this->addtocart_model->total_amt();
        $data['total_sp']=$this->addtocart_model->total_sellingprice();
        $data['total_item']=$this->addtocart_model->get_cart_count();
        $data['total_ship_char']=$this->addtocart_model->total_shippingcharge();
        //$data["checkout_count"]=$this->addtocart_model->count_checkout();
        //$this->load->view('rentabook/checkout',$data);
        $res=$this->home_model->data_fetch_checkout();
        $data['checkout_data']=$res;
        //sending wishlist id to frontend_model
        //if($this->session->userdata())
		$this->load->view("rentabook/checkout",$data);
		    }
		    else
		    {
		    	//redirect('rentabook/frontend/checkout');
		    	echo "wrong";
		    }
		}
}
?>