<?php
class Parents_model extends CI_model
{
	public function get_password($table,$wer)
	{
		//print_r($wer);
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
	public function update_password($table,$set,$wer)
	{
		$this->db->where($wer);
		$this->db->update($table,$set);
		//$this->db->last_query();
		$updated_count=$this->db->affected_rows();
		if($updated_count>0)
		{
			return 1;
		}
		else
		{
			return 2;
		}
	}
public function myprofile($table,$where,$data){
		$res=$this->db->where($where)->update($table,$data);
		return $res;
	}

	public function get_tutor_match_data($email,$mobile,$limit=NULL,$si=NULL)
	{
           $this->db->select('lprt.*,syll_mas.syllabus_name,cam.category_name,cl.class_name,post_time.tuition_time as tuition_time,group_concat(distinct(sub_mas.subject_name)) as subject_name,sub_mas.subject_id,b.budget_type,b.budget_price');
           $this->db->from('learning_post_requirement_tbl as lprt');
           $this->db->join('rl_category_tbl as cam','cam.category_id=lprt.category');
           $this->db->join('rl_syllabus_tbl as syll_mas','syll_mas.syllabus_id=lprt.syllabus');
          $this->db->join('rl_requirement_post_subject_tbl as post_sub','post_sub.requirement_id=lprt.id');
           $this->db->join('rl_subjects_tbl as sub_mas','sub_mas.subject_id=post_sub.subject_name_id');
             $this->db->join('rl_requirement_post_time_tbl as post_time','post_time.requirement_id=lprt.id');
            $this->db->join('rl_class_tbl  cl','cl.class_id=lprt.class');
            $this->db->join('rl_budget_tbl b','b.budget_id=lprt.budget_fid');
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
public function get_past_tutor($alldata,$nr=null,$si=null)
	{	
		$this->db->select("user.name,user.unique_id,tutor.photo,tutor.user_id,tutor.experience,tutor.gender,tutor.dob,tutor.location_name,q.qualification,group_concat(syl.syllabus_name) as syls,group_concat(cat.category_name) as cats,group_concat(distinct(sub.subject_name)) as subjects,group_concat(distinct(rloc.location)) as location");
		$this->db->from("rl_tutor_tbl tutor");
		$this->db->join('rl_tutor_subjects_tbl rsub','rsub.user_id=tutor.user_id','inner');
		$this->db->join('rl_subjects_tbl sub','sub.subject_id=rsub.subject_id','inner');
		$this->db->join('rl_users_tbl user','user.id=tutor.user_id','inner');
		$this->db->join('rl_qualification_tbl q','q.qid=tutor.qualification','inner');
		$this->db->join('rl_tutor_syllabus_tbl rsyl','rsyl.user_id=tutor.user_id','inner');
		$this->db->join('rl_syllabus_tbl syl','syl.syllabus_id=rsyl.syllabus_id','inner');
		$this->db->join('rl_tutor_category_tbl rcat','rcat.user_id=tutor.user_id','inner');
		$this->db->join('rl_category_tbl cat','cat.category_id=rcat.category_id','inner');
		$this->db->join('rl_tutor_location_tbl rloc','rloc.user_id=tutor.user_id','inner');
		$this->db->order_by("tutor.user_id",'ASC');
		$this->db->group_by("tutor.user_id");
		$new_tutorid = explode(',',$alldata);
		$ids = array();
		for($i=0;$i<count($new_tutorid);$i++){
			 $ids[] = $new_tutorid[$i];
		}
		$this->db->where_in('tutor.user_id',$ids);
		$this->db->limit($nr,$si);
		$res=$this->db->get()->result();
		  return $res;
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
	public function count_active_records($table,$where)
	{
	$this->db->select('id');
	$this->db->from($table);
	$this->db->where($where);
	$query = $this->db->get();
	$num = $query->num_rows();
	return $num;
	}
	public function get_notification($table,$where){
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
public function markAsReadNotification($table,$where,$data){
	$res=$this->db->where($where)->update($table,$data);
	return $res;
}
public function update_status($table,$data){
	$res=$this->db->update($table,$data);
	return $res;
}
public function get_statistics($table,$user_id){
	// $where=array('added_on'=>)
	$sql_query="select * from $table where  parent_id=$user_id && added_on >= DATE_SUB(CURDATE(), INTERVAL 7 DAY)";
	$res=$this->db->query($sql_query);
	$data['week_view']=$res->num_rows();
	// $sql_query="select * from $table where  parent_id=$user_id && added_on >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)";
	$sql_query="select * from $table where  parent_id=$user_id";
	$res=$this->db->query($sql_query);
	$data['month_view']=$res->num_rows();
	$sql_query="select * from $table where  parent_id=$user_id && added_on >=CURDATE()";
	$res=$this->db->query($sql_query);
	$data['today_view']=$res->num_rows();
	return $data;
}
public function get_statistics_recs($user_id){
	// echo "model";exit;
	$this->db->select("user.name,tutor.photo,tutor.user_id,tutor.experience,tutor.gender,tutor.dob,tutor.location_name,tutor.mobile,tutor.email,tutor.id,tutor.tutor_status,group_concat(distinct(sub.subject_name)) as subjects,q.qualification,group_concat(distinct(syl.syllabus_name)) as syls,group_concat(distinct(cat.category_name)) as cats,group_concat(distinct(rloc.location)) as location");
	$this->db->from("rl_tutor_leads_track_tbl leads");
$this->db->join('rl_tutor_tbl tutor','tutor.user_id=leads.user_id','inner');
$this->db->join('rl_tutor_subjects_tbl rsub','rsub.user_id=tutor.user_id','inner');
$this->db->join('rl_subjects_tbl sub','sub.subject_id=rsub.subject_id','inner');
$this->db->join('rl_users_tbl user','user.id=tutor.user_id','inner');
$this->db->join('rl_qualification_tbl q','q.qid=tutor.qualification','inner');
$this->db->join('rl_tutor_syllabus_tbl rsyl','rsyl.user_id=tutor.user_id','inner');
$this->db->join('rl_syllabus_tbl syl','syl.syllabus_id=rsyl.syllabus_id','inner');
$this->db->join('rl_tutor_category_tbl rcat','rcat.user_id=tutor.user_id','inner');
$this->db->join('rl_category_tbl cat','cat.category_id=rcat.category_id','inner');
$this->db->join('rl_tutor_timing_tbl rtime','rtime.user_id=tutor.user_id','inner');
$this->db->join('rl_tutor_location_tbl rloc','rloc.user_id=tutor.user_id','inner');
$this->db->where("tutor.tutor_status",1);
$this->db->where("leads.parent_id",$user_id);
$this->db->order_by("tutor.user_id",'ASC');
$this->db->group_by("tutor.user_id");
	   // $this->db->limit($nr,$si);
		$res=$this->db->get();

		 // echo $this->db->last_query();exit;
		$result=$res->result();
		//$user_ids = array();
		foreach($result as $row){
			//print_r($row);exit;	
			$user_id = $row->user_id;
			$this->db->select('id')->from('rl_tutor_views_tbl v')->where('v.user_id',$user_id);
			$response = $this->db->get()->result();
			$num_views = count($response);
			$row->views = $num_views;
		}
		// print_r($result);exit;
		return $result;
	}

	public function parent_feedback_get($nr,$si,$where=null,$like=null)
	{
		$this->db->select('feed.*,cat.category_name');
		$this->db->from('rl_parent_feedback_tbl feed');
		$this->db->join('learning_post_requirement_tbl lpr','lpr.id=feed.reqid');
		$this->db->join('rl_category_tbl cat','cat.category_id=lpr.category','inner');
		if(!empty($where))
		{
			$this->db->where($where);
		}
		if(!empty($like))
		{
			$this->db->group_start();
			$this->db->or_like($like);
			$this->db->group_end();

		}
		$this->db->order_by('added_on','DESC');
		$this->db->group_by('feed.feedback_id');
		$this->db->limit($nr,$si);
		$res=$this->db->get();
		// echo $this->db->last_query();exit;
		$data['count']=$res->num_rows();
		$data['res']=$res->result();
		return $data;

		
	}
	public function parent_track_data($table,$where)
	{
		$this->db->select("group_concat(distinct(tutor_id)) as tutorid");
		$this->db->where($where);
		$res=$this->db->get($table);
		// echo $this->db->last_query();exit;
		return $res->result();
}
}
?>