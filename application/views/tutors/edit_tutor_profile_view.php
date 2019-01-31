<!DOCTYPE html>
<!-- <?php //echo $tutorinfo->experience;exit; ?> -->
<html lang="en">
  <head>
  <style>
    .active_step{
      font-weight: 600;
      font-size: 17px;
    }
  </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo TITLE_PATH;?></title>
    <meta name="description" content=" "/>
<meta name="keywords" content="  "/>
<meta name="author" content="  "/>
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
<link rel="canonical" href="<?php echo base_url(); ?>tutor-profile" />
<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"  />

<!--custom css-->
  <link href="<?php echo base_url(); ?>assets/css/custom.css" type="text/css" rel="stylesheet"  />
 <!--menu-->
  <link href="<?php echo base_url(); ?>assets/css/menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/icomoon.css">
  <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" />
   <link href="<?php echo base_url(); ?>assets/css/jquery.timepicker" type="text/css" rel="stylesheet"  />
   <link rel="stylesheet" href="code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
<form id="tutor_profile" method="post" action="<?php echo base_url();?>tutor/profile-add"  enctype="multipart/form-data">
       <div class="bg-back container-fluid"  style="background-image:url('<?php echo base_url();?>assets/images/bg-back.jpg')">
      <div class="container">
 
      <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-12 inner-bg no-padd m-t-10">
              
           <h4 class="title-hd"><strong>Tutor Profile</strong></h4>
             
            <div class="col-sm-12 updateprofile m-t-10">

            <ul class="nav nav-tabs">
                <li class="active_step col-sm-3 text-center no-padd home"><span data-toggle="tab" href="">Step 1</span></li>
                <li class="col-sm-3 text-center no-padd menu1"><span data-toggle="tab" href="">Step 2</span></li>
                <li class="col-sm-3 text-center no-padd menu2"><span data-toggle="tab" href="">Step 3</span></li>
   
  </ul>
  <div class="tab-content">
     
    <div id="home" class="tab-pane fade in active">
         <?php  $msg=$this->session->flashdata('msg');if(!empty($msg))
         { ?>
          <p style="color:green"><?php echo $msg;?></p>
          <?php } ?>
  
          
            <p class="text-danger"><?php if(!empty($err_msg)) echo $err_msg; ?></p>
          
          
          <div class="col-sm-12">
              <div class="form-group col-sm-6">
    <label class="control-label" for="category">Select Categories(Max 2 Categories):</label>
    <div class="col-sm-12 fm-bd cat1">
  <?php 
    foreach($cat as $row)
    {
      ?>
         <div class="col-sm-6">
    <label class="customcheck"><?php echo ucwords($row->category_name);?>
          <input type="checkbox" name="category[]" id="category"  value="<?php echo $row->category_id;?>"<?php echo set_checkbox('category',$row->category_id);?>>
          <span class="checkmark"></span>
        </label> 
    </div> 
     <?php
    }
       ?>
  </div>
    <?php echo form_error('category[]'); ?>
  </div>
    
   <div class="form-group col-sm-6">
      <label class="control-label" for="language">Language Know:</label><br/>
      <div class="col-sm-12 fm-bd lang1">
 <?php
    foreach($language as $row)
    {
      ?>
          <div class="col-sm-6">
    <label class="customcheck"><?php echo ucfirst($row->language);?>
          <input type="checkbox"  name="language[]" id="language" value="<?php echo $row->lid;?>" <?php echo set_checkbox('language',$row->lid);?>>
          <span class="checkmark"></span>
        </label> 
    </div>
  <?php } ?>
</div>
   <?php echo form_error('language[]'); ?>
   </div>
    
   <div class="form-group col-sm-6 gender m-t-18">
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
   <select class="form-control no-bod-rad" name="qualification" id="qualification">
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
    <div class="form-group col-sm-6" style="display:none">
      <label class="control-label" for="City">City:</label>
   <select class="form-control no-bod-rad" name="city" id="city">
    <option value="">--select--</option>
  
      <option value="hyderabad">Hyderabad</option>
      <option value="bengluru">Bengluru</option>
  </select>
   </div>
    <div class="form-group col-sm-6 class">
       </div>
   <div class="form-group col-sm-6">
      <label class="control-label" for="college">College/University Name:</label>
     <input type="text" class="form-control no-bod-rad" name="college" id="college" value="<?php  echo set_value('college');?>" placeholder="College/University Name">
     <?php echo form_error('college'); ?>
    </div>
   
   
 
      <!-- <legend class="the-legend">Tutor Details :</legend> -->
  
    <div class="col-sm-12 text-center">
             <div class="clearfix">&nbsp;</div>
           
           <button type="button" class="btn btn-warning no-bod-rad col-sm-4 col-sm-offset-4 btn-lg" id="next1" data-toggle="tab"> Next</button>
          <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>
         </div>
        </div>
    </div>
     <div id="menu1" class="tab-pane fade">
            <div class="form-group col-sm-12">
          
   <div class="form-group col-sm-6">
      <label class="control-label" for="syllabus">Select Syllabus:</label><br/>
      <div class="col-sm-12 fm-bd syl1">

            <?php 
    foreach($syllabus as $row)
    {
      ?>
          <div class="col-sm-6">
  <label class="customcheck"><?php echo strtoupper($row->syllabus_name);?>
          <input type="checkbox" name="syllabus[]" id="syllabus" value="<?php if(!empty($row->syllabus_id))echo $row->syllabus_id;?>"<?php echo set_checkbox('syllabus',$row->syllabus_id);?>>
          <span class="checkmark"></span>
        </label> 
    </div>
    <?php } ?> 
    </div>  
    <?php echo form_error('syllabus[]'); ?>
   </div>
   <div class="form-group col-sm-6">
      <label class="control-label" for="subject">Select Subject:</label><br/>
    <div class="col-sm-12 fm-bd sub1">
</div>
   <?php echo form_error('subject[]'); ?>
  <span id="subject_error" style="color:red"></span>
</div>
  
   <div class="form-group col-sm-6">
      <label class="control-label" for="teaching">Teaching Experience:</label>
   <select class="form-control no-bod-rad" name="teaching" id="teaching_exp" tabindex="4">
    <option disabled="disabled">--select--</option>
  
    <option value="1" <?php echo set_select('teaching','1 year');if(!empty($tutorinfo->experience)&& ($tutorinfo->experience=="1 year"))echo "selected"; ?> >0-1 Year</option>
    <option value="2" <?php echo set_select('teaching','2 year');if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="2 year")) echo "selected";?>>2 Years</option>
    <option value="3" <?php echo set_select('teaching','3 year');if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="3 year")) echo "selected";?>>3 Years</option>
    <option value="4" <?php echo set_select('teaching','4 year');if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="4 year"))echo "selected";?>>4 Years</option>
    <option value="5" <?php echo set_select('teaching','5 year');if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="5 year")) echo "selected";?>>5 Years</option>
    <option value="6" <?php echo set_select('teaching','6 year');if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="6 year")) echo "selected";?>>6 Years</option>
    <option value="7" <?php echo set_select('teaching','7 year'); if(!empty($tutorinfo->experience)&& ($tutorinfo->experience=="7 year")) echo "selected";?>>7 Years</option>
    <option value="8" <?php echo set_select('teaching','8 year'); if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="8 year"))echo "selected";?>>8 Years</option>
    <option value="9" <?php echo set_select('teaching','9 year'); if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="9 year")) echo "selected";?>>9 Years</option>
    <option value="10" <?php echo set_select('teaching','10 year'); if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="10 year")) echo "selected";?>>10 Years</option>
    <option value="11" <?php echo set_select('teaching','11 year'); if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="11 year")) echo "selected";?>>11 Years</option>
    <option value="12" <?php echo set_select('teaching','12 year'); if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="12 year")) echo "selected";?>>12 Years</option>
    <option value="13" <?php echo set_select('teaching','13 year'); if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="13 year")) echo "selected";?>>13 Years</option>
    <option value="14" <?php echo set_select('teaching','14 year'); if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="14 year")) echo "selected";?>>14 Years</option>
    <option value="15" <?php echo set_select('teaching','15 year'); if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="15 year")) echo "selected";?>>15 Years</option>
    <option value="15+" <?php echo set_select('teaching','10 year'); if(!empty($tutorinfo->experience) && ($tutorinfo->experience=="15+ year")) echo "selected";?>>15+</option>
  </select>
  <?php echo form_error('teaching'); ?>
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
        From:<select name="frm_time[]" class="form-control time_picker no-bod-rad frm_time" placeholder="From"> <option value="">From</option></select>
</div>
    <div class="form-group col-sm-5">
      To:<select name="to1_time[]" class="form-control time_picker no-bod-rad to_time" placeholder="To"><option value="">To</option></select>
    </div>
    <div class="form-group col-sm-2">
      <span><p class="fcbtn btn btn-info btn-outline btn-1e  no-bod-rad" id="add_field_button" style="margin-top: 19px"><i class="fa fa-plus"></i></p></span>
    </div>
    </div>
  </div>
   </div>
<div class="form-group col-sm-6">
  <label class="control-label" for="birth">Location:</label>
  <div id="area_fields">
    <div class="form-group col-sm-10">
  <input type="text" class="form-control no-bod-rad" name="location[]" id="location" placeholder="Enter location" onclick="a(this.id);">

  <input type="hidden" id="lat" name="latitude[]" value="0">
  <input type="hidden" id="lng" name="longitude[]" value="0">
</div>
   <div class="form-group col-sm-2">
      <span><p class="fcbtn btn btn-info btn-outline btn-1e  no-bod-rad" id="add"><i class="fa fa-plus"></i></p></span>
    </div>
  </div>
  <?php echo form_error('location[]');?>
</div>
 <div class="form-group col-sm-6">
      <label class="control-label" for="tutor">Select Tutor Type:</label>
  <select class="form-control no-bod-rad" name="tutor_type" id="tutor" value="" tabindex="4">
    <option value="">--select--</option>
  </select> 
  <?php echo form_error('tutor_type[]'); ?>
   </div>
   <div class="form-group col-sm-6" id="working_text">
      <label class="control-label" for="working">Working school/college:</label>
   <select class="form-control no-bod-rad" name="working" id="working" tabindex="2">
    <option value=''>--select--</option>
  
    <option value="yes">Yes</option>
    <option value="no">No</option>
  </select>
  <?php echo form_error('working'); ?>
   </div>

            <div class="col-sm-12 text-center">
            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
            <button type="button" class="btn btn-warning no-bod-rad col-sm-offset-2 col-sm-4 btn-lg" id="back2" data-toggle="tab" style="margin-right:20px">Back</button>
            <button type="button" class="btn btn-warning no-bod-rad col-sm-4 btn-lg" id="next2" data-toggle="tab"> Next</button>
            </div>
            <div class="clearfix">&nbsp;</div>    <div class="clearfix">&nbsp;</div>   
            </div>
  </div>
<div id="menu2" class="tab-pane fade">
   <div class="form-group col-sm-6">
      <label class="control-label" for="birth">Date Of Birth:</label>
      <?php /*if(!empty($date=$tutorinfo->dob))
      {
       $dob=date("d/m/Y",strtotime($date));
     }
  */?>
     <input type="text" class="form-control no-bod-rad" name="birth" value="<?php echo set_value('birth');?>" id="birth" placeholder="Enter your Date of Birth" autocomplete="off">
     <?php echo form_error('birth'); ?>
     <span id="birth_error" style="color:red"></span>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label" for="mobile">Mobile No:</label>
     <input type="text" class="form-control mobile no-bod-rad" name="mobile" id="mobile" value="<?php $mobile=$this->session->userdata('user_mobile'); if(!empty($mobile)) echo $mobile;?>"  placeholder="enter mobile no." maxlength="10" >
     <?php echo form_error('mobile'); ?>
     <span id="mobile_error" style="color:red"></span>
    </div>
              
    <div class="form-group col-sm-6">
      <label class="control-label" for="email">Email:</label>
   <input type="text" class="form-control email no-bod-rad" name="email" id="email"value="<?php $email=$this->session->userdata('user_email'); if(!empty($email)) echo $email;?>" placeholder="enter email id">
   <?php echo form_error('email'); ?>
   <span id="email_error" style="color:red"></span>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label" for="come">How you came to know about this website:</label>
     <input type="text" class="form-control no-bod-rad" name="come" id="come" value="<?php if(!empty($tutorinfo->known_by))echo set_value('come',$tutorinfo->known_by);?>" placeholder="Ex. Friends, News paper, Social network etc,,">
     <?php echo form_error('come'); ?>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label">Adhaar Number:</label>
     <input type="text" class="form-control no-bod-rad" name="adhaar" id="adhaar" value="<?php echo set_value('adhaar');?>" placeholder="Enter Adhaar number" maxlength="12">
     <?php echo form_error('adhaar'); ?>
     <span style="color:red" id="adhaar_error"></span>
    </div>
    
    <div class="form-group col-sm-6">
        <div class="form-group sky-form">
            <label>Upload your Picture<sup>*uploading your picture will give you more opportunities(only jpeg,jpg,png allowed)</sup></label>
              <input type="file" name="picture" id="picture" class="form-control no-bod-rad" data-toggle="tooltip" title="only jpeg,jpg,png allowed" accept=".jpg,.jpeg,.png">
               <span class="pic_error" style="color:red"></span>
               <div id="pic_preview"></div>
               <span style="color:red"><?php if(!empty($pic_error)) echo $pic_error;?></span>
        </div>
          <p class="err">&nbsp;</p>
          <?php echo form_error('picture'); ?>
    </div>
    <div class="form-group col-sm-6">
        <div class="form-group sky-form">
            <label>Upload your Resume<sup>*(only doc,docx,pdf allowed)</sup></label>
            <input type="file" name="resume" id="resume" class="form-control no-bod-rad" data-toggle="tooltip" title="doc,docx,pdf allowed" accept=".doc,.pdf,.docx">
             <span class="resume_error" style="color:red"></span>
            </div>
              <p class="err">&nbsp;</p>
              <?php echo form_error('resume'); ?>
    </div>
    <div class="form-group col-sm-6">
        <div class="form-group sky-form">
            <label>Upload your Adhaar<sup>(only jpg,jpeg,png allowed)</sup></label>
            <input type="file" name="adhaar_proof[]" id="file-input" multiple="multiple" class="form-control no-bod-rad adhaar_proof" accept=".jpg,.jpeg,.png">
             <span id="adhaar_proof_error" style="color:red"></span>
            </div>
            <p>Press ctrl to select multiple image</p>
            <div id="preview"></div>
              <?php echo form_error('adhaar_proof'); ?>
    </div>
    
    <div class="form-group col-sm-12">
          <div class="form-group sky-form">
            <label>About you(Min 200 Character)<sup>*</sup></label>
              <textarea class="form-control no-bod-rad" name="about" id="about" style="resize:none"><?php echo set_value('about');?></textarea>
          </div>
          <span id="about_error" style="color:red"></span>
          <?php echo form_error('about'); ?>
    </div>
    

     <div class="form-group">      
       <div class="clearfix">&nbsp;</div> 
      <div class="col-sm-12">
          <button type="button" class="btn btn-warning no-bod-rad col-sm-offset-2 col-sm-4 btn-lg" id="back3" data-toggle="tab" style="margin-right:20px;">Back</button>
        <button type="submit" name="submit" class="btn btn-warning col-sm-4 btn-lg no-bod-rad" id="submit">Submit</button>
      </div>
      </div>
           <div class="clearfix">&nbsp;</div>
    </div>
   </div>
 </div>
 
          </div>
        
          </div>
      </div>
            <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
    </div>
   
 </form>
      </section>
         <div class="modal fade" id="welcome_msg" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content no-bod-rad">
        <div class="modal-body text-center">
          <div class="col-sm-10 col-sm-offset-1">
             <img src="<?php echo base_url();?>assets/images/tutor.png" alt="logo" />
             <div class="clearfix">&nbsp;</div>
              <p><i><b>Thanks for Joining With Us Please complete Your Profile And Then Access Number Of Tuitions</b></i></p>
                  
             <div class="clearfix">&nbsp;</div>
             <div class="clearfix">&nbsp;</div>
              
            </div>
        </div>
       <div class="clearfix">&nbsp;</div>
          <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-primary" style="width:100px">OK</button>
      </div>
             <div class="clearfix">&nbsp;</div>
<!--          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
        </div>
      </div>
      
    </div>
  </div>
  <!--section dashboard end-->
<?php $this->load->view('includes/modal.php'); ?>
 <div class="clearfix"></div>

 <?php $this->load->view('includes/footer.php'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script type="<?php echo base_url(); ?>/assets/text/javascript" src="js/menu.js"></script>
    
<script src="https:code.jquery.com/jquery-1.12.4.js"></script>
<script src="https:code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>

 <script type="text/javascript">
     $("#next1").click(function(){
      flag=true;
      var qualification=$('#qualification').val();
      var clg_pattern=/^[a-zA-Z, ]*$/;
   var college=$('#college').val().trim();
   // var cat=[];
   //  $.each($("input[name='category[]']:checked"),function(){           
   //       cat.push($(this).val());
   //         });
    var cat= $("input[name='category[]']").serializeArray(); 
    if (cat.length>2) 
    { 
      flag=false;
       $('.cat1').css('border','1px solid red');
    } 
    else if(cat.length==0) 
    { 
      flag=false;
      $('.cat1').css('border','1px solid red');
    }
    else
    {
      $('.cat1').css('border','');
    }

    if($('input[name=gender]:checked').length==1)
       {
               flag=false;
           $('#gender').css('border','1px solid red');
       }
       else
       {
           $('#gender').css('border','');
       }
    var lang= $("input[name='language[]']").serializeArray(); 
      if(lang.length==0)
      {
          flag=false;
          $('.lang1').css('border','1px solid red');
      }
      else
      {
          $('.lang1').css('border','');
      }
      if(qualification=='')
      {
          flag=false;
          $('#qualification').css('border','1px solid red');
      }
      else
      {
          $('#qualification').css('border','');
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
          $('#college').css('border','');
      }
       var listarray = new Array();
  $('input[name="category[]"]:checked').each(function () {
            listarray.push($(this).val());
        });
        var checklist = "" + listarray;
        if(checklist!="")
        {
          if($.inArray("42",listarray)!=-1)
          {
           var exam= $("input[name='class[]']").serializeArray(); 
           if(exam.length==0)
           {
            flag=false;
            $('.class_valid').css('border','1px solid red');
            } 
            else
            {
               $('.class_valid').css('border','');
            }
           }
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
           $(".home").removeClass("active_step");
          $(".menu1").addClass("active_step");
      }
 });
       $("#next2").click(function(){
        flag=true;
         var tutor=$('#tutor').val();
  var syllabus = $("input[name='syllabus[]']").serializeArray(); 
 var subject = $("input[name='subject[]']").serializeArray();
        var teaching_exp=$('#teaching_exp').val();
        var timepattern =/^[0-9]{1,2}\:[0-9]{1,2}[a,p,m]{2}$/;
        var loc_pattern=/^[a-zA-Z, ]*$/;
  $(".frm_time").each(function(){
     $(this).css('border','');
     $(this).parent().parent().find('.to_time').css('border','');
    var startTime = $(this).val();
    if(startTime == '')
    {
      flag = false;
      $(this).css('border','1px solid red');
    }
    var endTime = $(this).parent().parent().find('.to_time').val();
   if(endTime == '')
    {
      $(this).parent().parent().find('.to_time').css('border','1px solid red');
    }
    if (startTime!='' && endTime!='' && (parseInt(startTime) == parseInt(endTime)) || (parseInt(startTime) > parseInt(endTime))) {
               $(this).parent().parent().find('.to_time').css('border','1px solid red');
               flag=false;
              }
  });
      if(tutor=="")
      {
          flag=false;
          $('#tutor').css('border','1px solid red');
      }
      else
      {
        $('#tutor').css('border','');
      }

       if(syllabus.length==0)
      {
          flag=false;
          $('.syl1').css('border','1px solid red');
      }
      else
      {
          $('.syl1').css('border','');
      } 
      if(subject.length==0)
      {
        flag=false;
        $(".sub1").css("border","1px solid red");
      }
      else
      {
        $(".sub1").css("border","");
      }
      $("[name^=location]").each(function () {
           var location=$(this).val().trim();
          if(location=="")
          {
            flag=false;
           $("[name^=location]").css('border','1px solid red');
          }
          else if(location!="" && !loc_pattern.test(location))
          {
              flag=false;
           $("[name^=location]").css('border','1px solid red');
          }
          else
          {
              $("[name^=location]").css('border','');
          }
    
          });  

       if(tutor=="")
      {
          flag=false;
          $('#tutor').css('border','1px solid red');
      }
      else
      {
        $('#tutor').css('border','');
      }
       if(tutor==1)
       {
        if(subject.length>4)
        {
          flag=false;
           $('.sub1').css('border','1px solid red');
           $('#subject_error').html("maximum four subjects allowed");
        }
        else if(subject.length!==0 && subject.length<=4)
        {
           $('#sub').css('border','');
           $('#subject_error').html("");
        }
      }
       if(tutor=="")
      {
          flag=false;
          $('#tutor').css('border','1px solid red');
      }
      else
      {
        $('#tutor').css('border','');
      }
       if(tutor==2)
       {
        if(subject.length>2)
        {
          flag=false;
           $('.sub1').css('border','1px solid red');
           $('#subject_error').html("maximum two subjects allowed");
        }
        else if(subject.length!==0 && subject.length<=2)
        {
           $('#sub').css('border','');
           $('#subject_error').html("");
        }
      }
        if(tutor==3)
      {
        if(subject.length!=0 && subject.length<=4)
        {
           $('.sub1').css('border','');
           $('#subject_error').html("");
        }
       else
       {
        flag=false;
         $('.sub1').css('border','1px solid red');
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
          $(".menu1").removeClass("active_step");
          $(".menu2").addClass("active_step");

      }
       //from to time validation
});
    </script>
      <script type="text/javascript">
     $("#back2").click(function(){
     $("#back2").attr("href","#home");
     $(".menu1").removeClass("active_step");
     $(".home").addClass("active_step");
     }); 
      $("#back3").click(function(){
     $("#back3").attr("href","#menu1");
     $(".menu2").removeClass("active_step");
     $(".menu1").addClass("active_step");
     }); 
    </script>
       
<script type="text/javascript">
  $("#tutor_profile").submit(function(){
    var flag=true;
   var cat= $("input[name='category[]']").serializeArray();
   var syllabus = $("input[name='syllabus[]']").serializeArray(); 
   var subject = $("input[name='subject[]']").serializeArray(); 
   var language =$("input[name='language[]']").serializeArray();    
    var tutor=$('#tutor').val();
    var qualification=$('#qualification').val();
    var college=$('#college').val().trim();
    var working=$('#working').val();
    var teaching_exp=$('#teaching_exp').val();
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
     var adhaar_proof_error=$("#adhaar_proof_error").html();
    var mobile_error=$("#mobile_error").html();
    var email_error=$("#email_error").html();
    var timepattern =/^[0-9]{1,2}\:[0-9]{1,2}$/;
    var d=new Date();
    var birth_year = birth.substr(6,10);
      var email_pattern=/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
      var mobile_pattern=/^[6-9]{1}[0-9]{9}$/;
      var adhaar_pattern=/^[0-9]*$/;
      var clg_pattern=/^[a-zA-Z, ]*$/;
       var loc_pattern=/^[a-zA-Z, ]*$/;
      var dob_pattern=/^([0-9]{2})\-([0-9]{2})\-([0-9]{4})$/;
      var about_pattern=/^[a-zA-Z0-9 ]*$/;
      // var fsize = $('#picture')[0].files[0].size;
      // alert(fsize);
    if(cat.length==0)
      {
          flag=false;
          $('.cat1').css('border','1px solid red');
      }
      else if(cat.length>2)
      {
        flag=false;
        $('.cat1').css('border','1px solid red');
      }
      else
      { 
          $('.cat1').css('border','');
      }
      if(language.length==0)
      {
          flag=false;
          $('.lang1').css('border','1px solid red');
      }
      else
      {
          $('.lang1').css('border','');
      }
      if(qualification=='')
      {
          flag=false;
          $('#qualification').css('border','1px solid red');
      }
      else
      {
          $('#qualification').css('border','');
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
          $('#college').css('border','');
      }
        $("[name^=location]").each(function () {
           var location=$(this).val().trim();
          if(location=="")
          {
            flag=false;
           $("[name^=location]").css('border','1px solid red');
          }
          else if(location!="" && !loc_pattern.test(location))
          {
              flag=false;
           $("[name^=location]").css('border','1px solid red');
          }
          else
          {
              $("[name^=location]").css('border','');
          }
    
          });  
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
          $('#teaching_exp').css('border','');
      }
       if(subject.length==0)
      {
        $(".sub1").css("border","1px solid red");
      }
      else
      {
        $(".sub1").css("border","");
      }
      if(syllabus.length==0)
      {
          flag=false;
          $('.syl1').css('border','1px solid red');
      }
      else
      {
          $('.syl1').css('border','');
      }

        if (birth!="" && birth_year >(d.getFullYear()-20))
       {
           flag=false;
           $('#birth').css('border','1px solid red');
           $('#birth_error').html("minimum 20 years old tutor allowed");
       }
       else if(birth=="")
       {
         $('#birth').css('border','1px solid red');
       }
        else if(birth!="" && !dob_pattern.test(birth))
       {
         $('#birth').css('border','1px solid red');
       }
       else
       {
         $('#birth').css('border','');
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
           $('#mobile').css('border','');
       }
       if(come!="" && !clg_pattern.test(come))
       {
          $("#come").css('border','1px solid red');
       }
       else
       {
         $("#come").css('border','');
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
           $('#email').css('border','');
       }
      
     if(resume=="" || resume_error!="")
       {
           flag=false;
           $('#resume').css('border','1px solid red');
       }
       else
       {
           $('#resume').css('border','');
       }
        if(picture=="" || pic_error!="")
       {
           flag=false;
           $('#picture').css('border','1px solid red');
       }
       else
       {
           $('#picture').css('border','');
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
           $('#adhaar').css('border','');
       }
       if(adhaar_proof==""|| adhaar_proof_error!="")
       {
           flag=false;
           $('.adhaar_proof').css('border','1px solid red');
       }
       else
       {
           $('.adhaar_proof').css('border','');
       }

       if(tutor=="")
      {
          flag=false;
          $('#tutor').css('border','1px solid red');
      }
      else
      {
        $('#tutor').css('border','');
      }
      // alert(tutor);
      //  alert(subject.length);

 
       if(tutor==1)
       {
        if(subject.length>4)
        {
          flag=false;
           $('.sub1').css('border','1px solid red');
           $('#subject_error').html("maximum four subjects allowed");
        }
        else if(subject.length!==0 && subject.length<=4)
        {
           $('#sub').css('border','');
           $('#subject_error').html("");
        }
      }
       if(tutor=="")
      {
          flag=false;
          $('#tutor').css('border','1px solid red');
      }
      else
      {
        $('#tutor').css('border','');
      }
       if(tutor==2)
       {
        if(subject.length>2)
        {
          flag=false;
           $('.sub1').css('border','1px solid red');
           $('#subject_error').html("maximum two subjects allowed");
        }
        else if(subject.length!==0 && subject.length<=2)
        {
           $('#sub').css('border','');
           $('#subject_error').html("");
        }
      }
        if(tutor==3)
      {
        if(subject.length!=0 && subject.length<=5)
        {
           $('.sub1').css('border','');
           $('#subject_error').html("");
        }
       else
       {
        flag=false;
         $('.sub1').css('border','1px solid red');
           $('#subject_error').html("more than 5 subjects not allowed");
       }
      }

       if($('input[name=gender]:checked').length==1)
       {
               flag=false;
           $('#gender').css('border','1px solid red');
       }
       else
       {
           $('#gender').css('border','');
       }
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
            $("#about").css('border','');
            $("#about_error").html('');
           }
   return flag;
});
</script>
<script type="text/javascript">
   $('input[name="category[]"]').on('click',function(){
  //         });
var cat= $("input[name='category[]']").serializeArray(); 
    if (cat.length>2) 
    { 
      flag=false;
       $('.cat1').css('border','1px solid red');
    } 
    else if(cat.length==0) 
    { 
      $('.cat1').css('border','');
    }
    else
    {
      $('.cat1').css('border','');
    }
      });
   $("document").ready(function(){
       var tutor=$("#tutor").val();
       if(tutor!=1 || tutor!=2)
        $("#working_text").hide();
   });
     $("#tutor").change(function(){
    var tutor=$("#tutor").val();
    if(tutor==1 || tutor==2)
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
           $('#subject').css('border','');
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
      setDate : '01/01/1970',
      //maxDate:new Date(1998,01,01),
      defaultDate: null,
    dateFormat:"dd-mm-yy"
  });
  $('#to').datepicker({dateFormat:"dd-mm-yy"});

</script>
<script type="text/javascript">
$(document).ready(function() {
  var time="<option value='1'>12:00am</option><option value='2'>12:30am</option><option value='3'>1:00am</option><option value='4'>1:30am</option><option value='5'>2:00am</option><option value='6'>2:30am</option><option value='7'>3:00am</option><option value='8'>3:30am</option><option value='9'>4:00am</option><option value='10'>4:30am</option><option value='11'>5:00am</option><option value='12'>5:30am</option><option value='13'>6:00am</option><option value='14'>6:30am</option><option value='15'>7:00am</option><option value='16'>7:30am</option><option value='17'>8:00am</option><option value='18'>8:30am</option><option value='19'>9:00am</option><option value='20'>9:30am</option><option value='21'>10:00am</option><option value='22'>10:30am</option><option value='23'>11:00am</option><option value='24'>11:30am</option><option value='25'>12:00pm</option><option value='26'>12:30pm</option><option value='27'>1:00pm</option><option value='28'>1:30pm</option><option value='29'>2:00pm</option><option value='30'>2:30pm</option><option value='31'>3:00pm</option><option value='32'>3:30pm</option><option value='33'>4:00pm</option><option value='34'>4:30pm</option><option value='35'>5:00pm</option><option value='36'>5:30pm</option><option value='37'>6:00pm</option><option value='38'>6:30pm</option><option value='39'>7:00pm</option><option value='40'>7:30pm</option><option value='41'>8:00pm</option><option value='42'>8:30pm</option><option value='43'>9:00pm</option><option value='44'>9:30pm</option><option value='45'>10:00pm</option><option value='46'>10:30pm</option><option value='47'>11:00pm</option><option value='48'>11:30pm</option>";   
  // $(".from_time").each(function(){
  //   $(this).append(time);
  // });
     $(".frm_time").append(time);
     $(".to_time").append(time);
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $("#app"); //Fields wrapper
    var add_button      = $("#add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){
            x++; //text box increment

            $(wrapper).append('<div id="my_append"><div class="form-group col-sm-12">      <div class="form-group col-sm-5">From:<select name="frm_time[]" class="form-control time_picker no-bod-rad frm_time" placeholder="From"> <option value="">From</option>'+time+'</select></div><div class="form-group col-sm-5">To:<select name="to1_time[]" class="form-control time_picker no-bod-rad to_time" placeholder="To"><option value="">To</option>'+time+'</select></div><span class="form-group col-sm-2"><p class="btn btn-danger btn_remove"  id="remove_field" style="margin-top:19px">x</p></span></div></div>');
        }
    });
    
    $(document).on("click","#remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent().parent().remove(); x--;
        
    })
});

</script>
<script type="text/javascript">

 $(document).ready(function () {
        var max_fields = 10;
        var wrapper1 = $("#area_fields");
        var add_button1 = $("#add");
    
  
     var x = 2; //initlal text box count
        $(add_button1).click(function(e) { //on add input button click
            e.preventDefault();
            var location_input=$('<div id="my_app"><div class="clearfix"><div class="form-group col-sm-10"><input type="text" class="form-control" name="location[]" id="location'+x+'" placeholder="Enter location" onclick="a(this.id);"><input type="hidden" id="lat'+x+'" name="latitude[]" value="0"><input type="hidden" id="lng'+x+'" name="longitude[]" value="0"></div><div class="form-group col-sm-2"><span><p class="btn btn-danger" id="remove_field1">x</button></p></span></div></div></div><br/>');
             //$(".nav-tabs").tabs("refresh");

   if (x < max_fields) { //max input box allowed
                x++; //text box increment
               $(wrapper1).append(location_input);
                  //add input box
                          }
        });

        $(wrapper1).on("click", "#remove_field1", function (e) { //user click on remove text
            e.preventDefault();
          $(this).parent().parent().parent().remove(); x--;
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
function previewPicture() {

  var $preview2 = $('#pic_preview').empty();
  if (this.files) $.each(this.files, readAndPreview);

  function readAndPreview(i, file) {
    
    var reader = new FileReader();

    $(reader).on("load", function() {
      $preview2.append($("<img/>", {src:this.result, height:100}));
    });

    reader.readAsDataURL(file);
    
  }

}

$('#picture').on("change", previewPicture);

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
   $('input.time_picker1').timepicker({'timeFormat':'H:i'});
  }
  </script>
<!-- <script type="text/javascript">
     $('input.time_picker').timepicker({'timeFormat':'H:i'});
</script> -->
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
                          $("#adhaar_proof_error").html("max size 1mb allowed only")
                        $(':submit').prop("disabled",true);
                        break; 
                        } 
                        else if(imageCount>2)
                        {
                           $("#adhaar_proof_error").html("two images allowed only")
                        $(':submit').prop("disabled",true); 
                        break;  
                        }
                        else
                        {
                          $("#adhaar_proof_error").html("")
                          $(':submit').prop("disabled",false); 
                        }
                      }

            
 }); 
</script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUlB6Eh-d9yy-kbAVPFbC9WcIYQCtJXJE&libraries=places&callback=initAutocomplete"
        async defer></script>

<script type="text/javascript">
  
  function a(id){
    // var last=lastIndexOf(id);
   var last=id.substring(id.lastIndexOf('n') + 1);
   // alert(last);
   if(last=="")
   {
   var lat_id="lat";
   var lng_id="lng";
   }
   else
   {
    var lat_id="lat"+last;
     var lng_id="lng"+last;
   }
   // alert(lat_id);

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
                /** @type {!HTMLInputElement} */(document.getElementById(id)),
                {types: ['geocode'],
                    componentRestrictions: {country: "in"}
                });
            autocomplete.addListener('place_changed', fillInAddress);
            }
             initAutocomplete();
         function fillInAddress() {
          // alert(lat_id);
          var place = autocomplete.getPlace();
         var latitude = place.geometry.location.lat();
         var longitude = place.geometry.location.lng();
          document.getElementById(lat_id).value = 0;
          document.getElementById(lng_id).value = 0;
          document.getElementById(lat_id).value = latitude;
         document.getElementById(lng_id).value = longitude;
        }
        fillInAddress();
      }
 
    </script>
     <script type="text/javascript">
    $("#next1").on('click',function(){
  var listarray = new Array();
  $('input[name="category[]"]:checked').each(function () {
            listarray.push($(this).val());
        });
        var checklist = "" + listarray;
        if(checklist!="")
        {
          if($.inArray("42",listarray)!=-1)
          {
     var listClass = new Array();
  $('input[name="class[]"]:checked').each(function () {
            listClass.push($(this).val());
        });
        var checklist_class = "" + listClass;
        
  $.ajax({
    method:'POST',
    data:{'id':checklist_class},
    dataType:'JSON',
     url:'<?php echo base_url();?>tutor/get_class_subject',
    'success':function(data){
      console.log(data);
      $(".sub1").html(data);
    },
    error:function(err){
      console.log(err);
    }
  });
}
}
});
</script>
     <script type="text/javascript">
$("#next1").on('click',function(){
  var listarray = new Array();
  $('input[name="category[]"]:checked').each(function () {
            listarray.push($(this).val());
        });
        var checklist = "" + listarray;
  $.ajax({
    method:'POST',
    data:{'cat_id':checklist},
    dataType:'JSON',
     url:'<?php echo base_url();?>tutor/getTutortype',
    'success':function(data){
      console.log(data);
      $("#tutor").html(data);
    },
    error:function(err){
      console.log(err);
    }
  });
});
</script>
 <script type="text/javascript">
$("#next1").on('click',function(){
  var listarray = new Array();
  $('input[name="category[]"]:checked').each(function () {
            listarray.push($(this).val());
        });
        var checklist = "" + listarray;
         if(checklist!="")
        {
          if($.inArray("42",listarray)==-1)
          {
  $.ajax({
    method:'POST',
    data:{'cat_id':checklist},
    dataType:'JSON',
     url:'<?php echo base_url();?>tutor/getSubjects',
    'success':function(data){
      console.log(data);
      $(".sub1").html(data);
    },
    error:function(err){
      console.log(err);
    }
  });
}
}
});
</script>
<!-- <script type="text/javascript">
 $('input[name="category[]"]').on('click',function(){
 $('input[name="category[]"]:checked').each(function () {
  var cat=$(this).val();
  if(cat==42)
  {

      $.ajax({
        url:'<?php echo base_url(); ?>tutor/get_class',
        method:'POST',
        dataType:'JSON',
        data:{'id':42},
        success:function(s){
             $(".class").show().html(s);
        },
        error:function(er){
          console.log(er);
        }
      });
    }
    else
    {
      $(".class").hide();
    }
    });
});

</script> -->
<script type="text/javascript">
 $('input[name="category[]"]').on('click',function(){
   var listarray = new Array();
 $('input[name="category[]"]:checked').each(function () {
  listarray.push($(this).val());
        });
        var checklist = "" + listarray;
        if(checklist!="")
        {
          if($.inArray("42",listarray)!=-1)
        {
      $.ajax({
        url:'<?php echo base_url(); ?>tutor/get_class',
        method:'POST',
        dataType:'JSON',
        cache: false,
        data:{'id':42},
        success:function(s){
          console.log(s);
          $(".class").show();
             $(".class").html(s);
        },
        error:function(er){
          console.log(er);
        }
      });
      }
       else
    {
      $(".class").html();
      $(".class").hide();
    }
    }
    else
    {
      $(".class").html();
      $(".class").hide();
    }
   
    });

</script>
    <script type="text/javascript">
$(".menu1").on('click',function(){
  var listarray = new Array();
  $('input[name="category[]"]:checked').each(function () {
            listarray.push($(this).val());
        });
        var checklist = "" + listarray;
  $.ajax({
    method:'POST',
    data:{'cat_id':checklist},
    dataType:'JSON',
     url:'<?php echo base_url();?>tutor/getTutortype',
    'success':function(data){
      console.log(data);
      $("#tutor").html(data);
    },
    error:function(err){
      console.log(err);
    }
  });
});
</script>
 <script type="text/javascript">
$(".menu1").on('click',function(){
  var listarray = new Array();
  $('input[name="category[]"]:checked').each(function () {
            listarray.push($(this).val());
        });
        var checklist = "" + listarray;
  $.ajax({
    method:'POST',
    data:{'cat_id':checklist},
    dataType:'JSON',
     url:'<?php echo base_url();?>tutor/getSubjects',
    'success':function(data){
      console.log(data);
      $(".sub1").html(data);
    },
    error:function(err){
      console.log(err);
    }
  });
});
</script>      
    
</body>
</html>
<script type="text/javascript">
  //alert('hi');
  $('#btn').click(function(e){
    e.preventDefault();
    $('#add').append('<p><input type="text" name="names[]"/></p>');
  });
$('#btn1').click(function(e){
    e.preventDefault();
    $('#add1').append('<p><input type="text" name="emails[]"/></p>');
  });
</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(window).on('load',function(){
        $('#welcome_msg').modal('show');
    });
</script>

<!-- <script type="text/javascript">
function Converttimeformat() {
// var time = $("#starttime").val();
var time = document.getElementById('txttime').value;
var hrs = Number(time.match(/^(\d+)/)[1]);
var mnts = Number(time.match(/:(\d+)/)[1]);
var format = time.match(/\s(.*)$/)[1];
if (format == "PM" && hrs < 12) hrs = hrs + 12;
if (format == "AM" && hrs == 12) hrs = hrs - 12;
var hours =hrs.toString();
var minutes = mnts.toString();
if (hrs < 10) hours = "0" + hours;
if (mnts < 10) minutes = "0" + minutes;
//alert(hours + ":" + minutes);
 var date1 = new Date();
date1.setHours(hours );
date1.setMinutes(minutes);
//alert(date1);
var time = document.getElementById('txttime1').value;
var hrs = Number(time.match(/^(\d+)/)[1]);
var mnts = Number(time.match(/:(\d+)/)[1]);
var format = time.match(/\s(.*)$/)[1];
if (format == "PM" && hrs < 12) hrs = hrs + 12;
if (format == "AM" && hrs == 12) hrs = hrs - 12;
var hours = hrs.toString();
var minutes = mnts.toString();
if (hrs < 10) hours = "0" + hours;
if (mnts < 10) minutes = "0" + minutes;
//alert(hours+ ":" + minutes);
var date2 = new Date();
date2.setHours(hours );
date2.setMinutes(minutes);
//alert(date2);
var diff = date2.getTime() - date1.getTime();
var hours = Math.floor(diff / (1000 * 60 * 60));
diff -= hours * (1000 * 60 * 60);
var mins = Math.floor(diff / (1000 * 60));
diff -= mins * (1000 * 60);
alert( hours + " hours : " + mins + " minutes : " );
}
</script> -->