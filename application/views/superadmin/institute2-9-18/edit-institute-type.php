 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Its My Tutor | Dashboard</title>
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
<?php $this->load->view("superadmin/includes/header");?>
 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
   <?php $this->load->view("superadmin/includes/sidebar");?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Edit Institute Type</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Institute Type</li>
      </ol>
    </section>
<?php //print_r($institute_type_edit);
$neweditdd = $institute_type_edit[0];  

?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title"><!-- Edit Institute Type --></h3>
            <a href="<?php echo SUPER_ADMIN_FOLDER_PATH;?>Tuitioncenter_controller/listing_institute_type" class="btn btn-primary pull-right">Manage Institute Type</a>
            </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                                <?php if($this->session->flashdata('success')){
                                  echo "<div class='alert alert-success'>".$this->session->flashdata('success')."</div>"; 
                                    
                                  }
                                  if($this->session->flashdata('failed')){
                                  echo "<div class='alert alert-danger'>".$this->session->flashdata('failed')."</div>"; 
                                  } 
                                ?>
                  <?php echo form_open_multipart('superadmin/Tuitioncenter_controller/change_institute_type',array('id'=>'type_institutefrm',"name"=>"type_institutefrm")); ?>
                                        <div class="col-md-8 input_fields_wrap"> 
                                            <div class="navbar-form">
                                                <?php echo form_label('Institute Type')."<span style='color:red' id='tutor_type'> * ".form_error('tutor_type')."</span> <br>";

                                                  $data8= array(
                                                    'name'          => 'institutetype',
                                                    'id'            => 'institutetype',
                                                    
                                                    'autocomplete'  => 'off',
                                                    'class'         => 'form-control input_small class_form',
                                                    'placeholder'   => 'Enter Institute Type',
                                                    'value'=>$neweditdd->institute_type_name

                                                );


                                                 echo form_input($data8);?>
                                                  <input id="institute-type-image" name="institute-type-image" class=" form-control" type="file" autocomplete='off'>
                                                  <span id="error-img"><?php echo form_error('institute-type-image', '<div class="text-danger">', '</div>'); ?></span>
                                            <input type="hidden" name="institutetype_imageold" id="institutetype_imageold" value="<?php echo $neweditdd->institutetype_image; ?>">
                                            <img src="<?php echo base_url("uploads/institutetypeimage/"); ?><?php echo $neweditdd->institutetype_image; ?>" id="preview-institute-type-image" alt="blog image" height="200px" width="50%">
                                                 <input type="hidden" name="editid" id="editid" value="<?php echo $neweditdd->institute_type_id; ?>">
                                            </div>
                                        </div>
                                        <div class="multiple_append">
                                          
                                        </div>
                                    <div class="clearfix"></div>
                                     <span class="success_msg" style="color:green;" style="display:none;"></span></br>
                                    <span class="fail_msg" style="color:red;" style="display:none;"></span><br/>
                                    <div class="col-md-2 col-md-offset-1 "> 
                                             <div class="form-group">
                                                 
                                                <input type="submit" name="btn_submit" value=" Submit " class="btn btn-md btn-success " id="btn_submit">
                                                 <a href="<?php echo base_url('superadmin/Tuitioncenter_controller/listing_institute_type'); ?>" class="btn btn-md btn-primary " id="btn_back"> Back </a>
                                            </div>
                                        </div>     
                                    <?php echo form_close();?>
                               </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <?php $this->load->view("superadmin/includes/footer");?>
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
  $("#type_institutefrm").on('submit',function(){
  var  str = true;     
  var namepattern=/^[A-Za-z ]*$/;
  var institutename = $('#institutetype').val().trim();
  var institutetypeimage = $('#institute-type-image').val().trim();
  if(institutename=="" || institutename==0){ 
  $("#institutetype").css('border','1px solid red').focus();
  str=false;
}else{
$("#institutetype").css('border','');  
}
if(institutename!='' && !namepattern.test(institutename)){
  $("#institutetype").css('border','1px solid red').focus();
 str=false; 
}
/*if(institutetypeimage=="" || institutetypeimage==0){ 
$("#institute-type-image").css('border','1px solid red');
str=false;
}else{
$("#institute-type-image").css('border','');  
}*/
if(institutetypeimage!='' && image_validate(institutetypeimage)==0){
  $('#institute-type-image').css('border','1px solid red');
  str=false;
}
if(str==true){    
     $this.type_institutefrm.submit();
    }
    return str;
  })
</script>
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


      $("form#type_institutefrm input[type='file']").change(function(){
        readURL(this);
      });
</script>