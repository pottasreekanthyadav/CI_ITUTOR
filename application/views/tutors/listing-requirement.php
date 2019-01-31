<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title><?php echo TITLE_PATH;?></title>

<meta name="description" content=" "/>
<meta name="keywords" content="  "/>
<meta name="author" content="  "/>
<meta name="rating" CONTENT="General"/>
<meta name="revisit-after" CONTENT="2 days"/>
<meta name="robots" content=" ALL, index, follow"/>
<meta name="distribution" content="Global" />
<meta name="rating" content="Safe For All" />
<meta name="language" content="English" />
<meta http-equiv="window-target" content="_top"/>
<meta http-equiv="pics-label" content="for all ages"/>
<meta name="rating" content="general"/>
<meta content="All, FOLLOW" name="GOOGLEBOTS"/>
<meta content="All, FOLLOW" name="YAHOOBOTS"/>
<meta content="All, FOLLOW" name="MSNBOTS"/>
<meta content="All, FOLLOW" name="BINGBOTS"/>
<meta content="all" name="Googlebot-Image"/>
<meta content="all" name="Slurp"/>
<meta content="all" name="Scooter"/>
<meta content="ALL" name="WEBCRAWLERS"/>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"/>
<link rel="canonical" href="<?php echo base_url(); ?>tutor/requirements" />
<!-- Bootstrap -->
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"  />
<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
<!--custom css-->
  <link href="<?php echo base_url();?>assets/css/custom.css" type="text/css" rel="stylesheet"  />
 <!--menu-->
  <link href="<?php echo base_url();?>assets/css/menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/icomoon.css">
  <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .register .input-group .input-group-addon{border: 1px solid #ccc;border-right: none;}
        .register .input-group {padding: 9px 2px;}
        .register .input-group .form-control{height: 45px !important}
        .pad5{    padding: 5px 21px 6px 0px !important}
        .btn-label {border: 1px solid #fff;padding: 10px 10px}
        .btn-facebook { color: #fff!important;background-color: #3b5998!important;}
        .btn-googleplus { color: #fff!important;background-color: #dd4b39!important;}
/*
        .side-menu ul { list-style-type: none;background: #ed3f40;padding-left: 0;height: 385px;}
        .side-menu ul li{border-bottom: 1px solid #bbb;padding: 10px 22px;background: #ed3f40} 
        .side-menu ul li:hover{border-bottom: 1px solid #bbb;padding: 10px 22px;background: #ca4344;color: #fff}
        .side-menu ul li.active{border-bottom: 1px solid #ccc;padding: 10px 22px;background: #ca4344;color: #fff}
        .side-menu ul li i:hover{color: #bbb;font-size: 16px;}
        .side-menu ul li i {color: #fff;font-size: 16px;}
        .bg-primary-dark { background-color: #2f80e7;color: #fff!important;}
        .bg-primary-dark2 { background-color: #ffb741;color: #fff!important;}
        .bg-primary-dark3 { background-color: #70bb44;color: #fff!important;}
*/
    
        .mt0{margin-top: 0px}
        .side-menu ul li a{color: #fff; font-size: 13px;text-decoration: none}
        .mt9{margin-top: 9px}
        .bootstrap-tagsinput { border: 1px solid #e4e7ea;border-radius: 0px; box-shadow: none; display: block; padding: 7px 12px;}
        .labell-bg {background: #fff;color: #bbb;border: 1px solid;}
        .btn-bg{background-color: #ed3f40;color: #fff}
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{font-size: 12px !important;padding: 12px 3px !important;font-weight: bold;}
      </style>
  </head>
  <body class="bg-wh">
  <?php $this->load->view('includes/header'); ?>
   <div class="clearfix"></div>
  <!--section dashboard start-->
  <section>
      <div class="bg-back container-fluid"  style="background-image:url('<?php echo base_url();?>assets/images/bg-back.jpg')">
      <div class="container">
    <?php $this->load->view('tutors/tutor-dash-sidebar'); ?>
      <div class="col-sm-10">
          <div class="col-sm-12 bg-wh no-padd m-t-10">
           <h4 class="title-hd"><strong>Matching Requirements</strong></h4>
         <div class="col-sm-12 m-t-10">
           <!--start-->
<!--            <form name="frmsearch" id="frmsearch" action="<?php //echo base_url(); ?>tutor/search_list_requirement" method="post"> -->
            <?php echo form_open('tutor/search_list_requirement',array("name"=>"frmsearch", "id"=>"frmsearch")); ?>
                <div class="col-sm-2 plr5">
            <input type="text" name="searchby_string" class="form-control no-bod-rad fs12" id="searchby_string" placeholder="Search here by typing.">
               </div>
            <!-- <select name="searchby_subject" id="searchby_subject" class="form-control">
              <option value="0">--Select Subject--</option>
              <?php //if(!empty($subject)){  
                //foreach ($subject as $key => $value) {
                ?>
              <option value="<?php //echo $value->subject_id; ?>"><?php //echo $value->subject_name; ?></option>
              <?php //}  } ?>
            </select> -->
                <div class="col-sm-2 plr5">
            <select name="searchby_syllabus" id="searchby_syllabus" class="form-control no-bod-rad fs12">
              <option value="0">-Select syllabus-</option>
               <?php $newda = json_decode(get_syllabus_master_data());
                     //print_r($newda);
                     if($newda->code==SUCCESS_CODE){ 
                      foreach($newda->result as $key=>$value){ ?>
<option value="<?php echo $value->syllabus_id; ?>" <?php echo set_select('searchby_syllabus', $value->syllabus_id, False); ?> ><?php echo $value->syllabus_name; ?></option> 
                   <?php   } }
                      ?>
            </select>
               </div>
                <div class="col-sm-2 plr5">
            <select name="searchby_category" id="searchby_category" class="form-control no-bod-rad fs12"> 
              <option value="0">-Select Category-</option>
             <?php $newname = json_decode(get_cat_master_data());
                     //print_r($newname);die;
                     if($newname->code==SUCCESS_CODE){ 
                      foreach($newname->result as $row=>$value){ ?>
<option value="<?php echo $value->category_id; ?>" <?php echo set_select('searchby_category', $value->category_id, False); ?> ><?php echo $value->category_name; ?></option> 
                   <?php   } }
                      ?>
            </select>
               </div>
               <div class="col-sm-2 plr5">
             <select name="searchby_class" id="searchby_class" class="form-control no-bod-rad fs12"> 
              <option value="0">-Select Class-</option>
             <?php $newname = json_decode(get_master_class_data());
                     if($newname->code==SUCCESS_CODE){ 
                      foreach($newname->result as $row=>$value){ ?>
<option value="<?php echo $value->class_id; ?>" <?php echo set_select('searchby_class', $value->class_id, False); ?> ><?php echo $value->class_name; ?></option> 
                   <?php   } }
                      ?>
            </select> 
                   </div>
               <div class="col-sm-2 plr5">
            <input type="submit" name="btnsub" class="btn-red btn no-bod-rad col-sm-12 pull-right col-wh" id="btnsub" value="Search"> 
                   </div>
				    <div class="col-sm-2 plr5">
                  
				  <a href="<?php echo base_url(); ?>Tutor/listing_requirement" class="btn btn-blue no-bod-rad col-sm-12 col-wh" style="margin-bottom: 7px;">Refresh</a><?php echo form_close(); ?>
                    </div>
		   <!-- end-->
             
            <!--looping part in foreach -->
              <?php
                        // print_r($post_list);
                           
                              $results =$post_list;
                             if (!empty($results)) {
                              $i= $this->uri->segment(4,0);
                                foreach ($results as $row){
                                 // print_r($row);
                                    ?>
             <div class="col-sm-12 inner-bg m-t-10 no-padd tutor-de pd10">
               <div class="col-sm-4">
                 <p><b> <?php echo ucfirst($row->name); ?></b></p>
                 </div>
                <div class="col-sm-4 col-sm-offset-4 text-right">
                 <a href="#" onclick="viewleads(<?php echo $row->id; ?>,<?php echo $row->parentid; ?>)" data-toggle="modal" data-target="#myModalleadsview"><button class="btn btn-blue no-bod-rad col-wh btn-sm col-sm-5">View Contact</button></a>
                    <a href="#" onclick="populate_more('<?php echo $row->id;?>')" data-toggle="modal" data-target="#myModalfeedbackview"><button class="btn btn-blue no-bod-rad col-wh btn-sm col-sm-6 col-sm-offset-1"> Feedback </button></a>
                 </div>
                 <div class="clearfix"></div>
                <div class="b-b1"></div>
                 <div class="col-sm-4">
                  <h4>Syllabus :<b><?php echo $row->syllabus_name; ?></b> </h4>
               </div> <div class="col-sm-4">
            
                  <h4>Timings :<b><?php echo $row->tuition_time; ?></b> </h4>
               </div> 
                 <div class="col-sm-4">
                <h4>Duration :<b><?php echo $row->duration; ?></b> </h4>
                 
               </div>
               <div class="col-sm-4">
                  <h4>Budget :<b><?php echo 'Rs.'.$row->budget_price.' '.$row->budget_type; ?></b> </h4>
               </div>
                 <div class="col-sm-4">
              <h4>Category :<b><?php echo $row->category_name; ?></b> </h4>
               </div> 
                 <div class="col-sm-4">
                  <h4>Class :<b><?php echo $row->class_name; ?></b> </h4>
            
                 
               </div>
                <div class="col-sm-4">
                  <h4>Gender :<b><?php echo $row->gender; ?></b> </h4>
                 
               </div>
                 <div class="col-sm-4">
             
                  <h4>Response :<b><?php echo $row->no_of_response; ?></b> </h4>
                
               
               </div>
                 <div class="col-sm-4">
             
                  
                  <h4>Demo on :<b><?php echo $row->demo_date_time; ?></b> </h4>
               
               </div>
                 <div class="col-sm-4">
                    <h4>Subject :<b><?php echo $row->subject_name; ?></b> </h4>
                    
                    
                 </div>
                  <div class="col-sm-4">
                    
                    <h4>Class Per Week :<b><?php echo $row->per_week_class; ?></b> </h4>
                    
                 </div>
                 <div class="col-sm-12">
                 <h4>Location : <b> <?php echo $row->location; ?></b></h4>
                 </div>
                 <span id="parent-<?php echo $row->id; ?>" class="hidden"><?php echo $row->parentid; ?></span>
             </div>      
              <?php 
                                }
                           } else { ?>
                           <div class="col-sm-12 inner-bg m-t-10 no-padd tutor-de pd10">
                           <?php
                               echo 'No Matching Records Found...';
                              }
                             ?>  </div> 
                             <div class="text-center">
             <?php echo $this->pagination->create_links();?>
            </div>
             <!--end for loop data in -->
             <!-- <div class="col-sm-12 inner-bg m-t-10 no-padd tutor-de pd10">
               <div class="col-sm-4">
                 <p><b> Kalki</b></p>
                 </div>
             <div class="col-sm-3 col-sm-offset-5 text-right">
                 <a href="#"><button class="btn btn-blue no-bod-rad col-wh btn-sm col-sm-5"> Leads </button></a>
                    <a href="#"><button class="btn btn-blue no-bod-rad col-wh btn-sm col-sm-6 col-sm-offset-1"> Feedback </button></a>
                 </div>
                 <div class="clearfix"></div>
                <div class="b-b1"></div>
                 <div class="col-sm-4">
                  <h4>Syllabus :<b>CBSE</b> </h4>
               </div> <div class="col-sm-4">
            
                  <h4>Timings :<b>12:00am to 1:00pm</b> </h4>
               </div> 
                 <div class="col-sm-4">
                
                  <h4>Duration :<b>45 mins</b> </h4>
               </div>  <div class="col-sm-4">
            
                  <h4>Category :<b>CLASS I - V</b> </h4>
               </div> 
                 <div class="col-sm-4">
                  <h4>Class :<b>V</b> </h4>
                 
               </div>
                 <div class="col-sm-4">
             
                  <h4>Responce :<b>1</b> </h4>
               </div>
                 <div class="col-sm-12">
                 <h4>Location : <b> Madhapur , Hyderabad ,Telagana ,India</b></h4>
                 </div>
             </div>  -->   
             
            <!--  <div class="col-sm-12 inner-bg m-t-10 m-b-10 no-padd tutor-de pd10">
               <div class="col-sm-4">
                 <p><b> Kalki</b></p>
                 </div>
              <div class="col-sm-3 col-sm-offset-5 text-right">
                 <a href="#"><button class="btn btn-blue no-bod-rad col-wh btn-sm col-sm-5"> Leads </button></a>
                    <a href="#"><button class="btn btn-blue no-bod-rad col-wh btn-sm col-sm-6 col-sm-offset-1"> Feedback </button></a>
                 </div>
                 <div class="clearfix"></div>
                <div class="b-b1"></div>
                 <div class="col-sm-4">
                  <h4>Syllabus :<b>CBSE</b> </h4>
               </div> <div class="col-sm-4">
            
                  <h4>Timings :<b>12:00am to 1:00pm</b> </h4>
               </div> 
                 <div class="col-sm-4">
                
                  <h4>Duration :<b>45 mins</b> </h4>
               </div>  <div class="col-sm-4">
            
                <h4>Category :<b>CLASS I - V</b> </h4>
               </div> 
                 <div class="col-sm-4">
                  <h4>Class :<b>V</b> </h4>
                 
               </div>
                 <div class="col-sm-4">
             
                  <h4>Responce :<b>1</b> </h4>
               </div>
                 <div class="col-sm-12">
                 <h4>Location : <b> Madhapur , Hyderabad ,Telagana ,India</b></h4>
                 </div>
             </div> -->
                <div class="clearfix">&nbsp;</div>
          </div>
              <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
          </div>
          
      </div>
         <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>   
    </div>
        
            
 </div>
 
      </section>
  <!--section dashboard end-->
<?php $this->load->view('includes/modal'); ?>
 <div class="clearfix"></div>
 <?php $this->load->view('includes/footer'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/menu.js"></script>
<!-- Modal  for view the contact leads-->
  <!--section dashboard end-->
  <div id="myModalleadsview" class="modal fade" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header btn-blue text-white">
        <button type="button" class="close" style="opacity:2" data-dismiss="modal"><i class="fa fa-times col-wh" style="margin-top: 2px;" aria-hidden="true"></i></button>
        <h4 class="modal-title" style="font-family: 'MavenPro-Regular';">Parent Contact Details</h4>

      </div>
      <div class="modal-body">
     <table class="table table-striped custab table-bordered" id="noview">
    <thead>
        <tr>
           <th id="email_head">Email</th>
            <th id="mobile_head">Mobile</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                
                <td  id="emaillead"></td>
                <td id="mobilelead"></td>
               <!--  <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-add"></span> Accept</a></td> -->
            </tr>
        
            
       <div id="messageleads" style="font-weight: 600;"></div>
  </tbody>
</table></div>
      <div class="modal-footer" style="border-top: none">
          <button data-dismiss="modal" class="btn btn-default">Back</button><a href="<?php echo base_url(); ?>payment/1/req" class="btn btn-success">Proceed to pay</a>
      </div>
    </div>


<!-- Modal  for view feedback-->

<div id="myModalfeedbackview" class="modal fade" role="dialog">
  <div class="modal-dialog"  style="font-family:MavenPro-Regular">
  <div class="modal-content">
    
      <div class="modal-header btn-blue text-white">
        <button type="button" class="close" style="opacity:2" data-dismiss="modal"><i class="fa fa-times col-wh" style="margin-top: 2px;" aria-hidden="true"></i></button>
        <h4 class="modal-title" style="font-family:MavenPro-Regular">Feedback</h4>
      </div>
      <div class="modal-body">
         <p id="content-post" style="display:none"></p>
         <span id="feedback_msg"></span>
       <form id="myform" action="" method="post" name="myform">

           <input type="hidden" name="requirementid" id="requirementid">
           <input type="hidden" name="parentid" id="parentid">
           <div class="form-group col-sm-12 m-t-10">
               <label>Your Feedback is Valuble for us</label>
           <textarea class="form-control no-bod-rad" rows="5" id="feedback"></textarea>
           </div>
           <div class="form-group col-sm-12 m-t-10">
             <select class="form-control no-bod-rad" name="dealstatus" id="dealstatus">
              <option value="0">Choose the leads status</option>
              <option value="1">Success</option>
              <option value="2">Fail</option>
            </select>
           </div>
     <div class="modal-footer text-center col-sm-12" style="border-top: none;text-align: center;">
        <button type="submit" class="btn btn-blue no-bod-rad text-white" id="myjk" onclick="validate_feedback();">Submit</button>
           </div>
      </form>
         
      </div>
      <div class="clearfix">&nbsp;</div>
    </div>

  </div>
</div>
<!--end the modal view feedback-->
  </body>
</html>
<script type="text/javascript">
 function  populate_more(id){
   $("#feedback_msg").html('');
/*var newss = $("#parent"+id).text();
  $("#content-post").html(newss);

  $("#feedback").val('');*/
  var newss = $("#parent-"+id).text();
  $("#parentid").val(newss);
   $("#requirementid").val(id);
   }
</script>
<script type="text/javascript">
  function viewleads(id,pid){
    $("#messageleads,#mobilelead,#emaillead").html('');
    if(id!="")
    {
      $.ajax({
                  dataType:'JSON',
                   method:'POST',
                   data:{"postid":id,"pid":pid},                  
                   url:"<?php echo base_url(); ?>Tutor/get_view_contact",
                    success:function(s){
                      console.log(s);
                      if(s.code==200){
                        var mypostdata = s.result;
                        console.log(mypostdata.email);
                        $("#noview").css('display','block');
                        $(".modal-footer").css('display','none');
                        $("#emaillead").html(mypostdata.email);
                        $("#mobilelead").html(mypostdata.mobile);
                        
                      }else if(s.code==422){
                        //console.log(s.code);
                          $("#messageleads").html(s.description);
                         $(".modal-footer").css('display','block');
                          $("#noview").css('display','none');
                      }
                      else
                      {
                          $(".modal-footer").css('display','none');
                          $("#messageleads").html(s.description);
                          $("#noview").css('display','none');
                      }
                    },
                    error:function(er){
                      console.log(er);
                    },
      });
    }
  }
</script>
<script type="text/javascript">
  $("#myform").on('submit',function(e){
   e.preventDefault();
  });
</script>
<script type="text/javascript">
  function validate_feedback(){
   //$("#feedback_msg").html(''); 
    str=true;
       var feedback = $('#feedback').val();
       var dealstatus = $('#dealstatus').val();
       var id = $("#requirementid").val();
       var parentid = $("#parentid").val();
       
  if(feedback=="")
  {
    str=false;
    $("#feedback").css('border','1px solid red');
  }
  else
  {
    $("#feedback").css('border','');
  }
  if(dealstatus=="" || dealstatus== 0)
  {
    str=false;
    $("#dealstatus").css('border','1px solid red');
  }
  else
  {
    $("#dealstatus").css('border','');
  }
       if(str==true)
       {
      if(id!="" && feedback!="")
      {
      $.ajax({
                  dataType:'JSON',
                   method:'POST',
                   data:{"requirementid":id,'feedback':feedback,"dealstatus":dealstatus,"parentid":parentid},                  
                   url:"<?php echo base_url(); ?>tutor/add_tutor_feedback",
                    success:function(s){
                        $("#feedback_msg").html(s.description).addClass('bg-success');
        },
                    error:function(er){
                      console.log(er);
                    },
      });
    }

}
return false;
}
</script>
<script type="text/javascript">
  $(document).ready(function(){
$("#frmsearch").on('submit',function(e){
  e.preventDefault();
var  str = true;
var searchby_string=$("#searchby_string").val().trim();
var searchby_syllabus=$("#searchby_syllabus").val().trim();
var searchby_category=$("#searchby_category").val().trim();
var searchby_class=$("#searchby_class").val().trim();
 if(searchby_string == 0 && searchby_string =="" && searchby_syllabus == 0 && searchby_category == 0 && searchby_class == 0) {
        alert('Choose any one of Criteria');
        str=false;
    }
if(str==true){
//this.frmsearch.submit();
 document.getElementById("frmsearch").submit();
}
return str;
});
});
</script>
