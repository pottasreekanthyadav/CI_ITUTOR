<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Budget_controller extends CI_Controller {

    public $data;
	public $admin_id;
    public $ipaddress;
    public function __construct() 
    {
        parent::__construct();
        $this->load->model(array('superadmin/Super_model','superadmin/Admin_model','superadmin/Crud','Common_model'));
        $this->load->library('form_validation');
        $this->ipaddress = $_SERVER['REMOTE_ADDR'];
        $this->date = date('Y-m-d H:i:s');
		$this->admin_id=$this->session->userdata('admin_id');
    }
    public function list_budget()
    {
       // echo 'vivek'.$this->admin_id;exit;
        
      if(!empty($this->admin_id))
        {
           $this->data['budget']=$this->Admin_model->get_budget_list();
        //print_r($this->data);
         $this->load->view('superadmin/budget/list-budget',$this->data);
      }
        else
        {
            redirect('superadmin/admin/dashboard');
        }
    }
    public function add_budget()
    {
        if(!empty($this->admin_id))
        {
            $params['table']='rl_category_tbl';
            $params['wherecondition']=array('category_status'=>1);
        $this->data['category']=json_decode($this->Common_model->commonget($params));
        $this->load->view('superadmin/budget/add-budget',$this->data);
        }else{
            redirect('superadmin/admin/dashboard');
        }
     }
    public function edit_budget()
    {
        if(!empty($this->admin_id))
        {
          $edit_id =$this->uri->segment(4);
          $params['table']='rl_category_tbl';
            $params['wherecondition']=array('category_status'=>1);
        $this->data['category']=json_decode($this->Common_model->commonget($params));
        $params['table']='rl_budget_tbl';
        $params['where_condition']=array('budget_id'=>$edit_id);
        $params['result_variable']='result';
        $params['columns']=array('budget_id,budget_price,budget_status,budget_type');
        /*

         $columns=$params['columns'];
        $where=$params['where_condition'];
        $resultvariable=$params['result_variable'];
        */
        $rresult=json_decode($this->Common_model->getSingleRecord($params));
        if($rresult->code==SUCCESS_CODE){
          $this->data['budgetedit']=$rresult->result;
        }
        //$this->load->view('superadmin/budget/add-budget',$this->data);
         $this->load->view('superadmin/budget/edit-budget',$this->data);
       }
       else
        {
            redirect('superadmin/admin/dashboard');
        } 

    }
    public function store_budget()
    {
          if(!empty($this->admin_id))
        {
            //print_r($_POST);die;
            $budget_price = $this->input->post('price');
              $category_fid = $this->input->post('category');
              $budget_type = $this->input->post('budgetType');
              $this->form_validation->set_rules('price','Standard Price.','required|numeric|trim');
              $this->form_validation->set_rules('budgetType','Budget type.','required|trim|alpha_numeric_spaces');
              $this->form_validation->set_rules('category','Category','required|numeric|trim');
             if($this->form_validation->run()==false){
               // echo 'Vivek';exit();
            $params['table']='rl_category_tbl';
            $params['wherecondition']=array('category_status'=>1);
            $this->data['category']=json_decode($this->Common_model->commonget($params));
            $this->load->view('superadmin/budget/add-budget',$this->data);
              }else{
                $insertbudget=array('budget_status'=>1,'budget_price'=>$budget_price,'budget_type'=>$budget_type,'category_fid'=>$category_fid);
                $resultbudget = json_decode($this->Common_model->commonInsert('rl_budget_tbl',$insertbudget));
                if($resultbudget->code==SUCCESS_CODE){
        $this->session->set_flashdata('success', 'Budget is saved successfully');
            redirect("superadmin/Budget_controller/list_budget");
                }
              }
              }else{
                redirect('superadmin/admin/dashboard');
        }

    }
    public function change_budget_status()
    {
      if(!empty($this->admin_id))
      {
       $edit_id=$this->uri->segment(4);//echo "<br>";
      $status=$this->uri->segment(5);
      $set=array('budget_status'=>$status);
      $wer=array('budget_id'=>$edit_id);
      $rs=json_decode($this->Common_model->commonUpdate('rl_budget_tbl',$set,$wer));
     // print_r($rs);die;
      if($rs->code==SUCCESS_CODE)
      {
        if($status==1){
          $this->session->set_flashdata('success','Budget activated successfully');
        redirect('superadmin/Budget_controller/list_budget');
        }else{
           $this->session->set_flashdata('success','Budget deactivated successfully');
        redirect('superadmin/Budget_controller/list_budget');
        }
      
      }else{
         $this->session->set_flashdata('failure','You have  not updated');
      redirect('superadmin/Budget_controller/list_budget');
      }
      }else{
      redirect('superadmin/Admin/dashboard');
      }
    }
    public function restrict_institute_category()
    {
       $category = $this->input->post('category');
            $response = array();
            if(!empty($category)){
              $table='rl_budget_tbl';
              $where=array('category_fid'=>$category);
              $datares = $this->Common_model->common_count_records('budget_id',$table,$where);
             // echo $datares;die;
            //print_r($datares);exit;
                if( $datares==2 || $datares>2){
                    $response[CODE]=SUCCESS_CODE;
                    $response[MESSAGE]='success';
                    $response[DESCRIPTION]='Category budget already configured';
                    //$response['result']=$datares->result;
                } else{
                    $response[CODE]=FAIL_CODE;
                    $response[MESSAGE]='fail';
                    $response[DESCRIPTION]='Records not found.';
                }   
            }else{
                $response[CODE]=EXISTS_CODE;
                $response[MESSAGE]='Invalid request';
                $response[DESCRIPTION]='Wrong selection';
            }
            echo json_encode($response);
    }
    public function delete_budget()
    {
      if(!empty($this->admin_id))
        {
      //echo "welcome for tutor subtype delete...........";echo "<br>";
     $del_id=$this->uri->segment(4);
      $wer=array('budget_id'=>$del_id);
      $rs=json_decode($this->Common_model->commonDelete('rl_budget_tbl',$wer));
      if($rs->code==SUCCESS_CODE)
    {
      $this->session->set_flashdata('success','Budget deleted successfully');
      redirect('superadmin/Budget_controller/list_budget');
    }
    else
    {
      $this->session->set_flashdata('failure','Budget not deleted');
      redirect('superadmin/Budget_controller/list_budget');
    }
    }else{
            redirect('superadmin/Admin/dashboard');
        }
    }
    public function change_budget()
    {
      if(!empty($this->admin_id))
      {
        //print_r($_POST);exit;
       $editbudget=$this->input->post('editbudget');
      $category =$this->input->post('category');
      $budgetType =$this->input->post('budgetType');
      $price =$this->input->post('price');
      $this->form_validation->set_rules('category','Category','required|numeric|trim');
      $this->form_validation->set_rules('budgetType','Budget Type','required|alpha_numeric_spaces|trim');
      $this->form_validation->set_rules('price','Price','required|numeric|trim');
      if($this->form_validation->run()==true){
        $where=array('budget_id'=>$editbudget);
        $updatearray = array('category_fid'=>$category,'budget_type'=>$budgetType,'budget_price'=>$price);
        $rresult = json_decode($this->Common_model->commonUpdate('rl_budget_tbl',$updatearray,$where));
        if($rresult->code==SUCCESS_CODE){
           $this->session->set_flashdata('success','Budget updated successfully');
          redirect('superadmin/Budget_controller/list_budget');
        }else{
          $this->session->set_flashdata('failure','Fail to  updated');
          redirect('superadmin/Budget_controller/list_budget');
        }
      }else{
         $params['table']='rl_category_tbl';
            $params['wherecondition']=array('category_status'=>1);
        $this->data['category']=json_decode($this->Common_model->commonget($params));
        $this->load->view('superadmin/budget/edit-budget',$this->data); 
      }
     
      }else{
      redirect('superadmin/Admin/dashboard');
      }
    }
}