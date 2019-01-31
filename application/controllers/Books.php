<?php 
class Books extends CI_Controller
{
  public function __construct()
	{
		parent::__construct();
        $this->load->model('superadmin/Crud');
        $this->load->model('books_model');
	}
 public function add_category()
 {
 	$this->load->view('books/categories/add_category');
 }
 public function save_category()
 {
 			$file_name = $_FILES['image']['name'];
 			$extension = fileExtension($file_name);
 			$extensions_arr = ['png','jpg','jpeg','PNG','JPG','JPEG'];
            $this->form_validation->set_rules('category_title', 'Title', 'required');
            if ($this->form_validation->run() == false) 
             {
                $this->load->view('books/categories/add_category');
             }
            else{
		            if($file_name=='')
		 			{
		                $this->session->set_flashdata('failed', 'Image is required');
		                $this->load->view('books/categories/add_category');  				
		 			}
		 			if(!in_array($extension,$extensions_arr))
		 			 {
		 				$this->session->set_flashdata('failed', 'Image is not valid (png,jpg,jpeg are allowed) ');
		                 $this->load->view('books/categories/add_category');
		 			 }
		 		else
		 			{
                $cat_image_name = '';
                $cat_image = $_FILES['image']['name'];
                if (isset($cat_image) && $cat_image != '')
                {
                    $file_name = $_FILES['image']['name'];
                    $file_path = $_FILES['image']['tmp_name'];
                    $im_name = 'cat_';
                    $extension = fileExtension($file_name);
                    $pic_name = $im_name . '_' . sha1(rand(100000, 999999) . time()) . '.' . $extension;
                    $moved = move_uploaded_file($file_path, "uploads/books/categories/$pic_name");
                    if($moved)
                    {
                        $cat_image_name=$pic_name;
                    }
                    else
                    {
                        echo 'Problem occured while uploading bill image.';exit;
                    }
                    
                }
                $get_priority = $this->books_model->get_cat_priority();
                if($get_priority=='')
                {
                	$get_priority=1;
                }
                else
                {
                	$get_priority=$get_priority+1;
                }
                $cat_data = array(
                     'title' =>ucfirst($this->input->post('category_title')),
                     'image' =>$cat_image_name,
                     'category_priority'=>$get_priority,
                     'created_on'=>DATE
                     );
                    $insert=$this->Crud->commonInsert('rl_book_categories_tbl',$cat_data);
                    $insert_decode = json_decode($insert);
                    if($insert_decode->code == SUCCESS_CODE)
                    {
                        $this->session->set_flashdata('success', 'Category added successfully');
                        redirect('books/manage_categories'); 
                    }
                    else
                    {
                        $this->session->set_flashdata('failed', 'Category not added');
                        redirect('books/manage_categories'); 
                    }
		 			}
                 }
 }
 public function manage_categories()
 {
	    $data = array();
	    $search = $this->input->post('search');
	    $base_url = base_url('books/manage_categories');
	    $count_rows = $this->Crud->common_record_count('*','rl_book_categories_tbl','category_id');
	    $config['total_rows']=$count_rows;
	    $config['per_page'] = PERPAGE;
	    $config = $this->pagination($base_url, $config['total_rows'], $config['per_page']);
	    $this->load->library('pagination');
	    $this->pagination->initialize($config);
	    $data['links']=$this->pagination->create_links();
	    $si= $this->uri->segment(3,0);
	    $data['categories'] = $this->Crud->common_list_paging('*','rl_book_categories_tbl','title','category_id',$config['per_page'],$si,$search,'','','','','');
	 	$this->load->view('books/categories/manage_categories',$data);
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
public function add_subcategory()
 {
    $data = array();
    $data['category_result']=$this->Crud->getData('*','rl_book_categories_tbl','category_list',array('category_status'=>1));
    $this->load->view('books/subcategories/add_subcategory',$data);
 }
 public function save_subcategory()
 {
            //print_r($_POST);exit;
            $file_name = $_FILES['image']['name'];
            $extension = fileExtension($file_name);
            $extensions_arr = ['png','jpg','jpeg','PNG','JPG','JPEG'];
            $this->form_validation->set_rules('category', 'Category', 'required');
            $this->form_validation->set_rules('subcategory_title', 'Title', 'required');
            //$this->form_validation->set_rules('image', 'Subcategory Image', 'required');   
            if ($this->form_validation->run() == false) 
             {
                $data = array();
                $data['category_result']=$this->Crud->getData('*','rl_book_categories_tbl','category_list',array('category_status'=>1));
                $this->load->view('books/subcategories/add_subcategory',$data);
             }
            else{
                $subcat_image_name = '';
                $subcat_image = $_FILES['image']['name'];
                if (isset($subcat_image) && $subcat_image != '')
                {
                    $file_name = $_FILES['image']['name'];
                    $file_path = $_FILES['image']['tmp_name'];
                    $im_name = 'subcat_';
                    $extension = fileExtension($file_name);
                    $pic_name = $im_name . '_' . sha1(rand(100000, 999999) . time()) . '.' . $extension;
                    $moved = move_uploaded_file($file_path, "uploads/books/subcategories/$pic_name");
                    if($moved)
                    {
                        $subcat_image_name=$pic_name;
                    }
                    else
                    {
                        echo 'Problem occured while uploading bill image.';exit;
                    }
                    
                }
                $get_priority = $this->books_model->get_subcat_priority();
                if($get_priority=='')
                {
                    $get_priority=1;
                }
                else
                {
                    $get_priority=$get_priority+1;
                }
                $subcat_data = array(
                     'category_id'=>$this->input->post('category'),
                     'title' =>ucfirst($this->input->post('subcategory_title')),
                     'image' =>$subcat_image_name,
                     'subcategory_priority'=>$get_priority,
                     'created_on'=>DATE
                     );
                    $insert=$this->Crud->commonInsert(' rl_book_subcategories_tbl',$subcat_data);
                    $insert_decode = json_decode($insert);
                    if($insert_decode->code == SUCCESS_CODE)
                    {
                        $this->session->set_flashdata('success', 'Sub category added successfully');
                        redirect('books/manage_subcategories'); 
                    }
                    else
                    {
                        $this->session->set_flashdata('failed', 'Sub category not added');
                        redirect('books/manage_subcategories'); 
                    }
                 }    
 }
public function manage_subcategories()
 {
        $data = array();
        $search = $this->input->post('search');
        $category = $this->input->post('category');
        if($category)
        {
            $where = array('rl_book_subcategories_tbl.category_id'=>$category);
        }
        else
        {
            $where = array();
        }
        $base_url = base_url('books/manage_subcategories');
        $count_rows = $this->Crud->common_record_count('*','rl_book_subcategories_tbl','subcategory_id');
        $config['total_rows']=$count_rows;
        $config['per_page'] = PERPAGE;
        $config = $this->pagination($base_url, $config['total_rows'], $config['per_page']);
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        $data['links']=$this->pagination->create_links();
        $si= $this->uri->segment(3,0);
        $data['categories'] = $this->Crud->common_list_paging('rl_book_subcategories_tbl.*,rl_book_categories_tbl.title as category_title','rl_book_subcategories_tbl','rl_book_subcategories_tbl.title','subcategory_id',$config['per_page'],$si,$search,$where,'','','rl_book_categories_tbl','rl_book_categories_tbl.category_id=rl_book_subcategories_tbl.category_id');
        $data['category_result']=$this->Crud->getData('*','rl_book_categories_tbl','category_list',array('category_status'=>1));
        $this->load->view('books/subcategories/manage_subcategories',$data);
 }
 //Add books starts here//
 public function add_books()
 {
    $data = array();
    $data['category_result']=$this->Crud->getData('*','rl_book_categories_tbl','category_list',array('category_status'=>1));
    $data['subcategory_result']=$this->Crud->getData('*',' rl_book_subcategories_tbl','subcategory_list',array('subcategory_status'=>1));
    $this->load->view('books/add_books',$data);
 }
 public function subcatWithcat()
 {
        $submenu_data = '<option value="0">--Choose Subcategory--</option>';
        $category_id = $this->input->post('category');
        if (num_check($category_id)) {
            $submenu_qry = $this->books_model->subMenu(array('category_id' => $category_id,'subcategory_status='=>1));
            $request = json_decode($submenu_qry);
            if ($request->code == SUCCESS_CODE) {
                foreach($request->submenu_result as $response){ 
                    $submenu_data.='<option value="'.$response->subcategory_id.'">'.$response->title.'</option>';
                }
            } else {
                $submenu_data.='<option value="0">No results found</option>';
            }
        } else {
            $submenu_data.='<option value="0">No results found</option>';
        }
        echo $submenu_data;
 }
 public function save_books()
 {
            $file_name = $_FILES['image']['name'];
            $this->form_validation->set_rules('category', 'Category', 'required');
            $this->form_validation->set_rules('subcategory', 'Subcategory', 'required');
            $this->form_validation->set_rules('title', 'Title', 'required'); 
            $this->form_validation->set_rules('description', 'Description', 'required');
            $this->form_validation->set_rules('stock', 'Stock', 'required');
            $this->form_validation->set_rules('price', 'Price', 'required');
            $this->form_validation->set_rules('availability_type', 'Availability type', 'required');
            $this->form_validation->set_rules('book_status', 'Book status', 'required'); 
            if ($this->form_validation->run() == false) 
             {
                $data = array();
                $data['category_result']=$this->Crud->getData('*','rl_book_categories_tbl','category_list',array('category_status'=>1));
                $this->load->view('books/add_books',$data);
             }
            else{
                $book_image_name = '';
                $book_image = $_FILES['image']['name'];
                if (isset($book_image) && $book_image != '')
                {
                    $file_name = $_FILES['image']['name'];
                    $file_path = $_FILES['image']['tmp_name'];
                    $im_name = 'book_';
                    $extension = fileExtension($file_name);
                    $pic_name = $im_name . '_' . sha1(rand(100000, 999999) . time()) . '.' . $extension;
                    $moved = move_uploaded_file($file_path, "uploads/books/books_images/$pic_name");
                    if($moved)
                    {
                        $book_image_name=$pic_name;
                    }
                    else
                    {
                        echo 'Problem occured while uploading bill image.';exit;
                    }
                    
                }
                $book_data = array(
                     'category_id'=>$this->input->post('category'),
                     'subcategory_id' =>$this->input->post('subcategory'),
                     'title' =>ucfirst($this->input->post('title')),
                     'description' =>$this->input->post('description'),
                     'stock'=>$this->input->post('stock'),
                     'price'=>$this->input->post('price'),
                     'image'=>$book_image_name,
                     'availability_type'=>$this->input->post('availability_type'),
                     'status'=>$this->input->post('book_status'),
                     'familiarity_type'=>$this->input->post('book_familiarity'),
                     'book_format'=>$this->input->post('book_format'),
                     'added_on'=>DATE
                     );
                    $insert=$this->Crud->commonInsert('rl_books_tbl',$book_data);
                    $insert_decode = json_decode($insert);
                    if($insert_decode->code == SUCCESS_CODE)
                    {
                        $this->session->set_flashdata('success', 'Book added successfully');
                        redirect('books/manage_books'); 
                    }
                    else
                    {
                        $this->session->set_flashdata('failed', 'Book is not added');
                        redirect('books/manage_books'); 
                    }
                 }    
 }
 public function manage_books(){
        $search_cat = $this->input->post('category');
        $search_subcat = $this->input->post('subcategory');
        $search_status = $this->input->post('status');
        $search_title = $this->input->post('search');
        $data = array();
        $search = $this->input->post('search');
        $category = $this->input->post('category');
        if($category)
        {
            $where = array('rl_book_subcategories_tbl.category_id'=>$category);
        }
        else
        {
             $where = array();
        }
        $base_url = base_url('books/manage_books');
        $count_rows = $this->Crud->common_record_count('book_id','rl_books_tbl','book_id');
        $config['total_rows']=$count_rows;
        $config['per_page'] = PERPAGE;
        $config = $this->pagination($base_url, $config['total_rows'], $config['per_page']);
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        $data['links']=$this->pagination->create_links();
        $si= $this->uri->segment(3,0);
        $data['books_list'] = $this->books_model->books_listing($search_cat,$search_subcat,$search_status,$search_title,$si,$config['per_page']);
        $data['category_result']=$this->Crud->getData('*','rl_book_categories_tbl','category_list',array('category_status'=>1));
        $this->load->view('books/manage_books',$data);
 }
 public function get_stock()
 {
    $title = trim($this->input->post('title'));
    echo $stock=$this->books_model->get_stock($title);
 }
 public function import_books()
 {
    $data= array();
    $data['category_result']=$this->Crud->getData('*','rl_book_categories_tbl','category_list',array('category_status'=>1));
    $this->load->view('books/import_books',$data);
 }
 public function updateclasspriority(){
    extract($_POST);
	if(isset($active))
			{
                $count_multiple = count($multiple);
                if($count_multiple == 0){
                    $this->session->set_flashdata('failure','Please select record');
                    redirect("books/manage_categories");            
                }
					$arr1 = array();				
                
				foreach($multiple as $name)
				{
					$arr=array("category_id"=>$name);
					$data=array("category_status"=>1);
					$v=$this->Crud->common_update_count($arr,"rl_book_categories_tbl",$data);//echo $v;die;
					if($v==1)
					{
						$arr1[] = 1;
					}			
				}			
				if(count($arr1)>0)
				{
					$this->session->set_flashdata('success','The Records You Selected Activated Successfully');
					redirect("books/manage_categories");
				}  
				else
				{
					$this->session->set_flashdata('failure','The Records You Selected Already Activated ');
					redirect("books/manage_categories");
				}
            }
			if(isset($inactive))
			{
					$arr1 = array();				
				foreach($multiple as $name)
				{
					$arr=array("category_id"=>$name);
					$data=array("category_status"=>0);
					$v=$this->Crud->common_update_count($arr,"rl_book_categories_tbl",$data);//echo $v;die;
					if($v==1)
					{
						$arr1[] = 1;
					}			
				}			
				if(count($arr1)>0)
				{
					$this->session->set_flashdata('success','The Records You Selected DeActivated Successfully');
					redirect("books/manage_categories");
				}  
				else
				{
					$this->session->set_flashdata('failure','The Records You Selected Already DeActivated ');
					redirect("books/manage_categories");
				}
            }
			if(isset($delete)){
	$arr1 = array();	
	foreach($multiple as $name)
		{
		$arr=array("category_id"=>$name);
		$v=$this->Crud->common_del($arr,"rl_book_categories_tbl");
		if($v==1)
			{
				$arr1[] = 1;
			}
		}
			if(count($arr1))
                        {
			
                        	$this->session->set_flashdata('success','The Records You Selected Deleted Successfully');
					redirect("books/manage_categories");
                        }  
                        else
                        {
                        	$this->session->set_flashdata('failure','The Records You Selected not deleted');
						redirect("books/manage_categories");
						}		
	}

 }
 public function bulk_import()
 {
        $category = $this->input->post('category');
        $subcategory = $this->input->post('subcategory');
        $this->form_validation->set_rules('category', 'Category', 'required');
        $this->form_validation->set_rules('subcategory', 'Subcategory', 'required');
        if ($this->form_validation->run() == false) 
             {
                $data = array();
                $data['category_result']=$this->Crud->getData('*','rl_book_categories_tbl','category_list',array('category_status'=>1));
                $this->load->view('books/import_books',$data);
             }
        else{
            if($subcategory == 0)
            {
        $this->session->set_flashdata('error_msg','Subcategory is required');
        $data['category_result']=$this->Crud->getData('*','rl_book_categories_tbl','category_list',array('category_status'=>1));
        $this->load->view('books/import_books',$data);
            }
        $errors = 0;
        $error_messages = array();
        $success_msg = array();
        if($_FILES["import_sheet"]["size"] > 0)
                    {
                         $k = 0;
                         $uploadfilename = $_FILES["import_sheet"]["tmp_name"];
                         $file = fopen($uploadfilename, "r");
                         //while loop starts
                         while (($emapData = fgetcsv($file, 5000, ",")))
                         {
                            $k++;
                            if($k == 1)
                            {
                                if($emapData[0]!="Title" || $emapData[1]!="Description" || $emapData[2]!="Price"|| $emapData[3]!="Book image"|| $emapData[4]!="Availability Type"|| $emapData[5]!="Book status" || $emapData[6]!="Book Familiarity type" || $emapData[7]!="Book Format")
                                {
                                 
                                        $message= 'Sheet is not valid.Please choose Books related sheet only..';
                                        $error_messages[] = $message;
                                        $this->session->set_flashdata('error_msg',implode(",",$error_messages));
                                         redirect('books/manage_books');
                                }
                            }
                            else
                            {
    $title = $emapData[0];
    $description = $emapData[1];
    $price = $emapData[2];
    $image = $emapData[3];
    $availability_type = strtolower($emapData[4]);
    $status = strtolower($emapData[5]);
    $familiarity_type = strtolower($emapData[6]);
    $book_format = strtolower($emapData[7]);
    $imageextension = array("jpg", "JPG", "PNG" , "png", "jPEG", "jpeg");
    if($title == '')
    {
        $errors = 1;
        $error_messages[] = 'Please enter title of '.$this->ordinal($k-1).' book';
    }
    if($description == '')
    {
        $errors = 1;
        $error_messages[] = 'Please enter description of '.$this->ordinal($k-1).' book';
    }
    if($price == '')
    {
        $errors = 1;
        $error_messages[] = 'Please enter price of '.$this->ordinal($k-1).' book';
    }
    if($price != '' && !num_check($price))
    {
        $errors = 1;
        $error_messages[] = 'Please enter price of '.$this->ordinal($k-1).' book';
    }       
    if($image == '')
    {
        $errors = 1;
        $error_messages[] = 'Please enter link for image of '.$this->ordinal($k-1).' book';
    }    
  if (!empty($image)){
            $ex_arr = explode('.',$image);
            $extension = end($ex_arr);
            $extension_arr = ['jpg','jpeg','png','PNG','JPG','JPEG'];
            if(!in_array($extension,$extension_arr))
            {
                 $errors = 1;
                 $error_messages[] = 'Please enter valid image with extension(jpg,jpeg,png) of '.$this->ordinal($k-3).' book';
            }
        }    
    if($availability_type == '')
    {
        $errors = 1;
        $error_messages[] = 'Please choose availability_type of '.$this->ordinal($k-1).' book';
    } 
    if($status == '')
    {
        $errors = 1;
        $error_messages[] = 'Please choose status of '.$this->ordinal($k-1).' book';
    } 
    if($familiarity_type == '')
    {
        $errors = 1;
        $error_messages[] = 'Please choose familiarity_type of '.$this->ordinal($k-1).' book';
    }     
     if($book_format == '')
    {
        $errors = 1;
        $error_messages[] = 'Please choose book_format of '.$this->ordinal($k-1).' book';
    }   
    $stock=$this->books_model->get_stock(ucfirst($title));
    if($stock == 0)
    {
        $errors = 1;
        $error_messages[] = 'Stock is not availability for '.$this->ordinal($k-1).' book';
    }            
    if($errors == 0)
        {
            //book image upload code starts//    
            switch($availability_type)
            {
                case 'library': $availability_type = 1;
                break;
                case 'sell': $availability_type = 2;
                break;
                 case 'both': $availability_type = 3;
                break;               

            } 
            switch($status)
            {
                case 'active': $status = 1;
                break;
                case 'inactive': $status = 2;
                break;              
            }
            switch($familiarity_type)
            {
                case 'new arrival': $familiarity_type = 1;
                break;
                case 'award winning': $familiarity_type = 2;
                break;
                 case 'most': $familiarity_type = 3;
                break;               

            } 
            switch($book_format)
            {
                case 'paper book': $book_format = 1;
                break;
                case 'binded': $book_format = 2;
                break;              
            }                                          
            $book_image_url = $image;
            if (isset($book_image_url) && $book_image_url != '') {
            $extension = fileExtension($book_image_url);                       
            $main_pic_name = sha1(time() . rand(00000000, 999999999)).'.'.$extension;
            $arrContextOptions=array(
                                        "ssl"=>array(
                                            "verify_peer"=>false,
                                            "verify_peer_name"=>false,
                                        ),
                                    );  
        $response = file_get_contents($book_image_url, false, stream_context_create($arrContextOptions));
        $moved=file_put_contents('uploads/books/books_images/'.$main_pic_name, $response);
                            }      
            //book image upload code ends//     
     $insert_array = array(
                    'category_id' => $category,
                    'subcategory_id' => $subcategory,
                    'title' => $title,
                    'description' => $description,
                    'stock' => $stock,
                    'price' => $price,
                    'image' => $main_pic_name,
                    'availability_type' => $availability_type,
                    'status' => $status,
                    'familiarity_type' => $familiarity_type,
                    'book_format' => $book_format,
                    'added_on'=> date('Y-m-d')
                );
        $insert = $this->Crud->commonInsert('rl_books_tbl', $insert_array);                                            
    }
    }
    }
    if(count($error_messages) == 0)
                {
                    $success_msg = array();
                    $success_msg[] = "All books added successfully";
                }
        fclose($file);
        $this->session->set_flashdata('error_msg',implode(",",$error_messages));
        $this->session->set_flashdata('success_msg',implode(",",$success_msg));
        redirect('books/manage_books');
            }
        }
 } 
public function ordinal($number) {
            $ends = array('th','st','nd','rd','th','th','th','th','th','th');
            if ((($number % 100) >= 11) && (($number%100) <= 13))
                return $number. 'th';
            else
                return $number. $ends[$number % 10];
    }  
/*
Author: Gaurav Daware
 */
 public function commonStatus()
    {
        $response = array();
        $tablename = $this->input->post('tablename');
        $updatelist = $this->input->post('updatelist');
        $activity = $this->input->post('activity');
        if ($tablename != '' && $updatelist != '' && $activity != '' && ($activity == 0 || $activity == 1 || $activity == 2)) 
        {
            $table= '';
            $setcolumns = '';
            $wherecondition = '';
            $updatevalue = '';
            switch ($tablename) 
            {
                case 'parent':   // need to refer name for table name
                  $table='rl_users_tbl';   // table name 
                  $setcolumns='user_status';
                  $updatevalue=$activity;
                  $wherecondition="id  IN  (" .$updatelist. ")";
                  break;
            }
            $common = $this->Crud->commonStatusActivity($table, $setcolumns, $updatevalue, $wherecondition);
            echo $common;
            exit;
        }
        echo json_encode($response);
    }
    public function update_subcat_status(){
        extract($_POST);
        if(isset($active))
            {
                $count_multiple = count($multiple);
                if($count_multiple == 0){
                    $this->session->set_flashdata('failure','Please select record');
                    redirect("books/manage_subcategories");            
                }
                    $arr1 = array();                
                
                foreach($multiple as $name)
                {
                    $arr=array("subcategory_id"=>$name);
                    $data=array("subcategory_status"=>1);
                    $v=$this->Crud->common_update_count($arr,"rl_book_subcategories_tbl",$data);//echo $v;die;
                    if($v==1)
                    {
                        $arr1[] = 1;
                    }           
                }           
                if(count($arr1)>0)
                {
                    $this->session->set_flashdata('success','The Records You Selected Activated Successfully');
                    redirect("books/manage_subcategories");
                }  
                else
                {
                    $this->session->set_flashdata('failure','The Records You Selected Already Activated ');
                    redirect("books/manage_subcategories");
                }
            }

        if(isset($inactive))
            {
                $count_multiple = count($multiple);
                if($count_multiple == 0){
                    $this->session->set_flashdata('failure','Please select record');
                    redirect("books/manage_subcategories");            
                }
                    $arr1 = array();                
                foreach($multiple as $name)
                {
                    $arr=array("subcategory_id"=>$name);
                    $data=array("subcategory_status"=>0);
                    $v=$this->Crud->common_update_count($arr,"rl_book_subcategories_tbl",$data);//echo $v;die;
                    if($v==1)
                    {
                        $arr1[] = 1;
                    }           
                }           
                if(count($arr1)>0)
                {
                    $this->session->set_flashdata('success','The Records You Selected DeActivated Successfully');
                    redirect("books/manage_subcategories");
                }  
                else
                {
                    $this->session->set_flashdata('failure','The Records You Selected Already DeActivated ');
                    redirect("books/manage_subcategories");
                }
            }
            if(isset($delete)){
                $count_multiple = count($multiple);
                if($count_multiple == 0){
                    $this->session->set_flashdata('failure','Please select record');
                    redirect("books/manage_subcategories");            
                }
                $arr1 = array();    
                foreach($multiple as $name)
                    {
                    $arr=array("subcategory_id"=>$name);
                    $v=$this->Crud->common_del($arr,"rl_book_subcategories_tbl");
                    if($v==1)
                        {
                            $arr1[] = 1;
                        }
                    }
                        if(count($arr1))
                                    {
                        
                                        $this->session->set_flashdata('success','The Records You Selected Deleted Successfully');
                                redirect("books/manage_subcategories");
                                    }  
                                    else
                                    {
                                        $this->session->set_flashdata('failure','The Records You Selected not deleted');
                                    redirect("books/manage_subcategories");
                                    }       
                }
    }
    public function update_book_status(){
        extract ($_POST);
        if(isset($active))
            {
                $count_multiple = count($multiple);
                if($count_multiple == 0){
                    $this->session->set_flashdata('failure','Please select record');
                    redirect("books/manage_books");            
                }
                    $arr1 = array();                
                
                foreach($multiple as $name)
                {
                    $arr=array("book_id"=>$name);
                    $data=array("status"=>1);
                    $v=$this->Crud->common_update_count($arr,"rl_books_tbl",$data);//echo $v;die;
                    if($v==1)
                    {
                        $arr1[] = 1;
                    }           
                }           
                if(count($arr1)>0)
                {
                    $this->session->set_flashdata('success','The Records You Selected Activated Successfully');
                    redirect("books/manage_books");
                }  
                else
                {
                    $this->session->set_flashdata('failure','The Records You Selected Already Activated ');
                    redirect("books/manage_books");
                }
            }

        if(isset($inactive))
            {
                $count_multiple = count($multiple);
                if($count_multiple == 0){
                    $this->session->set_flashdata('failure','Please select record');
                    redirect("books/manage_books");            
                }
                    $arr1 = array();                
                foreach($multiple as $name)
                {
                    $arr=array("book_id"=>$name);
                    $data=array("status"=>2);
                    $v=$this->Crud->common_update_count($arr,"rl_books_tbl",$data);//echo $v;die;
                    if($v==1)
                    {
                        $arr1[] = 1;
                    }           
                }           
                if(count($arr1)>0)
                {
                    $this->session->set_flashdata('success','The Records You Selected DeActivated Successfully');
                    redirect("books/manage_books");
                }  
                else
                {
                    $this->session->set_flashdata('failure','The Records You Selected Already DeActivated ');
                    redirect("books/manage_books");
                }
            }
            if(isset($delete)){
                $count_multiple = count($multiple);
                if($count_multiple == 0){
                    $this->session->set_flashdata('failure','Please select record');
                    redirect("books/manage_books");            
                }
                $arr1 = array();    
                foreach($multiple as $name)
                    {
                    $arr=array("book_id"=>$name);
                    $v=$this->Crud->common_del($arr,"rl_books_tbl");
                    if($v==1)
                        {
                            $arr1[] = 1;
                        }
                    }
                        if(count($arr1))
                                    {
                        
                                        $this->session->set_flashdata('success','The Records You Selected Deleted Successfully');
                                redirect("books/manage_books");
                                    }  
                                    else
                                    {
                                        $this->session->set_flashdata('failure','The Records You Selected not deleted');
                                    redirect("books/manage_books");
                                    }       
                }

    }
}
?>