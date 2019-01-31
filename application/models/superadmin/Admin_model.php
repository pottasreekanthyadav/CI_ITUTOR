<?php defined('BASEPATH') or die('Something went wrong!');
class Admin_model extends CI_Model
{
	/*>>Common method for making records active or inactive code starts*/
    public function commonStatusActivity($tablename,$setcolumns,$updatevalue,$wherecondition)
    {
    	$response=array();
        $update_sql=$this->db->update_string($tablename,array($setcolumns=>$updatevalue),$wherecondition);
     	$qry=$this->db->query($update_sql);
     	//echo $this->db->last_query();exit;
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
    /*<<Common method for making records active or inactive code ends*/
    /*>>Common method for deleting a record code starts*/
    public function commonDelete($table,$conditionarray)
    {
        $response=array();
        $sql=$this->db->delete($table,$conditionarray);
        $action=$this->db->affected_rows();
            $response['code']=200;
            $response['message']='Success';
            $response['description']="<b style='color:green;font-weight:bold;'>".$action.' Deleted Succesfully !!!</b>';
         return json_encode($response);
    }
    /*<<Common method for deleting a record code ends*/
    public function common_list_paging($like_col,$orderby,$limit,$start,$search)
    {
        //print_r($like_col);
        // $cols='subscription_id,tutor_id,plan_amount,validity,number_of_tuitions,status,added_on,added_by';
        $table_name='rl_subscriptions_tbl s';
        $response=array();
        $sql=$this->db->select('s.*,c.category_name');
        $this->db->from($table_name);
        $this->db->join('rl_category_tbl c','s.category_id=c.category_id');
        if ($search == '') {
            $this->db->limit($limit, $start);
        }
        if ($search != '') {
            ($search != '') ? $this->db->like($like_col,$search,'after') : '';
        }
        //$sql=$this->db->limit($limit, $start);
        $query=$sql->order_by($orderby,'ASC')->get();
        // echo "<pre>";
        // echo($query->row()->category_name);
        // print_r($this->db->last_query());exit;
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
            $response['description']=($count  > 0 )?'Getting the list':'No results found';
            $response['result_count']=$count;
            $response['common_result']=($count  > 0 )?$query->result():(object) null;
            $response['search_category'] = array('search' => $search);
         }
        return json_encode($response);       
    }
    public function update_subscription($id)
    {
        $sql=$this->db->select('s.*,c.category_name')->from('rl_subscrip_plans_tbl s')->join('rl_category_tbl c','s.tutor_id=c.category_id')->where('s.subscription_id',$id)->get();
        $data=$sql->result();
        return $data;
   
    }
 public function get_statistics(){
    $data['tutor_count']=$this->db->get('rl_tutor_tbl')->num_rows();
    $data['parent_count']=$this->db->where('user_type',2)->get('rl_users_tbl')
             ->num_rows();
    $count1=$this->db->get('rl_parent_support_tbl')->num_rows();
    $count2=$this->db->get('rl_tutor_support_tbl')->num_rows();
$data['support_count']=$count1+$count2;
$data['contact_count']=$this->db->get('rl_tutor_contactus_tbl')->num_rows();
    return $data;
   }
   public function get_guest_post_learning_requirement($limit=NULL, $start=NULL)
   {
      
       $response=array();
       $sql=$this->db->select('lprt.*,cl.*,rpt.*,sy.*,c.*,GROUP_CONCAT(distinct(rl_subjects_tbl.subject_name)) as subject_name');
       $this->db->from('learning_post_requirement_tbl as lprt');
       
       $this->db->join('rl_category_tbl c','c.category_id=lprt.category');
       $this->db->join('rl_class_tbl  cl','cl.class_id=lprt.class');
       $this->db->join('rl_syllabus_tbl  sy','sy.syllabus_id=lprt.syllabus');
       $this->db->join('rl_requirement_post_time_tbl as rpt','rpt.requirement_id=lprt.id');
       $this->db->join('rl_requirement_post_subject_tbl as rps','rps.requirement_id=lprt.id');
       $this->db->join('rl_subjects_tbl','rl_subjects_tbl.subject_id=rps.subject_name_id');
        $this->db->limit($limit, $start);
      $this->db->group_by('lprt.id');
      $this->db->where('lprt.requirement_type','1');      
       $query=$this->db->get();
      // print_r($this->db->last_query());exit;
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
           $response['common_result']=($count  > 0 )?$query->result():(object) null;
           /*$response['search_category'] = array('search' => $search);*/
        }
       return json_encode($response); 
   }
  public function get_post_learning_requirement($limit=NULL, $start=NULL)
   {
      
       $response=array();
       $sql=$this->db->select('lprt.*,cl.*,rpt.*,sy.*,c.*,GROUP_CONCAT(distinct(rl_subjects_tbl.subject_name)) as subject_name,b.budget_type,b.budget_price');
       $this->db->from('learning_post_requirement_tbl as lprt');
       $this->db->join('rl_users_tbl as rut','lprt.email=rut.email and lprt.mobile=rut.mobile');
       $this->db->join('rl_category_tbl c','c.category_id=lprt.category');
       $this->db->join('rl_class_tbl  cl','cl.class_id=lprt.class');
       $this->db->join('rl_syllabus_tbl  sy','sy.syllabus_id=lprt.syllabus');
       $this->db->join('rl_requirement_post_time_tbl as rpt','rpt.requirement_id=lprt.id');
       $this->db->join('rl_requirement_post_subject_tbl as rps','rps.requirement_id=lprt.id');
       $this->db->join('rl_subjects_tbl','rl_subjects_tbl.subject_id=rps.subject_name_id');
       $this->db->join('rl_budget_tbl b','b.budget_id=lprt.budget_fid');
        $this->db->limit($limit, $start);
       // $where = array("rut.email"=>"lprt.email","rut.mobile"=>"lprt.mobile");
       //$this->db->where($where);
      $this->db->group_by('lprt.id');
       /*if ($search == '') {
           $this->db->limit($limit, $start);
       }
       if ($search != '') {
           ($search != '') ? $this->db->like($like_col,$search,'after') : '';
       }*/
       //$sql=$this->db->limit($limit, $start);
       $this->db->order_by('lprt.id','DESC');
       $query=$this->db->get();
       // echo "<pre>";
       // echo($query->row()->category_name);
       // print_r($this->db->last_query());exit;
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
           /*$response['description']=($count  > 0 )?'Getting the list':'No results found';*/
           $response['result_count']=$count;
           $response['common_result']=($count  > 0 )?$query->result():(object) null;
           /*$response['search_category'] = array('search' => $search);*/
        }
       return json_encode($response); 
   }
    public function get_total_recs($table){
       return $count=$this->db->count_all($table);
 }
 public function get_active_syllabus()
 {
        $this->db->select('s.subject_id,s.subject_name');
         $this->db->from('rl_subjects_tbl s');        
         $this->db->where('s.subject_status','1');
         $query = $this->db->get();
         $result = $query->result();
         return $result; 
 }
 public function get_filter_requirement_data($perpage=NULL,$starting_index=NULL,$alldata)
 {
 // print_r($alldata);die;
   $response=array();
       $sql=$this->db->select('lprt.*,cl.*,rpt.*,sy.*,c.*,GROUP_CONCAT(distinct(rl_subjects_tbl.subject_name)) as subject_name,b.budget_type,b.budget_price');
       $this->db->from('learning_post_requirement_tbl as lprt');
       $this->db->join('rl_users_tbl as rut','lprt.email=rut.email and lprt.mobile=rut.mobile');
       $this->db->join('rl_category_tbl c','c.category_id=lprt.category');
       $this->db->join('rl_class_tbl  cl','cl.class_id=lprt.class');
       $this->db->join('rl_syllabus_tbl  sy','sy.syllabus_id=lprt.syllabus');
       $this->db->join('rl_requirement_post_time_tbl as rpt','rpt.requirement_id=lprt.id');
       $this->db->join('rl_requirement_post_subject_tbl as rps','rps.requirement_id=lprt.id');
       $this->db->join('rl_subjects_tbl','rl_subjects_tbl.subject_id=rps.subject_name_id');
       $this->db->join('rl_budget_tbl b','b.budget_id=lprt.budget_fid');
        $this->db->limit($perpage, $starting_index);
       // $where = array("rut.email"=>"lprt.email","rut.mobile"=>"lprt.mobile");
       //$this->db->where($where);
        if(!empty($alldata['searchdata_str']))
            {
               $this->db->group_start();
              $this->db->like('lprt.location',$alldata['searchdata_str']);
              $this->db->or_like('lprt.email',$alldata['searchdata_str']);
              $this->db->or_like('lprt.name',$alldata['searchdata_str']);
              $this->db->or_like('lprt.mobile',$alldata['searchdata_str']);
              $this->db->or_like('lprt.area',$alldata['searchdata_str']);             
              $this->db->group_end();
            }
          if(!empty($alldata['searchdata_class'])){
            $this->db->where('lprt.class',$alldata['searchdata_class']);
          }
          if(!empty($alldata['searchdata_category'])){
            $this->db->where('lprt.category',$alldata['searchdata_category']);
          }
          if(!empty($alldata['searchdata_syll'])){
            $this->db->where('lprt.syllabus',$alldata['searchdata_syll']);
          }
      $this->db->group_by('lprt.id');
       $this->db->order_by('lprt.id','DESC');
       $query=$this->db->get();
       //echo $this->db->last_query();die;
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
           /*$response['description']=($count  > 0 )?'Getting the list':'No results found';*/
           $response['result_count']=$count;
           $response['common_result']=($count  > 0 )?$query->result():(object) null;
           /*$response['search_category'] = array('search' => $search);*/
        }
       return json_encode($response);
 }

public function get_budget_list()
{
  $this->db->select('*');
  $this->db->from('rl_budget_tbl b');
  $this->db->join('rl_category_tbl rct','rct.category_id=b.category_fid');
  //$this->db->where('b.budget_status',1);
  $q=$this->db->get();
  $count = $q->num_rows();
  if($count>0){
    return $q->result();
  }
}
   public function loc_match($latitude,$longitude,$searchkm){
                            $lat = $latitude; //latitude
                              $lon = $longitude; //longitude
                              $distance = $searchkm; //your distance in KM
                              $R = 6371; //constant earth radius. You can add precision here if you wish
                              $maxlat = $lat + rad2deg($distance/$R);
                              $minlat= $lat - rad2deg($distance/$R);
                              $maxlon= $lon + rad2deg(asin($distance/$R) / cos(deg2rad($lat)));
                              $minlon= $lon - rad2deg(asin($distance/$R) / cos(deg2rad($lat)));
                              // $data['where']=array('lprt.latitude >='=>$minlat,'lprt.latitude <='=>$maxlat,'lprt.longitude >='=>$minlon,'lprt.longitude <='=>$maxlon);
                             /* $location= "(lprt.latitude >='$minlat' and lprt.latitude <=$maxlat and lprt.longitude >='$minlon' and lprt.longitude <=$maxlon)";
                              return $location;*/

                              //
                               $location=array('rloc.latitude >='=>$minlat,'rloc.latitude <='=>$maxlat,'rloc.longitude >='=>$minlon,'rloc.longitude <='=>$maxlon);
                              return $location;
 
 }
public function getSingleRequirement($id)
{
  $this->db->select('l.id,l.syllabus,l.category,l.class,l.longitude,l.latitude,GROUP_CONCAT(s.subject_name_id) as subject_id_instring,l.name,b.budget_price,b.budget_type,cls.class_name,cat.category_name,syl.syllabus_name,group_concat(master_sub.subject_name) as subjectname');
  $this->db->from('learning_post_requirement_tbl l');
  $this->db->join('rl_requirement_post_subject_tbl s','s.requirement_id=l.id');
  $this->db->join('rl_budget_tbl b','b.budget_id=l.budget_fid');
  $this->db->join('rl_syllabus_tbl syl','syl.syllabus_id=l.syllabus','inner');
  $this->db->join('rl_category_tbl cat','cat.category_id=l.category','inner');
  $this->db->join('rl_class_tbl cls','cls.class_id=l.class','inner');
  $this->db->join('rl_requirement_post_subject_tbl subsub','subsub.requirement_id=l.id','inner');
  $this->db->join('rl_subjects_tbl master_sub','master_sub.subject_id=subsub.subject_name_id','inner');
  
  $this->db->where('l.id',$id);
  $q=$this->db->get();
  $res = $q->row();
  return $res;
}
public function get_data($alldata)
{
  //print_r($alldata);exit;
  $this->db->select("user.name,user.email,tutor.photo,tutor.user_id,tutor.experience,tutor.gender,tutor.dob,tutor.location_name,q.qualification,group_concat(syl.syllabus_name) as syls,group_concat(cat.category_name) as cats");
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
        $alldatanew = $alldata->subject_id_instring;
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
        $res=$this->db->get();
       //$this->db->last_query();exit;
        /*$result=$res->result();
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
        }*/
        // print_r($result);exit;
        $result=$res->result();
         return $result;
}
  

}
?>