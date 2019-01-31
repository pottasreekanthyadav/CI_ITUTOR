<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Itutor</title>
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
 
  <link rel="stylesheet" href="<?php echo SUPER_CSS_PATH ; ?>_all-skins.min.css">
<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php $this->load->view("superadmin/includes/header.php");?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
   <?php $this->load->view("superadmin/includes/sidebar.php");?>
    <!-- /.sid$this->load->view("includes/header.php")bar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create New Faq
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-dashboard"></i> Faq</a></li>
        <li class="active">Create Faq</li>
      </ol>
    </section>
    <?php $data=json_decode($result);// print_r($data);?>
    <!-- Main content -->
    <section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-primary">
						<div class="box-header with-border">

						<h3 class="box-title">Update Faq</h3>
						<a href="<?php echo SUPER_ADMIN_FOLDER_PATH; ?>Faqs/manageFaq" class="btn btn-primary pull-right">Manage Faq</a>
						</div>
						<!-- /.box-header -->
						<!-- form start -->
						 <?php echo form_open(SUPER_ADMIN_FOLDER_PATH.'Faqs/updatefaqs'); ?>
						<div class="box-body">
						<div class="col-md-6">
							<div class="form-group">
							 <label>Question<sup>*</sup></label><span id="span_question" class="error"><?php echo form_error('question'); ?></span>
                  <?php echo form_input(array('class'=>'form-control','name'=>'question','id'=>'question','placeholder'=>'Enter Question','autocomplete'=>'off','value'=>$data->query)); ?>
                 </span>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-md-6">
							<div class="form-group">
							<label>Answer<sup>*</sup></label><span id="span_description" class="error"><?php echo form_error('description'); ?></span>
              <input type="hidden" name="faq_id" id="faq_id" value="<?php echo $data->faq_id?>">
                  <?php echo form_textarea(array('class'=>'form-control','name'=>'description','id'=>'description','placeholder'=>'Enter Description','autocomplete'=>'off','value'=>$data->description)); ?>
                 </span>
							<div class="box-footer pull-right">
						<button type="reset" class="btn btn-danger">Cancel</button>
							 <?php echo form_submit('submit','Submit',array('class'=>'btn btn-success','name'=>'btn_submit','id'=>'btn_submit')); ?>
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

<script>
   $("#btn_submit").click(function(){
      var question=$('#question').val();
      var description=$('#description').val();
      $('#span_question,#span_description').html('');
      $('#question,#description').css('border','');
      if(question==''|| question==' '){
          str=false;
          $('#question').css('border','1px solid red');
          $('#span_question').css('color','red');
          $('#span_question').html(' Please Enter Question');
      }
       if(description==''|| description==' '){
          str=false;
          $('#description').css('border','1px solid red');
          $('#span_description').css('color','red');
          $('#span_description').html(' Please Enter description');
      }
      return str; 
    });

</script>