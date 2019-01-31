 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Itutor | Add vendor</title>
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
         Add Vendor
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo SUPER_ADMIN_FOLDER_PATH; ?>Admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="<?php echo base_url(); ?>inventory/manage_vendor"><i class="fa fa-dashboard"></i>Manage Vendors</a></li>
        <li class="active">Add Vendor</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Add New Vendor</h3>
            <a href="<?php echo base_url(); ?>inventory/manage_vendor" class="btn btn-primary pull-right">Manage  Vendors</a>
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
            <?php
                            $form_attributes = array('id' => 'vendor', 'name' => 'vendor');
                            echo form_open('inventory/save_vendor', $form_attributes);
                         ?>
            <div class="box-body">
            <div class="col-md-6">
              <div class="form-group">
            <?php   $data1 = array(
                            'name' => 'vendor_code',
                            'id' => 'vendor_code',
                            'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control',
                            'placeholder' => 'Vendor Code',
                            'value'=>set_value('vendor_code'),
                            'maxlength'=>6
                        );
                        echo form_label('Vendor Code'). " * <span style='color:red' id='vendor_code_err';>  ".form_error('vendor_code')."</span>";
                        echo form_input($data1);?>
                        <?php
                       
                        ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
              <?php  $data2 = array(
                            'name' => 'vendor_name',
                            'id' => 'vendor_name',
                            'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control',
                            'placeholder' => 'Vendor Name',
                            'value' =>  set_value('vendor_name')
                        );
                        echo form_label('Vendor Name')." * <span style='color:red' id='vendor_name_err'> ".form_error('vendor_name')."</span>";
                        echo form_input($data2);
                      ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
               <?php $data5 = array(
                            'name' => 'area',
                            'id' => 'area',
                            'autocomplete' => 'off',
                            'class' => 'form-control',
                            'placeholder' => 'Area',
                            'value' =>  set_value('area')

                        );
                        echo form_label('Area') . " * <span style='color:red' id='area_err'> ".form_error('area')."</span>";
                        echo form_input($data5);
                        ?>
                        <span class="err_class" id="area_err"></span>
              </div>
            </div>                                  
            <div class="col-md-6">
              <div class="form-group">
               <?php $data5 = array(
                            'name' => 'city',
                            'id' => 'city',
                            'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control',
                            'placeholder' => 'City',
                            'value' =>  set_value('city')

                        );
                        echo form_label('City') . " * <span style='color:red' id='city_err'> ".form_error('city')."</span>";
                        echo form_input($data5);
                        ?>
                        <span class="err_class" id="city_err"></span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
               <?php $data5 = array(
                            'name' => 'pincode',
                            'id' => 'pincode',
                            'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control number_class',
                            'placeholder' => 'Pincode',
                            'value' =>  set_value('pincode'),
                            'maxlength' => 6

                        );
                        echo form_label('Pincode') . " * <span style='color:red' id='pincode_err'> ".form_error('pincode')."</span>";
                        echo form_input($data5);
                        ?>
                        <span class="err_class" id="pincode_err"></span>
              </div>
            </div>  
            <div class="col-md-6">
              <div class="form-group">
               <?php $data5 = array(
                            'name' => 'website',
                            'id' => 'website',
                            'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control',
                            'placeholder' => 'Website',
                            'value' =>  set_value('website')

                        );
                        echo form_label('Website') . " <span style='color:red' id='website_err'>".form_error('website')."</span>";
                        echo form_input($data5);
                        ?>
                        <span class="err_class" id="website_err"></span>
              </div>
            </div>                                                          
         <div class="col-md-8 "> 
              <div class="form-group">
                  <?php $data7 = array(
                             'name' => 'address',
                            'id' => 'address',
                             'maxlength' => '40',
                            'autocomplete' => 'off',
                             'class' => 'form-control',
                            'placeholder' => 'Address',
                          'rows'=>'3',
                            'value' =>  set_value('address')

                         );
                   echo form_label('Address')." <span style='color:red' id='address_error'>".form_error('address')."</span>";
                        echo form_textarea($data7);                        
                        ?>    
                        <span class="err_class" id="address_error"></span>
                  </div>
              </div>
              <div class="col-md-12"> 
              <b>Add Vendor Contact Person</b> * <span style='color:red' id='vendor_name_err'> </span>
              <hr>
            </div>

                   <div class="col-md-12"> 
                    <div class="col-md-3"><label> Contact Person Name</label>&nbsp;&nbsp;<span style="color:red;" id="vcp_name_err"><?php echo form_error('vcp_name'); ?></span><input type="text" class="form-control" name="vcp_name" autocomplete="off" value="<?php echo set_value('vcp_name'); ?>" id="vcp_name"></div>
                    <div class="col-md-3"><label> Contact Person Email</label>&nbsp;&nbsp;<span style="color:red;" id="vcp_email_err"><?php echo form_error('vcp_email'); ?></span><input type="text" class="form-control" name="vcp_email" autocomplete="off" value="<?php echo set_value('vcp_email'); ?>" id="vcp_email"></div>
                    <div class="col-md-3"><label> Contact Person Mobile</label>&nbsp;&nbsp;<span style="color:red;" id="vcp_mobile_err"><?php echo  form_error('vcp_mobile'); ?></span><input type="text" class="form-control number_class" name="vcp_mobile" autocomplete="off" value="<?php echo set_value('vcp_mobile'); ?>" maxlength="10" id="vcp_mobile"></div>
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
<script type="text/javascript">
    $("#vendor").submit(function(){
      $("#vendor_code,#vendor_name,#area,#city,#pincode,#website,#address,#vcp_name,#vcp_email,#vcp_mobile").css("border","");
      $("#vendor_code_err,#vendor_name_err,#area_err,#city_err,#pincode_err,#website_err,#address_error,#vcp_name_err,#vcp_email_err,#vcp_mobile_err").html("");
     var vendor_code = $("#vendor_code").val();
     var vendor_name = $("#vendor_name").val();
     var area= $("#area").val();
     var city = $("#city").val();
     var pincode = $("#pincode").val();
     var website= $("#website").val();
     var address = $("#address").val();
     var vcp_name = $("#vcp_name").val();
     var vcp_email= $("#vcp_email").val();
     var vcp_mobile = $("#vcp_mobile").val();
     var name_pattern = /^[a-zA-Z .]+$/;
     var city_pattern = /^[a-zA-Z ]+$/;
     var str=true;
     if(vendor_code == '')
     {
        $("#vendor_code_err").html('Vendor code is required');
        str = false;
     }
    if(vendor_name == '')
     {
        $("#vendor_name_err").html('Vendor name is required');
        str = false;
     }
    if(vendor_name!= '' && !name_pattern.test(vendor_name))
     {
        $("#vendor_name_err").html('Vendor name is invalid');
        str = false;
     }
    if(area == '')
     {
        $("#area_err").html('Area is required');
        str = false;
     }    
    if(city == '')
     {
        $("#city_err").html('City is required');
        str = false;
     }
    if(city!= '' && !city_pattern.test(city))
     {
        $("#city_err").html('City name is invalid');
        str = false;
     }
    if(pincode == '')
     {
        $("#pincode_err").html('Pincode is required');
        str = false;
     }
    if(pincode!= '' && (pincode_check(pincode)== 0))
     {
        $("#pincode_err").html('Pincode is invalid');
        str = false;
     }
    if(vcp_name == '')
     {
        $("#vcp_name_err").html('Contact person name is required');
        str = false;
     }
    if(vcp_name != '' && !name_pattern.test(vcp_name))
     {
        $("#vcp_name_err").html('Contact person name is invalid');
        str = false;
     } 
    if(vcp_email == '')
     {
        $("#vcp_email_err").html('Contact person email is required');
        str = false;
     }      
    if(vcp_email != '' && (email_check(vcp_email)==0))
     {
        $("#vcp_email_err").html('Contact person email is invalid');
        str = false;
     } 
    if(vcp_mobile == '')
     {
        $("#vcp_mobile_err").html('Contact person mobile is required');
        str = false;
     }      
    if(vcp_mobile != '' && (mobile_check(vcp_mobile)==0))
     {
        $("#vcp_mobile_err").html('Contact person mobile is invalid');
        str = false;
     }        
     return str;
  });
</script>