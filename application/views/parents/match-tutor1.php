<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Itutors</title>

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
  </head>
  <body class="bg-wh">
  <?php $this->load->view('includes/header.php'); ?>
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
    <?php $this->load->view('parents/parent-sidebar'); ?>
      <div class="col-sm-10">
          <div class="col-sm-12 inner-bg">
              <div class="clearfix">&nbsp;</div>
           <h4><strong> Matching Tutor List</strong></h4>
          <hr>
          
            <div class="col-md-12 filter-right"><!--filter right start--> <?php
                  if(empty($msg))
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
                                <li class="col-md-5"><img src="<?php echo base_url();?>uploads/tutor_pic/<?php echo $row->photo;?>" alt="itutors"></li>
                                <li><h3><?php echo $row->name;?></h3>
                                    <p>ITUTOR<?php echo $i;?></p>
                                </li>
                                </ul>
                            </div>
                            <div class="col-md-4 filter-right-main-head-left">
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
                              <p>Age: <?php echo get_age($row->dob);?> Year's</p>
                              <p>Experience&nbsp;:&nbsp;<?php echo $row->experience;?>&nbsp;</p>
                              <p>Qualification&nbsp;:&nbsp;<?php echo $row->qualification;?></p>
                              <p>Teaches&nbsp;:&nbsp;<span><?php echo common_str($row->subjects);?></span></p>
                              <p>Area&nbsp;:&nbsp;<?php echo $row->location_name;?>&nbsp;&nbsp;&nbsp;</p>
                              <ul class="list-inline text-center">
                             
                                <li class="col-md-4">
                                  <a href="<?php echo base_url();?>frontend/tutor_profile_ctrl/<?php echo $row->user_id;?>" class="btn btn-red no-bod-rad f14 text-white">View profile</a></li>
                                  <li class="col-md-4">
                                <a href="#" class="btn btn-blue no-bod-rad f14 text-white" onclick="viewtutor(<?php echo $row->user_id; ?>)" data-toggle="modal" data-target="#myModalle <li class="col-md-4">
                                  <a href="#" class="btn btn-red text-white f14 no-bod-rad" data-toggle="modal" data-target="#feedback_view">Feedback</a></li> adsview">View contacts</a></li>
                                   <li class="col-md-4">
                                  <a href="#" class="btn btn-red text-white f14 no-bod-rad" onclick="populate_more('<?php echo $row->user_id; ?>')" data-toggle="modal" data-target="#feedback_view">Feedback</a></li> 
                                    </ul>
                              <div class="clearfix"></div>
                              <ul class="list-inline">
                                  <li class="col-md-1"></li>
                                <li class="col-md-5 col-xs-5"><a href="#" class="btn btn-default no-bod-rad" style="margin: 10px 0px;"><i class="fa fa-commenting-o" aria-hidden="true"></i>&nbsp;Send Enquiry</a></li>
                                <li class="col-md-5 col-xs-5"><a href="#" class="btn btn-default no-bod-rad" style="margin: 10px 0px;"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Contact Tutor</a></li>
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
                             }else{ echo 'No Data Found.'; } ?>
                           </div>
						    <?php echo $this->pagination->create_links(); ?>   
          </div>
      </div>
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
       
   
     <div class="table-responsive col-sm-12">
       <table class="table table-striped custab table-bordered">
    <thead>
    
        <tr>
           <th>Email</th>
            <th>Mobile</th>
        </tr>
    </thead>
            <tr>
                
                <td  id="emaillead">ddd</td>
                <td id="mobilelead">dddd</td>
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
  <div class="modal-dialog"  style="font-family: 'MavenPro-Regular';">
  <div class="modal-content">
      <div class="modal-header btn-blue text-white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-family: 'MavenPro-Regular';">Feedback</h4>
      
      </div>
      <div class="modal-body">
       <form id="parent_feedback" action="" method="post">
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
           
           <div class="form-group col-sm-12 m-t-10">
               <label>Your Feedback is Valuble for us</label>
           <textarea class="form-control no-bod-rad" rows="5" id="feedback"></textarea>
           </div>
        
     </div>
      <div class="modal-footer text-center col-sm-12" style="border-top: none; text-align: center;">
        <button type="submit" class="btn btn-blue no-bod-rad text-white" data-dismiss="modal" onclick="validate_feedback();">Submit</button>
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

  function validate_feedback{
    alert('hii');
       var feedback=$('#feedback').val();
      alert(feedback);
      $.ajax({
                  dataType:'JSON',
                   method:'POST',
                   data:{"tutor_id":id,'feedback':feedback},                  
                   url:"<?php echo base_url(); ?>Tutor/get_tutor_contact",
                    success:function(s){
                      console.log(s);
                      if(s.code==200){
                        var mypostdata = s.result;
                        console.log(mypostdata.email);
                        $("#emaillead").html(mypostdata.email);
                        $("#mobilelead").html(mypostdata.mobile);
                      }else{
                        $("#messageleads").html(s.description);
                          $("#emaillead").html('');
                        $("#mobilelead").html('');
                      }
                    },
                    error:function(er){
                      console.log(er);
                    },
      });
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
                        $("#emaillead").html(mypostdata.email);
                        $("#mobilelead").html(mypostdata.mobile);
                      }else{
                        $("#messageleads").html(s.description);
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