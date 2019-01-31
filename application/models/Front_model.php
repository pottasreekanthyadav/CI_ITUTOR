<?php
class Front_model extends CI_model
{
	public function add_data($insert_data,$table)
	{
		$response = array();
		$this->db->from($table);
		$rs=$this->db->get();
	$result=$this->db->insert($table,$insert_data);
			return $result;
	}
	public function add_user_data($insert_data,$table,$wer,$email,$mobile)
	{ 
	  $wer5=array('mobile'=>$mobile);
		$response = array();
		$this->db->group_start();
		$this->db->where($wer);
		 $this->db->or_where($wer5);
		 	$this->db->group_end();
		 $this->db->where('user_status',1);
		$this->db->from($table);
		$rs=$this->db->get();
		 // echo $this->db->last_query();exit;
		$count=$rs->num_rows();
		$where=array('email'=>$email);
		$this->db->group_start();
		$this->db->where($where);
		$this->db->or_where('mobile',$mobile);
		$this->db->group_end();
		$this->db->where('user_status',0);
		$already_tried=$this->db->get($table)->num_rows();
		if($count>0)
		{
			return 3;
		}
	   if($count==0 && $already_tried==0)
		{
			$result=$this->db->insert($table,$insert_data);
			//echo $this->db->last_query();exit;$this->db->insert_id()
			if($result)
			{
				return 1;
			}
			else
			{
			return 2;
            }
		}
		if($already_tried==1 && $count==0)
		{
         $res1=$this->db->where('email',$email)->or_where('mobile',$mobile)->delete($table);
         // echo $this->db->last_query();exit;
         if($res1)
         {
         	$result2=$this->db->insert($table,$insert_data);
			//echo $this->db->last_query();exit;$this->db->insert_id()
			if($result2)
			{
				return 1;
			}
			else
			{
				return 2;
            }
		}
	}
}
	public function get_verification_code($table,$data)
	{
		//echo "get otp";
		$this->db->where($data);
		$rs=$this->db->get($table);
		$count=$rs->num_rows();
		if($count>0)
		{
			return 1;
		}
		else
		{
			return 2;
		}
	}
	public function account_activation($verification_code,$email)
	{
		$wer=array('email'=>$email,'verification_code'=>$verification_code);

		$this->db->where($wer);
		$rs=$this->db->get('rl_users_tbl');

		$count=$rs->num_rows();
		if($count==1)
		{	
			//echo "User id is =>" .$rs->row()->id;exit;
			$this->session->set_userdata('user_id',$rs->row()->id);
			$this->db->where($wer);
			$set=array('user_status'=>1,'verification_code'=>null);
			return $this->db->update('rl_users_tbl',$set);
		}
		else
		{
			return null;
		}
	}
	public function get_status($table,$wer)
	{
		$this->db->where($wer);
		$rs=$this->db->get($table);
		$count=$rs->num_rows();
		if($count>0)
		{
			return $rs->row();
		}
		else
		{
			return null;
		}
	}
	public function get_data_row($table,$wer)
	{
		$this->db->where($wer);
		$rs=$this->db->get($table);
		$count=$rs->num_rows();
		if($count>0)
		{
			return $rs->row();
		}
		else
		{
			return null;
		}
	}
	
	public function get_plans()
	{
         // $this->db->where($where);
		// $plans = $this->db->get('rl_subscrip_plans_tbl');
		// return $plans->result();
		$hh=array('hold'=>array());
		$rs = $this->db->where('category_status',1)->group_by('category_id')->get('rl_category_tbl');
		foreach($rs->result() as $row)
			{	
				$tid=$row->category_id;
				$result = $this->db->select('sp.*,c.category_id,c.category_name')->from('rl_subscriptions_tbl sp')
				->join('rl_category_tbl c', 'sp.category_id=c.category_id')
				->where('sp.category_id', $tid)
				->get()->result();
				array_push($hh['hold'],$result);
			}
			//echo "<pre>";print_r($hh);exit;
			return $hh;
	}
	public function get_subscribe_record($wer)
	{
	  $this->db->select("sub.*,cat.category_name");
	  $this->db->where($wer);
	$this->db->from("rl_subscriptions_tbl sub");
$this->db->join('rl_category_tbl cat','sub.category_id=cat.category_id','inner');
		$res=$this->db->get();
		 $row=$res->row();
		 return $row;
	}
	public function get_syllabus_name()
	{
		$response = array();
		$this->db->select('syllabus_name,syllabus_id');
        $this->db->from('rl_syllabus_tbl');	
        $this->db->where('syllabus_status', 1);	
        $query = $this->db->get();
      
        $count = $query->num_rows();

         if ($count > 0) {
                            $response[CODE] = SUCCESS_CODE;
                            $response[MESSAGE] = 'Success';
                            $response[DESCRIPTION] = 'You have data.';
                            $response['result'] = $query->result();
                        } else {
                            $response[CODE] = FAIL_CODE;
                            $response[MESSAGE] = 'Fail';
                            $response[DESCRIPTION] ='No data.';
                        }

       /* $response[CODE] = ($count > 0)?SUCCESS_CODE:FAIL_CODE;
        $response['syllabus_result'] = ($count > 0)?$query->result():'';*/
        return json_encode($response);
	}
	public function get_category_name()
	{
		$response = array();
		$this->db->select('category_name,category_id');
        $this->db->from('rl_category_tbl');
        $this->db->where('category_status', 1);
        $query = $this->db->get();
        $count = $query->num_rows();

         if ($count > 0) {
                            $response[CODE] = SUCCESS_CODE;
                            $response[MESSAGE] = 'Success';
                            $response[DESCRIPTION] = 'You have data.';
                            $response['result'] = $query->result();
                        } else {
                            $response[CODE] = FAIL_CODE;
                            $response[MESSAGE] = 'Fail';
                            $response[DESCRIPTION] ='No data.';
                        }

       /* $response[CODE] = ($count > 0)?SUCCESS_CODE:FAIL_CODE;
        $response['syllabus_result'] = ($count > 0)?$query->result():'';*/
        return json_encode($response);
	}

	public function get_class_name()
	{
				$response = array();
		$this->db->select('class_name,class_id');
        $this->db->from('rl_class_tbl');
	     $this->db->where('class_status', 1);
        $query = $this->db->get();
        
        $count = $query->num_rows();

         if ($count > 0) {
                            $response[CODE] = SUCCESS_CODE;
                            $response[MESSAGE] = 'Success';
                            $response[DESCRIPTION] = 'You have data.';
                            $response['result'] = $query->result();
                        } else {
                            $response[CODE] = FAIL_CODE;
                            $response[MESSAGE] = 'Fail';
                            $response[DESCRIPTION] ='No data.';
                        }

      
        return json_encode($response);
	}
	public function get_subject_name()
	{
		$response = array();
		$this->db->select('subject_name,subject_id');
        $this->db->from('rl_subjects_tbl');
		
        $this->db->where('subject_status', 1);
      
        
      
        $query = $this->db->get();
     
        $count = $query->num_rows();

         if ($count > 0){
                            $response[CODE] = SUCCESS_CODE;
                            $response[MESSAGE] = 'Success';
                            $response[DESCRIPTION] = 'You have data.';
                            $response['result'] = $query->result();
                        }else{
                            $response[CODE] = FAIL_CODE;
                            $response[MESSAGE] = 'Fail';
                            $response[DESCRIPTION] ='No data.';
                        }

     
        return json_encode($response);
	}
	public function get_preferable_timing_name()
	{
		$response = array();
		$this->db->select('timings,timing_id');
        $this->db->from('rl_timings_tbl');
        $this->db->where('timing_status', 1);
        $query = $this->db->get();
        $count = $query->num_rows();
         if ($count > 0){
                            $response[CODE] = SUCCESS_CODE;
                            $response[MESSAGE] = 'Success';
                            $response[DESCRIPTION] = 'You have data.';
                            $response['result'] = $query->result();
                        }else{
                            $response[CODE] = FAIL_CODE;
                            $response[MESSAGE] = 'Fail';
                            $response[DESCRIPTION] ='No data.';
                        }
        return json_encode($response);
	}
	public function matching_data()
{
/*
lprt.id,lprt.status,lprt.name,lprt.email,lprt.mobile,lprt.location,lprt.duration,c.category_name,cl.class_name,s.subject_name,sy.syllabus_name,t.timings
*/
$this->db->select('lprt.id,lprt.status,lprt.name,lprt.email,lprt.mobile,lprt.location,lprt.duration,su.subject_name');
$this->db->from('learning_post_requirement_tbl as lprt');
/*$this->db->join('rl_tutor_category_tbl as c','c.category_id=lprt.category','inner');*/
//$this->db->join('rl_class_tbl as cl','cl.class_id=lprt.class');
$this->db->join('rl_tutor_subjects_tbl as s','s.subject_id=lprt.subject');
$this->db->join('rl_subjects_tbl as su','su.subject_id=lprt.subject');

/*$this->db->join('rl_tutor_syllabus_tbl as sy','sy.syllabus_id=lprt.syllabus','inner');
$this->db->join('rl_syllabus_tbl as sy','sy.syllabus_id=lprt.syllabus');*/

$this->db->where('lprt.status',1);
$this->db->where('s.tutor_id',18);
/*$this->db->where('sy.tutor_id',18);
$this->db->where('c.tutor_id',18);*/
$query = $this->db->get();
//print_r($query->result());
if(count($query->result())>0){
return $query->result();
}else{
return false;
}}
public function get_subject_data($ids)
    {
      $response = array();
      $this->db->select("sub.subject_name,sub.subject_id");
      $this->db->from("rl_class_subjects_tbl rsub");
      $this->db->join("rl_subjects_tbl sub","sub.subject_id=rsub.subject_id");
      $this->db->where("rsub.class_id",$ids);
      $this->db->order_by("sub.subject_priority",'ASC');
      $query = $this->db->get();
      //echo $this->db->last_query();die;
      $count=$query->num_rows();  
      
      if($count>0){
        $response[CODE]=SUCCESS_CODE;
        $response[MESSAGE]='success';
        $response[DESCRIPTION]="Data avaliable";
        $response["result"]=$query->result();
      }else{
        $response[CODE]=FAIL_CODE;
        $response[MESSAGE]='Fail';
        $response[DESCRIPTION]="Errorr in fetching data";
      }
      return json_encode($response);
    }
    public function get_subject_data_multi($ids)
    {
      $response = array();
      $this->db->select("sub.subject_name,sub.subject_id");
      $this->db->from("rl_class_subjects_tbl rsub");
      $this->db->join("rl_subjects_tbl sub","sub.subject_id=rsub.subject_id");
      $this->db->order_by('sub.subject_priority','ASC');
     if(!empty($ids))
  {
    $arr=explode(',',$ids);
    $count=count($arr);
    for($i=0;$i<$count;$i++)
    {
      $this->db->or_where('rsub.class_id',$arr[$i]); 
    }
}
$this->db->group_by('sub.subject_id');
      $query = $this->db->get();
      //echo $this->db->last_query();die;
      $count=$query->num_rows();  
      
      if($count>0){
        $response[CODE]=SUCCESS_CODE;
        $response[MESSAGE]='success';
        $response[DESCRIPTION]="Data avaliable";
        $response["result"]=$query->result();
      }else{
        $response[CODE]=FAIL_CODE;
        $response[MESSAGE]='Fail';
        $response[DESCRIPTION]="Errorr in fetching data";
      }
      return json_encode($response);
    }
    public function restrict_post_count($e,$m,$d)
    {
    	
    	$this->db->select('');
    	$this->db->from('learning_post_requirement_tbl');

    	if(!empty($d)){
    		$dmax=explode('-',$d);
    	//echo $d;die;
    	$futureday2 = $dmax[0]+1;
    	$futureday= $futureday2.'-'.$dmax[1].'-'.$dmax[2];
    	$this->db->where(['created_at>='=>$d,'created_at<'=>$futureday]);
    	// $this->db->where(['created_at>='=>$d,'created_at<'=>$futureday]);
    	$this->db->where(['email'=>$e,]);
    	$this->db->or_where(['mobile'=>$m,]);
    	}else{
    	$this->db->where(['email'=>$e]);
    	$this->db->or_where(['mobile'=>$m]);
    	}
    	//$this->db->where('DATE(created_at) BETWEEN "'.$d.'" AND "'.$dmax.'"', '',false);
    	/*$this->db->where('created_at>=',$d);
    	$this->db->where('created_at<',$futureday);*/
    	//$this->db->where('DATE_ADD("'.$d.'", INTERVAL -1 YEAR)');
    	//$this->db->where('created_at BETWEEN DATE_ADD(date(), INTERVAL 1 YEAR) AND'.$d);
    	$q= $this->db->get();
    	//echo $this->db->last_query();die;
    	$count_row = $q->num_rows();
    	return $count_row;
    }
    public function count_parent_yearly_post()
    {
    	$this->db->select('parent_yearly_post');
    	$this->db->from('rl_payment_subscription_tbl');
    	$query = $this->db->get();
    	return $query->result();
    }
    public function get_date_reg_id_date($e,$m)
    {
    	$this->db->select('id,registered_on');
    	$this->db->from('rl_users_tbl rut');
    	$this->db->where('email',$e);
    	$this->db->or_where('mobile',$m);
    	$query = $this->db->get();
    	//echo $this->db->last_query();
    	$ret = $query->result();
    	return $ret;
    }
    public function get_date_payment_id_date($id)
    {
    	$this->db->select('payment_date');
    	$this->db->from('rl_user_payment_info_tbl rupit');
    	$this->db->where(['rupit.user_id'=>$id,'rupit.payment_status'=>1]);
    	$query = $this->db->get();
    	$ret = $query->result();
    	return $ret;
    }
    public function get_payment_status($id)
    {
      $this->db->select('payment_date');
      $this->db->from('rl_user_payment_info_tbl rupit');
      $this->db->where(['rupit.user_id'=>$id,'rupit.payment_status'=>1]);
      $query = $this->db->get();
      return $query->num_rows();
    }
    public function get_id_savedrequirement($subjectcount)
    {
    	$this->db->select('id');
    	$this->db->from('learning_post_requirement_tbl');
    	$this->db->order_by('id','DESC');
    	$this->db->limit($subjectcount);
    	$ret = $this->db->get();
    //echo	$this->db->last_query();die;
    	return $ret->result();
    }

}



?>