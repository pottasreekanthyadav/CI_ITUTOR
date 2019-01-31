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
<link rel="canonical" href="<?php echo base_url(); ?>tutor/dashboard" />
<!-- Bootstrap -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"  />
<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
<!--custom css-->
  <link href="<?php echo base_url(); ?>assets/css/custom.css" type="text/css" rel="stylesheet"  />

 <!--menu-->
  <link href="<?php echo base_url(); ?>assets/css/menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/icomoon.css">
<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
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
        .mt0{margin-top: 0px}
        .side-menu ul li a {color: #fff !important; font-size: 13px;text-decoration: none !important}
        .mt9{margin-top: 9px}
      </style>
  </head>
  <body class="bg-wh">
   <?php $this->load->view('includes/header.php'); ?>
   <div class="clearfix"></div>
  <!--section dashboard start-->
  <section>
         <div class="bg-back container-fluid"  style="background-image:url('<?php echo base_url();?>assets/images/bg-back.jpg')">
      <div class="container">
      <?php $this->load->view("tutors/tutor-dash-sidebar.php");?>
      <div class="col-sm-10">
          <div class="col-sm-12 inner-bg no-padd m-t-10">
             <h3 class="title-hd">Dashboard    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
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
    if ($time >= 17 && $time <22) {
        echo "Good Evening ".$name;
    } else
    if ($time >=22) {
        echo "Good Night ".$name;
    }
    ?>
           </h3>

            <div class="clearfix">&nbsp;</div>  
      <div class="col-sm-4 col-xs-12">
 <a href="<?php echo base_url();?>tutor/tuition-subscribe">
               <div class="col-sm-12">

             <div class="bg-primary-dark">
                   <div class="clearfix">&nbsp;</div>
  <div class="col-sm-4 col-xs-4 text-center pv-lg" style="border-right:1px solid">

                         <i class="far fa-hand-point-up fa-3x"></i>
                        </div>
                        <div class="col-sm-8 col-xs-8 pv-lg">
                            <div class="col-sm-offset-2">
                           <div class="h2 mt9"><?php echo $subcribe; ?></div>
                           </div>
                        </div>
                <div class="clearfix">&nbsp;</div>
              </div>
               <h5 class="text-center" style="margin-top:15px"><strong>No .of Tutions Subscribed</strong></h5>
            
              </div>
      </a>
     </div>
     <?php  $profile_count=$this->session->userdata('profile_count');?>
     <?php if($profile_count>0) { ?>
          <div class="col-sm-4 col-xs-12">
            <a href="<?php echo base_url();?>tutor/requirements">
              <div class="col-sm-12">
              <div class="bg-primary-dark2">
                   <div class="clearfix">&nbsp;</div>
  <div class="col-sm-4 col-xs-4 text-center pv-lg" style="border-right:1px solid">
<!--         <img src="images/matching.png">-->
   <i class="fas fa-users fa-3x"></i>
                        </div>
                        <div class="col-sm-8 col-xs-8 pv-lg">
                            <div class="col-sm-offset-2">
                           <div class="h2 mt9"><?php echo $matching; ?></div>
                        </div>
                        </div>
                  <div class="clearfix">&nbsp;</div>

              </div>
              <h5 class="text-center" style="margin-top:15px"><strong>Your Total Matching Requirement.</strong></h5>
           
          </div>
                 </a>
            </div>
<?php }?>
              <div class="col-sm-4 col-xs-12">
                 <a href="<?php echo base_url();?>tutor/parent-details">
                  <div class="col-sm-12">
              <div class="bg-primary">
                   <div class="clearfix">&nbsp;</div>
  <div class="col-sm-4 col-xs-4 text-center pv-lg" style="border-right:1px solid">
                           <i class="far fa-user fa-3x"></i>
                        </div>
                        <div class="col-sm-8 col-xs-8 pv-lg">

                            <div class="col-sm-offset-2">
                           <div class="h2 mt9"><?php echo $parentviewd; ?></div>
                          </div>
                        </div>
                  <div class="clearfix">&nbsp;</div>
              </div>
              <h5 class="text-center" style="margin-top:15px"><strong>No . of People viewed your profile</strong></h5>
            
                <div class="clearfix">&nbsp;</div>
                  </div>  
                     </a>
                     </div>
                  <div class="col-sm-4 col-xs-12">
                      <div class="col-sm-12">
                  <div class="bg-primary-dark4">
                       <div class="clearfix">&nbsp;</div>
      <div class="col-sm-4 col-xs-4 text-center pv-lg" style="border-right:1px solid">
                               <i class="fa fa-user-plus fa-3x"></i>
                            </div>
                            <div class="col-sm-8 col-xs-8 pv-lg">

                                <div class="col-sm-offset-2">
                                  <?php foreach($refer_cash as $row)
                                  { ?>
                               <div class="h2 mt9"> <i class="fa fa-rupee"></i><?php if(!empty($row->credit)) {echo $row->credit;} else echo 0;?></div>
                             <?php } ?>
                              </div>
                            </div>
                      <div class="clearfix">&nbsp;</div>
                  </div>
                  <h5 class="text-center" style="margin-top:15px"><strong>Referral Cash</strong></h5>
                    <div class="clearfix">&nbsp;</div>
                      </div>    </div>
              <div class="clearfix">&nbsp;</div>
          </div>
      </div>
            <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>
      </div>
               <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
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
          <button type="button" onclick="unset()"class="close" data-dismiss="modal">&times;</button>
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
          <button type="button" class="close" onclick="unset()" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body text-center">
          <div>
             <img src="<?php echo base_url();?>assets/images/payment_failure.png" alt="logo" />
              <h3 class="text-danger">Payment Failure !</h3>
              <p> <b>Your payment  <?php if(!empty($amount)) echo $amount;?> was failed</b></p>

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
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/menu.js"></script>


<?php
  $user_type=$this->session->userdata('user_type');
  $status=$this->session->userdata('status_desc');

   if($user_type==1 && $status=="success")
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
  // $this->session->set_userdata('status_desc','failure');
  $status=$this->session->userdata('status_desc');

   if($user_type==1 && $status=="failure")
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