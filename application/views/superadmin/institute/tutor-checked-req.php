<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Its My Tutor|Dashboard</title>

<!-- Bootstrap -->
<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"  />
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
   <section>
       <div class="col-md-12 signbread hidden">
           <div class="col-md-12 signbread-main">
               <div class="container">
                   <h4>Signup With Us</h4>
                   <h5>Take your Tutoring Career to a higher level with itutor.</h5>
               </div>
           </div>          
           <div class="clearfix"></div>
            <div class="container">
           <h2>Fill the form below&nbsp;:</h2>
           <h3>All below are mandatory.<sup>**</sup></h3>
           </div></div>
            <div class="clearfix">&nbsp;</div>
      </section>
  <!--section dashboard start-->
  <section>
      <div class="container">
    <?php $this->load->view('tutors/tutor-dash-sidebar'); ?>
      <div class="col-sm-10">
          <div class="col-sm-12 inner-bg">
              <div class="clearfix">&nbsp;</div>
           <h4><strong>Past Requirement Log</strong></h4>
          <hr>
         
          <div class="col-sm-12">
           <!-- <form > -->
    <!--  -->
     
     <table width="100%" class="table table-striped table-bordered table-hover table-bordered">
                        <thead>

                            <tr class="list-learn">
                                <th>Sl.No</th>
                                <th>Name</th>
                                <th>Syllabus</th>
                                <th>Categary</th>
                                <th>Class</th>
                                <th>Subject</th>
                                <th> Timing </th>
                                <th>Duration In Hours</th>
                                <th>Location</th>
                               <!--  <th>Status</th> -->
                                <th>response</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          // /print_r($get_individual_req);die;
                            $i = 1;
                              $results =$get_individual_req['report'];
                             if (!empty($results)) {
                                foreach ($results as $row) {
                                 // print_r($row);
                                    ?>
                                    <tr class="">
                                      
                                       <td><?php echo $i; ?> </td>
                                        <td><?php echo $row->name; ?></td>
                                        <td><?php echo $row->syllabus_name; ?></td>
                                        <td><?php echo $row->category_name; ?></td>
                                        <td><?php echo $row->class_name; ?></td>
                                        <td><?php echo $row->subject_name; ?></td>
                                        <td><?php echo $row->tuition_time; ?></td>
                                        <td><?php echo $row->duration; ?></td>
                                        <td><?php echo $row->location; ?></td>
                                        
                                         <!-- <td><?php //if($row->status==1){ echo '<span class="label label-success">Avaliable</span>'; }else{ echo '<span class="label label-warning">Not avaliable</span>'; }  ?></td> -->
                                         <td><?php echo $row->no_of_response; ?></td>
                                    </tr> 
                                    <?php $i++;
                                }
                           } else { ?>
                                <tr><td colspan="12" style="text-align:center; color:red;font-size:20px;">No Matching Records Found...</td></tr>
                             <?php }
                             ?>  


                        </tbody>
                        
                    </table>
                     
               <div class="text-center">
             <?php echo $this->pagination->create_links();?>
              
              </div>
          </div>
          </div>
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
       
   
     <div class="table-responsive col-sm-12">
       <table class="table table-striped custab table-bordered">
    <thead>
   
        <tr>
           <th>Email</th>
            <th>Mobile</th>
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
           </div>
           <div class="form-group col-sm-12 m-t-10">
             <select class="form-control" name="dealstatus" id="dealstatus">
              <option value="0">Choose the leads status</option>
              <option value="1">Deal</option>
              <option value="2">No Deal</option>
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
  </body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
$("#frmsearch").on('submit',function(){
var  str = true;
var bysyllbus=$("#bysyllbus").val().trim();
var byclass=$("#byclass").val().trim();
var bycategory=$("#bycategory").val().trim();
 if(bysyllbus == 0 && byclass == 0 && bycategory == 0) {
  
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
<script type="text/javascript">
 function  populate_more(id){
 
/*var newss = $("#parent"+id).text();
  $("#content-post").html(newss);
  $("#feedback_msg").html('');
  $("#feedback").val('');*/
  var newss = $("#parent-"+id).text();
  $("#parentid").val(newss);
   $("#requirementid").val(id);
   }
</script>
<script type="text/javascript">

  function viewleads(id,pid){
    $("#messageleads,#mobilelead,#emaillead").html('');
    //alert(id);
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
                        $("#emaillead").html(mypostdata.email);
                        $("#mobilelead").html(mypostdata.mobile);
                      }else{
                        $("#messageleads").html(s.description);
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
  function validate_feedback(){
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
                      if(s.code==200){
                        $("#feedback_msg").html(s.description).addClass('bg-success');
                      }else{
                        $("#feedback_msg").html("something went wrong");

                      }
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