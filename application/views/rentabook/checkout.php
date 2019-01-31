<?php// print_r($_SESSION);exit; ?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Cedarville+Cursive' rel='stylesheet' type='text/css'>
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
<span id="load"> 
  <body class="rentbg">
  <header>
   <?php $this->load->view('rentabook/includes/header_new');?>
  </header>
  <!--section banner start-->
  
  <section>
 
      <div class="container-fluid">
          <div class="container no-padd">
     <div class="col-sm-12 bg-wh no-padd shipping_order">        
         <ul class="breadcrumb col-sm-12">
    		<li class="active"><a href="javascript:void(0);">cart(<?php if(isset($total_item->qty)){ echo $total_item->qty;} else echo"0";?>)</a></li>
			<li><a href="javascript:void(0);">shipping</a></li>
			<li><a href="javascript:void(0);">payment process</a></li>
            <li><a href="javascript:void(0);"> complete </a></li>
		</ul>
         <div class="col-sm-8 no-padd" style="border-right: 1px solid #f1f1f1;">
<!--
             <div class="mycartname">
             <h4> &emsp; My Cart (3)</h4>
             </div>
-->
<!--product 1 start-->
 <span style="color:red;margin-left:60px"><b><?php if(isset($cmsg)) echo $cmsg; ?></b></span>
 <span id="deleteload"></span>
<?php if($checkout_data->num_rows()>0){
    foreach($checkout_data->result() as $c_data)
    {
    ?>      
            <div class="col-sm-12" style="border-top:1px solid #ddd;">
             <ul class="pull-right" style="display:inline-flex;list-style-type:none">
<?php $i=0;
if(!empty($_SESSION['user_id'])){
if(isset($wish_result)){              
            foreach($wish_result as $row){
              //echo $row->book_id;
              if($row->book_id==$c_data->book_id){
                $i+=1;
              }
            }
          }
        }
?>
<?php if($i==0){?>
               <li class="wishlist" value="<?php echo $c_data->book_id;?>">
               <i class="fa fa-heart-o tl-site"></i>
              </li> 
<?php } else {?>
    <li class="wishlist" value="<?php echo $c_data->book_id;?>">
               <i class="fa fa-heart tl-site"></i>
              </li> 
<?php }?>
                <li class="closeone" value="<?php echo $c_data->book_id;?>" onclick="getdelete_id(this.value)"><i class="fa fa-times-circle text-danger"></i></li>
                </ul>
       <div class="col-sm-4 text-center">
             <a href="<?php echo base_url();?>book/book_description/<?php echo str_replace('?','',$c_data->title);?>/<?php echo base64_encode($c_data->book_id);?>">
             <img src="<?php  echo ALL_IMAGE_PATH;?><?php echo $c_data->image;?>" style="display: inline;width: 100px;height: 100px" alt="book" class="m-t-10 img-responsive "></a>
           <div class="input-group col-sm-6 col-sm-offset-3 m-t-10 m-b-10">
          
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-sm btn-number" onclick="getdid(this.value)" value="<?php echo $c_data->cart_id;?>"><span class="glyphicon glyphicon-minus">
              </button>
          </span>
          
          <input type="text" name="quant[2]" onclick="<?php echo $c_data->qty;?>" class="form-control input-number input-sm" value="<?php echo $c_data->qty;?>" min="1" max="100">
          
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-sm btn-number" onclick="getid(this.value)" value="<?php echo $c_data->cart_id;?>"><span class="glyphicon glyphicon-plus">
              </button>
          </span>
      </div>
       </div>  
         <div class="col-sm-5 rentbookdetails">
          <h4><b><?php echo $c_data->title;?></b></h4>
          <ul>
           <li>Seller: Itsmytutor</li>
           <li><i class="fa fa-rupee text-success"></i><span class="text-success f18"><?php echo $c_data->selling_price;?></span> &nbsp; <span style="color:#ccc"><s> <i class="fa fa-rupee"></i><?php echo $c_data->price;?></s></span> &nbsp; <span class="text-success">50% offer</span></li>
         
<!--
        <div class="col-sm-6 no-padd">
            <button type="button" class="btn btn-primary no-bod-rad"> SAVE FOR LATER</button>
             </div>
        <div class="col-sm-6">
            <button type="button" class="btn btn-danger no-bod-rad"> REMOVE</button>
             </div>
-->
         </div>
         </div>
         <?php } ?>
         <?php  }
         else
         {
         ?>
         
         <tr><h1 style="text-align: center;margin-top:150px;text-decoration: none;">Your cart is empty</h1></li></tr>
         <?php 
       }
         ?>

         
       
<!--product 1 end-->


             </div>
        <div class="col-sm-4 five-padd">
          <div class="col-sm-12 pricesection" style="background-color:#f1f1f1;">
            <h4 class="tl-site"><b>PRICE DETAILS</b></h4>
            
            <div class="br-bt"></div>
            <!-- <?php// if(isset($msg)) echo "<span style='color:red;'><b>".$msg."</b></span>"?> -->
            <span id="coupon_err" style="color:red"><b><?php echo $this->session->flashdata('msg1'); ?></b></span>
            <ul>
              <li>
                <form id="coupon_form" action="<?php echo base_url();?>rentabook/addtocart_cont/coupon" method="post">
                  Coupon
                  <input id="coupon" type="text" name="coupon" value="<?php echo set_value('coupon'); ?>">
                  <input class="btn btn-outline no-bod-rad" type="submit" name="appply" value="Apply">
                </form>
              </li>
              
             <li>Price(<?php if(isset($total_item->qty)){ echo $total_item->qty;} else echo"0";?>items) <span class="pull-right"><span id="imgload"><i class="fa fa-rupee"></i><span class="text-success"><?php if(isset($total_sp->total_sp)){ echo $total_sp->total_sp; }else echo "0";?></span></span></span></li>
             
             <li>Delivery Charges <span class="pull-right"><span id="imgload2"><i class="fa fa-rupee"></i><span class="text-success"><?php if(isset($total_ship_char->total_shipcharge)){ echo $total_ship_char->total_shipcharge; }else echo "0";?></span></span></span></li>
             
             <li>Coupan discount <span class="pull-right"><span id="imgload3"><i class="fa fa-rupee"></i><span class="text-success"><?php if($this->session->userdata('dis_amt')){echo $this->session->userdata('dis_amt');}else{echo "0";} ?></span></span></span></li>   
            </ul>
            
            <h4 class="savingline">Total <span class="pull-right"><span id="imgload4"><i class="fa fa-rupee"></i><span class="text-success"><?php 
            if(isset($total_price->total)){ 
                echo $total_price->total-$this->session->userdata('dis_amt');
             }elseif(!empty($this->session->userdata('alltotal'))) {
                echo $this->session->userdata('alltotal');
              }else{
                echo "0";
              }

                ?></span></span></span></h4>
              
          </div>
        <div class="col-sm-12">
            <a href="<?php echo base_url();?>shipping"><button class="btn btn-outline1 btn-lg no-bod-rad col-sm-12 m-t-15 m-b-10"> PROCEED TO CHECKOUT </button></a>
           <a href="<?php echo base_url();?>book"><button class="btn btn-default btn-lg no-bod-rad col-sm-12 m-t-10"> CONTINUE SHOPPING</button></a>
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

  <div class="clearfix"></div>
  <!-- books section start-->

      <?php 

      if(isset($cart_related_books)){ ?>
      <section>
       <div class="container-fluid">
        <div class="container bg-wh">
    
       <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                  <div class="col-md-12">
                <!-- Controls -->
                <div class="col-sm-6">
                 <h3 class="m-b-18"> <b>RELATED BOOKS</b></h3>
               </div>
                <div class="controls hidden-xs col-sm-6">
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
                      foreach($cart_related_books as $row){;  ?>
                       
                       <?php if($i==1){?>
                       <div class="item active">
                    <div class="row"> 
                    <?php }elseif($i==$j+1){?>
                      <div class="item">
                    <div class="row">
                     <?php } ?>
                         

                              <div class="col-sm-2 five-padd">
             <div class="bookhead text-center">
                                  <?php $k=0;
if(!empty($_SESSION['user_id'])){
if(isset($wish_result)){              
            foreach($wish_result as $wrow){
              // echo $row->book_id;
              // echo $wrow->book_id;
              if($wrow->book_id==$row->book_id){
                $k+=1;
              }
            }
          }
        }

?>
      <?php if($k==0){?>
               <li style="list-style-type: none" class="wishlist" value="<?php echo $row->book_id;?>">
               <i class="fa fa-heart-o tl-site"></i>
              </li> 
<?php } else {?>
    <li style="list-style-type: none" class="wishlist" value="<?php echo $row->book_id;?>">
               <i class="fa fa-heart tl-site"></i>
              </li> 
<?php }?>
                 <a href="<?php echo base_url();?>book/book_description/<?php echo str_replace('?','',$row->title);?>/<?php echo base64_encode($row->book_id);?>">
                <img src="<?php echo BOOK_FOLDER;?>books_images/<?php echo $row->image;?>" alt="book" class="m-t-15"></a>
                 <p class="m-t-10 m-b-0" style="color: black;"> <b><?php echo ucwords(strtolower(strlen($row->title)>17?substr($row->title,0,17).'...':$row->title));?></b></p>
            
            
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
    <?php }else{ ?>
      <span id="newload">
      <section>
       <div class="container-fluid">
        <div class="container bg-wh">
    
       <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                  <div class="col-md-12">
                <!-- Controls -->
                <div class="col-sm-6">
                 <h3 class="m-b-18"> <b>NEW BOOKS</b></h3>
               </div>
                <div class="controls hidden-xs col-sm-6">
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
                 <?php $k=0;
if(!empty($_SESSION['user_id'])){
if(isset($wish_result)){              
            foreach($wish_result as $wrow){
              // echo $row->book_id;
              // echo $wrow->book_id;
              if($wrow->book_id==$row->book_id){
                $k+=1;
              }
            }
          }
        }

?>
      <?php if($k==0){?>
               <li style="list-style-type: none" class="wishlist" value="<?php echo $row->book_id;?>">
               <i class="fa fa-heart-o tl-site"></i>
              </li> 
<?php } else {?>
    <li style="list-style-type: none" class="wishlist" value="<?php echo $row->book_id;?>">
               <i class="fa fa-heart tl-site"></i>
              </li> 
<?php }?>
                 <a href="<?php echo base_url();?>book/book_description/<?php echo str_replace('?','',$row->title);?>/<?php echo base64_encode($row->book_id);?>">
                <img src="<?php echo BOOK_FOLDER;?>books_images/<?php echo $row->image;?>" alt="book" class="m-t-15"></a>
                 <p class="m-t-10 m-b-0" style="color: black;"> <b><?php echo ucwords(strtolower(strlen($row->title)>17?substr($row->title,0,17).'...':$row->title));?></b></p>
            
            
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
      </section></span>
    <?php } ?>
  <!-- books section end-->
<!--footer strart end-->
       <footer>
 <?php $this->load->view('rentabook/includes/footer');?>
  </footer>
<!--footer strart end-->
      <script type="text/javascript">
$(function(){
  $('a[href="#"]').on('click', function(e){
    e.preventDefault();
  });
  
  $('#category_menu > li').on('mouseover', function(e){
    $(this).find("ul:first").show();
    $(this).find('> a').addClass('active');
  }).on('mouseout', function(e){
    $(this).find("ul:first").hide();
    $(this).find('> a').removeClass('active');
  });
  
  $('#category_menu li li').on('mouseover',function(e){
    if($(this).has('ul').length) {
      $(this).parent().addClass('expanded');
    }
    $('ul:first',this).parent().find('> a').addClass('active');
    $('ul:first',this).show();
  }).on('mouseout',function(e){
    $(this).parent().removeClass('expanded');
    $('ul:first',this).parent().find('> a').removeClass('active');
    $('ul:first', this).hide();
  });
});
</script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo MYJS_PATH;?>jquery.min.js"></script>
    <script src="<?php echo MYJS_PATH;?>jquery-1.11.1.min.js"></script>
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
</span>
</html>

<script type="text/javascript">
function getid(cid)
{ 
  //alert(cid);
var xhttp;
if (window.XMLHttpRequest) {
// code for modern browsers
xhttp = new XMLHttpRequest();
} else {
// code for IE6, IE5
xhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xhttp.onreadystatechange = function() {
if (this.readyState == 4) {
document.getElementById("load").innerHTML = 
this.responseText;
}
};
xhttp.open("GET", "<?php echo base_url();?>rentabook/qty_controller/inc_qty/"+cid, true);// true is for asynchronus and false synchronus
var ajaxDisplay = document.getElementById("imgload");
var ajaxDisplay2 = document.getElementById("imgload2");
var ajaxDisplay3 = document.getElementById("imgload3");
var ajaxDisplay4 = document.getElementById("imgload4");
ajaxDisplay.innerHTML = "<center style='padding-left:250px;'><img style='margin-bottom:40px;height:10px;width:15px' src='uploads/ajax-loader.gif'/></center>"
ajaxDisplay2.innerHTML = "<center style='padding-left:250px;'><img style='margin-bottom:40px;height:10px;width:15px' src='uploads/ajax-loader.gif'/></center>"
ajaxDisplay3.innerHTML = "<center style='padding-left:250px;'><img style='margin-bottom:40px;height:10px;width:15px' src='uploads/ajax-loader.gif'/></center>"
ajaxDisplay4.innerHTML = "<center style='padding-left:250px;'><img style='margin-bottom:40px;height:10px;width:15px' src='uploads/ajax-loader.gif'/></center>"
xhttp.send();
}

function getdid(did)
{ 
  //alert(cid);
var xhttp;
if (window.XMLHttpRequest) {
// code for modern browsers
xhttp = new XMLHttpRequest();
} else {
// code for IE6, IE5
xhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xhttp.onreadystatechange = function() {
if (this.readyState == 4) {
document.getElementById("load").innerHTML = 
this.responseText;
}
};
xhttp.open("GET", "<?php echo base_url();?>rentabook/qty_controller/dec_qty/"+did, true);// true is for asynchronus and false synchronus
var ajaxDisplay = document.getElementById("imgload");
var ajaxDisplay2 = document.getElementById("imgload2");
var ajaxDisplay3 = document.getElementById("imgload3");
var ajaxDisplay4 = document.getElementById("imgload4");
ajaxDisplay.innerHTML = "<center style='padding-left:250px;'><img style='margin-bottom:40px;height:10px;width:15px' src='uploads/ajax-loader.gif'/></center>"
ajaxDisplay2.innerHTML = "<center style='padding-left:250px;'><img style='margin-bottom:40px;height:10px;width:15px' src='uploads/ajax-loader.gif'/></center>"
ajaxDisplay3.innerHTML = "<center style='padding-left:250px;'><img style='margin-bottom:40px;height:10px;width:15px' src='uploads/ajax-loader.gif'/></center>"
ajaxDisplay4.innerHTML = "<center style='padding-left:250px;'><img style='margin-bottom:40px;height:10px;width:15px' src='uploads/ajax-loader.gif'/></center>"
// var ajaxDisplay = document.getElementById("imgload");
// ajaxDisplay.innerHTML = "<center style='margin-top:50px;'><img src='uploads/ajax-loader.gif'/></center>"
xhttp.send();
}
//getting wishlist id

function getdelete_id(d_id)
{ 
  //alert(d_id);
var xhttp;
if (window.XMLHttpRequest) {
// code for modern browsers
xhttp = new XMLHttpRequest();
} else {
// code for IE6, IE5
xhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xhttp.onreadystatechange = function() {
if (this.readyState == 4) {
document.getElementById("load").innerHTML = 
this.responseText;
}
};
xhttp.open("GET", "<?php echo base_url();?>rentabook/frontend/delete_cart/"+d_id, true);// true is for asynchronus and false synchronus
var ajaxDisplay = document.getElementById("deleteload");
var ajaxDisplay2 = document.getElementById("newload");
ajaxDisplay.innerHTML = "<center style='margin-top:2px;'><img src='uploads/ajax-loader.gif' /></center>";
xhttp.send();

}
</script>

<script type="text/javascript">
   $("#coupon_form").submit(function(){
    $("#coupon_err").html("");
     var coupon = $("#coupon").val().trim();
     var str=true;
     if(coupon == '')
     {
        $("#coupon_err").html('<b>Coupon is required</b>');
        str = false;
     }
  return str;
});
  </script>

<script type="text/javascript">
$(document).ready(function(){
  $('.wishlist').on('click',function(){
    if($(this).find("i").attr('class') == "fa fa-heart tl-site"){
      $(this).find("i").removeClass();
      $(this).find("i").addClass("fa fa-heart-o tl-site");  
    }
    else{
      $(this).find("i").removeClass();
      $(this).find("i").addClass("fa fa-heart tl-site");    
    }
    var book_id=$(this).val();
    if(book_id)
    {
             $.ajax({
              method:"POST",
              url:"<?php echo base_url();?>rentabook/frontend/addRemoveWishlist",
              data:{b_id:book_id}
             });
    }
  });
});
</script> 
