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
<link rel="canonical" href="<?php echo base_url(); ?>parent/statistics" />
<!-- Bootstrap -->
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"  />
<!--custom css-->
  <link href="<?php echo base_url();?>assets/css/custom.css" type="text/css" rel="stylesheet"  />
 <!--menu-->
  <link href="<?php echo base_url();?>assets/css/menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/icomoon.css">
  <link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
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

        .f14{font-size: 14px !important}
        .mt0{margin-top: 0px}
        .side-menu ul li a{color: #fff; font-size: 13px;text-decoration: none}
        .mt9{margin-top: 9px}
        .bootstrap-tagsinput { border: 1px solid #e4e7ea;border-radius: 0px; box-shadow: none; display: block; padding: 7px 12px;}
        .labell-bg {background: #fff;color: #bbb;border: 1px solid;}
        .btn-bg{background-color: #ed3f40;color: #fff}
        .text-white{color: #fff !important}
        .filter-right-main-head-left ul li {list-style: none; float: right; margin: 22px 0px 0px 3px;}
        .filter-right-main p{margin: 9px 10px;}
        .filter-right { padding: 9px 0px 21px;}
      </style>
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125562697-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125562697-1');
</script>
  </head>
  <body class="bg-wh">
  <?php $this->load->view('includes/header.php'); ?>
   <div class="clearfix"></div>

  <section>
        <div class="bg-back container-fluid"  style="background-image:url('<?php echo base_url();?>assets/images/bg-back.jpg')">
      <div class="container">
    <?php $this->load->view('parents/parent-sidebar'); ?>
      <div class="col-sm-10">
          <div class="col-sm-12 inner-bg no-padd m-t-10">
            
           <h4 class="title-hd"><strong> Matching Tutors</strong></h4>
    
          
            <div class="col-md-12 filter-right"><!--filter right start--> <?php
                  if(!empty($post_list))
                  {
                  $page=$this->uri->segment(5);
                                    if(!empty($page))
                                     $i=$page+1;
                               else
                            $i=1;
						////print_r($post_list);die;
                        foreach($post_list as $row)
                        {
                          
                          
                          ?>
                       <div class="col-md-6 "><!--tutodiv start-->
                           
                      <div class="col-md-12 no-pad"><!--tutodiv start-->
               <div class="col-md-12 filter-right-main">
                        <div class="col-md-12 filter-right-main-head">
                            <div class="col-md-8 no-pad">
                                <ul class="list-inline">
                                 <?php if($row->photo!="")
                                  { ?>
                                <li class="col-md-5"><img src="<?php echo base_url();?>uploads/tutor_pic/<?php echo $row->photo;?>" alt="tutor image"></li>
                              <?php } else { ?>
                                <li class="col-md-5"><img src="<?php echo base_url();?>uploads/tutor_pic/tutor.png" alt="itutors"></li>
                                <?php }?>
                                <li><h3><?php echo $row->name;?></h3>
                                    <p>ITUTOR<?php echo $i;?></p>
                                </li>
                                </ul>
                            </div>
                            <div class="col-md-4 filter-right-main-head-left hidden">
                                <ul>
                                  <li><a href="#" data-toggle="tooltip" title="" data-original-title="Location"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="" data-original-title="Rating"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="" data-original-title="Mobile"><i class="fa fa-mobile" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="" data-original-title="Email"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            </div><!--fliter head end-->
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                              <p>Gender:<?php echo $row->gender;?></p> 
                              <p>Age: <?php echo get_age($row->dob);?> Years</p>
                              <p>Experience&nbsp;:&nbsp;<?php echo $row->experience;?> Year&nbsp;</p>
                              <p>Qualification&nbsp;:&nbsp;<?php echo $row->qualification;?></p>
                              <p>Teaches&nbsp;:&nbsp;<span><?php echo $row->subjects;?></span></p>
                              <p>Area&nbsp;:&nbsp;<?php echo $row->location;?>&nbsp;&nbsp;&nbsp;</p>
                                <p style="display:none" id='mydescreption<?php echo $row->user_id; ?>'><?php echo $row->user_id;?></p>
                                <p style="display:none" id="reqid"><?php echo $this->uri->segment(3);?></p>
                              <ul class="list-inline text-center">
                             
                                <li class="col-md-4">
                                  <a href="<?php echo base_url();?>frontend/tutor_profile_ctrl/<?php echo $row->user_id;?>" class="btn btn-red no-bod-rad f14 text-white">View profile</a></li>
                                  <li class="col-md-4">
                                  </li>
                                   <li class="col-md-4" style="display:none">
                                  <a href="#" class="btn btn-red text-white f14 no-bod-rad" onclick="populate_more('<?php echo $row->user_id;?>')" data-toggle="modal" data-target="#feedback_view">Feedback</a></li> 
                                    </ul>
                              <div class="clearfix"></div>
                              <ul class="list-inline">
                                  <li class="col-md-1"></li>
                                <li class="col-md-5" style="display:none"><a href="#" class="btn btn-default no-bod-rad" style="margin: 10px 0px;"><i class="fa fa-commenting-o" aria-hidden="true"></i>&nbsp;Send Enquiry</a></li>
                                <li class="col-md-5" style="display:none"><a href="#" class="btn btn-default no-bod-rad" style="margin: 10px 0px;"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Contact Tutor</a></li>
                                <div class="clearfix"></div>
                              </ul>
                              
                             
                            </div>

                            <div class="clearfix"></div>
                        </div>

                        <div class="clearfix"></div>
                      </div>

                        
                        <div class="clearfix"></div>
                      </div>
                      <?php $i++;
                       }
                             }else { ?>
                                <p style="text-align:center; color:red;font-size:20px;">Tutor Not Found...</p>
                            <?php } ?>
                           </div>
						    <div align="center">
               <?php echo $this->pagination->create_links(); ?></div>
          </div>
      </div>
    </div>
    <div class="clearfix">&nbsp;</div>
  </div>
      </section>
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
<!--feedback view-->
<div id="feedback_view" class="modal fade" role="dialog">
  <div class="modal-dialog"  style="font-family:MavenPro-Regular">
  <div class="modal-content">
    
      <div class="modal-header btn-blue text-white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-family:MavenPro-Regular">Feedback</h4>
      </div>
      <div class="modal-body">
         <p id="content-post" style="display:none"></p>
         <p id="req_post" style="display:none"></p>
       <form id="myform" action="" method="post">
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
           <div id="feedback_msg"></div>
           <div class="form-group col-sm-12 m-t-10">
               <label>Your Feedback is Valuble for us</label>
           <textarea class="form-control no-bod-rad" rows="5" id="feedback"></textarea>
           <label>Meeting</label>
           <select class="form-control" id="meeting" name="meeting">
            <option value="1">success</option>
            <option value="2">fail</option>
              </select>
           </div>
        
     </div>
    
      <div class="modal-footer text-center col-sm-12" style="border-top: none; text-align: center;">
        <button type="submit" class="btn btn-blue no-bod-rad text-white" id="feedback_submit" onclick="validate_feedback();">submit</button>
      </form>
          <button type="button" class="btn btn-red no-bod-rad text-white" data-dismiss="modal">Close</button>
      </div>
      <div class="clearfix">&nbsp;</div>
    </div>

  </div>
</div>
<?php $this->load->view('includes/modal.php'); ?>
 <div class="clearfix"></div>
 <?php $this->load->view('includes/footer.php'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/menu.js"></script>
     <script type="text/javascript">
 function  populate_more(id){
  $("#feedback_submit").prop('disabled',false);
var newss = $("#mydescreption"+id).text();
var req=$("#reqid").text();
  $("#content-post").html(newss);
  $("#req_post").html(req);
  $("#feedback_msg").html('');
  $("#feedback").val('');
   }
  
</script>
<script type="text/javascript">
</script>
<script type="text/javascript">
  $("#myform").on('submit',function(e){
   e.preventDefault();
  });
</script>
<script type="text/javascript">
  function validate_feedback(){

    str=true;
       var feedback=$('#feedback').val();
       var meeting=$('#meeting').val();
       var id=$("#content-post").text();
        var req_id=$("#req_post").text();
  if(feedback=="")
  {
    str=false;
    $("#feedback").css('border','1px solid red');
  }
  else
  {
    $("#feedback").css('border','');
  }
       if(str==true)
       {
      if(id!="" && feedback!="")
      {
      $.ajax({
                  dataType:'JSON',
                   method:'POST',
                   data:{"tutor_id":id,'feedback':feedback,'meeting':meeting,'req_id':req_id},                  
                   url:"<?php echo base_url(); ?>tutor/add_parent_feedback",
                    success:function(s){
                      if(s.code==200){
                        $("#feedback_msg").html(s.description).addClass('bg-success');
                         $("#feedback_submit").prop('disabled', true);
                      }
                      else if(s.code==422)
                      {
                         $("#feedback_msg").html(s.description).addClass('bg-info');
                         $("#feedback_submit").prop('disabled', true);
                      }
                      else{
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
    <script type="text/javascript">
  function viewtutor(id){
    if(id!="")
    {
      // alert('entered');
      $.ajax({
                  dataType:'JSON',
                   method:'POST',
                   data:{"postid":id},                  
                   url:"<?php echo base_url(); ?>Tutor/get_tutor_contact",
                    success:function(s){
                      console.log(s);
                      if(s.code==200){
                        var mypostdata = s.result;
                        console.log(mypostdata.email);
                        $("#noview").css('display','block');
                        $("#emaillead").html(mypostdata.email);
                        $("#mobilelead").html(mypostdata.mobile);
                         $("#messageleads").html('');
                      }else{
                        $("#messageleads").html(s.description);
                        $("#noview").css('display','none');
                        $("#emaillead").html('');
                        $("#mobilelead").html('');
                      }
                    },
                    error:function(er){
                      console.log(er);
                    },
      });
    }
  }
</script>
 
  </body>
</html>