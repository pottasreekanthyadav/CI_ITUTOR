<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Tutor_model extends CI_Model {

    public function __construct() {

        parent::__construct();
    }
    public function getTutorDetails() {
        $response = array();
        $sql = $this->db->select('*')->from('rl_tutor_tbl')->get();
        $count = $sql->num_rows();
        // echo $count;exit;
        $response['code'] = ($count > 0) ? 200 : 204;
        $response['message'] = ($count > 0) ? 'Success' : 'Fail';
        $response['description'] = ($count > 0) ? "$count results found" : 'No results found..!';
        $response['tutor_details'] = ($count > 0) ? $sql->result() : array();
        return json_encode($response);
    }
     public function common_list_paging($cols,$table_name,$search_array,$orderby,$limit,$start,$search)
    {
        //print_r($like_col);
        $response=array();
        $sql=$this->db->select($cols)->from($table_name);
        
   


        if ($search == '') {
            $this->db->limit($limit, $start);
        }
        
        if(!empty($location) && is_numeric($location))
        {
            $this->db->where('location_id',$location);
        }
         if(!empty($subject) && is_numeric($subject))
        {
            $this->db->where('subject_id',$subject);
        }
        if(!empty($search))
        {
            $this->db->group_start();
            $this->db->where('first_name',$search);
            $this->db->or_where('last_name',$search);
            $this->db->or_where('tutor_code',$search);
            $this->db->or_where('email',$search);
            $this->db->or_where('mobile',$search);
            $this->db->group_end();
        }
        if(!empty($class) && is_numeric($class))
        {
            $this->db->where('class_id',$class);
            }
        /*>> Search code end*/
        //$sql=$this->db->limit($limit, $start);
        $query=$sql->order_by($orderby,'DESC')->get();
        //print_r($this->db->last_query());
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
   
   public function get_classes()
   {
        $data['cls']=$this->db->get('rl_category_tbl')->result();
        $data['type']=$this->db->get('rl_tutor_types_main_tbl')->result();
       return $data;
      
   }
   public function insert_tutor_subtype($table,$data)
   {
        //$this->db->insert($table,$data);
        $result=$this->db->insert($table,$data);
        if($result)
        {
            return 1;
        }
        else
        {
            return 2;
        }
   }
    public function get_tutor_subtype_db()
   {
        //echo "welcome for manage";exit;
        $this->db->select('st.*,main.tutor_type,c.category_name,c.category_id');
        $this->db->from('rl_tutor_types_tbl st');
        $this->db->join('rl_tutor_types_main_tbl main','main.id=st.type_name');
        $this->db->join('rl_category_tbl c','st.category_id=c.category_id');
    $subtype_data= $this->db->get();
    return $subtype_data->result();
   }
   public function get_update_tutor_subtype_db($wer)
   {
        $this->db->select('st.*,c.category_name');
        $this->db->from('rl_tutor_newtype_tbl st');
        $this->db->where($wer);
        $this->db->join('rl_category_tbl c','st.category_id=c.category_id');
        $subtype_data= $this->db->get();
        //echo $this->db->last_query();exit;
        // echo "<pre>";
        // print_r($subtype_data->result());exit;
        return $subtype_data->row();
   }
   public function update_tutor_subtype_db($table,$data,$wer)
   {
        //print_r($data);exit;
        $this->db->where($wer);
        $rs=$this->db->update($table,$data);
        if($rs)
        {
            return 1;
        }
        else
        {
            return 2;
        }
   }
   public function tutor_status_update_db($table,$set,$wer)
   {
        $this->db->where($wer);
        $result=$this->db->update($table,$set);
        //$this->db->affected_rows();
        if($result)
        {
            return 1;
        }
        else
        {
            return 2;
        }
   }
   public function delete_tutor_subtype_db($table,$wer)
   {
        $this->db->where($wer);
        $result=$this->db->delete('rl_tutor_subtype_tbl');
         if($result)
        {
            return 1;
        }
        else
        {
            return 2;
        }
   }
public function tutor_search($searchstr=null,$search_gen=null,$where=null,$nr=null,$si=null){
$this->db->select("user.unique_id,payment.payment_status,tutor.user_id,tutor.verification_status,tutor.photo,tutor.gender,tutor.first_name,tutor.experience,tutor.dob,tutor.location_name,tutor.email,tutor.mobile,group_concat(distinct(sub.subject_name)) as subjects,user.name,group_concat(distinct(cat.category_name)) as cats,q.qualification,group_concat(distinct(syl.syllabus_name)) as syls,tutor.id,tutor.tutor_status,tutor.resume,radhar.adhaar_proof_name,group_concat(distinct(rloc.location)) as location");
    $this->db->from("rl_tutor_tbl tutor");
    //$this->db->join('rl_location_tbl loc','loc.location_id=tutor.location_id','inner');
    $this->db->join('rl_tutor_subjects_tbl rsub','rsub.user_id=tutor.user_id','inner');
$this->db->join('rl_subjects_tbl sub','sub.subject_id=rsub.subject_id','inner');
$this->db->join('rl_tutor_syllabus_tbl rsyl','rsyl.user_id=tutor.user_id','inner');
$this->db->join('rl_syllabus_tbl syl','syl.syllabus_id=rsyl.syllabus_id','inner');

$this->db->join('rl_qualification_tbl q','q.qid=tutor.qualification','inner');
$this->db->join('rl_tutor_adhaar_tbl radhar','radhar.user_id=tutor.user_id','inner');
$this->db->join('rl_users_tbl user','user.id=tutor.user_id','inner');
$this->db->join('rl_user_payment_info_tbl payment','payment.user_id=tutor.user_id','left'); 
$this->db->join('rl_tutor_category_tbl rcat','rcat.user_id=tutor.user_id','inner');
$this->db->join('rl_category_tbl cat','cat.category_id=rcat.category_id','inner');
$this->db->join('rl_tutor_location_tbl rloc','rloc.user_id=tutor.user_id','inner');
if(!empty($searchstr))
{
    $this->db->or_like($searchstr);
}
if(!empty($search_gen))
{
    $this->db->like('tutor.gender',$search_gen,'after');
}
  if(!empty($where))
   {
$this->db->where($where);
}
$this->db->order_by("tutor.user_id",'ASC');
$this->db->group_by("tutor.user_id");
       $this->db->limit($nr,$si);
        $res=$this->db->get();
        // echo $this->db->last_query();exit;
        $count=$res->num_rows();
        $result=$res->result();
        //print_r($result);exit;
        return array('query1'=>$count,'query2'=>$result);
}
public function tutor_display_recs($nr,$si){
    $this->db->select("payment.payment_status,user.name,tutor.photo,tutor.verification_status,tutor.user_id,tutor.experience,tutor.gender,tutor.dob,tutor.location_name,tutor.mobile,tutor.email,tutor.id,tutor.tutor_status,tutor.resume,group_concat(distinct(sub.subject_name)) as subjects,q.qualification,group_concat(distinct(syl.syllabus_name)) as syls,group_concat(distinct(cat.category_name)) as cats,group_concat(distinct(radhar.adhaar_proof_name)) as adhaar_proof_name,group_concat(distinct(rloc.location)) as location");
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
$this->db->join('rl_tutor_adhaar_tbl radhar','radhar.user_id=tutor.user_id','left');
$this->db->join('rl_user_payment_info_tbl payment','payment.user_id=tutor.user_id','left');
$this->db->join('rl_tutor_location_tbl rloc','rloc.user_id=tutor.user_id','inner');
$this->db->order_by("tutor.user_id",'ASC');
$this->db->group_by("tutor.user_id");
       $this->db->limit($nr,$si);
        $res=$this->db->get();
         //echo $this->db->last_query();exit;
        $result=$res->result();
        return $result;
    }
    public function Parent_track($nr=null,$si=null,$searchstr=null){
        $this->db->select('tutor.email as tutor_email,tutor.mobile as tutor_mobile,pleads.*,users.email as parent_email,users.mobile as parent_mobile');
        $this->db->from('rl_parent_leads_track_tbl pleads');
    $this->db->join('rl_tutor_tbl tutor','tutor.user_id=pleads.tutor_id');
         $this->db->join('rl_users_tbl users','users.id=pleads.user_id');
         if(!empty($searchstr))
         {
            $this->db->or_like($searchstr);
         }
          $this->db->limit($nr,$si);
        $res=$this->db->get();
        // echo $this->db->last_query();exit;
        $data['count']=$res->num_rows();
       $data['result']=$res->result();
        return $data;
}
public function get_tutor_feed($limit=NULL,$si=NULL,$order)
    {
        $this->db->select('f.added_on as feed_created_date,f.status as feedstatus,f.feedback_id,f.feedback,r.email as parent_email,r.mobile as parent_mobile, u.email,u.mobile');
        $this->db->from('rl_tutor_feedback_tbl f');
        $this->db->join('rl_users_tbl u','u.id = f.tutor_user_id');
        $this->db->join('learning_post_requirement_tbl r','r.id = f.requirement_id');
        $this->db->limit($limit,$si);
        $this->db->where('r.requirement_type',0);
        $this->db->order_by($order,'DESC');
        $query = $this->db->get();
        //echo $this->db->last_query();die;
        return $query->result();
    }
    public function get_feedback($limit=NULL,$si=NULL,$order,$where=null,$like=null){
        $this->db->select("cat.category_name,f.added_on as feed_created_date,f.status as feedstatus,f.feedback_id,f.feedback,r.email as parent_email,r.mobile as parent_mobile, u.email,u.mobile,group_concat(distinct(cat.category_name)) as cats");
        $this->db->from('rl_tutor_feedback_tbl f');
        $this->db->join('rl_tutor_category_tbl rcat','rcat.user_id=f.tutor_user_id','inner');
        $this->db->join('rl_category_tbl cat','cat.category_id=rcat.category_id','inner');
        $this->db->join('rl_users_tbl u','u.id = f.tutor_user_id');
        $this->db->join('learning_post_requirement_tbl r','r.id = f.requirement_id');
        // $this->db->where('r.requirement_type',0);
        // $this->db->join('rl_tutor_tbl tutor','tutor.user_id=f.user_id');
        // $this->db->join('rl_tutor_types_tbl type','type.tutor_type_id=tutor.tutor_type','left');
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
        // $this->db->limit($limit,$si);
        $this->db->group_by('f.feedback_id');
          $this->db->order_by($order,'DESC');
          $this->db->limit($limit,$si);
        $res=$this->db->get();
        // echo $this->db->last_query();exit;
        $data=$res->result();
        // $data['count']=$res->num_rows();

        // print_r($data['common_result']);
        return $data;


}
 public function get_mailing_address($limit=NULL,$si=NULL)
    {
        $this->db->select('d.email,d.mobile,d.state,d.city,d.pincode,d.landmark,d.address,d.name,d.nameoncard,u.unique_id');
        $this->db->from('rl_delivery_tbl d');
        $this->db->from('rl_users_tbl u','u.id=d.user_id');
        $this->db->limit($limit,$si);
        $this->db->order_by('d.id','DESC');
        $this->db->group_by('d.id');
        $query = $this->db->get();
        //echo $this->db->last_query();die;
        return $query->result();

    }
    public function generate_csv_report_db2($table)
    {
        date_default_timezone_set('asia/kolkata');
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter=",";
        $newline="\r\n";
        $filename='registered_tutor_List'.date("d-m-Y H:i:s").'.csv';
    $where=array('user_type'=>1,'user_status'=>1);
 $res=$this->db->select('name,email,mobile,registered_on as registered on')->where($where)->get($table);
     
     // print_r($query_resp);exit;
$resp=$this->dbutil->csv_from_result($res,$delimiter,$newline);
        force_download($filename,$resp);
    }
}
?>


