<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo TITLE_PATH;?></title>

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
        .register .input-group .input-group-addon{border: 1px solid #ccc;border-right: none;}
/*      .register .input-group {padding: 9px 2px;} */
        .register .input-group {padding-top: 15px;}
        .register .input-group .form-control{height: 45px !important}
        .pad5{    padding: 5px 21px 6px 0px !important}
        .btn-label {border: 1px solid #fff;padding: 10px 10px}
        .btn-facebook { color: #fff!important;background-color: #3b5998!important;}
        .btn-googleplus { color: #fff!important;background-color: #dd4b39!important;}
        .bod-danger{border:1px solid #a94442 !important}
        .bod-success{border:1px solid green !important}
        .mt0{margin-bottom: 0px}
        .panel-title{font-size: 21px}
        .panel-group .panel{    border-radius: 0px;}
        .panel-title > a:before {float: right !important;font-family: FontAwesome;content:"\f055";padding-right: 5px;}
.panel-title > a.collapsed:before {float: right !important;content:"\f056";}
.panel-title > a:hover, 
.panel-title > a:active, 
.panel-title > a:focus  {
    text-decoration:none;
}
.m-t-25{margin-top: 25px} .m-t-6{margin-top: 6px !important}
        .panel-body p{    padding: 6px 30px;}
        .col-wh{color: #fff !important}
        .cate-search{background-image: url(<?php echo base_url();?>assets/images/category-bg.jpg);background-repeat: no-repeat;background-size: 100% 100%;height: 247px}
      </style>
  </head>
  <body class="bg-wh">
  <?php $this->load->view('includes/header'); ?>
   <div class="clearfix"></div>
  
   <section>
         <div class="container-fluid no-padd cate-search">
         
           <!--  <div class="col-sm-12" style="background: rgba(0,0,0,0.5);    margin-top: 12%;"> -->
        <!-- <div class="col-sm-10 col-sm-offset-1" > -->
    <?php //echo form_open('Businessdirectory_controller/search_category_institute',array('name'=>'searchfrm','id'=>'searchfrm')); ?>
  <!--  <div class="form-group col-sm-9">
  <label for="sel1" class="col-wh m-t-6"> Categories:</label>
  <select class="form-control no-bod-rad" id="category" name="category">
    <option value="0">Select Category</option>
      <?php //if($institute_cat->code==200){
            //foreach ($institute_cat->result as $key => $value) { 
              ?>
    <option value="<?php //echo $value->institute_type_id; ?>"><?php //echo $value->institute_type_name; ?></option>
      <?php          // }
          //} 
          ?>
  </select>
</div> -->
 <!-- <div class="form-group col-sm-3">
  <label for="sel1" class="col-wh m-t-6"> Sub-Categories:</label>
  <select class="form-control no-bod-rad" id="sel1">
    <option>Select</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
</div> -->
  <!--  <div class="form-group col-sm-3">
    <label class="col-wh m-t-6"> Location:</label>
    <input type="text" class="form-control  no-bod-rad" id="searchlocation" name="searchlocation" placeholder="Location">
  </div> 
  <div class="col-sm-3">
  <button type="submit" class="btn btn-danger2 no-bod-rad col-sm-12 m-t-30">  <i class="fa fa-search"></i>&nbsp; Search</button>
</div>-->
<?php //echo form_close(); ?>
<!-- <div class="clearfix">&nbsp;</div> -->
<!-- </div> -->
       <!-- </div> -->
  
     </div>
      </section>
  <!--section signup start-->
  <section>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
      <div class="container">
        <div class="col-sm-12">
          <?php 
//print_r($institute);die;
          if(!empty($institute) || count($institute)>0){
            foreach ($institute as $key => $value) { 
              $blogtitle = urlencode($value->institute_type_name); 
          $title = str_replace('+','-',$blogtitle);
              ?>
             

          <div class="col-sm-3">
            <div class="cat-list-adj">
               <a href="<?php echo base_url(); ?>Businessdirectory_controller/listing_business/<?php echo  $title; ?>/<?php echo base64_encode($value->institute_type_id); ?>"><img src="<?php echo base_url();?>uploads/institutetypeimage/<?php echo $value->institutetype_image; ?>" class="img-responsive" style="width:100%;" alt="itutors" /></a>
               <h4><b> &nbsp;  <a href="<?php echo base_url(); ?>Businessdirectory_controller/listing_business/<?php echo  $title; ?>/<?php echo base64_encode($value->institute_type_id); ?>"><?php echo $value->institute_type_name; ?></a></b></h4>
               <p> &nbsp; 15 tutors</p>
            </div> 
          </div>
     <?php           }
          } else{
            echo 'No Records found';
          }
          ?>
         
          
          </div>
          <div class="pull-right">
           <?php echo $this->pagination->create_links(); ?>
         </div>
<div class="clearfix">&nbsp;</div>       
      </div>
      </section>
     
  <!--section signup end-->
      <?php $this->load->view('includes/modal'); ?>
 <div class="clearfix"></div> <div class="clearfix">&nbsp;</div>
 <?php $this->load->view('includes/footer'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo MYJS_PATH;?>jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo MYJS_PATH;?>/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo MYJS_PATH;?>/menu.js"></script>
    <script type="text/javascript" src="<?php echo MYJS_PATH;?>/validator.js"></script>

  </body>
</html>
<script type="text/javascript">
      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('searchlocation')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }
 </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUlB6Eh-d9yy-kbAVPFbC9WcIYQCtJXJE&libraries=places&callback=initAutocomplete"
        async defer></script>

        <script type="text/javascript">
  $(document).ready(function(){
$("#searchfrm").on('submit',function(){
var  str = true;
var type_property=$("#category").val().trim();
var location=$("#searchlocation").val().trim();
//var price=$("#price").val().trim();
 if(type_property == 0 && location == 0) {
  
        alert('Choose any one of Criteria');
        str=false;
    }

if(str==true){
this.searchfrm.submit();
}
return str;
});

  });
</script>