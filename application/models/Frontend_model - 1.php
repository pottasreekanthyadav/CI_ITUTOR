<?php
class Frontend_model extends CI_model
{

  public function tutor_get_rows($table){
	$this->db->select("first_name");
    	$res=$this->db->get($table);
          $count=$res->num_rows();
          return $count;
}
public function common_check($table,$where){
	$count=$this->db->where($where)->get($table)->num_rows();
	   return $count;

}

public function tutor_display_recs($nr,$si){
	$this->db->select("user.name,tutor.photo,tutor.user_id,tutor.experience,tutor.gender,tutor.dob,tutor.location_name,tutor.mobile,tutor.email,tutor.id,tutor.tutor_status,group_concat(sub.subject_name) as subjects,q.qualification,group_concat(syl.syllabus_name) as syls,group_concat(cat.category_name) as cats");
	$this->db->from("rl_tutor_tbl tutor");
$this->db->join('rl_tutor_subjects_tbl rsub','rsub.user_id=tutor.user_id','inner');
$this->db->join('rl_subjects_tbl sub','sub.subject_id=rsub.subject_id','inner');
$this->db->join('rl_users_tbl user','user.id=tutor.user_id','inner');
$this->db->join('rl_qualification_tbl q','q.qid=tutor.qualification','inner');
$this->db->join('rl_tutor_syllabus_tbl rsyl','rsyl.user_id=tutor.user_id','inner');
$this->db->join('rl_syllabus_tbl syl','syl.syllabus_id=rsyl.syllabus_id','inner');
$this->db->join('rl_tutor_category_tbl rcat','rcat.user_id=tutor.user_id','inner');
$this->db->join('rl_category_tbl cat','cat.category_id=rcat.category_id','inner');
$this->db->join('rl_tutor_timing_tbl rtime','rtime.user_id=tutor.user_id','inner');
$this->db->where("tutor.tutor_status",1);
$this->db->order_by("tutor.user_id",'ASC');
$this->db->group_by("tutor.user_id");
	   $this->db->limit($nr,$si);
		$res=$this->db->get();
		 //echo $this->db->last_query();exit;
		$result=$res->result();
		return $result;
	}
public function tutor_search_get($table){
 	$res=$this->db->get($table);
 	$result=$res->result();
 	return $result;
 }
 public function tutor_search($searchstr=null,$search_gen=null,$where=null,$nr=null,$si=null){

		$this->db->select("tutor.user_id,tutor.photo,tutor.gender,tutor.first_name,tutor.experience,tutor.dob,tutor.location_name,group_concat(sub.subject_name) as subjects,user.name,q.qualification");
	$this->db->from("rl_tutor_tbl tutor");
	//$this->db->join('rl_location_tbl loc','loc.location_id=tutor.location_id','inner');
	$this->db->join('rl_tutor_subjects_tbl rsub','rsub.user_id=tutor.user_id','inner');
$this->db->join('rl_subjects_tbl sub','sub.subject_id=rsub.subject_id','inner');

$this->db->join('rl_qualification_tbl q','q.qid=tutor.qualification','inner');

if(!empty($where))
{
if(array_key_exists('rsyl.syllabus_id',$where))
        {
$this->db->join('rl_tutor_syllabus_tbl rsyl','rsyl.user_id=tutor.user_id','inner');
        }
}
$this->db->join('rl_users_tbl user','user.id=tutor.user_id','inner');
//$this->db->join('rl_syllabus_tbl syl','syl.syllabus_id=tutor.syllabus','inner');
 if(!empty($where))
{
if(array_key_exists('rcat.category_id',$where))
        {
$this->db->join('rl_tutor_category_tbl rcat','rcat.user_id=tutor.user_id','inner');
       }
   }
   if(!empty($where))
   {
$this->db->where($where);
}
// if(!empty($searchstr))
// {
// $this->db->like($searchstr);
// }
if(!empty($searchstr))
{
	$this->db->like('tutor.location_name',$searchstr);
}
if(!empty($search_gen))
{
	$this->db->like('tutor.gender',$search_gen,'after');
}
$this->db->order_by("tutor.user_id",'ASC');
$this->db->group_by("tutor.user_id");
	   $this->db->limit($nr,$si);
		$res=$this->db->get();
		//echo $this->db->last_query();exit;
		$count=$res->num_rows();
		$result=$res->result();
		//print_r($result);exit;
		return array('query1'=>$count,'query2'=>$result);
}
public function common_update($table,$where,$data){
	$res=$this->db->where($where)->update($table,$data);
	return $res;
}
public function common_insert($table,$data){
	$res=$this->db->insert($table,$data);
	return $res;
}
public function get_tutor_multiple_cats($where){
	$this->db->select("tutor.user_id,group_concat(cat.category_name) as cats");
	$this->db->from("rl_tutor_tbl tutor");
// $this->db->join('rl_tutor_subjects_tbl rsub','rsub.user_id=tutor.user_id','inner');
// $this->db->join('rl_subjects_tbl sub','sub.subject_id=rsub.subject_id','inner');
$this->db->join('rl_tutor_category_tbl rcat','rcat.user_id=tutor.user_id','inner');
$this->db->join('rl_category_tbl cat','cat.category_id=rcat.category_id','inner');
$this->db->group_by("tutor.user_id");
$this->db->where($where);
        $res=$this->db->get();
		 //echo $this->db->last_query();exit;
		$result=$res->result();
		return $result;
}
public function get_tutor_multiple_sub($where){
	$this->db->select("tutor.user_id,group_concat(sub.subject_name) as subjects");
	$this->db->from("rl_tutor_tbl tutor");
$this->db->join('rl_tutor_subjects_tbl rsub','rsub.user_id=tutor.user_id','inner');
$this->db->join('rl_subjects_tbl sub','sub.subject_id=rsub.subject_id','inner');
// $this->db->join('rl_tutor_category_tbl rcat','rcat.user_id=tutor.user_id','inner');
// $this->db->join('rl_category_tbl cat','cat.category_id=rcat.category_id','inner');
$this->db->group_by("tutor.user_id");
$this->db->where($where);
        $res=$this->db->get();
        //echo $this->db->last_query();exit;
		$result=$res->result();
		return $result;
}
public function get_tutor_multiple_lang($where){
	$this->db->select("tutor.user_id,group_concat(lang.language) as langs");
	$this->db->from("rl_tutor_tbl tutor");
$this->db->join('rl_tutor_language_tbl rlang','rlang.user_id=tutor.user_id','inner');
$this->db->join('rl_language_tbl lang','lang.lid=rlang.language_id','inner');
// $this->db->join('rl_tutor_category_tbl rcat','rcat.user_id=tutor.user_id','inner');
// $this->db->join('rl_category_tbl cat','cat.category_id=rcat.category_id','inner');
$this->db->group_by("tutor.user_id");
$this->db->where($where);
        $res=$this->db->get();
        //echo $this->db->last_query();exit;
		$result=$res->result();
		return $result;
}
public function get_tutor_multiple_syl($where){
	$this->db->select("tutor.user_id,group_concat(syl.syllabus_name) as syllabus");
	$this->db->from("rl_tutor_tbl tutor");
$this->db->join('rl_tutor_syllabus_tbl rsyl','rsyl.user_id=tutor.user_id','inner');
$this->db->join('rl_syllabus_tbl syl','syl.syllabus_id=rsyl.syllabus_id','inner');
// $this->db->join('rl_tutor_category_tbl rcat','rcat.user_id=tutor.user_id','inner');
// $this->db->join('rl_category_tbl cat','cat.category_id=rcat.category_id','inner');
$this->db->group_by("tutor.user_id");
$this->db->where($where);
        $res=$this->db->get();
        //echo $this->db->last_query();exit;
		$result=$res->result();
		return $result;
}
public function common_get($table,$where){
	$res=$this->db->where($where)->get($table)->row();
	return $res;
}
public function common_delete($table,$where){
	$res=$this->db->where($where)->delete($table);
	return $res;
}
public function display_single_recs($where){
$this->db->select("user.name,tutor.photo,tutor.user_id,tutor.experience,tutor.gender,tutor.dob,tutor.location_name,tutor.mobile,tutor.email,tutor.id,tutor.tutor_status,tutor.about_tutor,group_concat(distinct(sub.subject_name)) as subjects,q.qualification,group_concat(distinct(syl.syllabus_name)) as syls,group_concat(distinct(cat.category_name)) as cats,group_concat(distinct(lang.language)) as langs,group_concat(distinct(rtime.timing)) as times");
	$this->db->from("rl_tutor_tbl tutor");
$this->db->join('rl_tutor_subjects_tbl rsub','rsub.user_id=tutor.user_id','inner');
$this->db->join('rl_subjects_tbl sub','sub.subject_id=rsub.subject_id','inner');
$this->db->join('rl_users_tbl user','user.id=tutor.user_id','inner');
$this->db->join('rl_qualification_tbl q','q.qid=tutor.qualification','inner');
$this->db->join('rl_tutor_syllabus_tbl rsyl','rsyl.user_id=tutor.user_id','inner');
$this->db->join('rl_syllabus_tbl syl','syl.syllabus_id=rsyl.syllabus_id','inner');
$this->db->join('rl_tutor_category_tbl rcat','rcat.user_id=tutor.user_id','inner');
$this->db->join('rl_category_tbl cat','cat.category_id=rcat.category_id','inner');
$this->db->join('rl_tutor_timing_tbl rtime','rtime.user_id=tutor.user_id','inner');
$this->db->join('rl_tutor_language_tbl rlang','rlang.user_id=tutor.user_id','inner');
$this->db->join('rl_language_tbl lang','lang.lid=rlang.language_id','inner');
$this->db->where($where);
// $this->db->order_by("tutor.user_id",'ASC');
 $this->db->group_by("tutor.user_id");
	   //$this->db->limit($nr,$si);
		$res=$this->db->get();
		 //echo $this->db->last_query();exit;
		$result=$res->result();
		return $result;
	}
	public function common_get_all($table){
		$res=$this->db->where('reply_status',1)->get($table)->result();
		return $res;
	}
	public function get_subject_data($ids)
		{
			$response = array();
			$this->db->select("sub.subject_name,sub.subject_id");
			$this->db->from("rl_class_subjects_tbl rsub.class_id");
			$this->db->join("rl_subjects_tbl sub","sub.subject_id=rsub.subject_id");
			$this->db->where("rsub.class_id",$ids);
			$query = $this->db->get();
			$return=$query->result();
			if(count($return)>0){
				$response[CODE]=SUCCESS_CODE;
				$response[MESSAGE]='success';
				$response[DESCRIPTION]="Data avaliable";
				$response["subject_result"]=$return;
			}else{
				$response[CODE]=FAIL_CODE;
				$response[MESSAGE]='Fail';
				$response[DESCRIPTION]="Errorr in fetching data";
			}return json_encode($response);
		}
/* vivek code start her4e for maildata fetch*/

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
}
?>

	