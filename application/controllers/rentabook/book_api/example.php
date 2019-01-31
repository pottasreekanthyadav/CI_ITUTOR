<?php

public function get_budget_data(){
    $response = array();
    $inputData=file_get_contents('php://input');
       if(!empty($inputData))
       {
          if(isJson($inputData))
           {
               $reqdata=json_decode($inputData);
               $categoryid=(isset($reqdata->category_id))?$reqdata->category_id:'';
              $error=0;
               $error_msg='';
               if(empty($categoryid))
               {
                   $error=1;
                   $error_msg.='Categoryid is required,';
               }
               if($error==0)
               {
   $params['wherecondition'] = array('category_fid'=>$categoryid,'budget_status'=>1);
    $params['cols']="budget_id,budget_price,budget_type";
   $params['table'] = 'rl_budget_tbl';
   $resultviewdata = json_decode($this->Common_model->commonget($params));
   //print_r($resultviewdata);die;
   if($resultviewdata->code==SUCCESS_CODE){
       
           $response[CODE] = SUCCESS_CODE;
               $response[MESSAGE] = 'Success';               
               $response['resultdata'] = $resultviewdata->result;
          
       
   }else{
       $response[CODE] = FAIL_CODE;
               $response[MESSAGE] = 'Fail';
               $response[DESCRIPTION] = 'No records found';
   }
   }
   else{
      $response['code']=VALIDATION_CODE;
      $response['message']="Validation error";
      $response['description']=rtrim($error_msg,',');
   }
}
else
{
              $response[CODE]=VALIDATION_CODE;
              $response[MESSAGE]='Validation error';
              $response[DESCRIPTION]='Input data should be in JSON format only';
}
}
else
{
               $response[CODE] = FAIL_CODE;
               $response[MESSAGE] = 'Fail';
               $response[DESCRIPTION] = 'data is empty';
}
   echo json_encode($response);
}

?>