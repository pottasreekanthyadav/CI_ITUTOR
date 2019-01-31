<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Faqs extends CI_Controller {
	public $data;
	public function __construct(){
		parent::__construct();
		$this->data=array();
		$this->faq_view_path='faq/';
		$this->load->model(array('superadmin/super_model','superadmin/Settings_model','superadmin/Crud'));
        $this->admin_id=$this->session->userdata('admin_id');
	}
	public function createFaq()
	{
       if(!empty($this->admin_id))
        {
			$this->data['URL_TITLE']='Create FAQ';
			$this->data['PAGE_TITLE']='Create FAQ';
			$breadcrumb_array = array(
	            array('title' => 'FAQ List', 'link' => SUPER_ADMIN_FOLDER_PATH.'Faqs', 'class' => ''),
	            array('title' => 'Create FAQ', 'link' => 'javascript:void(0);', 'class' => 'active'),
	        );
	        $this->data['breadcrumb'] = json_encode($breadcrumb_array);
	       	$this->load->view('superadmin/faq/create_faq_view',$this->data);
            }else{
            redirect('superadmin/Admin/dashboard');
        }		
	}

	public function insertFaq()
	{
         if(!empty($this->admin_id))
        {
        $this->load->library('form_validation');
		$this->form_validation->set_rules('question','Question','required|regex_match[/^[a-zA-Z ]*$/]',array('required'=>'Please enter question!','regex_match'=>'Please enter valid question!'));
		$this->form_validation->set_rules('description','Description','required',array('required'=>'Please enter description!'));
		$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
		if($this->form_validation->run()==false){
      
			$this->data['URL_TITLE']='Create FAQ';
			$this->data['PAGE_TITLE']='Create FAQ';
			$breadcrumb_array = array(
	            array('title' => 'FAQ List', 'link' => SUPER_ADMIN_FOLDER_PATH.'Faqs', 'class' => ''),
	            array('title' => 'Create FAQ', 'link' => 'javascript:void(0);', 'class' => 'active'),
	        );
	        $this->data['breadcrumb'] = json_encode($breadcrumb_array);
	       	$this->load->view('superadmin/faq/create_faq_view',$this->data);
		}
		else{
              
			$data=array(
				'faq_ref_no'=>'FAQ'.date('dmy').rand(2,99),
				'query'=>trim($this->input->post('question')),
				'description'=>strtolower(trim($this->input->post('description'))),
				'created_date'=>date('Y-m-d H:i:s'),
				'reply_status'=>0,
				);
			$faq_data=array(
					'table_name'=>'rl_faq_tbl',
					'insert_data'=>$data,
					'success_message'=>$data['query']. ' added successfully',
					'error_message'=>'Unable to add '.$data['query'],
					'debug'=>0,
					);
			$faq_data=$this->Crud->common_insert($faq_data);
			$faq=json_decode($faq_data);
			//print_r($faq);exit;
			if($faq->code==200){
               
					$this->session->set_flashdata('success',$faq->description);
					redirect(SUPER_ADMIN_FOLDER_PATH.'Faqs/manageFaq');
				}
				else{
					$this->session->set_flashdata('failure',$faq->description);
					$this->data['URL_TITLE']='Create FAQ';
					$this->data['PAGE_TITLE']='Create FAQ';
					$breadcrumb_array = array(
				            array('title' => 'FAQ List', 'link' => SUPER_ADMIN_FOLDER_PATH.'Faqs', 'class' => ''),
				            array('title' => 'Create FAQ', 'link' => 'javascript:void(0);', 'class' => 'active'),
				        );
			    	$this->data['breadcrumb'] = json_encode($breadcrumb_array);
					$this->load->view('superadmin/faq/faq_list_view', $this->data);
				}
		}
        }else{
            redirect('superadmin/Admin/dashboard');
        }
	}
	public function manageFaq(){
        if(!empty($this->admin_id))
        {
		$cols = 'faq_id,faq_ref_no,query,description,created_date,reply_status';
       $search =$this->input->post('search');
        $table_name = 'rl_faq_tbl';
        $order_by_col = 'faq_id';
        $config["base_url"] = base_url() . 'superadmin/Faqs/manageFaq';
        $config["total_rows"] = $this->Crud->common_record_count($cols, $table_name, $order_by_col);
        $config["per_page"] = 5;
        $config["uri_segment"] = 4;
        $this->load->library('pagination', $config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $this->data['links'] = $this->pagination->create_links();
        /*         * Pagination code end* */
        $like_col = 'faq_ref_no';
        $orderby = 'faq_id';
        $this->data['common_result'] = $this->Crud->common_list_paging($cols, $table_name, $like_col, $orderby, $config["per_page"], $page, $search);
      // print_r($this->data['common_result']);exit;
        $this->load->view('superadmin/faq/faq_list_view', $this->data);
        }else{
            redirect('superadmin/Admin/dashboard');
        }
	}
	 public function getFaqs() {
        if(!empty($this->admin_id))
        {
        $faq_id=$this->uri->segment(4);
        // echo $faq_id;
        $where=array('faq_id'=>$faq_id);
        $this->data['result']=$this->Settings_model->commonUpdate('rl_faq_tbl',$where);
       	//print_r($this->data['result']);
        $this->load->view('superadmin/faq/update_faq', $this->data);
        }else{
            redirect('superadmin/Admin/dashboard');
        }

}
public function updatefaqs(){
		// echo $this->input->post('question');exit;
        $update_data = array('query' => $this->input->post('question'),
        					'description'=>$this->input->post('description'));
        $update_where = array('faq_id'=>$this->input->post('faq_id'));
        $updated = $this->Settings_model->up_data('rl_faq_tbl', $update_data, $update_where);
        if ($updated) {
           $this->session->set_flashdata('success','Your data updated successfully ');
            redirect('superadmin/Faqs/manageFaq');
        }
        
    
    }
	public function commonStatus()
    {
      
        $response = array();
        $tablename = $this->input->post('tablename');
        $updatelist = $this->input->post('updatelist');
        $activity = $this->input->post('activity');
        if ($tablename != '' && $updatelist != '' && $activity != '' && ($activity == 0 || $activity == 1 || $activity == 2)) {
            $table= '';
            $setcolumns = '';
            $wherecondition = '';
            $updatevalue = '';
            switch ($tablename) {
            case 'faq':   // need to refer name for table name
              $table='rl_faq_tbl';   // table name 
              $setcolumns='reply_status';
              $updatevalue=$activity;
              $wherecondition="faq_id  IN  (" .$updatelist. ")";
              break;
            }
           $common = $this->Crud->commonStatusActivity($table, $setcolumns, $updatevalue, $wherecondition);
            echo $common;
            exit;
        }
        echo json_encode($response);
      
    }
    public function commonDelete()
    {   
        $response = array();
        $relationname='Your data';
        $tablename = $this->input->post('tablename');
        $updatelist = $this->input->post('updatelist');
        if ($tablename != '') {
            $table = '';
            $wherecondition = '';
            switch ($tablename) {
            case 'faq':
                $table = 'rl_faq_tbl';
                $wherecondition = "faq_id IN  (" . $updatelist . ")";
                break;
           
            }
            //print_r($wherecondition);
            $update = $this->Crud->commonDelete($table,$wherecondition,$relationname);
            echo $update;
            exit;
        }
        echo json_encode($response);
    }



}

?>