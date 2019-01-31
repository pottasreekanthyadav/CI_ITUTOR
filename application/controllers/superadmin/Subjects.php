<?php defined('BASEPATH') or die('Somthing went wrong!');
class Subjects extends CI_Controller
{
	public $data;
	public function __construct()
	{
		parent::__construct();
		$this->subject_view_path = 'subjects/';//folder path of related to views
        $this->load->model(array('superadmin/Super_model','Common_model', 'superadmin/Settings_model','superadmin/Crud'));
		//loading the required models
		$this->admin_id=$this->session->userdata('admin_id');

	}
	public function addSubjectView(){
    if(!empty($this->admin_id))
        {
             $this->load->view('superadmin/subjects/create_subjects',$this->data);
        }else{
            redirect('superadmin/Admin/dashboard');
        }
    }
    public function addSubjects(){
    if(!empty($this->admin_id))
        {
                 $response=array();
        
            $subject_name=$this->input->post('subject_name');
            
            $error=0;
            $err_mesg="";
        for ($i = 0; $i < count($subject_name); $i++) 
        {
            if(empty($subject_name[$i])){
                $error=1;
            $err_mesg="Please enter Subject name ";   
            }
        }
        if($error == 0)
        {
            $insertdata=array();
          //print_r($_POST);exit;
                if(count($subject_name) > 0)
                {
                         for ($i = 0; $i < count($subject_name); $i++) 
                         {
                             $insertdata = array(
                                'subject_name' => $subject_name[$i],
                                'added_on'=>DATE
                                );
                          //   $insert_req = $this->Crud->commonInsert('rl_subjects_tbl',$insertdata);
                            $insertsql = $this->db->insert_string('rl_subjects_tbl', $insertdata);
                            $insert_req = $this->db->query($insertsql); 
                            
                         }
                          $response['code']=200;
                          $response['message']='success';
                          $response['description']='Subjects added successfully..';
                 }
                 else
                 {
                        $response['code']=204;
                        $response['message']='Fail';
                        $response['description']='No subjects list found to insert..';
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
    public function manageSubjects() {
      if(!empty($this->admin_id))
        {
        $cols = 'subject_id,subject_name,added_on,updated_on,subject_status,trash,subject_priority';
       $search =$this->input->post('search');
        $table_name = 'rl_subjects_tbl';
        $order_by_col = 'subject_id';
        $config["base_url"] = base_url() . 'superadmin/Subjects/manageSubjects';
        $config["total_rows"] = $this->Crud->common_record_count($cols, $table_name, $order_by_col);
        $config["per_page"] = 20;
        $config["uri_segment"] = 4;
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $this->data['links'] = $this->pagination->create_links();
        /*         * Pagination code end* */
        $like_col = 'subject_name';
        $orderby = 'subject_id';
        $this->data['common_result'] = $this->Crud->common_list_paging($cols, $table_name, $like_col, $orderby, $config["per_page"], $page, $search);
      // print_r($this->data['common_result']);exit;
        $this->load->view('superadmin/subjects/manage_subjects', $this->data);
        }else{
            redirect('superadmin/Admin/dashboard');
        }
}
    public function getSubjects() {
      if(!empty($this->admin_id))
        {
        $subject_id=$this->uri->segment(4);
        //echo $subject_id;
        $where=array('subject_id'=>$subject_id);
        $this->data['result']=$this->Settings_model->commonUpdate('rl_subjects_tbl',$where);
       // print_r($this->data['result']);
        $this->load->view('superadmin/subjects/update_subject', $this->data);
        }else{
            redirect('superadmin/Admin/dashboard');
        }

}
public function updateSubjects(){
if(!empty($this->admin_id))
        {
        $update_data = array('subject_name' => $this->input->post('subject_name'),
                              'updated_on'=>DATE);
        $update_where = array('subject_id'=>$this->input->post('subject_id'));
        $updated = $this->Settings_model->up_data('rl_subjects_tbl', $update_data, $update_where);
        if ($updated) {
           $this->session->set_flashdata('success','Your data updated successfully ');
            redirect('superadmin/Subjects/manageSubjects');
        }
      }else{
          redirect('superadmin/Admin/dashboard');
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
            case 'subjects':   // need to refer name for table name
              $table='rl_subjects_tbl';   // table name 
              $setcolumns='subject_status';
              $updatevalue=$activity;
              $wherecondition="subject_id  IN  (" .$updatelist. ")";
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
            case 'subjects':
                $table = 'rl_subjects_tbl';
                $wherecondition = "subject_id IN  (" . $updatelist . ")";
                break;
           
            }
            //print_r($wherecondition);
            $update = $this->Crud->commonDelete($table,$wherecondition,$relationname);
            echo $update;
            exit;
        }
        echo json_encode($response);
    }
    public function restrict_subject()
    {
      //echo 'vivek';exit;
      $subject_name = $this->input->post('subject_name');
            $response = array();
            if(!empty($subject_name)){
              $table='rl_subjects_tbl';
              $where=array('subject_name'=>$subject_name);
              $datares = $this->Common_model->common_count_records('subject_id',$table,$where);
             // echo $datares;die;
            //print_r($datares);exit;
                if( $datares==1){
                    $response[CODE]=SUCCESS_CODE;
                    $response[MESSAGE]='success';
                    $response[DESCRIPTION]='Subject already configured';
                    //$response['result']=$datares->result;
                } else{
                    $response[CODE]=FAIL_CODE;
                    $response[MESSAGE]='fail';
                    $response[DESCRIPTION]='Records not found.';
                }   
            }else{
                $response[CODE]=EXISTS_CODE;
                $response[MESSAGE]='Invalid request';
                $response[DESCRIPTION]='Wrong selection';
            }
            echo json_encode($response);
    }
    public function updatesubjectpriority()
    {
       // print_r($_POST);exit;
        $multiple = $this->input->post('multiple');
        $priority = $this->input->post('priority');
        $error = '';
        $count=count($multiple);$table='rl_subjects_tbl';
        $arr=array();
        $update_count=0;
        for($i=0;$i<$count;$i++){
            $update_data=array('subject_priority'=>$priority[$i]);
            $update_condition=array('subject_id'=>$multiple[$i]);
            $response=json_decode($this->Crud->commonUpdate($table, $update_data, $update_condition, 'Priority updated successfully','Error'));
            //echo $this->db->last_query();exit;
            if($response->code==SUCCESS_CODE){ $update_count+=1; }
        }
        $msg=($update_count>0)?$update_count.' records updated':'Priority is not updated';
        $code=($update_count>0)?SUCCESS_CODE:FAIL_CODE;
        $this->session->set_flashdata(array('success'=>$msg,'code'=>$code));
        redirect('superadmin/Subjects/manageSubjects');
    }
}