<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo TITLE_PATH;?> | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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
<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
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
        <div class="col-md-12"> 
        <?php if($this->session->flashdata('success')) { ?>
        <div class="alert alert-success" id="temp">
        <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php } ?>
        <?php if($this->session->flashdata('failure')) { ?>
        <div class="alert alert-danger" id="temp">
        <?php echo $this->session->flashdata('failure'); ?>
        </div>
        <?php } ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Languages
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Add Language</h3>
            <a href="<?php echo SUPER_ADMIN_FOLDER_PATH;?>language/manage_language" class="btn btn-primary pull-right">Manage Languages</a>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                            $form_attributes = array('id' => 'tutor_subtype', 'name' => 'tutor_subtype');
                            echo form_open('superadmin/language/insert_language', $form_attributes);
                         ?>
               <?php
               if($msg=$this->session->flashdata('msg'))
               {
                ?>
                <span class="text-danger">
                <?php
                    echo $msg;
                    ?>
                </span>
                <?php
               }
               ?>
            <div class="box-body">
    
            <div class="col-md-4">
              <div class="form-group">
               <?php $data3 = array(
                            'name' => 'language',
                            'id' => 'language',
                            'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control',
                            'placeholder' => 'Enter language',
                            'value' =>  set_value('language')

                        );
                        echo form_label('Language') . "<span style='color:red' id='type_err'> *".form_error('language')."</span>";
                        echo form_input($data3);
                        ?>
              </div>
            </div>
              <div class="clearfix"></div>
            <div class="box-footer">
                        <p class="success_msg"></p>
              <?php echo form_submit('submit', 'Add', array('class' => 'btn btn-success', 'name' => 'btn_submit', 'id' => 'btn_submit')); ?>
                        </div>
             </div>
            </div>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
     <footer class="main-footer">
    <?php $this->load->view("superadmin/includes/footer.php");?>
  </footer>
  </div>
  <!-- /.content-wrapper -->

 

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
 <script>
         $("#btn_submit").click(function(){
           //alert('hai');
             var type=$('#language').val().trim();
            var str=true;
      if(type==''){
                str=false;
                $('#language').css('border','1px solid red');
            }
             return str;
         });
    
</script>