 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Itutor | Add Coupons</title>
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
  <!-- For Jquery datepicker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/cupertino/jquery-ui.css">
<!-- end datepicker -->
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
         Add Coupons
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo SUPER_ADMIN_FOLDER_PATH; ?>Admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="<?php echo base_url(); ?>books/manage-coupons"><i class="fa fa-dashboard"></i>Manage Coupons</a></li>
        <li class="active">Add Coupons</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <form action="<?php echo base_url()."books/save-coupon"?>" method="post">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Add New Coupons</h3>
            <a href="<?php echo base_url(); ?>books/manage-coupons" class="btn btn-primary pull-right">Manage Coupons</a>
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
            <label>Coupon Code</label>
            <span style="color:red" id="category_title_err" >*<?php echo form_error('c_code');?></span><input type="text" name="c_code" value="<?php set_value('c_code')?>" id="category_title" maxlength="40" autocomplete="off" class="form-control" placeholder="Enter code">
                                      </div>              
            </div>
            <div class="col-md-4">
              <div class="form-group">
            <label>Valid From</label>
            <span style="color:red" id="category_title_err"> *<?php echo form_error('v_from');?></span><input type="text" name="v_from" readonly value="<?php set_value('v_from')?>" id="fromdate" maxlength="40" autocomplete="off" class="form-control" placeholder="Select date">
                                      </div>              
            </div>
           <div class="col-md-4">
              <div class="form-group">
            <label>Valid Till</label>
            <span style="color:red" id="category_title_err"> *<?php echo form_error('v_till');?></span><input type="text" name="v_till" readonly value="<?php set_value('v_till')?>" id="tilldate" maxlength="40" autocomplete="off" class="form-control" placeholder="Select date">
              </div>              
            </div>
            <div class="col-md-4">
              <div class="form-group">
            <label>Coupon Worth</label>
            <span style="color:red" id="category_title_err" >*<?php echo form_error('c_worth');?></span><input type="text" name="c_worth" value="<?php set_value('c_worth')?>" id="category_title" maxlength="40" autocomplete="off" class="form-control" placeholder="Enter worth">
                                      </div>              
            </div>
            <div class="col-md-4"> 
                 <label>Coupon Type</label>
                 <span style="color:red" id="slider_status_error"> *<?php echo form_error('c_type');?></span>
                  <select name="c_type" id="slider_status" class="form-control">
                    <option value="">Select Slider status</option>
                    <option value="1">Percentage</option>
                    <option value="2">Rupees</option>
                  </select>
             </div> 
            <div class="col-md-4"> 
                 <label>Coupon status</label>
                 <span style="color:red" id="slider_status_error"> *<?php echo form_error('c_status');?></span>
                  <select name="c_status" id="slider_status" class="form-control">
                    <option value="">Select Slider status</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                  </select>
             </div>                                                                                
          <div class="clearfix"></div>                                        
            <div class="box-footer">
              <p class="success_msg"></p>
               <button type="reset" class="btn btn-danger">Reset</button>
              <?php echo form_submit('submit', 'Submit', array('class' => 'btn btn-success', 'name' => 'btn_submit', 'id' => 'btn_submit')); ?>
              </div>
             </div>
            </div>
        </div>
        </form>
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
<!-- For jquery date picker -->
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>

<script>
  $(document).ready(function(){
    $("#fromdate").datepicker({dateFormat:'yy-mm-dd'});
  });
  $(document).ready(function(){
    $("#tilldate").datepicker({dateFormat:'yy-mm-dd'});
  });
</script>

<!-- END jquery datepicker -->