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
<link rel="canonical" href="http://itsmytutor.com/" />
<link href="<?php echo MYCSS_PATH;?>bootstrap.min.css" type="text/css" rel="stylesheet"  />
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
        .panel-title{font-size: 21px}
        .panel-group .panel{    border-radius: 0px;}
        .panel-title > a:before {float: right !important;font-family: FontAwesome;content:"\f055";padding-right: 5px;}
.panel-title > a.collapsed:before {float: right !important;content:"\f056";}
.panel-title > a:hover,
.panel-title > a:active,
.panel-title > a:focus  {
    text-decoration:none;
}
        .panel-body p{    padding: 6px 30px;}
        .col-wh{color: #fff !important}
      </style>
  </head>
  <body class="bg-wh">
  <?php $this->load->view('includes/header'); ?>
   <div class="clearfix"></div>

   <section>
         <div class="container-fluid no-padd">
       <img src="<?php echo base_url();?>assets/images/sub-cat/inner-banner.jpg" class="img-responsive" style="width:100%;height:300px" alt="itutors" />

</div>
          </div>
<div class="clearfix">&nbsp;</div>
      </div>
      </section>
  <!-- founds section start -->
  <section>
    <div class="container-fluid">
      <div class="container">
        <div class="col-sm-9">
          <!-- 1 start -->
          <?php 
         // print_r($business);die;
          if(!empty($business)){
            foreach($business as $key=>$value){
          $blogtitle = urlencode($value->institute_name); 
          $title = str_replace('+','-',$blogtitle);
            ?>
          <div class="col-sm-12 no-padd" style="border:1px solid #ccc">
              <div class="clearfix">&nbsp;</div>
          <div class="col-sm-3 individual-cate">
         <a href="<?php echo base_url(); ?>service-details/<?php echo $this->uri->segment(2); ?>/<?php echo ucwords($title); ?>/<?php echo base64_encode($value->institute_id); ?>"><img src="<?php echo base_url(); ?>uploads/institutelogo/<?php echo $value->institute_logo; ?>" class="img-responsive" alt="itutors" /></a>
          </div>
          <div class="col-sm-9">
            <a href="<?php echo base_url(); ?>service-details/<?php echo $this->uri->segment(2); ?>/<?php echo $title; ?>/<?php echo base64_encode($value->institute_id); ?>"><h3 class="m-t-7"><?php echo ucwords($value->institute_name); ?></h3></a>
            <p><?php echo $value->institute_about; ?><a href="<?php echo base_url(); ?>service-details/<?php echo $this->uri->segment(2); ?>/<?php echo $title; ?>/<?php echo base64_encode($value->institute_id); ?>"> Read More</a></p>
          </div>
          <div class="clearfix">&nbsp;</div>
        </div>
        <?php 
      }
         }else{

echo 'Records not found.';

         } ?>
        <!-- 1 end -->
          
        </div>
<?php //print_r($sidebarads);
if(!empty($sidebarads)){
  $blogtitle = urlencode($sidebarads->course_title); 
          $title = str_replace('+','-',$blogtitle);
?>
<div class="col-sm-3">
  <div class="col-sm-12" style="border:1px solid #ccc;margin-bottom: 10px">
      <div class="clearfix">&nbsp;</div>
    <a href="<?php echo base_url(); ?>Businessdirectory_controller/business_details/<?php echo $this->uri->segment(3); ?>/<?php echo $title; ?>/<?php echo base64_encode($value->institute_id); ?>"><img src="<?php echo base_url(); ?>uploads/serviceimage/<?php echo $sidebarads->course_img; ?>" class="img-responsive" style="width:100%;" alt="itutors" /></a>
  <div class="clearfix">&nbsp;</div>
  <a href="<?php echo base_url(); ?>Businessdirectory_controller/business_details/<?php echo $this->uri->segment(3); ?>/<?php echo $title; ?>/<?php echo base64_encode($value->institute_id); ?>"><h3><?php echo $sidebarads->course_title; ?></h3></a>
    <p><?php echo $sidebarads->about_course; ?></p>
          
          <a href="<?php echo base_url(); ?>Businessdirectory_controller/business_details/<?php echo $this->uri->segment(3); ?>/<?php echo $title; ?>/<?php echo base64_encode($value->institute_id); ?>">Read More</a>
  </div>
</div>
<?php }else{ ?>
<!--when no ads selected start-->
<div class="col-sm-3">
  <div class="col-sm-12" style="border:1px solid #ccc;margin-bottom: 10px">
      <div class="clearfix">&nbsp;</div>
    <img src="<?php echo base_url();?>assets/images/sub-cat/4.jpeg" class="img-responsive" style="width:100%;" alt="itutors" />
  <div class="clearfix">&nbsp;</div>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
    </p><p> when an unknown printer took a galley of type and scrambled it to make a type specimen book.  It has survived not only five centuries,
          <a href="<?php echo base_url(); ?>Businessdirectory_controller/business_details/<?php echo $value->institute_id; ?>"> Read More</a></p>
  </div>
</div>
<!--when not  ads selected end-->
<?php

}?>
      </div>
    </div>
  </section>
    <!-- founds section end -->
  <!--section signup end-->
      <?php $this->load->view('includes/modal'); ?>
 <div class="clearfix">&nbsp;</div> <div class="clearfix">&nbsp;</div>
 <?php $this->load->view('includes/footer'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo MYJS_PATH;?>jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo MYJS_PATH;?>/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo MYJS_PATH;?>/menu.js"></script>
    <script type="text/javascript" src="<?php echo MYJS_PATH;?>/validator.js"></script>

  </body>
</html>
