 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Itutor | import books</title>
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
         Import Books
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo SUPER_ADMIN_FOLDER_PATH; ?>Admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="<?php echo base_url(); ?>inventory/manage_vendor"><i class="fa fa-dashboard"></i>Manage Books</a></li>
        <li class="active">Import Books</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
                <!-- /.panel-heading -->
                <div class="panel-body">
                                <?php if($this->session->flashdata('success_msg')){
                                  echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  
                                  }
                                  if($this->session->flashdata('error_msg')){
                                  echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>"; 
                                  } 
                                ?>
            <?php
                            $form_attributes = array('id' => 'import_books', 'name' => 'import_books');
                            echo form_open_multipart('books/bulk_import', $form_attributes);
                         ?>
                <div class="col-md-4">
              <label>Category</label>
              <span style='color:red' id='category_err'>* <?php echo form_error('category'); ?></span>
            <select name='category' id='category' class ='selectpicker form-control input-md' placeholder= 'Select Category'>
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
            <div class="col-md-4">
            <label>Subcategory</label>
            <span style='color:red' id='subcategory_err'>* <?php echo form_error('subcategory'); ?></span>
            <select name='subcategory' id='subcategory' class ='selectpicker form-control input-md' placeholder= 'Select Category'>
              <option value=''>Select Subcategory</option>
            </select>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Import Sheet</label> <span style='color:red' id='import_sheet_err'> * <?php echo form_error('title'); ?></span>
              <input type="file" name="import_sheet" id="import_sheet">
            </div></div>
            <div class="col-md-4">
              <p class="success_msg"></p>
              <?php echo form_submit('submit', 'Upload', array('class' => 'btn btn-success', 'name' => 'btn_submit', 'id' => 'btn_submit')); ?>
             </div>
            </div></div>
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
<script type="text/javascript">
   $(".select2").select2();
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "#description",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste wordcount jbimages media paste"
          ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
        menubar: "file edit insert view format table tools",
        relative_urls: false,
        resize: false

    });
</script>
<script type="text/javascript">
function csv_validate(image)
  {
      var ext = image.match(/\.(.+)$/)[1];
      ext=ext.toLowerCase();
      validformat='';
      switch(ext) 
      {
          case 'csv':
          validformat=1; break;
          default: validformat=0; 
      }
      return validformat;
  }
    $("#import_books").submit(function(){
    $("#import_sheet_err,#category_err,#subcategory_err").html("");
     var import_sheet = $("#import_sheet").val();
     var category = $("#category").val();
     var subcategory = $("#subcategory").val();
     var str = true;
     if(import_sheet == '')
     {
        $("#import_sheet_err").html('CSV Sheet is required');
        str = false      
     }
 if(import_sheet!='' && csv_validate(import_sheet)==0){$('#import_sheet_err').html('It allows CSV sheet only');str=false;}  

  if(category == '' || category==0)
     {
        $("#category_err").html('Category is required');
        str = false      
     }
 if(subcategory == '' || subcategory==0)
     {
        $("#subcategory_err").html('Subcategory is required');
        str = false      
     }
    return str;
  });
</script>