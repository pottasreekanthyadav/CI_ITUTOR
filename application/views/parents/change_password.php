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
<link rel="canonical" href="<?php echo base_url(); ?>parent/change-password" />

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
        .pv-lg {padding-top: 15px!important;padding-bottom: 15px!important;}
        .mt0{margin-top: 0px}
        .side-menu ul li a{color: #fff; font-size: 13px;text-decoration: none}
        .mt9{margin-top: 9px}
        .bootstrap-tagsinput { border: 1px solid #e4e7ea;border-radius: 0px; box-shadow: none; display: block; padding: 7px 12px;}
        .labell-bg {background: #fff;color: #bbb;border: 1px solid;}
        .btn-bg{background-color: #ed3f40;color: #fff}
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
 <?php $this->load->view("parents/parent-sidebar"); ?>
      <div class="col-sm-10">
          <div class="col-sm-12 inner-bg no-padd m-t-10">
           
           <h4 class="title-hd"><strong> Change Password</strong></h4>
     
          
          <div class="col-sm-offset-2">
           <!-- <form > -->
    <?php 
        if($msg=$this->session->flashdata('msg'))
        {
          ?>
          <span class="<?php echo $this->session->flashdata('text_color'); ?>"><?php echo $msg; ?></span>
          <?php
        }
    ?>
    <?php
    $attr=array('onsubmit'=>'return validate_change_password();');
    echo form_open('parents/Parent_ctrl/change_password',$attr);
    ?>
    <div class="form-group col-sm-8">
        <div class="clearfix">&nbsp;</div>
      <label class="control-label" for="email">Current Password:</label>
      <input type="password" class="form-control no-bod-rad" id="old_pwd"  name="old_pwd" value="<?php echo set_value('old_pwd'); ?>">
      <span class="text-danger"><?php echo form_error('old_pwd'); ?></span>
    </div>
    
    <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
              
    <div class="form-group col-sm-8">
      <label class="control-label" for="email">New Password:</label>
      <input type="password" class="form-control no-bod-rad" id="new_pwd" name="new_pwd" value="<?php echo set_value('new_pwd'); ?>">
      <span class="text-danger"><?php echo form_error('new_pwd'); ?></span>
      <span id="newpwd_error" style="color:red"></span>
    </div> 
    <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
    <div class="form-group col-sm-8">
      <label class="control-label" for="email">Confirm Password:</label>
      <input type="password" class="form-control no-bod-rad " id="confirm_pwd"  name="confirm_pwd" value="<?php echo set_value('confirm_pwd'); ?>">
      <span class="text-danger"><?php echo form_error('confirm_pwd'); ?></span>
      <span id="cnf_error" style="color:red"></span>
    </div>
               <div class="clearfix">&nbsp;</div>
  <div class="form-group">      
       <div class="clearfix">&nbsp;</div>
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-bg col-sm-4 no-bod-rad" name="btn_change_password">Update</button>
      </div>
           <div class="clearfix">&nbsp;</div>
    </div>
  <!-- </form> -->
          <?php echo form_close(); ?>
          </div>
          </div>
      </div>
    </div>
    <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
  </div>
      </section>
  <!--section dashboard end-->
  <?php $this->load->view('includes/modal.php'); ?>
 <div class="clearfix"></div>
 <?php $this->load->view('includes/footer.php'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/menu.js"></script>

  </body>
</html>
<script src="<?php echo base_url();?>assets/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript">
  function validate_change_password()
  {
    //alert('welcome');
    var flag=true;
    var old_pwd=$('#old_pwd').val();
    if(old_pwd=="")
    {
        flag=false;
        $('#old_pwd').css('border','1px solid red');
    }
    else
    {
        $('#old_pwd').css('border','1px solid green');
    }
    var new_pwd=$('#new_pwd').val();
    if(new_pwd=="")
    {
        flag=false;
        $('#new_pwd').css('border','1px solid red');
    }
    else
    {
        $('#new_pwd').css('border','1px solid green');
    }
    if(new_pwd!=""&& old_pwd!="" && new_pwd==old_pwd)
    {
      flag=false;
      $("#new_pwd").css("border","1px solid red");
      $("#newpwd_error").html("new password should be different");
    }
    else
    {
      $("#newpwd_error").html("");
    }
    var confirm_pwd=$('#confirm_pwd').val();
    //alert(confirm_pwd);
    if(confirm_pwd=="")
    {
        flag=false;
        $('#confirm_pwd').css('border','1px solid red');
    }
    else
    {
        $('#confirm_pwd').css('border','1px solid green');
    }
    if(confirm_pwd !="" && new_pwd!=confirm_pwd)
    {
        flag=false;
        $('#confirm_pwd').css('border','1px solid red');
        $('#cnf_error').html("password do not match");
    }
    else
    {
         $('#cnf_error').html("");
    }

    return flag;
  }
</script>