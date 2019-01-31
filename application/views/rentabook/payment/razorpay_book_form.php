 <?php 
$total=$this->session->userdata('alltotal');
$new_amount=$total*100;
$name=$this->session->userdata('user_name');
$email=$this->session->userdata('user_email');
$mobile=$this->session->userdata('user_mobile');
$order_id=$this->session->userdata('ord_id');
?>

 <script src="<?php echo MYJS_PATH;?>jquery.min.js"></script>


<form action="<?php echo base_url();?>book/payment"  method="POST">
<!-- Note that the amount is in paise = 50 INR -->
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="rzp_live_kT7sYYBiR7E8nu"
    data-amount="<?php echo $new_amount;?>"
    data-name="Stni Services Private Limited"
    data-buttontext=""
    data-description="Purchase Description"
    data-image="<?php echo MYIMAGES_PATH;?>logo.png"
    data-prefill.name="<?php echo $name;?>"
    data-prefill.email="<?php echo $email;?>"
    data-prefill.mobile="<?php echo $mobile;?>"
    data-theme.color="#a270d2"
></script>
<input type="hidden" value="<?php echo $total;?>" name="amount">
<input type="hidden" value="<?php echo $order_id;?>" name="order_id">
</form>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
 <script type="text/javascript">
        $(document).ready(function(){
            $('.razorpay-payment-button').hide();
        $(".razorpay-payment-button").click();
         });
      </script>
      <script type="text/javascript">
           $('.close').click(function close_window(){
            alert('hii');
            // var usertype="<?php //echo $this->session->userdata('user_type');?>";
            // // if(usertype==1)
            // // {
            // location.href="<?php //echo base_url();?>tutor/dashboard";
        // }
        // else {
        //     location.href="<?php //echo base_url();?>parent/dashboard";
        // }
        });
      </script>
      <!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title> Home Tuitions | Home Tutors Providers in hyderabad</title>
<meta name= "Description" content=" its my tutor is Provide Home Tuitions in Hyderabad with qualified Home Tutors for individual and focused classes at your door step in Gachibowli, Kondapur, Madhapur, Manikonda, home tutor Srinagar Colony, Hitech city, Banjarahills, Jubilee Hills, home tuition in Begumpet, Khairatabad,Towli choki, Sanath Nagar, Mehdipatnam ,BHEL , ameerpet, Sr Nagar, Erragadda, Telangana "/>
<meta name= "Keyword" Content= "Home Tuitions in Hyderabad , Home Tutors in Gachibowli, Kondapur, Madhapur, Manikonda, home tutor Srinagar Colony, Hitech city, Banjarahills, Jubilee Hills, home tuition in Begumpet, Khairatabad, Towli choki, Sanath Nagar, Mehdipatnam ,BHEL , ameerpet, Sr Nagar, Erragadda, Telangana "/>
<meta name="author" content=" Its My Tutor "/>
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
<link rel="canonical" href="<?php echo base_url(); ?>" />
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
      <style>
      .form-group {margin-bottom: 15px;}
      </style>
      
</head>
  <body class="rentbg">
  <header>
   <?php $this->load->view('rentabook/includes/header_pay');?>
  </header>
  <!--section banner start-->
  <div class="clearfix">&nbsp;</div>
  <div class="clearfix">&nbsp;</div>
  <section>

      <div class="container-fluid">
          <div class="container no-padd shipping_order">
          
     <div class="col-sm-12 bg-wh no-padd">

        <div class="col-sm-12">
         <div class="row">
             <div class="col-sm-12 text-center">             
                 <div class="clearfix">&nbsp;</div>     <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
                 <div class="col-sm-12">
                <a href="<?php echo base_url();?>book"><button class="btn btn-outline btn-lg no-bod-rad m-t-15 m-b-10" name="submit"><h2>Continue Shopping</h2></button></a>
                </div>
           </div>
             </div>
            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
         </div>

        <div class="clearfix">&nbsp;</div> 
         
         </div>
              <div class="clearfix">&nbsp;</div>
       </div>
      </div>
      </div>
  </section>
  <!--section banner end-->

  <div class="clearfix">&nbsp;</div>
  
<!--footer strart end-->
       <footer>
 <?php $this->load->view('rentabook/includes/footer');?>
  </footer>
<!--footer strart end-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo MYJS_PATH;?>jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo MYJS_PATH;?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo MYJS_PATH;?>menu.js"></script>
    <script type="text/javascript">
      function navigate_now(){
        location.href="<?php base_url();?>registration/signup_load";
      }
    </script>
<script>
    $('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });  
      
      </script>
  </body>
</html>
<script src="<?php echo SUPER_JS_PATH; ?>jquery-1.12.4.js"></script>
<script src="<?php echo SUPER_JS_PATH; ?>jquery-ui.js"></script>
<script type="text/javascript">
   $("#shipping_form").submit(function(){
     var mobile_pattern = /^[6-9]{1}[0-9]{9}$/;
    var email_pattern = /^[a-zA-Z0-9][a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    $("#name_err,#mobile_err,#pincode_err,#locality_err,#email_err,#address_err,#district_err,#state_err").html("");
     var s_name = $("#name").val().trim();
     var s_mobile = $("#mobile").val();
     var s_pin = $("#pincode").val();
     var s_locality = $("#locality").val().trim();
     var s_email = $("#email").val();
     var s_addr = $("#address").val().trim();
     // var s_district = $("#district").val();
     // var s_state = $("#state").val();
     var mobile1=$('#mobile1').val();
     var str=true;
     if(s_name == '')
     {
        $("#name_err").html('Name is required');
        str = false;
     }
    if(s_mobile == '')
     {
        $("#mobile_err").html('Mobile is required');
        str = false;
     }
     if(s_mobile!="" && !mobile_pattern.test(s_mobile))
     {
         $("#mobile_err").html('Invalid mobile no.');
        str = false;
     }
     if(mobile1!="" && !mobile_pattern.test(mobile1))
     {
         $("#mobile1_err").html('Invalid mobile no.');
        str = false;
     }
     if(s_pin == '')
     {
        $("#pincode_err").html('Pincode is required');
        str = false;
     }
     if(s_locality == '')
     {
        $("#locality_err").html('Locality is required');
        str = false;
     }
     if(s_email == '')
     {
        $("#email_err").html('Email is required');
        str = false;
     }
     if(s_email!="" && !email_pattern.test(s_email))
     {
         $("#email_err").html('Invalid email id');
        str = false;
     }
     if(s_addr == '')
     {
        $("#address_err").html('Address is required');
        str = false;
     }
     // if(s_district == '')
     // {
     //    $("#district_err").html('District is required');
     //    str = false;
     // }
     // if(s_state == '')
     // {
     //    $("#state_err").html('State is required');
     //    str = false;
     // }
  return str;
});
  </script>
  <!-- Form Validation End -->