<?php 
class Parent_ctrl extends CI_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('parents/Parents_model','p');
		$this->load->model('Common_model');
		$this->load->model('frontend_model','f');
		$this->load->model('Crud');
		 $this->load->library(array('pagination','mylabs','email'));
		$this->load->library(array('form_validation','upload'));
		$this->form_validation->set_error_delimiters('<span style="color:red">','</span>');
		$data =array();
		$this->userid=$this->session->userdata('user_id');
	}	
	
	public function load_dashboard()
	{
		if(! ($this->session->userdata('user_id')))
		{
		 	redirect('Registration/signup_load');
		}
		if($this->session->userdata('user_type')==2)
		{
		     $user_id=$this->session->userdata('user_id');
		$data=$this->p->get_statistics('rl_tutor_leads_track_tbl',$user_id);
			$this->load->view('parents/dashboard',$data);
			// redirect('parents/dashboard.php','refresh');
		}
		
	}
	public function change_password()
	{
		if(!empty($this->userid))
		{
		extract($_POST);
		if(isset($btn_change_password))
		{
			$id=$this->session->userdata('user_id');
			$this->load->library('form_validation');
			$arr=array(
						array('field'=>'old_pwd',
							  'label'=>'',
							  'rules'=>'required',
							  'errors'=>array('required'=>'Old password is required')),
						array('field'=>'new_pwd',
							  'label'=>'',
							  'rules'=>'required',
							  'errors'=>array('required'=>'New password is required')),
						array('field'=>'confirm_pwd',
							  'label'=>'',
							  'rules'=>'required',
							  'errors'=>array('required'=>'Confirm password is required'))
					  );
			$this->form_validation->set_rules($arr);
			if($this->form_validation->run()==true)
			{
				$old_pwd=md5($this->input->post('old_pwd'));
				$new_pwd=md5($this->input->post('new_pwd'));
				$confirm_pwd=md5($this->input->post('confirm_pwd'));
				if($new_pwd==$confirm_pwd)
				{
					$wer=array('id'=>$id,'password'=>$old_pwd);
					$pwd_result=$this->Common_model->get_password('rl_users_tbl',$wer);
					if($pwd_result)
					{
						$set=array('password'=>$new_pwd);
						$pwd_updated=$this->Common_model->update_password('rl_users_tbl',$set,$wer);
						if($pwd_updated)
						{
							$this->session->set_flashdata('msg','Password updated sucessfully');
							$this->session->set_flashdata('text_color','text-success');
							redirect(base_url().'parents/Parent_ctrl/change_password');
						}
						else
						{
							$this->session->set_flashdata('msg','Sorry,Password NOT updated');
							$this->session->set_flashdata('text_color','text-danger');
							redirect(base_url().'parents/Parent_ctrl/change_password');
						}
					}
					else
					{
						$this->session->set_flashdata('msg','Sorry,Incorrect Credentials!');
						$this->session->set_flashdata('text_color','text-danger');
						$this->load->view('parents/change_password.php');
					}
				}
				else
				{
					$this->session->set_flashdata('msg','New password and Confirm password are not same');
					$this->session->set_flashdata('text_color','text-danger');
					$this->load->view('parents/change_password.php');
				}
			}
			else
			{
				$this->load->view('parents/change_password.php');
			}
		}
		else
		{
			$this->load->view('parents/change_password.php');
		}
	}
	else
	{
	redirect('signup');
}
	}

	public function parent_log_out()
	{
		if(!empty($this->userid))
		{	
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('user_type');
			$this->session->unset_userdata('user_email');
			$this->session->unset_userdata('user_mobile');
			$this->session->unset_userdata('user_name');
			$this->load->view('login-signup.php');
		}
	}

	public function tutor_jitendra(){
		$this->load->view("tutors/dashboard-tutor");
	}
	// public function matching_tutor_view()
	// {
	// 	//$this->data['matching_view'] = $this->p->get_tutor_match_data()
	// 	$this->load->view('tutors/matching-tutor');
	// }
	public function myprofile_ctrl(){
         if(!empty($this->userid))
         {
$data['parent_data']=$this->f->common_get("rl_users_tbl",['id'=>$this->userid]);
		$mobile=trim($this->input->post('mobile'));
		$email=trim($this->input->post('email'));
		$update=$this->input->post('update');
		if(isset($update))
		{ 
			$error=0;
			if(!empty($email))
			{
				$validate=array();
                    $where1=array('email'=>$email,'user_status'=>1,'id!='=>$this->userid);
                    $email_check=$this->Crud->commonCheck('id', 'rl_users_tbl', $where1);
                    if($email_check)
                    {
                        $error=1;
                        $validate['email_check']='Email is already exists,';
                    }
                }
                if(!empty($mobile))
                {
                    $where2=array('mobile'=>$mobile,'user_status'=>1,'id!='=>$this->userid);
                    $mobile_check=$this->Crud->commonCheck('id', 'rl_users_tbl', $where2);
                    if($mobile_check)
                    {
                        $error=1;
                        $validate['mobile_check']='Mobile is already exists,';
                    }
                }
                if(empty($email) && empty($mobile))
                {
                	 $error=1;
                	 $validate['error']="please Enter Email or Mobile No.";
                }
                  if(!empty($mobile) && !mobile_check($mobile))
                {
                    $error=1;
                    $validate['mobile_pattern']='Invalid Mobile,';
                }
                 if(!empty($email) && !email_check($email))
                {
                    $error=1;
                    $validate['email_pattern']='Invalid Email,';
                }
                if($error==0)
                {
			
			$update_data=array();
         $where=array('id'=>$this->userid);
         if(!empty($email))
         {
         	$update_data['email']=$email;
         }
         if(!empty($mobile))
         {
          $update_data['mobile']=$mobile;
         }
                  

         $res=$this->p->myprofile('rl_users_tbl',$where,$update_data);
         if($res)
         {
         	$this->session->set_flashdata('success',"your profile updated successfully");
         	$this->load->view("parent_profile",$data);
         }
         else
         {
            $this->session->set_flashdata('failure',"something went wrong");
         	$this->load->view("parent_profile",$data);
         }
        }
		else
		{
			$this->load->view("parent_profile",$validate);
		}
	}
		else
		{
			
		$this->load->view("parent_profile",$data);
	    }
	}
	else
	{
		redirect('signup');
	}
	}
public function parent_support_ctrl(){
	if($this->userid)
	{
    $this->load->view("parents/parent_support_view");
}
else
{
	redirect('signup');
}
}
public function parent_support_query_ctrl(){
	if(!empty($this->userid))
	{
    extract($_POST);
    $subject=trim($parent_subject);
    $query=trim($parent_query);
    if(isset($send))
    {
        date_default_timezone_set('asia/kolkata');
        $date=date('Y-m-d H:i:s');
        $insert_data=array('subject'=>$subject,'query'=>$query,'status'=>1,'user_id'=>$this->session->userdata('user_id'),'email'=>$this->session->userdata('user_email'),'added_on'=>$date,'mobile'=>$this->session->userdata('user_mobile'));
        $res=$this->f->common_insert("rl_parent_support_tbl",$insert_data);
        if($res)
        {
           $this->session->set_flashdata('success_parent','Your query has been sent successfully');
          $this->load->view("parents/parent_support_view");
        }
        else
        {
          $this->session->set_flashdata('failure_parent','Something went wrong');
            $this->load->view("parents/parent_support_view");
        }
    }
}
else
{
	redirect('signup');
}

}
public function requirement_view()
	{	
		//echo 'vivek';exit;
		$response = array();
		$data = array();
        $user_id=$this->session->userdata('user_id');
		if(!empty($user_id))
		{
			//$sessionid = $this->session->userdata('user_id');
			$params['table'] ='rl_users_tbl';
			$params['wherecondition'] =array('id'=>$user_id);
			$userdata = json_decode($this->Common_model->commonget($params));
			$newresult = $userdata->result;
			$heyheydata = $newresult[0];
			/*start pagination*/
			$base_url = base_url("parent/requirements");
			$total_rows = count($this->p->get_tutor_match_data($heyheydata->email,$heyheydata->mobile));
			//echo $total_rows;die;
			$per_page = 1;
			$config = $this->pagination($base_url, $total_rows, $per_page);
			$this->pagination->initialize($config);
			$si= $this->uri->segment(3,0);
			$data['cur_page'] = floor(($si / $config['per_page']) + 1);   
			$data['total_page']=ceil($config['total_rows'] / $config['per_page']);
			$existcheck2 = $this->Common_model->commonCheck('id','learning_post_requirement_tbl',array('email'=>$heyheydata->email,'mobile'=>$heyheydata->mobile)); 
			if($existcheck2==1){
				$data['post_list'] = $this->p->get_tutor_match_data($heyheydata->email,$heyheydata->mobile,$config['per_page'],$si);
			}else{
				$data['post_list'] ="";
			}
			
			//print_r($data['post_list']);exit;
		$this->load->view('parents/matching-tutor',$data);
		}else{
			redirect('Registration/signup_load');
		}
	}
	public function tutor_search_get_ctrl(){
   $data['cat1']=$this->f->tutor_search_get('rl_category_tbl');
   $data['syl1']=$this->f->tutor_search_get('rl_syllabus_tbl');
   $data['qual1']=$this->f->tutor_search_get('rl_qualification_tbl');
 return $data;  
}

	/*  by vivek code for getting the matching tutor list 19-6-18*/
	public function loc_match($latitude,$longitude,$searchkm){
                            $lat = $latitude; //latitude
                              $lon = $longitude; //longitude
                              $distance = $searchkm; //your distance in KM
                              $R = 6371; //constant earth radius. You can add precision here if you wish
                              $maxlat = $lat + rad2deg($distance/$R);
                              $minlat= $lat - rad2deg($distance/$R);
                              $maxlon= $lon + rad2deg(asin($distance/$R) / cos(deg2rad($lat)));
                              $minlon= $lon - rad2deg(asin($distance/$R) / cos(deg2rad($lat)));
                              $data['where']=array('rloc.latitude >='=>$minlat,'rloc.latitude <='=>$maxlat,'rloc.longitude >='=>$minlon,'rloc.longitude <='=>$maxlon);
                              return $data;
 
 }
	public function matching_tutor_view()
	{ 
		if(!empty($this->userid))
		{
		$response = array();
		$data = array();
		$uridata = $this->uri->segment('3');
		$this->session->set_userdata('uridata1',$uridata);
		 //$this->session->set_userdata() 
			$existcheck = $this->Common_model->commonCheck('id','learning_post_requirement_tbl',array('id'=>$uridata)); 
		 if($existcheck==1){
			 $result = $this->p->get_match_cat_syll_subject($uridata);
		 //print_r($result[0]);die;
		 $newresult = $result[0];
		 $nearby=10;
		 $lat=$newresult->latitude;
		 $lon=$newresult->longitude;
               $data=$this->loc_match($lat,$lon,$nearby);
               $location=$data['where'];
		 /*start pagination*/
		  $si=$this->uri->segment(4,0);
		
		   	$base_url = base_url("parent/matching-tutor/$uridata");
			$total_rows = count($this->p->get_match_tutor($newresult,'','','','',$location));
			$per_page = 1;
			 $config=$this->mylabs->mypagination($total_rows,$per_page,$base_url,4);
              $this->pagination->initialize($config);
			// $config = $this->pagination($base_url, $total_rows, $per_page);
			// $this->pagination->initialize($config);
			$data=$this->tutor_search_get_ctrl();
			// $data['cur_page'] = floor(($si / $config['per_page']) + 1);   
			// $data['total_page']=ceil($config['total_rows'] / $config['per_page']);
			/*end pagnation*/
		 	$data['post_list'] = $this->p->get_match_tutor($newresult,$config['per_page'],$si,'',$location);
		 	$data['links']=$this->pagination->create_links();
		 //print_r($post_list);die;
		 	// print_r($data);exit;
		 	$this->load->view('parents/match-tutor',$data); 
		 }else{
			 redirect('parent/requirements');
		 }
		 }
		 else
		 {
		 	redirect('signup');
		 }		 
	}
	public function loc_search($latitude,$longitude,$searchkm){
                            $lat = $latitude; //latitude
                              $lon = $longitude; //longitude
                              $distance = $searchkm; //your distance in KM
                              $R = 6371; //constant earth radius. You can add precision here if you wish
                              $maxlat = $lat + rad2deg($distance/$R);
                              $minlat= $lat - rad2deg($distance/$R);
                              $maxlon= $lon + rad2deg(asin($distance/$R) / cos(deg2rad($lat)));
                              $minlon= $lon - rad2deg(asin($distance/$R) / cos(deg2rad($lat)));
                              $data['where']=array('rloc.latitude >='=>$minlat,'rloc.latitude <='=>$maxlat,'rloc.longitude >='=>$minlon,'rloc.longitude <='=>$maxlon);
                              return $data;
 
 }
	public function matching_tutor_search()
	{ 
		if(!empty($this->userid))
		{ 
			extract($_POST);
			if(isset($search))
			{
				if(empty($nearby))
				{
					$nearby=1;
				}
			if(!empty($gender))
			{
				 $where1=array('tutor.gender'=>$gender);
				$this->session->set_userdata('where1',$where1);
			}
			else{
				 $this->session->set_userdata('where1',"");
			}
			if(!empty($loc_search))
			{
         $data=$this->loc_search($lat,$lon,$nearby);
           $where2=$data['where'];
            $this->session->set_userdata('where2',$where2);
			}
			else
			{
             $this->session->set_userdata('where2','');
			}
		}

		$where1=$this->session->userdata('where1');
		$where2=$this->session->userdata('where2');
		$response = array();
		$data = array();
		$uridata1 =$this->session->userdata('uridata1');
		 //$this->session->set_userdata() 
			$existcheck = $this->Common_model->commonCheck('id','learning_post_requirement_tbl',array('id'=>$uridata1));  
		 if($existcheck==1){
			 $result = $this->p->get_match_cat_syll_subject($uridata1);
		 //print_r($result[0]);die;
		 $newresult = $result[0];
		 /*start pagination*/
		 $si=  $si=$this->uri->segment(4,0);
			$base_url = base_url("parent/matching-tutor/$uridata1");
			$total_rows = count($this->p->get_match_tutor($newresult,'','',$where1,$where2));
			$per_page = 20;
			$config = $this->pagination($base_url, $total_rows, $per_page);
			$this->pagination->initialize($config);
			$data=$this->tutor_search_get_ctrl();
			$data['cur_page'] = floor(($si / $config['per_page']) + 1);   
			$data['total_page']=ceil($config['total_rows'] / $config['per_page']);
			/*end pagnation*/
		 	$data['post_list'] = $this->p->get_match_tutor($newresult,$config['per_page'],$si,$where1,$where2);
		 //print_r($post_list);die;
		 	// print_r($data);exit;
		 	$this->load->view('parents/match-tutor',$data); 
		 }else{
			 redirect('parent/requirements');
		 }
		}
		 else
		 {
		 	redirect('signup');
		 }
		
		 		 
	}
public function payment_ctrl(){
	// echo "hii";die;
	if(!empty($this->userid))
	{
		$where=array('user_id'=>$this->userid,'plan_id'=>1,'payment_status'=>1);
$row=$this->f->common_get('rl_payment_subscription_tbl',['id'=>1]);
 $data['plan']=$row->amount;
		$count=$this->f->common_check('rl_user_payment_info_tbl',$where);
		if($count>0)
		{
			$where=array('user_id'=>$this->userid,'plan_id'=>1,'payment_status'=>1);
		   $data['payment_recs']=$this->f->common_get('rl_user_payment_info_tbl',$where);
		   $this->load->view('parents/parent_payment_view',$data);
        }
        else
        {
        $this->load->view('parents/parent_payment_view1',$data);	
        }
	}
	else
	{
	redirect('signup');
    }
}
public function get_notification(){
	if(!empty($this->userid))
	{
		$where=array('user_id'=>$this->userid,'read_status'=>0);
		$table = $this->input->post('table_name');
		$resp = array();
		$data = $this->p->get_notification($table,$where);
		$resp['count'] = count($data);
		$resp['notifications'] = $data;
	 	echo json_encode($resp);
	 }
	}
public function markAsReadNotification(){
	$id=$this->input->post('id');
	$table=$this->input->post('table_name');
	$where=array('id'=>$id);
	$update_data=array('read_status'=>1);
	$res=$this->p->markAsReadNotification($table);
	if($res)
	{
		echo "updated successfully";
	}
	else
	{
         echo "not updated";
	}
}
public function see_all(){
	if(!empty($this->userid))
	{   
		$where=array('user_id'=>$this->userid);
		$update_data=array('read_status'=>1);
		$res=$this->p->update_status('rl_notification_tbl',$update_data);
		if($res)
		{
		$data['see_recs'] =$this->p->get_notification('rl_notification_tbl',$where);
		$this->load->view('parents/notification_view',$data);
	    }  
	}
}
public function past_requirement()
	{
		$response = array();
		$data = array();
		if(!empty($this->userid))
		{
			//$sessionid = $this->session->userdata('user_id');
			$params['table'] ='rl_users_tbl';
			$params['wherecondition'] =array('id'=>$this->userid);
			$userdata = json_decode($this->Common_model->commonget($params));
			$newresult = $userdata->result;
			$heyheydata = $newresult[0];
			/*start pagination*/
			$base_url = base_url("parent/requirements");
			$total_rows = count($this->p->get_tutor_match_data($heyheydata->email,$heyheydata->mobile));
			//echo $total_rows;die;
			$per_page = 1;
			$config = $this->pagination($base_url, $total_rows, $per_page);
			$this->pagination->initialize($config);
			$si= $this->uri->segment(3,0);
			$data['cur_page'] = floor(($si / $config['per_page']) + 1);   
			$data['total_page']=ceil($config['total_rows'] / $config['per_page']);
			$existcheck2 = $this->Common_model->commonCheck('id','learning_post_requirement_tbl',array('email'=>$heyheydata->email,'mobile'=>$heyheydata->mobile)); 
			if($existcheck2==1){
				$data['post_list'] = $this->p->get_tutor_match_data($heyheydata->email,$heyheydata->mobile,$config['per_page'],$si);
			}else{
				$data['post_list'] ="";
			}
			
			//print_r($post_list);
		$this->load->view('parents/past-matching-tutor',$data);
		}else{
			redirect('Registration/signup_load');
		}
	}
public function past_tutor_view(){
	if(!empty($this->userid))
	{
		$where=array('user_id'=>$this->userid);
$res=$this->p->parent_track_data('rl_parent_leads_track_tbl',$where);
foreach($res as $row)
{
	 $tutor_userid=$row->tutorid;
}

$data=$this->p->get_past_tutor($tutor_userid);
 $base_url=base_url()."parent/viewed-tutor";
$total=count($data);
$per_page=1;
$config=$this->mylabs->mypagination($total,$per_page,$base_url);
     $this->pagination->initialize($config);
     $si=$this->uri->segment(3,0);
  $res=$this->p->get_past_tutor($tutor_userid,$per_page,$si);
  $data['post_list']=$res;
  $data['links']=$this->pagination->create_links();
$this->load->view('parents/past-tutor-view',$data);
}
else
{
redirect('signup');
}
}
public function get_statistics_details(){
 
 $data['post_list']=$this->p->get_statistics_recs($this->userid);
 $this->load->view("parents/dashboard-parent-statistics_view",$data);
}

	public function pagination($base_url, $total_rows, $per_page){
            $config=array(
                            'base_url'          => $base_url,
                            //'uri_segment'     => 4,
                            'per_page'          => $per_page,
                            //'use_page_numbers'    =>true,
                            'total_rows'        => $total_rows,
                            'full_tag_open'     => "<ul class='pagination float-right'>",
                            'full_tag_close'    => '</ul>',
                            'first_link'        => 'First',
                            'last_link'         => 'Last',
                            'num_links'         => 3,
                            'next_link'         => 'Next',
                            'prev_link'         => 'Prev',
                            'first_tag_open'    => '<li class="page-item">',
                            'first_tag_close'   => '</li>',
                            'last_tag_open'     => '<li class="page-item">',
                            'last_tag_close'    => '</li>',
                            'next_tag_open'     => '<li class="page-item">',
                            'next_tag_close'    => '</li>',
                            'prev_tag_open'     => '<li class="page-item">',
                            'prev_tag_close'    => '</li>',
                            'num_tag_open'      => '<li class="page-item">',
                            'num_tag_close'     => '</li>',
                            'cur_tag_open'      => "<li class='active page-item'><a>",
                            'cur_tag_close'     => '</a></li>',
                        );
            return $config;
        }
}


?>