
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
         
            <div class="col-sm-12" style="background: rgba(0,0,0,0.5);    margin-top: 12%;">
        <div class="col-sm-10 col-sm-offset-1" >
    <?php echo form_open('Businessdirectory_controller/search_directory',array('name'=>'serachform','id'=>'serachform')); ?>
   <div class="form-group col-sm-3">
     <?php $newrettypeins = json_decode($returninstitute_type);
      ?>
  <label for="sel1" class="col-wh m-t-6"> Categories:</label>
  <select class="form-control no-bod-rad" id="category" name="category">
    <option value="0">--Select Category--</option>
  <?php if($newrettypeins->code==SUCCESS_CODE){ 
     $newrestype = $newrettypeins->result;
if(!empty($newrestype)){
  foreach($newrestype as $key=>$value){
  ?>
<option value="<?php echo $value->institute_type_id; ?>"><?php echo $value->institute_type_name; ?></option>
  <?php 
      } } }
?> 
   
   
   
  </select>
</div>

      <div class="form-group col-sm-3">
    <label class="col-wh m-t-6"> Location:</label>
    <input type="text" class="form-control  no-bod-rad" placeholder="Location" name="strsearch" id="strsearch" onclick="a()">
  </div>


 <div class="form-group col-sm-3">
  <label for="sel1" class="col-wh m-t-6"> Range:</label>
  <select class="form-control no-bod-rad" id="distancerange"  name="distancerange">
    <option value="0">--Select Range in Km--</option>
    <?php for($i=1;$i<15;$i++){ ?>
    <option value="<?php echo $i; ?>"><?php echo $i; ?> Km.</option>
    <?php } ?>
  </select>
</div>

  <div class="col-sm-3">
  <button type="submit" class="btn btn-danger2 no-bod-rad col-sm-12 m-t-30">  <i class="fa fa-search"></i>&nbsp; Search</button>
  <input type="hidden" name="postal_code" id="postal_code">
  <input type="hidden" name="locality" id="locality">
  <input type="hidden" name="lng" id="lng">
  <input type="hidden" name="lat" id="lat">
</div>
<?php echo form_close(); ?>
<div class="clearfix">&nbsp;</div>
</div>
       </div>
  
     </div>
      </section>
  <!--section signup start-->
  <section>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
      <div class="container">
        <div class="col-sm-12">
          <!--start 1-->
          <div class="col-sm-3">
            <div class="" style="border:1px solid #ccc">
               <img src="<?php echo base_url();?>assets/images/category/22.jpg" class="img-responsive" style="width:100%;" alt="itutors" />
               <h4><b> &nbsp; Coaching centre</b></h4>
               <p> &nbsp; 15 tutors</p>
            </div> 
          </div>
          <!-- end  -->
                   
          
          </div>
<div class="clearfix">&nbsp;</div>       
      </div>
      </section>
     
  <!--section signup end-->
      <?php $this->load->view('includes/modal'); ?>
 <div class="clearfix"></div>
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
  $(document).ready(function(){
$("#serachform").on('submit',function(){
var  str = true;
var category = $("#category").val().trim();
var location = $("#strsearch").val().trim();
var distancerange = $("#distancerange").val().trim();
 if(distancerange == 0 && category == 0 && location =='') {
        alert('Choose any one of Criteria');
        str=false;
    }
if(str==true){
this.serachform.submit();
}
return str;
});

  });
</script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUlB6Eh-d9yy-kbAVPFbC9WcIYQCtJXJE&libraries=places&callback=initAutocomplete"
        async defer></script>

<script type="text/javascript">
  function a(){
            var placeSearch, autocomplete;
            var componentForm = {
                location: 'long_name',
                locality: 'long_name',
                administrative_area_level_1: 'long_name',
                country: 'long_name',
                postal_code: 'short_name'
            };
            function initAutocomplete() {
            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */(document.getElementById('strsearch')),
                {types: ['geocode'],
                    componentRestrictions: {country: "in"}
                });
            autocomplete.addListener('place_changed', fillInAddress);
            }
             initAutocomplete();
         function fillInAddress() {
          var place = autocomplete.getPlace();
         var latitude = place.geometry.location.lat();
         var longitude = place.geometry.location.lng();
          document.getElementById('postal_code').value = 0;
          document.getElementById('locality').value = '';
          document.getElementById('lat').value = 0;
          document.getElementById('lng').value = 0;
          document.getElementById('lat').value = latitude;
         document.getElementById('lng').value = longitude;
          for (var i = 0; i < place.address_components.length; i++) {
      for (var j = 0; j < place.address_components[i].types.length; j++) {
        if (place.address_components[i].types[j] == "postal_code") {
          document.getElementById('postal_code').value = place.address_components[i].long_name;
        }
        if (place.address_components[i].types[j] == "locality") {
          document.getElementById('locality').value = place.address_components[i].long_name;
        }
      }
    }
        }
        fillInAddress();
      }
    </script>

</script>