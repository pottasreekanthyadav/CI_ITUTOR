<?php
defined('BASEPATH') or die('Please set up the configuration');

Class Parents_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
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
	public function search_by_area($params)
	{
		if(is_array($params)){
			$keyword=$params['keyword'];
			$category_id=$params['category_id'];
			$wherecondition=$params['wherecondition'];
			$wherecondition2=$params['wherecondition2'];
			$response = array('ads'=>array());
			$commonwhere = array('a.activation_status'=> 1,'category_id'=>$category_id);
			$wherevalidity=array('a.validity >='=>date('Y-m-d'));
			$this->db->select('a.id,a.ad_id,a.ad_title,t.ad_type,a.validity,a.description,a.contact_name,a.contact_mobile,a.area,a.offer,a.survey_required,a.pricing,a.posted_by,a.activation_status');
			$this->db->from('trp3_ads_tbl a');
			$this->db->join('trp3_ad_types_tbl t','a.ad_type_id=t.id');
			$this->db->where($commonwhere);
			$this->db->where($wherevalidity);
			$this->db->where($wherecondition);
			$this->db->where($wherecondition2);
			if(is_numeric($keyword)){$this->db->where('a.pincode',$keyword);}
			else{
				$this->db->group_start();
		        $this->db->like('a.area',$keyword);
		        $this->db->or_like('a.city',$keyword);
		        $this->db->group_end();
		    }
	        $this->db->order_by('a.ad_title','ASC');
			$rs=$this->db->get();
			$count=$rs->num_rows();
			if($count>0)
			{
				// return $rs->result();
				$ads_array=array();
				   foreach($rs->result() as $ads_res){
				    $ad_id = $ads_res->id;
				     foreach($ads_res as $ad_key=>$ad_val){
					     $ads_array[$ad_key]=$ad_val;
				     }
				     $ads_array['likes']=array();
					
					$where = array('ad_id'=> $ad_id);
					$this->db->select('*');
					$this->db->from('trp3_ad_likes_tbl');
					$this->db->where($where);
					$res = $this->db->get();
					if($res->num_rows() > 0){

						$likes['likes_count'] = $res->num_rows();
						array_push($ads_array['likes'],$likes);
					}
					array_push($response['ads'], $ads_array);
				}
				return $response;
			}
			else
			{
				return null;
			}
		}else{
			return null;
		}
	}
public function register_user($table,$data){
	$res=$this->db->insert($table,$data);
	if($res)
	{
		return 1;
	}
	else
	{
		return 2;
	}

}
public function register_check($table,$email,$mobile){
	$this->db->group_start();
$this->db->where('email',$email);
$this->db->or_where('mobile',$mobile);
$this->db->group_end();
$this->db->where('user_status',0);
$count=$this->db->get($table)->num_rows();

	return $count;
}
public function common_get($table,$where){
	$res=$this->db->where($where)->get($table)->row();
	 // echo $this->db->last_query();exit;
	return $res;
}
public function common_check($table,$where){
	$count=$this->db->where($where)->get($table)->num_rows();
	// echo $this->db->last_query();exit;
	   return $count;

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
    	// echo $this->db->last_query();
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
    	$q= $this->db->get();
    	// echo $this->db->last_query();die;
    	$count_row = $q->num_rows();
    	// echo $count_row;exit;
    	return $count_row;
    }
    public function get_email_data($id)
        {

            $this->db->select('lprt.*,cam.category_name,syll_mas.syllabus_name,group_concat(distinct(sub_mas.subject_name)) as subject_name,cl.class_name,post_time.tuition_time');
            $this->db->from('learning_post_requirement_tbl as lprt');
            $this->db->join('rl_category_tbl as cam','cam.category_id=lprt.category');
            $this->db->join('rl_syllabus_tbl as syll_mas','syll_mas.syllabus_id=lprt.syllabus');
            $this->db->join('rl_requirement_post_subject_tbl as post_sub','post_sub.requirement_id=lprt.id');
            $this->db->join('rl_subjects_tbl as sub_mas','sub_mas.subject_id=post_sub.subject_name_id');
             $this->db->join('rl_requirement_post_time_tbl as post_time','post_time.requirement_id=lprt.id');
             $this->db->join('rl_class_tbl  cl','cl.class_id=lprt.class');
            
            $this->db->where('lprt.id',$id);
            $query = $this->db->get();
            //echo $this->db->last_query();die;
            //print_r($query->result());
            if(count($query->result())>0){
            return $query->result();
            }else{
            return false;
            }
        }
        public function learningData(){
        $data['syllabus']=$this->db->select('syllabus_id,syllabus_name')->get("rl_syllabus_tbl")->result();
        $data['category']=$this->db->select('category_id,category_name')->get("rl_category_tbl")->result();
         // $data['']=$this->db->select('category_id,category_name')->get("rl_category_tbl")->result();
          return $data;
        }
        public function getClass(){
        	
        }
       public function get_tutor_match_data($email,$mobile,$limit=NULL,$si=NULL)
    {
           $this->db->select('lprt.*,syll_mas.syllabus_name,cam.category_name,cl.class_name,post_time.tuition_time as tuition_time,group_concat(distinct(sub_mas.subject_name)) as subject_name,sub_mas.subject_id');
           $this->db->from('learning_post_requirement_tbl as lprt');
           $this->db->join('rl_category_tbl as cam','cam.category_id=lprt.category');
           $this->db->join('rl_syllabus_tbl as syll_mas','syll_mas.syllabus_id=lprt.syllabus');
          $this->db->join('rl_requirement_post_subject_tbl as post_sub','post_sub.requirement_id=lprt.id');
           $this->db->join('rl_subjects_tbl as sub_mas','sub_mas.subject_id=post_sub.subject_name_id');
             $this->db->join('rl_requirement_post_time_tbl as post_time','post_time.requirement_id=lprt.id');
            $this->db->join('rl_class_tbl  cl','cl.class_id=lprt.class');
           $this->db->where(array('lprt.email'=>$email,'lprt.mobile'=>$mobile));
           $this->db->group_by('lprt.id');
           $this->db->order_by('lprt.id','DESC');
           $this->db->limit($limit,$si);
           $query = $this->db->get();
           //echo $this->db->last_query();die;
           if(count($query->result())>0){
           return $query->result();
           }else{
           return NULL;
           }
    }
   public function get_match_tutor($alldata,$offset=NULL,$limit=NULL,$where1=null,$where2=null,$location=null)
    {   
        $this->db->select("user.name,user.unique_id,tutor.photo,tutor.user_id,tutor.experience,tutor.gender,tutor.dob,tutor.location_name,q.qualification,group_concat(syl.syllabus_name) as syls,group_concat(cat.category_name) as cats,group_concat(rloc.location) as location_my");
        $this->db->from("rl_tutor_tbl tutor");
        $this->db->join('rl_tutor_subjects_tbl rsub','rsub.user_id=tutor.user_id','inner');
        $this->db->join('rl_subjects_tbl sub','sub.subject_id=rsub.subject_id','inner');
        $this->db->join('rl_users_tbl user','user.id=tutor.user_id','inner');
        $this->db->join('rl_qualification_tbl q','q.qid=tutor.qualification','inner');
        $this->db->join('rl_tutor_syllabus_tbl rsyl','rsyl.user_id=tutor.user_id','inner');
        $this->db->join('rl_syllabus_tbl syl','syl.syllabus_id=rsyl.syllabus_id','inner');
        $this->db->join('rl_tutor_category_tbl rcat','rcat.user_id=tutor.user_id','inner');
        $this->db->join('rl_category_tbl cat','cat.category_id=rcat.category_id','inner');
        $this->db->join('rl_tutor_location_tbl rloc','tutor.user_id=rloc.user_id','left');
        $this->db->order_by("tutor.user_id",'ASC');
        $this->db->group_by("tutor.user_id");
        $alldatanew = $alldata->subject_id;
        $newsubdata = explode(',',$alldatanew);
        $this->db->where('rsyl.syllabus_id',$alldata->syllabus);
        $this->db->where('rcat.category_id',$alldata->category);
        $ids = array();
        for($i=0;$i<count($newsubdata);$i++){
             $ids[] = $newsubdata[$i];
            //$this->db->where('rsub.subject_id',);
        }
        //print_r($ids);
        $this->db->where_in('sub.subject_id',$ids);
        if(!empty($location))
        {
          $this->db->where($location);
        }
        if(!empty($where1))
        {
           $this->db->where($where1);
        }
        if(!empty($where2))
        {
             $this->db->where($where2);
        }
        $this->db->limit($offset,$limit);
        $res=$this->db->get();
         // echo $this->db->last_query();exit;
        $result=$res->result();
        foreach ($result as $res) {
            $tutor_id = $res->user_id;
            $result1 = $this->db->select('distinct(sub.subject_name)')->from("rl_subjects_tbl sub")->join('rl_tutor_subjects_tbl rsub','sub.subject_id=rsub.subject_id')->where('user_id',$tutor_id)->get()->result();
            //echo $this->db->last_query();
            $sub_name = array();
            foreach($result1 as $name)
            {
                $sub_name[] = $name->subject_name;
            }
            $res->subjects = $sub_name;
        }
        // print_r($result);exit;
         return $result;
    }
   public function get_match_cat_syll_subject($id)
    {
        $this->db->select('lprt.syllabus,lprt.category,GROUP_CONCAT(distinct(rrpst.subject_name_id)) as subject_id,lprt.latitude,lprt.longitude');
        $this->db->from('learning_post_requirement_tbl lprt');
        $this->db->join('rl_requirement_post_subject_tbl as rrpst','rrpst.requirement_id='.$id);
        $this->db->where('lprt.id',$id);
        $res=$this->db->get();
        $result=$res->result();
        return $result;
    }
    public function get_past_tutor($alldata,$offset=null,$limit=null)
    {   
        $this->db->select("user.name,user.unique_id,tutor.photo,tutor.user_id,tutor.experience,tutor.gender,tutor.dob,tutor.location_name,q.qualification,group_concat(distinct(syl.syllabus_name)) as syls,group_concat(distinct(cat.category_name)) as cats,group_concat(distinct(sub.subject_name)) as subject");
        $this->db->from("rl_tutor_tbl tutor");
        $this->db->join('rl_tutor_subjects_tbl rsub','rsub.user_id=tutor.user_id','inner');
        $this->db->join('rl_subjects_tbl sub','sub.subject_id=rsub.subject_id','inner');
        $this->db->join('rl_users_tbl user','user.id=tutor.user_id','inner');
        $this->db->join('rl_qualification_tbl q','q.qid=tutor.qualification','inner');
        $this->db->join('rl_tutor_syllabus_tbl rsyl','rsyl.user_id=tutor.user_id','inner');
        $this->db->join('rl_syllabus_tbl syl','syl.syllabus_id=rsyl.syllabus_id','inner');
        $this->db->join('rl_tutor_category_tbl rcat','rcat.user_id=tutor.user_id','inner');
        $this->db->join('rl_category_tbl cat','cat.category_id=rcat.category_id','inner');
        $this->db->order_by("tutor.user_id",'ASC');
        $this->db->group_by("tutor.user_id");
        $new_tutorid = explode(',',$alldata);
        $ids = array();
        for($i=0;$i<count($new_tutorid);$i++){
             $ids[] = $new_tutorid[$i];
        }
        $this->db->where_in('tutor.user_id',$ids);
        $res=$this->db->get();
        $result=$res->result();
          return $result;
    }
    public function parent_track_data($table,$where)
    {
        $this->db->select("group_concat(distinct(tutor_id)) as tutorid");
        $this->db->where($where);
        $res=$this->db->get($table);
        // echo $this->db->last_query();exit;
        return $res->result();
}
public function get_notification($table,$where){
            $this->db->select('notification_msg,DATE(added_on) as added_on,user_id');
            $this->db->where($where);
            // $this->db->where('status', 0);
            $this->db->order_by('added_on', 'DESC');
            $res = $this->db->get($table);
            $count=$res->num_rows();
            // echo $this->db->last_query();exit;
            if($count>0)
            {
            return $res->result();
        }   
        else
        {
            return null;
        }
        }
}
?>