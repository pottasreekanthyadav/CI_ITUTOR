<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Parents extends CI_Controller 
{
	public $data;
	public function __construct()
    {
		parent::__construct();
		$this->data=array();
        $this->load->model(array('superadmin/Super_model', 'superadmin/Settings_model', 'superadmin/Tutor_model', 'superadmin/Crud'));
            $this->load->model("admin/categories_model",'c');
            $this->load->library(array('mylabs','pagination'));
            $this->load->model('frontend_model','f');
        $this->admin_id=$this->session->userdata('admin_id');
		
	}
	public function viewParent1() 
    {
        if(!empty($this->admin_id))
        {
        $srh='';
        $like='';
        $srh=$this->input->post('search');
        if(!empty($srh))
        {
            $like=array('email'=>$srh,'mobile'=>$srh);
        }

        $cols = 'id,name,mobile,email,registered_on,user_status';
        $where=array('user_type'=>2);
        $search ='';
        $searchstr=$like;
        $table_name = 'rl_users_tbl';
        $order_by_col = 'id';
        $config["base_url"] = base_url('superadmin/Parents/viewParent');
        $config["total_rows"] = $this->Crud->common_record_count($cols, $table_name, $order_by_col,$where);
        $config["per_page"] = 2;
        $config["uri_segment"] = 4;
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        /*         * Pagination code end* */
        $like_col = $like;
        $orderby = 'registered_on';
        $data['common_result'] = $this->Crud->common_list_paging($cols, $table_name, $like_col, $orderby, $config["per_page"], $page, $search,$where,$searchstr);
        // print_r($this->data['common_result']);exit;
        $data['links'] = $this->pagination->create_links();
        // echo $this->data['links'];
        $this->load->view('superadmin/parents/view_parents',$data);
        }else{
            redirect('superadmin/Admin/dashboard');
        }
}
public function viewParent() 
    {
        if(!empty($this->admin_id))
        {
        $srh='';
        $like='';
        $srh=$this->input->post('search');
        if(!empty($srh))
        {
            $like=array('name'=>$srh,'email'=>$srh,'mobile'=>$srh);
        }

        $cols = 'id,name,mobile,email,registered_on,user_status,user_type';
        $where=array('user_type'=>2);
        $search ='';
        $searchstr=$like;
        $table_name = 'rl_users_tbl';
        $order_by_col = 'id';
        $config["base_url"] = base_url('superadmin/Parents/viewParent');
        // $config["total_rows"] = $this->Crud->common_record_count($cols, $table_name, $order_by_col,$where);
        // $config['count'] = $this->Crud->common_record_count($cols, $table_name,'',$where);
         $data= json_decode($this->Crud->common_list_paging($cols, $table_name, $like,'','','', $search,$where,$searchstr));
          $config["total_rows"]=$data->count;
          // echo $data->count;exit;
        $config["per_page"] = 20;
        $config["uri_segment"] = 4;
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        /*         * Pagination code end* */
        $like_col = $like;
        $orderby = 'registered_on';
        // $data=json_decode($this->Crud->common_list_paging($cols, $table_name, $like_col, $orderby, $config["per_page"], $page, $search,$where,$searchstr));
        $data1['common_result']=$this->Crud->common_list_paging($cols, $table_name, $like_col, $orderby, $config["per_page"], $page, $search,$where,$searchstr);
        // print_r(json_decode($data1));exit;
        
        $data1['links'] = $this->pagination->create_links();
        // echo $this->data['links'];
        $this->load->view('superadmin/parents/view_parents',$data1);
        }else{
            redirect('superadmin/Admin/dashboard');
        }
}


    
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
            case 'parent':
                $table = 'rl_users_tbl';
                $wherecondition = "id IN  (" . $updatelist . ")";
                break;
           
            }
            //print_r($wherecondition);
            $update = $this->Crud->commonDelete($table,$wherecondition,$relationname);
            echo $update;
            exit;
        }
        echo json_encode($response);
    }
public function parent_support_page_ctrl(){
    if(!empty($this->admin_id))
        {
        $srh=$this->input->post('search');
        // echo $srh;exit;
        if(!empty($srh))
        {
            
            $like=array('email'=>$srh,'mobile'=>$srh);
            $this->session->set_userdata('like',$like);
        }
        $uri=$this->uri->segment('4');
        if(empty($srh) && empty($uri))
        {
          $this->session->set_userdata('like','');
        }
$like=$this->session->userdata('like');
// print_r($like);exit;

    $res=$this->c->common_display_recs('rl_parent_support_tbl','','',$like);
    $total=count($res);
    if($total>0)
    {
    $base_url=base_url()."superadmin/parents/parent_support_page_ctrl";
    $nr=$per_page=10;
    $config=$this->mylabs->mypagination($total,$per_page,$base_url);
    $this->pagination->initialize($config);
    $si=$this->uri->segment(4);
    if(empty($si))
    {
      $si=0;
    }
     $data['support_recs']=$this->c->common_display_recs('rl_parent_support_tbl',$nr,$si,$like);
 $data['support_links']=$this->pagination->create_links();
     $this->load->view("superadmin/parents/parent_query_view",$data);
   }
else
{
$data['msg']="query not found";
 $this->load->view("superadmin/parents/parent_query_view",$data);
}
}else{
            redirect('superadmin/Admin/dashboard');
        }
}
public function get_parent_csv(){
  $this->f->generate_csv_report_db2('rl_users_tbl');
}

    }
?>