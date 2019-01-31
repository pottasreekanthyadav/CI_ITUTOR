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
         Subscription
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
            <h3 class="box-title">Add Subscription</h3>
            <a href="<?php echo SUPER_ADMIN_FOLDER_PATH;?>Subscription/manageSubscription" class="btn btn-primary pull-right">Manage Subscriptions</a>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                            $form_attributes = array('id' => 'subscription', 'name' => 'subscription');
                            echo form_open('superadmin/Subscription/addSubscription', $form_attributes);
                         ?>
            <div class="box-body">
			<div class="col-md-4">
							<div class="form-group">
							  <?php echo form_label('Category Type');
                            ?>
                            <span style="color:red; " id="class_err"> *<?php echo form_error('tutor_id');?></span>
                            <select name="tutor_id" id="classes" class="form-control ">
							
                                <option value="">Choose Class</option>
                                <?php
	                        
                                $category_res = json_decode($category_list);
	                                 print_r($category_res);
                                if ($category_res->code == SUCCESS_CODE) {
                                    foreach ($category_res->category_list as $category_response) {
                                        ?>
                                        <option  value="<?php echo $category_response->category_id;?>" <?php echo set_select('tutor_id',$category_response->category_id); ?> ><?php echo $category_response->category_name; ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                            
							</div>
						</div>
              <div class="clearfix"></div>

            <div class="col-md-4">
              <div class="form-group">
               <?php $data3 = array(
                            'name' => 'plan_amount',
                            'id' => 'price',
                            'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control',
                            'placeholder' => 'Price',
                            'value' =>  set_value('plan_amount')

                        );
                        echo form_label('Price') . "<span style='color:red' id='price_err'> *".form_error('plan_amount')."</span>";
                        echo form_input($data3);
                        ?>
                        <span class="err_class" id="price_err"></span>
              </div>
            </div>
			<div class="clearfix"></div>
            <div class="col-md-4">
              <div class="form-group">
              <?php
                        $data4 = array(
                            'name' => 'validity',
                            'id' => 'validity',
                            'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control',
                            'rows' =>4,
                            'placeholder' => 'Validity in days',
                            'value' =>  set_value('validity')
                        );
                        echo form_label('Validity(in days)'). "<span style='color:red' id='validity_err'>* ".form_error('validity')."</span>"?>
                       <?php echo form_input($data4); ?>
                        <span class="err_class" id="email_err"></span>

                       </div>
            </div>
			<div class="clearfix"></div>
            <div class="col-md-4">
              <div class="form-group">
              <?php
                        $data4 = array(
                            'name' => 'number_of_tuitions',
                            'id' => 'number_of_tuitions',
                            'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control',
                            'rows' =>4,
                            'placeholder' => 'Number of tuitions',
                            'value' =>  set_value('number_of_tuitions')
                        );
                        echo form_label('No.of tuition'). "<span style='color:red' id='tuition_err'>* ".form_error('number_of_tuitions')."</span>"?>
                       <?php echo form_input($data4); ?>
                        <span class="err_class" id="email_err"></span>

                       </div>
            </div>
              <div class="clearfix"></div>
            
            
             
              <div class="clearfix"></div>
            <div class="box-footer">
                        <p class="success_msg"></p>
            <button type="submit" class="btn btn-danger">Cancel</button>
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
             var classes=$('#classes').val();
            var price=$('#price').val();
            var validity=$('#validity').val();
            var tuition=$('#number_of_tuitions').val();
            var str=true;
			if(classes==''|| classes==' '){
                str=false;
                $('#classes').css('border','1px solid red');
                $('#class_err').css('color','red');
                $('#class_err').html(' Please select Class');
            }
            
            if(price==''|| price==' '){
                str=false;
                $('#price').css('border','1px solid red');
                $('#price_err').css('color','red');
                $('#price_err').html(' Please Enter Price');
            }
           if(validity==''|| validity==' '){
                str=false;
                $('#validity').css('border','1px solid red');
                $('#validity_err').css('color','red');
                $('#validity_err').html(' Please Enter Validity');
		   }
		   if(tuition==''|| tuition==' '){
                str=false;
                $('#number_of_tuitions').css('border','1px solid red');
                $('#tuition_err').css('color','red');
                $('#tuition_err').html(' Please Enter no. of tuitions');
		   }

             return str;
         });
    
</script>