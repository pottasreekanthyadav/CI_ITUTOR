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
    <li class="active col-sm-3 text-center no-padd home"><a data-toggle="tab" href="#home">Step 1</a></li>
    <li class="col-sm-3 text-center no-padd menu1"><a data-toggle="tab" href="#menu1">Step 2</a></li>
    <li class="col-sm-3 text-center no-padd menu2"><a data-toggle="tab" href="#menu2">Step 3</a></li>
   
  </ul>

  <div class="tab-content">
     
    <div id="home" class="tab-pane fade in active">
     <div class="col-sm-12">
      <p class="text-success"><?php $msg=$this->session->flashdata('msg'); if(!empty($msg)) echo $msg;?></p>
            <p class="text-danger"><?php $err_msg=$this->session->flashdata('err_msg'); if(!empty($err_msg)) echo $err_msg;?></p>
       
<form id="tutor_update" method="post" action="<?php echo base_url();?>tutor/update_tutor_ctrl" enctype="multipart/form-data">
          <div class="clearfix">&nbsp;</div>     
        <div class="col-sm-6">
          <div class="form-group ">
              <?php if(!empty($multi_cats))
              {
              foreach($multi_cats as $row)
                       {
                        ?>
<!--                        <div class="fcbtn btn btn-info btn-outline btn-1e  no-bod-rad">-->
  <p style="font-size: 13px !important;margin-bottom: 4px !important;" class="bg-primary"><strong> &nbsp; Selected Categories : </strong><?php echo common_str($row->cats);?></p>
<!--</div>-->
                <?php
                       }
                     }
                       ?>
    </div>
    <label class="control-label" for="category">Select Categories(Max 2 Categories):</label>
   
    <div class="col-sm-12 fm-bd cat1"> 
 <?php 
    if(!empty($cat))
    {
    foreach($cat as $row)
    {
      // foreach($multi_catsid as $row1)
      //                  {
?>
     <div class="col-sm-6">
    <label class="customcheck"><?php echo ucwords($row->category_name);?>
          <input type="checkbox" name="category[]" value="<?php echo $row->category_id;?>"  id="category">
          <span class="checkmark"></span>
        </label> 
    </div>
   
          <?php
    // }
  }
  }
    ?>
  </div>
  <?php echo form_error('category'); ?>
  </div>
<div class="col-sm-6">
    <div class="form-group">
              <?php
              if(!empty($multi_lang))
              {
               foreach($multi_lang as $row)
                       {
                        ?>
                     

  <p style="font-size: 13px !important;
    margin-bottom: 4px !important;" class="bg-primary"><strong> &nbsp;  Selected Language"</strong><?php echo common_str($row->langs);?></p>

                <?php
                       }
                     }
                       ?>
    </div>
      <label class="control-label" for="language">Language Know:</label><br/>

    <div class="col-sm-12 fm-bd lang1"> 
   <?php
    if(!empty($language))
    {
    foreach($language as $row)
    {
      ?>
    <div class="col-sm-6">
    <label class="customcheck"><?php echo ucfirst($row->language);?>
          <input type="checkbox"  name="language[]"  value="<?php echo $row->lid;?>" id="language">
          <span class="checkmark"></span>
        </label> 
    </div>
         <?php
    }
}
    ?>
  </div>
  <?php echo form_error('language'); ?>
   </div>
   <div class="form-group col-sm-6 gender">
      <label class="control-label">Gender</label>    
      <div class="form-group col-sm-12" id="gender">
        <div class="form-group col-sm-6">
          <?php 
          if(!empty($user_data))
          {
          if($user_data->gender=="male")
          {
            ?>
       <input type="radio" name="gender" value="male" checked> Male</div>

     <div class="form-group col-sm-6">
  <input type="radio" name="gender" value="female">Female
</div>
<?php }
else
{
  ?>
<input type="radio" name="gender" value="male"> Male</div>

     <div class="form-group col-sm-6">
  <input type="radio" name="gender" value="female" checked>Female
</div>
<?php } } ?>

    </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label" for="qualification">Qualification:</label>
   <select class="form-control" name="qualification" id="qualification" tabindex="4">
    <option disabled="disabled"value="">--select--</option>
    <?php
    if(!empty($resp))
    {
    foreach($resp as $row)
    {
      ?>
      <option value="<?php echo $row->qid;?>" <?php echo set_select('qualification',$row->qualification,true);?>><?php echo 
      ucwords($row->qualification);?></option>
      <?php
    }
  }
    ?>
  </select>
  <?php echo form_error('qualification'); ?>
   </div>
   <div class="form-group col-sm-6">
      <label class="control-label" for="college">College/University Name:</label>
     <input type="text" class="form-control" name="college" id="college" value="<?php echo $user_data->collage_name;?>" placeholder="College/University Name">
     <?php echo form_error('college'); ?>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label" for="tutor">Select Tutor Type:</label>
  <select class="form-control" name="tutor_type" id="tutor" value="" tabindex="4">
    <option value="" disabled="disabled">--select--</option>
    <?php
    if(!empty($subtype))
    {
    foreach($subtype as $row)
    {
      ?>
      <option value="<?php echo $row->tutor_type_id;?>"<?php if($row->tutor_type_id==$user_data->tutor_type){echo "selected";}?>><?php echo ucwords($row->type_name);?></option>
      <?php
    }
  }
    ?>
  </select> 
  <?php echo form_error('tutor'); ?>
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

    
         <div class="col-sm-12 text-center">
             <div class="clearfix">&nbsp;</div>
             <div class="clearfix">&nbsp;</div>
           <button type="button" class="btn btn-warning no-bod-rad col-sm-4 col-sm-offset-4 btn-lg" id="next1" data-toggle="tab"> Next</button>
         </div>
        </div>
    </div>
    <div id="menu1" class="tab-pane fade">
    <div class="form-group col-sm-6">
     <div class="form-group">
              <?php if(!empty($multi_syl)) 
              {
              foreach($multi_syl as $row)
                       {
                        ?>
                     
  <p style="font-size: 13px !important;
    margin-bottom: 4px !important;margin-top: 16px;" class="bg-primary"><strong> &nbsp; Selected Syllabus: </strong><?php echo common_str($row->syllabus);?></p>

                <?php
                       }
                     }
                       ?>
            
    </div>
      <label class="control-label" for="syllabus">Select Syllabus:</label><br/>
<div class="col-sm-12 fm-bd">
  <?php 
    if(!empty($syllabus))
    {
    foreach($syllabus as $row)
    {                 
      ?>
     <div class="col-sm-6">
    <label class="customcheck"><?php echo strtoupper($row->syllabus_name);?>
          <input type="checkbox" name="syllabus[]" id="syllabus" value="<?php echo $row->syllabus_id;?>">
          <span class="checkmark"></span>
        </label> 
    </div>  
          <?php
    // }
  }
  }
    ?>
  </div>
  <?php echo form_error('syllabus'); ?>
     </div>
        
        <div class="col-sm-6">
    <div class="form-group">
            <?php if(!empty($multi_sub))
              {
              foreach($multi_sub as $row)
                       {
                        ?>
                      
  <p style="font-size: 13px !important;
    margin-bottom: 4px !important;margin-top: 16px;" class="bg-primary"><strong> &nbsp; Selected Subject: </strong><?php echo common_str($row->subjects);?></p>

                <?php
                       }
                     }
                       ?>
    </div>
        <label class="control-label" for="subject">Select Subject:</label><br/>
        <div class="col-sm-12 fm-bd sub1">
   <?php
    foreach($res as $row)
    {
          
      ?>
     <div class="col-sm-4">
    <label class="customcheck"><?php echo ucfirst($row->subject_name);?>
          <input type="checkbox" name="subject[]" id="subject" value="<?php echo $row->subject_id;?>">
          <span class="checkmark"></span>
        </label> 
      </div>
    <?php
}
    ?>
  </div>
  <div id="subject_error" style="color:red"></div>
  <?php echo form_error('subject'); ?>
   </div>
        
        <div class="form-group col-sm-6">
      <label class="control-label" for="teaching">Teaching Experience:</label>
   <select class="form-control" style="margin-top: 18px;" name="teaching" id="teaching_exp" tabindex="4">
    <option disabled="disabled" value="">--select--</option>
  <option value="1 year" <?php echo set_select('teaching','1 year');if(!empty($user_data->experience)&& ($user_data->experience=="1 year"))echo "selected"; ?> >1 Year</option>
    <option value="2 year" <?php echo set_select('teaching','2 year');if(!empty($user_data->experience) && ($user_data->experience=="2 year")) echo "selected";?>>2 Year</option>
    <option value="3 year" <?php echo set_select('teaching','3 year');if(!empty($user_data->experience) && ($user_data->experience=="3 year")) echo "selected";?>>3 Year</option>
    <option value="4 year" <?php echo set_select('teaching','4 year');if(!empty($user_data->experience) && ($user_data->experience=="4 year"))echo "selected";?>>4 Year</option>
    <option value="5 year" <?php echo set_select('teaching','5 year');if(!empty($user_data->experience) && ($user_data->experience=="5 year")) echo "selected";?>>5 Year</option>
    <option value="6 year" <?php echo set_select('teaching','6 year');if(!empty($user_data->experience) && ($user_data->experience=="6 year")) echo "selected";?>>6 Year</option>
    <option value="7 year" <?php echo set_select('teaching','7 year'); if(!empty($user_data->experience)&& ($user_data->experience=="7 year")) echo "selected";?>>7 Year</option>
    <option value="8 year" <?php echo set_select('teaching','8 year'); if(!empty($user_data->experience) && ($user_data->experience=="8 year"))echo "selected";?>>8 Year</option>
    <option value="9 year" <?php echo set_select('teaching','9 year'); if(!empty($user_data->experience) && ($user_data->experience=="9 year")) echo "selected";?>>9 Year</option>
    <option value="10 year" <?php echo set_select('teaching','10 year'); if(!empty($user_data->experience) && ($user_data->experience=="10 year")) echo "selected";?>>10 Year</option>
     <option value="11 year" <?php echo set_select('teaching','11 year'); if(!empty($user_data->experience) && ($user_data->experience=="11 year")) echo "selected";?>>11 Year's</option>
    <option value="12 year" <?php echo set_select('teaching','12 year'); if(!empty($user_data->experience) && ($user_data->experience=="12 year")) echo "selected";?>>12 Year's</option>
    <option value="13 year" <?php echo set_select('teaching','13 year'); if(!empty($user_data->experience) && ($user_data->experience=="13 year")) echo "selected";?>>13 Year's</option>
    <option value="14 year" <?php echo set_select('teaching','14 year'); if(!empty($user_data->experience) && ($user_data->experience=="14 year")) echo "selected";?>>14 Year's</option>
    <option value="15 year" <?php echo set_select('teaching','15 year'); if(!empty($user_data->experience) && ($user_data->experience=="15 year")) echo "selected";?>>15 Year's</option>
    <option value="15+ year" <?php echo set_select('teaching','10 year'); if(!empty($user_data->experience) && ($user_data->experience=="15+ year")) echo "selected";?>>15+</option>
  </select>
  <?php echo form_error('teaching'); ?>
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
  <label class="control-label" for="birth">location:</label>
  <input type="text" class="form-control" name="location" id="location" placeholder="Enter location" onclick="geolocate()" value="<?php echo $user_data->location_name;?>" >
  <input type="hidden" id="locality" name="city" value="">
  <input type="hidden" id="postal_code" name="pincode" value="0">
  <input type="hidden" id="lat" name="latitude" value="0">
  <input type="hidden" id="lng" name="longitude" value="0">
  <?php echo form_error('location'); ?>
  </div>
      
      <div class="col-sm-12 text-center">
             <div class="clearfix">&nbsp;</div>
             <div class="clearfix">&nbsp;</div>
           <button type="button" class="btn btn-warning no-bod-rad col-sm-4 col-sm-offset-4 btn-lg" id="next2" data-toggle="tab"> Next</button>
         </div>
         <div class="clearfix">&nbsp;</div>   
    </div>
    <div id="menu2" class="tab-pane fade">
        
      <div class="form-group col-sm-6">
          <div class="clearfix">&nbsp;</div>
      <label class="control-label" for="birth">Date of birth:</label>
          <input type="text" class="form-control" name="birth" value="<?php echo (date('d-m-Y',strtotime($user_data->dob)));?>" id="birth" placeholder="Enter your Date of Birth" autocomplete="off">
     <?php echo form_error('birth'); ?>
     <span id="birth_error" style="color:red"></span>
    </div>
    <div class="form-group col-sm-6">
         <div class="clearfix">&nbsp;</div>
      <label class="control-label" for="mobile">Mobile No:</label>
     <input type="text" class="form-control" name="mobile" id="mobile" value="<?php $mobile=$this->session->userdata('user_mobile');if(!empty($mobile)) echo $mobile;?>"  placeholder="enter mobile no." >
     <?php echo form_error('mobile'); ?>
     <span style="color:red" id="mobile_error"></span>
    </div>
              
    <div class="form-group col-sm-6">
      <label class="control-label" for="email">Email:</label>
   <input type="email" class="form-control email" name="email" id="email" value="<?php $email=$this->session->userdata('user_email'); if(!empty($email)) echo $email;?>" placeholder="abc@gmail.com" >
   <?php echo form_error('email'); ?>
   <span style="color:red" id="email_error"></span>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label">Adhaar Number:</label>
     <input type="text" class="form-control" name="adhaar" id="adhaar" value="<?php echo $user_data->adhaar_no;?>" placeholder="Enter Adhaar number" maxlength="12">
     <?php echo form_error('adhaar'); ?>
     <span style="color:red" id="adhaar_error"></span>
    </div>
 
    <div class="form-group col-sm-6">
        <div class="form-group sky-form">
            <label>Upload your Resume<sup>*</sup></label>
            <input type="file" name="resume" id="resume" class="form-control myresume" accept=".doc,.docx,.pdf">
            <span class="resume_error" style="color:red"></span>
            </div>
              <p class="err">&nbsp;</p>
              <?php echo form_error('resume'); ?>
      
              <?php if(!empty($resume_err)) echo $resume_err;?>
    </div>
    <div class="form-group col-sm-6">
        <div class="form-group sky-form">
            <label>Upload your Adhaar<sup>*</sup></label>
            <input type="file" name="adhaar_proof[]" id="file-input" multiple="multiple" class="form-control adhaar_proof" accept=".jpg,.jpeg,.png">
            <span id="adhaar_proof_error" style="color:red"></span>
            </div>
            <div id="preview"></div>
              <?php echo form_error('adhaar_proof'); ?>

    </div>
                      <div class="clearfix"></div>
                         <div class="form-group col-sm-6">
        <div class="form-group sky-form">
            <label>Upload your Picture<sup>*uploading your picture will give you more opportunities</sup></label>
              <input type="file" name="picture" id="picture" class="form-control" accept=".jpg,.jpeg,.png">
              <span class="pic_error" style="color:red"></span>
        </div>
          <p class="err">&nbsp;</p>
          <?php echo form_error('picture'); ?>
    </div>
    <div class="form-group col-sm-12">
          <div class="form-group sky-form">
            <label>About you(Min 200 Character)<sup>*</sup></label>
              <textarea class="form-control" name="about" id="about" style="resize:none"><?php if(!empty($user_data->about_tutor)) echo set_value('about',$user_data->about_tutor);?></textarea>
          </div>
          <span id="about_error" style="color:red"></span>
          <?php echo form_error('about'); ?>
    </div>
          <div class="col-sm-12 text-center">
             <div class="clearfix">&nbsp;</div>
             <div class="clearfix">&nbsp;</div>
           <button type="submit" class="btn btn-warning no-bod-rad col-sm-4 col-sm-offset-4 btn-lg" name="update"> Submit</button>
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
       <?php $user_id=$this->session->userdata('user_id');?>
    <input type="hidden" id="user_id" value="<?php if(!empty($user_id)) echo $user_id;?>">  
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
    <script type="text/javascript">
     $("#next1").click(function(){
      flag=true;
   var college=$('#college').val().trim();
   var language=$('#language').val();
   var qualification=$('#qualification').val();
    var tutor=$('#tutor').val();
      var clg_pattern=/^[a-zA-Z, ]*$/;
    // alert(tutor);
    if($('input[name=gender]:checked').length<=0)
       {
               flag=false;
           $('#gender').css('border','1px solid red');
       }
       else
       {
           $('#gender').css('border','1px solid green');
       }

      if(college!="" && !clg_pattern.test(college))
      { 
          flag=false;
          $('#college').css('border','1px solid red');
      }
      else if (college=="")
      { 
        flag=false;
         $('#college').css('border','1px solid red');
      }
      else
      {
          $('#college').css('border','1px solid green');
      }
     var cat= $("input[name='category[]']").serializeArray(); 
    if (cat.length>2) 
    { 
      flag=false;
       $('.cat1').css('border','1px solid red');
    } 
    else
    {
      $('.cat1').css('border','1px solid green');
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
      if(flag==false)
      {
        $("#next1").attr("href","");
        
      }
      else
      {
          $("#next1").attr("href","#menu1");
           $(".home").removeClass("active");
          $(".menu1").addClass("active");
      }
 });
       $("#next2").click(function(){
        flag=true;
         var tutor=$('#tutor').val();
        var syllabus=$('#syllabus').val();
        var subject=$('#subject').val();
        var location=$('#location').val().trim();
        var time=$('#time').val();
        var teaching_exp=$('#teaching_exp').val();
        var timepattern =/^[0-9]{1,2}\:[0-9]{1,2}[a,p,m]{2}$/;
        var loc_pattern=/^[a-zA-Z0-9, ]*$/;
         $("[name^=frm_time]").each(function () {
           var frm_time=$(this).val();
        if($(this).val()!="" && !timepattern.test(frm_time))
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
          if($(this).val()!="" && !timepattern.test(to1_time))
          {
              flag=false;
           $("[name^=to1_time]").css('border','1px solid red');
          }
          else
          {
           $("[name^=to1_time]").css('border','1px solid green');
          }
          });
   if(location=="")
      {
          flag=false;
          $('#location').css('border','1px solid red');
    }
    else if (location!="" && !loc_pattern.test(location))
    {
          flag=false;
          $('#location').css('border','1px solid red');
    }
       else
       {
           $('#location').css('border','1px solid green');
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

var subject= $("input[name='subject[]']").serializeArray();
       if(tutor==29 || tutor==30)
       {
        if(subject.length>2)
        {
          flag=false;
           $('.sub1').css('border','1px solid red');
           $('#subject_error').html("maximum two subjects allowed");
        }
        else
        {
           $('.sub1').css('border','1px solid green');
           $('#subject_error').html("");
        }
      }
      if(tutor==33)
      {
        if(subject.length<=4)
        {
           $('#subject').css('border','1px solid green');
           $('#subject_error').html("");
        }
       else
       {
        flag=false;
         $('#subject').css('border','1px solid red');
           $('#subject_error').html("more than 4 subjects not allowed");
       }
      }
       if(flag==false)
      {
        $("#next2").attr("href","");
      }
      else
      {
          $("#next2").attr("href","#menu2");
          $(".menu1").removeClass("active");
          $(".menu2").addClass("active");

      }
});
    </script>
    <script type="text/javascript">
  $("#tutor_update").submit(function(){
     var flag=true;
    var category=$('#category').val();

    var tutor=$('#tutor').val();
    var language=$('#language').val();
    var qualification=$('#qualification').val();
    var college=$('#college').val().trim();
    var working=$('#working').val();
    var teaching_exp=$('#teaching_exp').val();
    var syllabus=$('#syllabus').val();
    var subject=$('#subject').val();
    var location=$('#location').val().trim();
    var time=$('#time').val();
    var birth=$('#birth').val().trim();
    var mobile=$('#mobile').val();
     var mobile_error=$("#mobile_error").text().trim();
     // alert(mobile_error);
    var email=$('#email').val().trim();
    var email_error=$("#email_error").text().trim();
    // alert('error'+email_error);
    var reference=$('#reference').val();
     var picture=$('#picture').val();
     var resume=$('#resume').val();
     var adhaar=$('#adhaar').val();
    var about=$('#about').val().trim();
    var adhaar_proof=$(".adhaar_proof").val();
    adhaar_proof_error=$("#adhaar_proof_error").html();
    var resume_error=$('.resume_error').html();
    var pic_error=$('.pic_error').html();
    var d=new Date();
    var birth_year = birth.substr(6,10);
    var about_pattern=/^[0-9a-zA-z,. ]*$/
    var num_pattern=/^[0-9]*$/;
    //var birth_year=birth.getFullYear();
    //alert(birth_year);
      email_pattern=/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
      var mobile_pattern=/^[6-9]{1}[0-9]{9}$/;
      //college_pattern=/^[a-zA-Z ]*$/;
      var adhaar_pattern=/^[0-9]*$/;
       var timepattern =/^[0-9]{1,2}\:[0-9]{1,2}[a,p,m]{2}$/;
        var clg_pattern=/^[a-zA-Z, ]*$/;
        var loc_pattern=/^[a-zA-Z0-9, ]*$/;
   if(category!=null && category.length>2)
      {
        flag=false;
        $('#category').css('border','1px solid red');
      }
      else
      { 
          $('#category').css('border','1px solid green');
      }
      // if(tutor=='--select--')
      // {
      //     flag=false;
      //     $('#tutor').css('border','1px solid red');
      // }
      // else
      // {
      //     $('#tutor').css('border','1px solid green');
      // }

      if(college!="" && !clg_pattern.test(college))
      {
          flag=false;
          $('#college').css('border','1px solid red');
      }
      else if (college=="")
      { 
        flag=false;
         $('#college').css('border','1px solid red');
      }
      else
      {
          $('#college').css('border','1px solid green');
      }
   if(location=='')
      {
          flag=false;
          $('#location').css('border','1px solid red');
    }
    else if (location!="" && !loc_pattern.test(location))
    {
          flag=false;
          $('#location').css('border','1px solid red');
    }
       else
       {
           $('#location').css('border','1px solid green');
       }

       if(birth=="")
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
       if(resume_error!="")
       {
           flag=false;
           $('#resume').css('border','1px solid red');
       }
       else
       {
           $('#resume').css('border','1px solid green');
       }
        if(pic_error!="")
       {
           flag=false;
           $('#picture').css('border','1px solid red');
       }
       else
       {
           $('#picture').css('border','1px solid green');
       }
      if(adhaar==""||adhaar.length!=12 || !num_pattern.test(adhaar))
       {
           flag=false;
           $('#adhaar').css('border','1px solid red');
       }
       else
       {
           $('#adhaar').css('border','1px solid green');
       }

       if(adhaar_proof_error!="")
       {
           flag=false;
           $('.adhaar_proof').css('border','1px solid red');
       }
       else
       {
           $('.adhaar_proof').css('border','1px solid green');
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
        
        if($(this).val()!="" && !timepattern.test(frm_time))
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
          if($(this).val()!="" && !timepattern.test(to1_time))
          {
              flag=false;
           $("[name^=to1_time]").css('border','1px solid red');
          }
          else
          {
           $("[name^=to1_time]").css('border','1px solid green');
          }
          });
          if(qualification=='')
      {
          flag=false;
          $('#qualification').css('border','1px solid red');
      }
      else
      {
          $('#qualification').css('border','1px solid green');
      }

           if( about!="" && about.length<200)
           {
            flag=false;
            $("#about").css('border','1px solid red');
            $("#about_error").html("minimum 200 character mandatory,please write atleast in 200 character");
           }
           else if(about!="" && !about_pattern.test(about))
           {
              flag=false;
            $("#about").css('border','1px solid red');
            $("#about_error").html("only alpha,number some special character(like ,space and % allowed");
           }
           else if(about=="")
           {
            flag=false;
            $("#about").css('border','1px solid red');
              $("#about_error").html("");
           }
           else
           {
            $("#about").css('border','1px solid green');
            $("#about_error").html("");
           }

return flag;
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
                var imageCount = imageSize.files.length;
                for (var i=0;i<imageCount; i++)
                {
                    var imageSize1 = imageSize.files[i].size;
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