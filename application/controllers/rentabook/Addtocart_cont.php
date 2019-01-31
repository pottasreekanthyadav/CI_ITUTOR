<?php
class Addtocart_cont extends CI_controller
{
    public function __construct(){
        parent::__construct();
         $this->load->model("rentabook/frontend_model","home_model");
         $this->load->model("rentabook/Addtocart_model");
    }

	public function cart(){
        $uid=$this->session->userdata("user_id");
        $this->session->unset_userdata("dis_amt");
        if($uid){
        extract($_POST);
            if(isset($add)){
                $book_id=base64_decode($this->uri->segment(4));
                $new_qty = $qty;
                $res=$this->Addtocart_model->addtocart($book_id,$new_qty);
                if($res)
                    redirect('checkout');
                else
                    redirect('checkout');
            } 
        }
        else{
            $this->session->set_userdata('book_uri1',$this->uri->segment(5));
            $this->session->set_userdata('book_uri2',$this->uri->segment(6));
            redirect("signup/book");
      }
    }

    public function coupon(){
        extract($_POST);
        if(isset($appply)){
            $cres=$this->Addtocart_model->user_coupon($coupon);
            $count=$cres->num_rows();
            if($count==1){
                $res=$cres->row();
                $from = $res->valid_from;
                $till = $res->valid_till;
                if(DATE >$from && DATE <$till){
                    if($res->type==2){
                        $this->session->set_flashdata('msg1','');
                        $array=array("dis_amt"=>$res->worth,"coupon_code"=>$res->code);
                        $this->session->set_userdata($array);
                    }
                 //code for calculate discount amount of loged user 
                    if($res->type==1){
                        $this->session->set_flashdata('msg1','');
                        $array=array("coupon_code"=>$res->code);
                        $this->session->set_userdata($array);
                        $all_total=$this->session->userdata('totalsp');
                        $a=$res->worth;
                        $dis_amt=ceil(($all_total*$res->worth)/100);
                        $dis_arr=array("dis_amt"=>$dis_amt);
                        $this->session->set_userdata($dis_arr);
                    }
                    redirect("checkout");
                }
                else{
                    $this->session->set_flashdata('msg1','Coupon Expired');
                    $this->session->unset_userdata("dis_amt");
                    redirect("checkout");
                }
        $res=$this->home_model->data_fetch_checkout();
        $data=array();
        $data["category_data"]=$this->home_model->get_cate_subcat_books();
        $data['book_data']=$this->home_model->get_all_books();
        $this->load->model("addtocart_model");
        $data['total_price']=$this->Addtocart_model->total_amt();
        $data['total_sp']=$this->Addtocart_model->total_sellingprice();
        $data['total_item']=$this->Addtocart_model->get_cart_count();
        $data['total_ship_char']=$this->Addtocart_model->total_shippingcharge();
        //$this->load->view('rentabook/checkout',$data);
        $data['checkout_data']=$res;
        $this->load->view("rentabook/checkout",$data);
        }
            else{
                $this->session->set_flashdata('msg1','Invalid Coupon');
                $this->session->unset_userdata("dis_amt");
                redirect("checkout");
            }
        }
    }
    public function wishlist(){
        $uid=$this->session->userdata("user_id");
        if(!empty($uid)){
       $bookid=base64_decode($this->uri->segment(4));

       $res=$this->Addtocart_model->add_wishlist($bookid);
       if($res==1){
        // $data['wish_result']=$this->home_model->return_wishlist();
        redirect($this->session->userdata('desc_url'));
            // $ip = $_SERVER['REMOTE_ADDR'];
            // $data['view_count'] = $this->home_model->bookview_ip($ip,$bookid);
            // $data["category_data"]=$this->home_model->get_cate_subcat_books();
            // $data['realted_book_data']=$this->home_model->getReatedBooks($bookid);
            // $data['product_detail']=$this->home_model->get_all_products($bookid);
            // $data['total_item']=$this->Addtocart_model->get_cart_count();
            // $data['get_publiser']=$this->Addtocart_model->get_publisher_auther($bookid);
            
            // $this->load->view('rentabook/description_view',$data);
            //redirect()
      }
  }
  else{
            $this->session->set_userdata('book_uri1',$this->uri->segment(5));
            $this->session->set_userdata('book_uri2',$this->uri->segment(6));
          redirect("signup/book");
}
    }
}


?>