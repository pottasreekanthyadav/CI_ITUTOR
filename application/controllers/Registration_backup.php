<?php
class Registration extends CI_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->data = array();
		$this->load->model('Front_model');
		$this->load->model('Common_model');
		$this->load->model('Frontend_model','f');
		$this->load->model('superadmin/crud');
		$this->load->model('Tutor_model','t');
		//$this->load->library('Sendmail');
		date_default_timezone_set('asia/kolkata');
		$this->user_email=$this->session->userdata('user_email');
		$this->ip_address=$this->input->ip_address();
		$this->user_type=$this->session->userdata('user_type');
		}

	public function index()
	{
		
		$this->load->view('index',$this->data);
	}

	public function load_aboutus()
	{
		$this->load->view('aboutus');
	}

	public function signup_load()
	{
		$user_type=$this->session->userdata('user_type');
		if($this->session->userdata('user_id') && ($user_type==2))
		{
			redirect('parent/dashboard');
		}
	     if($this->session->userdata('user_id') && ($user_type==1))
		{
			redirect('tutor/dashboard');
		}
     $token=base64_decode($this->uri->segment(3));
		 $to_email=base64_decode($this->uri->segment(4));
	  if(!empty($token) && !empty($to_email))
	  {
	  	// echo "hii";exit;
	  	$where=array('refferal_code'=>$token,'to_email'=>$to_email);
	   $count=$this->f->common_check("rl_tutor_refferal_tbl",$where);
	  	if($count>0)
	  	{
	  		//echo "hii";exit;
	  	$this->session->set_userdata('token',$token);
	  	$this->session->set_userdata('to_email',$to_email);
	  }
	  else
	  {
	  	echo "invalid token";exit;
	  }
	  }
	  // if(!empty($token=$this->session->userdata('token')))
	  // {
	  // 	echo $token;exit; 
	  // }
		$this->load->view('login-signup');
	}
	public function otp_load()
	{
		$this->load->view('otp');
	}
	public function signup()
	{
		$this->load->library('form_validation');
		$arr=array(
					array('field'=>'sel1',
						  'label'=>'',
						  'rules'=>'required|trim',
						  'errors'=>array('required'=>'Please select user type')),
					array('field'=>'name',
						  'label'=>'',
						  'rules'=>'required|trim|regex_match[/^[a-zA-Z ]+$/]',
						  'errors'=>array('required'=>'Name is required')),
					array('field'=>'email',
						  'label'=>'',
						  'rules'=>'required|trim|regex_match[/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/]',
						  'errors'=>array('required'=>'Email is required',
						  				  'regex_match'=>'Invalid email')),
					array('field'=>'mobile',
						  'label'=>'',
						  'rules'=>'required|trim|max_length[10]|regex_match[/^[6-9]{1}[0-9]{9}$/]',
						  'errors'=>array('required'=>'Mobile is required',
						  				  'max_length'=>'Max length should be 10 digit',
						  				  'regex_match'=>'Invalid Mobile Number')),
					array('field'=>'password',
						  'label'=>'',
						  'rules'=>'required|trim|min_length[6]|max_length[18]',
						  'errors'=>array('required'=>'Password is required',
						  				  'min_length'=>'Minimum length at least 6 digits',
						  				  'max_length'=>'Max length at most 18 digits')),
					array('field'=>'cpwd',
						  'label'=>'',
						  'rules'=>'required|trim|matches[password]',
						  'errors'=>array('required'=>'Confirm password is required',
						  				  'matches'=>'Confirm password should be same as password'))
				  );
		$this->form_validation->set_rules($arr);
		if($this->form_validation->run()==true)
		{
			// echo "test";exit;
			$verification_code=rand(1000,9999);
			$user_type=$this->input->post('sel1');
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$mobile=$this->input->post('mobile');
			$password=md5($this->input->post('password'));
			$cpwd=$this->input->post('cpwd');
			$table="rl_users_tbl";
			$unqid ='SA'.rand(10000,999999);
			if($user_type==1)
			{
				$msg="Dear teacher, ";
			}
			else
			{
				$msg="Dear parent, ";
			}
			$res_sms=otp_send($verification_code,$mobile,$msg);
			if($res_sms)
			{
				$this->session->set_flashdata('suc_msg',"OTP sent to your mobile");
			}
			// echo $res;exit;
			$insert_data=array('name'=>$name,
							   'email'=>$email,
							   'password'=>$password,
							   'mobile'=>$mobile,
							   'user_type'=>$user_type,
							   'registered_on'=>date('Y-m-d H:i:s'),
							   'user_status'=>0,
							   'last_login_ip'=>$this->input->ip_address(),
							   'last_login_date'=>date('Y-m-d H:i:s'),
							   'verification_code'=>$verification_code,
							    'unique_id'=>$unqid
				);
			$wer=array('email'=>$email);
			$res=$this->Front_model->add_user_data($insert_data,$table,$wer,$email,$mobile);
			if($res==1)
			{
				/*send opt to user  */
				/*redirect to otp page*/
				$params['table']='rl_users_tbl';
				$params['where_condition']=array('email'=>$email);
				$params['result_variable']='resultuser';
				$params['columns']=array('id');
				$rresult = json_decode($this->Common_model->getSingleRecord($params));
				//print_r($rresult);exit;
				if($rresult->code==SUCCESS_CODE){
					$newre=$rresult->resultuser;
					$userid =  $newre->id;
					if($user_type==1){
						$code='TUT';
					}else{
						$code='PAR';
					}
					$newuniqid = 'IMT'.$code.$userid;
					$this->Common_model->commonUpdate('rl_users_tbl',array('unique_id'=>$newuniqid),array('id'=>$userid));
					//print_r($newre->id);exit;
				}
			    $this->session->set_userdata('user_name',$name);
				$this->session->set_userdata('user_email',$email);
				$this->session->set_userdata('user_mobile',$mobile);
				$this->session->set_userdata('user_type',$user_type);
				$this->load->view('otp');
			}
			if($res==2)
			{
				//echo "User registration failed";
				$this->session->set_flashdata('msg1','Sorry,User registration failed');
				$this->load->view('login-signup');
			}
			if($res==3)
			{
				$this->session->set_flashdata('msg1','Sorry,User already registered');
				$this->load->view('login-signup');
			}

		}
		else
		{
			$this->load->view('login-signup');
		}
	}
	public function check_otp()
	{
		$this->load->library('form_validation');
		$arr=array(
					array('field'=>'otp',
						  'label'=>'',
						  'rules'=>'required',
						  'errors'=>array('required'=>'OTP is required'))
				  );
		$this->form_validation->set_rules($arr);
		if($this->form_validation->run()==true)
		{
				$otp=$this->input->post('otp');
				$email=$this->session->userdata('user_email');
				$data=array('verification_code'=>$otp,'email'=>$email);
			$check_result=$this->Front_model->get_verification_code('rl_users_tbl',$data);
				if($check_result)
				{

					$this->check_activation($otp,$email);
				}
				else
				{
					$this->session->set_flashdata('msg','Sorry,OTP not matched');
					$this->session->set_flashdata('text_color','text-danger');
					$this->load->view('otp');
				}
		}
		else
		{
			$this->load->view('otp');
		}
	}
	public function resend_otp()
    {
        $response=array();
        $email=$this->user_email;
        // echo $email;exit;
       if(!empty($email))
            {
			$verification_code=rand(1000,9999);
              $where=array('email'=>$email);
                    $check_user=$this->db->select('id,mobile')->from('rl_users_tbl')->where($where)->get()->row();
                    if($check_user!=null)
                    {
                  $mobile=$check_user->mobile;
                  if($this->user_type==1)
                  {
                  	$msg="Dear teacher, ";
                  }
                  else
                  {
                  	$msg="Dear parent, ";
                  }
                    $res_sms =otp_send($verification_code,$mobile,$msg);
                        if($res_sms)
                        {
                            $update_data = array('verification_code'=>$verification_code);
                            $update_condition = array('email'=>$email);
                            $successMessage = 'OTP sent to your mobile';
                            $table="rl_users_tbl";
                            $update = json_decode($this->crud->commonUpdate($table, $update_data, $update_condition, $successMessage));
                            $response['code']=$update->code;
                            $response['message']=$update->message;
                            $response['description']=$update->description;
                        }
                         else
                         {
                            $response['code']=FAIL_CODE;
                            $response['message']='Failed';
                            $response['description']='Unable to send OTP';
                         }
                    }
                    else
                    {
                        $response['code']=FAIL_CODE;
                        $response['message']='failed';
                        $response['description']='Mobile number is not registered';
                    }
                }
            else
            {
                $response['code']=VALIDATION_CODE;
                $response['message']='user id not available';
                $response['description']='user id is not available';
            }
        echo json_encode($response);
    }
	public function check_activation($verification_code,$email)
	{
		$activate_rs=$this->Front_model->account_activation($verification_code,$email);
		if($activate_rs)
		{	
			$this->session->set_flashdata('msg12','Your account activated Successfully');
			$this->session->set_flashdata('text_color','text-success');
			 $token=$this->session->userdata('token');
                  if(!empty($token))
                  {
                   $to_email=$this->session->userdata('to_email');
                  $refer_where=array('refferal_code'=>$token,'to_email'=>$to_email);
                  $row=$this->f->common_get('rl_referral_cash_tbl',['id'=>1]);
                  $refer_cash=$row->refer_cash;
                  $update_data=array('refer_activation_status'=>1,'credit'=>$refer_cash);
                  $this->t->common_update("rl_tutor_refferal_tbl",$refer_where,$update_data);
                }
			if($this->session->userdata('user_type')==1)
			{
				redirect("tutor/tutor_profile");
			}
			elseif($this->session->userdata('user_type')==2)
			{
				//$this->load_dashboard();
				// redirect('parent/dashboard');
				$id=$this->session->userdata('plan_id');
				$where=array('id'=>1);
		  $result=$this->Front_model->get_data_row('rl_payment_subscription_tbl',$where);
			$data['plan']=$result->amount;
			$tax=$result->gst;
			$gst=$result->amount*($tax/100);
			$data['gst']=$gst;
			$data['total']=($result->amount*($tax/100))+($result->amount);
	
				$this->load->view('welcome_access',$data);
			}
		}
		else
		{
			$this->session->set_flashdata('msg','Sorry,You have entered wrong otp');
			$this->session->set_flashdata('text_color','text-danger');
			$this->load->view('otp');
		}
	}
	public function load_dashboard()
	{
		if(! ($this->session->userdata('user_id')))
		{
		 	redirect('Registration/signup_load');
		}
		if($this->session->userdata('user_type')==1)
		{
			//$this->load->view('tutors/dashboard-tutor');
			redirect('tutor/tutor_profile');
		}
		if($this->session->userdata('user_type')==2)
		{
			$this->load->view('parents/dashboard');
		}
	}
	public function load_subscription_main(){
		// if($this->session->userdata('user_type')==1)
		// 	{
	 		$this->load->view('parents/subscribe');
		// 	}
		// 	elseif($this->session->userdata('user_type')==2)
		// 	{
		// 		//$this->load_dashboard();
		// 		redirect('parents/Parent_ctrl/load_dashboard');
		// 	}
		// }
		// else
		// {
		// 	$this->session->set_flashdata('msg','Sorry,unable to activate account');
		// 	$this->session->set_flashdata('text_color','text-danger');
		// 	$this->load->view('login-signup');
		// }
	}
	

	public function get_plans()
	{
		// $res=$this->Front_model->get_plan_data('rl_tutor_newtype_tbl');
		// $data['packages'] = $res;
		// // echo "<pre>";
		// // print_r($data);exit;
		// $this->load->view('parents/new_plans',$data);

		// $res= $this ->Front_model->get_cats('rl_tutor_newtype_tbl');
		// foreach($res as $cats){
		// 	$id=$cats->category_id;
		// 	$data['qual'][]= $cats->qualification;
		// 	//$where = array('tutor_id'=>$id);
		// 	$data['plans'][] = $this ->Front_model->get_plans();
			
		// }
		
		$data=$this ->Front_model->get_plans();
		$this->load->view('parents/new_plans',$data);
	}

	public function add_tutor_subscrition()
	{
	$subscription_id= $this->uri->segment(3);
	$this->session->set_userdata('subscrip_id',$subscription_id);
       $user_id=$this->session->userdata('user_id');
		$wer=array('subscription_id'=>$subscription_id);
		$result=$this->Front_model->get_subscribe_record($wer);
     $amount=$result->amount;
     $this->session->set_userdata('amount',$amount);
     $product_info=$result->category_name;
     $this->session->set_userdata('product_info',$product_info);
     date_default_timezone_set('asia/kolkata');
		$insert_data=array('user_id'=>$user_id,
							'subscription_id'=>$subscription_id,
							'amount'=>$amount,
							'added_on'=>date('Y-m-d H:i:s'),
							  'user_type'=>1
);
		$res=$this->Front_model->add_data($insert_data,'rl_tutor_subscription_info_tbl');
		if($res)
			redirect('registration/load_payuform');
	}

public function load_payuform(){

					$wer=array('id'=>$this->session->userdata('user_id'));
			$row=$this->Front_model->get_data_row('rl_users_tbl',$wer);
			$this->session->set_userdata('mobile',$row->mobile);
			$amount=$this->session->userdata('amount');
			$product_info=$this->session->userdata('product_info');
                      $info=array(
								'plan_amount'=>$amount,
							    'name'=>$row->name,
							    'email'=>$row->email,
							    'mobile'=>$row->mobile,
                                 'plan_name'=>$product_info
								);
                      $data['info']=$info;

                      $this->load->view('tutor_payment/payuform',$data);
}
public function load_payuform2(){
			$this->session->set_userdata('req',$this->uri->segment(3));
	        $id=$this->uri->segment(2);
	                 $user_id=$this->session->userdata('user_id');
	                 if(!empty($user_id))
	                 {
            $wer=array('id'=>$this->session->userdata('user_id'));
			$row=$this->Front_model->get_data_row('rl_users_tbl',$wer);
			$where=array('id'=>$id);
			$this->session->set_userdata('plan_id',$id);
		$result=$this->Front_model->get_data_row('rl_payment_subscription_tbl',$where);
			$actual_amount=$result->amount;
			$tax=$result->gst;
			$newvalue=$actual_amount*($tax/100)+$actual_amount;
			$amount=$newvalue;
			//echo $amount;exit;
			$this->session->set_userdata('mobile',$row->mobile);
			if($id==1)
			{
			$product_info="life time pack";
		}
		else
		{
			$product_info="id card pack";
		}
                      $info=array(
								'plan_amount'=>$amount,
							    'name'=>$row->name,
							    'email'=>$row->email,
							    'mobile'=>$row->mobile,
                                 'plan_name'=>$product_info
								);
                      $data['info']=$info;

                      $this->load->view('tutor_payment/payuform',$data);
                  }
                  else
                  {
                  	$this->load->view('login-signup');
                  }
}
	public function load_payment_response()
	{
		$this->load->view('tutor_payment/response');
	}
	public function login()
	{
		$this->load->library('form_validation');
		if($this->input->post('login'))
		{
			$arr=array(
						array('field'=>'login_email',
							  'label'=>'',
							  'rules'=>'required',
							  'errors'=>array('required'=>'Email/Mobile is required')),
						array('field'=>'login_password',
							  'label'=>'',
							  'rules'=>'required',
							  'errors'=>array('required'=>'Password is required'))
					  );
			$this->form_validation->set_rules($arr);
			if($this->form_validation->run()==true)
			{
				$logindata=$this->input->post('login_email');
				$log_col = (is_numeric($logindata)) ? 'mobile' : 'email';
				$user_pwd=$this->input->post('login_password');
				$password=md5($user_pwd);
				 $remember=$this->input->post('remember');
				$wer=array($log_col=>$logindata,'password'=>$password);//echo "<pre>";print_r($wer);exit;
				$user_data=$this->Front_model->get_status('rl_users_tbl',$wer);
				if($user_data)
				{
					if($user_data->user_status==1)
					{
						$update_data=array(
					'last_login_ip'=>$this->ip_address,
					'last_login_date'=>date('Y-m-d H:i:s')
					);
					$res=$this->f->common_update('rl_users_tbl',$wer,$update_data);
						if($res)
						{

						 if(!empty($remember))
  {
  	$time=86400*30;
  	set_cookie('user_email',$logindata,$time);
  	set_cookie('user_pwd',$user_pwd,$time); 
  }
  else
  {
  	set_cookie('user_email','');
  	set_cookie('user_pwd',''); 
  }
						$this->session->set_userdata('user_id',$user_data->id);
						$this->session->set_userdata('user_name',$user_data->name);
						$this->session->set_userdata('user_email',$user_data->email);
						$this->session->set_userdata('user_type',$user_data->user_type);
						$this->session->set_userdata('user_mobile',$user_data->mobile);
						if($user_data->user_type==1)
						{
							//echo "Welcome to tutor dashboard..!!";
							redirect('tutor/dashboard');
						}
							
						if($user_data->user_type==2)
						{
							//$this->load->view('parents/dashboard');
							redirect('parent/dashboard');
						}
						//$this->load_dashboard();
					}
				}
					else
					{
						$this->session->set_flashdata('msg','Sorry,Your account is not activated.Plz activate Your Account');
						$this->load->view('login-signup');
					}
				}
				else
				{
					$this->session->set_flashdata('msg','Sorry,Invalid email/mobile  or password');
					$this->load->view('login-signup');
				}

			}
			else
			{
				$this->load->view('login-signup');
			}
		}
		else
		{
			$this->load->view('login-signup');
		}
	}
	public function myexp(){
		$this->load->view("admin/cat_update_view");
	}
	// public function otp_send($code,$mobile){
	// 	$curl = curl_init();
	// 	curl_setopt_array($curl, array(
	// 	  CURLOPT_URL => "http://api.msg91.com/api/sendhttp?sender=ITUTOR&route=4&mobiles=$mobile&authkey=201517AGqlfaWYnGtS5aa0c2a7&country=91&message=Dear user $code is your OTP",
	// 	  CURLOPT_RETURNTRANSFER => true,
	// 	  CURLOPT_ENCODING => "",
	// 	  CURLOPT_MAXREDIRS => 10,
	// 	  CURLOPT_TIMEOUT => 30,
	// 	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	// 	  CURLOPT_CUSTOMREQUEST => "GET",
	// 	  CURLOPT_SSL_VERIFYHOST => 0,
	// 	  CURLOPT_SSL_VERIFYPEER => 0,
	// 	));
	// 	$response = curl_exec($curl);
	// 	$err = curl_error($curl);
	// 	curl_close($curl);
	// 	if ($err) {
	// 	  return "cURL Error #:" . $err;
	// 	} else {
	// 	  return $response;
	// 	}
	// }
	
	/*vivek amamend dated:11-6-18*/
	 public function get_class_data()
  {
    
    //print_r($_POST);die;
    $response = array();
    $categoryid = $this->input->post('id');
    $params['wherecondition'] = array('category_id'=>$categoryid,'class_status'=>1);
    $params['table'] = 'rl_class_tbl';
    $params['order_by_cols'] = 'class_priority';
    $params['order_by']='ASC';
    $resultviewdata = json_decode($this->Common_model->commonget($params));
    //print_r($resultviewdata);die;
    if($resultviewdata->code==SUCCESS_CODE){
        $response[CODE] = SUCCESS_CODE;
                $response[MESSAGE] = 'Success';               
                $response['resultdata'] = $resultviewdata->result;
    }else{
        $response[CODE] = FAIL_CODE;
                $response[MESSAGE] = 'Fail';
                $response[DESCRIPTION] = 'No records found';
    }
    // /print_r($response);die;
    echo json_encode($response);

  }
	/*vivek amamend dated:12-6-18*/
		public function get_subject_data()
  {
    $response = array();
    $subid = $this->input->post('id');
   
    $resultviewdata = json_decode($this->Front_model->get_subject_data($subid));
    //print_r($resultviewdata);die;
    if($resultviewdata->code==SUCCESS_CODE){
        		$response[CODE] = SUCCESS_CODE;
                $response[MESSAGE] = 'Success';               
                $response['resultdata'] = $resultviewdata->result;
    }else{
        		$response[CODE] = FAIL_CODE;
                $response[MESSAGE] = 'Fail';
                $response[DESCRIPTION] = 'No records found';
    }
    // /print_r($response);die;
    echo json_encode($response);

  }
 public function send_user_email($to,$from,$subject,$message)
{ 
  $config=array(
                 // 'protocol' => 'smtp', 
                 // 'smtp_host' => 'ssl://smtp.googlemail.com', 
                 // 'smtp_port' => 465, 
                 // 'smtp_user' => 'jitendra.richlabz@gmail.com', 
                 // 'smtp_pass' => '230869sh',
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
public function testing(){
	 $this->load->model('Frontend_model');
        $email_data['emaildata'] = $this->Frontend_model->get_email_data(7);
      
      $this->load->view('emailtemplate/learning_requirement_email',$email_data);
     
}
public function get_exist_tutor_email()
{
$response = array();
$email = $this->input->post('email');
$where= array('email'=>$email,'user_type'=>1);
$ownexist = $this->Common_model->commonCheck('id','rl_users_tbl',$where);
if($ownexist==1){
$response[CODE]=SUCCESS_CODE;
$response[MESSAGE]='Exist as Tutor';
$response[DESCRIPTION]='Your Not allowed to post Requirement.';
}
echo json_encode($response);die;
}
public function get_exist_tutor_mobile()
{
$response = array();
$mobile = $this->input->post('mobile');	
$where= array('mobile'=>$mobile,'user_type'=>1);
$ownexist = $this->Common_model->commonCheck('id','rl_users_tbl',$where);
if($ownexist==1){
$response[CODE]=SUCCESS_CODE;
$response[MESSAGE]='Exist as tutor';
$response[DESCRIPTION]='Your Not allowed to post Requirement.';
}
echo json_encode($response);die;
}

public function save_post_requirement_data()
  {
   // print_r($_POST);die;
    $response = array();
    $name = $this->input->post('name');
    $searchlocation = $this->input->post('searchlocation');
    $duration = $this->input->post('duration');
    $classs = $this->input->post('class');
    $subjects = $this->input->post('subjects');
    $syllabus = $this->input->post('syllabus');
    $category = $this->input->post('categorie');
    $email = $this->input->post('email');
    $mobile = $this->input->post('mobile');
    $from_time =$this->input->post('from_time');
    $to_time =$this->input->post('to_time');
    $postal_code =$this->input->post('postal_code');
    $locality =$this->input->post('locality');
    $lat =$this->input->post('lat');
    $lng =$this->input->post('lng');
    $perweek=$this->input->post('perweek');
    $demotime=$this->input->post('demotime');
    $budget=$this->input->post('budget');
    $gender=$this->input->post('gender');
    // print_r($subjects);exit;
    $errors=0;$error_message=array();
    if($perweek==""){
      $errors=1;
      $error_message[]='Class per week is required';
    }
    if($demotime==""){
      $errors=1;
      $error_message[]='Demo date and time is required';
    }
    if($budget==""){
      $errors=1;
      $error_message[]='Budget is required';
    }
    if($gender==""){
      $errors=1;
      $error_message[]='Gender is required';
    }
    if($name==""){
      $errors=1;
      $error_message[]='Name is required';
    }
    if($mobile==""){
      $errors=1;
      $error_message[]='Mobile is required';
    }
    if($email==""){
      $errors=1;
      $error_message[]='Email is required';
    }

    if($searchlocation==""){
    $errors=1;
      $error_message[]='Location is required';  
    }
    if($duration==""){
      $errors=1;
      $error_message[]='Duration is required';  
    }   
    if($classs==""){
      $errors=1;
      $error_message[]='Class is required'; 
    }
    if($subjects==""){
      $errors=1;
      $error_message[]='Subjects is required';  
    }
    if($syllabus==""){
      $errors=1;
      $error_message[]='Syllabus is required';  
    }
    if($category==""){
      $errors=1;
      $error_message[]='Category is required';  
    }
    if($from_time==""){
      $errors=1;
      $error_message[]='From Time is required';
    }
    if($to_time==""){
      $errors=1;
      $error_message[]='To Time is required';
    }
    if($errors==0){
    	$user_data =$this->Front_model->get_date_reg_id_date($email,$mobile);
    	if(!empty($user_data)){
    		if(!empty($user_data)){
    	$userinfo = $user_data[0];
    	$mydate2 = $userinfo->registered_on;
    	$mydate2=explode(' ',$mydate2);
    	$mydate = $mydate2[0];
    	$myid = $userinfo->id;	
    	}
    	//print_r($user_id);die;
    	 $paydate = $this->Front_model->get_date_payment_id_date($myid);
    	 if(!empty($paydate)){
    	 $newpaymentdate = $paydate[0];
		 $mydateo =$newpaymentdate->payment_date;
		 $mydate2 = explode(' ',$mydateo);
		 $mydate =  $mydate2[0];
    	 }
    	  $restrict = $this->Front_model->restrict_post_count($email,$mobile,$mydate);
    	}else{
    		$restrict=0;
    	}
    	 //echo $restrict;
         $total_yrly_view = $this->Front_model->count_parent_yearly_post();
                           $owndd = $total_yrly_view[0];
                           $parent_allowed_post = $owndd->parent_yearly_post;
                           //echo $parent_allowed_post.'vivek';die;
                           //print_r($total_yrly_view);die;
                           if($restrict<$parent_allowed_post || $restrict==0){
							//echo 'vivek'.$restrict;die;
    $checkexist = $this->Common_model->commonCheck('id','rl_users_tbl',array('email'=>$email,'mobile'=>$mobile));
    if($checkexist==1){
    	$usertype=0;
    }else{
    	$usertype=1;
    }    	
      $insert_data =array('email'=>$email,'mobile'=>$mobile,'name'=>$name,'location'=>$searchlocation,'syllabus'=>$syllabus,'category'=>$category,'class'=>$classs,'duration'=>$duration,'created_at'=>date('Y-m-d H:i:s'),'requirement_type'=>$usertype,'pincode'=>$postal_code,'latitude'=>$lat,'longitude'=>$lng,'area'=>$locality,'demo_date_time'=>$demotime,'budget_fid'=>$budget,'per_week_class'=>$perweek,'gender'=>$gender);
    /* end mail data collection in  temoplate data */       
      /* subject multiple insert  */
      if($classs==14 || $classs==15){
      	$new_subjects = count($subjects);
      	//echo $new_subjects;die;
      	for($i=0;$i<$new_subjects;$i++){
      		$returnresult = json_decode($this->Common_model->commonInsert('learning_post_requirement_tbl',$insert_data,'Inserted Successfully'));  
      	}
      	$rres = $this->Front_model->get_id_savedrequirement($new_subjects);
      	//print_r($rres);die;
      	$j=0;
      	foreach($rres as $key=>$value){
      		 $preferred_new_subjects[] = array('subject_name_id'=>$subjects[$j],'added_at'=>date('Y-m-d H:i:s'),'requirement_id'=>$value->id);
      		 $j++;
      	}
      	$this->Common_model->batchInsert('rl_requirement_post_subject_tbl',$preferred_new_subjects);
      	/*start timing store table*/

			for($i=0;$i<count($from_time);$i++){
			$preferred_new_time1[] =$from_time[$i];
			}

//print_r($preferred_new_time1);
			for($i=0;$i<count($to_time);$i++){
			$preferred_new_time2[] = $to_time[$i];
			}
			//print_r($preferred_new_time2);die;
			//echo $preferred_new_time1[0];die;
			if(count($preferred_new_time2)>1 || count($preferred_new_time1)>1){
				$k=0;
				foreach($rres as $key=>$value){
				$timeing=$preferred_new_time1[$k].'|'.$preferred_new_time2[$k];
				$preferred_new_time[] = array('tuition_time'=>$timeing,'added_at'=>date('Y-m-d H:i:s'),'requirement_id'=>$value->id);
			$k++;
			}
			}else{
				$k=0;
				foreach($rres as $key=>$value){
				$timeing=$preferred_new_time1[0].'|'.$preferred_new_time2[0];
				$preferred_new_time[] = array('tuition_time'=>$timeing,'added_at'=>date('Y-m-d H:i:s'),'requirement_id'=>$value->id);
			$k++;
			}
			}
			
			 $this->Common_model->batchInsert('rl_requirement_post_time_tbl',$preferred_new_time);
      	/*end timing table*/
      	//echo 'vivek in class xi xii';die;
      }else{
      	//echo 'vivek';die;
      	 $returnresult = json_decode($this->Common_model->commonInsert('learning_post_requirement_tbl',$insert_data,'Inserted Successfully')); 
      	 $new_subjects = count($subjects);
      for($i=0;$i<$new_subjects;$i++){
        $preferred_new_subjects[] = array('subject_name_id'=>$subjects[$i],'added_at'=>date('Y-m-d H:i:s'),'requirement_id'=>$returnresult->inserted_id);
      }
      //print_r($preferred_new_subjects);die;
      $this->Common_model->batchInsert('rl_requirement_post_subject_tbl',$preferred_new_subjects);
      /* multiple insert timing */
      
      for($i=0;$i<count($from_time);$i++){
        $preferred_new_time1[] =$from_time[$i];
      }
      for($i=0;$i<count($to_time);$i++){
        $preferred_new_time2[] = $to_time[$i];
      }
      
      for($i=0;$i<count($preferred_new_time2);$i++){
        $preferred_new_time[] = array('tuition_time'=>$preferred_new_time1[$i].'|'.$preferred_new_time2[$i],'added_at'=>date('Y-m-d H:i:s'),'requirement_id'=>$returnresult->inserted_id);
      }
      //print_r($preferred_new_time);die;
      $this->Common_model->batchInsert('rl_requirement_post_time_tbl',$preferred_new_time);
      }
    if($returnresult->code==SUCCESS_CODE){
      /*signup mail start*/
      	$checkexisttutor = $this->Common_model->check_user_data('id','rl_users_tbl',array('email'=>$email,'mobile'=>$mobile));
      if($checkexisttutor==0){
      if($usertype==1){

      $unqid ='SA'.rand(10000,999999);
    	$password_rand = rand(1000,9999);
    	$insert_parentdata=array('user_type_guest_or_not'=>1,'user_type'=>2,'name'=>$name,'mobile'=>$mobile,'email'=>$email,'password'=>md5($password_rand),'user_status'=>1,'unique_id'=>$unqid,'registered_on'=>date('Y-m-d H:i:s'));
    	$result = json_decode($this->Common_model->commonInsert('rl_users_tbl',$insert_parentdata,'Check your email password has been send.'));
			if($result->code==200){
				$params['table']='rl_users_tbl';
				$params['where_condition']=array('email'=>$email);
				$params['result_variable']='resultuser';
				$params['columns']=array('id');
				$rresult = json_decode($this->Common_model->getSingleRecord($params)); 
				if($rresult->code==SUCCESS_CODE){
					$newre=$rresult->resultuser;
					$userid =  $newre->id;
					$type_user = $newre->user_type;
					if($type_user==1){
						$code='TUT';
					}else{
						$code='PAR';
					}
					$newuniqid = 'IMT'.$code.$userid;
					$this->Common_model->commonUpdate('rl_users_tbl',array('unique_id'=>$newuniqid),array('id'=>$userid));
					//print_r($newre->id);exit;
				}
			$email_data['emaildata'] =array('password'=>$password_rand,'email'=>$email,'mobile'=>$mobile,'name'=>$name);
			$message2=$this->load->view('emailtemplate/guest_signup_email',$email_data,true);
			//$this->load->view('emailtemplate/guest_signup_email',$email_data);
			/* mail sending script for tutor and parent login credential*/
			 			$to2 = $email;
                           $res= $this->send_user_email($to2,'vivek.richlabz@gmail.com','Sign In Credentials',$message2);
                           $payment_status = $this->Front_model->get_payment_status($myid);
                           $user_type=$this->session->userdata('user_type');
                           $redirect = base_url().'signup';
								if($res){
								$response[CODE]=SUCCESS_CODE;
								$response[MESSAGE]='Successfully Saved';
								$response[DESCRIPTION]='Your Request has been submited Successfully';
								$response['redirect_url'] = $redirect;
								}else{
								$response[CODE]=FAIL_CODE;
								$response[MESSAGE]='Failed';
								$response[DESCRIPTION]='Mail Sending Fail';
								$response['redirect_url'] = '';
								}                  
                             echo json_encode($response);exit;
			/* mail sending  script is over */
			}	
      }
      }
        $this->load->model('Frontend_model');
        $email_data['emaildata'] = $this->Frontend_model->get_email_data($returnresult->inserted_id);     
       $message = $this->load->view('emailtemplate/learning_requirement_email',$email_data,true);
             
                            $to = $email;
                           $res= $this->send_user_email($to,'info@itsmytutor.com','Learning Requirement Post',$message);
                           $user_type=$this->session->userdata('user_type');
                           $payment_status = $this->Front_model->get_payment_status($myid);
                          if(!empty($user_type))
                           {
                           	 if($payment_status==0)
                           	 {
                           	 	$redirect = base_url().'parent/parent-payment';
                           	 }
                           	 else
                           	 {
                           	 	$redirect = base_url().'parent/requirements';
                           	 }
                           	
                           }
                           else
                           {
                           	 $redirect = base_url().'signup';
                           }
								if($res){
								$response[CODE]=SUCCESS_CODE;
								$response[MESSAGE]='Successfully Saved';
								$response[DESCRIPTION]='Your Request has been submited Successfully';
								$response['redirect_url'] = $redirect;
								}else{
								$response[CODE]=FAIL_CODE;
								$response[MESSAGE]='Failed';
								$response[DESCRIPTION]='Mail Sending Fail';
								$response['redirect_url'] = '';
								}                  
                             echo json_encode($response);exit;
    }
    /**dynamic block of user**/
		}else{
			// echo 'elsevivek';die;
		$response[CODE]=201;
		$response[MESSAGE]='Failed';
		$response[DESCRIPTION]="Only $parent_allowed_post Post allowed  in 1 year";
		$response['redirect_url'] = '';
		}echo json_encode($response);exit; 
    }else{
      $error_msgs = implode(', ', $error_message);
      $response[CODE] = VALIDATION_CODE;
      $response[MESSAGE] ='Validation error';
      $response[DESCRIPTION] = $error_msgs;
      $response['redirect_url'] = '';
      echo json_encode($response);exit;

    }
    
  }
  public function get_budget_data()
  {
    $response = array();
    $categoryid = $this->input->post('id');
    $params['wherecondition'] = array('category_fid'=>$categoryid,'budget_status'=>1);
    $params['table'] = 'rl_budget_tbl';
    $resultviewdata = json_decode($this->Common_model->commonget($params));
    //print_r($resultviewdata);die;
    if($resultviewdata->code==SUCCESS_CODE){
    	
    		$response[CODE] = SUCCESS_CODE;
                $response[MESSAGE] = 'Success';               
                $response['resultdata'] = $resultviewdata->result;
           
        
    }else{
        $response[CODE] = FAIL_CODE;
                $response[MESSAGE] = 'Fail';
                $response[DESCRIPTION] = 'No records found';
                  $response['resultdata'] = '<option value="0">No results found</option>';
    }
    echo json_encode($response);
  }
  public function my_sub(){
  	$this->load->view('welcome_access');
  }
  
}
?>