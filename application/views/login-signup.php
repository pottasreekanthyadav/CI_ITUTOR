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
<link rel="canonical" href="<?php echo base_url(); ?>signup"/>
<!-- Bootstrap -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"  />
<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
<!--custom css-->
  <link href="<?php echo base_url(); ?>assets/css/custom.css" type="text/css" rel="stylesheet"  />
 <!--menu-->
  <link href="<?php echo base_url(); ?>assets/css/menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/icomoon.css">
  <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .register .input-group .input-group-addon{border: 1px solid #ccc;border-right: none;}
/*      .register .input-group {padding: 9px 2px;} */
        .register .input-group {padding-top: 15px;}
        .register .input-group .form-control{height: 45px !important}
        .pad5{    padding: 5px 21px 6px 0px !important}
        .btn-label {border: 1px solid #fff;padding: 10px 10px}
        .btn-facebook { color: #fff!important;background-color: #3b5998!important;}
        .btn-googleplus { color: #fff!important;background-color: #dd4b39!important;}
        .bod-danger{border:1px solid #a94442 !important}
        .bod-success{border:1px solid green !important}
        .mt0{margin-bottom: 0px}

.x { color:#555 !important }
.y { color:#555 !important}
        .suggestions{list-style: none;background: #fff;width: 90%;margin: 0 1px;text-align: left;
    padding: 5px 6px;z-index: 9;border-radius: 5px;top: 58px;
    max-height: 150px;
    overflow: auto;
    width: 85%;
    position: absolute;
    box-shadow: 0px 2px 5px #ddd;
}


.suggestions li {
    color: #000;
    padding: 5px 8px;
    border-bottom: 1px dashed #aaa;
    cursor: pointer;
    text-align: center;
}
      </style>
  </head> 
  <body class="bg-wh">
 <?php $this->load->view('rentabook/includes/header_new.php'); ?>

   <div class="clearfix"></div>

  <section class="login-back"  style="background-image:url('<?php echo base_url();?>assets/images/login-back.jpg')">
        <div class="clearfix">&nbsp;</div>
      <div class="container">
          
          <div class="col-sm-offset-1">
                   <div class="col-sm-5 register overlay-bg">
        <h3 class="text-center col-wh">SignUp</h3>
     <!-- <form > -->
    <?php 
      if($msg=$this->session->flashdata('msg1'))
      {
        ?>
        <p style="color:red"><?php echo $msg;?></p>
        <?php
      }
    ?>
     <?php 
       $attr=array('onsubmit'=>'return validate_signup();');
      echo form_open('Registration/signup',$attr); ?>
      <div class="form-group">
          <select class="form-control form-trp" id="sel1" name="sel1" style="height:45px;border-radius: 0px; margin-top:24px;color: #fff" >
              <option value="0" selected="selected" disabled="disabled">Are you</option>
              <option  class="x" value="1" <?php echo set_select('sel1','1'); ?> >Tutor</option>
              <option class="y" value="2" <?php echo set_select('sel1','2'); ?> >Parent/Student</option>
          </select>
        <span class="text-danger"><?php echo form_error('sel1'); ?></span>
      </div>
    <div class="input-group">
      <span class="input-group-addon form-trp col-wh"><i class="glyphicon glyphicon-user"></i></span>
      <input id="name" type="text" class="form-control form-trp col-wh" name="name" placeholder="Name" value="<?php echo set_value('name'); ?>">
    </div> 
    <span class="text-danger"><?php echo form_error('name'); ?> </span>
    <div class="input-group">
      <span class="input-group-addon form-trp col-wh"><i class="glyphicon glyphicon-envelope"></i></span>
  <input id="email" type="text" class="form-control form-trp col-wh" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
</div>
<span class="email_error12"style="color:red"></span>
    <span class="text-danger"><?php echo form_error('email'); ?></span>
    <div class="input-group">
      <span class="input-group-addon form-trp col-wh"><i class="glyphicon glyphicon-earphone"></i></span>
      <input id="mobile" type="text" class="form-control mobile form-trp col-wh" name="mobile" placeholder="Mobile" value="<?php echo set_value('mobile');?>" maxlength="10">
    </div>
    <span class="mobile_error12" style="color:red"></span>
    <span class="text-danger"><?php echo form_error('mobile'); ?></span>
    <div class="input-group">
      <span class="input-group-addon form-trp col-wh"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control form-trp col-wh" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>">
     </div> 
      <span id="pwd_error" style="color:red"></span>
    <span class="text-danger"><?php echo form_error('password'); ?></span>
    <div class="input-group">
      <span class="input-group-addon form-trp col-wh"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="cpwd" type="password" class="form-control form-trp col-wh" name="cpwd" placeholder="Confirm Password" value="<?php echo set_value('cpwd'); ?>">
    </div>
     <span id="cpwd_error" style="color:red"></span>
    <span class="text-danger"><?php echo form_error('cpwd'); ?></span>
         <div class="clearfix">&nbsp;</div>
        <input type="submit" class="btn col-sm-6 col-sm-offset-3 btn-bg" value="Signup">
         <div class="clearfix">&nbsp;</div>        <div class="clearfix">&nbsp;</div>
  <!-- </form> -->
  <?php echo form_close(); ?>
          </div>  
 
          <div class="col-sm-5 col-sm-offset-1">
              <div class="text-center">
                   <div class="clearfix">&nbsp;</div>
           <img src="<?php echo base_url();?>assets/images/login-pay.png" style="width:100%" alt="logo" />
              <div class="clearfix">&nbsp;</div>
          </div>
              <div class="register overlay-bg col-sm-12">
                  <?php
      if($msg1=$this->session->flashdata('forgot_suc'))
      {
        ?>
        <p class="alert alert-success"><?php echo $msg1;?></p>
        <?php
      }
  ?>
   <?php
      if($msg=$this->session->flashdata('msg'))
      {
        ?>
        <p class="alert alert-danger"><?php echo $msg;?></p>
        <?php
      }
  ?>
                  <div class="clearfix">&nbsp;</div>
        <h3 class="text-center col-wh">Login</h3>
  <!-- <form> -->
  <?php 
      $attr=array('onsubmit'=>'return validate_login();');
      echo form_open('Registration/login',$attr);
  ?>
      <div>
          <div class="input-group">
            <span class="input-group-addon form-trp col-wh"><i class="glyphicon glyphicon-user"></i></span>
            <input id="login_email" type="text" class="form-control form-trp col-wh" name="login_email" placeholder="Email or Mobile" value="<?php $login_email=get_cookie('user_email'); if(!empty($login_email)) echo $login_email;?>">
          </div> 
          <div>
               <!--  <p class="text-success mt0">  &nbsp; Input with success</p>   -->
            
          </div>
          <div class="input-group">
              <span class="input-group-addon form-trp col-wh"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="login_password" type="password" class="form-control form-trp col-wh" name="login_password" placeholder="Password" value="<?php $login_pwd=get_cookie('user_pwd'); if(!empty($login_pwd)) echo $login_pwd;?>">
          </div>
          <!-- <p class="text-danger mt0">  &nbsp; Input with error</p>   -->
      </div>
      <div class="checkbox col-sm-6">
          <label class="col-wh"><input type="checkbox" name="remember" value="remember" <?php if(!empty($login_email)) echo "checked";?>>Remember me</label>
      </div> 
      <div class="col-sm-6">
         <a href="<?php echo base_url();?>user/forgot-request" style="margin-top:8px" class="col-wh"><h5>Forgot Password ?</h5></a></div>
         <div class="clearfix">&nbsp;</div>
         <input type="submit" name="login" class="btn col-sm-6 col-sm-offset-3 btn-bg" value="Login">
         <div class="clearfix">&nbsp;</div> <div class="clearfix">&nbsp;</div>
         <!-- <h5 class="text-center"> or login with...</h5> -->
          <div class="text-center">
               <!-- <a href="#" class="btn  btn-facebook" data-toggle="tooltip" title="" data-original-title="Login with Facebook">&nbsp;<i aria-hidden="true" class="fa fa-facebook"></i>&nbsp;</a> 
               <a href="#" class="btn btn-googleplus" data-toggle="tooltip" title="" data-original-title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a> -->
          </div>
          <div class="clearfix">&nbsp;</div>
  <!-- </form> -->
  <?php echo form_close(); ?>
              </div>
      </div>
                 
      <div class="clearfix">&nbsp;</div>     <div class="clearfix">&nbsp;</div>     
      </div>
      </div>
        <div class="clearfix">&nbsp;</div>   <div class="clearfix">&nbsp;</div> 
      </section>
  <!--section signup end-->
      <?php $this->load->view('includes/modal'); ?>
 <div class="clearfix"></div>
 <?php $this->load->view('includes/footer'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/menu.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/validator.js"></script>

<script src="<?php echo base_url();?>assets/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript">
   $("#email").focusout(function(){
    var email=$("#email").val();
    if(email!="")
    {
    $.ajax({
          dataType:'text',
          type:'post',
          data:{'condition':'email','data':email,'table':'rl_users_tbl'},
          url:'<?php echo base_url();?>frontend/common_check_existence',
          success:function(res){
            $(".email_error12").html(res);
          },
          error:function(res){
            console.log(res);
          }
  });
}
  });
   $(".mobile").focusout(function(){
    var mobile=$(".mobile").val();
    if(mobile!="")
    {
    $.ajax({
          dataType:'text',
          type:'post',
          data:{'condition':'mobile','data':mobile,'table':'rl_users_tbl'},
          url:'<?php echo base_url();?>frontend/common_check_existence',
          success:function(res){
            $(".mobile_error12").html(res);
          },
          error:function(res){
            console.log(res);
          }
  });
}
  }); 
</script>
<script type="text/javascript">
  function validate_signup()
  {
      flag=true;
      var name_pattern=/^[a-zA-z. ]*$/;
       var email_pattern=/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
      var mobile_pattern=/^[6-9]{1}[0-9]{9}$/;
      var sel1=$('#sel1').val();

      if(sel1==null)
      {
          flag=false;
          $('#sel1').css("cssText", "border-bottom: 1px solid red !important;color:#fff;");
      }
      else
      {
          $('#sel1').css("cssText", "color:#fff");
      }
      var name=$('#name').val().trim();
     if(name=="" || (name!="" && !name_pattern.test(name)))
      {
          flag=false;
          $('#name').css("cssText", "border-bottom: 1px solid red !important;");
      }
      else
      {
          $('#name').css("cssText","");
      }
      var email=$('#email').val().trim();
      var email_error=$('.email_error12').html();
    if(email=="" || email_error.length>10 || !email_pattern.test(email))
      {
          flag=false;
          $('#email').css("cssText", "border-bottom: 1px solid red !important;");
      }
      else
      {
          $('#email').css("cssText","");
      }
      var mobile=$('#mobile').val();
       var mobile_error=$('.mobile_error12').html();
       // alert(mobile_error.length);
if(mobile=="" ||mobile.length< 10 ||mobile_error.length>10 || 
  !mobile_pattern.test(mobile))
      {
          flag=false;
          $('#mobile').css("cssText", "border-bottom: 1px solid red !important;");
      }
      else
      {
          $('#mobile').css("cssText", "");
      }
      var password=$('#password').val().trim();
      if(password=="")
      {
          flag=false;
          $('#password').css("cssText", "border-bottom: 1px solid red !important;");
      }
      else if(password!="" && password.length<6)
      {
          flag=false;
          $('#password').css("cssText", "border-bottom: 1px solid red !important;");
           $('#pwd_error').html('Password length should be atleast 6 character');
      }
      else
      {
          $('#password').css("cssText","");
           $('#pwd_error').html('');
      }
      var cpwd=$('#cpwd').val().trim();
      if(cpwd=="")
      {
          flag=false;
          $('#cpwd').css("cssText","border-bottom: 1px solid red !important;");
      }
       else if(cpwd!="" && cpwd!=password)
      {
          flag=false;
          $('#cpwd').css("cssText", "border-bottom: 1px solid red !important;");
          $('#cpwd_error').html("Password do not match");
      }
      else
      {
         $('#cpwd').css("cssText","");
          $('#cpwd_error').html('');
      }
   return flag;
  }
function validate_login()
  { 

   var email_pattern=/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
     var mobile_pattern=/^[6-9]{1}[0-9]{9}$/;
      var flag=true;
      var logindata=$('#login_email').val().trim();
      var login_pwd=$("#login_password").val().trim();
      if(logindata=="")
      {
        flag=false;
        $("#login_email").css("cssText", "border-bottom: 1px solid red !important;");
      }
      else
      {
         $("#login_email").css("cssText", "");
      }
     
     if(logindata!=""){

      //alert(isNumeric(username));
       if($.isNumeric(logindata)==true){
              if (mobile_pattern.test(logindata)==false){
                     flag=false;
                        $("#login_email").css("cssText", "border-bottom: 1px solid red !important;");
               }
               else
               {
                $("#login_email").css("cssText","");
               }
     }else{
       if (email_pattern.test(logindata)==false){
                       flag=false;
                        $("#login_email").css("cssText", "border-bottom: 1px solid red !important;");
                       }
                       else{
                        $("#login_email").css("cssText","");
                       }
     }
     
   }
   
      if(login_pwd=="")
      {
          flag=false;
          $("#login_password").css("cssText", "border-bottom: 1px solid red !important;");
      }
      else
      {
        $("#login_password").css("cssText", "");
      }
      return flag;
  }
</script>
<script type="text/javascript">
   function documentReady() {
  var selectedItem = $('#theSelect :selected');
  $('#theSelect').css('color', selectedItem.css('color'));
  
  $('#theSelect').change(function() {
    var selectedItem = $(this).find("option:selected");
    $(this).css('color', selectedItem.css('color'));
  });
}
                   
jQuery(document).ready(documentReady);

</script>
  </body>
</html>