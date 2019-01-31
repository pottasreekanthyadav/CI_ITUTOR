<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_syllabus_master_data'))
{
    function get_syllabus_master_data()
    {
    	 $CI =& get_instance();
    	$CI->load->database();
       $response = array();
		$CI->db->select('syllabus_name,syllabus_id');
        $CI->db->from('rl_syllabus_tbl');	
        $CI->db->where('syllabus_status', 1);	
        $query = $CI->db->get();
      
        $count = $query->num_rows();

         if ($count > 0) {
                            $response[CODE] = SUCCESS_CODE;
                            $response[MESSAGE] = 'Success';
                            $response[DESCRIPTION] = 'You have data.';
                            $response['result'] = $query->result();
                        } else {
                            $response[CODE] = FAIL_CODE;
                            $response[MESSAGE] = 'Fail';
                            $response[DESCRIPTION] ='No data.';
                        }

       /* $response[CODE] = ($count > 0)?SUCCESS_CODE:FAIL_CODE;
        $response['syllabus_result'] = ($count > 0)?$query->result():'';*/
        //print_r($response);die;
        return json_encode($response);
    }   
}
if(! function_exists('get_cat_master_data')){
	 function get_cat_master_data()
	{
		$CI =& get_instance();
    	$CI->load->database();
		$response = array();
		$CI->db->select('category_name,category_id');
        $CI->db->from('rl_category_tbl');
        $CI->db->where('category_status', 1);
        $CI->db->order_by('category_priority','ASC');
        $query = $CI->db->get();
        $count = $query->num_rows();

         if ($count > 0) {
                            $response[CODE] = SUCCESS_CODE;
                            $response[MESSAGE] = 'Success';
                            $response[DESCRIPTION] = 'You have data.';
                            $response['result'] = $query->result();
                        } else {
                            $response[CODE] = FAIL_CODE;
                            $response[MESSAGE] = 'Fail';
                            $response[DESCRIPTION] ='No data.';
                        }

       /* $response[CODE] = ($count > 0)?SUCCESS_CODE:FAIL_CODE;
        $response['syllabus_result'] = ($count > 0)?$query->result():'';*/
        return json_encode($response);
	}
}
if(!function_exists('get_master_timeing_data')){
	 function get_master_timeing_data()
	{
		 $CI =& get_instance();
		$response = array();
		$CI->db->select('timings,timing_id');
        $CI->db->from('rl_timings_tbl');
        $CI->db->where('timing_status', 1);
        $query = $CI->db->get();
        $count = $query->num_rows();
         if ($count > 0){
                            $response[CODE] = SUCCESS_CODE;
                            $response[MESSAGE] = 'Success';
                            $response[DESCRIPTION] = 'You have data.';
                            $response['result'] = $query->result();
                        }else{
                            $response[CODE] = FAIL_CODE;
                            $response[MESSAGE] = 'Fail';
                            $response[DESCRIPTION] ='No data.';
                        }
        return json_encode($response);
	}
    
}
if(!function_exists('get_master_class_data')){
     function get_master_class_data()
    {
         $CI =& get_instance();
        $response = array();
        $CI->db->select('class_name,class_id');
        $CI->db->from('rl_class_tbl');
        $CI->db->where('class_status', 1);
        $CI->db->order_by('class_priority', 'ASC');
        $query = $CI->db->get();
        $count = $query->num_rows();
         if ($count > 0){
                            $response[CODE] = SUCCESS_CODE;
                            $response[MESSAGE] = 'Success';
                            $response[DESCRIPTION] = 'You have data.';
                            $response['result'] = $query->result();
                        }else{
                            $response[CODE] = FAIL_CODE;
                            $response[MESSAGE] = 'Fail';
                            $response[DESCRIPTION] ='No data.';
                        }
        return json_encode($response);
    }
    
}

if(!function_exists('get_related_books')){
    function get_related_books($table,$where,$cols)
   {
        $CI =& get_instance();
       $response = array();
       $CI->db->select($cols);
       $CI->db->from($table);
       $CI->db->where($where);
       $query = $CI->db->get();
       $count = $query->num_rows();
        if ($count > 0){
                           $response[CODE] = SUCCESS_CODE;
                           $response[MESSAGE] = 'Success';
                           $response[DESCRIPTION] = 'You have data.';
                           $response['result'] = $query->result();
                       }else{
                           $response[CODE] = FAIL_CODE;
                           $response[MESSAGE] = 'Fail';
                           $response[DESCRIPTION] ='No data.';
                       }
       return json_encode($response);
   }
}