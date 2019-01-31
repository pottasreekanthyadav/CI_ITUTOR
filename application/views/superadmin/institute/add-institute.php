 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ismytutor | Dashboard</title>
  <?php
  echo header("X-XSS-Protection: 0"); ?>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
  <link rel="stylesheet" type="text/css" href="<?php echo SUPER_CSS_PATH ; ?>bootstrap.min.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo SUPER_CSS_PATH ; ?>jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo SUPER_CSS_PATH ; ?>gharaahaar1.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo SUPER_CSS_PATH ; ?>_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">textarea{resize: none;}</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php $this->load->view("superadmin/includes/header.php");?>
 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
   <?php $this->load->view("superadmin/includes/sidebar.php");?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Add New Institute
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add New Institute</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Add New Institute</h3>
            <a href="<?php echo SUPER_ADMIN_FOLDER_PATH;?>Tuitioncenter_controller/listing_institute" class="btn btn-primary pull-right">Manage Institute</a>
            </div>
                <!-- /.panel-heading -->
          <div class="panel-body">
          <div class="row">
          <div class="col-md-12">
            
              <?php echo form_open_multipart('superadmin/Tuitioncenter_controller/store_tuition_center',array("name"=>"frominstitute_create","id"=>"frominstitute_create","class"=>"form-horizontal","novalidate"=>"true")); ?>
<fieldset>
<!-- Select Basic -->
        <div class="col-md-12">
          <?php 
          //print_r($this->session->all_userdata());
         $successMsg = $this->session->flashdata('successMsg');
         $failMsg = $this->session->flashdata('failMsg');
          if($successMsg)
          {
            ?>
            <div class="alert alert-success"><?php echo $successMsg; ?></div>
            <?php
          }
          if($failMsg)
          {
            ?>
            <div class="alert alert-danger"><?php echo $failMsg; ?></div>
            <?php
          }
          ?>
          </div>
<?php $newinstitute_type = json_decode($institute_type); //print_r($new);die; ?>
<div class="form-group">
  <label class="col-md-4 control-label" for="institutetype">Institute Type</label>
  <div class="col-md-5">
    <select id="institutetype" name="institutetype[]" class="form-control" multiple>
      <option value="0">Choose Institute Type</option>
     <?php 
     if($newinstitute_type->code==SUCCESS_CODE){
      foreach($newinstitute_type->result as $key=>$value){
      ?>
     
      <option value="<?php echo $value->institute_type_id; ?>"><?php echo $value->institute_type_name; ?></option>
      <?php } } ?>
    </select>
    <span id="institutetype-error"></span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="institutename">Institute Name</label>  
  <div class="col-md-5">
  <input id="institutename" name="institutename" type="text" placeholder="Enter Institute Name" class="form-control input-md" required="" value="<?php echo set_value('institutename'); ?>" onchange="duplicate_restrict_institutename()">
  <span id="institutename-restrict" style="color:red;"></span>
     <span id="institutename-error"><?php echo form_error('institutename', '<div class="text-danger">', '</div>'); ?></span>
  </div>
</div>
<!-- input for services Button --> 
<!-- <div class="form-group">
  <label class="col-md-4 control-label" for="instituteservices">Institute Services</label>
  <div class="col-md-5">
    <input id="instituteservices" name="instituteservices" class="form-control input-md" type="text" value="<?php //echo set_value('instituteservices'); ?>" placeholder="Enter Institute Services in Comma separation">
     <span id="instituteservices-error"><?php //echo form_error('instituteservices', '<div class="text-danger">', '</div>'); ?></span>
  </div>
</div> -->

<!-- input for services Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="instituteservices">Institute Email</label>
  <div class="col-md-5">
    <input id="instituteemail" name="instituteemail" class="form-control input-md" type="text" value="<?php echo set_value('instituteemail'); ?>" placeholder="Enter Institute Email" onchange="duplicate_restrict_instituteemail()">
    <span id="instituteemail-restrict" style="color:red;"></span>
     <span id="instituteemail-error"><?php echo form_error('instituteemail', '<div class="text-danger">', '</div>'); ?></span>
  </div>
</div>

<!-- input for services Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="institutemobile">Institute Mobile</label>
  <div class="col-md-5">
    <input id="institutemobile" maxlength="10" name="institutemobile" class="form-control input-md" type="text" value="<?php echo set_value('institutemobile'); ?>" placeholder="Enter Institute Mobile" onchange="duplicate_restrict_institutemobile()">
    <span id="institutemobile-restrict" style="color:red;"></span>
     <span id="institutemobile-error"><?php echo form_error('institutemobile', '<div class="text-danger">', '</div>'); ?></span>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="city">Area</label>  
  <div class="col-md-5">
  <input id="area" name="area" type="text" placeholder="Enter Area" class="form-control input-md" required="" value="<?php echo set_value('area'); ?>">
     <span id="area-error"><?php echo form_error('area', '<div class="text-danger">', '</div>'); ?></span>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="location">Location</label>  
  <div class="col-md-5">
  <input id="location" name="location" type="text" placeholder="Enter Location" class="form-control input-md" required="" value="<?php echo set_value('location'); ?>">
     <span id="location-error"><?php echo form_error('location', '<div class="text-danger">', '</div>'); ?></span>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="gmap">Google Map</label>  
  <div class="col-md-5">
  <input id="gmap" name="gmap" type="text" placeholder="Paste map location URL of institute" class="form-control input-md" required="" value="<?php echo set_value('gmap'); ?>" autocomplete="off">
   <span id="gmap-error"><?php echo form_error('gmap', '<div class="text-danger">', '</div>'); ?></span>
</div>
</div>

<!--all linkks-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fb">FB Link</label>  
  <div class="col-md-5">
  <input id="fb" name="fb" type="text" placeholder="Paste Facebook link" class="form-control input-md" required="" value="<?php echo set_value('fb'); ?>" autocomplete="off">
   <span id="fb-error"><?php echo form_error('fb', '<div class="text-danger">', '</div>'); ?></span>
</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="gplus">G+</label>  
  <div class="col-md-5">
  <input id="gplus" name="gplus" type="text" placeholder="Paste G+ link" class="form-control input-md" required="" value="<?php echo set_value('gplus'); ?>" autocomplete="off">
   <span id="gplus-error"><?php echo form_error('gplus', '<div class="text-danger">', '</div>'); ?></span>
</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="twiter">Twiter</label>  
  <div class="col-md-5">
  <input id="twiter" name="twiter" type="text" placeholder="Paste twiter link" class="form-control input-md" required="" value="<?php echo set_value('twiter'); ?>" autocomplete="off">
   <span id="twiter-error"><?php echo form_error('twiter', '<div class="text-danger">', '</div>'); ?></span>
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="timing">Timing</label>  
  <div class="col-md-2">
  <input id="timingfrom" name="timingfrom" type="text" placeholder="Opening Time" class="form-control input-md timepicker" required="" value="<?php echo set_value('timingfrom'); ?>" autocomplete="off">
   <span id="timingfrom-error"><?php echo form_error('timingfrom', '<div class="text-danger">', '</div>'); ?></span>
</div>
<div class="col-md-3">
  <input id="timingto" name="timingto" type="text" placeholder="Closing Time" class="form-control input-md timepicker" required="" value="<?php echo set_value('timingto'); ?>" autocomplete="off">
      <span id="timingto-error"><?php echo form_error('timingto', '<div class="text-danger">', '</div>'); ?></span>
  </div>
</div>


<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="logo">Logo</label>
  <div class="col-md-4">
    <input id="logo" name="logo" class="input-file" type="file">
     <span id="logospan" style="display: none;">
     <img src="" id="preview-logo" alt="Logo image" height="200px" width="50%">
      <span id="logo-error"><?php echo form_error('logo', '<div class="text-danger">', '</div>'); ?></span>
      </span>
  </div>
</div>
<input type="hidden" id="locality" name="city" value="">
<input type="hidden" id="postal_code" name="pincode" value="0">
<input type="hidden" id="lat" name="latitude" value="">
<input type="hidden" id="lng" name="longitude" value=""> 

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="aboutinstitute">About Institute</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="aboutinstitute" placeholder="Enter Your Text Here.." name="aboutinstitute" value="<?php echo set_value('aboutinstitute'); ?>"><?php echo set_value('aboutinstitute'); ?></textarea>
     <span id="aboutinstitute-error"><?php echo form_error('aboutinstitute', '<div class="text-danger">', '</div>'); ?></span>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
<?php echo form_close(); ?>

          </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <?php $this->load->view("superadmin/includes/footer.php");?>
  </footer>

  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo SUPER_JS_PATH; ?>jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo SUPER_JS_PATH; ?>bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo SUPER_JS_PATH; ?>fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo SUPER_JS_PATH; ?>app.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo SUPER_JS_PATH; ?>jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo SUPER_JS_PATH; ?>jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo SUPER_JS_PATH; ?>jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo SUPER_JS_PATH; ?>jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?php echo SUPER_JS_PATH; ?>Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo SUPER_JS_PATH; ?>dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo SUPER_JS_PATH; ?>demo.js"></script>
</body>
</html>
<script type="text/javascript">
 $("#logo").on('change',function(){
//alert('vivek');
  $("#logospan").css('display','block');
  });   
</script>
<script type="text/javascript">

  /*$("#frominstitute_create").on("submit",function(){ 
  var institutetype = $('#institutetype').val(); 
  alert(institutetype);
     
     return false;
    });*/

</script>
    <script type="text/javascript">
 $("#frominstitute_create").on("submit",function(){  
    var  str = true;
    var namepattern=/^[A-Za-z ]*$/;
    var loc_pattern=/^[A-Za-z0-9, ]*$/;  
    var timepattern =/^[0-9]{1,2}\:[0-9]{1,2}[a,p,m]{2}$/;
    var mobilepattern = /^[6-9]{1}[0-9]{9}$/;
    var emailpattern = /^[a-zA-Z0-9][a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    var textpattern =/^[A-Za-z0-9,. ]*$/;
  //var map = /^(?:<iframe[^>]*)(?:(?:\/>)|(?:>.*?<\/iframe>))*$/;
    var linkexp =/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/;
   $("#institutename,#institutetype,#area,#gplus,#twiter,#gmap,#timingfrom,#timingto,#location,#instituteemail,#institutemobile,#aboutinstitute,#logo,#instituteservices").css('border','');
    var gplus = $('#gplus').val();
    var fb = $('#fb').val();
    var twiter = $('#twiter').val();
    var gmap = $('#gmap').val().trim();
    var institutename = $('#institutename').val().trim();
    var area = $('#area').val().trim();
    var timingfrom = $('#timingfrom').val().trim();  
    var timingto = $('#timingto').val().trim();  
    var location = $("#location").val().trim();
    var instituteemail = $("#instituteemail").val().trim();
    var institutemobile = $("#institutemobile").val().trim();
    var aboutinstitute = $("#aboutinstitute").val().trim();
    var logo = $("#logo").val();
    var institutetype=$('#institutetype> option:selected');

 /* if(fb=="" || fb==0){ 
$("#fb").css('border','1px solid red');
str=false;
}else{
$("#fb").css('border','');  
}
if(gplus=="" || gplus==0){ 
$("#gplus").css('border','1px solid red');
str=false;
}else{
$("#gplus").css('border','');  
}
if(twiter=="" || twiter==0){ 
$("#twiter").css('border','1px solid red');
str=false;
}else{
$("#twiter").css('border','');  
}*/
if(fb!='' && !linkexp.test(fb)){
  $("#fb").css('border','1px solid red').focus();
 str=false; 
}

if(gplus!='' && !linkexp.test(gplus)){
  $("#gplus").css('border','1px solid red').focus();
 str=false; 
}

if(twiter!='' && !linkexp.test(twiter)){
  $("#twiter").css('border','1px solid red').focus();
 str=false; 
}
if(logo=="" || logo==0){ 
$("#logo").css('border','1px solid red');
str=false;
}else{
$("#logo").css('border','');  
}
if(logo!='' && image_validate(logo)==0){
  $('#logo').css('border','1px solid red');
  str=false;
}
if(gmap=="" || gmap==0){ 
  $("#gmap").css('border','1px solid red').focus();
  str=false;
}else{
$("#gmap").css('border','');  
}
/*if(gmap!='' && !map.test(linkexp)){
  $("#gmap").css('border','1px solid red').focus();
 str=false; 
}*/
if(location=="" || location ==0){
$("#location").css('border','1px solid red').focus();
str=false;
}else{
$("#location").css('border','');  
}
if(instituteemail=="" || instituteemail==0){ 
$("#instituteemail").css('border','1px solid red');
str=false;
}else{
$("#instituteemail").css('border','');  
}
if(instituteemail!="" && !emailpattern.test(instituteemail)){
$("#instituteemail").css('border','1px solid red');
str=false;
}
if(institutemobile=="" || institutemobile==0){ 
$("#institutemobile").css('border','1px solid red');
str=false;
}else{
$("#institutemobile").css('border','');  
}
if(institutemobile!="" && !mobilepattern.test(institutemobile)){
$("#institutemobile").css('border','1px solid red');
str=false;
}
if(timingfrom=="" || timingfrom==0){ 
$("#timingfrom").css('border','1px solid red');
str=false;
}else{
$("#timingfrom").css('border','');  
}
if(timingfrom!="" && !timepattern.test(timingfrom)){
$("#timingfrom").css('border','1px solid red');
str=false;
}
if(timingto=="" || timingto==0){ 
$("#timingto").css('border','1px solid red');
str=false;
}else{
$("#timingto").css('border','');  
}
if(timingto!="" && !timepattern.test(timingto)){
$("#timingto").css('border','1px solid red');
str=false;
}
/*if(instituteservices=="" || instituteservices==0){ 
$("#instituteservices").css('border','1px solid red');
str=false;
}else{
$("#instituteservices").css('border','');  
}*/
if(aboutinstitute=="" || aboutinstitute==0){ 
$("#aboutinstitute").css('border','1px solid red');
str=false;
}else{
$("#aboutinstitute").css('border','');  
}
if(area=="" || area==0){ 
$("#area").css('border','1px solid red');
str=false;
}else{
$("#area").css('border','');  
}
if(aboutinstitute!='' && !textpattern.test(aboutinstitute)){
  $("#aboutinstitute").css('border','1px solid red').focus();
 str=false; 
}
if(area!='' && !namepattern.test(area)){
  $("#area").css('border','1px solid red').focus();
 str=false; 
}
/*if(institutetype=="" || institutetype.length==0){ 
$("#institutetype").css('border','1px solid red');
str=false;
}else{
$("#institutetype").css('border','');  
}*/
 
  if(institutetype.length =="" || institutetype.length == 0){
             $("#institutetype").css('border','1px solid red').focus();
             str=false;
         }else{
            $("#institutetype").css('border','').focus();
         }

if(institutename=="" || institutename==0){ 
  $("#institutename").css('border','1px solid red').focus();
  str=false;
}else{
$("#institutename").css('border','');  
}
if(institutename!='' && !namepattern.test(institutename)){
  $("#institutename").css('border','1px solid red').focus();
 str=false; 
}

/*if(instituteservices!='' && !loc_pattern.test(instituteservices)){
  $("#instituteservices").css('border','1px solid red').focus();
 str=false; 
}*/

    if(str==true){    
     $this.frominstitute_create.submit();
    }
     return str;
    });     

    </script>
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
            /** @type {!HTMLInputElement} */(document.getElementById('location')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }
       function fillInAddress() {
          // Get the place details from the autocomplete object.
          var place = autocomplete.getPlace();
         var latitude = place.geometry.location.lat();
         var longitude = place.geometry.location.lng();
          console.log(latitude);
          console.log(longitude);
          document.getElementById('postal_code').value = 0;
          document.getElementById('locality').value = '';
         document.getElementById('lat').value = latitude;
         document.getElementById('lng').value = longitude;
          // Get each component of the address from the place details
          // and fill the corresponding field on the form.

          // for (var i = 0; i < place.address_components.length; i++) {
          //   var addressType = place.address_components[i].types[0];
          //    if (componentForm[addressType]) { 
          //     var val = place.address_components[i][componentForm[addressType]];
          //     alert(val);
          //     document.getElementById(addressType).value = val;
          //   }
          // }
          
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
 </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUlB6Eh-d9yy-kbAVPFbC9WcIYQCtJXJE&libraries=places&callback=initAutocomplete"
        async defer></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
<script type="text/javascript">
     $('input.timepicker').timepicker();
     function image_validate(image)
{

    var ext = image.match(/\.(.+)$/)[1];

    ext=ext.toLowerCase();
    validformat='';
    switch(ext) 
    {
        case 'jpg': case 'jpeg':  case 'png':
        validformat=1; break;
        default: validformat=0; 
    }
    return validformat;
}
</script>
<script type="text/javascript">
      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                imgId = '#preview-'+$(input).attr('id');
                $(imgId).attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
      }


      $("form#frominstitute_create input[type='file']").change(function(){
        readURL(this);
      });
</script>
<script type="text/javascript">
 function duplicate_restrict_institutename() {
 // alert('hi');
    var institutename = $("#institutename").val();
    if(institutename!='' && institutename!=0){
      $.ajax({
        url:'<?php echo base_url(); ?>superadmin/Tuitioncenter_controller/restrict_institute_name',
        method:'POST',
        dataType:'JSON',
        data:{'institutename':institutename},
        success:function(s){
          console.log(s);
          if(s.code==200){
            $("#submit").prop('disabled',true);
          //  $('.enableOnInput').prop('disabled', true);
          $("#institutename").css('border','1px solid red')
          $("#institutename-restrict").html(s.description);
          }
        },
        error:function(e){
          console.log(e);
        }
      });
    }else{
      alert('Please Enter Unique name!');
    }
  } 
   function duplicate_restrict_instituteemail() {
 // alert('hi');
    var instituteemail=$("#instituteemail").val();
    if(instituteemail!='' && instituteemail!=0){
      $.ajax({
        url:'<?php echo base_url(); ?>superadmin/Tuitioncenter_controller/restrict_institute_email',
        method:'POST',
        dataType:'JSON',
        data:{'instituteemail':instituteemail},
        success:function(s){
          console.log(s);
          if(s.code==200){
            $("#submit").prop('disabled',true);
          //  $('.enableOnInput').prop('disabled', true);
          $("#instituteemail").css('border','1px solid red')
          $("#instituteemail-restrict").html(s.description);
          }
          else
          {
          $("#submit").prop('disabled',false);
          //  $('.enableOnInput').prop('disabled', true);
          $("#instituteemail").css('border','')
          $("#instituteemail-restrict").html('');
          }
        },
        error:function(e){
          console.log(e);
        }
      });
    }else{
      alert('Please enter Unique Institute email.');
    }
  } 
   function duplicate_restrict_institutemobile() {
 // alert('hi');
    var institutemobile=$("#institutemobile").val();
    if(institutemobile!='' && institutemobile!=0){
      $.ajax({
        url:'<?php echo base_url(); ?>superadmin/Tuitioncenter_controller/restrict_institute_mobile',
        method:'POST',
        dataType:'JSON',
        data:{'institutemobile':institutemobile},
        success:function(s){
          console.log(s);
          if(s.code==200){
            $("#submit").prop('disabled',true);
          //  $('.enableOnInput').prop('disabled', true);
          $("#institutemobile").css('border','1px solid red')
          $("#institutemobile-restrict").html(s.description);
          }
          else
          {
            $("#submit").prop('disabled',false);
            $("#institutemobile").css('border','')
            $("#institutemobile-restrict").html('');
          }
        },
        error:function(e){
          console.log(e);
        }
      });
    }else{
      alert('Please enter Unique Institute Mobile');
    }
  } 

</script>