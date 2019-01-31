<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * FileName :Setting_model.php
 * PageType : Model
 * PagePath : Setting_model.php
 * Page Purpose : Product related settings
 * Created Date : 11-04-17
 * Created By : Jittu
 * Team : Jittu
 */

Class Settings_model extends CI_Model {

    public function __construct() {

        parent::__construct();
    }
    /* code for Insert prod related units starts here */
    public function batchInsert($table,$insertdata,$displaymessage=NULL)
    {
        $response=array();
        $sql=$this->db->insert_batch($table,$insertdata);
        $affected_rows=$this->db->affected_rows();
        $response['code']=($affected_rows > 0)?200:204;
        $response['message']=($affected_rows > 0)?'Success':'Fail';
        $response['description']=($affected_rows > 0)?"$affected_rows  records added successfully":'Unable to insert';
        return json_encode($response);
    }

    /* code for Insert prod related units ends here */

    
      /* code for Commaon Delate starts here */
     public function common_delete($table,$conditionarray)
   {
        $response=array();
        $sql=$this->db->delete($table,$conditionarray);
        $action=$this->db->affected_rows();
            $response['code']='200';
            $response['message']='Success';
            $response['description']=$action.' Deleted Succesfully !!!';
         return json_encode($response);
    }
  /* code for Commaon Delate ends here */


    /* code for getting prod related units starts here */

    public function getUnitslist() {
        $response = array();
        $where = array(
            'trash' => 0,
            'active_status' => 1
        );
        $sql = $this->db->select('unit_code,id,created_by,created_on,trash,active_status')->from('ga_prod_units_tbl')->where($where)->order_by('id', 'DESC')->get();
        $count = $sql->num_rows();
        $resposne['code'] = ($count > 0) ? 200 : 204;
        $resposne['message'] = ($count > 0) ? 'Success' : 'Fail';
        $resposne['description'] = ($count > 0) ? "$count results found" : 'No results found..!';
        $resposne['units_list'] = ($count > 0) ? $sql->result() : array();
        return json_encode($resposne);
    }

    /* code for getting prod related units ends here */

    
    /* code for getting group data started here */

    public function getGroupsList() {
        $response = array();
        $where = array(
            'trash' => 0,
            'active_status' => 1
        );

        $sql = $this->db->select('id,group_code,group_name,created_by,created_on,trash,active_status')->from('ga_prod_groups_tbl')->where($where)->order_by('id', 'DESC')->get();
        $count = $sql->num_rows();
        $resposne['code'] = ($count > 0) ? 200 : 204;
        $resposne['message'] = ($count > 0) ? 'Success' : 'Fail';
        $resposne['description'] = ($count > 0) ? "$count results found" : 'No results found..!';
        $resposne['groups_list'] = ($count > 0) ? $sql->result() : array();
        return json_encode($resposne);
    }

    /* code for getting group data ends here */

      /* code for getting units data Starts here */
    public function get_unitsdata($table, $uid) {
      
        $this->db->where('id', $uid);
        $query = $this->db->get($table);
        $count = $this->db->affected_rows();
        if ($count > 0) {

            $result = $query->row();
        }
          $result= json_encode($result);
        return $result;
        //print_r($result);
       }

       /* code for getting group data ends here */

       /* code for update units data Starts here */
     public function up_data($table, $up, $uid) {
        $data = $this->db->update_string($table,$up,$uid);
        // echo $data;exit;
        $update=$this->db->query($data);
        $up=$this->db->affected_rows();
        if ($up > 0) {
            return true;
        } 
        else
         {
            return false;
        }
    }
    public function up_plan($table, $up, $uid) {
        $data = $this->db->update_string($table,$up,$uid);
         //echo $data;exit;
        $update=$this->db->query($data);
        $up=$this->db->affected_rows();
        if ($up > 0) {
            return true;
        } 
        else
         {
            return false;
        }
    }
    /* code for Update units data ends here */

    public function commonStatusActivity($tablename,$setcolumns,$updatevalue,$wherecondition)
    {
        $response=array();
        $update_sql=$this->db->update_string($tablename,array($setcolumns=>$updatevalue),$wherecondition);
        $qry=$this->db->query($update_sql);
        $update=$this->db->affected_rows();
        switch($updatevalue){
            case 0:
            $updatestatus="$update De-Activated Successfully ";
            break;
            case 1:
            $updatestatus="$update Activated Successfully";
            break;
        }
        $response['code']=($update > 0)?200:204;
        $response['message']=($update > 0)?'Success':'Fail';
        $response['description']=($update > 0)?"<b>$updatestatus</b>":'<b style="color:red;font-weight:bold;">Unable to update</b>';
        return json_encode($response);
    }

public function commonUpdate($table, $uid) {
      $result="";
        $this->db->where($uid);
        $query = $this->db->get($table);
        $count = $this->db->affected_rows();
        if ($count > 0) {

            $result = $query->row();
        }
          $result= json_encode($result);
        return $result;
        //print_r($result);exit;
       }

        public function getCatSubsList($table,$params) {
            $cat_id =  $params['category_sub_id'];
        $response = array();
        $sql = $this->db->select('cs.*,s.subject_name as subject_name')->from('rl_category_subjects_tbl cs')->
        join('rl_subjects_tbl s','s.subject_id=cs.subject_id','inner')
        ->where('cs.category_id',$cat_id)->get();
        // print_r($sql);exit;
        $count = $sql->num_rows();
        $resposne['code'] = ($count > 0) ? 200 : 204;
        $resposne['message'] = ($count > 0) ? 'Success' : 'Fail';
        $resposne['description'] = ($count > 0) ? "$count results found" : 'No results found..!';
        $resposne['subjects_list'] = ($count > 0) ? $sql->result() : array();
        return json_encode($resposne);
    }

	public function getClassSubsList($table,$params) {
            $cat_id =  $params['class_sub_id'];
        $response = array();
        $sql = $this->db->select('cs.*,s.subject_name as subject_name')->from('rl_class_subjects_tbl cs')->
        join('rl_subjects_tbl s','s.subject_id=cs.subject_id','inner')
        ->where('cs.class_id',$cat_id)->get();
        // print_r($sql);exit;
        $count = $sql->num_rows();
        $resposne['code'] = ($count > 0) ? 200 : 204;
        $resposne['message'] = ($count > 0) ? 'Success' : 'Fail';
        $resposne['description'] = ($count > 0) ? "$count results found" : 'No results found..!';
        $resposne['subjects_list'] = ($count > 0) ? $sql->result() : array();
        return json_encode($resposne);
    }
	
    public function getCatSubsUpdateList($table,$params) {
            $cat_id =  $params['category_sub_id'];
        $response = array();
        $sql = $this->db->select('cs.category_sub_id, cs.category_id, cs.added_on, cs.status, group_concat(s.subject_name) as subject_names, group_concat(s.subject_id) as subject_ids')->from('rl_category_subjects_tbl cs')->
        join('rl_subjects_tbl s','s.subject_id=cs.subject_id','inner')
        ->where('cs.category_id',$cat_id)->group_by('category_id')->get();
        // print_r($sql);exit;
        $count = $sql->num_rows();
        $resposne['code'] = ($count > 0) ? 200 : 204;
        $resposne['message'] = ($count > 0) ? 'Success' : 'Fail';
        $resposne['description'] = ($count > 0) ? "$count results found" : 'No results found..!';
        $resposne['category_data'] = ($count > 0) ? $sql->result() : array();
        return json_encode($resposne);
    }
     public function getClassSubsUpdateList($table,$params) {
            $cat_id =  $params['class_sub_id'];
        $response = array();
        $sql = $this->db->select('cs.class_sub_id, cs.class_id, cs.added_on, cs.status, group_concat(s.subject_name) as subject_names, group_concat(s.subject_id) as subject_ids')->from('rl_class_subjects_tbl cs')->
        join('rl_subjects_tbl s','s.subject_id=cs.subject_id','inner')
        ->where('cs.class_id',$cat_id)->group_by('class_id')->get();
        // print_r($sql);exit;
        $count = $sql->num_rows();
        $resposne['code'] = ($count > 0) ? 200 : 204;
        $resposne['message'] = ($count > 0) ? 'Success' : 'Fail';
        $resposne['description'] = ($count > 0) ? "$count results found" : 'No results found..!';
        $resposne['class_data'] = ($count > 0) ? $sql->result() : array();
        return json_encode($resposne);
    }
     public function get_class_listing($table_name, $like_col, $orderby, $config=NULL, $page=NULL, $search)
    {
        $this->db->select('*');
        $this->db->from($table_name);
        $this->db->join('rl_category_tbl as rct','rct.category_id=rl_class_tbl.category_id');
        $this->db->limit($config,$page);
        if(!empty($search)){
        $this->db->like('rl_class_tbl.class_name',$search);
        }
        $query = $this->db->get();
        // echo $this->db->last_query();die;
        $output = $query->result();
        if(count($output)>0){
            $response[CODE]=SUCCESS_CODE;
            $response[MESSAGE]='Success';
            $response[DESCRIPTION]= 'Stored successfully';
            $response['result']= $output;
        }else{
            $response[CODE]=FAIL_CODE;
            $response[MESSAGE]='Failed';
            $response[DESCRIPTION]= 'Stored successfully';
        }
        return json_encode($response);
    }
	public function get_subject_listing($table_name, $like_col, $orderby, $config=NULL, $page=NULL, $search)
    {
        $this->db->select('*');
        $this->db->from($table_name);
        $this->db->join('rl_class_tbl as rct','rct.class_id=rl_subjects_tbl.class_id');
        $this->db->limit($config,$page);
        if(!empty($search)){
        $this->db->like("'.$like_col.'",$search);
        }
      
        $query = $this->db->get();
        $output = $query->result();
        if(count($output)>0){

            $response[CODE]=SUCCESS_CODE;
            $response[MESSAGE]='Success';
            $response[DESCRIPTION]= 'Stored successfully';
            $response['result']= $output;
        }else{
            $response[CODE]=FAIL_CODE;
            $response[MESSAGE]='Failed';
            $response[DESCRIPTION]= 'Stored successfully';
        }
        return json_encode($response);
    }
	
}

?>