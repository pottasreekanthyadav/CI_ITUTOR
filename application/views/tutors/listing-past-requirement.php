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
<link rel="canonical" href="<?php echo base_url(); ?>tutor/list-past-requirement" />
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
          <div class="col-sm-12 inner-bg no-padd m-t-10">
           <h4 class="title-hd"><strong>Viewed Requirements</strong></h4>
        
          
          <div class="col-sm-12 m-t-10">
           <!--start-->
           <form name="frmsearch" id="frmsearch" action="<?php echo base_url(); ?>tutor/search_list_past_requirement" method="post">
               <div class="col-sm-2 plr5">
            <input type="text" name="searchby_string" class="form-control no-bod-rad fs12" id="searchby_string" placeholder="Search here by typing." value="<?php echo set_value('searchby_string'); ?>">
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
              <option value="0">--Select syllabus--</option>
              <?php if(!empty($sybllabus)){  
                foreach ($sybllabus as $key => $value) {
                ?>
              <option value="<?php echo $value->syllabus_id; ?>" <?php echo set_select('searchby_syllabus',$value->syllabus_id,false); ?>><?php echo $value->syllabus_name; ?></option>
              <?php }  } ?>
            </select>
               </div>
               <div class="col-sm-2 plr5">
            <select name="searchby_category" id="searchby_category" class="form-control no-bod-rad  fs12"> 
              <option value="0">--Select Category--</option>
              <?php if(!empty($category)){  
                foreach ($category as $key => $value) {
                ?>
              <option value="<?php echo $value->category_id; ?>" <?php echo set_select('searchby_category',$value->category_id,false); ?>><?php echo $value->category_name; ?></option>
              <?php }  } ?>
            </select>
               </div>
               <div class="col-sm-2 plr5">
             <select name="searchby_class" id="searchby_class" class="form-control no-bod-rad  fs12"> 
              <option value="0">--Select Class--</option>
              <?php if(!empty($class)){  
                foreach ($class as $key => $value) {
                ?>
              <option value="<?php echo $value->class_id; ?>" <?php echo set_select('searchby_class',$value->class_id,false); ?>><?php echo $value->class_name; ?></option>
                <?php }  } ?>
            </select> 
               </div>
               <div class="col-sm-2 plr5">
            <input type="submit" class="btn-red btn no-bod-rad col-sm-12 pull-right col-wh" name="btnsub" id="btnsub" value="Search"> 
               </div>
			   <div class="col-sm-2 plr5">
                  
				  <a href="<?php echo base_url(); ?>tutor/list-past-requirement" class="btn btn-blue no-bod-rad col-sm-12 col-wh">Refresh</a></form>
                    </div>
           </form>
            <!-- end-->
     <div class="table-responsive col-sm-12">
      <div class="clearfix">&nbsp;</div>
     <table width="100%" class="table table-striped table-bordered table-hover table-bordered">
                        <thead>
                          <?php 
                          //print_r($post_list);die;
                          $results =$post_list;
                             if (!empty($results)) {
                          ?>
                            <tr class="list-learn">
                                <th>Sl.No</th>
                                <th>Name</th>
								 <th> Email </th>
                                <th> Mobile </th>
                                <th>Syllabus</th>
                                <th>Categary</th>
                                <th>Class</th>
                                <th>Subject</th>
                                <th> Timing </th>
                                <th>Duration In Hours</th>
                                <th>Location</th>
                                <th>response</th>
                            </tr>
                            <?php 
                            }
                            ?>
                        </thead>
                        <tbody>
                          <?php
                         // print_r($post_list);die;
                           
                              $results =$post_list;
                             if (!empty($results)) {
                              $i= $this->uri->segment(4,0);
                                foreach ($results as $row){
                                 // print_r($row);
                                    ?>
                                    <tr class="">
                                      <!-- <td><input type="checkbox" class="checkbox" name="multiple[]" value="<?php //echo $row->id;?>"> </td> -->
                                       <td><?php echo ++$i; ?> </td>
                                        <td><?php echo $row->name; ?></td>
										 <td><?php echo $row->email; ?></td>
                                          <td><?php echo $row->mobile; ?></td>
                                        <td><?php echo $row->syllabus_name; ?></td>
                                        <td><?php echo $row->category_name; ?></td>
                                        <td><?php echo $row->class_name; ?></td>
                                        <td><?php echo $row->subject_name; ?></td>
                                        <td><?php echo $row->tuition_time; ?></td>
                                        <td><?php echo $row->duration; ?></td>
                                        <td><?php echo $row->location; ?></td>
                                        <td id="parent-<?php echo $row->id; ?>" class="hidden"><?php echo $row->parentid; ?></td>
                                         <!-- <td><?php //if($row->status==1){ echo '<span class="label label-success">Avaliable</span>'; }else{ echo '<span class="label label-warning">Not avaliable</span>'; }  ?></td> -->
                                         <td><?php echo $row->no_of_response; ?></td>
                                         
                                        
                                    </tr> 
                                    <?php 
                                }
                           } else { ?>
                                <tr><td colspan="10" style="text-align:center; color:red;font-size:20px;">No Matching Records Found...</td></tr>
                             <?php }
                             ?>  


                        </tbody>
                        
                    </table>
                    <div class="col-sm-12 text-center">
             <?php echo $this->pagination->create_links();?>
              
              </div>
              </div>
               
          </div>
          </div>
      </div>
           <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>
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
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-family: 'MavenPro-Regular';">Tutor Contact Details</h4>
        <h3 id="messageleads"></h3>
      </div>
      <div class="modal-body">
       
   
     <div class="table-responsive col-sm-12" id="noview">
       <table class="table table-striped custab table-bordered">
    <thead>
   
        <tr>
           <th id="email_head">Email</th>
            <th id="mobile_head">Mobile</th>
        </tr>
    </thead>
            <tr>
                
                <td  id="emaillead"></td>
                <td id="mobilelead"></td>
               <!--  <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-add"></span> Accept</a></td> -->
            </tr>
            
    </table>
         </div>
      </div>
      <div class="modal-footer" style="border-top: none">
        <button type="button" class="btn btn-default no-bod-rad" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal  for view feedback-->

<div id="myModalfeedbackview" class="modal fade" role="dialog">
  <div class="modal-dialog"  style="font-family:MavenPro-Regular">
  <div class="modal-content">
    
      <div class="modal-header btn-blue text-white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-family:MavenPro-Regular">Feedback</h4>
      </div>
      <div class="modal-body">
         <p id="content-post" style="display:none"></p>
         <span id="feedback_msg"></span>
       <form id="myform" action="" method="post" name="myform">
<!--
         <div class="form-group col-sm-6">
             <label>Name</label>
           <input type="text" class="form-control no-bod-rad" placeholder="Name">
         </div> 
           <div class="form-group col-sm-6">
               <label>Email</label>
           <input type="text" class="form-control no-bod-rad" placeholder="Email">
         </div> 
-->
           <input type="hidden" name="requirementid" id="requirementid">
           <input type="hidden" name="parentid" id="parentid">
           <div class="form-group col-sm-12 m-t-10">
               <label>Your Feedback is Valuble for us</label>
           <textarea class="form-control no-bod-rad" rows="5" id="feedback"></textarea>
           </   div>
           <div class="form-group col-sm-12 m-t-10">
             <select class="form-control" name="dealstatus" id="dealstatus">
              <option value="0">Choose the leads status</option>
              <option value="1">Success</option>
              <option value="2">Fail</option>
            </select>
           </div>
        
     </div>
    
      <div class="modal-footer text-center col-sm-12" style="border-top: none; text-align: center;">
        <button type="submit" class="btn btn-blue no-bod-rad text-white" id="myjk" onclick="validate_feedback();">submit</button>
      </form>
          <button type="button" class="btn btn-red no-bod-rad text-white" data-dismiss="modal">Close</button>
      </div>
      <div class="clearfix">&nbsp;</div>
    </div>

  </div>
</div>
<!--end the modal view feedback-->
  
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
                        $("#emaillead").html(mypostdata.email);
                        $("#mobilelead").html(mypostdata.mobile);
                        
                      }else{
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
$("#frmsearch").on('submit',function(){

var  str = true;
var searchby_string=$("#searchby_string").val().trim();
var searchby_syllabus=$("#searchby_syllabus").val().trim();
var searchby_category=$("#searchby_category").val().trim();
var searchby_class=$("#searchby_class").val().trim();
 if(searchby_string == 0 && searchby_syllabus == 0 && searchby_category == 0 && searchby_class == 0) {
        alert('Choose any one of Criteria');
        str=false;
    }
if(str==true){
this.frmsearch.submit();
}
return str;
});

  });
</script>
      </body>
</html>