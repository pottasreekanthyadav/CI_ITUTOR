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
    		<li><a href="<?php echo base_url();?>checkout">cart</a></li>
			<li class="active"><a href="javascript:void(0);">shipping</a></li>
			<li><a href="javascript:void(0);">payment process</a></li>
            <li><a href="javascript:void(0);"> complete </a></li>
		</ul>
        <div class="col-sm-8">
         <div class="row">
            <div class="col-sm-12">
            <?php $shipping=$ship->row();?>
                <form action="<?php echo base_url();?>rentabook/Shipping_cont/shipping" method="post" name="shipping_form" id="shipping_form" novalidate>
                    <div class="col-sm-offset-1 col-sm-5">
                <div class="form-group">
                    <label>Name</label> <span style="color:red;" id="name_err"> <?php echo form_error('name');?> </span>
                    <input name="name" type="text" class="form-control no-bod-rad" placeholder="Enter Your Name" value="<?php echo $shipping->name;?>" id="name" value="<?php echo set_value('name'); ?>">
                </div>
                        </div>
                <div class="form-group col-sm-5">
                    <label>Mobile</label> <span style="color:red;" id="mobile_err"><?php echo form_error('mobile');?></span>
                    <input type="text" class="form-control no-bod-rad" placeholder="Enter Your Mobile" value="<?php echo $shipping->mobile;?>" name="mobile" id="mobile"  maxlength="10" value="<?php echo set_value('mobile'); ?>">
                </div> 
                    <div class="col-sm-offset-1 col-sm-5">
                <div class="form-group">
                    <label>Email</label> <span style="color:red;" id="email_err"><?php echo form_error('email');?></span>
                    <input type="email" class="form-control no-bod-rad" placeholder="Enter Your Email" name="email" id="email" value="<?php $email=$this->session->userdata('user_email'); if(!empty($email)) echo $email;?>">
                   
                </div>
                        </div>
                <div class="form-group col-sm-5">
                    <label>Locality</label> <span style="color:red;" id="locality_err"><?php echo form_error('locality');?></span>
                    <input type="text" class="form-control no-bod-rad" placeholder="Enter Your Locality" name="locality" id="locality" value="<?php echo set_value('locality'); ?>">
                </div>
                <div class="col-sm-offset-1 col-sm-5">
                     <label>Pincode</label> <span style="color:red;" id="pincode_err"> <?php echo form_error('pincode');?></span>
                    <input type="text" class="form-control no-bod-rad" placeholder="Enter Your Pincode" name="pincode" id="pincode" maxlength="6" value="<?php echo set_value('pincode'); ?>">
                </div>
                    <div class="form-group col-sm-5">
                <div class="form-group">
                    <label>Landmark</label> <span style="color:red;" id=""></span>
                    <input type="text" class="form-control no-bod-rad" placeholder="Enter Your Landmark (optional)" name="landmark" value="<?php echo set_value('landmark'); ?>">
                </div>
                        </div>
                <div class="col-sm-offset-1 col-sm-5">
                    <label>Alternate Mobile</label> <span style="color:red;" id="mobile1_err"><?php echo form_error('lmobile');?></span>
                    <input type="text" class="form-control no-bod-rad" placeholder="Enter Mobile No. (optional)" name="lmobile" id="mobile1" maxlength="10" value="<?php echo set_value('lmobile'); ?>">
                </div> 
                   <div class="col-sm-offset-1 col-sm-10">
                <div class="form-group">
                    <label>Address</label> <span style="color:red;" id="address_err"><?php echo form_error('address');?></span>
                  <textarea class="form-control no-bod-rad" rows="3" style="resize:none" placeholder="Enter your Address" name="address" id="address"><?php echo set_value('address'); ?></textarea>
                </div>
                        </div>
                    <div class="col-sm-offset-1 col-sm-10">
                    <div class="form-group">
                        <label>Preffered Time </label>
                        <div class="clearfix"></div>
                  <label class="radio-inline">
      <input type="radio" name="addr_type" value="home" checked>Home (All day delivery) 
    </label>
    <label class="radio-inline">
      <input type="radio" name="addr_type" value="work">Work (10AM to 5PM)
    </label>
                        </div>
    
                </div>
                          <div class="col-sm-offset-1 col-sm-10">
                              <div class="clearfix">&nbsp;</div>
        <button type="submit" class="col-sm-12 btn btn-outline1 btn-lg no-bod-rad" name="apply"> SAVE AND DELIVER HERE</button>
                    </div>
                </form>
             </div>
           </div>
            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
         </div>
        <div class="col-sm-4 five-padd">
          <div class="col-sm-12 pricesection" style="background-color:#f1f1f1;">
            <h4 class="tl-site"><b>PRICE DETAILS</b></h4>
            <div class="br-bt"></div>
            <ul>
             <li><b>Price(<?php if($total_item->qty){ echo $total_item->qty;} else echo"0";?>items)</b> <span class="pull-right"><i class="fa fa-rupee"></i><span class="text-success"><?php if($total_sp->total_sp){ echo $total_sp->total_sp; }else echo "0";?></span></span></li>
             <li><b>Delivery Charges </b><span class="pull-right"><i class="fa fa-rupee"></i><span class="text-success"><?php if($total_ship_char->total_shipcharge){ echo $total_ship_char->total_shipcharge; }else echo "0";?></span></span></li> 
             <li><b>Coupan discount </b><span class="pull-right"><i class="fa fa-rupee"></i><span class="text-success"><?php if($this->session->userdata('dis_amt')){echo $this->session->userdata('dis_amt');}else{echo "0";} ?></span></span></li> 
            </ul>
            <h4 class="savingline"><span class="text-success"><b>Total Payable Amount </b></span><span class="pull-right"><i class="fa fa-rupee"></i><span class="text-success"><b><?php if($total_price->total){ echo $total_price->total-$this->session->userdata('dis_amt'); }else echo $this->session->userdata('alltotal');?></b></span></span></h4>
              
        <div class="col-sm-12">
<!--            <button class="btn btn-info no-bod-rad col-sm-12 m-t-15 m-b-10"> PROCEED TO CHECKOUT </button>-->
            
            </div>
        </div>
        <div class="clearfix">&nbsp;</div> 
         
         </div>
              <div class="clearfix">&nbsp;</div>
 <div class="col-sm-4 bg-wh hidden">
     <div class="col-sm-12">
    <h4 class="m-t-15"> <b>Request for Rent</b></h4>
     <form>
     <div class="form-group m-t-15">
      <select class="form-control no-bod-rad">
        <option>No of Books</option>
        <option>1 </option>
      </select>
     </div>
         <div class="form-group m-t-15">
      <select class="form-control no-bod-rad">
           <option>No of Months</option>
        <option>1</option>
       
      </select>
     </div>
        <h4 class="m-t-15"> Price : <b><i class="fa fa-inr" aria-hidden="true"></i> 1000/- </b></h4>
         <p class="m-t-15"><small>Note : Exclude One Time Registration Fee And Security Deposit</small></p>
     </form>
         <button type="button" class="btn btn-blue col-sm-10 col-sm-offset-1 no-bod-rad col-wh m-t-15"> REQUEST</button>
         <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>
 </div>
     </div>
       </div>
      </div>

  </section>
  <!--section banner end-->

  <div class="clearfix">&nbsp;</div>
  <!-- books section start-->
      <section>
       <div class="container-fluid">
        <div class="container bg-wh">
    
       <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                  <div class="col-md-12">
                <!-- Controls -->
                <div class="col-sm-3">
                 <h3 class="m-b-18"> <b>FAMOUS BOOKS</b></h3>
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
                      foreach($famous_data as $row){;  ?>
                       
                       <?php if($i==1){?>
                       <div class="item active">
                    <div class="row"> 
                    <?php }elseif($i==$j+1){?>
                      <div class="item">
                    <div class="row">
                     <?php } ?>
                         

            <div class="col-sm-2 five-padd">
             <div class="bookhead text-center">
                 <p class="wishlist">
                    <i class="fa fa-heart-o tl-site"></i>
                  </p>
                 
                 <a href="<?php echo base_url();?>book/book_description/<?php echo str_replace('?','',$row->title);?>/<?php echo base64_encode($row->book_id);?>">
                <img src="<?php echo BOOK_FOLDER;?>books_images/<?php echo $row->image;?>" alt="book" class="m-t-15"></a>
                 <p class="m-t-10 m-b-0" style="color: black";> <b><?php echo $row->title;?></b></p>
            
            
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