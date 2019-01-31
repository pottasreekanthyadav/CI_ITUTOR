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
        .social ul {list-style: none;display: inline-flex;padding: 0;}
        .social ul li a .fa-facebook{border: 1px solid #2279a2;padding: 7px 11px;font-size: 12px;border-radius: 50%;  background-color: #2279a2; color: #fff;}
        .social ul li a .fa-twitter{border: 1px solid #2279a2;padding: 7px 9px;font-size: 12px;border-radius: 50%;  background-color: #2279a2; color: #fff;}
        .social ul li a .fa-google-plus{border: 1px solid #2279a2;padding: 7px 7px;font-size: 12px;border-radius: 50%;  background-color: #2279a2; color: #fff;}
        .col-wh{color: #fff !important}
      </style>
  </head>   <?php /*
print_r($singlebusiness);die;
   $newdata = $singlebusiness[0];*/ ?>
  <body class="bg-wh">
  <?php $this->load->view('includes/header'); ?>
   <div class="clearfix"></div>

   <section>
         <div class="container-fluid no-padd">
       <img src="<?php echo base_url();?>uploads/serviceimage/<?php if(!empty($singlebusiness->banner_img)){ echo $singlebusiness->banner_img; } ?>" class="img-responsive" style="width:100%;height:300px" alt="itutors" />
          </div>
        
<div class="clearfix">&nbsp;</div>

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
         <img src="<?php echo base_url();?>uploads/serviceimage/<?php if(!empty($singlebusiness->course_img)){ echo $singlebusiness->course_img;} ?>" class="img-responsive" style="width:100%;height:200px;padding: 5px;" alt="itutors" />
          </div>
          <?php //print_r($singlebusiness); ?>
          <div class="col-sm-9">
            <h3 class="m-t-7"><?php if(!empty($singlebusiness->course_title)){ echo ucwords($singlebusiness->course_title); } ?></h3>
             <ul class="star-rating">
             <li><a href="#"><i class="fa fa-heart"></i></a></li>
             <li><a href="#"><i class="fa fa-heart"></i></a></li>
             <li><a href="#"><i class="fa fa-heart"></i></a></li>
              <li><a href="#"><i class="fa fa-heart"></i></a></li>
               <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
             </ul>
             <h5>Teacher Student Ratio - 1: 1</h5>
             <h5>Languages Spoken - English,Hindi,Telugu</h5>
             <h5>Duration : <?php echo $singlebusiness->institute_timing; ?></h5>
             <h5>Institute Mobile::<?php echo $singlebusiness->institute_mobile; ?></h5>
             <h5>Institute Email::<?php echo $singlebusiness->institute_email; ?></h5>
             <h4><?php echo ucwords($singlebusiness->institute_name.','.$singlebusiness->institute_city.','.$singlebusiness->institute_location); ?></h4>
          </div>
          <div class="clearfix">&nbsp;</div>
          <?php if(!empty($singlebusiness->about_course)){ echo $singlebusiness->about_course; }  ?>
<!--           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
             been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries,when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                   It has survived not only five centuries,when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                      It has survived not only five centuries,</p> -->
            
        </div>
        <!-- 1 end -->
        </div>
<div class="col-sm-4">
  <div class="col-sm-12 no-padd">
  <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3200.9822964942327!2d78.39865667301669!3d17.429491116041017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb914be14e2773%3A0x61848ed44e661278!2s1016%2C+Rd+Number+46%2C+Masthan+Nagar%2C+Silent+Valley+hills%2C+Jubilee+Hills%2C+Hyderabad%2C+Telangana+500033!5e0!3m2!1sen!2sin!4v1532683966010" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe> -->

  <div class="col-sm-12">
    <button type="button" class="btn-blue no-bod-rad col-sm-12 col-wh btn-lg"><a href="<?php echo base_url(); ?>contact">Contact Us</a></button>
    <div class="social text-center">
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
              <p><b>Share On</b></p>
                                <ul>
                                  <li><a href="<?php echo $singlebusiness->fb_link; ?>" data-toggle="tooltip" title="" data-original-title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                  <li><a href="<?php echo $singlebusiness->twiter_link; ?>" data-toggle="tooltip" title="" data-original-title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                  <li><a href="<?php echo $singlebusiness->gplus_link; ?>" data-toggle="tooltip" title="" data-original-title="googleplus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div><a href="<?php echo $singlebusiness->google_map; ?>" target="_blank"><h2>Direction Google Map</h2></a></div>
  </div>
  </div>
</div>
      </div>
    </div>
  </section>
    <!-- founds section end -->
  <!--section signup end-->
      <?php $this->load->view('includes/modal'); ?>
 <div class="clearfix">&nbsp;</div>
 <div class="clearfix">&nbsp;</div>
 <?php $this->load->view('includes/footer'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo MYJS_PATH;?>jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo MYJS_PATH;?>/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo MYJS_PATH;?>/menu.js"></script>
    <script type="text/javascript" src="<?php echo MYJS_PATH;?>/validator.js"></script>

  </body>
</html>
