<?php
class Categories_model extends CI_model
{

  public function cat_get_rows($table){
	$this->db->select("category_name");
    	$res=$this->db->get($table);
          $count=$res->num_rows();
          return $count;
}
public function cat_display_recs($table,$nr,$si){
	   	$this->db->limit($nr,$si);
    	$this->db->order_by('category_priority','ASC');
    	$res=$this->db->get($table);
    	$result=$res->result();
    	return $result;
}
public function common_get_rows($table){
	//$this->db->select("category_name");
    	$res=$this->db->get($table);
          $count=$res->num_rows();
          return $count;
}
public function common_display_recs($table,$nr=null,$si=null,$like=null){
	   	
      if(!empty($like))
      {
        $this->db->group_start();
         $this->db->or_like($like);
          $this->db->group_end();
      }
     
      $this->db->order_by('added_on','DESC');
       $this->db->limit($nr,$si);
    	$res=$this->db->get($table);
        // echo $this->db->last_query();exit;
       // $data['count']=$res->num_rows();
    	 $res=$res->result();
    	return $res;
}

 public function cat_delete($table,$where){
 $this->db->where($where);
           $res=$this->db->delete($table);
           return $res;
}
public function cat_update_select($table,$where){
	$this->db->select('category_id,category_name,category_status');
		$this->db->where($where);
		$result=$this->db->get($table);
		$row=$result->row();
		return $row;
}
public function cat_update_records($table,$where,$data){
	$this->db->where($where);
	$res=$this->db->update($table,$data);
	return $res;
}
public function view_fee()
{
  $this->db->select("rfee.*,cat.category_name,type.type_name");
  $this->db->from("rl_tutor_fee_tbl rfee");
  $this->db->join('rl_category_tbl cat','cat.category_id=rfee.category_id','inner');
  $this->db->join('rl_tutor_types_tbl type','type.tutor_type_id=rfee.tutor_type','inner');
  $this->db->order_by('rfee.id','ASC');
   $res=$this->db->get();
   $data['common_result']=$res->result();
   return $data;

}
 // select group_concat(`cs`.`subject_id` separator ',') AS `subjects`,group_concat(`s`.`subject_name` separator ',') AS `subject_names`,`cs`.`category_id` AS `category_id`,`cs`.`category_sub_id` AS `category_sub_id`,`cs`.`added_on` AS `added_on`,`cs`.`status` AS `status`,`c`.`category_name` AS `category_name` from ((`rl_category_subjects_tbl` `cs` join `rl_subjects_tbl` `s` on((`cs`.`subject_id` = `s`.`subject_id`))) join `rl_category_tbl` `c`) where (`c`.`category_id` = `cs`.`category_id`) group by `cs`.`category_id` ;
public function get_class_sub1(){
 $this->db->select('group_concat(cs.subject_id) AS subjects,group_concat(s.subject_name) AS subject_names,cs.category_id AS category_id,cs.category_sub_id AS category_sub_id,cs.added_on AS added_on,cs.status AS status,c.category_name AS category_name');
  $this->db->from('rl_category_subjects_tbl cs');
  $this->db->join('rl_subjects_tbl s','s.subject_id=cs.subject_id');
  $this->db->join('rl_category_tbl c','c.category_id=cs.category_id');
  $this->db->group_by('cs.category_id');
  $res=$this->db->get();
  // echo $this->db->last_query();exit;
}
// select group_concat(`cs`.`subject_id` separator ',') AS `subject_ids`,group_concat(`s`.`subject_name` separator ',') AS `subject_names`,`cs`.`class_id` AS `class_id`,`cs`.`class_sub_id` AS `class_sub_id`,`cs`.`added_on` AS `added_on`,`cs`.`status` AS `status`,`c`.`class_name` AS `class_name` from ((`rl_class_subjects_tbl` `cs` join `rl_subjects_tbl` `s` on((`cs`.`subject_id` = `s`.`subject_id`))) join `rl_class_tbl` `c`) where (`c`.`class_id` = `cs`.`class_id`) group by `cs`.`class_id`
public function get_class_sub($nr=null,$si=null,$search){
 $this->db->select('group_concat(cs.subject_id) AS subject_ids,group_concat(s.subject_name) AS subject_names,cs.class_id AS class_id,cs.class_sub_id AS class_sub_id,cs.added_on AS added_on,cs.status AS status,c.class_name AS class_name');
   $this->db->from('rl_class_subjects_tbl cs');
  $this->db->join('rl_subjects_tbl s','s.subject_id=cs.subject_id');
  $this->db->join('rl_class_tbl c','c.class_id = cs.class_id');
  if(!empty($search))
  {
  $this->db->where($search);
  }
  $where=array('cs.status'=>1);
  $this->db->where($where);
  $this->db->group_by('cs.class_id');
  $this->db->limit($nr,$si);
  $res=$this->db->get();
  $data['count']=$res->num_rows();
  $data['class_sub_recs']=$res->result();
  return $data;
   echo $this->db->last_query();exit;
}
public function common_get($table){
  $data=$this->db->get($table)->result();
   // print_r($data);exit;
  return $data;
}

}
?>

	