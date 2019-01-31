<?php
defined('BASEPATH') or die('Please set up the configuration');

Class Inst_model extends CI_Model
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
 public function get_data($table,$where)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $res=$this->db->get();
        $count=$res->num_rows();
        return $res = ($count > 0)?$res->row():null;
    }
  public function get_count($table,$where)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $res=$this->db->get();
        $count=$res->num_rows();
        return $count;
    }
 public function commonGet($cols,$table_name,$where,$list_name,$join_tbl=NULL,$join_condition=NULL)
    {
        $response=array();
        $this->db->select($cols)->from($table_name);
        if($join_tbl!='')
        {
        	$this->db->join($join_tbl,$join_condition);
        }
        $query=$this->db->where($where)->get();
        //echo $this->db->last_query();
        $db_error=$this->db->error();
        if($db_error['code']!=0){
            $response['code']='575';
            $resposne['message']='';
            $response['description']=(QUERY_DEBUG==1)?$db_error['message']:'Some thing error occured';
        }
        else
        {
            $count=$query->num_rows();
            $response['code']=($count > 0)?200 :204;
            $response['message']=($count  > 0 )?'Success':'Fail';
            $response['description']=($count  > 0 )?'Getting the '.$list_name.' data':'No results found';
            $response['result_count']=$count;
            $response[($list_name!='')?$list_name:'common_result']=($count  > 0 )?$query->result():(object) null;
        }
        return json_encode($response);
    }
  public function get_students($cols,$table_name,$where,$list_name,$list_type)
    {
        $response=array();
        $this->db->select($cols)->from($table_name);
        if($list_type == 2)
        {
            $this->db->join('inst_student_attendance_tbl sa','sa.student_id=se.student_id');
        }
        $query=$this->db->where($where)->group_by('se.student_id')->get();
        $db_error=$this->db->error();
        if($db_error['code']!=0){
            $response['code']='575';
            $resposne['message']='';
            $response['description']=(QUERY_DEBUG==1)?$db_error['message']:'Some thing error occured';
        }
        else
        {
            $count=$query->num_rows();
            $response['code']=($count > 0)?200 :204;
            $response['message']=($count  > 0 )?'Success':'Fail';
            $response['description']=($count  > 0 )?'Getting the '.$list_name.' data':'No results found';
            $response['result_count']=$count;
            $response[($list_name!='')?$list_name:'common_result']=($count  > 0 )?$query->result():(object) null;
        }
        return json_encode($response);
    }
   public function getDataWhere($cols,$table_name,$where,$list_name)
    {
        $response=array();
        $this->db->select($cols)->from($table_name);
        $query=$this->db->where($where)->get();
        //echo $this->db->last_query();exit;
        $db_error=$this->db->error();
        if($db_error['code']!=0){
            $response['code']='575';
            $resposne['message']='';
            $response['description']=(QUERY_DEBUG==1)?$db_error['message']:'Some thing error occured';
        }
        else
        {
            $count=$query->num_rows();
            $response['code']=($count > 0)?200 :204;
            $response['message']=($count  > 0 )?'Success':'Fail';
            $response['description']=($count  > 0 )?'Getting the '.$list_name.' data':'No results found';
            $response['result_count']=$count;
            $response[($list_name!='')?$list_name:'common_result']=($count  > 0 )?$query->row():(object) null;
        }
        return json_encode($response);
    }
    public function search_attendance($student_id,$from_date,$to_date)
    {
    	$from_date = date('Y-m-d',strtotime($from_date));
    	$to_date = date('Y-m-d',strtotime($to_date));
    	$response=array();
        $this->db->select('*')->from('inst_student_attendance_tbl');
	    $this->db->where('student_id',$student_id);
	    $this->db->where(['attendance_date>='=>$from_date,'attendance_date<='=>$to_date]);
	    $query = $this->db->get();
	    //echo $this->db->last_query();
        $db_error=$this->db->error();
        if($db_error['code']!=0){
            $response['code']='575';
            $resposne['message']='';
            $response['description']=(QUERY_DEBUG==1)?$db_error['message']:'Some thing error occured';
        }
        else
        {
            $count=$query->num_rows();
            $response['code']=($count > 0)?200 :204;
            $response['message']=($count  > 0 )?'Success':'Fail';
            $response['description']=($count  > 0 )?'Getting data':'Attendance not found';
            $response['result_count']=$count;
            $response['result']=($count  > 0 )?$query->result():(object) null;
        }
        return json_encode($response);
    }
}
?>