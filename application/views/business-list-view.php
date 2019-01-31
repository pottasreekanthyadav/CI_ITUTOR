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
  <link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
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
          <div class="col-sm-12 no-padd" style="border:1px solid #ccc">
              <div class="clearfix">&nbsp;</div>
          <div class="col-sm-3">
         <img src="<?php echo base_url();?>assets/images/sub-cat/1.png" class="img-responsive" style="width:100%;height:200px" alt="itutors" />
          </div>
          <div class="col-sm-9">
            <h3 class="m-t-7">Loruem Ipsum</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            </p><p> when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
               but also the leap into electronic typesetting, remaining essentially unchanged.<a href="#"> Read More</a></p>
          </div>
          <div class="clearfix">&nbsp;</div>
        </div>
        <!-- 1 end -->
          <div class="clearfix">&nbsp;</div>
        <!-- 2 start -->
        <div class="col-sm-12 no-padd" style="border:1px solid #ccc">
            <div class="clearfix">&nbsp;</div>
        <div class="col-sm-3">
       <img src="<?php echo base_url();?>assets/images/sub-cat/2.jpg" class="img-responsive" style="width:100%;height:200px" alt="itutors" />
        </div>
        <div class="col-sm-9">
          <h3 class="m-t-7">Loruem Ipsum</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
          </p><p> when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
             but also the leap into electronic typesetting, remaining essentially unchanged.<a href="#"> Read More</a></p>
        </div>
        <div class="clearfix">&nbsp;</div>
      </div>
      <!-- 2 end -->
      <div class="clearfix">&nbsp;</div>
    <!-- 3 start -->
    <div class="col-sm-12 no-padd" style="border:1px solid #ccc">
        <div class="clearfix">&nbsp;</div>
    <div class="col-sm-3">
   <img src="<?php echo base_url();?>assets/images/sub-cat/3.png" class="img-responsive" style="width:100%;height:200px" alt="itutors" />
    </div>
    <div class="col-sm-9">
      <h3 class="m-t-7">Loruem Ipsum</h3>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
      </p><p> when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
         but also the leap into electronic typesetting, remaining essentially unchanged.<a href="#"> Read More</a></p>
    </div>
    <div class="clearfix">&nbsp;</div>
  </div>
  <!-- 3 end -->
        </div>
<div class="col-sm-3">
  <div class="col-sm-12" style="border:1px solid #ccc">
      <div class="clearfix">&nbsp;</div>
    <img src="<?php echo base_url();?>assets/images/sub-cat/4.jpeg" class="img-responsive" style="width:100%;" alt="itutors" />
  <div class="clearfix">&nbsp;</div>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
    </p><p> when an unknown printer took a galley of type and scrambled it to make a type specimen book.  It has survived not only five centuries,
          <a href="#"> Read More</a></p>
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
