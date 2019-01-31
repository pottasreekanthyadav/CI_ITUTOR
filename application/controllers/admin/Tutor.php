<?php 
class Tutor extends CI_Controller
{
  public $data;
	public function __construct()
	{
		parent::__construct();
		$this->load->model("admin/categories_model",'c');
    $this->load->model('superadmin/Tutor_model','t');
    $this->load->library(array('mylabs','pagination'));
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
    $nr=$config['per_page']=5;
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
 public function tutor_update_status_ctrl()
{
  if(!empty($this->admin_id))
        {
  $cat_id=$this->uri->segment(4);
  $action=$this->uri->segment(5);
  $where=array(
    'tutor_type_id'=>$cat_id
  );
  if($action==1)
{
      $update_data=array(
          'status'=>1
      );
      $res=$this->c->cat_update_records('rl_tutor_types_tbl',$where,$update_data);
}
  else
{
     $update_data=array(
          'status'=>0
      );
      $res=$this->c->cat_update_records('rl_tutor_types_tbl',$where,$update_data);
}
    if($res)
      redirect("superadmin/Tutor_newtype/load_manage_subtype");
    }else{
            redirect('superadmin/Admin/dashboard');
        }
}
public function tutor_delete_ctrl(){
  if(!empty($this->admin_id))
        {
         $tutor_id=$this->uri->segment(4);
         $where=array(
          'tutor_type_id'=>$tutor_id
         );
      $res= $this->c->cat_delete("rl_tutor_types_tbl",$where);
      if($res)
      {
       $this->session->set_flashdata('success','data deleted successfully');
        redirect("superadmin/Tutor_newtype/load_manage_subtype");
      }
else
{
  $this->session->set_flashdata('failure','data not deleted');
  redirect("superadmin/Tutor_newtype/load_manage_subtype");
}
}else{
            redirect('superadmin/Admin/dashboard');
        }
}
 public function tutor_update_ctrl1(){
  if(!empty($this->admin_id))
        {
  $data['cls']=$this->t->get_classes();
    $tutor_id=$this->uri->segment(4);
    $where=array(
      'tutor_update'=>$tutor_id
    );
    $row=$this->c->cat_update_select('rl_tutor_types_tbl',$where);
    $data['res']=$row;
    $this->load->view('admin/tutor/tutor_sub_type_view',$data);
    }else{
            redirect('superadmin/Admin/dashboard');
        }
}
public function tutor_update_ctrl2(){
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
    $res=$this->c->cat_update_records('rl_tutor_types_tbl',$where,$data);
    if($res)
{
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
public function tutor_support_page_ctrl(){
  if(!empty($this->admin_id))
        {

        $srh=$this->input->post('search');
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
$res=$this->c->common_display_recs('rl_tutor_support_tbl','','',$like);
  $total=count($res);
    if($total>0)
    {
    $base_url=base_url()."admin/tutor/tutor_support_page_ctrl";
    $nr=$per_page=50;
    $config=$this->mylabs->mypagination($total,$per_page,$base_url);
    $this->pagination->initialize($config);
    $si=$this->uri->segment(4);
    if(empty($si))
    {
      $si=0;
    }
    $data['support_recs']=$this->c->common_display_recs('rl_tutor_support_tbl',$nr,$si,$like);
    // print_r($data);exit;

    $data['support_links']=$this->pagination->create_links();
     $this->load->view("admin/tutor_query_view",$data);
}
else
{
$data['msg']="query not found";
 $this->load->view("admin/tutor_query_view",$data);
}
}else{
            redirect('superadmin/Admin/dashboard');
        }
}
public function tutor_support_delete_ctrl(){
  if(!empty($this->admin_id))
        {
         $support_id=$this->uri->segment(4);
         $where=array(
          'tutor_support_id'=>$support_id
         );
      $res= $this->c->cat_delete("rl_tutor_support_tbl",$where);
      if($res)
        redirect("admin/tutor/tutor_support_page_ctrl");
}else{
            redirect('superadmin/Admin/dashboard');
        }
}
}
	?>