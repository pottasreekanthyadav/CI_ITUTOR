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
<link rel="canonical" href="<?php echo base_url(); ?>user/forgot-request" />
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
/*
        .btn-label {border: 1px solid #fff;padding: 10px 10px}
        .btn-facebook { color: #fff!important;background-color: #3b5998!important;}
        .btn-googleplus { color: #fff!important;background-color: #dd4b39!important;}
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
        .pv-lg {padding-top: 15px!important;padding-bottom: 15px!important;}
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
        <div class="clearfix">&nbsp;</div>

      <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-12 inner-bg no-padd">
           <h4 class="title-hd"><strong>Find Your Account</strong></h4>

          <div class="col-sm-offset-2">
           <!-- <form > -->
    <?php $msg=$this->session->flashdata('forgot_msg');
          $fail_msg=$this->session->flashdata('forgot_fail_msg');
    ?>
    <?php if(!empty($msg)){ ?>
<div class="alert alert-success"><?php echo $msg;?></div>
<?php } ?>
<?php if(!empty($fail_msg)){ ?>
<div class="alert alert-danger"><?php echo $fail_msg;?></div>
<?php } ?>
    <?php
    $attr=array('onsubmit'=>'return validate_forgot();');
    echo form_open('frontend/forgot_pwd_ctrl',$attr);
    ?>
    <div style="color:red"><?php if(!empty($avail_msg)) echo $avail_msg;?></div>
    <div id="forgot_email_error" style="color:red"></div>
    <div class="form-group col-sm-9">
        <div class="clearfix">&nbsp;</div>
      <label class="control-label" for="email">Enter Your Email:</label>
      <input type="text" class="form-control no-bod-rad" id="forgot_email"  name="forgot_email" value="<?php echo set_value('forgot_email'); ?>">
      <span class="text-danger"><?php echo form_error('forgot_email'); ?></span>
   <span id="fgt_error" style="color:red"></span>&nbsp;&nbsp;&nbsp;
    </div>
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-bg col-sm-4" name="update">Submit</button>
      </div>
           <div class="clearfix">&nbsp;</div> <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>
    </div>
  <!-- </form> -->
          <?php echo form_close(); ?>
          </div>
          <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
          </div>
      </div>
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
  function validate_forgot()
  {
    //alert("hii");
    var str=true;
     var email_pattern=/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
    var email=$("#forgot_email").val();
    var forgot_email_error=$("#forgot_email_error").html();
    //alert(forgot_email_error);
        //alert(email);
    if(email=="" || !email_pattern.test(email) || forgot_email_error!="")
    {
      str=false;
      $("#forgot_email").css("border","1px solid red");
    }
    else
    {
      $("#forgot_email").css("border","1px solid green");
    }

    return str;
  }

</script>
<!-- <script type="text/javascript">
   $("#forgot_email").change(function(){
    var email=$("#forgot_email").val();
    if(email!="")
    {
    $.ajax({
          dataType:'text',
          type:'post',
          data:{'condition':'email','data':email,'table':'rl_users_tbl'},
          url:'<?php echo base_url();?>frontend/common_check_existence',
          success:function(res){
            $("#forgot_email_error").html("you may proceed");
          },
          error:function(res){
            console.log(res);
          }
  });
}
  });
  </script> -->
