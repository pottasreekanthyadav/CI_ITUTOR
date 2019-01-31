<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Itutor</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
  <!-- Bootstrap 3.3.6 -->
  <?php $this->load->view(SUPER_COMMON_CSS_PATH);?>
<style>
        .pages a,.pages strong{                
            border-radius: 9px 9px;
            padding: 7px 12px;
         }
        .pages a{
             background-color: #c52825;
             border-radius:50px;
             color: white;
        }
    </style>
</head>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <?php
    $tutor_type_req=json_decode($tutor_type_data);
    //print_r($tutor_type_req->tutor_type_data);
  ?>
<div class="wrapper">
<?php $this->load->view(SUPER_HEADER_PATH);?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
   <?php $this->load->view(SUPER_SIDEBAR_PATH);?>
    <!-- /.sid$this->load->view("includes/header.php")bar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <div class="col-md-10 col-sm-11 box display-table-cell valign-top" ><!-- Content menu --><br>
      <!--displaying breadcrumb-->
      <div class="col-md-12"> 
          <ol class="breadcrumb breadcrumb-arrow">
          <?php 
          $breadcrumb_details = json_decode($breadcrumb);
                      $breadcrumb_count = count($breadcrumb_details);
                      foreach ($breadcrumb_details as $breadcrumb) {
                      //print_r($breadcrumb);
                          ?>
              <li class="<?php echo $breadcrumb->class; ?>"><a href="<?php echo $breadcrumb->link; ?>" <?php if(!empty($breadcrumb->class)){?>style='color:red;'<?php } ?>> <?php echo $breadcrumb->title; ?></a></li>
             <?php }  ?>
          </ol>
      </div>
    <div class="panel panel-default">
  <div class="panel-heading"><h3>Add Tutor Type</h3></div>
  <div class="panel-body">
  <div id="education_fields">
        </div>
        <div>
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
          <?php if(isset($not_selected)) { ?>
          <div class="alert alert-danger" id="temp">
          <?php echo $not_selected; ?>
          </div>
          <?php } ?>
        </div>
<div class="col-sm-3 nopadding">
<?php echo form_open(SUPER_ADMIN_LINK.'Tutor_type/updateTutorType',array('id'=>'form_data')); ?>
<?php if($tutor_type_req) {?>
<?php echo form_hidden('tutor_type_id',$tutor_type_req->tutor_type_data->tutor_type_id); ?>
  <div class="form-group">
    <div class="input-group">
    <?php echo form_input(array('class'=>'form-control','name'=>'tutor_type','id'=>'tutor_type','placeholder'=>'Enter Tutor Type','value'=>$tutor_type_req->tutor_type_data->type_name)); ?>
<?php } ?>
	  <div class="input-group-btn">
      </div>
    </div>
  </div>
  <div class="input-group">
      <?php echo form_submit('submit','Update',array('name'=>'submit','id'=>'submit','class'=>'btn btn-success')); ?>
  </div>
  <?php echo form_close(); ?>
</div>
<div class="clear"></div>
  </div>
  </div>
</div>
    <!-- Main content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <footer class="main-footer">
      <?php $this->load->view(SUPER_FOOTER_PATH);?>
    </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php $this->load->view(SUPER_COMMON_JS_PATH);?>
</body>
</html>
