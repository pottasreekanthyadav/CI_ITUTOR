<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo TITLE_PATH;?></title>
 
 
<!-- Bootstrap -->
<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"  />
<!--custom css-->
  <link href="<?php echo base_url(); ?>/assets/css/custom.css" type="text/css" rel="stylesheet"  />
 <!--menu-->
  <link href="<?php echo base_url(); ?>/assets/css/menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/icomoon.css">
  <link href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file: -->
    <!--[if lt IE 9]>
      <script src="https:oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .register .input-group .input-group-addon{border: 1px solid #ccc;border-right: none;}
        .register .input-group {padding: 9px 2px;}
        .register .input-group .form-control{height: 45px !important}
        .pad5{    padding: 5px 21px 6px 0px !important}
        .btn-label {border: 1px solid #fff;padding: 10px 10px}
        .btn-facebook { color: #fff!important;background-color: #3b5998!important;}
        .btn-googleplus { color: #fff!important;background-color: #dd4b39!important;}

        .bg-primary-dark { background-color: #2f80e7;color: #fff!important;}
        .bg-primary-dark2 { background-color: #ffb741;color: #fff!important;}
        .bg-primary-dark3 { background-color: #70bb44;color: #fff!important;}
        .pv-lg {padding-top: 15px!important;padding-bottom: 15px!important;}
        .mt0{margin-top: 0px}
        .side-menu ul li a{color: #fff; font-size: 13px;text-decoration: none}
        .mt9{margin-top: 9px}
        .bootstrap-tagsinput { border: 1px solid #e4e7ea;border-radius: 0px; box-shadow: none; display: block; padding: 7px 12px;}
        .labell-bg {background: #fff;color: #bbb;border: 1px solid;}
        .btn-bg{background-color: #ed3f40;color: #fff}
         .project-images{ width: 24%;height: 220px;}
        .info {background-color: #e7f3fe;border-left: 6px solid #2196F3;}
        .no-bod-rad{border-radius: 0px !important}
        label{margin-top: 10px;margin-bottom: 10px}
        .form-control{border-radius: 0px !important}
        .site-col{color: #ed3f40}
</style>
  </head>
  <body class="bg-wh">
   <?php $this->load->view('includes/header.php'); ?>
   <div class="clearfix"></div>

  <!--section dashboard start-->
  <section>
       <div class="bg-back container-fluid"  style="background-image:url('<?php echo base_url();?>assets/images/bg-back.jpg')">
      <div class="container">
      <?php $this->load->view("tutors/tutor-dash-sidebar.php");?>
      <div class="col-sm-10">
          <div class="col-sm-12 no-padd bg-wh m-t-10">
             
           <h4 class="title-hd"><strong>Update Profile</strong></h4>
     
          <div class="col-sm-12 updateprofile m-t-10">
            <ul class="nav nav-tabs">
    <li class="active col-sm-3 text-center no-padd"><a data-toggle="tab" href="#home">Step 1</a></li>
    <li class="col-sm-3 text-center no-padd"><a data-toggle="tab" href="#menu1">Step 2</a></li>
    <li class="col-sm-3 text-center no-padd"><a data-toggle="tab" href="#menu2">Step 3</a></li>
   
  </ul>

  <div class="tab-content">
     
    <div id="home" class="tab-pane fade in active">
     <div class="col-sm-12">
          <div class="clearfix">&nbsp;</div>     
        <div class="col-sm-6">
<form>
     <div class="form-group">
              <!--                        <div class="fcbtn btn btn-info btn-outline btn-1e  no-bod-rad">-->
  <p style="font-size: 13px !important;margin-bottom: 4px !important;" class="site-col"><strong>Selected Categories : </strong>CLASS I- CLASS V,LKG-UKG</p>
 </div>
    <label class="control-label" for="category">Select Categories(Max 2 Categories):</label>
    <select class="form-control selectpicker no-bod-rad" name="category[]" id="category" style="height: 120px; overflow: auto;" tabindex="" multiple="" data-max-options="2" data-live-search="true">
    <option value="" disabled="disabled">--Select--</option>
          <option value="11">LKG-UKG</option>
          <option value="37">CLASS I- CLASS V</option>
          <option value="38">CLASS VI- CLASS X</option>
          <option value="41">CLASS XI-XII</option>
          <option value="42">CLASS XI - XII + COMPETITIVE EXAMS</option>
    </select>
    <p>Press ctrl to select multiple categories</p>
  </div>
      <div class="col-sm-6">

    <div class="form-group">
                                   

  <p style="font-size: 13px !important;
    margin-bottom: 4px !important;" class="site-col"><strong>Selected Language"</strong>Telugu,english</p>

                    </div>
      <label class="control-label" for="language">Language Know:</label>
   <select class="form-control no-bod-rad" name="language[]" id="language" multiple="multiple" style="height: 120px; overflow: auto;" tabindex="">
    <option value="" disabled="disabled">--select--</option>
          <option value="1">English</option>
            <option value="2">Telugu</option>
        </select>
    <p>Press ctrl to select multiple languages</p>
   </div>
    
    <div class="form-group col-sm-6 gender">
      <label class="control-label">Gender</label>    
      <div class="form-group col-sm-12" id="gender">
        <div class="form-group col-sm-6">
                 <input type="radio" name="gender" value="male" checked=""> Male</div>

     <div class="form-group col-sm-6">
  <input type="radio" name="gender" value="female">Female
</div>

    </div>
    </div>
         
<div class="form-group col-sm-6">
      <label class="control-label" for="qualification">Qualification:</label>
   <select class="form-control" name="qualification" id="qualification" tabindex="4">
    <option disabled="disabled" value="">--select--</option>
          <option value="1" selected="selected">Graduate</option>
            <option value="2" selected="selected">Post Graduate</option>
        </select>
     </div>       
       
         <div class="form-group col-sm-6">
      <label class="control-label" for="college">College/University Name:</label>
     <input type="text" class="form-control" name="college" id="college" value="ddu" placeholder="College/University Name">
         </div>
        <div class="form-group col-sm-6">
      <label class="control-label" for="tutor">Select Tutor Type:</label>
  <select class="form-control" name="tutor_type" id="tutor" value="" tabindex="4">
    <option>--select--</option>
          <option value="29" selected="">School  Teacher</option>
            <option value="30">Lecturers</option>
            <option value="33">Student/Gaduation</option>
        </select> 
     </div> 
         <div class="col-sm-12 text-center">
             <div class="clearfix">&nbsp;</div>
             <div class="clearfix">&nbsp;</div>
           <button type="button" class="btn btn-warning no-bod-rad col-sm-4 col-sm-offset-4 btn-lg"> Next</button>
         </div>
        </div>
    </div>
    <div id="menu1" class="tab-pane fade">
    <div class="form-group col-sm-6">
     <div class="form-group col-sm-12">
                                   
  <p style="font-size: 13px !important;
    margin-bottom: 4px !important;margin-top: 16px;" class="site-col"><strong>Selected Syllabus: </strong>ICSE,IGCSE/IB,SSC,CBSE</p>
 </div>
      <label class="control-label" for="syllabus">Select Syllabus:</label>
   <select class="form-control" name="syllabus[]" id="syllabus" tabindex="4" multiple="multiple">
    <option>--select--</option>
          <option value="1">CBSE</option>
            <option value="2">ICSE</option>
            <option value="3">IGCSE/IB</option>
            <option value="5">SSC</option>
        </select>
     </div>
        
        <div class="col-sm-6">
            <div class="clearfix">&nbsp;</div>
    <div class="form-group">
                                   

  <p style="font-size: 13px !important;
    margin-bottom: 4px !important;" class="site-col"><strong>Selected Language"</strong>english,Telugu</p>

                    </div>
      <label class="control-label" for="language">Language Know:</label>
   <select class="form-control no-bod-rad" name="language[]" id="language" multiple="multiple" style="height: 86px; overflow: auto;" tabindex="">
    <option value="" disabled="disabled">--select--</option>
          <option value="1">English</option>
            <option value="2">Telugu</option>
        </select>
    <p>Press ctrl to select multiple languages</p>
   </div>
        
        <div class="form-group col-sm-6">
      <label class="control-label" for="teaching">Teaching Experience:</label>
   <select class="form-control" style="margin-top: 18px;" name="teaching" id="teaching_exp" tabindex="4">
    <option disabled="disabled" value="">--select--</option>
  
    <option value="1 year">1 Year</option>
    <option value="2 year">2 Year</option>
    <option value="3 year">3 Year</option>
    <option value="4 year">4 Year</option>
    <option value="5 year">5 Year</option>
    <option value="6 year" selected="">6 Year</option>
    <option value="7 year">7 Year</option>
    <option value="8 year">8 Year</option>
    <option value="9 year">9 Year</option>
    <option value="10 year">10 Year</option>
     <option value="11 year">11 Year's</option>
    <option value="12 year">12 Year's</option>
    <option value="13 year">13 Year's</option>
    <option value="14 year">14 Year's</option>
    <option value="15 year">15 Year's</option>
    <option value="15+ year">15+</option>
  </select>
     </div>
        
        <div class="form-group col-sm-6">
  <label class="control-label" for="time">Preferable Time:</label>
  <div id="app">
 <div class="form-group col-sm-12">
      <div class="form-group col-sm-5">
        from:<input type="text" name="frm_time[]" class="form-control time_picker ui-timepicker-input" placeholder="09:20am" autocomplete="off">
</div>
    <div class="form-group col-sm-5">
      to:<input type="text" name="to1_time[]" class="form-control time_picker ui-timepicker-input" placeholder="01:30pm" autocomplete="off">
    </div>
    <div class="form-group col-sm-2">
      <span><button class="fcbtn btn btn-info btn-outline btn-1e  no-bod-rad" id="add_field_button" style="margin-top: 19px"><i class="fa fa-plus"></i> </button></span>
    </div>
    </div>
  </div>
   </div>
      
   <div class="form-group col-sm-6">
  <label class="control-label" for="birth">Location:</label>
  <input type="text" class="form-control" name="location" id="location" placeholder="Enter location" onfocus="geolocate()" value="Madhapur, Hyderabad, Telangana, India" autocomplete="off">
  <input type="hidden" id="locality" name="city" value="">
  <input type="hidden" id="postal_code" name="pincode" value="0">
  <input type="hidden" id="lat" name="latitude" value="0">
  <input type="hidden" id="lng" name="longitude" value="0">
  </div>
      
      <div class="col-sm-12 text-center">
             <div class="clearfix">&nbsp;</div>
             <div class="clearfix">&nbsp;</div>
           <button type="button" class="btn btn-warning no-bod-rad col-sm-4 col-sm-offset-4 btn-lg"> Next</button>
         </div>
         <div class="clearfix">&nbsp;</div>   
    </div>
    <div id="menu2" class="tab-pane fade">
        
      <div class="form-group col-sm-6">
          <div class="clearfix">&nbsp;</div>
      <label class="control-label" for="birth">Date of birth:</label>
           <input type="text" class="form-control hasDatepicker" name="birth" value="10-08-1976" id="birth" placeholder="Enter your Date of Birth" autocomplete="off">
          <span id="birth_error" style="color:red"></span>
    </div>
        
        <div class="form-group col-sm-6">
                <div class="clearfix">&nbsp;</div>
      <label class="control-label" for="mobile">Mobile No:</label>
     <input type="text" class="form-control" name="mobile" id="mobile" value="7995637610" placeholder="enter mobile no.">
          <span style="color:red" id="mobile_error"></span>
    </div>
        
        <div class="form-group col-sm-6">
      <label class="control-label" for="email">Email:</label>
   <input type="email" class="form-control" name="email" id="email" value="sjitendra077@gmail.com" placeholder="abc@gmail.com">
      <span style="color:red" id="email_error"></span>
    </div> 
        
        <div class="form-group col-sm-6">
      <label class="control-label" for="email">How you come to know about this website::</label>
   <input type="email" class="form-control" name="email" id="email" value="sjitendra077@gmail.com" placeholder="abc@gmail.com">
      <span style="color:red" id="email_error"></span>
    </div>
        
        <div class="form-group col-sm-6">
      <label class="control-label">Adhaar Number:</label>
     <input type="text" class="form-control" name="adhaar" id="adhaar" value="123456789752" placeholder="Enter Adhaar number" maxlength="12">
          <span style="color:red" id="adhaar_error"></span>
    </div>
        <div class="form-group col-sm-6">
        <div class="form-group sky-form col-sm-6">
            <label>Upload your Resume<sup>*</sup></label>
            <input type="file" name="resume" id="resume" class="form-control myresume" accept=".doc,.docx,.pdf">
            <span class="resume_error" style="color:red"></span>
            </div>
            </div>
        <div class="form-group col-sm-6">
        <div class="form-group sky-form col-sm-6">
            <label>Upload your Adhaar<sup>*</sup></label>
            <input type="file" name="adhaar_proof[]" id="adhaar_proof" multiple="multiple" class="form-control adhaar_proof" accept=".jpg,.jpeg,.png">
            <span id="adhaar_proof_error" style="color:red"></span>
            </div>
            <div id="preview"></div>
              
    </div>
        
        <div class="form-group col-sm-6">
        <div class="form-group sky-form col-sm-6">
            <label>Upload your Picture<sup>*uploading your picture will give you more opportunities</sup></label>
              <input type="file" name="picture" id="picture" class="form-control" accept=".jpg,.jpeg,.png">
              <span class="pic_error" style="color:red"></span>
        </div>
          <p class="err">&nbsp;</p>
              </div>
        <div class="form-group col-sm-12">
          <div class="form-group sky-form">
            <label>About you(Min 200 Character)<sup>*</sup></label>
              <textarea class="form-control" name="about" id="about">hi this is jitendra hhi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra hi this is jitendra i this is jitendra hi this is jitendra</textarea>
          </div>
          <span id="about_error" style="color:red"></span>
              </div>
        
          <div class="col-sm-12 text-center">
             <div class="clearfix">&nbsp;</div>
             <div class="clearfix">&nbsp;</div>
           <button type="submit" class="btn btn-warning no-bod-rad col-sm-4 col-sm-offset-4 btn-lg"> Submit</button>
         </form>
         </div>
         <div class="clearfix">&nbsp;</div>   
    </div>
   <div class="clearfix">&nbsp;</div>           
         
  </div>
          </div>
   
                

          </div>
       <div class="clearfix">&nbsp;</div>    <div class="clearfix">&nbsp;</div>    <div class="clearfix">&nbsp;</div>   
      </div>
      </div>
      </div>
      </section>
<!--section dashboard end-->
<?php $this->load->view('includes/modal.php'); ?>
 <div class="clearfix"></div>
 <?php $this->load->view('includes/footer.php'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script type="<?php echo base_url(); ?>/assets/text/javascript" src="js/menu.js"></script>
<!--    <link rel="stylesheet" href="code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
<!--
<script src="https:code.jquery.com/jquery-1.12.4.js"></script>
<script src="https:code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
-->
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
 <!--  <script type="text/javascript">
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
 </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUlB6Eh-d9yy-kbAVPFbC9WcIYQCtJXJE&libraries=places&callback=initAutocomplete"
        async defer></script> -->
<!--
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUlB6Eh-d9yy-kbAVPFbC9WcIYQCtJXJE&libraries=places&callback=initAutocomplete"
async defer></script>
-->
<script type="text/javascript">
  $("form").submit(function(){
  var email=$("#email").val();
  alert(email);
});
</script>
<script type="text/javascript">
            var placeSearch, autocomplete;
            var componentForm = {
                location: 'long_name',
                locality: 'long_name',
                administrative_area_level_1: 'long_name',
                country: 'long_name',
                postal_code: 'short_name'
            };
            function initAutocomplete() {
            // Create the autocomplete object, restricting the search to geographical
            // location types.
            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */(document.getElementById('location')),
                {types: ['geocode'],
                    componentRestrictions: {country: "in"}
                });

            // When the user selects an address from the dropdown, populate the address
            // fields in the form.
            autocomplete.addListener('place_changed', fillInAddress);
            }
         function fillInAddress() {
          // Get the place details from the autocomplete object.
          var place = autocomplete.getPlace();
         var latitude = place.geometry.location.lat();
         var longitude = place.geometry.location.lng();

         // console.log(latitude);
         // console.log(longitude);
          document.getElementById('postal_code').value = 0;
          document.getElementById('locality').value = '';
          document.getElementById('lat').value = 0;
          document.getElementById('lng').value = 0;

         document.getElementById('lat').value = latitude;
         document.getElementById('lng').value = longitude;
          
           for (var i = 0; i < place.address_components.length; i++) {
      for (var j = 0; j < place.address_components[i].types.length; j++) {
        if (place.address_components[i].types[j] == "postal_code") {
           // console.log( place.address_components[i].long_name);
          document.getElementById('postal_code').value = place.address_components[i].long_name;
        }
        if (place.address_components[i].types[j] == "locality") {
          document.getElementById('locality').value = place.address_components[i].long_name;
        }
      }
    }
        }
    </script>

<!--
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
-->
<script type="text/javascript">
  var d=new Date();
  //var year=d.getFullYear();
d.setFullYear(d.getFullYear()-20);
var current=d.getFullYear();
var yearRange= "1970:"+current;
 //alert(yearRange);
  $('#birth').datepicker({
    changeMonth: true,
      changeYear: true,
      yearRange: "1970:"+current,
      //maxDate:new Date(1998,01,01),
    dateFormat:"dd-mm-yy"
  });
  $('#to').datepicker({dateFormat:"dd-mm-yy"});

</script>
<script type="text/javascript">
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $("#app"); //Fields wrapper
    var add_button      = $("#add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){
            x++; //text box increment
            $(wrapper).append('<div id="my_append"><div class="form-group col-sm-12"><div class="form-group col-sm-5">from:<input type="text" name="frm_time[]" class="form-control time_picker1" placeholder="09:20am" onfocus="mytime()"></div><div class="form-group col-sm-5">to:<input type="text" name="to1_time[]" class="form-control time_picker1" placeholder="02:30pm" onfocus="mytime()"></div><span class="form-group col-sm-2"><button class="btn btn-danger btn_remove"  id="remove_field" style="margin-top:19px">x</button></span></div></div>');
        }
    });
    
    $(document).on("click","#remove_field", function(e){ //user click on remove text
        e.preventDefault(); $("#my_append").remove(); x--;
    })
});
</script>
<script type="text/javascript">
function validateImage(id) {

   var formData = new FormData();

   var file = document.getElementById(id).files[0];

   formData.append("Filedata", file);
   var t = file.type.split('/').pop().toLowerCase();
   if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
      $("#adhaar_proof").css('border','1px solid red').focus();$("#project_multiple_picerror").html('File type should be jpg,png,jpeg,gif,bmp only accepted');
      // alert('Please select a valid image file');
       document.getElementById(id).value = '';
       return false;
   }
   if (file.size > 1024000) {
         $("#adhaar_proof").css('border','1px solid red').focus();
         $("#adhaar_proof").html('Max Upload size is 1MB only');
       document.getElementById(id).value = '';
       $(':input[type="submit"]').prop('disabled', true);
       return false;
   }
   return true;
}
</script>
<script type="text/javascript">
function previewImages() {

  var $preview = $('#preview').empty();
  if (this.files) $.each(this.files, readAndPreview);

  function readAndPreview(i, file) {
    
    if (!/\.(jpeg|png|gif|jpg)$/i.test(file.name)){
       $("#adhaar_proof_error").html("please upload valid image");
    }
      else
      {
          $("#adhaar_proof_error").html("");
      }// else...
    
    var reader = new FileReader();

    $(reader).on("load", function() {
      $preview.append($("<img/>", {src:this.result, height:100}));
    });

    reader.readAsDataURL(file);
    
  }

}

$('#file-input').on("change", previewImages);
</script>
<script type="text/javascript">
$("#adhaar").on('focusout',function(){
  // alert("hii");
    var adhaar=$("#adhaar").val();
    // alert(adhaar);
    var user_id=$("#user_id").val();
    // alert(user_id);
    if(adhaar!="" && user_id!="")
    {
      // alert('test');
    $.ajax({
          dataType:'text',
          type:'post',
          data:{'condition':'adhaar','data':adhaar,'user_id':user_id,'table':'rl_tutor_tbl'},
          url:'<?php echo base_url();?>frontend/common_check_existence',
          success:function(res){
            $("#adhaar_error").html(res);
          },
          error:function(res){
            console.log(res);
          }
  });
}
  });
</script>
  <script type="text/javascript">
   $("#email").on('focusout',function(){
    // alert("hii");
    var email=$("#email").val();
    var user_id=$("#user_id").val();
    // alert(user_id);
    if(email!="" && user_id!="")
    {
    $.ajax({
          dataType:'text',
          type:'post',
          data:{'condition':'email_update','data':email,'user_id':user_id,'table':'rl_users_tbl'},
          url:'<?php echo base_url();?>frontend/common_check_existence',
          success:function(res){
            $("#email_error").html(res);
          },
          error:function(res){
            console.log(res);
          }
  });
}
  });
   $("#mobile").on('focusout',function(){
    // alert("hii");
    var mobile=$("#mobile").val();
     var user_id=$("#user_id").val();
    if(mobile!="" && user_id!="")
    {
    $.ajax({
          dataType:'text',
          type:'post',
          data:{'condition':'mobile_update','data':mobile,'user_id':user_id,'table':'rl_users_tbl'},
          url:'<?php echo base_url();?>frontend/common_check_existence',
          success:function(res){
            $("#mobile_error").html(res);
          },
          error:function(res){
            console.log(res);
          }
  });
}
  });  
</script> 
<!--
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
-->
   <script type="text/javascript">
  $('#resume').change(function(){
    var res = $(this).val();
    // var size = (this.files[0].size);
    switch(res.substring(res.lastIndexOf('.') + 1).toLowerCase()){
        case 'doc': case 'docx': case 'txt':
           $('.resume_error').html(''); 
            break;
        default:
            $(this).val('');
            $('.resume_error').html('please upload valid resume');
            break;
          }
        });
  
</script>
      <script>
  function mytime(){
    //alert("hii");
   $('input.time_picker1').timepicker();
  }
  </script>
<script type="text/javascript">
     $('input.time_picker').timepicker();
</script>
<script type="text/javascript">
//   $('#picture').on('change',function(){
//     // alert("hi pic");
//     var pic=$('#picture').val();
//     // alert(pic[0]);
//     var pic = this.files[0];
//     // alert(pic);
// var fileType = file["type"];
// var ValidImageTypes = ["image/gif", "image/jpeg", "image/png"];
// if ($.inArray(fileType, ValidImageTypes) < 0) {
//      // invalid file type code goes here.
// }
//   });
  
</script>
<!-- <script type="text/javascript">
  $('#picture').on('change',function(){
    // alert('hii');
    // alert("hi pic");
    var val = $(this).val();
    var picsize = (this.files[0].size);
   var mypic=val.substring(val.lastIndexOf('.') + 1).toLowerCase();
   // alert(mypic);
    switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
        case 'gif': case 'jpg': case 'png': case 'jpeg':
         $('.pic_error').html('');
            break;
        default:
            $(this).val('');
            $('.pic_error').html('please upload valid image');
            break;
          }
        });
      </script> -->
    
<script type="text/javascript">
function image_validate(image)
{
    var ext = image.match(/\.(.+)$/)[1];
    ext=ext.toLowerCase();
    validformat='';
    switch(ext) 
    {
        case 'jpg': case 'jpeg': case 'bmp': case 'png': case 'tif': case 'gif':
        validformat=1; break;
        default: validformat=0; 
    }
    return validformat;
}
</script>
<!-- <script type="text/javascript">
$("#adhaar_proof").change(function(){
    var imageSizeArr = 0;
     var imageSize = document.getElementById('adhaar_proof');
     alert(imageSize.files.length);
     var i;
    for (i = 0; i<imageSize.files.length; i++)
    {
         var imageSize = imageSize.files[i].size;
         alert("hii");
         if (imageSize >51200) {
             var imageSizeArr = 1;
         }
         if (imageSizeArr == 1)
         {
             $('#adhaar_proof_error').text('max 1 mb allowed');
              $('button[type="submit"]').prop('disabled', true);
         }
         else
         {
           $('#adhaar_proof_error').text('');
            $('button[type="submit"]').prop('disabled',false);
         }
         
     }
 });
 </script>  -->
 <script type="text/javascript">
  $("#subject").change(function(){
    // alert('hii');
 var tutor=$("#tutor").val();
 // alert(tutor);
  var subject=$('#subject').val();

       if(tutor==29 || tutor==30)
       {
        if(subject!=null && subject.length>2)
        {
          flag=false;
           $('#subject').css('border','1px solid red');
           $('#subject_error').html("maximum two subjects allowed");
        }
        else 
        {
           $('#subject').css('border','1px solid green');
           $('#subject_error').html("");
        }
      }
   });

  $('#picture').on('change',function(){
    var val = $(this).val();
    var picsize = (this.files[0].size);
   var mypic=val.substring(val.lastIndexOf('.') + 1).toLowerCase();
   // alert(mypic);
    switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
        case 'gif': case 'jpg': case 'png': case 'jpeg':
         $('.pic_error').html('');
            break;
        default:
            $(this).val('');
            $('.pic_error').html('please upload valid image');
            break;
          }
      if(picsize>1048576)
      {
 $('.pic_error').html('max size is 1mb only allowed');
      }
      if(picsize<=1048576)
      {
$('.pic_error').html('');  
      }
        });
   $('#resume').change(function(){
    var res = $(this).val();
     var resume_size = (this.files[0].size);
    switch(res.substring(res.lastIndexOf('.') + 1).toLowerCase()){
        case 'doc': case 'docx': case 'txt': case 'pdf':
           $('.resume_error').html(''); 
            break;
        default:
            $(this).val('');
            $('.resume_error').html('please upload valid resume');
            break;
          }
          if(resume_size>1048576)
           {
             $('.resume_error').html('max 1 mb allowed only');
           }
         if(resume_size<=1048576)
           {
            $('.resume_error').html('');
           }
        });
      </script>
<script type="text/javascript">
  $('#adhaar_proof').validate({
       rules: {
           "adhaar_proof[]": {
                         required: true,
                         extension: "jpg|jpeg|png",
                         filesize: 20971520,  
                      }
              }
});
</script>
<script type="text/javascript">
  $('.adhaar_proof').change(function(){
    var imageSize = document.getElementById('file-input');
    alert(imageSize); 
                var imageCount = imageSize.files.length;
                for (var i=0;i<imageCount; i++)
                {
                    var imageSize1 = imageSize.files[i].size;
                    alert(imageSize1);
                        if (imageSize1 > 1048576) 
                        {
                          $("#adhaar_proof_error").html(imageSize.files[i].name+ " is more than 1 mb max size 1 mb allowed only")
                        $(':submit').prop("disabled",true);                 }
                        else if(imageCount>2)
                        {
                           $("#adhaar_proof_error").html("two images allowed only")
                        $(':submit').prop("disabled",true);   
                        }
                        else
                        {
                          $("#adhaar_proof_error").html("")
                          $(':submit').prop("disabled",false); 
                        }

              }
 }); 
</script>

</body>
</html> 