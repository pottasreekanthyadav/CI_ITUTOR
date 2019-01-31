<?php defined('BASEPATH') or die('Somthing went wrong!');
class Language extends CI_Controller
{
	public $data;
	public function __construct()
	{
		parent::__construct();
		$this->subject_view_path = 'classes/';//folder path of related to views
        $this->load->model(array('superadmin/Super_model', 'superadmin/Settings_model','superadmin/Crud'));
		//loading the required models
		$this->admin_id=$this->session->userdata('admin_id');

	}
	public function addClassView(){
    if(!empty($this->admin_id))
        {
     $this->data['category_data'] = $this->Super_model->get_cat_data();
             $this->load->view('superadmin/classes/create_classes',$this->data);
             }else{
            redirect('superadmin/Admin/dashboard');
        }
    }

        public function addClasses(){
          if(!empty($this->admin_id))
        {
            //print_r($_POST);exit;
                 $response=array();
        
            $class_name=$this->input->post('class_name');
            $category=$this->input->post('category');
            
            $error=0;
            $err_mesg="";
        for ($i = 0; $i < count($class_name); $i++) 
        {
            if(empty($class_name[$i])){
                $error=1;
            $err_mesg="Please enter Class Name ";   
            }
            if(empty($category[$i])){
                $error=1;
            $err_mesg="Please enter category Name ";   
            }
        }
        if($error == 0)
        {
            $insertdata=array();
          //print_r($_POST);exit;
                if(count($class_name) > 0)
                {
                         for ($i = 0; $i < count($class_name); $i++) 
                         {
                             $insertdata = array(
                                'class_name' => $class_name[$i],
                                'category_id'=>$category[$i],
                                'class_status'=>1,
                                'added_on'=>DATE
                                );
                          //   $insert_req = $this->Crud->commonInsert('rl_subjects_tbl',$insertdata);
                            $insertsql = $this->db->insert_string('rl_class_tbl', $insertdata);
                            $insert_req = $this->db->query($insertsql); 
                            
                         }
                          $response['code']=200;
                          $response['message']='success';
                          $response['description']='Classes added successfully..';
                 }
                 else
                 {
                        $response['code']=204;
                        $response['message']='Fail';
                        $response['description']='No Class list found to insert..';
                 }

           }
            else{
                    $response['code']=204;
                    $response['message']='Validation';
                    $response['description']=$err_mesg;
               }

 echo json_encode($response);
 }else{
            redirect('superadmin/Admin/dashboard');
        }
    }
    
          public function manage_language() {
            if(!empty($this->admin_id))
        {
        $cols = '*';
       $search =$this->input->post('search');
       // echo $search;exit;
        $table_name = 'rl_language_tbl';
        $order_by_col = 'lid';
        $config["base_url"] = base_url() . 'superadmin/language/manage_language';
        $config["total_rows"] = $this->Crud->common_record_count($cols, $table_name, $order_by_col);
        $config["per_page"] = 20;
        $config["uri_segment"] = 4;
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $this->data['links'] = $this->pagination->create_links();
        /*         * Pagination code end* */
        $like_col = '';
        $orderby = '';
        $this->data['common_result'] = $this->Crud->common_list_paging($cols,$table_name, $like_col, $orderby, $config["per_page"], $page,'','');

     //print_r($this->data['common_result']);exit;
        $this->load->view('superadmin/language_view',$this->data);
        }else{
            redirect('superadmin/Admin/dashboard');
        }
}
    public function get_language() {
      if(!empty($this->admin_id))
        {
        $id=$this->uri->segment(4);
        //echo $class_id;
        $where=array('lid'=>$id);
        $this->data['result']=$this->Settings_model->commonUpdate('rl_language_tbl',$where);
        // print_r($this->data['result']);
        $this->load->view('superadmin/lang_update_main', $this->data);
        }else{
            redirect('superadmin/Admin/dashboard');
        }

}
public function update_language(){

        $update_data = array('language' => $this->input->post('language'),
                            'updated_on'=>DATE,'status'=>1);
        //print_r($update_data);exit;
        $update_where = array('lid'=>$this->input->post('id'));
        //print_r($update_where);exit;
        $updated = $this->Settings_model->up_data('rl_language_tbl', $update_data, $update_where);
        if ($updated) {
           $this->session->set_flashdata('success','Your data updated successfully ');
            redirect('superadmin/language/manage_language');
        }
         }
  public function add_language(){
    $this->load->view('superadmin/add_language_type');
  }
public function insert_language(){
  $language=$this->input->post('language');
  $insert_data=array('language'=>$language,'status'=>1,'added_on'=>DATE);
       $res=json_decode($this->Crud->commonInsert('rl_language_tbl',$insert_data));
       if($res->code==SUCCESS_CODE)
       {
           $this->session->set_flashdata('success','Your data added successfully ');
         redirect('superadmin/language/manage_language');
       }
}
    public function commonStatus()
    {
      
        $response = array();
        $tablename = $this->input->post('tablename');
        $updatelist = $this->input->post('updatelist');
        $activity = $this->input->post('activity');
        if ($tablename != '' && $updatelist != '' && $activity != '' && ($activity == 0 || $activity == 1 || $activity == 2)) {
            $table= '';
            $setcolumns = '';
            $wherecondition = '';
            $updatevalue = '';
            switch ($tablename) {
            case 'language':   // need to refer name for table name
              $table='rl_language_tbl';   // table name 
              $setcolumns='status';
              $updatevalue=$activity;
              $wherecondition="lid  IN  (" .$updatelist. ")";
              break;
            }
           $common = $this->Crud->commonStatusActivity($table, $setcolumns, $updatevalue, $wherecondition);
            echo $common;
            exit;
        }
        echo json_encode($response);
        }

    
    public function commonDelete()
    {   
        $response = array();
        $relationname='Your data';
        $tablename = $this->input->post('tablename');
        $updatelist = $this->input->post('updatelist');
        if ($tablename != '') {
            $table = '';
            $wherecondition = '';
            switch ($tablename) {
                 case 'language':
           $table = 'rl_language_tbl';
                $wherecondition = "lid IN  (" . $updatelist . ")";
                break;
            }
           
            //print_r($wherecondition);
            $update = $this->Crud->commonDelete($table,$wherecondition,$relationname);
            echo $update;
            exit;
        }
        echo json_encode($response);
    }
}
?>