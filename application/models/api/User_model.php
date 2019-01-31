<?php
defined('BASEPATH') or die('Please set up the configuration');

Class User_model extends CI_Model
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
public function tutor_form_data(){
	    $data['syllabus']=$this->db->select('syllabus_id,syllabus_name')->get("rl_syllabus_tbl")->result();
        $data['category']=$this->db->select('category_id,category_name')->get("rl_category_tbl")->result();
        $data['language']=$this->db->select('lid,language')->get("rl_language_tbl")->result();
        $data['subject']=$this->db->select('subject_id,subject_name')->get("rl_subjects_tbl")->result();
        $data['qualification']=$this->db->select('qid,qualification')->get("rl_qualification_tbl")->result();
        $data['tutor_type']=$this->db->select('tutor_type_id,type_name')->get("rl_tutor_types_tbl")->result();
        return $data;

}
public function get_tutor_type($cat){
  // echo "hii12";exit;
  $this->db->select('main.tutor_type,main.id');
  $this->db->from('rl_tutor_types_tbl rtype');
  $this->db->join('rl_tutor_types_main_tbl main','main.id=rtype.type_name');
  $this->db->join('rl_category_tbl cat','cat.category_id=rtype.category_id');
  if(!empty($cat))
  {
    $count=count($cat);
    for($i=0;$i<$count;$i++)
    {
      $this->db->or_where('rtype.category_id',$cat[$i]); 
    }
}
 $this->db->group_by('main.tutor_type');
  $res=$this->db->get()->result();
  // echo $this->db->last_query();exit;
  return $res;
}
public function get_profile_subjects($cat){
 $this->db->select('sub.subject_name,sub.subject_id');
  $this->db->from('rl_class_subjects_tbl rsub');
  $this->db->join('rl_subjects_tbl sub','sub.subject_id=rsub.subject_id');
  $this->db->join('rl_class_tbl cls','cls.class_id=rsub.class_id');
  $this->db->join('rl_category_tbl cat','cat.category_id=cls.category_id');
  if(!empty($cat))
  {
    $count=count($cat);
    for($i=0;$i<$count;$i++)
    {
      $this->db->or_where('cls.category_id',$cat[$i]); 
    }
}
 $this->db->group_by('sub.subject_id');
  $res=$this->db->get()->result();
  // echo $this->db->last_query();exit;
  return $res;
}
}
?>