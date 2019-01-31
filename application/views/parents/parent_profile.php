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
 <link rel="canonical" href="<?php echo base_url(); ?>parent/profile"/>
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
      <?php $this->load->view("parents/parent-sidebar");?>
      <div class="col-sm-10">
          <div class="col-sm-12 inner-bg no-padd m-t-10">
           
           <h4 class="title-hd"><strong>My Profile</strong></h4>
 
          <div class="col-sm-12">
            <?php if($this->session->flashdata('success')) { ?>
                                <div class="alert alert-success" id="temp">
                                <?php echo $this->session->flashdata('success'); ?>
                                </div>
                                <?php } ?>
           <form class="form-horizontal" method="post" action="<?php echo base_url();?>parent/profile">
    <div class="form-group">
        <div class="clearfix">&nbsp;</div>
         <div style="color:red"><?php if(!empty($error)) echo $error;?></div>
        <span id="error" style="color:red"></span>
      <label class="control-label col-sm-2 col-sm-offset-1" for="email">Mobile No:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control no-bod-rad" id="mobile" placeholder="Enter mobile no." name="mobile" value="<?php if(!empty($parent_data)) echo $parent_data->mobile;?>" maxlength="10">
        <span class="mobile_error" style="color:red"></span>
        <?php echo form_error('mobile');?>
<span style="color:red" id="server_mobile_error"><?php if(!empty($mobile_check)) echo $mobile_check;?>
  <?php if(!empty($mobile_pattern)) echo $mobile_pattern;?>
</span>
      </div>
    </div>
               <div class="clearfix">&nbsp;</div>
               <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-1" for="email">Email:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control no-bod-rad" id="email" placeholder="enter email id" name="email" value="<?php if(!empty($parent_data)) echo $parent_data->email;?>">
     <span class="email_error" style="color:red"></span>
     <?php echo form_error('email');?>
      <span style="color:red" id="server_email_error"><?php if(!empty($email_check)) echo $email_check;?><?php if(!empty($email_pattern)) echo $email_pattern;?></span>
      </div>
    </div>
         
    <div class="form-group">      
       <div class="clearfix">&nbsp;</div>
      <div class="col-sm-offset-5 col-sm-7">
        <button type="submit" class="btn btn-bg no-bod-rad col-sm-4" name="update">Update</button>
      </div>
         <div class="clearfix">&nbsp;</div>
    </div>
  </form>
          
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
    <script src="<?php echo MYJS_PATH;?>/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo MYJS_PATH;?>/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo MYJS_PATH;?>/menu.js"></script>

  </body>
</html>
<!-- <script type="text/javascript">
   $("#email").focusout(function(){
    var email=$("#email").val().trim();
    if(email!="")
    {
    $.ajax({
          dataType:'text',
          type:'post',
          data:{'condition':'email_update','data':email,'table':'rl_users_tbl'},
          url:'<?php echo base_url();?>frontend/common_check_existence',
          success:function(res){
            $(".email_error").html(res);
          },
          error:function(res){
            console.log(res);
          }
  });
}
  });
   $("#mobile").focusout(function(){
    var mobile=$("#mobile").val().trim();
    if(mobile!="")
    {
    $.ajax({
          dataType:'text',
          type:'post',
          data:{'condition':'mobile_update','data':mobile,'table':'rl_users_tbl'},
          url:'<?php echo base_url();?>frontend/common_check_existence',
          success:function(res){
            $(".mobile_error").html(res);
          },
          error:function(res){
            console.log(res);
          }
  });
}
  }); 
  </script> -->
  <script type="text/javascript">
    $("form").submit(function(){
      str=true;
       $("#server_email_error").html('');
        $("#server_mobile_error").html('');
      var email=$("#email").val().trim();
      var mobile=$("#mobile").val().trim();
      var email_error=$(".email_error").text().trim();
      var mobile_error=$(".mobile_error").text().trim();
      var email_pattern=/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
      var mobile_pattern=/^[6-9]{1}[0-9]{9}$/;
      if(email!="" && (email_error.length>2 || !email_pattern.test(email)))
      {
        str=false;
        $("#email").css('border','1px solid red');
      }
   else if(mobile!="" && (mobile_error.length>2 || !mobile_pattern.test(mobile)))
      {
        str=false;
        $("#mobile").css('border','1px solid red');
      }
         else if(mobile=="" && email=="")
      {
        str=false;
        $("#error").html('Please Enter Email or Mobile No.');
        $("#mobile").css('border','1px solid red');
        $("#email").css('border','1px solid red');
      }
        else
        {
          $("#error").html('');
            $("#mobile").css('border','');
           $("#email").css('border','');
        }

        return str;
    });
    
  </script>