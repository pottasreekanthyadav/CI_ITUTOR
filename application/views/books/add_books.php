 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Itutor | Add books</title>
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
         Add Books
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo SUPER_ADMIN_FOLDER_PATH; ?>Admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="<?php echo base_url(); ?>inventory/manage_vendor"><i class="fa fa-dashboard"></i>Manage Books</a></li>
        <li class="active">Add Books</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Add New Book</h3>
            <a href="<?php echo base_url(); ?>books/manage_books" class="btn btn-primary pull-right">Manage  Books</a>
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
                            $form_attributes = array('id' => 'add_book', 'name' => 'add_book');
                            echo form_open_multipart('books/save_books', $form_attributes);
                         ?>
            <div class="box-body">
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
               <?php $data5 = array(
                            'name' => 'title',
                            'id' => 'title',
                            'autocomplete' => 'off',
                            'class' => 'form-control',
                            'placeholder' => 'Title',
                            'value' =>  set_value('title')

                        );
                        echo form_label('Title') . " <span style='color:red' id='title_err'> * ".form_error('title')."</span>";
                        echo form_input($data5);
                        ?>
                        <span class="err_class" id="area_err"></span>
              </div>
            </div>                                  
            <div class="col-md-12">
              <div class="form-group">
                <label>Description</label> <span style='color:red' id='description_err'>* <?php echo form_error('description'); ?></span>
       <span class="err_class" id="description_err"></span>
      <textarea name="description" id="description" class="form-control input-md floatlabel" placeholder="Product Description :: " rows="5" title="Enter Description" ><?php echo set_value('description'); ?></textarea>  
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
               <?php $data5 = array(
                            'name' => 'stock',
                            'id' => 'stock',
                            'autocomplete' => 'off',
                            'class' => 'form-control number_class',
                            'placeholder' => 'Stock',
                            'value' =>  set_value('stock'),
                            //'readonly'=>'readonly'

                        );
                        echo form_label('Stock') . " <span style='color:red' id='stock_err'> *".form_error('stock')."</span>";
                        echo form_input($data5);
                        ?>
              </div>
            </div>  
            <div class="col-md-4">
              <div class="form-group">
               <?php $data5 = array(
                            'name' => 'price',
                            'id' => 'price',
                            'autocomplete' => 'off',
                            'class' => 'form-control number_class',
                            'placeholder' => 'Price',
                            'value' =>  set_value('price')

                        );
                        echo form_label('Price') . " <span style='color:red' id='price_err'> *".form_error('price')."</span>";
                        echo form_input($data5);
                        ?>
              </div>
            </div>                                                          
         <div class="col-md-4"> 
              <div class="form-group">
                  <?php $data7 = array(
                             'name' => 'image',
                             'id' => 'image',
                            'autocomplete' => 'off',
                             'class' => 'form-control',
                            'placeholder' => 'image',
                         );
                   echo form_label('Book image')." <span style='color:red' id='image_error'> *".form_error('image')."</span>";
                        echo form_upload($data7);                        
                        ?>    
                  </div>
              </div>
              <div class="col-md-4"> 
                 <label>Availability Type</label>
                 <span style='color:red' id='availability_type_error'> *<?php echo form_error('availability_type'); ?></span>
                  <select name="availability_type" id="availability_type" class="form-control">
                    <option value="">Select Availability type</option>
                    <option value="1" <?php if(set_value('availability_type')==1){echo 'selected'; }?>>Library</option>
                    <option value="2" <?php if(set_value('availability_type')==2){echo 'selected'; }?>>Sell</option>
                    <option value="3" <?php if(set_value('availability_type')==3){echo 'selected'; }?>>Both</option>
                  </select>
             </div>    
              <div class="col-md-4"> 
                 <label>Book status</label>
                 <span style='color:red' id='book_status_error'> *<?php echo form_error('book_status'); ?></span>
                  <select name="book_status" id="book_status" class="form-control">
                    <option value="">Select Book status</option>
                    <option value="1" <?php if(set_value('book_status')==1){echo 'selected'; }?>>Active</option>
                    <option value="2" <?php if(set_value('book_status')==2){echo 'selected'; }?>>Inactive</option>
                  </select>
             </div>    
              <div class="col-md-4"> 
                 <label>Book Familiarity type</label>
                 <span style='color:red' id='book_familiarity_error'><?php echo form_error('book_familiarity'); ?></span>
                  <select name="book_familiarity" id="book_familiarity" class="form-control">
                    <option value="">Select Book familiarity</option>
                    <option value="1" <?php if(set_value('book_familiarity')==1){echo 'selected'; }?>>New Arivals</option>
                    <option value="2" <?php if(set_value('book_familiarity')==2){echo 'selected'; }?>>Award winning books</option>
                    <option value="3" <?php if(set_value('book_familiarity')==3){echo 'selected'; }?>>Most read books</option>
                  </select>
             </div>   
              <div class="col-md-4"> 
                <div class="form-group">
                 <label>Book Format</label>
                 <span style='color:red' id='book_format_error'><?php echo form_error('book_format'); ?></span>
                  <select name="book_format" id="book_format" class="form-control">
                    <option value="">Select Book format</option>
                    <option value="1" <?php if(set_value('book_format')==1){echo 'selected'; }?>>Paper book</option>
                    <option value="2" <?php if(set_value('book_format')==2){echo 'selected'; }?>>Binded</option>
                  </select>
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
    $("#add_book").submit(function(){
    $("#category_err,#subcategory_err,#title_err,#description_err,#stock_err,#price_err,#image_error,#availability_type_error,#book_status_error,#book_familiarity_error,#book_format_error").html("");
     var category = $("#category").val();
     var subcategory = $("#subcategory").val();
     //alert(subcategory);
     var title= $("#title").val();
     var description = $("#description").val();
     var stock = $("#stock").val();
     var price= $("#price").val();
     var image = $("#image").val();
     var availability_type = $("#availability_type").val();
     var book_status= $("#book_status").val();
     var book_familiarity = $("#book_familiarity").val();
     var book_format = $("#book_format").val();
     var str=true;
     if(category == '')
     {
        $("#category_err").html('Category required');
        str = false;
     }
    if(subcategory == '' || subcategory==0)
     {
        $("#subcategory_err").html('Subcategory is required');
        str = false;
     }
    if(title == '')
     {
        $("#title_err").html('Title is required');
        str = false;
     } 
    if(description == '')
     {
        $("#description_err").html('Description is required');
        str = false;
     }       
    // if(vendor_name!= '' && !name_pattern.test(vendor_name))
    //  {
    //     $("#vendor_name_err").html('Vendor name is invalid');
    //     str = false;
    //  }
    if(stock == '')
     {
        $("#stock_err").html('Stock is required');
        str = false;
     }    
     if(stock==0)
     {
        $("#stock_err").html('Stock is Unavailable');
        str = false;
     }
    if(price == '')
     {
        $("#price_err").html('Price is required');
        str = false;
     }
    if(price == 0)  
     {
        $("#price_err").html('Price is invalid');
        str = false;
     }
     if(image == '')
     {
        $("#image_error").html('Image is required');
        str = false      
     }
 if(image!='' && image_validate(image)==0){$('#image_error').html('It allows Jpeg,jpg,png files only');str=false;}
    if(availability_type == '')
     {
        $("#availability_type_error").html('Availability type is required');
        str = false;
     }
    if(book_status == '')
     {
        $("#book_status_error").html('Book status is required');
        str = false;
      }       
     return str;
  });
  $("#title").on("change",function()
    {
        var title = $(this).val();
        var base_url = '<?php echo base_url(); ?>';
        $.ajax({
            dataType:'html',
            method:'POST',
            data:{'title':title},
            url:base_url+'Books/get_stock',
            success:function(ss){
                console.log(ss);
                $('#stock').val(ss);
            },
            error:function(se){
                console.log(se);
            }
        });
    });
</script>