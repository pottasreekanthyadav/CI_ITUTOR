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
<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
<!-- Bootstrap -->
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
  <!--section dashboard start-->
  <section>
      <div class="bg-back container-fluid"  style="background-image:url('<?php echo base_url();?>assets/images/bg-back.jpg')">
      <div class="container">
    <?php $this->load->view('tutors/tutor-dash-sidebar'); ?>
      <div class="col-sm-10">
          <div class="col-sm-12 bg-wh no-padd m-t-10">
           <h4 class="title-hd"><strong>Viewd By Parent</strong></h4>
         <div class="col-sm-12 m-t-10">
                            
				  
                    </div>
		   <!-- end-->
             
            <!--looping part in foreach -->
              <?php
                        // print_r($post_list);
                           
                             if (!empty($recs)) {
                                foreach ($recs as $row){
                                 // print_r($row);
                                    ?>
             <div class="col-sm-12 inner-bg no-padd tutor-de pd10">
               <div class="col-sm-12">
                 <p><b> <?php echo ucfirst($row->name)." has viewed your profile"; ?></b></p>
                 </div>
             
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
            </div>
             
                <div class="clearfix">&nbsp;</div>
          </div>
              <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>
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
        <button type="button" class="close" style="opacity:2" data-dismiss="modal"><i class="fa fa-times col-wh" style="margin-top: 2px;" aria-hidden="true"></i></button>
        <h4 class="modal-title" style="font-family: 'MavenPro-Regular';">Parent Contact Details</h4>
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
        
      </div>
    </div>

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
 if(searchby_string == 0 && searchby_string =="" && searchby_syllabus == 0 && searchby_category == 0 && searchby_class == 0) {
        alert('Choose any one of Criteria');
        str=false;
    }
if(str==true){
this.frmsearch.submit();
}
return str;
});
});
