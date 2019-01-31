<?php 
class Categories extends CI_Controller
{
  public $data;
	public function __construct()
	{
		parent::__construct();
		$this->load->model("admin/categories_model",'c');
    $this->load->model("superadmin/crud");
    $this->admin_id=$this->session->userdata('admin_id');
	}
	public function cat_page_ctrl(){
    if(!empty($this->admin_id))
        {
   $total=$this->c->cat_get_rows("rl_category_tbl");
    if($total>0)
    {
    $config['base_url']=base_url()."admin/Categories/cat_page_ctrl";
    $config['total_rows']=$total;
    $nr=$config['per_page']=10;
    $config['user_page_numbers']=true;
     $config['full_tag_open'] = "<ul class='pagination'>";
    $config['full_tag_close'] = '</ul>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
$config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Previous Page';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
$config['next_link'] = 'Next Page<i class="fa fa-long-arrow-right"></i>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $this->load->library("pagination");
    $this->pagination->initialize($config);
    $si=$this->uri->segment(4);
    if(empty($si))
      $si=0;
    $res=$this->c->cat_display_recs("rl_category_tbl",$nr,$si);
    $data['cat_recs']=$res;
    $data['cat_links']=$this->pagination->create_links();
}
else
{
$data['msg']="tutors not found";
}

    $this->load->view("admin/mycategories_view",$data);
    }else{
            redirect('superadmin/Admin/dashboard');
        }
}
 public function cat_update_status_ctrl()
{
  if(!empty($this->admin_id))
        {
  $cat_id=$this->uri->segment(4);
  $action=$this->uri->segment(5);
  $where=array(
    'category_id'=>$cat_id
  );
  if($action==1)
{
      $update_data=array(
          'category_status'=>1
      );
      $res=$this->c->cat_update_records('rl_category_tbl',$where,$update_data);
}
  else
{
     $update_data=array(
          'category_status'=>0
      );
      $res=$this->c->cat_update_records('rl_category_tbl',$where,$update_data);
}
    if($res)
    { 

      redirect("admin/categories/cat_page_ctrl");
    }
    }else{
            redirect('superadmin/Admin/dashboard');
        }
}
public function cat_delete_ctrl(){
  if(!empty($this->admin_id))
        {
         $category_id=$this->uri->segment(4);
         $where=array(
          'category_id'=>$category_id
         );
      $res= $this->c->cat_delete("rl_category_tbl",$where);
      if($res)
      {
        $this->session->set_flashdata('cat_delete_msg',"data deleted successfully");
        redirect("admin/categories/cat_page_ctrl");
      }
      }else{
            redirect('superadmin/Admin/dashboard');
        }
}
 public function cat_update_ctrl1(){
   if(!empty($this->admin_id))
        {
    $cat_id=$this->uri->segment(4);
    $where=array(
      'category_id'=>$cat_id

    );
    $row=$this->c->cat_update_select('rl_category_tbl',$where);
    $data['res']=$row;
    $this->load->view('admin/cat_update_view',$data);
     }else{
            redirect('superadmin/Admin/dashboard');
        }
}
public function cat_update_ctrl2(){
  if(!empty($this->admin_id))
        {
    extract($_POST);
    if(isset($update))
    {
    $cat_id=$this->uri->segment(4);
    $where=array(
      'category_id'=>$cat_id
    );
    date_default_timezone_set('asia/kolkata');
    $data=array(
         'category_name'=>$cat_name,
         'category_status'=>$cstatus,
         'updated_on'=>date("Y-m-d H:i:s")
    );
    $res=$this->c->cat_update_records('rl_category_tbl',$where,$data);
    if($res)
{ 
  $this->session->set_flashdata('cat_update_msg',"data updated successfully");
      redirect('admin/categories/cat_page_ctrl');
}
}
    else
      echo "not updated";
     }else{
            redirect('superadmin/Admin/dashboard');
        }
}
public function multiple_cat_delete_ctrl(){
  if(!empty($this->admin_id))
        {
  extract($_POST);
  $count=count($check);
  $i=0;
  for($i=0;$i<$count;$i++)
  {
    $where=array(
      'cat_id'=>$check[$i]
    );
    $res= $this->a->cat_delete("sme_categories_tbl",$where);
  }
if($res)
        redirect("admin/admin/cat_page_ctrl");
      }else{
            redirect('superadmin/Admin/dashboard');
        }
}
public function updatepriority()
{
        $multiple = $this->input->post('check');
        $priority = $this->input->post('priority');
        $error = '';
        $count=count($multiple);$table='rl_category_tbl';
        $arr=array();
        $update_count=0;
        for($i=0;$i<$count;$i++){
            $update_data=array('category_priority'=>$priority[$i]);
            $update_condition=array('category_id'=>$multiple[$i]);
            $response=json_decode($this->crud->commonUpdate($table, $update_data, $update_condition, 'Priority updated successfully','Error'));
            //echo $this->db->last_query();exit;
            if($response->code==SUCCESS_CODE){ $update_count+=1; }
        }
        $msg=($update_count>0)?$update_count.' records updated':'Priority is not updated';
        $code=($update_count>0)?SUCCESS_CODE:FAIL_CODE;
        $this->session->set_flashdata(array('success'=>$msg,'code'=>$code));
        redirect('admin/categories/cat_page_ctrl');
}
}
	?>