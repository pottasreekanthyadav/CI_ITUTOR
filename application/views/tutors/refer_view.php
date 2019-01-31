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
<link rel="canonical" href="<?php echo base_url(); ?>tutor/refer" />
<!-- Bootstrap -->
<link href="<?php echo MYCSS_PATH;?>bootstrap.min.css" type="text/css" rel="stylesheet"  />
<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
<!--custom css-->
  <link href="<?php echo MYCSS_PATH;?>custom.css" type="text/css" rel="stylesheet"  />
 <!--menu-->
  <link href="<?php echo MYCSS_PATH;?>menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo MYCSS_PATH;?>icomoon.css">
  <link href="<?php echo MYCSS_PATH;?>font-awesome.min.css" rel="stylesheet" />
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
        .pad5{padding: 5px 21px 6px 0px !important}
        .btn-label {border: 1px solid #fff;padding: 10px 10px}
        .btn-facebook { color: #fff!important;background-color: #3b5998!important;}
        .btn-googleplus { color: #fff!important;background-color: #dd4b39!important;}
        .mt0{margin-top: 0px}
        .side-menu ul li a{color: #fff; font-size: 13px;text-decoration: none}
        .mt9{margin-top: 9px}
        .bootstrap-tagsinput { border: 1px solid #e4e7ea;border-radius: 0px; box-shadow: none; display: block; padding: 7px 12px;}
        .labell-bg {background: #fff;color: #bbb;border: 1px solid;}
        .btn-bg{background-color: #ed3f40;color: #fff}
      </style>
  </head>
  <body class="bg-wh">
   <?php $this->load->view('includes/header.php'); ?>
   <div class="clearfix"></div>
<!--section dashboard start-->
 <section>
    <div class="bg-back container-fluid"  style="background-image:url('<?php echo base_url();?>assets/images/bg-back.jpg')">
      <div class="container">
      <?php $this->load->view("tutors/tutor-dash-sidebar");?>

      <div class="col-sm-10">
          <div class="col-sm-12 inner-bg no-padd m-t-10">
         <h4 class="title-hd"><strong>Refer a Friend</strong></h4>
      <div class="col-sm-12">
            <?php if($this->session->flashdata('refer_msg')) { ?>
                                <div class="alert alert-success" id="temp">
                                <?php echo $this->session->flashdata('refer_msg'); ?>
                                </div>
                                <?php } ?>
                                 <?php if($this->session->flashdata('refer_fail_msg')) { ?>
                                <div class="alert alert-danger">
                                <?php echo $this->session->flashdata('refer_fail_msg'); ?>
                                </div>
                                <?php } ?>
           <form class="form-horizontal" method="post" action="<?php echo base_url();?>frontend/tutor_refer_ctrl">
    <div class="form-group">
      <div class="col-sm-8 col-sm-offset-2">
               <div class="clearfix">&nbsp;</div>
        <label>Subject</label>
        <input type="text" class="form-control no-bod-rad" id="subject" placeholder="Enter subject" name="subject">
        <?php echo form_error('subject');?>
      </div>
      <div class="col-sm-8 col-sm-offset-2">
               <div class="clearfix">&nbsp;</div>
        <label for="msg">Message</label>
        <textarea class="form-control no-bod-rad" rows="3" style="resize:none" name="msg" id="msg"></textarea>
<!--
          <div class="form-group col-sm-12">
  <label for="comment">Comment:</label>
  <textarea class="form-control no-bod-rad" rows="3" name="msg" id="msg"></textarea>
</div>
-->
    </div>
      <div class="col-sm-8 col-sm-offset-2">
               <div class="clearfix">&nbsp;</div>
        <label>Your friend's Email</label>
     <input type="text" name="to_email" id="to_email" placeholder="Enter your friend's email" class="form-control no-bod-rad">
     <?php echo form_error('to_email');?>
    </div>

   
     
      <div class="col-sm-offset-5 col-sm-7">
            <div class="clearfix">&nbsp;</div>
        <button type="submit" class="btn btn-bg no-bod-rad col-sm-4 " name="send">Refer</button>
               <div class="clearfix">&nbsp;</div>     <div class="clearfix">&nbsp;</div>
      </div>
               </div></form>
              </div></div></div></div>
          <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>
         </div>
      </section>
  <!--section dashboard end-->
      <?php $this->load->view('includes/modal.php'); ?>
 <div class="clearfix"></div>
 <?php $this->load->view('includes/footer.php'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo MYJS_PATH;?>/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo MYJS_PATH;?>/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo MYJS_PATH;?>/menu.js"></script>

  </body>
</html>
<script type="text/javascript">
  $("form").submit(function(){
    var flag=true;
    var subject=$("#subject").val().trim();
    var email=$("#to_email").val().trim();
    email_pattern=/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
       if(subject=="")
      {
          flag=false;
          $('#subject').css('border','1px solid red');
      }
      else
      {
          $('#subject').css('border','1px solid green');
      }
       if(email=="" || !email_pattern.test(email))
      {
          flag=false;
          $('#to_email').css('border','1px solid red');
      }
      else
      {
          $('#to_email').css('border','1px solid green');
      }
      return flag;

});
</script>