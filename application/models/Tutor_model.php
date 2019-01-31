<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tutor_model extends CI_Model {

    public function getTutorData($table,$wer)
    {
        $this->db->where($wer);
      $tutordata=$this->db->get($table);
      return $tutordata->num_rows();

    }
    public function getData($table,$priority_col=NULL,$prior=NULL)
    {
        $this->db->from($table);
        if(!empty($priority_col) && !empty($prior))
        {
          $this->db->order_by($priority_col,$prior);
        }
        $query=$this->db->get();
        $res= $query->result();
        return $res;
    }
    public function user_data($table,$where)
    {
      $this->db->select('tutor.*,main.id as tutor_type_id,main.tutor_type');
      $this->db->from('rl_tutor_tbl tutor');
      $this->db->join('rl_tutor_types_main_tbl main','main.id=tutor.tutor_type');
        $res=$this->db->where($where)->get();
        $row=$res->row();
        return $row;
    }
    // public function user_data($table,$where)
    // {
    //   $res=$this->db->where($where)->get($table);
    //     $row=$res->row();
    //     return $row;
    // }

    public function updateTutor($table,$data)
    {
            $res=$this->db->insert($table,$data);
            return $res;
            //echo $this->db->last_query();exit;
    }
     public function common_update($table,$where,$data)
    {
            $res=$this->db->where($where)->update($table,$data);
            return $res;
            //echo $this->db->last_query();exit;
    }
      public function tutor_update($table,$where,$data)
    {
            $res=$this->db->where($where)->update($table,$data);
            return $res;
            //echo $this->db->last_query();exit;
    }
    public function insert_cat($table,$data){
    $res=$this->db->insert_batch($table,$data);
    return $res;
}
public function delete_tutor_multiple_data($table,$where){
    // echo "hii";exit;

    $res=$this->db->where($where)->delete($table);
    //echo $this->db->last_query();exit;
    return $res;
}
 /* vivek code in tutor terminAL DATED::8-6-2018*/
          public function common_get($table,$select,$where){
            $res=$this->db->select($select)->where($where)->get($table)->row();
            return $res;
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
                              $location= "(lprt.latitude >=$minlat and lprt.latitude <=$maxlat and lprt.longitude >=$minlon and lprt.longitude <=$maxlon)";
                              return $location;
 
 }
          public function matching_data($id,$perpage=NULL,$si=NULL,$loc=null)
        {
          // print_r($loc);exit;
     $this->db->select('lprt.*,u.id as parentid,cat_mas.category_name,syll_mas.syllabus_name,sub_mas.subject_name,cl.class_name,post_time.tuition_time,count(distinct(rtltt.post_requirement_id)) AS no_of_response,b.budget_type,b.budget_price');
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
             $this->db->join('rl_budget_tbl b','b.budget_id=lprt.budget_fid');
             
             $i=0;
              $this->db->where('lprt.status',1);
              if(!empty($loc))
              {
              $this->db->group_start();
            foreach($loc as $row)
            {
            $lat=$row->latitude; $lon=$row->longitude;$search=10;
            $location=$this->loc_match($lat,$lon,$search);
              if($i == 0)
                {
                  $this->db->where($location);
                }
                else
                {
                  $this->db->or_where($location);
                }

            $i++;
           }
           $this->db->group_end();
         }
           $this->db->group_start();
              $this->db->where('lprt.status',1);
              $this->db->where('tut_sub.user_id',$id);
              $this->db->where('syll.user_id',$id);
              $this->db->where('c.user_id',$id);
               $this->db->group_end();
              $this->db->group_by('lprt.id');
              $this->db->limit($perpage,$si);
              $query = $this->db->get();
            // echo $this->db->last_query();die;
            $count=$query->num_rows();
            $result=$query->result();
            return array('matchingrecords'=>$count,'report'=>$result);
            
        }

        public function matching_data_req($id,$perpage=NULL,$si=NULL,$searchdata_syllabus,$searchdata_class,$searchdata_category,$searchdata_strdata)
        {
          //echo $searchdata_strdata.'vivek';die;
            $this->db->select('lprt.*,u.id as parentid,cat_mas.category_name,syll_mas.syllabus_name,sub_mas.subject_name,cl.class_name,post_time.tuition_time,count(distinct(rtltt.post_requirement_id)) AS no_of_response,b.budget_type,b.budget_price');
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
             $this->db->join('rl_budget_tbl b','b.budget_id=lprt.budget_fid');
             $this->db->join('rl_class_tbl  cl','cl.class_id=lprt.class');
             $this->db->join('rl_users_tbl u','u.email=lprt.email and u.mobile=lprt.mobile');
            $this->db->where('lprt.status',1);
           
            if(!empty($searchdata_strdata))
            {
               $this->db->group_start();
              $this->db->like('lprt.location',$searchdata_strdata);
              $this->db->or_like('lprt.email',$searchdata_strdata);
              $this->db->or_like('lprt.name',$searchdata_strdata);
              $this->db->or_like('lprt.mobile',$searchdata_strdata);
              $this->db->or_like('lprt.area',$searchdata_strdata);
              $this->db->or_like('lprt.pincode',$searchdata_strdata);
              $this->db->group_end();
            }
            
            if(!empty($searchdata_syllabus)){
              $this->db->where('lprt.syllabus',$searchdata_syllabus);
            }
            if(!empty($searchdata_class)){
              $this->db->where('lprt.class',$searchdata_class);
            }
            if(!empty($searchdata_category)){
              $this->db->where('lprt.category',$searchdata_category);
            }
            $this->db->where('tut_sub.user_id',$id);
            $this->db->where('syll.user_id',$id);
            $this->db->where('c.user_id',$id);
            $this->db->group_by('lprt.id');
            $this->db->limit($perpage,$si);
            $query = $this->db->get();
            //echo $this->db->last_query();die;
            $count=$query->num_rows();
            $result=$query->result();
            return $myres = array('matchingrecords'=>$count,'report'=>$result);
            
        }

        /*================Past requirement view by vivek 10-8-18======*/
        public function matching_data_past_req($id,$perpage=NULL,$si=NULL,$searchdata_syllabus=NULL,$searchdata_class=NULL,$searchdata_category=NULL,$searchdata_strdata=NULL)
        {
          //echo $searchdata_strdata.'vivek';die;
            $this->db->select('lprt.*,u.id as parentid,cat_mas.category_name,syll_mas.syllabus_name,sub_mas.subject_name,cl.class_name,post_time.tuition_time,count(distinct(rtltt.post_requirement_id)) AS no_of_response');
            $this->db->from('learning_post_requirement_tbl as lprt');
            $this->db->join('rl_tutor_leads_track_tbl as rtltt','rtltt.post_requirement_id=lprt.id');
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
           
            if(!empty($searchdata_strdata))
            {
               $this->db->group_start();
              $this->db->like('lprt.location',$searchdata_strdata);
              $this->db->or_like('lprt.email',$searchdata_strdata);
              $this->db->or_like('lprt.name',$searchdata_strdata);
              $this->db->or_like('lprt.mobile',$searchdata_strdata);
              $this->db->group_end();
            }
            
            if(!empty($searchdata_syllabus)){
              $this->db->where('lprt.syllabus',$searchdata_syllabus);
            }
            if(!empty($searchdata_class)){
              $this->db->where('lprt.class',$searchdata_class);
            }
            if(!empty($searchdata_category)){
              $this->db->where('lprt.category',$searchdata_category);
            }
            $this->db->where('tut_sub.user_id',$id);
            $this->db->where('syll.user_id',$id);
            $this->db->where('c.user_id',$id);
            $this->db->group_by('lprt.id');
            $this->db->limit($perpage,$si);
            $query = $this->db->get();
            //echo $this->db->last_query();die;
            $count=$query->num_rows();
            $result=$query->result();
            return $myres = array('matchingrecords'=>$count,'report'=>$result);
            
        }
        /*===================Past requirement view================*/
        public function common_record_count2($cols,$table_name,$order_by_col,$where)
    {       
        $sql=$this->db->select($cols);
        if(!empty($where))
        {
            $this->db->where($where);
        }
        $this->db->order_by($order_by_col,'DESC');
        $sql=$this->db->get($table_name);
        $count=$sql->num_rows();
        return $count;
    }

      
        public function get_post_info($id,$pid)
        {

            $this->db->select('*');
            $this->db->from('learning_post_requirement_tbl');
            $this->db->where('id',$id);
            $query = $this->db->get();
            $postresult = json_encode($query->result());
            if(count($postresult)>0)
            {
                $this->insertinto_leads_track($postresult,$pid);
                return  $postresult;
            }else{
                return  false;
            }
          }
      public function insertinto_leads_track($pp,$pid)
        {   
            $newdata = json_decode($pp);
            $datanew = $newdata[0];
            $id = $this->session->userdata('user_id');
            $tutorname=$this->session->userdata('user_name');
            $data = array(
                'user_id' =>$id,
                'post_requirement_id' => $datanew->id,
                'category_id' => $datanew->category,
                'added_on'=> date('Y-m-d h:i:s')
            );          
        $this->db->insert('rl_tutor_leads_track_tbl',$data); 
        $this->db->insert('rl_notification_tbl',array('user_id'=>$pid,'notification_msg'=>'Tutor '.$tutorname.' has viewed your requirement'));        
        } 
        
         public function get_post_info2($id)
          {
            $this->db->select('*');
            $this->db->from('learning_post_requirement_tbl');
            $this->db->where('id',$id);
            $query = $this->db->get();
            $postresult = json_encode($query->result());
            if(count($postresult)>0)
            {               
                return  $postresult;
            }else{
                return  false;
            }
          }
          public function getslotdata($id)
          {
              $this->db->select('maximum_tutor_request');
              $this->db->from('learning_post_requirement_tbl');
              $this->db->where('id',$id);
              $query = $this->db->get();
              $myres = $query->result();
              if(count($myres)>0){
                return $myres;
              }else{
                    return false;
              }
          }
          public function get_tutor_info($table,$id){
            $query=$this->db->select('mobile,email')->where('user_id',$id)
            ->get($table);
            // echo $this->db->last_query();exit;
              $res = json_encode($query->result());
            return $res;
        }
        public function get_tutor_data($table,$id){
            $query=$this->db->select('mobile,email')->where('id',$id)
            ->get($table);
            // echo $this->db->last_query();exit;
              $res = json_encode($query->result());
            return $res;
          }
         public function get_feedback_count($where)
          {
            // echo $uid.''.$reqid;die;
            $this->db->select();
            $this->db->from('rl_tutor_feedback_tbl');
            $this->db->where($where);
            $query = $this->db->get();
            return $query->num_rows();

          }
          public function get_feedback_count2($where)
          {
            $this->db->select();
            $this->db->from('rl_tutor_feedback_tbl');
            $this->db->where($where);
            $query = $this->db->get();
            return $count = $query->num_rows();

          }
          public function get_count_of_requirement_leads($id)
          {
               $this->db->select('leads_id');
              $this->db->from('rl_tutor_leads_track_tbl');
              $this->db->where('post_requirement_id',$id);
              $query = $this->db->get();
              //echo $this->db->last_query();die;
               $count = $query->num_rows();
                          
              if($count>0){
                return $count;
              }else{
                    return 0;
              }
          }
 public function get_max_count_frm_track($table,$where)
{
     $this->db->select('*');
       $this->db->from($table);
       $this->db->where($where);
       $query = $this->db->get();
       //echo $this->db->last_query();die;
       $count=$query->num_rows();
      return $count;
       
}
public function max_allowed_viewd($table,$where)
{
  
      $this->db->select('maximum_tutor_request');
       $this->db->from($table);
       $this->db->where($where);
       $query = $this->db->get();
       //echo $this->db->last_query();die;
              $count=$query->num_rows();
       if($count>0){
        return $query->result();
       }else{ 
        return NULL;
       
       }
} 
public function get_parent_info($table,$id){
           $query=$this->db->select('mobile,email')->where('id',$id)
           ->get($table);
           // echo $this->db->last_query();exit;
             $res = json_encode($query->result());
           return $res;
       }
       public function get_matched_subject($id)
       {
         $this->db->select('s.subject_id,s.subject_name');
         $this->db->from('rl_tutor_subjects_tbl ts');
         $this->db->join('rl_subjects_tbl s','s.subject_id=ts.subject_id');
         $this->db->where('ts.user_id',$id);
         $query = $this->db->get();
         $result = $query->result();
         return $result;
       }
        public function get_matched_syllabus($id)
       {
         $this->db->select('s.syllabus_id,s.syllabus_name');
         $this->db->from('rl_tutor_syllabus_tbl ts');
         $this->db->join('rl_syllabus_tbl s','s.syllabus_id=ts.syllabus_id');
         $this->db->where('ts.user_id',$id);
         $query = $this->db->get();
         $result = $query->result();
         return $result;
       }
       public function get_matched_category($id){
          $this->db->select('c.category_id,c.category_name');
         $this->db->from('rl_tutor_category_tbl tc');
         $this->db->join('rl_category_tbl c','c.category_id=tc.category_id');
         $this->db->where('tc.user_id',$id);
         $query = $this->db->get();
         $result = $query->result();
         return $result;
       }
       public function get_matched_class($id){
        $this->db->select('c.class_id,c.class_name');
         $this->db->from('rl_class_tbl c');
        // $this->db->join('rl_class_tbl c','c.class_id=tc.class_id');
         //$this->db->where('tc.user_id',$id);
         $query = $this->db->get();
         $result = $query->result();
         return  $result;
       }
       public function tutor_loc_get($table,$id){
      $result=$this->db->select('latitude,longitude')->where('user_id',$id)->
      get($table)->result();
      // echo $this->db->last_query();exit;
      return $result;

       }
public function get_tutor_type($cat_id){
  // echo "hii12";exit;
  $this->db->select('main.tutor_type,main.id,');
  $this->db->from('rl_tutor_types_tbl rtype');
  $this->db->join('rl_tutor_types_main_tbl main','main.id=rtype.type_name');
  $this->db->join('rl_category_tbl cat','cat.category_id=rtype.category_id');
  if(!empty($cat_id))
  {
    $arr=explode(',',$cat_id);
    $count=count($arr);
    for($i=0;$i<$count;$i++)
    {
      $this->db->or_where('rtype.category_id',$arr[$i]); 
    }
}
 $this->db->group_by('main.tutor_type');
  $res=$this->db->get()->result();
  // echo $this->db->last_query();exit;
  return $res;
}
public function get_profile_subjects($cat_id){
 $this->db->select('sub.subject_name,sub.subject_id');
  $this->db->from('rl_class_subjects_tbl rsub');
  $this->db->join('rl_subjects_tbl sub','sub.subject_id=rsub.subject_id');
  $this->db->join('rl_class_tbl cls','cls.class_id=rsub.class_id');
  $this->db->join('rl_category_tbl cat','cat.category_id=cls.category_id');
  $this->db->order_by('sub.subject_priority','ASC');
  if(!empty($cat_id))
  {
    $arr=explode(',',$cat_id);
    $count=count($arr);
    for($i=0;$i<$count;$i++)
    {
      $this->db->or_where('cls.category_id',$arr[$i]); 
    }
}
 $this->db->group_by('sub.subject_id');
  $res=$this->db->get()->result();
  // echo $this->db->last_query();exit;
  return $res;
}
       

}
    ?>