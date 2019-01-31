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
<!-- <link rel="canonical" href="<?php //echo base_url(); ?>"/> -->
<!-- Bootstrap -->
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"  />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
<!--custom css-->
  <link href="<?php echo base_url();?>assets/css/custom.css" type="text/css" rel="stylesheet"  />
 <!--menu-->
  <link href="<?php echo base_url();?>assets/css/menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/icomoon.css">
  <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<style>
          .bg-gray{background: #ff3300;color: #fff}
          .no-bod-rad{border-radius: 0px !important}
          .que{background: #2279a2; color: #fff; padding: 10px;margin: 0px !important;}
          .ans{padding: 17px 10px 18px 9px;background: #fafafa;margin: 0px !important;border: 1px solid #ccc;}
/*
          .signup-main, .form-group {
    margin: none !important;
}
*/
 div.pac-container {
   z-index: 1050 !important;
}
      </style>
  </head>
  <body>
   <?php $this->load->view('includes/header.php'); ?>
   <div class="clearfix"></div>
  <!--section banner start-->
  <section>
      <div class="container-fluid no-padd">
       <img src="<?php echo base_url();?>assets/images/contact-us.jpg" class="img-responsive" style="width:100%" alt="itutors" />
<!--
       <div class="col-md-12 signbread">
           <div class="col-md-12 signbread-main">
               <div class="container">
               <div class="col-md-12 no-pad">
               <div class="col-md-8 no-pad">
                   <h4>Contact Us</h4>
                   <h5>Lorem Ipsum is simply dummy text of the printing and typesetting</h5>
                   </div>
               </div>
              </div>
           </div>
           <div class="clearfix"></div>
  <div class="clearfix">&nbsp;</div>
      </div>
-->
          </div>
      </section>
      <section class="welcome">
      <div class="container">
         <div class="col-md-12 text-center">
              <h4 class="mt25"><span>An investment in knowledge pays the best interest. - <span class="tl-site">Benjamin Franklin</span>
                      </span></h4>
          </div>
          <div class="clearfix"></div>
          <hr>

      </div>

 </section>
  <section>
       <div class="col-md-12 signbread">
          <div class="container">
               <div class="col-md-12 no-pad">
                     <div class="col-sm-7">
             <div class="clearfix">&nbsp;</div>
      </section>
    <!--section banner end-->
<div class="clearfix"></div>

<?php $this->load->view('includes/modal.php'); ?>
 <section class="referaltype">
 <div class="col-md-12">
   <div class="container">
     <div class="col-md-10 col-xs-12 referal col-md-push-1">
       <div class="col-md-12 col-xs-12 referal-main">
         <div class="col-md-3 col-xs-3 text-center">
           <img src="<?php echo base_url();?>assets/images/icon4.png" class="img-responsive"  alt="itutor" />
         </div>
         <?php $user_type=$this->session->userdata('user_type');
         if($user_type==2)
         { ?>
<div class="col-md-9 col-xs-8 no-pad">
           <h4 style="text-transform:capitalize">Hello Parents! Enjoy the opportunity to geting top tutors in your area Pay once and use for lifetime</h4>
         </div>
        <?php  }
        else {?>
         <div class="col-md-9 col-xs-8 no-pad">
           <h4 style="text-transform:capitalize">Hello Tutors!!! Enjoy the opportunity of Referral Reward</h4>
           <h5 style="text-transform:capitalize">Refer your friends to register with Its My Tutor&nbsp;&amp;&nbsp;get a referral cash</h5>
         </div>
       <?php } ?>
       </div>
     </div>
     <div class="clearfix"></div>
   </div>
   <div class="clearfix"></div>
  </div>
 </section>
 <!--footer start-->
    <footer class="footer">
      <div class="container">
        <div class="col-md-12 footer-main">
       <div class="clearfix">&nbsp;</div>
                   <div class="col-md-3 no-padd">
                 <div class="col-md-12 footer-main-left">
              <h2>About Us</h2>
                     <p>Its My Tutor is totally dedicated to tutors and students and our intention is explore the door for tutor and student where they can achieve their goals in best way. </p>
            </div>
<!--
          <div class="col-md-3">
            <div class="col-md-12 footer-main-left">
              <h2>Social Links</h2>
              <ul>
                <li><a href="#"><img src="images/fb.png" alt="fb" />&nbsp;Facebook</a></li>
                <div class="clearfix"></div>
                <li><a href="#"><img src="images/googlepluse.png" alt="fb" />&nbsp;Google</a></li>
                <div class="clearfix"></div>
                <li><a href="#"><img src="images/twitter.png" alt="fb" />&nbsp;Twitter</a></li>
                <div class="clearfix"></div>
                <li><a href="#"><img src="images/linkedin.png" alt="fb" />&nbsp;Linkedin</a></li>
              </ul>
            </div>
          </div>
-->
          <div class="clearfix"></div>
        </div>
          <div class="col-md-3">
            <div class="col-md-12 footer-main-left">
              <h2>Usefull Links</h2>
               <ul>
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url();?>about-us">About Us</a></li>
                <li><a href="<?php echo base_url();?>tutor-list">tutor</a></li>
                <li><a href="<?php echo base_url();?>tuition-center">Tuition Center/Institutes</a></li>
                <li><a href="<?php echo base_url();?>faq">Faq's</a></li>
                <li><a href="<?php echo base_url();?>contact">Contact Us</a></li>
              </ul>
            <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="col-md-12 footer-main-left">
              <h2>Our Coverage Area</h2>
              <ul>
                <li><a href="#">Ameerpet</a></li>
                <li><a href="#">Madhapur</a></li>
                <li><a href="#">LB Nagar</a></li>
                <li><a href="#">Hitech City</a></li>
                <li><a href="#">Koti</a></li>
                <li><a href="#">Kondapur</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="col-md-12 footer-main-left">
              <h2>Contact Us</h2>
              <ul>

                <p>Mobile&nbsp;:&nbsp;+91 9876543210</p>
                <p>Email&nbsp;:&nbsp;info@itsmytutor.com</p>
                  <div class="clearfix">&nbsp;</div>
                  <a href="#"><img src="<?php echo base_url();?>assets/images/fb.png" alt="fb"></a>
                  <a href="#"><img src="<?php echo base_url();?>assets/images/googlepluse.png" alt="gp"></a>
                  <a href="#"><img src="<?php echo base_url();?>assets/images/twitter.png" alt="tw"></a>
                  <a href="#"><img src="<?php echo base_url();?>assets/images/linkedin.png" alt="ld"></a> 
                  <a href="#"><img src="<?php echo base_url();?>assets/images/yt.png" alt="yt"></a>
                  <a href="#"><img src="<?php echo base_url();?>assets/images/it.png" alt="it"></a>
              </ul>
            </div>
          </div>

      </div>

      <div class="col-md-12 subfooter">
      <div class="container">
      <div class="col-md-12 subfooter-main">
        <ul class="list-inline">
          <li class="col-md-6 text-left">2018 All &copy;&nbsp;Reserved&nbsp;@itsmytutor.com</li>
          <li class="col-md-6 text-right">Designed&nbsp;&amp;&nbsp;Developed By&nbsp;:&nbsp;<a href="http://www.richlabz.com" target="_blank">Richlabz It Solutions Pvt.Ltd</a></li>
        </ul>
        </div>
        </div>
      </div>
    </footer>
  <!--footer end-->


    <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  
  
   
   
	

 <script type="text/javascript">
$(document).ready(function() {
   var max_fields      = 5; //maximum input boxes allowed
   var wrapper         = $("#apprequirement"); //Fields wrapper
   var add_button      = $("#add_field_button_requirement"); //Add button ID
   var x = 1; //initlal text box count
   $(add_button).click(function(e){ //on add input button click
       e.preventDefault();
       if(x < max_fields){
           x++; //text box increment
           $(wrapper).append('<div id="my_append_requirement"><div class="form-group col-sm-12  no-padd"><div class="form-group col-sm-5 one-padd">From:<input type="text"  name="from_time[]" id="jk" class="form-control timepicker timefrom no-bod-rad" onclick="tell_mytime()"></div><div class="form-group col-sm-5 one-padd">To:<input type="text"  name="to_time[]" class="form-control timepicker timeto no-bod-rad" onclick="tell_mytime()"></div><span class="form-group col-sm-2 one-padd"><button class="btn btn-danger btn_remove m-t-20 no-bod-rad"  id="remove_field_requirement">x</button></span></div></div>');
       }

   });

   $(document).on("click","#remove_field_requirement", function(e){ //user click on remove text
       e.preventDefault(); $("#my_append_requirement").remove(); x--;
   })
});
/*function callmytime(){
       $('input.timepicker').timepicker(); 
      }*/
      
</script> 



</script>
        
  <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
 <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>master_assets/js/common.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/menu.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
    <script type="text/javascript">
     $('input.timepicker').timepicker({
      'timeFormat':'H:i'
     });
    function tell_mytime(){
      $('input.timepicker').timepicker({
      'timeFormat':'H:i'
     });
  }
</script>
  </body>
</html>
