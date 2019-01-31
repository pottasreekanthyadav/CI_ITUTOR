<?php
class Businessdirectory_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
       
    }
    public function get_search_institute_cat($search,$typeinst,$offset=NULL,$limit=NULL)
{
            $this->db->select('*');
            $this->db->from('rl_institute_tbl i');
            $this->db->join('rl_institute_type_tbl it','it.institute_type_id=i.institute_type');
            $this->db->order_by('institute_id','DESC');
            if(!empty($search)){
                $this->db->like('institute_name',$search);
                 $this->db->or_like('institute_city',$search);
                 $this->db->or_like('institute_location',$search);
                 $this->db->or_like('area',$search);
                 $this->db->or_like('pincode',$search);
                
            }
            if(!empty($typeinst)){
                 $this->db->where('institute_type',$typeinst);
            }
            $this->db->limit($limit,$offset);
            $query = $this->db->get();
            /*$data['query'] = $this->db->get();
            $data['count'] = $query->num_rows();*/
            $count = $query->num_rows();
            if($count>0){
                return $query->result();
            }
}
 public function get_tuition_center($offset=NULL,$limit=NULL)
    {
    
            $this->db->select('*');
            $this->db->from('rl_institute_tbl i');
            $this->db->join('rl_institute_type_tbl it','it.institute_type_id=i.institute_type');
            $this->db->order_by('institute_id','DESC');
            $this->db->limit($limit,$offset);
            $query = $this->db->get();
            $count = $query->num_rows();
            if($count>0){
                return $query->result();
            }

    }
    public function get_institituition_type2($offset=NULL,$limit=NULL)
    {
            $this->db->select('*');
            $this->db->from('rl_institute_tbl i');
            $this->db->join('rl_institute_type_tbl it','it.institute_type_id=i.institute_type');
            $this->db->order_by('institute_id','DESC');
            $this->db->limit($limit,$offset);
            $query = $this->db->get();
            $count = $query->num_rows();
            if($count>0){
                return $query->result();
            }
    }
    public function get_institituition_type($offset=NULL,$limit=NULL)
    {
            $this->db->select('*');
            $this->db->from('rl_institute_type_tbl');
            $this->db->order_by('institute_type_id','DESC');
			$this->db->where('institute_type_status',1);
            $this->db->limit($limit,$offset);
            $query = $this->db->get();
            $count = $query->num_rows();
            if($count>0){
                return $query->result();
            }
    }
    public function get_business_list($id)
    {
        $this->db->select('*');
            $this->db->from('rl_institute_tbl i');
			$this->db->join('rl_institute_selected_category sc','sc.institute_fid=i.institute_id');
			$this->db->join('rl_institute_type_tbl it','it.institute_type_id=sc.category_fid');
            $this->db->order_by('institute_id','DESC');
            $this->db->where('sc.institute_fid',$id);
            //$this->db->limit($limit,$offset);
            $query = $this->db->get();
            $count = $query->num_rows();
            if($count>0){
                return $query->result();
            } 
    }
      public function get_business_details($id,$type_id)
    {
            $this->db->select('*');
            $this->db->from('rl_institute_service_tbl is');
           // $this->db->join('rl_institute_tbl i','i.institute_name=is.institute_name');
          //  $this->db->join('rl_institute_type_tbl it','it.institute_type_id=is.institute_type');
            $this->db->where('is.institute_name',$id);
             $this->db->where('is.institute_type',$type_id);
            //$this->db->order_by('service_id','DESC');
            $query = $this->db->get();
            //echo $this->db->last_query();die;
            $count = $query->num_rows();
            if($count>0){
                return $query->result();
            } 
    }
    public function get_id_title($title)
    {
        $this->db->select('institute_type');
        $this->db->from('rl_institute_tbl');
        $this->db->where('institute_name',$title);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_matched_directory($searchcat,$where,$si=NULL,$perpage=NULL)
    {
            $this->db->select('*');
            $this->db->from('rl_institute_tbl institute');
            $this->db->join('rl_institute_type_tbl it','it.institute_type_id=institute.institute_type');
            $this->db->join('rl_institute_service_tbl rist','rist.institute_type=institute.institute_type');
            if(!empty($where)){
               $this->db->where($where);
            }
            if(!empty($typeinst)){
                 $this->db->where('it.institute_type',$typeinst);
            }
            $this->db->order_by('institute.institute_id','DESC');
            $this->db->limit($perpage,$si);
            $query = $this->db->get();
           // echo $this->db->last_query();die;
            $count = $query->num_rows();
            if($count>0){
                return $report= array('count'=>$count, 'rescon' => $query->result());
            }
    }
}    