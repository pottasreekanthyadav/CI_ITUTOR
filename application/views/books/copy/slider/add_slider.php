 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Itutor | Add Slider</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" type="text/css" href="<?php echo SUPER_CSS_PATH ; ?>bootstrap.min.css" />
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo SUPER_CSS_PATH ; ?>jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo SUPER_CSS_PATH ; ?>gharaahaar1.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
 <link rel="stylesheet" href="<?php echo SUPER_CSS_PATH ; ?>_all-skins.min.css">
 <link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <style>
   .select2-container .select2-selection--single {
    height:34px!important;
}
</style>
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
         Add Slider
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo SUPER_ADMIN_FOLDER_PATH; ?>Admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="<?php echo base_url(); ?>books/manage-slider"><i class="fa fa-dashboard"></i>Manage Slider</a></li>
        <li class="active">Add Slider</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <form action="<?php echo base_url()."books/save-slider"?>" method="post" enctype="multipart/form-data" name="slider_form" id="slider_form">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Add New Slider</h3>
            <a href="<?php echo base_url(); ?>books/manage-slider" class="btn btn-primary pull-right">Manage  Slider</a>
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
            </div>
            <div class="box-body">
            <div class="col-md-4">
              <div class="form-group">
            <label>Title</label>
            <span style="color:red" id="title_err" >*<?php echo form_error('s_title');?></span><input type="text" name="s_title" value="<?php echo set_value('s_title'); ?>" id="s_title" maxlength="40" autocomplete="off" class="form-control" placeholder="Title">
                                      </div>              
            </div>
            <div class="col-md-4">
              <div class="form-group">
            <label>Slider URL</label>
            <span style="color:red" id="url_err"> <?php echo form_error('s_url');?></span><input type="text" name="s_url" value="<?php echo set_value('s_url'); ?>" id="s_url" maxlength="40" autocomplete="off" class="form-control" placeholder="Slider URL (Optional)">
              </div>              
            </div>
            <div class="col-md-4">
              <div class="form-group">
              <label>Image</label>   
              <span style="color:red" id="image_err"> *<?php echo form_error('s_image');?></span><input type="file" name="s_image" id="s_image" maxlength="40" autocomplete="off" class="form-control number_class" placeholder="Image" value="<?php echo set_value("s_image") ?>">
              </div>
            </div> 

            <!-- ******************************* -->
            <div class="col-md-4"> 
                 <label>Slider status</label>
                 <span style="color:red" id="slider_status_error"> *<?php echo form_error('s_status');?></span>
                  <select name="s_status" id="slider_status" class="form-control">
                    <option value="">Select Slider status</option>
                    <option value="1"  <?php echo  set_select('s_status', '1'); ?>>Active</option>
                    <option value="0" <?php echo  set_select('s_status', '0'); ?>>Inactive</option>
                  </select>
             </div> 

            <div class="col-md-12">
              <div class="form-group">
                <label>Description</label> <span style='color:red' id='description_err'> <?php echo form_error('s_desc'); ?></span>
       <span class="err_class" id="description_err"></span>
      <textarea name="s_desc" id="description" class="form-control input-md floatlabel" placeholder="Slider Description (Optional)" rows="5" title="Enter Description" ><?php echo set_value('description'); ?></textarea>  
              </div>
            </div>
                                                                    
         
                  <div class="clearfix"></div>                                        
            <div class="box-footer">
              <p class="success_msg"></p>
               <button type="reset" class="btn btn-danger">Reset</button>
              <?php echo form_submit('submit', 'Submit', array('class' => 'btn btn-success', 'name' => 'btn_submit', 'id' => 'btn_submit')); ?>
              </div>
             </div>
            </div>
            <?php echo form_close(); ?>
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
<script src="<?php echo SUPER_JS_PATH; ?>select2.full.min.js"></script>
<link rel="stylesheet" href="<?php echo SUPER_CSS_PATH ; ?>select2.min.css">

<script type="text/javascript" src="<?php echo base_url(); ?>tinymce/tinymce.min.js"></script>
<script src="<?php echo SUPER_JS_PATH; ?>jquery-1.12.4.js"></script>
  <script src="<?php echo SUPER_JS_PATH; ?>jquery-ui.js"></script>
    <script>
  $( function() {
    $( "#purchased_date,#payable_date" ).datepicker();
  });
  </script>
  <script type="text/javascript">
   $("#slider_form").submit(function(){
    //alert('hi');
 $("#title_err,#image_err,#slider_status_error").html("");
     var title = $("#s_title").val();
     var status = $("#slider_status").val();
     var image= $("#s_image").val();
     var str=true;
     if(title == '')
     {
        $("#title_err").html('Title is required');
        str = false;
     }
     if(status == '')
     {
        $("#slider_status_error").html('Select slider status');
        str = false;
     }
    if(image == '')
     {
        $("#image_err").html('Slider image is required');
        str = false;
     }
  if(image!='' && image_validate(image)==0)
  {
      $("#image_err").html('It allows Jpeg,jpg,png files only');
        str = false;
  }
  return str;
});
  </script>