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
  li{
    list-style-type:none;
  }
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
     <!-- menu end -->
   </header>
   <!--section banner start-->
   <?php if(!empty($slider_data)){ ?>
    <section class="rentbanner">
      <div class="container-fluid no-padd">
       <div class="col-sm-12">
         <a href="#" data-toggle="modal" data-target="#suggest_a_book">
          <button type="button" class="btn btn-outline1 suggestabook no-bod-rad">Suggest a Book</button>
        </a>
      </div>
      <div class="container no-padd">
        
        <div class="col-sm-12" style="padding-left: 0px;">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <?php 
            $i=0;$flag_2 = 1;
            foreach ($slider_data->result() as $slider){ 
        //if($slider->make_first_image == 1){
              if($flag_2){
                ?>
                <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>" class="active"></li>
                <?php 
                $flag_2 = 0;
              }
              else{
               ?>
               <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>"></li>
             <?php }  
           } 
           ?>
         </ol>

         <!-- Wrapper for slides -->
         <div class="carousel-inner">
          <?php 
          $flag = 1;
          foreach ($slider_data->result() as $slider){ 
        //if($slider->make_first_image == 1){
            if($flag){

              ?>
              <div class="item active">
                <a href="<?php echo $slider->slider_url ?>" target="_blank"><img src="<?php  echo base_url();?>uploads/books/slider_images/<?php echo $slider->slider_image ?>" style="width:100%;"></a>
              </div>
              <?php
              $flag = 0;
            }
            else{
              ?>
              <div class="item">
                <a href="<?php echo $slider->slider_url ?>" target="_blank"> <img src="<?php  echo base_url();?>uploads/books/slider_images/<?php echo $slider->slider_image ?>" alt="img2" style="width:100%;"></a> 
              </div>    
              <?php
            }
          } ?>
          
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="fa fa-arrow-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="fa fa-arrow-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
<!--
 <div class="col-sm-4 bg-wh">
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
         <button type="button" class="btn btn_rent col-sm-10 col-sm-offset-1 no-bod-rad col-wh m-t-15"> REQUEST</button>
         <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>
 </div>
     </div>
   -->
 </div>
</div>

</section>
<?php } ?>
<!--section banner end-->
<!--fndg section start-->

<section>
  <div class="container">
   <div class="col-sm-3 col-xs-12">
    <div class="col-sm-12 col-xs-12 bg-wh fnbg-pl">
      <div class="col-sm-3 col-xs-3 fd">
       <img src="<?php  echo MYIMAGES_PATH;?>rentabooks/free_delivery.png" alt="free_delivery" style=" margin: 5px 0px;">
       
     </div>
     <div class="col-sm-9 col-xs-9">
       <h4 class="m-t-23 tl-site"><b>Free Delivery</b></h4>
     </div>
   </div>
 </div>  
 <div class="col-sm-3 col-xs-12">
  <div class="col-sm-12 col-xs-12 bg-wh fnbg-pl">
    <div class="col-sm-3 col-xs-3 fd">
     <img src="<?php  echo MYIMAGES_PATH;?>rentabooks/nodues.png" alt="No Dues on Late Fees">
   </div>
   <div class="col-sm-9 col-xs-9">
     <h4 class="m-t-23 tl-site"><b> No Dues on Late </b></h4>
   </div>
 </div>
</div>  
<div class="col-sm-3 col-xs-12">
  <div class="col-sm-12 col-xs-12 bg-wh fnbg-pl">
    <div class="col-sm-3 col-xs-3 fd">
     <img src="<?php  echo MYIMAGES_PATH;?>rentabooks/dontatebooks.png" alt="dontatebooks" style="margin:1px 0px"> 
   </div>
   <div class="col-sm-9 col-xs-9">
     <h4 class="m-t-23 tl-site"><b>Donate Books </b></h4>
   </div>
 </div>
</div> 
<div class="col-sm-3 col-xs-12">
  <div class="col-sm-12 col-xs-12 bg-wh fnbg-pl">
    <div class="col-sm-3 col-xs-3 fd">
     <img src="<?php  echo MYIMAGES_PATH;?>rentabooks/giftt.png" alt="gift">
   </div>
   <div class="col-sm-9 col-xs-9">
     <h4 class="m-t-23 tl-site" style="font-size:17px"><b> Gift a Subscription </b></h4>
   </div>
 </div>
</div>
</div>
</section>
<!--fndg section end-->
<div class="clearfix"></div>

<!-- -------------------------------------------------------------------------------------- -->
<!-- books section start-->
<?php if(!empty($famous_data)) {?>
  <section>
   <div class="container-fluid">
    <div class="container bg-wh">
      
     <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel" data-interval="false">
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
                <?php $k=0;
                if(!empty($_SESSION['user_id'])){
                  if(isset($index_wish_result)){              
                    foreach($index_wish_result as $wrow){
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
<?php } ?>

<!-- books section end-->
<div class="clearfix">&nbsp;</div>
<!-- books 2nd section start-->
<?php if(!empty($new_data )) {?>
  <section>
   <div class="container-fluid">
    <div class="container bg-wh">
      
     <div id="carousel-example2" class="carousel slide hidden-xs" data-ride="carousel" data-interval="false">
      <div class="col-md-12">
        <!-- Controls -->
        <div class="col-sm-3">
         <h3 class="m-b-18"> <b>NEW ARRIVAL BOOKS</b></h3>
       </div>
       <div class="controls hidden-xs col-sm-9">
        <div class="pull-right">
          <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example2"
          data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example2"
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
                  if(isset($index_wish_result)){              
                    foreach($index_wish_result as $wrow){
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
<?php } ?>
<div class="clearfix">&nbsp;</div>

<!-- books 2nd section end-->

<!-- books 3rd section start-->
<?php if(!empty($award_data )){ ?>
  <section>
   <div class="container-fluid">
    <div class="container bg-wh">
      
     <div id="carousel-example1" class="carousel slide hidden-xs" data-ride="carousel" data-interval="false">
      <div class="col-md-12">
        <!-- Controls -->
        <div class="col-sm-6">
         <h3 class="m-b-18"> <b>AWARD WINNING BOOKS</b></h3>
       </div>
       <div class="controls hidden-xs col-sm-6">
        <div class="pull-right">
          <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example1"
          data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example1"
          data-slide="next"></a>
        </div>
      </div>
    </div>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
     
      <?php  $i=1;$j=6;
      foreach($award_data as $row){;  ?>
       
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
                  if(isset($index_wish_result)){              
                    foreach($index_wish_result as $wrow){
                      if($wrow->book_id==$row->book_id){
                        $k+=1;
                      }
                    }
                  }
                }

                ?>
                <?php if($k==0){?>
                 <li id="heart" class="wishlist" value="<?php echo $row->book_id;?>">
                   <i class="fa fa-heart-o tl-site"></i>
                 </li> 
               <?php } else {?>
                <li class="wishlist" value="<?php echo $row->book_id;?>">
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
<?php } ?>
<div class="clearfix">&nbsp;</div>

<!-- books 3rd section end-->


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