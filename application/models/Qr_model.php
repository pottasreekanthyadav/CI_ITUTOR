<?php
Class Qr_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    public function get_cat_priority()
    {
    	$category_priority = $this->db->select_max('category_priority')->from('rl_book_categories_tbl')->get()->row();
    	return $category_priority->category_priority;

    }
    public function get_subcat_priority()
    {
        $subcategory_priority = $this->db->select_max('subcategory_priority')->from(' rl_book_subcategories_tbl')->get()->row();
        return $subcategory_priority->subcategory_priority;

    }    
    public function categories()
    {
    	$response = array();
        $sql = $this->db->select("*	")->from(' rl_book_categories_tbl')->get();
        $count = $sql->num_rows();
        $resposne['code'] = ($count > 0) ? 200 : 204;
        $resposne['message'] = ($count > 0) ? 'Success' : 'Fail';
        $resposne['description'] = ($count > 0) ? "$count results found" : 'No results found..!';
        $resposne['category_list'] = ($count > 0) ? $sql->result() : array();
        return json_encode($resposne);
    }
    public function subMenu($where = NULL) {
        $response = array();
        $this->db->select('subcategory_id,title')->from(' rl_book_subcategories_tbl');
        ($where != '' && is_array($where)) ? $this->db->where($where) : '';
        $sql = $this->db->order_by('title', 'ASC')->get();
        $count = $sql->num_rows();
        $response[CODE] = ($count > 0) ? SUCCESS_CODE : FAIL_CODE;
        $response[MESSAGE] = ($count > 0 ) ? 'Success' : 'Fail';
        $response[DESCRIPTION] = ($count > 0) ? 'Total ' . $count . 'results found' : 'No results found';
        $response['submenu_result'] = ($count > 0) ? $sql->result() : array();
        return json_encode($response);
    }
    public function qrcode_employee_listing($title,$si,$limit)
    {
        $response = array();
        if($title!='')
        {
			$this->db->where('mobile',$title);
            $this->db->or_like('employee_name',$title);
        }      
        $this->db->limit($limit,$si);                  
        $sql = $this->db->select("*")->from('qr_code_employees_tbl')->order_by('employee_id','desc')->get();
        //echo $this->db->last_query();
        $count = $sql->num_rows();
        $resposne['code'] = ($count > 0) ? 200 : 204;
        $resposne['message'] = ($count > 0) ? 'Success' : 'Fail';
        $resposne['description'] = ($count > 0) ? "$count results found" : 'No results found..!';
        $resposne['books'] = ($count > 0) ? $sql->result() : array();
        return json_encode($resposne);        
    }
    public function get_stock($title)
    {
        $qry = $this->db->select('stock')->from('rl_books_tbl b')->where('title',$title)->get()->row();
        if($qry == '')
        {
            return 0;
        }
        else
        {
            return $qry->stock;
        }
    }
}
?>