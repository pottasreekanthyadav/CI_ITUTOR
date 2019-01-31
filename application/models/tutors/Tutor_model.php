<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tutor_model extends CI_Model {

    public function __construct() {
        parent::__construct();
       $this->user_id=$this->session->userdata('user_id');
    }
    public function getTutorData($table,$wer)
    {
        $this->db->where($wer);
      $tutordata=$this->db->get($table);
      return $tutordata->row();

    }
    public function getData($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $query=$this->db->get();
        return ($query->result());
    }
    public function updateTutor($data,$wer)
    {
                //$this->db->set($data);
                $this->db->where($wer);
           $res=$this->db->update('rl_tutor_tbl',$data);
           return $res;
           //echo $this->db->last_query();exit;
    }
    public function get_tutor_subscribe_tuition($id)
         {
           $this->db->select('');
           $this->db->from('rl_tutor_feedback_tbl');
           $this->db->where(array('tutor_user_id'=>$id,'tutor_deal_status'=>1));
           $res = $this->db->get();
           return $count = $res->num_rows();          
         }
          public function get_tutor_matchingleads($id)
         {
           $this->db->select('lprt.*,u.id as parentid,cat_mas.category_name,syll_mas.syllabus_name,sub_mas.subject_name,cl.class_name,post_time.tuition_time,count(distinct(rtltt.post_requirement_id)) AS no_of_response');
            $this->db->from('learning_post_requirement_tbl as lprt');
      $this->db->join('rl_tutor_leads_track_tbl as rtltt','rtltt.post_requirement_id=lprt.id','left');
            $this->db->join('rl_tutor_category_tbl as c','c.category_id=lprt.category');
            $this->db->join('rl_category_tbl as cam','cam.category_id=lprt.category');
            $this->db->join('rl_tutor_syllabus_tbl as syll','syll.syllabus_id=lprt.syllabus','inner');
            $this->db->join('rl_syllabus_tbl as syll_mas','syll_mas.syllabus_id=syll.syllabus_id');
             $this->db->join('rl_tutor_category_tbl as tut_cat','tut_cat.category_id=lprt.category','inner');
            $this->db->join('rl_category_tbl as cat_mas','cat_mas.category_id=tut_cat.category_id');

            $this->db->join('rl_requirement_post_subject_tbl as post_sub','post_sub.requirement_id=lprt.id');
            $this->db->join('rl_tutor_subjects_tbl as tut_sub','tut_sub.subject_id=post_sub.subject_name_id','inner');
            $this->db->join('rl_subjects_tbl as sub_mas','sub_mas.subject_id=tut_sub.subject_id');
             $this->db->join('rl_requirement_post_time_tbl as post_time','post_time.requirement_id=lprt.id');
             $this->db->join('rl_class_tbl  cl','cl.class_id=lprt.class');
             $this->db->join('rl_users_tbl u','u.email=lprt.email and u.mobile=lprt.mobile');
            $this->db->where('lprt.status',1);
            $this->db->where('tut_sub.user_id',$id);
            $this->db->where('syll.user_id',$id);
            $this->db->where('c.user_id',$id);
            $this->db->group_by('lprt.id');
           // $this->db->limit($perpage,$si);
            $query = $this->db->get();
            return $count=$query->num_rows();
         }  
          public function get_tutor_parentviewed($id)
         {
           $this->db->select('');
           $this->db->from('rl_parent_leads_track_tbl');
           $this->db->where(array('tutor_id'=>$id));
           $res = $this->db->get();
           return $count = $res->num_rows();
           /*if($count>0){
                return $count;
           }else{
                return false;
           }*/
         }
         public function get_tutor_parentviewed_details()
         {
           $this->db->select('user.name,user.email');
           $this->db->from('rl_parent_leads_track_tbl parent');
           $this->db->join('rl_users_tbl user','user.id=parent.user_id','inner');
           $this->db->where('parent.tutor_id',$this->user_id);
           $res = $this->db->get()->result();
           // echo $this->db->last_query();exit;
          return $res;
         }
   public function get_tutor_subscribe_tuition_details()
      {
        $this->db->select('lprt.name,lprt.gender,lprt.email,lprt.location,lprt.mobile,syl.syllabus_name,cat.category_name,lprt.duration,group_concat(distinct(ltime.tuition_time)) as time,group_concat(distinct(sub.subject_name)) as subjects,class.class_name,b.budget_type,b.budget_price');
       $this->db->from('rl_tutor_feedback_tbl feed');
        $this->db->join('learning_post_requirement_tbl lprt','lprt.id=feed.requirement_id');
        $this->db->join('rl_syllabus_tbl syl','syl.syllabus_id=lprt.syllabus');
        $this->db->join('rl_category_tbl cat','cat.category_id=lprt.category');
        $this->db->join('rl_requirement_post_time_tbl ltime','ltime.requirement_id=lprt.id');
         $this->db->join('rl_requirement_post_subject_tbl lsub','lsub.requirement_id=lprt.id');
         $this->db->join('rl_subjects_tbl sub','sub.subject_id=lsub.subject_name_id');
          $this->db->join('rl_class_tbl class','class.class_id=lprt.class');
            $this->db->join('rl_budget_tbl b','b.budget_id=lprt.budget_fid');
           $this->db->where(array('tutor_user_id'=>$this->user_id,'tutor_deal_status'=>1));
           $this->db->group_by('lprt.id');
           $result = $this->db->get()->result();
           // echo $this->db->last_query();exit;
           return $result;          
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
                              // $location=array('lprt.latitude >='=>$minlat,'lprt.latitude <='=>$maxlat,'lprt.longitude >='=>$minlon,'lprt.longitude <='=>$maxlon);
                              $location = "(lprt.latitude >='$minlat' and lprt.latitude <=$maxlat and lprt.longitude >='$minlon' and lprt.longitude <=$maxlon)";
                              return $location;
 
 }
          public function matching_data($id,$loc=null)
        {
          // print_r($loc);exit;
                    $this->db->select('lprt.*,u.id as parentid,cat_mas.category_name,syll_mas.syllabus_name,sub_mas.subject_name,cl.class_name,post_time.tuition_time,count(distinct(rtltt.post_requirement_id)) AS no_of_response');
            $this->db->from('learning_post_requirement_tbl as lprt');
      $this->db->join('rl_tutor_leads_track_tbl as rtltt','rtltt.post_requirement_id=lprt.id','left');
            $this->db->join('rl_tutor_category_tbl as c','c.category_id=lprt.category');
            $this->db->join('rl_category_tbl as cam','cam.category_id=lprt.category');
            //$this->db->join('rl_tutor_subjects_tbl as s','s.subject_id=lprt.subject');
            //$this->db->join('rl_subjects_tbl as sub_mas','sub_mas.subject_id=lprt.subject');
            $this->db->join('rl_tutor_syllabus_tbl as syll','syll.syllabus_id=lprt.syllabus','inner');
            $this->db->join('rl_syllabus_tbl as syll_mas','syll_mas.syllabus_id=syll.syllabus_id');
             $this->db->join('rl_tutor_category_tbl as tut_cat','tut_cat.category_id=lprt.category','inner');
            $this->db->join('rl_category_tbl as cat_mas','cat_mas.category_id=tut_cat.category_id');

            $this->db->join('rl_requirement_post_subject_tbl as post_sub','post_sub.requirement_id=lprt.id');
            $this->db->join('rl_tutor_subjects_tbl as tut_sub','tut_sub.subject_id=post_sub.subject_name_id','inner');
            $this->db->join('rl_subjects_tbl as sub_mas','sub_mas.subject_id=tut_sub.subject_id');
             $this->db->join('rl_requirement_post_time_tbl as post_time','post_time.requirement_id=lprt.id');
             $this->db->join('rl_class_tbl  cl','cl.class_id=lprt.class');
             $this->db->join('rl_users_tbl u','u.email=lprt.email and u.mobile=lprt.mobile');
             $this->db->where('lprt.status',1);
             if(!empty($loc))
             {
             $this->db->group_start();
              $i=1;
            foreach($loc as $row)
            {
             $lat=$row->latitude;
             $lon=$row->longitude;$search=10;
            $location=$this->loc_match($lat,$lon,$search);
             // $this->db->group_start();
            $this->db->or_where($location);
            $i++;
             // $this->db->group_end();
           }
           $this->db->group_end();
         }
           // echo $i;exit;
           
            $this->db->where('tut_sub.user_id',$id);
            $this->db->where('syll.user_id',$id);
            $this->db->where('c.user_id',$id);
           
            $this->db->group_by('lprt.id');
            // $this->db->limit($perpage,$si);
            $query = $this->db->get();
            // echo $this->db->last_query();die;
            $count=$query->num_rows();
            // echo $count;exit;
            return $count;
            
        }
         public function tutor_loc_get($table,$id){
      $result=$this->db->select('latitude,longitude')->where('user_id',$id)->
      get($table)->result();
      return $result;
   }
   public function get_refer_cash($table,$email){
  $res=$this->db->select_sum('credit')->where('tutor_email',$email)->get($table)->result();
  // echo $this->db->last_query();exit;
 return $res;
   }
}    

?>