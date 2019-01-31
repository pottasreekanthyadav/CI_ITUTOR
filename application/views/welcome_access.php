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
<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
<!-- Bootstrap -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"  />
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
     
      <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-12 bg-wh no-padd m-t-10 text-center">
               <div class="clearfix">&nbsp;</div>
           <h4><b> Great..! Your profile is listed with us please select the payment option to get more Tutions</b></h4>
                 <div class="clearfix">&nbsp;</div> 
      <div class="col-sm-5 col-sm-offset-1 col-xs-12">
               <div class="col-sm-12 text-center">
             <div class="reg-red">
                   <div class="clearfix">&nbsp;</div> <div class="clearfix">&nbsp;</div>
                      <h1>Pay <i class="fa fa-rupee"><?php echo $plan;?></i> <br/>Use for <br/> <b>Lifetime</b></h1>
                <div class="clearfix">&nbsp;</div> <div class="clearfix">&nbsp;</div>
              </div>
                   <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
              <div class="col-sm-12">
                   <a href="<?php echo base_url();?>payment/1"><input type="submit" class="btn btn-danger4 col-wh no-bod-rad col-sm-12" value="Subscribe Now"></a>
              </div>
              </div>  </div>    
          <div class="col-sm-5 col-xs-12">
              <div class="col-sm-12 text-center">
              <div class="reg-blue">
                   <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div> <div class="clearfix">&nbsp;</div>
                    <h1> Free Access</h1>
                  <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>
              </div>
                  <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
              <div class="col-sm-12">
                  <a href="<?php echo base_url();?>tutor/dashboard"><input type="submit" class="btn btn-blue col-wh no-bod-rad col-sm-12" value=" Free Access"></a>
              </div>
          </div>   </div>
        
              <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div> 
          </div>
          
      </div>
      </div>
            <div class="clearfix">&nbsp;</div>   <div class="clearfix">&nbsp;</div>    
      </div>
      
      </section>
       <div class="modal fade" id="pay_success" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content no-bod-rad">
        <div class="modal-header" style="border-bottom:none">
          <!-- <button type="button" style="box-shadow: none;opacity:2 " class="close" data-dismiss="modal">&times;</button> -->
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body text-center">
          <div class="col-sm-10 col-sm-offset-1">
             <img src="<?php echo base_url();?>assets/images/jobs.png" alt="logo" />
             <div class="clearfix">&nbsp;</div>
              <p>Thanks for Registration With Us Please Post Your Learning Requirement Then You Can Access Tutors and Tutor also can contact You.</p>
                  
             <div class="clearfix">&nbsp;</div>
             <div class="clearfix">&nbsp;</div>
              
            </div>
        </div>
        <div class="modal-footer" style="border-top:none">
             <div class="clearfix">&nbsp;</div>
  <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
        </div>
      </div>
      
    </div>
  </div>
  <!--section dashboard end-->
      <?php $this->load->view('includes/modal.php'); ?>
 <div class="clearfix"></div>
 <?php $this->load->view('includes/footer.php'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/menu.js"></script>

  </body>
</html>
 <?php
  $user_type=$this->session->userdata('user_type');

   if($user_type==2)
    { ?>
   <script type="text/javascript">
    $(window).on('load',function(){
        $('#pay_success').modal('show');
    });
</script>
<?php }
 ?>