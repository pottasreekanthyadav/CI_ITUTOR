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
  </head>
  <body class="bg-wh">
   <?php $this->load->view('includes/header.php'); ?>
   <div class="clearfix"></div>

 <section>
      <div class="bg-back container-fluid"  style="background-image:url('<?php echo base_url();?>assets/images/bg-back.jpg')">
      <div class="container">
      <?php $this->load->view("tutors/tutor-dash-sidebar");?>

      <div class="col-sm-10 col-xs-12">
          <div class="col-sm-12 inner-bg no-padd m-t-10">
         
           <h4 class="title-hd"><strong>Get Your Id Card</strong></h4>
        
          
          <div class="col-sm-12">
            <?php if($this->session->flashdata('success_parent')) { ?>
                                <div class="alert alert-success" id="temp">
                                <?php echo $this->session->flashdata('success_parent'); ?>
                                </div>
                                <?php } ?>

  
             
    <div class="container-fluid payonce">
      <div>
         <div class="col-sm-1 col-xs-2 no-padd currency" style="background-image:url('<?php echo base_url();?>assets/images/red-banner.png')">
  <h4 class="col-wh"><?php echo $plan;?>/-</h4>
        </div>
        <div class="col-sm-7 col-xs-6">
          <h4 class="m-t-16">Pay for Id Card from itsmytutor. <a href="#" class="pay-more"><span class="f14">Know more</span></a></h4>
        </div>
        <div class="col-sm-4 col-xs-2">
          <a href="<?php echo base_url();?>tutor/idcard"><button type="button" class="btn btn-red col-wh no-bod-rad col-sm-8 col-sm-offset-2" style="margin-top: 9px;">Pay Now</button></a>
        </div>
      </div>
      
    </div>
               <div class="clearfix">&nbsp;</div>
             <!--  <div class="col-sm-12 text-center">
                
              <a href="<?php //echo base_url(); ?>tutor/idcard" class="btn btn-blue col-wh no-bod-rad">Delivery address for ID card</a>
                  </div> -->

                  
<!--
                       <div class="col-sm-12">
           <a data-toggle="modal" data-target="#pay_success"> <button type="button" class="btn btn-success">Payment Success</button></a>
          <a href="#" data-toggle="modal" data-target="#pay_failure"><button type="button" class="btn btn-danger">Payment Failure</button></a>
          </div> 
-->
                    <div class="clearfix">&nbsp;</div>

        </div></div></div></div>
          <div class="clearfix">&nbsp;</div> <div class="clearfix">&nbsp;</div> <div class="clearfix">&nbsp;</div> <div class="clearfix">&nbsp;</div>
     </div>
      </section>  
    
<!-- Modal Payment Success Start-->
      <div class="modal fade" id="pay_success" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content no-bod-rad">
        <div class="modal-header" style="border-bottom:none">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body text-center">
          <div>
             <img src="<?php echo base_url();?>assets/images/payment_success.png" alt="logo" />
              <h3 class="text-success">Payment Success !</h3>
              <p> <b>Your payment of <i class="fa fa-rupee"></i> 1000 was  successfully completed</b></p>
              <h4><b> Your Tutor ID : 12021004</b></h4>
            </div>
        </div>
        <div class="modal-footer" style="border-top:none">
             <div class="clearfix">&nbsp;</div>
<!--          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
        </div>
      </div>
      
    </div>
  </div>
<!-- Modal Payment Success End-->
      <!-- Modal Payment Failure Start-->
      <div class="modal fade" id="pay_failure" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content no-bod-rad">
        <div class="modal-header" style="border-bottom:none">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body text-center">
          <div>
             <img src="<?php echo base_url();?>assets/images/payment_failure.png" alt="logo" />
              <h3 class="text-danger">Payment Failure !</h3>
              <p> <b>Your payment was  successfull</b></p>
             
              <button class="btn btn-warning no-bod-rad col-wh col-sm-4 col-sm-offset-4"> Try Again</button>
            </div>
        </div>
        <div class="modal-footer" style="border-top:none">
             <div class="clearfix">&nbsp;</div>
<!--          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
        </div>
      </div>
    </div>
  </div>
<!-- Modal Payment Failure End-->
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
 