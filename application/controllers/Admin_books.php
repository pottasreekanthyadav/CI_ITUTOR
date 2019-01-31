<?php 
class Admin_books extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library("form_validation");
		$this->load->model('superadmin/Crud');
		$this->load->model('admin/Order_details_model');
		$this->load->library('upload');
		$this->load->helper('file');
	}
	public function add_coupons(){
		$this->load->view('books/coupons/add_coupons');
	}

	public function save_coupon(){
		extract($_POST);
		$this->form_validation->set_rules('c_code','Coupon Code','required|trim',array('required'=>'Coupon code is required'));
		$this->form_validation->set_rules('v_from','Valid From','required|trim',array('required'=>'Select valid from date'));
		$this->form_validation->set_rules('v_till','Valid till','required|trim',array('required'=>'Select valid till date'));
		$this->form_validation->set_rules('c_worth','Coupon Worth','required|numeric|trim',array('required'=>'Coupon worth is required','numeric'=>'Only numbers allowed'));
		$this->form_validation->set_rules('c_type','Coupon Type','required',array('required'=>'Select coupon type'));
		$this->form_validation->set_rules('c_status','Coupon Status','required',array('required'=>'Select coupon status'));
		if($this->form_validation->run()){
			if(isset($submit)){
				$coupon_data = array(
						'code'=>strtoupper($c_code),
						'valid_from'=>$v_from,
						'valid_till'=>$v_till,
						'worth'=>$c_worth,
						'type'=>$c_type,
						'added_on'=>date('Y-m-d'),
						'status'=>$c_status
					);
				if($v_from >= $v_till){
					$this->session->set_flashdata('failed','Valid from date should be less than Valid till date');
					$this->load->view('books/coupons/add_coupons');
				}
				else{
			    $result=$this->Crud->getDataWhere('code','rl_book_coupons_tbl','code',$c_code,NULL);
				$result_decode = json_decode($result);	    
				if($result_decode->code != 200){
					$insert_result = $this->Crud->commonInsert('rl_book_coupons_tbl',$coupon_data);
					$insert_decode = json_decode($insert_result);
					if($insert_decode->code==SUCCESS_CODE){
						$this->session->set_flashdata('success','Coupon added Successfull');
						//$this->load->view('books/coupons/add_coupons');
						redirect('books/manage-coupons');
					}
					else{
						$this->session->set_flashdata('failed','Coupon not added');
						$this->load->view('books/coupons/add_coupons');
						//redirect('books/manage-coupons');
					}
				 }
				else{
					$this->session->set_flashdata('failed','Coupon Code already present.');
					$this->load->view('books/coupons/add_coupons');
				}
			}
		}	
	}
		else{
			$this->form_validation->set_error_delimiters('<span style="color:red">','</span>');
			$this->load->view('books/coupons/add_coupons');
		}
	}
	
	public function manage_coupons(){
		$data = array();
	    $search = $this->input->post('search');
	    $base_url = base_url('books/manage-coupons');
	    $count_rows = $this->Crud->common_record_count('*','rl_book_coupons_tbl','coupon_id');
	    $config['total_rows']=$count_rows;
	    $config['per_page'] = PERPAGE;
	    $config = $this->pagination($base_url, $config['total_rows'], $config['per_page']);
	    $this->load->library('pagination');
	    $this->pagination->initialize($config);
	    $data['links']=$this->pagination->create_links();
	    $si= $this->uri->segment(3,0);
	    $data['coupon_result'] = $this->Crud->common_list_paging('*','rl_book_coupons_tbl','code','coupon_id',$config['per_page'],$si,$search,'','','','','');
	 	$this->load->view('books/coupons/manage_coupons',$data);
	}
	 public function pagination($base_url, $total_rows, $per_page){
            $config=array(
                            'base_url'          => $base_url,
                            //'uri_segment'     => 4,
                            'per_page'          => $per_page,
                            //'use_page_numbers'    =>true,
                            'total_rows'        => $total_rows,
                            'full_tag_open'     => "<ul class='pagination'>",
                            'full_tag_close'    => '</ul>',
                            'first_link'        => 'First',
                            'last_link'         => 'Last',
                            'num_links'         => 3,
                            'next_link'         => 'Next',
                            'prev_link'         => 'Prev',
                            'first_tag_open'    => '<li>',
                            'first_tag_close'   => '</li>',
                            'last_tag_open'     => '<li>',
                            'last_tag_close'    => '</li>',
                            'next_tag_open'     => '<li>',
                            'next_tag_close'    => '</li>',
                            'prev_tag_open'     => '<li>',
                            'prev_tag_close'    => '</li>',
                            'num_tag_open'      => '<li>',
                            'num_tag_close'     => '</li>',
                            'cur_tag_open'      => "<li class='active'><a>",
                            'cur_tag_close'     => '</a></li>'
                        );
            return $config;
        }
    public function update_coupon(){
    	extract($_POST);
    	if(isset($active))
			{
                $count_multiple = count($multiple);
                if($count_multiple == 0){
                    $this->session->set_flashdata('failure','Please select record');
                    redirect("books/manage-coupons");            
                }
					$arr1 = array();				
                
				foreach($multiple as $name)
				{
					$arr=array("coupon_id"=>$name);
					$data=array("status"=>1);
					$v=$this->Crud->common_update_count($arr,"rl_book_coupons_tbl",$data);//echo $v;die;
					if($v==1)
					{
						$arr1[] = 1;
					}			
				}			
				if(count($arr1)>0)
				{
					$this->session->set_flashdata('success','The Records You Selected Activated Successfully');
					redirect("books/manage-coupons");
				}  
				else
				{
					$this->session->set_flashdata('failure','The Records You Selected Already Activated ');
					redirect("books/manage-coupons");
				}
            }
			if(isset($inactive)){
				$count_multiple = count($multiple);
                if($count_multiple == 0){
                    $this->session->set_flashdata('failure','Please select record');
                    redirect("books/manage-coupons");            
                }
					$arr1 = array();				
				foreach($multiple as $name)
				{
					$arr=array("coupon_id"=>$name);
					$data=array("status"=>0);
					$v=$this->Crud->common_update_count($arr,"rl_book_coupons_tbl",$data);//echo $v;die;
					if($v==1)
					{
						$arr1[] = 1;
					}			
				}			
				if(count($arr1)>0)
				{
					$this->session->set_flashdata('success','The Records You Selected Deactivated Successfully');
					redirect("books/manage-coupons");
				}  
				else
				{
					$this->session->set_flashdata('failure','The Records You Selected Already Deactivated ');
					redirect("books/manage-coupons");
				}
            }
		if(isset($delete)){
			$count_multiple = count($multiple);
                if($count_multiple == 0){
                    $this->session->set_flashdata('failure','Please select record');
                    redirect("books/manage-coupons");            
                }
	$arr1 = array();	
	foreach($multiple as $name){
		$arr=array("coupon_id"=>$name);
		$v=$this->Crud->common_del($arr,"rl_book_coupons_tbl");
		if($v==1){
				$arr1[] = 1;
			}
		}
		if(count($arr1)){
            $this->session->set_flashdata('success','The Records You Selected Deleted Successfully');
			redirect("books/manage-coupons");
        }  
        else{
            $this->session->set_flashdata('failure','The Records You Selected not deleted');
			redirect("books/manage-coupons");
		}		
	}	
}
	public function add_slider(){
		$this->load->view('books/slider/add_slider');
	}
	public function save_slider(){
		
		$this->form_validation->set_rules('s_title','Slider title','required|trim',array('required'=>'Enter slider title'));
		$this->form_validation->set_rules('s_url','Slider url','trim');
		// $this->form_validation->set_rules('s_image','Slider Image','required',array('required'=>'Upload slider image'));
		$this->form_validation->set_rules('s_image','Slider Image','callback_file_check');
		$this->form_validation->set_rules('s_status','Slider Status','required',array('required'=>'Select slider status'));
		$this->form_validation->set_rules('s_desc','Description','trim');
		if($this->form_validation->run()){
			extract($_POST);
			$config['upload_path'] ="uploads/books/slider_images/";
			$config['allowed_types'] = "jpeg|jpg|png|gif";
			$config['file_name'] = sha1(rand(1000000,9999999).time());
			$this->upload->initialize($config);
			$response = $this->upload->do_upload('s_image');
			if($response){
			$slider_data = array(
					'slider_title'=>ucwords($s_title),
					'slider_url'=>$s_url,
					'slider_image'=>$this->upload->data('file_name'),
					'slider_description'=>ucfirst($s_desc),
					'slider_status'=>$s_status,
					'added_on'=>date('Y-m-d')
				);
				$result=$this->Crud->getDataWhere('slider_title','rl_book_slider_tbl','slider_title',$s_title,NULL);
				$result_decode = json_decode($result);	    
				if($result_decode->code != 200){
					$insert_result = $this->Crud->commonInsert('rl_book_slider_tbl',$slider_data);
					$insert_decode = json_decode($insert_result);
					if($insert_decode->code==SUCCESS_CODE){
						$this->session->set_flashdata('success','Slider added Successfull');
						redirect('books/manage-slider');
					}
					else{
						$this->session->set_flashdata('failed','Slider not added');
						redirect('books/manage-slider');
					}
				 }
				else{
					$this->session->set_flashdata('failed','Slider title already present.');
					$this->load->view('books/slider/add_slider');
				}
			}
		}
		else{
			$this->form_validation->set_error_delimiters('<span style="color:red">','</span>');
			$this->load->view('books/slider/add_slider');
		}
	}
	/*
	 * File Upload Validation 
	 */
	public function file_check($str){
        $allowed_mime_type_arr = array('image/gif','image/jpeg','image/pjpeg','image/png','image/x-png');

        $mime = get_mime_by_extension($_FILES['s_image']['name']);
        if(isset($_FILES['s_image']['name']) && $_FILES['s_image']['name']!=""){
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
                $this->form_validation->set_message('file_check', 'Please select only jpeg/gif/jpg/png file.');
                return false;
            }
        }else{
            $this->form_validation->set_message('file_check', 'Please choose a file to upload.');
            return false;
        }
    }
    /* End */
	public function manage_slider(){
		$data = array();
	    $search = $this->input->post('search');
	    $base_url = base_url('books/manage-slider');
	    $count_rows = $this->Crud->common_record_count('*','rl_book_slider_tbl','slider_id');
	    $config['total_rows']=$count_rows;
	    $config['per_page'] = PERPAGE;
	    $config = $this->pagination($base_url, $config['total_rows'], $config['per_page']);
	    $this->load->library('pagination');
	    $this->pagination->initialize($config);
	    $data['links']=$this->pagination->create_links();
	    $si= $this->uri->segment(3,0);
	    $data['slider_result'] = $this->Crud->common_list_paging('*','rl_book_slider_tbl','slider_title','slider_id',$config['per_page'],$si,$search,'','','','','');
	 	$this->load->view('books/slider/manage_slider',$data);
	}
	public function update_slider(){
    	extract($_POST);
    	if(isset($active))
			{
                $count_multiple = count($multiple);
                if($count_multiple == 0){
                    $this->session->set_flashdata('failure','Please select record');
                    redirect("books/manage-slider");            
                }
					$arr1 = array();				
                
				foreach($multiple as $name)
				{
					$arr=array("slider_id"=>$name);
					$data=array("slider_status"=>1);
					$v=$this->Crud->common_update_count($arr,"rl_book_slider_tbl",$data);//echo $v;die;
					//echo $this->db->last_query();exit;
					if($v==1)
					{
						$arr1[] = 1;
					}			
				}			
				if(count($arr1)>0)
				{
					$this->session->set_flashdata('success','The Records You Selected Activated Successfully');
					redirect("books/manage-slider");
				}  
				else
				{
					$this->session->set_flashdata('failure','The Records You Selected Already Activated ');
					redirect("books/manage-slider");
				}
            }
			if(isset($inactive))
			{
				$count_multiple = count($multiple);
                if($count_multiple == 0){
                    $this->session->set_flashdata('failure','Please select record');
                    redirect("books/manage-slider");            
                }
					$arr1 = array();				
				foreach($multiple as $name)
				{
					$arr=array("slider_id"=>$name);
					$data=array("slider_status"=>0);
					$v=$this->Crud->common_update_count($arr,"rl_book_slider_tbl",$data);//echo $v;die;
					if($v==1)
					{
						$arr1[] = 1;
					}			
				}			
				if(count($arr1)>0)
				{
					$this->session->set_flashdata('success','The Records You Selected Deactivated Successfully');
					redirect("books/manage-slider");
				}  
				else
				{
					$this->session->set_flashdata('failure','The Records You Selected Already Deactivated ');
					redirect("books/manage-slider");
				}
            }
		if(isset($delete)){
			$count_multiple = count($multiple);
                if($count_multiple == 0){
                    $this->session->set_flashdata('failure','Please select record');
                    redirect("books/manage-slider");            
                }
			$arr1 = array();	
			foreach($multiple as $name){
			$arr=array("slider_id"=>$name);
			$v=$this->Crud->common_del($arr,"rl_book_slider_tbl");
			if($v==1){
					$arr1[] = 1;
				}
			}
			if(count($arr1)){
	            $this->session->set_flashdata('success','The Records You Selected Deleted Successfully');
				redirect("books/manage-slider");
	        }  
	        else{
	            $this->session->set_flashdata('failure','The Records You Selected not deleted');
				redirect("books/manage-slider");
			}		
		}	
}
	public function manage_orders(){
		$data = array();
	    $search = $this->input->post('search');
	    $base_url = base_url('books/manage-orders');
	    $count_rows = $this->Crud->common_record_count('*','rl_book_orders_tbl','order_id');
	    $config['total_rows']=$count_rows;
	    $config['per_page'] = PERPAGE;
	    $config = $this->pagination($base_url, $config['total_rows'], $config['per_page']);
	    $this->load->library('pagination');
	    $this->pagination->initialize($config);
	    $data['links']=$this->pagination->create_links();
	    $si= $this->uri->segment(3,0);
	    $condition = array('confirmation'=>1);
	    $data['order_result'] = $this->Crud->common_list_paging('*','rl_book_orders_tbl','order_id','order_id',$config['per_page'],$si,$search, $condition,'','','','');
	 	$this->load->view('books/orders/manage_orders',$data);
	}
	public function update_order_status(){
		extract($_POST);
		if(isset($approve)){
                $count_multiple = count($multiple);
                if($count_multiple == 0){
                    $this->session->set_flashdata('failure','Please select record');
                    redirect("books/manage-orders");            
                }
					$arr1 = array();				        
				foreach($multiple as $name){
					$arr=array("order_id"=>$name);
					$data=array("order_status"=>2);
					$v=$this->Crud->common_update_count($arr,"rl_book_orders_tbl",$data);//echo $v;die;
					//echo $this->db->last_query();exit;
					if($v==1){
						$arr1[] = 1;
					}			
				}			
				if(count($arr1)>0){
					$this->session->set_flashdata('success','The Records You Selected Approved Successfully');
					redirect("books/manage-orders");
				}  
				else{
					$this->session->set_flashdata('failure','The Records You Selected Already Approved ');
					redirect("books/manage-orders");
				}
            }
        if(isset($cancel)){
                $count_multiple = count($multiple);
                if($count_multiple == 0){
                    $this->session->set_flashdata('failure','Please select record');
                    redirect("books/manage-orders");            
                }
					$arr1 = array();				        
				foreach($multiple as $name){
					$arr=array("order_id"=>$name);
					$data=array("order_status"=>3);
					$v=$this->Crud->common_update_count($arr,"rl_book_orders_tbl",$data);//echo $v;die;
					//echo $this->db->last_query();exit;
					if($v==1){
						$arr1[] = 1;
					}			
				}			
				if(count($arr1)>0){
					$this->session->set_flashdata('success','The Records You Selected Cancelled Successfully');
					redirect("books/manage-orders");
				}  
				else{
					$this->session->set_flashdata('failure','The Records You Selected Already Cancelled ');
					redirect("books/manage-orders");
				}
            }
        if(isset($delivered)){
                $count_multiple = count($multiple);
                if($count_multiple == 0){
                    $this->session->set_flashdata('failure','Please select record');
                    redirect("books/manage-orders");            
                }
					$arr1 = array();				        
				foreach($multiple as $name){
					$arr=array("order_id"=>$name);
					$data=array("order_status"=>4);
					$v=$this->Crud->common_update_count($arr,"rl_book_orders_tbl",$data);//echo $v;die;
					//echo $this->db->last_query();exit;
					if($v==1){
						$arr1[] = 1;
					}			
				}			
				if(count($arr1)>0){
					$this->session->set_flashdata('success','The Records You Selected Delivered Successfully');
					redirect("books/manage-orders");
				}  
				else{
					$this->session->set_flashdata('failure','The Records You Selected Already Delivered ');
					redirect("books/manage-orders");
				}
            }
        if (isset($order_details)){
        	$count_multiple = count($multiple);
            if($count_multiple > 1){
                $this->session->set_flashdata('failure','Please select only one record');
                redirect("books/manage-orders");            
            }
            else if($count_multiple == 0){
            	$this->session->set_flashdata('failure','Please select record');
                redirect("books/manage-orders");            	
            }
            else if($count_multiple == 1){
            	$oid = $multiple[0];
            	$result_shipping = $this->Order_details_model->get_shipping_details($oid);
            	$result_order = $this->Order_details_model->get_order_details($oid);
            	$result_order_book = $this->Order_details_model->get_book_details($oid);
            	$result_total = $this->Order_details_model->get_total($oid);
            	//echo $this->db->last_query();exit;
            	$data['shipping_result'] = $result_shipping;//json_encode($result);
            	$data['order_result'] = $result_order;
            	$data['book_result'] =$result_order_book;
            	$data['total_result'] = $result_total;
            	$this->load->view('books/orders/order_details',$data);
            }
        }
	}
}
?>