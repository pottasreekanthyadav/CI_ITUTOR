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
  <link rel="stylesheet" href="<?php echo SUPER_CSS_PATH ; ?>font-awesome.min.css">
  <!-- Ionicons -->
 <link rel="stylesheet" href="<?php echo SUPER_CSS_PATH ; ?>ionicons.min.css">
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
  <style type="text/css">
  .ch>url>:first-child {
    background: yellow;
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
  <?php //print_r($class_result);?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Class-Subjects
      </h1>
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
						<h3 class="box-title">Add Class-Subjects</h3>
						<a href="<?php echo SUPER_ADMIN_FOLDER_PATH;?>ClassSubjects/manageClassSubs" class="btn btn-primary pull-right">Manage Class-Subjects</a>
						</div>
						<!-- /.box-header -->
						<!-- form start -->
						<?php
                            $form_attributes = array('id' => 'classSubject', 'name' => 'classSubject');
                            echo form_open('superadmin/ClassSubjects/addClassSub', $form_attributes);
                         ?>
						<div class="box-body">
						<div class="col-md-4">
							<div class="form-group">
							  <?php echo form_label('Classes');
                            ?>
                            <span style="color:red; " id="class_err"> *</span> 
                            <select name="classes" id="classes" class="form-control ">
                                <option value="">Choose Class</option>
                                <?php
                                $class_res = json_decode($class_result);
                                if ($class_res->code == SUCCESS_CODE) {
                                    foreach ($class_res->class_list as $class_response) {
                                        ?>
                                        <option value="<?php echo $class_response->class_id; ?>"><?php echo $class_response->class_name; ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                            <span class="err_class" id="class_err"></span>
							</div>
						</div>
                        <div class="clearfix"></div>
            <div class="row">
                        <div class="box-body">
                <div class="col-md-12">
                            <div class="form-group">
                              <?php echo form_label('Subjects : ');
                            ?>
                            <span style="color:red; " id="subject_err"> *</span> <br>&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php
                                $subject_res = json_decode($subject_result);
                                if ($subject_res->code == SUCCESS_CODE) {
                                    foreach ($subject_res->subject_list as $subject_response) {
                                        ?>
                                        <div class="checkbox-inline col-md-2 ch" > 
                                        <input type="checkbox" name="subjects[]" value="<?php echo $subject_response->subject_id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $subject_response->subject_name; ?>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                             <span class="err_class" id="subject_err"></span>
                            </div>
                        </div>
						</div></br></br>
                        <div class="col-md-2 col-md-offset-1 "> 
                                             <div class="form-group">
                                                 
                                                <input type="submit" name="btn_submit" value=" Submit " class="btn btn-md btn-success " id="btn_submit">
                                                 <a href="<?php echo base_url();?>superadmin" class="btn btn-md btn-primary " id="btn_back"> Back </a>
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

 

  <div class="control-sidebar-bg"></div>
 <footer class="main-footer">
    <?php $this->load->view("superadmin/includes/footer.php");?>
  </footer>
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
 