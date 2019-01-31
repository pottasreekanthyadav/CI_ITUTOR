
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
<style type="text/css">
li{
  list-style-type:none;
}
  #remove{
        background-color: #fff;
        border:0;
  }
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
</head><span id="load">
  <body class="rentbg">
  <header>
   <?php $this->load->view('rentabook/includes/header_new');?>
  </header>
  <!--section banner start-->
  <section>
<?php foreach($product_detail->result() as $b_row) { ?>
      <div class="container-fluid">
          <div class="container no-padd">
     <div class="col-sm-12 bg-wh">
       <div class="col-sm-2 text-center">

            <div class="clearfix">&nbsp;</div>
            <?php $book_id=$this->uri->segment(4); ?>
            <form action="<?php echo base_url();?>rentabook/Addtocart_cont/cart/<?php echo $book_id;?>" method="post">
              <input type="hidden" name='qty' value="1"/> 
              <input type="hidden" name="pid" value="<?php echo $book_id; ?>">
             <button type="submit" name="add" id="remove"><img  src="<?php  echo ALL_IMAGE_PATH;?><?php echo $b_row->image;?>" alt="book" class="m-t-15 img-responsive "></button>
             </form>
       </div> 
 
         <div class="col-sm-4 rentbookdetails">
             <div class="clearfix">&nbsp;</div>
          <h4><b><?php echo $b_row->title;?></b></h4>
          <ul>
           <li> Author : <?php if(isset($b_row->author)){echo $b_row->author;} else echo "no title";?></li>
           <li> Publisher : <?php if(isset($b_row->publisher)){echo $b_row->publisher;} else echo "no publisher";?></li>
           <li> Selling Price: <p class="fa fa-rupee"><?php echo $b_row->selling_price;?></p></li>
           <?php // adding data to cart table(addtocart/cart)  ?>
       

       <form action="<?php echo base_url();?>rentabook/Addtocart_cont/cart/<?php echo $book_id;?>/<?php echo $this->uri->segment(3);?>/<?php echo $this->uri->segment(4);?>" method="post">
       <input type="hidden" name='qty' value="1"/> 
       
       <input type="hidden" name="pid" value="<?php echo $book_id; ?>">
  
                 <button type="submit" name="add" class="btn btn_rent no-bod-rad col-sm-10 submit m-t-15">ADD TO CART</button>

       </form>
          </ul>
         </div>
          
         <div class="col-sm-4 rentbookdetails">
             <div class="clearfix">&nbsp;</div>
           <div class="col-sm-12"  style="border-left:1px solid #ddd">
<div class="col-sm-10 col-sm-offset-2">
          
          <ul>
                  <li style="display:none"> No.Of Pages : 153 Pages</li>
                  
           <li> Viewed by : <b><?php echo $view_count;?></b> viewers</li>
<?php 
 $i=0;
if(!empty($_SESSION['user_id'])){
if(isset($description_wish_result)){              
            foreach($description_wish_result as $row){
              if($row->book_id==$b_row->book_id){
                $i+=1;
              }
            }
          }
        }
?>
<?php if($i==0){?>
<a href="<?php echo base_url();?>rentabook/Addtocart_cont/wishlist/<?php echo $book_id;?>"> <button type="submit" class="btn btn-default no-bod-rad col-sm-12 submit m-t-15">Add to Wishlist</button></a>
<?php }else {?>       
            <a href="<?php echo base_url();?>rentabook/Addtocart_cont/wishlist/<?php echo $book_id;?>">   <button type="submit" class="btn btn-default no-bod-rad col-sm-12 submit m-t-15">Remove From Wishlist</button></a>
<?php } ?>     
      
          </ul>
         </div>
               </div>  
             </div>
        <div class="clearfix">&nbsp;</div> <div class="clearfix">&nbsp;</div> <div class="clearfix">&nbsp;</div>
         <div class="col-sm-12">
        <p><b><?php echo $b_row->description;?></p>
              <div class="clearfix">&nbsp;</div>
     </div>
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
         <?php } ?>
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
    
       <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                  <div class="col-md-12">
                <!-- Controls -->
                <div class="col-sm-3">
                 <h3 class="m-b-18"> <b>RELATED BOOKS</b></h3>
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
                      foreach($realted_book_data as $row){;  ?>
                       
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
if(isset($description_wish_result)){              
            foreach($description_wish_result as $wrow){
              if($wrow->book_id==$row->book_id){
                $k+=1;
              }
            }
          }
        }

?>
      <?php if($k==0){?>
               <li class="wishlist" value="<?php echo $row->book_id;?>">
               <i class="fa fa-heart-o tl-site"></i>
              </li> 
<?php } else {?>
    <li class="wishlist" value="<?php echo $row->book_id;?>">
               <i class="fa fa-heart tl-site"></i>
              </li> 
<?php }?>
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
     
  </body></span>
</html>
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