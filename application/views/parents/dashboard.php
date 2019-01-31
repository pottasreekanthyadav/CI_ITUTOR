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
<link rel="canonical" href="<?php echo base_url(); ?>parent/dashboard" />
<!-- Bootstrap -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"  />
<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
<!--custom css-->
  <link href="<?php echo base_url(); ?>assets/css/custom.css" type="text/css" rel="stylesheet"  />
 <!--menu-->
  <link href="<?php echo base_url(); ?>assets/css/menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/icomoon.css">
<!--khaja css-->
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/khaja.css">
  <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" />
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
        .pv-lg {padding-top: 15px!important;padding-bottom: 15px!important;}
        .mt0{margin-top: 0px}
        .side-menu ul li a{color: #fff; font-size: 13px;text-decoration: none}
        .mt9{margin-top: 9px}
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
           <h3 class="title-hd">Dashboard    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php
  date_default_timezone_get('asia/kolkata');
  $name=ucwords($this->session->userdata('user_name'));
    $time = date("H");
   
    if ($time < 12) {
        echo "<span style='color:white'>Good Morning ".$name." Have a nice day</span>";
    } else
    if ($time >= 12 && $time < 17) {
        echo "Good Afternoon ".$name;
    } else
    if ($time >= 17 && $time < 22) {
        echo "Good Evening ".$name;
    } else
    if ($time >= 22) {
        echo "Good Night ".$name;
    }
    ?>
           </h3>
  
          <div class="clearfix">&nbsp;</div>
          <div class="col-sm-4 col-xs-12" style="display:none">
             <div class="bg-primary-dark">
                   <div class="clearfix">&nbsp;</div>
  <div class="col-sm-4 col-xs-4 text-center pv-lg" style="border-right:1px solid">
                           <i class="fa fa-calendar fa-4x"></i>
                        </div>
                        <div class="col-sm-8 col-xs-8 pv-lg">
                            <div class="col-sm-offset-2">
                           <div class="h2 mt9"><?php if(!empty($today_view)) echo $today_view; else echo 0;?></div>
                           </div>
                        </div>
                <div class="clearfix">&nbsp;</div>
              </div>
               <h5 class="text-center" style="margin-top:15px"><strong>Tutors viewed today</strong></h5>
          </div>      
          <div class="col-sm-4 col-xs-12" style="display:none">
              <div class="bg-primary-dark2">
                   <div class="clearfix">&nbsp;</div>
  <div class="col-sm-4 col-xs-4 text-center pv-lg" style="border-right:1px solid">
                           <i class="fa fa-calendar fa-4x"></i>
                        </div>
                        <div class="col-sm-8 col-xs-8 pv-lg">
                            <div class="col-sm-offset-2">
                           <div class="h2 mt9"><?php if(!empty($week_view))echo $week_view; else echo 0;?></div>
                        </div>
                        </div>
                  <div class="clearfix">&nbsp;</div> 
                    
              </div>
              <h5 class="text-center" style="margin-top:15px"><strong>Tutors viewed Last Week</strong></h5>
          </div>   
          <div class="col-sm-4 col-xs-12">
            <a href="<?php echo base_url();?>parent/statistics">
              <div class="bg-primary-dark3">
                   <div class="clearfix">&nbsp;</div>
  <div class="col-sm-4 col-xs-4 text-center pv-lg" style="border-right:1px solid">
                           <i class="fa fa-calendar fa-4x"></i>
                        </div>
                        <div class="col-sm-8 col-xs-8 pv-lg">
                            <div class="col-sm-offset-2">
                           <div class="h2 mt9"><?php if(!empty( $month_view)) echo $month_view; else echo 0;?></div>
                          </div>
                        </div>
                  <div class="clearfix">&nbsp;</div>
              </div>
              <h5 class="text-center" style="margin-top:15px"><strong>Viewed By Tutors</strong></h5>
                 </a>
             
                
          </div>
              <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
          </div>
       
      </div>
      </div>
            <div class="clearfix">&nbsp;</div>   <div class="clearfix">&nbsp;</div> 
      </div>
      </section>
      <?php
       $amount=$this->session->userdata('amount');
       $txnid=$this->session->userdata('txnid');
       ?>
      <div class="modal fade" id="pay_success" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content no-bod-rad">
        <div class="modal-header" style="border-bottom:none">
          <button type="button" onclick="unset()" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body text-center">
          <div>
             <img src="<?php echo base_url();?>assets/images/payment_success.png" alt="logo" />
              <h3 class="text-success">Payment Success !</h3>
              <p> <b>Your payment of <i class="fa fa-rupee"></i><?php if(!empty($amount)) echo $amount;?> was  successfully completed</b></p>
            <h4><b> Your Transaction ID : <?php if(!empty($txnid)) echo $txnid;?></b></h4>
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
          <button type="button" onclick="unset()" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body text-center">
          <div>
             <img src="<?php echo base_url();?>assets/images/payment_failure.png" alt="logo" />
              <h3 class="text-danger">Payment Failure !</h3>
              <p> <b>Your payment  <?php if(!empty($amount)) echo $amount;?> was failed</b></p>
             
              <button class="btn btn-warning no-bod-rad col-wh col-sm-4 col-sm-offset-4" style="display:none"> Try Again</button>
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
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/menu.js"></script>
<script>
 <?php
  $user_type=$this->session->userdata('user_type');
  $status=$this->session->userdata('status_desc');

   if($user_type==2 && $status=="success")
    { ?>
   <script type="text/javascript">
    $(window).on('load',function(){
        $('#pay_success').modal('show');
    });
</script>
<?php }
 ?>
 <?php
  $user_type=$this->session->userdata('user_type');
  $status=$this->session->userdata('status_desc');

   if($user_type==2 && $status=="failure")
    { ?>
   <script type="text/javascript">
    $(window).on('load',function(){
        $('#pay_failure').modal('show');
    });
</script>
<?php }
 ?>
<script type="text/javascript">
  function unset(){
    alert('hii');
      // alert('entered');
      $.ajax({
                   method:'POST',                 
                   url:"<?php echo base_url();?>frontend/unset_data",
                    success:function(s){
                      console.log(s);
                      if(s.code==200){
                      }
                    },
                    error:function(er){
                      console.log(er);
                    },
      });
  }
</script>
  </body>
</html>
