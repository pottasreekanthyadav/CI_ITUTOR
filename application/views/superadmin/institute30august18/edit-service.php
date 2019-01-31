 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Itutor | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
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
         Edit  Institute Service
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit  Institute Service</li>
      </ol>
    </section>
<?php
$newserviceinfo = $service_edit[0];
//echo $newserviceinfo->institute_name;die;
//print_r($newserviceinfo);
?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Edit  Institute Service</h3>
            <a href="<?php echo SUPER_ADMIN_FOLDER_PATH;?>Tuitioncenter_controller/listing_services" class="btn btn-primary pull-right">Manage Services</a>
            </div>
                <!-- /.panel-heading -->
          <div class="panel-body">
          <div class="row">
          <div class="col-md-12">
            
              <?php echo form_open_multipart('superadmin/Tuitioncenter_controller/change_services',array("name"=>"frominstitute_service","id"=>"frominstitute_service","class"=>"form-horizontal","novalidate"=>"true")); ?>
<fieldset>
<!-- Select Basic -->
<?php $newinstitute_type = json_decode($institute_type); //print_r($new);die; ?>
<div class="form-group">
  <label class="col-md-4 control-label" for="institutetype">Institute Type</label>
  <div class="col-md-5">
    <select id="institutetype" name="institutetype" class="form-control">
     
     <?php 
     if($newinstitute_type->code==SUCCESS_CODE){
      foreach($newinstitute_type->result as $key=>$value){
      ?>
     
      <option <?php if($value->institute_type_id==$newserviceinfo->institute_type){ echo 'selected="selected"'; } ?> value="<?php echo $value->institute_type_id; ?>"><?php echo $value->institute_type_name; ?></option>
      <?php } } ?>
    </select>
    <span id="institutetype-error"></span>
  </div>
</div>


<?php $newinstitute_name = json_decode($institute_name); //print_r($new);die; ?>
<div class="form-group">
  <label class="col-md-4 control-label" for="institute-name">Institute Name</label>
  <div class="col-md-5">
    <select id="institute-name" name="institute-name" class="form-control">
    
     <?php 
     if($newinstitute_name->code==SUCCESS_CODE){
      foreach($newinstitute_name->result as $key=>$value){
      ?>
     

      <option <?php if($value->institute_id==$newserviceinfo->institute_name){ echo 'selected="selected"';  } ?> value="<?php echo $value->institute_id; ?>"><?php echo $value->institute_name; ?></option>
      <?php } } ?>
    </select>
    <span id="institute-name-error"></span>
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="coursetitle">Title</label>  
  <div class="col-md-5">
  <input id="coursetitle" name="coursetitle" type="text" placeholder="Enter Course Name" class="form-control input-md" required="" value="<?php echo $newserviceinfo->course_title; ?>" >
     <span id="coursetitle-error"><?php echo form_error('coursetitle', '<div class="text-danger">', '</div>'); ?></span>
  </div>
</div>
<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="logo">Banner Image</label>
  <div class="col-md-4">
    <input id="banner" name="banner" class="input-file" type="file">
     <img src="<?php echo base_url(); ?>uploads/serviceimage/<?php echo $newserviceinfo->banner_img; ?>" id="preview-banner" alt="banner image" height="200px" width="50%">
      <span id="banner-error"><?php echo form_error('banner', '<div class="text-danger">', '</div>'); ?></span>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="courseimg">Course Image</label>
  <div class="col-md-4">
    <input id="courseimg" name="courseimg" class="input-file" type="file">
     <img src="<?php echo base_url(); ?>uploads/serviceimage/<?php echo $newserviceinfo->course_img; ?>" id="preview-courseimg" alt="course image" height="200px" width="50%">
      <span id="courseimg-error"><?php echo form_error('courseimg', '<div class="text-danger">', '</div>'); ?></span>
  </div>
</div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="aboutcourse">Descritpion</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="aboutcourse" placeholder="Enter Your Text Here.." name="aboutcourse" value="<?php echo $newserviceinfo->about_course; ?>"><?php echo $newserviceinfo->about_course; ?></textarea>
     <span id="aboutcourse-error"><?php echo form_error('aboutcourse', '<div class="text-danger">', '</div>'); ?></span>
  </div>
</div>
<input type="hidden" name="editid" value="<?php echo $newserviceinfo->service_id; ?>">
<input type="hidden" name="oldcourseimg" value="<?php echo $newserviceinfo->course_img; ?>">
<input type="hidden" name="oldbannerimg" value="<?php echo $newserviceinfo->banner_img; ?>">

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

  $("#frominstitute_service").on("submit",function(){  
var  str = true;     
var namepattern=/^[A-Za-z ]*$/;
var textpattern=/^[A-Za-z0-9,. ]*$/;

var coursetitle = $('#coursetitle').val().trim();
var institutetype = $('#institutetype').val().trim();
var aboutcourse = $("#aboutcourse").val().trim();
var courseimg = $("#courseimg").val().trim();
var banner = $("#banner").val().trim();
var institutename = $("#institute-name").val().trim();
if(courseimg!='' && image_validate(logo)==0){
  $('#courseimg').css('border','1px solid red');
  str=false;
}
if(banner!='' && image_validate(banner)==0){
  $('#banner').css('border','1px solid red');
  str=false;
}
if(aboutcourse=="" || aboutcourse==0){ 
$("#aboutcourse").css('border','1px solid red');
str=false;
}else{
$("#aboutcourse").css('border','');  
}
if(aboutcourse!='' && !textpattern.test(aboutcourse)){
  $("#aboutcourse").css('border','1px solid red').focus();
 str=false; 
}
if(institutetype=="" || institutetype==0){ 
$("#institutetype").css('border','1px solid red');
str=false;
}else{
$("#institutetype").css('border','');  
}
if(institutename=="" || institutename==0){ 
$("#institute-name").css('border','1px solid red');
str=false;
}else{
$("#institute-name").css('border','');  
}
if(coursetitle=="" || coursetitle==0){ 
  $("#coursetitle").css('border','1px solid red').focus();
  str=false;
}else{
$("#coursetitle").css('border','');  
}
if(coursetitle!='' && !namepattern.test(coursetitle)){
  $("#coursetitle").css('border','1px solid red').focus();
 str=false; 
}
    if(str==true){    
     $this.frominstitute_service.submit();
    }
     return str;
    });

</script>
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
      $("form#frominstitute_service input[type='file']").change(function(){
        readURL(this);
      });
</script>