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
<link rel="canonical" href="<?php echo base_url(); ?>otp"/>
<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
<!-- Bootstrap -->
<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"  />
<!--custom css-->
  <link href="<?php echo base_url(); ?>/assets/css/custom.css" type="text/css" rel="stylesheet"  />
 <!--menu-->
  <link href="<?php echo base_url(); ?>/assets/css/menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/icomoon.css">
  <link href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css" rel="stylesheet" />
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
      </style>
  </head>
  <body class="bg-wh">
   <?php $this->load->view('includes/header.php'); ?>
   <div class="clearfix"></div>
   <section>
       <div class="col-md-12 signbread">
           <div class="col-md-12 signbread-main">
               <div class="container">
                   <h4>Account verification</h4>
                   <h5>Take your Tutoring Career to a higher level with <?php echo TITLE_PATH;?></h5>
               </div>
           </div>
           <div class="clearfix"></div>
            <div class="container hidden">
           <h2>Fill the form below&nbsp;:</h2>
           <h3>All below are mandatory.<sup>**</sup></h3>
           </div></div>

      </section>
  <!--section signup start-->
  <section>
     <div class="bg-back container-fluid"  style="background-image:url('<?php echo base_url();?>assets/images/bg-back.jpg')">
        <div class="clearfix">&nbsp;</div>
          <div class="container">
              <div class="col-sm-offset-3">
                 <div class="clearfix">&nbsp;</div>
                <div class="col-sm-8 register inner-bg">
                  <h3 class="text-center">OTP Verification</h3>
                <?php  $msg=$this->session->flashdata('suc_msg');?>
                  <div class="alert alert-success "id="message"><?php if(!empty($msg)) echo $msg;?> </div>
                    <!-- <form > -->
                     <?php
                       $attr=array('onsubmit'=>'return validate_otp();');
                      echo form_open('Registration/check_otp',$attr); ?>

                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input id="otp" type="text" class="form-control" name="otp" placeholder="Enter Your OTP" value="<?php echo set_value('otp'); ?>">
                    </div>
                    <span class="text-danger"><?php echo form_error('otp'); ?> </span>

                    <div class="clearfix">&nbsp;</div>
                      <input type="submit" class="btn col-sm-6 btn-bg"  id="verify" value="Verify OTP">
                     <a href="#" onclick="send_otp();" style="margin-top:5px" class="pull-right col-sm-5">Resend OTP</a>
                          <div class="clearfix">&nbsp;</div>        <div class="clearfix">&nbsp;</div>
                          <!-- </form> -->
                          <?php echo form_close(); ?>
                </div>      <div class="clearfix">&nbsp;</div>   <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>

              </div>
   <div class="clearfix">&nbsp;</div>
            </div>
          </div>
      </section>
  <!--section signup end-->
      <?php $this->load->view('includes/modal.php'); ?>
 <div class="clearfix"></div>
 <?php $this->load->view('includes/footer.php'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/menu.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/validator.js"></script>

  </body>
</html>
<script src="<?php echo base_url();?>assets/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript">
  function validate_otp()
  {
      //alert('hiiiiiii');
      flag=true;

      var otp=$('#otp').val();
      if(otp=="")
      {
          flag=false;
          $('#otp').css('border','1px solid red');
      }
      else
      {
          $('#otp').css('border','1px solid green');
      }

      return flag;
  }

</script>
<script type="text/javascript">
   function send_otp(){
    {
      $.ajax({
                  dataType:'JSON',
                   method:'POST',
                   url:"<?php echo base_url(); ?>registration/resend_otp",
                    success:function(s){
                      console.log(s);
                      if(s.code==200){
                   $('#message').show();$('#message').html(s.description);
                      }
                      else
                      {
                         $('#message').hide();$('#message').html('');
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
  $(document).ready(function(){
    $('#otp').keypress(function(e){
      if(e.keyCode==13)
      $('#verify').click();
    });
});
</script>
