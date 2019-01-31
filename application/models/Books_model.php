<?php
Class Books_model extends CI_Model {
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
    public function books_listing($cat,$subcat,$status,$title,$si,$limit)
    {
        $response = array();
        if($cat!='' && $cat!=0)
        {
            $this->db->where('b.category_id',$cat);
        }
        if($subcat!='' && $subcat!=0)
        {
            $this->db->where('b.subcategory_id',$subcat);
        }
        if($status!='' && $status!=0)
        {
            $this->db->where('b.status',$status);
        } 
        if($title!='')
        {
            $this->db->like('b.title',$title);
        }      
        $this->db->limit($limit,$si);                  
        $sql = $this->db->select("s.title as subtitle,c.title as cat_title,b.title as book_title,b.description,b.stock,b.price,b.image,b.added_on,b.status,b.book_id,b.availability_type,b.familiarity_type")->from('rl_books_tbl b')->join('rl_book_subcategories_tbl s','s.subcategory_id=b.subcategory_id')->join('rl_book_categories_tbl c','c.category_id=b.category_id')->order_by('b.book_id','desc')->get();
        //echo $this->db->last_query();exit;
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