
        <?php
        // unset($_SESSION['ord_id']);
        //unset($_SESSION['coupon_dis']);
        // unset($_SESSION['dis_amt']);
        // unset($_SESSION['alltotal']);
        //unset($_SESSION['coupan_code']);
        ?>
        </p>
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
      <style>
.col-item
{
    border: 1px solid #E1E1E1;
    border-radius: 5px;
    background: #FFF;
}
.col-item .photo img
{
    margin: 0 auto;
    width: 100%;
}

.col-item .info
{
    padding: 10px;
    border-radius: 0 0 5px 5px;
    margin-top: 1px;
}

.col-item:hover .info {
    background-color: #F5F5DC;
}
.col-item .price
{
    /*width: 50%;*/
    float: left;
    margin-top: 5px;
}

.col-item .price h5
{
    line-height: 20px;
    margin: 0;
}

.price-text-color
{
    color: #219FD1;
}

.col-item .info .rating
{
    color: #777;
}

.col-item .rating
{
    /*width: 50%;*/
    float: left;
    font-size: 17px;
    text-align: right;
    line-height: 52px;
    margin-bottom: 10px;
    height: 52px;
}

.col-item .separator
{
    border-top: 1px solid #E1E1E1;
}

.clear-left
{
    clear: left;
}

.col-item .separator p
{
    line-height: 20px;
    margin-bottom: 0;
    margin-top: 10px;
    text-align: center;
}

.col-item .separator p i
{
    margin-right: 5px;
}
.col-item .btn-add
{
    width: 50%;
    float: left;
}

.col-item .btn-add
{
    border-right: 1px solid #E1E1E1;
}

.col-item .btn-details
{
    width: 50%;
    float: left;
    padding-left: 10px;
}
.controls
{
    margin-top: 20px;
}
[data-slide="prev"]
{
    margin-right: 10px;
}
      
</style>
</head>
  <body class="rentbg">
  <header>
   <?php $this->load->view('rentabook/includes/header_new');?>
  </header>
  <!--section banner start-->
  <section>

      <div class="container-fluid">
          <div class="container no-padd shipping_order">
          
     <div class="col-sm-12 bg-wh no-padd">
         <ul class="breadcrumb col-sm-12">
        <li><a href="#">cart</a></li>
      <li ><a href="#">shipping</a></li>
      <li><a href="javascript:void(0);">payment process</a></li>
            <li class="completed"><a href="javascript:void(0);"> complete </a></li>
    </ul>
        <div class="col-sm-12">
         <div class="row">
                        <div class="col-sm-12 text-center">
                <img src="<?php echo base_url();?>assets/images/payment_success.png" class="img-responsive m-t-20" style="display:inline">
                <h2 class="text-success"> Your order has been placed</h2>
                <p>Your order number <b><?php if($_SESSION['ord_id']){echo $_SESSION['ord_id'];}else $_SESSION['trans_id'];?></b></p>
                <p>Your order has been successfully processed !</p>
                <p>You can   view your order history by going to the <a href="#">My Account</a> page and clicking on <a href="<?php echo base_url().'book/myorders';?>">Order history</a></p>
             </div>
         <div class="col-sm-12 text-center">
         
        <div class="clearfix">&nbsp;</div>
             <div class="col-sm-12">
             <a href="<?php echo base_url().'book' ?>"><button class="btn btn-outline btn-lg no-bod-rad m-t-15 m-b-10" name="submit"> CONTINUE SHOPPING </button></a>

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

  <div class="clearfix"></div>
  <!-- books section start-->
      <section>
       <div class="container-fluid">
        <div class="container bg-wh">
    
       <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                  <div class="col-md-12">
                <!-- Controls -->
                <div class="col-sm-3">
                 <h3 class="m-b-18"> <b>NEW ARRIVAL BOOKS</b></h3>
               </div>
                <div class="controls hidden-xs col-sm-9">
                  <div class="pull-right">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                            data-slide="next"></a>
                      </div>
                </div>
            </div>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
               
                      <?php  $i=1;$j=6;
                      foreach($new_data as $row){;  ?>
                       
                       <?php if($i==1){?>
                       <div class="item active">
                    <div class="row"> 
                    <?php }elseif($i==$j+1){?>
                      <div class="item">
                    <div class="row">
                     <?php } ?>
                         

            <div class="col-sm-2 five-padd">
             <div class="bookhead text-center">
                 <i class="fa fa-heart-o tl-site"></i>
                 <a href="<?php echo base_url();?>book/book_description/<?php echo str_replace('?','',$row->title);?>/<?php echo base64_encode($row->book_id);?>">
                <img src="<?php echo BOOK_FOLDER;?>books_images/<?php echo $row->image;?>" alt="book" class="m-t-15"></a>
                 <p class="m-t-10 m-b-0" style="color: black";> <b><?php echo ucwords(strtolower(strlen($row->title)>17?substr($row->title,0,17).'...':$row->title));?></b></p>
            
            
                <a href="<?php echo base_url();?>book/book_description/<?php echo str_replace('?','',$row->title);?>/<?php echo base64_encode($row->book_id);?>"><button type="button" class="btn btn-outline no-bod-rad btn-sm"> BUY NOW</button></a>
             </div>
         
               
                    <div class="clearfix"></div>
 </div>
   
               
               
            <?php if($i==6){?>
                       </div>
                    </div> 
                  <?php }elseif($i==$j+6){ $j=$j+6  ?>
                      </div>
                    </div>
                     <?php } ?>
           <?php $i++;
            } ?>
           
                </div>
            </div>
        </div> 
      </div> 
     
      <div class="clearfix">&nbsp;</div>                        
      </section>
  <!-- books section end-->
  <div class="clearfix">&nbsp;</div>
  <!-- books section end-->
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