<body class="rentbg">
  <header>
   <?php $this->load->view('rentabook/includes/menubar');?>
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
 <span style="color:red;margin-left:100px"><b><?php if(isset($cmsg)) echo $cmsg; ?></b></span>
<?php if($checkout_data->num_rows()>0){
    foreach($checkout_data->result() as $c_data)
    {
    ?>      
            <div class="col-sm-12" style="border-top:1px solid #ddd;">
             <ul class="pull-right" style="display:inline-flex;list-style-type:none">
              <span id="wish">
<?php $i=0; ?>
<?php 
if(isset($wish_result->product_id)){              
            foreach($wish_result->product_id as $row){
              if($row==$prow->product_id){
                $i+=1;
              }
            }
          }
?>
<?php if($i==0){?>
               <li class="wishlist" value="<?php echo $c_data->book_id;?>" onclick="getwid(this.value)">
               <i class="fa fa-heart-o tl-site"></i>
              </li> 
<?php } else {?>
    <li class="wishlist" value="<?php echo $c_data->book_id;?>" onclick="getwid(this.value)">
               <i class="fa fa-heart tl-site"></i>
              </li> 
<?php }?></span>
                <li class="closeone" value="<?php echo $c_data->book_id;?>" onclick="getdelete_id(this.value)"><i class="fa fa-times-circle text-danger"></i></li>
                </ul>
       <div class="col-sm-4 text-center">
             <img src="<?php  echo ALL_IMAGE_PATH;?><?php echo $c_data->image;?>" style="display: inline;" alt="book" class="m-t-10 img-responsive ">
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
            <span style="color:red"><b><?php echo $this->session->flashdata('msg1'); ?></b></span>
            <ul>
              <li>
                <form action="<?php echo base_url();?>rentabook/addtocart_cont/coupon" method="post">
                  Coupon
                  <input type="text" name="coupon" value="<?php echo set_value('coupon'); ?>">
                  <input class="btn btn-outline no-bod-rad" type="submit" name="appply" value="Apply">
                </form>
              </li>
             
             <li>Price(<?php if(isset($total_item->qty)){ echo $total_item->qty;} else echo"0";?>items) <span class="pull-right"><i class="fa fa-rupee"></i><span class="text-success"><?php if(isset($total_sp->total_sp)){ echo $total_sp->total_sp; }else echo "0";?></span></span></li>
             
             <li>Delivery Charges <span class="pull-right"><i class="fa fa-rupee"></i><span class="text-success"><?php if(isset($total_ship_char->total_shipcharge)){ echo $total_ship_char->total_shipcharge; }else echo "0";?></span></span></li>
             
             <li>Coupan discount <span class="pull-right"><i class="fa fa-rupee"></i><span class="text-success"><?php if($this->session->userdata('dis_amt')){echo $this->session->userdata('dis_amt');}else{echo "0";} ?></span></span></li>   
            </ul>
            
            <h4 class="savingline">Total <span class="pull-right"><i class="fa fa-rupee"></i><span class="text-success"><?php 
            if(isset($total_price->total)){ 
                echo $total_price->total-$this->session->userdata('dis_amt');
             }elseif(!empty($this->session->userdata('alltotal'))) {
                echo $this->session->userdata('alltotal');
              }else{
                echo "0";
              }

                ?></span></span></h4>
              
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
      <section>
       <div class="container-fluid">
        <div class="container bg-wh">
         <h3 class="m-b-18"> <b>RELATED BOOKS</b></h3>
            <div class="col-sm-2">
               <div class="bookhead text-center">
                <img src="<?php  echo MYIMAGES_PATH;?>rentabooks/book.jpg" alt="book" class="m-t-15">
                 <p class="m-t-10 m-b-0"> <b>Half GirlFriend</b></p>
            
             <div class="col-sm-6">
                <h5 class="tl-site"> <b>BUY </b> </h5>
             </div>
                <div class="col-sm-6">
                <i class="fa fa-heart-o tl-site"></i>
             </div>
                    <div class="clearfix"></div>
            </div>
                </div>  <div class="col-sm-2">
                
             <div class="bookhead text-center">
                <img src="<?php  echo MYIMAGES_PATH;?>rentabooks/book.jpg" alt="book" class="m-t-15">
                 <p class="m-t-10 m-b-0"> <b>Half GirlFriend</b></p>
            
             <div class="col-sm-6">
                <h5 class="tl-site"> <b>BUY </b> </h5>
             </div>
                <div class="col-sm-6">
                <i class="fa fa-heart-o tl-site"></i>
             </div>
                    <div class="clearfix"></div>
            </div>
                </div>  <div class="col-sm-2">
                
             <div class="bookhead text-center">
                <img src="<?php  echo MYIMAGES_PATH;?>rentabooks/book.jpg" alt="book" class="m-t-15">
                 <p class="m-t-10 m-b-0"> <b>Half GirlFriend</b></p>
            
             <div class="col-sm-6">
                <h5 class="tl-site"> <b>BUY </b> </h5>
             </div>
                <div class="col-sm-6">
                <i class="fa fa-heart-o tl-site"></i>
             </div>
                    <div class="clearfix"></div>
            </div>
                </div>  <div class="col-sm-2">
                
             <div class="bookhead text-center">
                <img src="<?php  echo MYIMAGES_PATH;?>rentabooks/book.jpg" alt="book" class="m-t-15">
                 <p class="m-t-10 m-b-0"> <b>Half GirlFriend</b></p>
            
             <div class="col-sm-6">
                <h5 class="tl-site"> <b>BUY </b> </h5>
             </div>
                <div class="col-sm-6">
                <i class="fa fa-heart-o tl-site"></i>
             </div>
                    <div class="clearfix"></div>
            </div>
                </div>  <div class="col-sm-2">
                
             <div class="bookhead text-center">
                <img src="<?php  echo MYIMAGES_PATH;?>rentabooks/book.jpg" alt="book" class="m-t-15">
                 <p class="m-t-10 m-b-0"> <b>Half GirlFriend</b></p>
            
             <div class="col-sm-6">
                <h5 class="tl-site"> <b>BUY </b> </h5>
             </div>
                <div class="col-sm-6">
                <i class="fa fa-heart-o tl-site"></i>
             </div>
                    <div class="clearfix"></div>
            </div>
                </div> 
            <div class="col-sm-2">
                
             <div class="bookhead text-center">
                <img src="<?php  echo MYIMAGES_PATH;?>rentabooks/book.jpg" alt="book" class="m-t-15">
                 <p class="m-t-10 m-b-0"> <b>Half GirlFriend</b></p>
            
             <div class="col-sm-6">
                <h5 class="tl-site"> <b>BUY </b> </h5>
             </div>
                <div class="col-sm-6">
                <i class="fa fa-heart-o tl-site"></i>
             </div>
                    <div class="clearfix"></div>
            </div>
                </div>
            <div class="clearfix">&nbsp;</div>           <div class="clearfix">&nbsp;</div>            
        </div>  
           
       </div>
      </section>
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
var ajaxDisplay = document.getElementById("load");
ajaxDisplay.innerHTML = "<center style='margin-top:280px;'><img src='uploads/ajax-loader.gif'/></center>"
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
var ajaxDisplay = document.getElementById("load");
ajaxDisplay.innerHTML = "<center style='margin-top:280px;'><img src='uploads/ajax-loader.gif' /></center>"
xhttp.send();
}
//getting wishlist id
function getwid(wid)
{ 
  //alert(wid);
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
document.getElementById("wish").innerHTML = this.responseText;
//document.getElementById("wish").innerHTML="<i class='fa fa-gratipay tl-site' style='color:red;'></i>";
}
};

xhttp.open("GET", "<?php echo base_url();?>rentabook/frontend/wishlist/"+wid, true);// true is for asynchronus and false synchronus
xhttp.send();

}
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
var ajaxDisplay = document.getElementById("load");
ajaxDisplay.innerHTML = "<center style='margin-top:280px;'><img src='uploads/ajax-loader.gif' /></center>"
xhttp.send();

}
</script>
