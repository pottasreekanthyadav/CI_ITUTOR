<!DOCTYPE html>
<html>
<head>
  <style>
  .yearpicker-header
  {
    font-size: 17px;
  }
  .yearpicker-items
  {
     font-size: 17px;
  }
 .select2-container .select2-selection--single {
    height:34px!important;
    color:black;
}
</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Itutor | Add sub category</title>
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
         Add Sub category
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo SUPER_ADMIN_FOLDER_PATH; ?>Admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="<?php echo base_url(); ?>books/manage_subcategories"><i class="fa fa-dashboard"></i>Manage Sub categories</a></li>
        <li class="active">Add Sub category</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Add New Sub category</h3>
            <a href="<?php echo base_url(); ?>books/manage_subcategories" class="btn btn-primary pull-right">Manage  Sub categories</a>
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
                            $form_attributes = array('id' => 'subcategory_from', 'name' => 'subcategory_from');
                            echo form_open_multipart('books/save_subcategory', $form_attributes);
                         ?>
            <div class="box-body"> 
            <div class="col-md-4">
            <div class="form-group">
              <label>Category</label> * <span id="category_error" style='color:red'><?php echo form_error('category'); ?></span>    
            <select name='category' id='category' class ='selectpicker form-control input-md select2' placeholder= 'Select Category'>
              <option value=''>Select Category</option>
                            <?php
                                $category_res = json_decode($category_result);
                                if ($category_res->code == SUCCESS_CODE) {
                                    foreach ($category_res->category_list as $category_response) {
                                        ?>
                                        <option value="<?php echo $category_response->category_id; ?>" <?php if(set_value('category')==$category_response->category_id){echo " selected"; }?>><?php echo $category_response->title; ?></option>
                                        <?php
                                    }
                                }
                                ?>
            </select>         
              </div>
            </div>                      
            <div class="col-md-4">
              <div class="form-group">
            <?php   $data1 = array(
                            'name' => 'subcategory_title',
                            'id' => 'subcategory_title',
                            'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control',
                            'placeholder' => 'Title',
                            'value'=>set_value('subcategory_title')
                        );
                        echo form_label('Title'). " * <span style='color:red' id='subcategory_title_err';>".form_error('subcategory_title')."</span>";
                        echo form_input($data1);?>
                        <?php
                       
                        ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
              <?php  $data2 = array(
                            'name' => 'image',
                            'id' => 'image',
                            'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control number_class',
                            'placeholder' => 'Image',
                            'value' =>  set_value('image')
                        );
                        echo form_label('Image')."  * <span style='color:red' id='image_err'> ".form_error('image')."</span>";
                        echo form_upload($data2);
                      ?>
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
<link rel="stylesheet" href="<?php echo SUPER_CSS_PATH ; ?>yearpicker.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
        crossorigin="anonymous"></script>
<script src="<?php echo SUPER_JS_PATH; ?>yearpicker.js" async>$('.yearpicker').yearpicker();
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script src="<?php echo SUPER_JS_PATH; ?>select2.full.min.js"></script>
<link rel="stylesheet" href="<?php echo SUPER_CSS_PATH ; ?>select2.min.css">
<script type="text/javascript">
   $(".select2").select2();
</script>
  <link rel="stylesheet" href="<?php echo SUPER_CSS_PATH ; ?>jquery-ui.css">
  <script src="<?php echo SUPER_JS_PATH; ?>jquery-1.12.4.js"></script>
  <script src="<?php echo SUPER_JS_PATH; ?>jquery-ui.js"></script>
    <script>
  $( function() {
    $( "#purchased_date,#payable_date" ).datepicker();
  });
  </script>
  <script type="text/javascript">
   $("#subcategory_from").submit(function(){
    //alert('hi');
    $("#category_error,#subcategory_title_err,#image_err").html("");
     var category = $("#category").val();
     var title = $("#subcategory_title").val();
     var image= $("#image").val();
     var str=true;
     if(title == '')
     {
        $("#subcategory_title_err").html('Title is required');
        str = false;
     }     
     if(category == '')
     {
        $("#category_error").html('Category is required');
        str = false;
     }
    if(image == '') 
     {
        $("#image_err").html('Sub category image is required');
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
</body>
</html>
