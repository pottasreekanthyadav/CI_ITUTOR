<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo TITLE_PATH;?></title>

<!-- Bootstrap -->
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
  </head>   <?php 
print_r($singlebusiness);die;
   $newdata = $singlebusiness[0]; ?>
  <body class="bg-wh">
  <?php $this->load->view('includes/header'); ?>
   <div class="clearfix"></div>

   <section>
         <div class="container-fluid no-padd">
       <img src="<?php echo base_url();?>uploads/serviceimage/<?php echo $newdata->banner_img; ?>" class="img-responsive" style="width:100%;height:300px" alt="itutors" />
          </div>
        </div>
<div class="clearfix">&nbsp;</div>
      </div>
      </section>
  <!-- founds section start -->

  <section>
    <div class="container-fluid">
      <div class="container">
        <div class="col-sm-8">

          <!-- 1 start -->
          <div class="col-sm-12 no-padd">
              <div class="clearfix">&nbsp;</div>
          <div class="col-sm-3" style="border:1px solid #ccc;border-radius: 20px;">
         <img src="<?php echo base_url();?>uploads/serviceimage/<?php echo $newdata->course_img; ?>" class="img-responsive" style="width:100%;height:200px;padding: 5px;" alt="itutors" />
          </div>
          <div class="col-sm-9">
            <h3 class="m-t-7"><?php echo $newdata->course_title; ?></h3>
             <ul class="star-rating">
             <li><a href="#"><i class="fa fa-heart"></i></a></li>
             <li><a href="#"><i class="fa fa-heart"></i></a></li>
             <li><a href="#"><i class="fa fa-heart"></i></a></li>
              <li><a href="#"><i class="fa fa-heart"></i></a></li>
               <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
             </ul>
             <h5>Teacher Student Ratio - 1: 1</h5>
             <h5>Languages Spoken - English,Hindi,Telugu</h5>
             <h5>Duration : 11:00PM to 12:00PM</h5>
             <h5>Monday , Tuesday ,Wednesday , Thursday and  Friday </h5>
             <h4> Near BR Hi-Tech Theatre , Madhapur , Hyderabad- 500081</h4>
          </div>
          <div class="clearfix">&nbsp;</div>
          <?php echo $newdata->about_course; ?>
<!--           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
             been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries,when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                   It has survived not only five centuries,when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                      It has survived not only five centuries,</p> -->
             <p> when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                   It has survived not only five centuries,when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                      It has survived not only five centuries,</p>
                      <p> when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                         It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            It has survived not only five centuries.</p>
        </div>
        <!-- 1 end -->
        </div>
<div class="col-sm-4">
  <div class="col-sm-12 no-padd">
      <div class="clearfix">&nbsp;</div>
  <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3200.9822964942327!2d78.39865667301669!3d17.429491116041017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb914be14e2773%3A0x61848ed44e661278!2s1016%2C+Rd+Number+46%2C+Masthan+Nagar%2C+Silent+Valley+hills%2C+Jubilee+Hills%2C+Hyderabad%2C+Telangana+500033!5e0!3m2!1sen!2sin!4v1532683966010" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe> -->

  <div class="clearfix">&nbsp;</div>
  <div class="col-sm-12">
    <button type="button" class="btn-blue no-bod-rad col-sm-12 col-wh btn-lg">Contact Us</button>
    <div class="filter-right-main-head-left">

                                <ul>

                                  <li><a href="#" data-toggle="tooltip" title="" data-original-title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="" data-original-title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="" data-original-title="googleplus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>


                                </ul>
                            </div>
  </div>
  </div>
</div>
      </div>
    </div>
  </section>
    <!-- founds section end -->
  <!--section signup end-->
      <?php $this->load->view('includes/modal'); ?>
 <div class="clearfix"></div>
 <?php $this->load->view('includes/footer'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo MYJS_PATH;?>jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo MYJS_PATH;?>/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo MYJS_PATH;?>/menu.js"></script>
    <script type="text/javascript" src="<?php echo MYJS_PATH;?>/validator.js"></script>

  </body>
</html>
