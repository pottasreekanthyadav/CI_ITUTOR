<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

    public $data;
	public $admin_id;
    public $ipaddress;
    public function __construct() 
    {
        parent::__construct();
        $this->load->model(array('superadmin/Super_model','superadmin/Admin_model','superadmin/Crud','Common_model'));
        $this->load->helper('common_helper');
        $this->ipaddress = $_SERVER['REMOTE_ADDR'];
        $this->date = date('Y-m-d H:i:s');
		$this->admin_id=$this->session->userdata('admin_id');
    }
   
    public function index() 
    {
	    if(empty($this->admin_id))
        {
            $this->load->view('superadmin/index');
        }else{
            redirect('superadmin/Admin/dashboard');
        }
	}

    public function login() 
    {
        if(empty($this->admin_id))
        {
	       $this->load->library('form_validation');
            $this->form_validation->set_rules('email','Your Email','required|valid_email',array('required'=>'Please enter email '));
            $this->form_validation->set_rules('password','Your Password','required|min_length[6]');
            if($this->form_validation->run()==false)
            {
                $this->index();
            }else
            {
                $login_data=array(
                                'email'=>$this->input->post('email'),
                                'password'=>$this->input->post('password')
                                );
           
                $result=$this->Super_model->can_login($login_data);
                //print_r($result->common_result);exit;
                $login_data=json_decode($result);
                $row=$login_data->common_result;
                //print_r($row->id);exit;
                if($login_data->code==200)
                {
                    $session_data=array(
                                    'admin_id'=>$row->id,
                                    'admin_email'=>$this->input->post('email')
                                    );
                    $this->session->set_userdata($session_data);    
                    redirect('superadmin/Admin/dashboard');
                }
           
                if($login_data->code==204)
                {
                    //echo "Invalid details";
                    $this->session->set_flashdata('error','Invalid Email and Password ');
                    $this->load->view('superadmin/index');
                }
            }
        }
        else
        {
            redirect('superadmin/admin/dashboard');
        }

    }

    public function logout() 
    {
        $this->session->unset_userdata('login_data');
        $this->session->unset_userdata('admin_email');
        $this->session->unset_userdata('admin_id');
         // $this->session->sess_destroy();
        //redirect('superadmin/Category/index');
        redirect('superadmin/Admin/index');
        //$this->load->view('index');
    }

    public function dashboard() 
    {
        if(!empty($this->admin_id))
        {
		   $data=$this->Admin_model->get_statistics();
            $this->load->view('superadmin/dashboard',$data);
        }
        else
        {
            //echo 'fail';die;
            redirect('admin');
        }
    }

    // Change password of admin starts from here 
    public function changePassword()
    {
        //print_r($_POST);
	    $this->load->library('form_validation');
        $this->form_validation->set_rules('old_password','Your Old Password','required');
        $this->form_validation->set_rules('new_password','Your New Password','required|min_length[6]');
        $this->form_validation->set_rules('confirm_password','Your Confirm Password','required|min_length[6]|matches[new_password]');
        if($this->form_validation->run()==false)
        {
            $this->load->view('superadmin/change_password');
        }
        else
        {
            $pass_data=array(
                                'id'=>$this->session->userdata('admin_id'),
                                'password'=>$this->input->post('old_password')
                                );
                
            $res=$this->Super_model->commonCheckPassword($pass_data);
               
            if($res==true)
            {
                if($this->input->post('new_password')==$this->input->post('confirm_password'))
                {
                    //both passwords should match
                    $pass_where=array('id'=>$this->session->userdata('admin_id'));
                    $data=array('password'=>md5($this->input->post('new_password')));

                    $pass_change=$this->Super_model->updatePassword('admin',$data,$pass_where);
                    if($pass_change==true)
                    {
                        $this->session->set_flashdata('success','Passwords  Changed successfully');
                        redirect('superadmin/Admin/changePassword');
                    }
                    else
                    {
                        $this->session->set_flashdata('error','Passwords Not Changed');
                        redirect('superadmin/Admin/changePassword');
                    }
                }
                else
                {
                    $this->session->set_flashdata('error','Both Passwords should match');
                    redirect('superadmin/Admin/changePassword');
                }

            }
            else
            {

                $this->session->set_flashdata('error','Your old password not matched');
                redirect('superadmin/Admin/changePassword');
            } 
        }

    } 

    
    /*<<common method for deleting records code starts*/
   public function edit_max_response()
   {
    if(!empty($this->admin_id))
        {
    $response =array();
        $editId = $this->input->post('editId');
        $maxResponse = $this->input->post('maxResponse');
        $condition =array('id'=>$editId);
        $table ='learning_post_requirement_tbl';
        $setdata  = array('maximum_tutor_request'=>$maxResponse);
        $resultio = json_decode($this->Common_model->commonUpdate($table,$setdata,$condition,''));
        //print_r($resultio);exit;
        if($resultio->code==SUCCESS_CODE){
        $response[CODE]=SUCCESS_CODE;
        $response[MESSAGE]='Success';
        $response[DESCRIPTION]='Successfully code Limit has updated';
        }else{
        $response[CODE]=FAIL_CODE;
        $response[MESSAGE]='failed';
        $response[DESCRIPTION]='Failed to update';
        }echo json_encode($response);
        }else{
            redirect('superadmin/Admin/dashboard');
        }
   }

 public function post_requirement()
   {
       //echo 'vivek';die;
    if(!empty($this->admin_id))
        {
      
        /** Pagination code start**/
            $base_url = base_url('superadmin/Admin/post_requirement/');
            $count_rows = json_decode($this->Admin_model->get_post_learning_requirement('',''));
            //print_r($count_rows->result_count);exit;
            $config['total_rows']=$count_rows->result_count;
            $config['per_page'] = 10;
            $si= $this->uri->segment(4,0);
            $config = $this->pagination($base_url, $config['total_rows'], $config['per_page']);
            $this->load->library('pagination');
            $this->pagination->initialize($config);
          
            $data['cur_page'] = floor(($si / $config['per_page']) + 1);   
            $data['total_page']=ceil($config['total_rows'] / $config['per_page']);
        /* end vivek pagination */

       $common_result = json_decode($this->Admin_model->get_post_learning_requirement($config["per_page"], $si));
       $this->data['return_result'] = $common_result->common_result;
       //$data['links'] = $this->pagination->create_links();
       $this->load->view('superadmin/list-post-requirement',$this->data);
       }else{
            redirect('superadmin/Admin/dashboard');
        }
   }
public function search_post_requirement()
   {
   
     if(!empty($this->admin_id))
        {
          /* search parameter pagination */

          $searchdata=array();
          $this->load->library('session');
            $searchby_location = $this->input->post('loc_search');
            $searchby_syllabus = $this->input->post('searchby_sybllabus');
            $searchby_category = $this->input->post('searchby_category');
            $searchby_class = $this->input->post('searchby_class');
          if ($this->input->server('REQUEST_METHOD') === 'POST')
            {
             if(!empty($searchby_location)){
                $this->session->set_userdata('strdata',$searchby_location);
              }else{
                $this->session->unset_userdata('strdata',$searchby_location);
              }
              if(!empty($searchby_syllabus) && $searchby_syllabus!=0){
                $this->session->set_userdata('search_syll',$searchby_syllabus);
              }else{
                $this->session->unset_userdata('search_syll',$searchby_syllabus);
              }
              if(!empty($searchby_class) && $searchby_class!=0){
                $this->session->set_userdata('search_class',$searchby_class);
              }else{
                $this->session->unset_userdata('search_class',$searchby_class);
              }
              if(!empty($searchby_category) && $searchby_category!=0){
                $this->session->set_userdata('search_cat',$searchby_category);
              }else{
              $this->session->unset_userdata('search_cat',$searchby_category);
              }
            }
             
          //print_r($this->session->all_userdata());
         /*if(!empty($searchby_location)){
                $this->session->set_userdata('strdata',$searchby_location);
              }else{
                 $this->session->unset_userdata('strdata',$searchby_location);
              }
           if(!empty($searchby_syllabus) && $searchby_syllabus!=0){
                $this->session->set_userdata('search_syll',$searchby_syllabus);
              }else{
                 $this->session->unset_userdata('search_syll',$searchby_syllabus);
              } 
            if(!empty($searchby_class) && $searchby_class!=0){
                $this->session->set_userdata('search_class',$searchby_class);
              }else{
                 $this->session->unset_userdata('search_class',$searchby_class);
              } 
              if(!empty($searchby_category) && $searchby_category!=0){
                $this->session->set_userdata('search_cat',$searchby_category);
              }else{
                 $this->session->unset_userdata('search_cat',$searchby_category);
              }*/
              $this->searchdata['searchdata_category'] = $this->session->userdata('search_cat');
              $this->searchdata['searchdata_class'] = $this->session->userdata('search_class');
              $this->searchdata['searchdata_syll'] = $this->session->userdata('search_syll');
              $this->searchdata['searchdata_str'] = $this->session->userdata('strdata'); 
              $this->data['myfilterdata']=$this->searchdata;
            //print_r($this->data);die;
              /* search case variable */
        /** Pagination code start **/
        $si= $this->uri->segment(4,0);
        $base_url = base_url('superadmin/Admin/search_post_requirement/');
          $total = json_decode($this->Admin_model->get_filter_requirement_data('','',$this->searchdata));
             $config['total_rows'] = $total->result_count;
            $config['per_page'] = 10;
            $config = $this->pagination($base_url, $config['total_rows'], $config['per_page']);
            $this->load->library('pagination');
            $this->pagination->initialize($config);
            $data['cur_page'] = floor(($si / $config['per_page']) + 1);   
            $data['total_page']=ceil($config['total_rows'] / $config['per_page']);
        /* end vivek pagination */
       $common_result = json_decode($this->Admin_model->get_filter_requirement_data($config["per_page"], $si,$this->searchdata));
        $this->data['return_result'] = $common_result;
        //$data['links'] = $this->pagination->create_links();
       $this->load->view('superadmin/list-post-requirement-search',$this->data);
       }else{
            redirect('superadmin/Admin/dashboard');
        }
   }
public function commonStatusActivity()
    {
        //echo 'test';exit;
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
            case 'tutor_types':
              $table='rl_tutor_types_tbl';
              $setcolumns='status';
              $updatevalue=$activity;
              $wherecondition="tutor_type_id  IN  (" .$updatelist. ")";
              break;
            case 'subscriptions':
              $table='rl_subscriptions_tbl';
              $setcolumns='status';
              $updatevalue=$activity;
              $wherecondition="subscription_id  IN  (" .$updatelist. ")";
              break;
               case 'requirement_post':
              $table='learning_post_requirement_tbl';
              $setcolumns='status';
              $updatevalue=$activity;
              $wherecondition="id  IN  (" .$updatelist. ")";
              break;
              case 'feedbacktutor':
              $table='rl_tutor_feedback_tbl';
              $setcolumns='status';
              $updatevalue=$activity;
              $wherecondition="feedback_id  IN  (" .$updatelist. ")";
              break;
                       
            }
           $update = $this->Admin_model->commonStatusActivity($table, $setcolumns, $updatevalue, $wherecondition);
            echo $update;
            exit;
        }
        echo json_encode($response);
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

  public function notification_add($str)
      {
        if(!empty($this->admin_id))
        {
       $arr=explode(',',$str);
      $count=count($arr);
      for($i=0;$i<$count;$i++)
      {
      $where=array('feedback_id'=>$arr[$i]);
      $this->db->or_where($where);
      $this->db->where('status',1);
       }
      $result=$this->db->get('rl_tutor_feedback_tbl');
      // echo $this->db->last_query();exit;
        $res=$result->result();
        if($result->num_rows()>0)
        {
         date_default_timezone_set('asia/kolkata');
        foreach($res as $row)
        {
           $data[]=array('user_id'=>$row->parent_user_id,'notification_msg'=>'You have a new requirement','relation'=>'feedback','added_on'=>date('Y-m-d H:i:s'),'feedback_id'=>$row->feedback_id);
        }
        $res=$this->db->insert_batch('rl_notification_tbl',$data);
      }
      }else{
            redirect('superadmin/Admin/dashboard');
        }
    }

public function commonDelete()
    {
        $response = array();
        $tablename = $this->input->post('tablename');
        $updatelist = $this->input->post('updatelist');
        if ($tablename != '') {
            $table = '';
            $wherecondition = '';
            switch ($tablename) {
            case 'tutor_types':
                $table = 'rl_tutor_types_tbl';
                $wherecondition = "tutor_type_id IN  (" . $updatelist . ")";
                break;
            case 'subscriptions':
                $table = 'rl_subscriptions_tbl';
                $wherecondition = "subscription_id IN  (" . $updatelist . ")";
                break;
             case 'post_requirement':
                $table = 'learning_post_requirement_tbl';
                $wherecondition = "id IN  (" . $updatelist . ")";
                break;
                case 'contact':
                $table = 'rl_tutor_contactus_tbl';
                $wherecondition = "id IN  (" . $updatelist . ")";
                break; 
                case 'feedbacktutor':
                $table = 'rl_tutor_feedback_tbl';
                $wherecondition = "feedback_id IN  (" . $updatelist . ")";
                break;   
                                    
            }
            $update = $this->Admin_model->commonDelete($table,$wherecondition);
            echo $update;
            exit;
        }
        echo json_encode($response);
    }
    public function contact_list()
    {
      if(!empty($this->admin_id))
        {
            $data  = array();
            $data['title'] = 'Contact from query';
            $base_url = base_url('superadmin/admin/contact_list/');
            $total_rows = $this->Admin_model->get_total_recs('rl_tutor_contactus_tbl');
            $per_page = 50;
            $config = $this->pagination($base_url, $total_rows, $per_page);
            $this->load->library('pagination');
            $this->pagination->initialize($config);
            $si= $this->uri->segment(4,0);
            $data['cur_page'] = floor(($si / $config['per_page']) + 1);   
            $data['total_page']=ceil($config['total_rows'] / $config['per_page']);
                $params['table'] = 'rl_tutor_contactus_tbl';
                $params['order_by_cols'] = 'id';
       $resview = json_decode($this->Common_model->commonget_with_pagination($params,$config['per_page'],$si));
       //print_r($viewdata);die;
       if($resview->code==200){
        $data['viewdata']=$resview->result;
       }else{
         $data['viewdata']=0;
       }
       $this->load->view('superadmin/contact-list',$data);
       }else{
            redirect('superadmin/Admin/dashboard');
        }
    }
/* public function match_tuition_in()
 {
   $langlat = $this->Admin_model->get_matched_latandlang(9);
   print_r($langlat->latitude,$langlat->longitude);die;
   $rr = $this->Admin_model->matching_data(9,$langlat->latitude,$langlat->longitude);
   print_r($rr);exit;
 }*/
  public function requirement_based_match()
  {
    $req_id=$this->input->post('req_id');
    $rresult=$this->Admin_model->getSingleRequirement($req_id);
    $rresult_match_data = $this->Admin_model->get_data($rresult); 
   // print_r($rresult_match_data); print_r($rresult);die;
  $email_info['emaildata']=array('name' => $rresult->name, 'budget_price' => $rresult->budget_price, 'budget_type' =>$rresult->budget_type, 'class_name' => $rresult->class_name, 'category_name' =>$rresult->category_name, 'syllabus_name' => $rresult->syllabus_name,'subjectname'=>$rresult->subjectname);
    $message2=$this->load->view('emailtemplate/email-template-notification-tutor',$email_info,true);
     // $this->load->view('emailtemplate/requirement_notification_email',$message2);
      /* mail sending script for tutor and parent login credential*/
      $countarray =count($rresult_match_data);
      //echo $countarray;exit;
       $j = 0;
      $response=array();
      foreach( $rresult_match_data as $key=>$value){
        $to2=$value->email;
         $res= $this->send_user_email($to2,'info@itsmytutor.com','Dear '.$value->name.' a new requirement came to you for you as per you matching profile.',$message2);
          
          //echo $countarray;exit;
          if ($j == $countarray - 1){
           if($res){
            $response[CODE]=SUCCESS_CODE;
            $response[MESSAGE]='Success';
            $response[DESCRIPTION]='Notification has been sent to tutor';
          }else{
            $response[CODE]=FAIL_CODE;
            $response[MESSAGE]='fail';
            $response[DESCRIPTION]='Error in sending';
          }
        }
        // …
        $j++;
          //echo json_encode($response);die;

      }
      $this->Common_model->commonUpdate('learning_post_requirement_tbl',['notification_status'=>1],['id'=>$req_id]);
      echo json_encode($response);exit;
  }

public function send_user_email($to,$from,$subject,$message){ 
  $config=array(
                /* 'protocol' => 'smtp', 
                 'smtp_host' => 'ssl://smtp.googlemail.com', 
                 'smtp_port' => 465, 
                 'smtp_user' => 'jitendra.richlabz@gmail.com', 
                 'smtp_pass' => '230869sh',*/
                 'charset'=>'utf-8',
                 'newline'=> "\r\n",
                 'mailtype'=>'html',
                 'validation'=> true
      );
    $this->load->library('email');
        $this->email->initialize($config);
  $this->email->to($to);
  $this->email->from($from);
  $this->email->subject($subject);
  $this->email->message($message);
       if($this->email->send())
       {
        return true;
       }
       else
       {
        return false;
       }
}
}
?>