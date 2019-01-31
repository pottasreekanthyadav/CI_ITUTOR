<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Tuitioncenter_model extends CI_Model{
	
	   public function __construct()
    {
        parent::__construct();
    }
   
    public function get_tuition_center($offset=NULL,$limit=NULL)
    {
    $this->db->select('i.*,it.*,group_concat(it.institute_type_name) as newcate');
    $this->db->from('rl_institute_tbl i');
    //$this->db->join('rl_institute_type_tbl it','it.institute_type_id=i.institute_type');
    $this->db->join('rl_institute_selected_category sc','sc.institute_fid=i.institute_id');
    $this->db->join('rl_institute_type_tbl it','it.institute_type_id=sc.category_fid');
    $this->db->order_by('institute_id','DESC');
    $this->db->group_by('i.institute_id');
    $this->db->limit($limit,$offset);
            $query = $this->db->get();
            //echo $this->db->last_query();die;
            $count = $query->num_rows();
            if($count>0){
                return $query->result();
            }

    }
    
    public function get_editable_institute_type($id)
    {
            $this->db->select('*');
            $this->db->from('rl_institute_type_tbl i');
            $this->db->where('institute_type_id',$id);
            $query = $this->db->get();
            return $query->result();   
    }
    /*public function get_editable_data($id)
    {
            $this->db->select('*');
            $this->db->from('rl_institute_tbl i');
            $this->db->where('institute_id',$id);
            $query = $this->db->get();
            return $query->result();
    }*/
    public function get_editable_data($id)
    {
        $this->db->select('i.institute_id,i.institute_latitude,i.institute_longitude,i.institute_name,i.institute_email,i.institute_mobile,i.institute_logo,institute_city,i.institute_location,i.area,i.pincode,i.google_map,i.fb_link,i.gplus_link,i.twiter_link,i.institute_timing,i.institute_about,group_concat(it.institute_type_id) as newcate');      
            $this->db->from('rl_institute_tbl i');
            $this->db->join('rl_institute_selected_category is','is.institute_fid=i.institute_id');
            $this->db->join('rl_institute_type_tbl it','it.institute_type_id=is.category_fid');
            $this->db->where('institute_id',$id);
            $query = $this->db->get();
           // echo $this->db->last_query();die;       
            return $query->result();
    }
      public function get_editable_service($id)
    {
            $this->db->select('*');
            $this->db->from('rl_institute_service_tbl i');
            $this->db->where('i.service_id',$id);
            $query = $this->db->get();
            //echo $this->db->last_query();die;
            return $query->result();
    }
    public function get_institute_type($table,$nr,$si){
        $this->db->limit($nr,$si);
        $this->db->order_by('institute_type_id','DESC');
        $res=$this->db->get($table);
        $result=$res->result();
        return $result;
}
public function get_count_institute($table)
{
    $this->db->select("institute_type_name");
        $res=$this->db->get($table);
          $count=$res->num_rows();
          return $count;
}
public function get_search_data($search,$typeinst,$offset=NULL,$limit=NULL)
{
           /* $this->db->select('*');
            $this->db->from('rl_institute_tbl i');
            $this->db->join('rl_institute_type_tbl it','it.institute_type_id=i.institute_type');
            $this->db->order_by('institute_id','DESC');*/
             $this->db->select('i.*,it.*,group_concat(it.institute_type_name) as newcate');
    $this->db->from('rl_institute_tbl i');
    //$this->db->join('rl_institute_type_tbl it','it.institute_type_id=i.institute_type');
    $this->db->join('rl_institute_selected_category sc','sc.institute_fid=i.institute_id');
    $this->db->join('rl_institute_type_tbl it','it.institute_type_id=sc.category_fid');
    $this->db->order_by('institute_id','DESC');
    $this->db->group_by('i.institute_id');
            if(!empty($search)){
                $this->db->like('i.institute_name',$search);
                $this->db->like('i.institute_email',$search);
                $this->db->like('i.institute_mobile',$search);
                 $this->db->or_like('i.institute_city',$search);
                 $this->db->or_like('i.institute_location',$search);
                 $this->db->or_like('i.area',$search);
                 $this->db->or_like('i.pincode',$search);
            }
            if(!empty($typeinst)){
                 $this->db->where('sc.institute_type',$typeinst);
            }
            $this->db->limit($limit,$offset);
            $query = $this->db->get();
            //echo $this->db->last_query();exit;
            /*$data['query'] = $this->db->get();
            $data['count'] = $query->num_rows();*/
            $count = $query->num_rows();
            if($count>0){
                return $query->result();
            }
}
public function get_institute_services($offset=NULL,$limit=NULL)
{
     $this->db->select('*');
            $this->db->from('rl_institute_service_tbl is');
            $this->db->join('rl_institute_type_tbl it','it.institute_type_id=is.institute_type');
            $this->db->join('rl_institute_tbl i','i.institute_id=is.institute_name');
            $this->db->order_by('institute_id','DESC');
            if(!empty($search)){
                $this->db->like('institute_name',$search);
                 $this->db->or_like('institute_city',$search);
                 $this->db->or_like('institute_location',$search);
                 $this->db->or_like('area',$search);
                 $this->db->or_like('pincode',$search);
                 $this->db->or_like('area',$search);
            }
            if(!empty($typeinst)){
                 $this->db->where('institute_type',$typeinst);
            }
            $this->db->limit($limit,$offset);
            $this->db->order_by('is.service_id','DESC');
            $query = $this->db->get();
            /*$data['query'] = $this->db->get();
            $data['count'] = $query->num_rows();*/
            $count = $query->num_rows();
            if($count>0){
                return $query->result();
            }
}
public function get_search_service($search,$institutetype,$institute_name,$offset=NULL,$limit=NULL)
{
     $this->db->select('*');
            $this->db->from('rl_institute_service_tbl is');
            $this->db->join('rl_institute_type_tbl it','it.institute_type_id=is.institute_type');
            $this->db->join('rl_institute_tbl i','i.institute_id=is.institute_name');
            $this->db->order_by('institute_id','DESC');
            if(!empty($search)){
                $this->db->like('is.course_title',$search);
                 $this->db->or_like('i.institute_city',$search);
                 $this->db->or_like('i.institute_location',$search);
                 $this->db->or_like('i.area',$search);
                 $this->db->or_like('i.pincode',$search);
            }
            if(!empty($institutetype)){
                 $this->db->where('is.institute_type',$institutetype);
            }
            if(!empty($institute_name)){
                 $this->db->where('is.institute_name',$institute_name);
            }
            $this->db->limit($limit,$offset);
            $query = $this->db->get();
            $count = $query->num_rows();
            if($count>0){
                return $query->result();
            }
}
public function get_institute_records($id)
{
    $response=array();
   $this->db->select('i.institute_name,i.institute_id');
   $this->db->from('rl_institute_selected_category s');
   $this->db->join('rl_institute_tbl i','i.institute_id=s.institute_fid');
   $this->db->join('rl_institute_type_tbl t','t.institute_type_id=s.category_fid');
   $this->db->where('s.category_fid',$id);
   $q=$this->db->get();
   $count=$q->num_rows();
   if($count>0){
    $response[CODE]=SUCCESS_CODE;
    $response[MESSAGE]='success';
    $response[DESCRIPTION]='Records found Successfully.';
    $response['result']=$q->result();
   }else{
    $response[CODE]=FAIL_CODE;
    $response[MESSAGE]='fail';
    $response[DESCRIPTION]='Records not found';
   }
   return json_encode($response);
}
}

