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
<!-- Bootstrap -->
<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
<link href="<?php echo MYCSS_PATH;?>bootstrap.min.css" type="text/css" rel="stylesheet"  />
<!--custom css-->
  <link href="<?php echo MYCSS_PATH;?>custom.css" type="text/css" rel="stylesheet"  />
 <!--menu-->
  <link href="<?php echo MYCSS_PATH;?>menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo MYCSS_PATH;?>icomoon.css">
  <link href="<?php echo MYCSS_PATH;?>font-awesome.min.css" rel="stylesheet" />
      
    <style>
        .register .input-group .input-group-addon{border: 1px solid #ccc;border-right: none;}
        .register .input-group {padding: 9px 2px;}
        .register .input-group .form-control{height: 45px !important}
        .pad5{    padding: 5px 21px 6px 0px !important}
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
    <?php //echo validation_errors();?>
   <?php $this->load->view('includes/header'); ?>
   <div class="clearfix"></div>

  <!--section dashboard start-->
 <section>
      <div class="bg-back container-fluid"  style="background-image:url('<?php echo base_url();?>assets/images/bg-back.jpg')">
      <div class="container">
      <?php $this->load->view("tutors/tutor-dash-sidebar");?>

      <div class="col-sm-10">
          <div class="col-sm-12 inner-bg no-padd m-t-10">
   <?php 
   //print_r($mailaddress);exit;
            $success = $this->session->flashdata('success');
            if(!empty($success)){
            echo '<p class="alert alert-success">'.$success.'</p>'; 
                } 
                 ?>
  <?php  
  $fail =$this->session->flashdata('failure');
  if(!empty($fail)){
    echo '<p class="alert alert-danger">'.$fail.'</p>';
     }
  ?>
           <h4 class="title-hd"><strong>Delivery Address</strong><a href="<?php echo base_url(); ?>tutor/edit_mailing_address" class="btn btn-blue col-wh pull-right no-bod-rad" style="margin-top: -7px"> Edit </a></h4>
           
          <div class="col-sm-10 col-sm-offset-1">
            <?php echo form_open('',array('id'=>'fromdelivery','name'=>'fromdelivery')); ?>
                <div class="clearfix">&nbsp;</div>
              <div class="form-group col-sm-6">
                <label> Name </label>
                <input type="text" name="recivername" id="recivername" class="form-control no-bod-rad" placeholder="Enter Name" maxlength="100" value="<?php echo $mailaddress->name; ?>" readonly>
                <span><?php echo form_error('recivername'); ?></span>
              </div>
               <div class="form-group col-sm-6">
                <label> Name on card </label>
                <input type="text" name="nameoncard" id="nameoncard" class="form-control no-bod-rad" placeholder="Enter Name on card" autocomplete="off" value="<?php echo $mailaddress->nameoncard; ?>" readonly>
                 <span><?php echo form_error('country'); ?></span>

                            
              </div>
              <div class="clearfix">&nbsp;</div>
                <div class="form-group col-sm-6">
                <label> Mobile </label>
                <input type="text" name="recivermobile" id="recivermobile"  class="form-control no-bod-rad" placeholder="Enter Mobile" autocomplete="off" maxlength="10"  value="<?php echo $mailaddress->mobile; ?>" readonly>
                <span><?php echo form_error('recivermobile'); ?></span>
              </div>
                <div class="form-group col-sm-6">
                <label> Email </label>
                <input type="text" name="reciveremail" id="reciveremail" class="form-control no-bod-rad" placeholder="Enter Email" autocomplete="off"  value="<?php echo $mailaddress->email; ?>" readonly>
                <span><?php echo form_error('reciveremail'); ?></span> 
              </div>
                <div class="clearfix">&nbsp;</div>
               <div class="form-group col-sm-6">
                <label> State </label>
                <input type="text" name="state" id="state" class="form-control no-bod-rad" placeholder="Enter State" autocomplete="off" maxlength="100" value="<?php echo $mailaddress->state; ?>" readonly>
                <span><?php echo form_error('state'); ?></span>
              </div>
               <div class="form-group col-sm-6">
                <label> City/District </label>
                <input type="text" id="city" name="city" class="form-control no-bod-rad" placeholder="Enter City/District" autocomplete="off" maxlength="100" value="<?php echo $mailaddress->city; ?>" readonly>
                <span><?php echo form_error('city'); ?></span>
              </div>
                <div class="clearfix">&nbsp;</div>
                <div class="form-group col-sm-6">
                   <label> Pincode </label>
                <input type="text" name="pincode" id="pincode" class="form-control no-bod-rad" placeholder="Enter Pincode" autocomplete="off" minlength="6" maxlength="6"  value="<?php echo $mailaddress->pincode; ?>" readonly>
                <span><?php echo form_error('pincode'); ?></span>
              </div>
              <div class="form-group col-sm-6">
               <label> Landmark </label>
                <input type="text" name="landmark" id="landmark" class="form-control no-bod-rad" placeholder="Enter Landmark" autocomplete="off" maxlength="100" value="<?php echo $mailaddress->landmark; ?>" readonly>
                <span><?php echo form_error('landmark'); ?></span>
              </div>
                <div class="clearfix">&nbsp;</div>
               <div class="form-group col-sm-12">
                <label> Address </label>
                <textarea class="form-control no-bod-rad" id="address" name="address" rows="3" placeholder="Enter address" readonly><?php echo $mailaddress->address; ?></textarea> 
                 <span><?php echo form_error('address'); ?></span>
              </div>
               <div class="clearfix">&nbsp;</div>
              <div class="col-sm-12 text-center">
                <a class="btn btn-blue no-bod-rad col-wh" href="<?php echo base_url(); ?>payment/2"> &nbsp;  Proceed to pay &nbsp; </a>
              </div>
               <div class="clearfix">&nbsp;</div>
             <?php echo form_close(); ?>
              </div>
            </div>
          </div>
        </div>
            <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
     </div>
          </section>
                <!--section dashboard end-->
      <?php $this->load->view('includes/modal'); ?>
 <div class="clearfix"></div>
 <?php $this->load->view('includes/footer'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--    <script src="<?php echo MYJS_PATH;?>/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo MYJS_PATH;?>/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo MYJS_PATH;?>/menu.js"></script>
      
 <script type="text/javascript">
      function navigate_now(){
        location.href="<?php base_url();?>payment/1";
      }
    </script>
  </body>
</html>
<script type="text/javascript">
    $("#fromdelivery").on("submit",function(){
      var flag =true;
    var patternmobile =/^[6-9]{1}[0-9]{9}$/;
    var patternemail =/^[a-zA-Z0-9][a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    var patternname =/^[A-Za-z ]*$/;
    var patternpincode =/^[1-9]{1}[0-9]{5}$/;
    //var patterngmap =/^[A-Za-z ,#-:]*$/;
    var recivername = $("#recivername").val().trim();
    var reciveremail = $("#reciveremail").val().trim();
    var recivermobile = $("#recivermobile").val().trim();
    var city = $("#city").val().trim();
    var pincode = $("#pincode").val().trim();
    var state = $("#state").val().trim();
    var landmark = $("#landmark").val().trim();
    var country = $("#country").val().trim();
    var address = $("textarea#address").val();
    if(recivername=="" || recivername==0){
      flag =false;
      $("#recivername").css('border','1px solid red');
    }else{
      $("#recivername").css('border','');
    }
    if(reciveremail=="" || reciveremail==0){
      flag =false;
      $("#reciveremail").css('border','1px solid red');
    }else{
      $("#reciveremail").css('border','');
    }
    if(recivermobile=="" || recivermobile==0){
      flag =false;
      $("#recivermobile").css('border','1px solid red');
    }else{
      $("#recivermobile").css('border','');
    }
    if(city=="" || city==0){
      flag =false;
      $("#city").css('border','1px solid red');
    }else{
      $("#city").css('border','');
    }
    if(pincode=="" || pincode==0){
      flag =false;
      $("#pincode").css('border','1px solid red');
    }else{
      $("#pincode").css('border','');
    }
    if(state=="" || state==0){
      flag =false;
      $("#state").css('border','1px solid red');
    }else{
      $("#state").css('border','');
    }
    if(country=="" || country==0){
      flag =false;
      $("#country").css('border','1px solid red');
    }else{
      $("#country").css('border','');
    }
    if(landmark=="" || landmark==0){
      flag =false;
      $("#landmark").css('border','1px solid red');
    }else{
      $("#landmark").css('border','');
    }
    if(address=="" || address==0){
      flag =false;
      $("#address").css('border','1px solid red');
    }else{
      $("#address").css('border','');
    }
    /*if(flag==true){
      this.fromdelivery.submit();
    }*/
    /* if(demotime!="" && !demodatetimepattern.test(demotime)){
    $("#demotime").css('border','1px solid red').focus();
    str = false;
      }*/
       if(recivername!="" && !patternname.test(recivername)){
    $("#recivername").css('border','1px solid red').focus();
    flag = false;
      }
      if(recivermobile!="" && !patternmobile.test(recivermobile)){
    $("#recivermobile").css('border','1px solid red').focus();
    flag = false;
      }
      if(reciveremail!="" && !patternemail.test(reciveremail)){
    $("#reciveremail").css('border','1px solid red').focus();
    flag = false;
      }
      if(pincode!="" && !patternpincode.test(pincode)){
    $("#pincode").css('border','1px solid red').focus();
    flag = false;
      }
      
      if(city!="" && !patternname.test(city)){
    $("#city").css('border','1px solid red').focus();
    flag = false;
      }
       if(state!="" && !patternname.test(state)){
    $("#state").css('border','1px solid red').focus();
    flag = false;
      }
      if(landmark!="" && !patternname.test(landmark)){
    $("#landmark").css('border','1px solid red').focus();
    flag = false;
      }
      if(country!="" && !patternname.test(country)){
    $("#country").css('border','1px solid red').focus();
    flag = false;
      }
      /*if(address!="" && !patterngmap.test(address)){
    $("#address").css('border','1px solid red').focus();
    flag = false;
      }*/

    return flag;
    });
</script>