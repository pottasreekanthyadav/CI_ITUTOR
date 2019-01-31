<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>itutors</title>
 
 
<!-- Bootstrap -->
<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"  />
<!--custom css-->
  <link href="<?php echo base_url(); ?>/assets/css/custom.css" type="text/css" rel="stylesheet"  />
 <!--menu-->
  <link href="<?php echo base_url(); ?>/assets/css/menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/icomoon.css">
  <link href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css" rel="stylesheet" />
   <link href="<?php echo base_url(); ?>assets/css/jquery.timepicker" type="text/css" rel="stylesheet"  />
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
    .pv-lg {padding-top: 15px!important;padding-bottom: 15px!important;}
        .mt0{margin-top: 0px}
        .side-menu ul li a{color: #fff; font-size: 13px;text-decoration: none}
        .mt9{margin-top: 9px}
        .bootstrap-tagsinput { border: 1px solid #e4e7ea;border-radius: 0px; box-shadow: none; display: block; padding: 7px 12px;}
        .labell-bg {background: #fff;color: #bbb;border: 1px solid;}
        .btn-bg{background-color: #ed3f40;color: #fff}
         .project-images{ width: 24%;height: 220px;}
        label{margin-bottom: 15px; margin-top: 15px;}
</style>
  </head>
  <body class="bg-wh">
   <?php $this->load->view('includes/header.php'); ?>
   <div class="clearfix"></div>

  <!--section dashboard start-->
  <section>
      <div class="container">
 
      <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-12 inner-bg no-padd">
              
           <h4 class="title-head"><strong>Tutor Profile</strong></h4>
         <?php  $msg=$this->session->flashdata('msg');if(!empty($msg))
         { ?>
          <p style="color:red"><?php echo $msg;?></p>
          <?php } ?>
  
          
            <p class="text-danger"><?php if(!empty($err_msg)) echo $err_msg; ?></p>
          
          <div class="col-sm-10">
<form id="tutor_profile" method="post" action="<?php echo base_url();?>tutor/insert_tutor_ctrl" enctype="multipart/form-data">
  <fieldset class="the-fieldset col-sm-12">
      <legend class="the-legend">Tutor Details :</legend>
  <div class="form-group col-sm-6">
    <input type="hidden" class="form-control" name="cats_id" id="cats_id" value="<?php if(isset($tutorinfo->category_id))echo $tutorinfo->category_id; ?>" >
    <label class="control-label" for="category">Select Categories(Max 2 Categories):</label>
    <select class="form-control selectpicker"  name="category[]" id="category"
    style="height: 120px; overflow: auto;" tabindex="" multiple multiple data-max-options="2" data-live-search="true">
    <option value="" disabled="disabled">--Select--</option>
    <?php 
    foreach($cat as $row)
    {
      ?>
      <option value="<?php echo $row->category_id;?>" <?php echo set_select('category',$row->category_id);?>><?php echo ucwords($row->category_name);?></option>
    <?php
    }
    ?>

  </select>
  <?php echo form_error('category[]'); ?>
  <p>Press ctrl to select multiple categories</p>
  </div>
    
   <div class="form-group col-sm-6">
      <label class="control-label" for="language">Language Know:</label>
   <select class="form-control" name="language[]" id="language" multiple="multiple" style="height: 120px; overflow: auto;" tabindex="" >
    <option value="" disabled="disabled">--select--</option>
    <?php
    foreach($language as $row)
    {
      ?>
      <option value="<?php echo $row->lid;?>" <?php echo set_select('language',$row->lid);?>><?php echo ucfirst($row->language);?></option>
      <?php
    }
    ?>
  </select>
  <?php echo form_error('language[]'); ?>
  <p>Press ctrl to select multiple languages</p>
   </div>
    
   <div class="form-group col-sm-6 gender">
      <label class="control-label">Gender</label>
      <div class="form-group col-sm-12" id="gender">
        <div class="form-group col-sm-6">
       <input type="radio" name="gender" value="male"> Male</div>
     <div class="form-group col-sm-6">
  <input type="radio" name="gender" value="female">Female
</div></div>
<?php echo form_error('gender');?>
</div>
    <div class="form-group col-sm-6">
      <?php if(!empty($tutorinfo->qualification));?>
      <label class="control-label" for="college">Qualification:</label>
   <select class="form-control" name="qualification" id="qualification" tabindex="4">
    <option value="">--select--</option>
    <?php
    foreach($resp as $row)
    {
      ?>
      <option value="<?php echo $row->qid;?>" <?php echo set_select('qualification',$row->qid);?>><?php echo 
      ucwords($row->qualification);?></option>
      <?php
    }
    ?>
  </select>
  <?php echo form_error('qualification[]'); ?>
   </div>
   <div class="form-group col-sm-6">
      <label class="control-label" for="college">College/University Name:</label>
     <input type="text" class="form-control" name="college" id="college" value="<?php  echo set_value('college');?>" placeholder="College/University Name">
     <?php echo form_error('college'); ?>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label" for="tutor">Select Tutor Type:</label>
  <select class="form-control" name="tutor_type" id="tutor" value="" tabindex="4">
    <option value="">--select--</option>
    <?php
    foreach($subtype as $row)
    {
      ?>
      <option value="<?php echo $row->tutor_type_id;?>"<?php echo set_select('tutor_type',$row->tutor_type_id);?>><?php echo ucwords($row->type_name);?></option>
      <?php
    }
    ?>
  </select> 
  <?php echo form_error('tutor_type[]'); ?>
   </div>
   <div class="form-group col-sm-6" id="working_text">
      <label class="control-label" for="working">Working school/college:</label>
   <select class="form-control" name="working" id="working" tabindex="2">
    <option value=''>--select--</option>
  
    <option value="yes">Yes</option>
    <option value="no">No</option>
  </select>
  <?php echo form_error('working'); ?>
   </div>
   <div class="form-group col-sm-6">
      <label class="control-label" for="teaching">Teaching Experience:</label>
   <select class="form-control" name="teaching" id="teaching_exp" tabindex="4">
    <option disabled="disabled">--select--</option>
  
    <option value="1 year" <?php echo set_select('teaching','1 year');if(!empty($tutorinfo->experience)&& ($tutorinfo->experience=="1 year"))echo "selected"; ?> >1 Year</option>
    <option value="2 year" <?php echo set_select('teaching','2 year');if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="2 year")) echo "selected";?>>2 Year's</option>
    <option value="3 year" <?php echo set_select('teaching','3 year');if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="3 year")) echo "selected";?>>3 Year's</option>
    <option value="4 year" <?php echo set_select('teaching','4 year');if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="4 year"))echo "selected";?>>4 Year's</option>
    <option value="5 year's" <?php echo set_select('teaching','5 year');if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="5 year")) echo "selected";?>>5 Year's</option>
    <option value="6 year" <?php echo set_select('teaching','6 year');if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="6 year")) echo "selected";?>>6 Year's</option>
    <option value="7 year" <?php echo set_select('teaching','7 year'); if(!empty($tutorinfo->experience)&& ($tutorinfo->experience=="7 year")) echo "selected";?>>7 Year's</option>
    <option value="8 year" <?php echo set_select('teaching','8 year'); if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="8 year"))echo "selected";?>>8 Year's</option>
    <option value="9 year" <?php echo set_select('teaching','9 year'); if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="9 year")) echo "selected";?>>9 Year's</option>
    <option value="10 year" <?php echo set_select('teaching','10 year'); if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="10 year")) echo "selected";?>>10 Year's</option>
    <option value="11 year" <?php echo set_select('teaching','11 year'); if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="11 year")) echo "selected";?>>11 Year's</option>
    <option value="12 year" <?php echo set_select('teaching','12 year'); if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="12 year")) echo "selected";?>>12 Year's</option>
    <option value="13 year" <?php echo set_select('teaching','13 year'); if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="13 year")) echo "selected";?>>13 Year's</option>
    <option value="14 year" <?php echo set_select('teaching','14 year'); if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="14 year")) echo "selected";?>>14 Year's</option>
    <option value="15 year" <?php echo set_select('teaching','15 year'); if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="15 year")) echo "selected";?>>15 Year's</option>
    <option value="15+ year" <?php echo set_select('teaching','10 year'); if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="15+ year")) echo "selected";?>>15+</option>
  </select>
  <?php echo form_error('teaching'); ?>
   </div>
   
   
   <div class="form-group col-sm-6">
      <label class="control-label" for="syllabus">Select Syllabus:</label>
   <select class="form-control" name="syllabus[]" id="syllabus" tabindex="4" multiple="multiple">
    <option disabled>--select--</option>
    <?php 
    foreach($syllabus as $row)
    {
      ?>
      <option value="<?php if(!empty($row->syllabus_id))echo $row->syllabus_id;?>" <?php echo set_select('syllabus',$row->syllabus_id);?>><?php echo strtoupper($row->syllabus_name);?></option>
      <?php
    }
    ?>
  </select>
  <p>Press ctrl to select multiple syllabus</p>
  <?php echo form_error('syllabus[]'); ?>
   </div>
   <div class="form-group col-sm-6">
      <label class="control-label" for="subject">Select Subject:</label>
   <select class="form-control my_subject" name="subject[]" id="subject" tabindex="3" multiple="multiple">
    <option value="" disabled>--select--</option>
    <?php
    foreach($res as $row)
    {
      ?>
      <option value="<?php echo $row->subject_id;?>" <?php if(!empty($row->subject_id))echo set_select('subject',$row->subject_id);?>><?php echo ucfirst($row->subject_name);?></option>
   <?php
    }
    ?>
  </select>
    <p>Press ctrl to select multiple subjects and use scroll bar to scroll</p>
  <?php echo form_error('subject[]'); ?>
  <span id="subject_error" style="color:red"></span>
</div>
    <!-- <div class="form-group col-sm-6">
      <label class="control-label" for="time">Preferable Time:</label>
   <select class="form-control" name="time[]" id="time" tabindex="2" multiple="multiple">
    <option disabled="disabled" selected="selected">--select--</option>
    <?php if(!empty($timing)){
      foreach($timing as $row){
  ?>
    <option value="<?php echo $row->timing_id;?>"><?php echo  $row->timings;?></option>
    <?php } }
    ?>
  </select>
  <?php echo form_error('time'); ?>
   </div>
 -->
 <div class="form-group col-sm-6">
  <label class="control-label" for="time">Preferable Time:</label>
  <div id="app">
 <div class="form-group col-sm-12">
      <div class="form-group col-sm-5">
        from:<input type="text" name="frm_time[]" class="form-control time_picker" placeholder="09:20am">
</div>
    <div class="form-group col-sm-5">
      to:<input type="text" name="to1_time[]" class="form-control time_picker" placeholder="01:30pm">
    </div>
    <div class="form-group col-sm-2">
      <span><button class="fcbtn btn btn-info btn-outline btn-1e  no-bod-rad" id="add_field_button" style="margin-top: 19px"><i class="fa fa-plus"></i> </button></span>
    </div>
    </div>
  </div>
   </div>

   

<div class="form-group col-sm-6">
  <label class="control-label" for="birth">location:</label>
  <input type="text" class="form-control" name="location" id="location" placeholder="Enter location" onFocus="geolocate()" value="<?php if(!empty($_POST['location'])) echo $_POST['location'];?>">
  <?php echo form_error('location'); ?>
  <input type="hidden" id="locality" name="city" value="">
  <input type="hidden" id="postal_code" name="pincode" value="0">
  <input type="hidden" id="lat" name="latitude" value="0">
  <input type="hidden" id="lng" name="longitude" value="0">
</div>

   <div class="form-group col-sm-6">
      <label class="control-label" for="birth">Date of birth:</label>
      <?php /*if(!empty($date=$tutorinfo->dob))
      {
       $dob=date("d/m/Y",strtotime($date));
     }
  */?>
     <input type="text" class="form-control" name="birth" value="<?php echo set_value('birth');?>" id="birth" placeholder="Enter your Date of Birth" autocomplete="off">
     <?php echo form_error('birth'); ?>
     <span id="birth_error" style="color:red"></span>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label" for="mobile">Mobile No:</label>
     <input type="text" class="form-control mobile" name="mobile" id="mobile" value="<?php $mobile=$this->session->userdata('user_mobile'); if(!empty($mobile)) echo $mobile;?>"  placeholder="9493558568" maxlength="10" >
     <?php echo form_error('mobile'); ?>
     <span id="mobile_error" style="color:red"></span>
    </div>
              
    <div class="form-group col-sm-6">
      <label class="control-label" for="email">Email:</label>
   <input type="text" class="form-control email" name="email" id="email"value="<?php $email=$this->session->userdata('user_email'); if(!empty($email)) echo $email;?>" placeholder="enter email">
   <?php echo form_error('email'); ?>
   <span id="email_error" style="color:red"></span>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label" for="come">How you came to know about this website:</label>
     <input type="text" class="form-control" name="come" id="come" value="<?php if(!empty($tutorinfo->known_by))echo set_value('come',$tutorinfo->known_by);?>" placeholder="Ex. Friends, News paper, Social network etc,,">
     <?php echo form_error('come'); ?>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label">Adhaar Number:</label>
     <input type="text" class="form-control" name="adhaar" id="adhaar" value="<?php echo set_value('adhaar');?>" placeholder="Enter Adhaar number" maxlength="12">
     <?php echo form_error('adhaar'); ?>
     <span style="color:red" id="adhaar_error"></span>
    </div>
    
    <div class="form-group col-sm-6">
        <div class="form-group sky-form">
            <label>Upload your Picture<sup>*uploading your picture will give you more opportunities(only jpeg,jpg,png allowed)</sup></label>
              <input type="file" name="picture" id="picture" class="form-control" data-toggle="tooltip" title="only jpeg,jpg,png allowed" accept=".jpg,.jpeg,.png">
               <span class="pic_error" style="color:red"></span>
               <span style="color:red"><?php if(!empty($pic_error)) echo $pic_error;?>
        </div>
          <p class="err">&nbsp;</p>
          <?php echo form_error('picture'); ?>
    </div>
    <div class="form-group col-sm-6">
        <div class="form-group sky-form">
            <label>Upload your Resume<sup>*(only doc,docx,pdf allowed)</sup></label>
            <input type="file" name="resume" id="resume" class="form-control" data-toggle="tooltip" title="doc,docx,pdf allowed" accept=".doc,.pdf,.docx">
             <span class="resume_error" style="color:red"></span>
            </div>
              <p class="err">&nbsp;</p>
              <?php echo form_error('resume'); ?>
    </div>
    <div class="form-group col-sm-6">
        <div class="form-group sky-form">
            <label>Upload your Adhaar<sup>(only jpg,jpeg,png allowed)</sup></label>
            <input type="file" name="adhaar_proof[]" id="file-input" multiple="multiple" class="form-control adhaar_proof" accept=".jpg,.jpeg,.png">
             <span id="adhaar_proof_error" style="color:red"></span>
            </div>
            <p>Press ctrl to select multiple image</p>
            <div id="preview"></div>
              <?php echo form_error('adhaar_proof'); ?>
    </div>
    
    <div class="form-group col-sm-12">
          <div class="form-group sky-form">
            <label>About you(Min 200 Character)<sup>*</sup></label>
              <textarea class="form-control" name="about" id="about"><?php if(!empty($tutorinfo->about_tutor)) echo set_value('about',$tutorinfo->about_tutor);?></textarea>
          </div>
          <span id="about_error" style="color:red"></span>
          <?php echo form_error('about'); ?>
    </div>
    
    <div class="form-group">      
       <div class="clearfix">&nbsp;</div> 
      <div class="col-sm-12 text-center">
          <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
        <button type="submit" name="submit" class="btn btn-bg col-sm-4 col-sm-offset-4" id="submit">submit</button>
          <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
      </div>
           <div class="clearfix">&nbsp;</div>
    </div>
    </fieldset> 
  </form>
          </div>
               <div class="col-sm-2 no-padd">
       <img src="<?php  echo MYIMAGES_PATH;?>ad2.jpg" style="margin-top:15px;padding-right: 15px !important;" class="img-responsive">        
     <img src="<?php  echo MYIMAGES_PATH;?>ad2.jpg" style="margin-top:15px;padding-right: 15px !important;" class="img-responsive">       
 </div>
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
    <link rel="stylesheet" href="code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https:code.jquery.com/jquery-1.12.4.js"></script>
<script src="https:code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
  <!-- <script type="text/javascript">
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
 </script> -->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUlB6Eh-d9yy-kbAVPFbC9WcIYQCtJXJE&libraries=places&callback=initAutocomplete"
async defer></script>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUlB6Eh-d9yy-kbAVPFbC9WcIYQCtJXJE&libraries=places&callback=initAutocomplete"
        async defer></script>
       
<script type="text/javascript">
  $("#tutor_profile").submit(function(){
    var flag=true;
    var category=$('#category').val();
    var tutor=$('#tutor').val();
    // alert(tutor);
    var language=$('#language').val();
    var qualification=$('#qualification').val();
    var college=$('#college').val().trim();
    var working=$('#working').val();
    // alert(working);
    var teaching_exp=$('#teaching_exp').val();
    var syllabus=$('#syllabus').val();
    var subject=$('#subject').val();
    // alert(subject);
    // alert(subject.length);
    var location=$('#location').val().trim();
    var time=$('#time').val();
    var birth=$('#birth').val().trim();
    var mobile=$('#mobile').val();
    var email=$('#email').val().trim();
    var reference=$('#reference').val();
    var come=$('#come').val().trim();
     var picture=$('#picture').val();
     var resume=$('#resume').val();
     var resume_error=$('.resume_error').html();
    var pic_error=$('.pic_error').html();
     var adhaar=$('#adhaar').val();
     var adhaar_error=$('#adhaar_error').text();
    var about=$('#about').val().trim();
    var adhaar_proof=$(".adhaar_proof").val();
    adhaar_proof_error=$("#adhaar_proof_error").html();
    var mobile_error=$("#mobile_error").html();
    var email_error=$("#email_error").html();
    var timepattern =/^[0-9]{1,2}\:[0-9]{1,2}[a,p,m]{2}$/;
    var d=new Date();
    var birth_year = birth.substr(6,10);
    //var birth_year=birth.getFullYear();
    //alert(birth_year);
      var email_pattern=/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
      var mobile_pattern=/^[6-9]{1}[0-9]{9}$/;
      var adhaar_pattern=/^[0-9]*$/;
      var clg_pattern=/^[a-zA-Z, ]*$/;
      var dob_pattern=/^([0-9]{2})\-([0-9]{2})\-([0-9]{4})$/;
      var about_pattern=/^[a-zA-Z0-9 ]*$/;
      // var fsize = $('#picture')[0].files[0].size;
      // alert(fsize);

    if(category==null)
      {
          flag=false;
          $('#category').css('border','1px solid red');
      }
      else if(category!=null && category.length >2)
      {
        flag=false;
        $('#category').css('border','1px solid red');
      }
      else
      { 
          $('#category').css('border','1px solid green');
      }
      if(language==null)
      {
          flag=false;
          $('#language').css('border','1px solid red');
      }
      else
      {
          $('#language').css('border','1px solid green');
      }
      if(qualification=='')
      {
          flag=false;
          $('#qualification').css('border','1px solid red');
      }
      else
      {
          $('#qualification').css('border','1px solid green');
      }
      if(college=="")
      {
        flag=false;
          $('#college').css('border','1px solid red');
      }
      else if(college!="" && !clg_pattern.test(college))
      {
          flag=false;
          $('#college').css('border','1px solid red');
      }
      else
      {
          $('#college').css('border','1px solid green');
      }
      // if(working=='--select--')
      // {
      //     flag=false;
      //     $('#working').css('border','1px solid red');
      // }
      // else
      // {
      //     $('#working').css('border','1px solid green');
      // }
      if(teaching_exp==null)
      {
          flag=false;
          $('#teaching_exp').css('border','1px solid red');
      }
      else
      {
          $('#teaching_exp').css('border','1px solid green');
      }
      if(syllabus==null)
      {
          flag=false;
          $('#syllabus').css('border','1px solid red');
      }
      else
      {
          $('#syllabus').css('border','1px solid green');
      }
 if(location=='' || !clg_pattern.test(location))
      {
          flag=false;
          $('#location').css('border','1px solid red');
    }
       else
       {
           $('#location').css('border','1px solid green');
       }
       if(time=="")
       {
           flag=false;
           $('#time').css('border','1px solid red');
       }
       else
       {
           $('#time').css('border','1px solid green');
       }

       if(birth=="" || !dob_pattern.test(birth))
       {
           flag=false;
           $('#birth').css('border','1px solid red');
       }
       else
       {
           $('#birth').css('border','1px solid green');
       }
        if (birth_year >(d.getFullYear()-20))
       {
           flag=false;
           $('#birth').css('border','1px solid red');
           $('#birth_error').html("minimum 20 years old tutor allowed");
       }
       else
       {
           $('#birth_error').html('');
       }
       if(mobile=="")
       {
           flag=false;
           $('#mobile').css('border','1px solid red');
       }
       else if(mobile!='' && !mobile_pattern.test(mobile))
       {
        flag=false;
         $('#mobile').css('border','1px solid red');
       }
       else if(mobile_error!="" && mobile_error.length >2)
       {
        flag=false;
        $("#mobile").css("border","1px solid red");
       }
       else
       {
           $('#mobile').css('border','1px solid green');
       }
       if(come!="" && !clg_pattern.test(come))
       {
          $("#come").css('border','1px solid red');
       }
       else
       {
         $("#come").css('border','1px solid green');
       }
       if(email=="")
       {
           flag=false;
           $('#email').css('border','1px solid red');
       }
       else if(email!='' && !email_pattern.test(email))
       {
        
        flag=false;
           $('#email').css('border','1px solid red');
        }
         else if(email_error!="" && email_error.length>2)
       {
        //alert(email_error.length);
        flag=false;
        $("#email").css("border","1px solid red");
       }
       else
       {
           $('#email').css('border','1px solid green');
       }
      
     if(resume=="" || resume_error!="")
       {
           flag=false;
           $('#resume').css('border','1px solid red');
       }
       else
       {
           $('#resume').css('border','1px solid green');
       }
        if(picture=="" || pic_error!="")
       {
           flag=false;
           $('#picture').css('border','1px solid red');
       }
       else
       {
           $('#picture').css('border','1px solid green');
       }
       
       if(adhaar!="" && adhaar_error!="" && adhaar_error.length>10)
       {
           flag=false;
           $('#adhaar').css('border','1px solid red');
       }
      else if(adhaar==""||adhaar.length!=12 || !adhaar_pattern.test(adhaar))
       {
           flag=false;
           $('#adhaar').css('border','1px solid red');
       }
       else
       { 
           $('#adhaar').css('border','1px solid green');
       }
       if(adhaar_proof==""|| adhaar_proof_error!="")
       {
           flag=false;
           $('.adhaar_proof').css('border','1px solid red');
       }
       else
       {
           $('.adhaar_proof').css('border','1px solid green');
       }

       if(tutor=="")
      {
          flag=false;
          $('#tutor').css('border','1px solid red');
      }
      else
      {
        $('#tutor').css('border','1px solid green');
      }
      // alert(tutor);
      //  alert(subject.length);
 
       if(tutor==29 || tutor==30)
       {
        if(subject!=null && subject.length>2)
        {
          flag=false;
           $('#subject').css('border','1px solid red');
           $('#subject_error').html("maximum two subjects allowed");
        }
        else if(subject==null)
        {
         $('#subject').css('border','1px solid red');
         $('#subject_error').html('');
        }
        else
        {
           $('#subject').css('border','1px solid green');
           $('#subject_error').html("");
        }
      }
       if(tutor==33)
      {
        if(subject!=null || subject!="")
        {
           $('#subject').css('border','1px solid green');
           $('#subject_error').html("");
        }
      }

       if($('input[name=gender]:checked').length<=0)
       {
               flag=false;
           $('#gender').css('border','1px solid red');
       }
       else
       {
           $('#gender').css('border','1px solid green');
       }
       
        $("[name^=frm_time]").each(function () {
           var frm_time=$(this).val();
          if($(this).val()=="")
          {
            flag=false;
           $("[name^=frm_time]").css('border','1px solid red');
          }
          else if($(this).val()!="" && !timepattern.test(frm_time))
          {
              flag=false;
           $("[name^=frm_time]").css('border','1px solid red');
          }
          else
          {
              $("[name^=frm_time]").css('border','1px solid green');
          }
    
          });
         $("[name^=to1_time").each(function () {
          var to1_time=$(this).val();
          if($(this).val()=="")
          {
            flag=false;
           $("[name^=to1_time]").css('border','1px solid red');
          }
           else if($(this).val()!="" && !timepattern.test(to1_time))
          {
              flag=false;
           $("[name^=to1_time]").css('border','1px solid red');
          }
          else
          {
           $("[name^=to1_time]").css('border','1px solid green');
          }
          });
         if( about!="" && about.length<200)
           {
            flag=false;
            $("#about").css('border','1px solid red');
            $("#about_error").html("minimum 200 character mandatory,please write atleast in 200 character");
           }
           else if(about!="" && !about_pattern.test(about))
           {
             $("#about").css('border','1px solid red');
           }
           else if(about=="")
           {
            flag=false;
            $("#about").css('border','1px solid red');
           }
           else
           {
            $("#about").css('border','1px solid green');
            $("#about_error").html('');
           }
   return flag;
});
</script>
<script type="text/javascript">
   $("#category").change(function () {
    var category=$('#category').val();
    if(category.length>2)
    {
        $('#category').css('border','1px solid red');
      }
      else
        $('#category').css('border','1px solid green');
      });
   $("document").ready(function(){
       var tutor=$("#tutor").val();
       if(tutor!=29 || tutor!=30)
        $("#working_text").hide();
   });
     $("#tutor").change(function(){
    var tutor=$("#tutor").val();
    if(tutor==29 || tutor==30)
       {
        $("#working_text").show()
       }
       else
       {
        $("#working_text").hide()
       }
   });
</script>
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
</script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
   if (t != "jpeg" && t != "jpg" && t != "png") {
      $("#adhaar_proof").css('border','1px solid red');$("#adhaar_proof_error").html('File type should be jpg,png,jpeg only accepted');
       document.getElementById(id).value = '';
       return false;
   }
   if (file.size >51200) {
         $("#adhaar_proof").css('border','1px solid red');
         $("#adhaar_proof_error").html('Max Upload size is 1MB only');
       document.getElementById(id).value = '';
       $('button[type="submit"]').prop('disabled', true);
       return false;
   }
   else
   {
     $("#adhaar_proof_error").html('');
      $('button[type="submit"]').prop('disabled', false);
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
    }
    
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
$("#adhaar").change(function(){
    var adhaar=$("#adhaar").val();
    if(adhaar!="")
    {
    $.ajax({
          dataType:'text',
          type:'post',
          data:{'condition':'adhaar','data':adhaar,'table':'rl_tutor_tbl'},
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
   $(".email").on('focusout',function(){
    // alert("hii");
    var email=$(".email").val();
    if(email!="")
    {
    $.ajax({
          dataType:'text',
          type:'post',
          data:{'condition':'email','data':email,'table':'rl_tutor_tbl'},
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
   $(".mobile").on('focusout',function(){
    // alert("hii");
    var mobile=$(".mobile").val();
    if(mobile!="")
    {
    $.ajax({
          dataType:'text',
          type:'post',
          data:{'condition':'mobile','data':mobile,'table':'rl_tutor_tbl'},
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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
   <script type="text/javascript">
  function mytime(){
    //alert("hii");
   $('input.time_picker1').timepicker();
  }
  </script>
<script type="text/javascript">
     $('input.time_picker').timepicker();
</script>
<script type="text/javascript">
  $('#picture').on('change',function(){
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
  // $("#subject").change(function(){
  //   alert('check');
  //  //    var subject=$("#subject").val();
  //  //  var tutor=$("#tutor").val();
  //  //  if(tutor==29 || tutor==30 subject!=null && subject.length>2)
  //  //     geolocation
  
  //  //        flag=false;
  //  //         $('#subject').css('border','1px solid red');
  //  //         $('#subject_error').html("maximum two subjects allowed");
  //  //      }
  //  //      else
  //  //      {
  //  //         $('#subject').css('border','1px solid green');
  //  //         $('#subject_error').html("");
  //  //      }
  //  // });
</script>
<script type="text/javascript">
  $('.adhaar_proof').change(function(){
    var imageSize = document.getElementById('file-input');
                var imageCount = imageSize.files.length;
                for (var i=0;i<imageCount; i++)
                {
                    var imageSize1 = imageSize.files[i].size;
                        if (imageSize1 > 1048576) 
                        {
                          $("#adhaar_proof_error").html("max size 1nb allowed only")
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
