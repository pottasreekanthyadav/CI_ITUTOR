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
<link rel="canonical" href="<?php echo base_url(); ?>contact" />
<!-- Bootstrap -->
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"  />
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
     <div id="contactmessage"></div>


             <div class="card">

             <h3 class="text-center card-header"><b>Contact Us</b></h3>
              <div class="clearfix">&nbsp;</div>
           <?php echo form_open('save_contactus',array('name'=>'contact_form','id'=>'contact_form'))?>
             <div class="form-group col-sm-12">
               <label><b> Name</b></label>
                <input type="text" class="form-control no-bod-rad" placeholder="Enter Your Name" name="name" id="name">
                <span style="color:red" id="name_error"><?php echo form_error('name'); ?></span>
               </div>
               <div class="form-group col-sm-12">
               <label><b> Email</b></label>
                <input type="text" class="form-control no-bod-rad" placeholder="Enter Your Email" id="email" name="email">
                <span  style="color:red" id="email_error"><?php echo form_error('email'); ?></span>
               </div>
               <div class="form-group col-sm-12">
               <label><b> Mobile </b></label>
                <input type="text" class="form-control no-bod-rad"  name="mobile" id="mobile" placeholder="Enter Mobile Number" maxlength="10">
                <span  style="color:red" id="mobile_error"><?php echo form_error('mobile'); ?></span>
               </div>
               <div class="form-group col-sm-12">
               <label><b> Message</b></label>
                   <textarea class="form-control no-bod-rad" style="resize:none" rows="4" name="message" id="message" placeholder="Message here.."> </textarea>
                   <span  style="color:red" id="message_error"><?php echo form_error('message'); ?></span>
               </div>
               <div class="col-sm-12">
                    <div class="clearfix">&nbsp;</div>
             <input type="submit" class="btn btn-success no-bod-rad float-right col-sm-4" id="btnsubmit" name="btnsubmit" value="Send Message">

                   <div class="clearfix">&nbsp;</div>
                </div>

           <?php echo form_close(); ?>
             </div>
              <div class="clearfix">&nbsp;</div>
         </div>

            <div class="col-sm-5">
                  <div class="clearfix">&nbsp;</div>
                <div class="card">
            <h3 class="text-center card-header"><b>Address &amp; Directions</b></h3>
                <div class="clearfix">&nbsp;</div>

        <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="yes-padd">
            <h5><b>Administartion Office</b></h5>
                <div class="clearfix">&nbsp;</div>
             <p>     Plot No. 232, Beside Indian oil Petrol bunk,, Sri Nagar Colony, Kamalapuri Colony, Kamalapuri Colony, Yousufguda, Hyderabad, Telangana 500073</p><a href="https://www.google.com/maps/dir//17.429845,78.431965/@17.429845,78.431965,14z?hl=en-US" target="_blank"><h2>Direction Google Map</h2></a>
                  <div class="clearfix">&nbsp;</div>
                        <p class="font12 m-t-18 "> <span class="btn btn-success">  <i class="fa fa-envelope fs12" aria-hidden="true"></i> </span> &nbsp; Email: info@itsmytutor.com</p>
<p>
 <span class="btn btn-success"> <i class="fa fa-phone" aria-hidden="true"></i></span> &nbsp; Phone: +91 9676372122 </p> 
                        </div>
            </div>
<!--
            <div class="col-sm-6">
                <div class="yes-padd">
                <h5><b>Branch Office</b></h5>
             <p class="font14">Plot No. 232, Beside Indian oil Petrol bunk,, Sri Nagar Colony, Kamalapuri Colony, Kamalapuri Colony, Yousufguda, Hyderabad, Telangana 500073</p>
 <div class="clearfix">&nbsp;</div>
   <p class="font12"> Email: info@itsmytutor.com Phone: +91  9676372122</p>
                    </div>
            </div>
-->
         
                </div>
            </div>
                 <div class="clearfix">&nbsp;</div>
            </div>
               </div>
              </div>
       <div class="clearfix"></div>
<!--
            <div class="container">
            <div class="col-md-12 no-pad">
              <ul class="list-inline">
                <li class="col-md-3"><h3 class="text-uppercase">Filter</h3></li>
                <li class="col-md-5"><h3 class="text-uppercase">1&nbsp;tutors found</h3></li>
                 <li class="col-md-4">
                   <div class="col-md-12 search">
                     <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for a Tutors">
                <span class="input-group-addon"><button><i class="fa fa-search" aria-hidden="true"></i></button></span>
               </div>
                   </div>
                 </li>
              </ul>
            </div>
           </div>
-->
            <div class="clearfix">&nbsp;</div>
      </div>
            <div class="col-sm-12 no-padd">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15226.494162354657!2d78.431965!3d17.429845!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc5f095a2bd2c1cbe!2sSATEESH+ACADEMY-Maths+Tuition+Teacher+CBSE+ICSE+IB+IGCSE+Abacus+class-Home+Tutor-Sugar+Maths+Centre!5e0!3m2!1sen!2sin!4v1530360391826" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                      <div class="clearfix">&nbsp;</div>   <div class="clearfix">&nbsp;</div>      
          </div> 
      </section>
    <!--section banner end-->
<div class="clearfix"></div>

<?php $this->load->view('includes/modal.php'); ?>
 <?php $this->load->view('includes/footer.php'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>master_assets/js/common.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/menu.js"></script>
<script type="text/javascript">
 $("#contact_form").on('submit',function(e){
  e.preventDefault();
   var str = true;
   $("#mobile_error,#name_error,#email_error,#message_error").html('');
   $("#name,#email,#mobile,#message").css('border','');
   var name = $("#name").val().trim();
   var email = $("#email").val().trim();
   var mobile = $("#mobile").val().trim();
   var message = $("#message").val().trim();
    $(this).find("button[type='submit']").prop('disabled',true);
    if(name=="" || name==0){  $("#name").css('border','1px solid red').focus();$("#name_error").html('Enter Name'); str=false; }else{ $("#name").css('border','').focus(); $("#name_error").html('');}

    if(mobile=="" || mobile==0){  $("#mobile").css('border','1px solid red').focus();$("#mobile_error").html('Enter Mobile'); str=false; }else{ $("#mobile").css('border','').focus(); $("#mobile_error").html('');}
if(mobile!='' && mobile_check(mobile)==0){$('#mobile').css('border','1px solid red');$('#mobile_error').html('Enter Valid  mobile');str=false;}

   if(email=="" || email ==0){ $("#email").css('border','1px solid red').focus();$("#email_error").html('Enter Email');str=false;}else{$("#email").css('border','').focus();$("#email_error").html('');}
    if(email!='' && email_check(email)==0){$('#email').css('border','1px solid red');$('#email_error').html('Enter Valid  email');str=false;}

    if(name!='' && alphabets_check(name)==0){$('#name').css('border','1px solid red');$('#name_error').html('Enter Valid  name');str=false;}

    if(message=="" || message==0){  $("#message").css('border','1px solid red').focus();$("#message_error").html('Enter Message'); str=false; }else{ $("#message").css('border','').focus(); $("#message_error").html('');}

    if(str==true){

         $.ajax({
      url:"<?php echo base_url(); ?>Frontend/save_contactus",
      dataType:"JSON",
      method:"POST",
      data:{"message":message,'email':email,'name':name,'mobile':mobile},
      success:function(s){
        console.log(s);
               // this.submit;
               if(s.code==200){
                  $('#contactmessage').show(); $("#contactmessage").html(s.description).addClass('alert alert-success');;
               }else{
                 $("#contactmessage").html(s.description);
               }
      },
      error:function(e){
        console.log(e);
      }

    })
   //this.contact_form.submit();
    }
    return str;
});

</script>
  </body>
</html>