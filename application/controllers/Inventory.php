<?php 
class Inventory extends CI_Controller
{
  public function __construct()
	{
		parent::__construct();
        $this->load->model('superadmin/Crud');
        $this->load->model('inventory_model');
	}
 public function add_vendor()
 {
 	$this->load->view('inventory/add_vendor');
 }
 public function save_vendor()
 {
 	//print_r($_POST);exit;
 	        $this->form_validation->set_rules('vendor_code', 'Vendor Code', 'trim|required');
            $this->form_validation->set_rules('vendor_name', 'Vendor Name', 'trim|required|regex_match[/^[a-zA-Z .]+$/]');
            $this->form_validation->set_rules('area', 'Area', 'required');
            $this->form_validation->set_rules('city', 'City', 'required|regex_match[/^[a-zA-Z ]+$/]');
            $this->form_validation->set_rules('pincode', 'Pincode', 'required|regex_match[/^[0-9]{6}$/]');
            $this->form_validation->set_rules('vcp_name', 'Contact person name', 'required|regex_match[/^[a-zA-Z .]+$/]');
            $this->form_validation->set_rules('vcp_email', 'Contact person email', 'required|valid_email');
            $this->form_validation->set_rules('vcp_mobile', 'Contact person mobile', 'required|regex_match[/^[6-9][0-9]{9}$/]');
	         if ($this->form_validation->run() == false) 
	         {
	        	$this->load->view('inventory/add_vendor');
	    	 }
            else{
                    $vendor_data = array(
                     'vendor_code' =>$this->input->post('vendor_code'),
                     'vendor_name' =>ucfirst($this->input->post('vendor_name')),
                     'area' =>ucwords($this->input->post('area')),
                     'pincode' =>$this->input->post('pincode'),
                     'city' =>ucfirst($this->input->post('city')),
                     'website' =>$this->input->post('website'),
                     'address' =>ucwords($this->input->post('address')),
                     'contact_person_name'=>ucfirst($this->input->post('vcp_name')),
                     'contact_person_email'=>$this->input->post('vcp_email'),
                     'contact_person_mobile'=>$this->input->post('vcp_mobile'),
                     'created_on'=>DATE,
                     'vendor_status'=>1
                     );
                    $insert=$this->Crud->commonInsert('rl_vendors_table',$vendor_data);
                    $insert_decode = json_decode($insert);
                    if($insert_decode->code == SUCCESS_CODE)
                    {
                        $this->session->set_flashdata('success', 'Vendor added successfully');
                        redirect('inventory/manage_vendor'); 
                    }
                    else
                    {
                        $this->session->set_flashdata('failed', 'Vendor not added');
                        redirect('inventory/add_vendor'); 
                    }

                 }
 }
 public function add_inventory()
     {
        $data=array();
        $data['vendor_result']=$this->inventory_model->getVendorList();
        $this->load->view('inventory/add_inventory',$data);
     }
 public function save_inventory()
 {
            $this->form_validation->set_rules('vendor', 'Vendor', 'trim|required');
            $this->form_validation->set_rules('book_title', 'Book Title', 'trim|required|regex_match[/^[a-zA-Z .]+$/]');
            $this->form_validation->set_rules('author', 'Author', 'required|regex_match[/^[a-zA-Z .]+$/]');
            $this->form_validation->set_rules('publisher', 'Publisher', 'required|regex_match[/^[a-zA-Z .]+$/]');
            $this->form_validation->set_rules('stock', 'Stock', 'required');
            $this->form_validation->set_rules('purchased_date', 'Purchased Date', 'required');
            $this->form_validation->set_rules('total_amount', 'Total Amount', 'required');
            $this->form_validation->set_rules('min_qty_alert', 'Min Qty Alert', 'required');
            if($this->input->post('language')!='')
            {
                $this->form_validation->set_rules('language', 'Language', 'regex_match[/^[a-zA-Z]+$/]');
            }          
             if ($this->form_validation->run() == false) 
             {
                $data=array();
                $data['vendor_result']=$this->inventory_model->getVendorList();
                $this->load->view('inventory/add_inventory',$data);
             }
            else{

                $bill_image_name = '';
                $bill_image = $_FILES['order_bill']['name'];
                if (isset($bill_image) && $bill_image != '')
                {
                    $file_name = $_FILES['order_bill']['name'];
                    $file_path = $_FILES['order_bill']['tmp_name'];
                    $im_name = 'bill_';
                    $extension = fileExtension($file_name);
                    $pic_name = $im_name . '_' . sha1(rand(100000, 999999) . time()) . '.' . $extension;
                    $moved = move_uploaded_file($file_path, "uploads/inventory_bills/$pic_name");
                    if($moved)
                    {
                        $bill_image_name=$pic_name;
                    }
                    else
                    {
                        echo 'Problem occured while uploading bill image.';exit;
                    }
                    
                }

                $inventory_data = array(
                     'vendor_id' =>$this->input->post('vendor'),
                     'book_title' =>ucfirst($this->input->post('book_title')),
                     'isbn_number' =>ucwords($this->input->post('isbn')),
                     'author' =>ucfirst($this->input->post('author')),
                     'publisher' =>ucfirst($this->input->post('publisher')),
                     'published_year' =>date('Y',strtotime($this->input->post('year_published'))),
                     'stock' =>$this->input->post('stock'),
                     'language'=>ucfirst($this->input->post('language')),
                     'purchased_date'=>date('Y-m-d',strtotime($this->input->post('purchased_date'))),
                     'total_amount'=>$this->input->post('total_amount'),
                     'advance_amount'=>$this->input->post('advance_amount'),
                     'balance'=>$this->input->post('balance'),
                     'payable_date'=>date('Y-m-d',strtotime($this->input->post('payable_date'))),
                     'min_qty_alert'=>$this->input->post('min_qty_alert'),
                     'note'=>ucwords($this->input->post('note')),
                     'order_bill_image'=>$bill_image_name,
                     'created_on'=>DATE
                     );
                    $insert=$this->Crud->commonInsert('rl_inventory_tbl',$inventory_data);
                    $insert_decode = json_decode($insert);
                    if($insert_decode->code == SUCCESS_CODE)
                    {
                        $this->session->set_flashdata('success', 'Inventory added successfully');
                        redirect('inventory/manage_inventory'); 
                    }
                    else
                    {
                        $this->session->set_flashdata('failed', 'Inventory not added');
                        redirect('inventory/manage_inventory'); 
                    }
                 }
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
 public function manage_vendor()
 {
    $search=$this->input->post('search');
    $data = array();
    $search = $this->input->post('search');
    $base_url = base_url('inventory/manage_vendor');
    $count_rows = $this->Crud->common_record_count2('*','rl_vendors_table','vendor_id',array('trash'=>0),'');
    $config['total_rows']=$count_rows;
    $config['per_page'] = PERPAGE;
    $config = $this->pagination($base_url, $config['total_rows'], $config['per_page']);
    $this->load->library('pagination');
    $this->pagination->initialize($config);
    $data['links']=$this->pagination->create_links();
    $si= $this->uri->segment(4,0);
    $data['common_result'] = $this->Crud->common_list_paging('*','rl_vendors_table','vendor_name','vendor_id',$config['per_page'],$si,$search,array('trash'=>0),'','vendor_code');
 	$this->load->view('inventory/manage_vendor',$data);
 }
  public function manage_inventory()
 {
    $search=$this->input->post('search');
    $vendor_filter = $this->input->post('vendor');
    if($vendor_filter)
    {
        $where = array('v.vendor_id'=>$vendor_filter);
    }
    else
    {
        $where = array();
    }
    $data = array();
    $search = $this->input->post('search');
    $base_url = base_url('inventory/manage_inventory');
    $count_rows = $this->Crud->common_record_count2('*','rl_inventory_tbl','inventory_id','','');
    $config['total_rows']=$count_rows;
    $config['per_page'] = PERPAGE;
    $config = $this->pagination($base_url, $config['total_rows'], $config['per_page']);
    $this->load->library('pagination');
    $this->pagination->initialize($config);
    $data['links']=$this->pagination->create_links();
    $si= $this->uri->segment(4,0);
    $data['common_result'] = $this->Crud->common_list_paging('i.*,v.vendor_name','rl_inventory_tbl i','book_title','inventory_id',$config['per_page'],$si,$search,$where,'','isbn_number','rl_vendors_table v','v.vendor_id=i.vendor_id');
    $data['vendor_result']=json_decode($this->inventory_model->getVendorList());
    $this->load->view('inventory/manage_inventory',$data);
 }
}
?>
