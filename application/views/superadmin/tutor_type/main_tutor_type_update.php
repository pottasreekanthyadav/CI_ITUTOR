 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Itutor | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
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
         Classes
      </h1>
      <?php 
      $data=json_decode($result);
      //print_r($data); ?>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Add New Class</h3>
            <a href="<?php echo SUPER_ADMIN_FOLDER_PATH;?>Classes/manageClasses" class="btn btn-primary pull-right">Manage Tutor Types</a>
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
                  <?php echo form_open('superadmin/main_tutor_type/update_tutor_type',array('id'=>'form_data')); ?>
                                        <div class="col-md-8 input_fields_wrap"> 
                                            <div class="navbar-form">
                                            <input type="hidden" id="id" name="id" value="<?php echo $data->id;?>"/>
                                                <?php echo form_label('Tutor Type','Tutor Type')."<span style='color:red' id='class_name'> * ".form_error('Tutor Type')."</span> <br>";

                                                  $data8= array(
                                                    'name'          => 'tutor_type',
                                                    'id'            => 'class_name',
                                                    'maxlength'     => 40,
                                                    'autocomplete'  => 'off',
                                                    'class'         => 'form-control input_small class_form',
                                                    'placeholder'   => 'Enter Class Name',
                                                    'value'=>$data->tutor_type
                                                );
                                                 echo form_input($data8);?>
                                             <span class="class_error" id="class_error"></span>
                                                                               
                                        </div>
                                    <div class="clearfix"></div>
                                     <span class="success_msg" style="color:green;" style="display:none;"></span></br>
                                    <span class="fail_msg" style="color:red;" style="display:none;"></span><br/>
                                    <div class="col-md-2 col-md-offset-1 "> 
                                             <div class="form-group">
                                                 
                                                <input type="submit" name="btn_submit" value=" Update " class="btn btn-md btn-success " id="btn_submit">
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


