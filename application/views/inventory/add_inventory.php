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
}
</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Itutor | Add inventory</title>
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
         Add Inventory
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo SUPER_ADMIN_FOLDER_PATH; ?>Admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="<?php echo base_url(); ?>inventory/manage_inventory"><i class="fa fa-dashboard"></i>Manage Inventory</a></li>
        <li class="active">Add Inventory</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Add New Inventory</h3>
            <a href="<?php echo base_url(); ?>inventory/manage_inventory" class="btn btn-primary pull-right">Manage  Inventory</a>
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
                            $form_attributes = array('id' => 'inventory', 'name' => 'inventory');
                            echo form_open_multipart('inventory/save_inventory', $form_attributes);
                         ?>
            <div class="box-body">
            <div class="col-md-4">
            <div class="form-group">
              <label>Vendor</label> * <span id="vendor_error" style='color:red'><?php echo form_error('vendor'); ?></span>    
            <select name='vendor' id='vendor' class ='selectpicker form-control input-md select2' placeholder= 'Select Vendor'>
              <option value=''>Select Vendor</option>
                            <?php
                                $vendor_res = json_decode($vendor_result);
                                if ($vendor_res->code == SUCCESS_CODE) {
                                    foreach ($vendor_res->vendor_list as $vendor_response) {
                                        ?>
                                        <option value="<?php echo $vendor_response->vendor_id; ?>" <?php if(set_value('vendor')==$vendor_response->vendor_id){echo " selected"; }?>><?php echo ucfirst($vendor_response->vendor_name).' ('.$vendor_response->vendor_code.' )'; ?></option>
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
                            'name' => 'book_title',
                            'id' => 'book_title',
                            'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control',
                            'placeholder' => 'Title',
                            'value'=>set_value('book_title')
                        );
                        echo form_label('Book Title'). " * <span style='color:red' id='book_title_err';>".form_error('book_title')."</span>";
                        echo form_input($data1);?>
                        <?php
                       
                        ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
              <?php  $data2 = array(
                            'name' => 'isbn',
                            'id' => 'isbn',
                            'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control number_class',
                            'placeholder' => 'ISBN Number',
                            'value' =>  set_value('isbn')
                        );
                        echo form_label('ISBN number')."<span style='color:red' id='isbn_err'> ".form_error('isbn')."</span>";
                        echo form_input($data2);
                      ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
               <?php $data5 = array(
                            'name' => 'author',
                            'id' => 'author',
                            'autocomplete' => 'off',
                            'class' => 'form-control',
                            'placeholder' => 'Author',
                            'value' =>  set_value('author')

                        );
                        echo form_label('Author') . "  * <span style='color:red' id='author_err'>".form_error('author')."</span>";
                        echo form_input($data5);
                        ?>
              </div>
            </div>                                  
            <div class="col-md-4">
              <div class="form-group">
               <?php $data5 = array(
                            'name' => 'publisher',
                            'id' => 'publisher',
                            'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control',
                            'placeholder' => 'Publisher',
                            'value' =>  set_value('publisher')

                        );
                        echo form_label('Publisher') . " * <span style='color:red' id='publisher_err'>".form_error('publisher')."</span>";
                        echo form_input($data5);
                        ?>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
               <?php $data5 = array(
                            'name' => 'year_published',
                            'id' => 'year_published',
                            'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control number_class yearpicker',
                            'placeholder' => 'Year published',
                            'value' =>  set_value('year_published'),
                            'maxlength' => 6

                        );
                        echo form_label('Year Published') . "<span style='color:red' id='year_published_err'> ".form_error('year_published')."</span>";
                        echo form_input($data5);
                        ?>
              </div>
            </div>  
            <div class="col-md-4">
              <div class="form-group">
               <?php $data5 = array(
                            'name' => 'stock',
                            'id' => 'stock',
                            'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control number_class',
                            'placeholder' => 'Stock',
                            'value' =>  set_value('stock')

                        );
                        echo form_label('Stock') . " * <span style='color:red' id='stock_err'>".form_error('stock')."</span>";
                        echo form_input($data5);
                        ?>
              </div>
            </div>                                                          
         <div class="col-md-4"> 
              <div class="form-group">
                  <?php $data7 = array(
                             'name' => 'language',
                            'id' => 'language',
                             'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control',
                            'placeholder' => 'Language',
                            'rows'=>'3',
                            'value' =>  set_value('language')

                         );
                   echo form_label('Language')."<span style='color:red' id='language_error'>".form_error('language')."</span>";
                        echo form_input($data7);                        
                        ?>    
                  </div>
              </div>
         <div class="col-md-4"> 
              <div class="form-group">
                  <?php $data7 = array(
                             'name' => 'purchased_date',
                            'id' => 'purchased_date',
                            'autocomplete' => 'off',
                            'class' => 'form-control date',
                            'placeholder' => 'Purchased Date',
                            'rows'=>'3',
                            'value' =>  set_value('purchased_date')

                         );
                   echo form_label('Purchased Date')." * <span style='color:red' id='purchased_date_err'>".form_error('purchased_date')."</span>";
                        echo form_input($data7);                        
                        ?>    
                  </div>
              </div>
         <div class="col-md-4"> 
              <div class="form-group">
                  <?php $data7 = array(
                            'name' => 'total_amount',
                            'id' => 'total_amount',
                             'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control number_class',
                            'placeholder' => 'Total Amount',
                            'rows'=>'3',
                            'value' =>  set_value('total_amount')

                         );
                   echo form_label('Total Amount')." * <span style='color:red' id='total_amount_error'>".form_error('total_amount')."</span>";
                        echo form_input($data7);                        
                        ?>    
                  </div>
              </div>     
         <div class="col-md-4"> 
              <div class="form-group">
                  <?php $data7 = array(
                            'name' => 'advance_amount',
                            'id' => 'advance_amount',
                             'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control number_class',
                            'placeholder' => 'Advance amount',
                            'rows'=>'3',
                            'value' =>  set_value('advance_amount')

                         );
                   echo form_label('Advance amount (if any)')."<span style='color:red' id='advance_amount_error'>".form_error('advance_amount')."</span>";
                        echo form_input($data7);                        
                        ?>    
                  </div>
              </div> 
         <div class="col-md-4"> 
              <div class="form-group">
                  <?php $data7 = array(
                            'name' => 'balance',
                            'id' => 'balance',
                             'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control number_class',
                            'placeholder' => 'Balance',
                            'rows'=>'3',
                            'value' =>  set_value('balance')

                         );
                   echo form_label('Balance')."<span style='color:red' id='balance_error'>".form_error('balance')."</span>";
                        echo form_input($data7);                        
                        ?>    
                  </div>
              </div> 
         <div class="col-md-4"> 
              <div class="form-group">
                  <?php $data7 = array(
                            'name' => 'payable_date',
                            'id' => 'payable_date',
                             'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control',
                            'placeholder' => 'Payable Date',
                            'rows'=>'3',
                            'value' =>  set_value('payable_date')

                         );
                   echo form_label('Payable Date')."<span style='color:red' id='payable_date_error'>".form_error('payable_date')."</span>";
                        echo form_input($data7);                        
                        ?>    
                        <span class="err_class" id="address_error"></span>
                  </div>
              </div>
          <div class="col-md-4"> 
              <div class="form-group">
                  <?php $data7 = array(
                            'name' => 'min_qty_alert',
                            'id' => 'min_qty_alert',
                             'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control number_class',
                            'placeholder' => 'Min Qty Alert',
                            'rows'=>'3',
                            'value' =>  set_value('min_qty_alert')

                         );
                   echo form_label('Min Qty Alert')." * <span style='color:red' id='min_qty_alert_error'>".form_error('min_qty_alert')."</span>";
                        echo form_input($data7);                        
                        ?>    
                        <span class="err_class" id="address_error"></span>
                  </div>
              </div>
          <div class="col-md-4"> 
              <div class="form-group">
                  <?php $data7 = array(
                            'name' => 'note',
                            'id' => 'note',
                             'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control',
                            'placeholder' => 'Note',
                            'rows'=>'3',
                            'value' =>  set_value('note')

                         );
                   echo form_label('Note ( if any)')."<span style='color:red' id='note_error'>".form_error('note')."</span>";
                        echo form_input($data7);                        
                        ?>    
                  </div>
              </div>  
          <div class="col-md-4"> 
              <div class="form-group">
                  <?php $data7 = array(
                            'name' => 'order_bill',
                            'id' => 'order_bill',
                             'maxlength' => '40',
                            'autocomplete' => 'off',
                            'class' => 'form-control',
                            'placeholder' => 'Order bill',
                            'rows'=>'3',
                            'value' =>  set_value('order_bill')

                         );
                   echo form_label('Upload Order bill')." <span style='color:red' id='order_bill_error'> ".form_error('order_bill')."</span>";
                        echo form_upload($data7);                        
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
    $("#inventory").submit(function(){
      $("#vendor_error,#book_title_err,#isbn_err,#author_err,#publisher_err,#year_published_err,#stock_err,#language_error,#purchased_date_err,#total_amount_error,#advance_amount_error,#balance_error,#payable_date_error,#min_qty_alert_error,#note_error").html("");
      $("#vendor,#book_title,#isbn,#author,#publisher,#year_published,#stock,#language,#purchased_date,#total_amount,#advance_amount,#balance,#payable_date,#min_qty_alert,#note").css("border","");
     var vendor = $("#vendor").val();
     var book_title = $("#book_title").val();
     var isbn= $("#isbn").val();
     var author = $("#author").val();
     var publisher = $("#publisher").val();
     var year_published = $("#year_published").val();
     var stock= $("#stock").val();
     var language = $("#language").val();
     var purchased_date = $("#purchased_date").val();
     var total_amount= $("#total_amount").val();
     var advance_amount = $("#advance_amount").val();
     var balance = $("#balance").val();
     var payable_date= $("#payable_date").val();
     var min_qty_alert = $("#min_qty_alert").val();    
     var note = $("#note").val();        
     var book_title_pattern = /^[a-zA-Z0-9 .]+$/;
     var language_pattern = /^[a-zA-Z]+$/;
     var name_pattern = /^[a-zA-Z .]+$/;
     var bill_image =$('#order_bill').val();
     //alert(bill_image);
     var str=true;
     if(vendor == '')
     {
        $("#vendor_error").html('Vendor is required');
        str = false;
     }
    if(book_title == '')
     {
        $("#book_title_err").html('Book title is required');
        str = false;
     }
    if(book_title!= '' && !book_title_pattern.test(book_title))
     {
        $("#book_title_err").html('Book title is invalid');
        str = false;
     }
    if(author == '')
     {
        $("#author_err").html('Author is required');
        str = false;
     }    
    if(author!= '' && !name_pattern.test(author))
     {
        $("#author_err").html('Author is invalid');
        str = false;
     }
    if(publisher == '')
     {
        $("#publisher_err").html('Publisher name is required');
        str = false;
     }    
    if(publisher!= '' && !name_pattern.test(publisher))
     {
        $("#publisher_err").html('Publisher name is invalid');
        str = false;
     }
    if(stock == '')
     {
        $("#stock_err").html('Stock is required');
        str = false;
     }
     if(stock!='' && stock ==0)
      {
        $("#stock_err").html('Stock is invalid');
        str = false;
     }
    if(language!='' && !language_pattern.test(language))
    {
        $("#language_error").html('Language is invalid');
        str = false;
     }
     if(purchased_date=='')
      {
        $("#purchased_date_err").html('Purchased date is required');
        str = false;
     }
     if(total_amount=='')
      {
        $("#total_amount_error").html('Total amount is required');
        str = false;
     }
    if(total_amount!='' && total_amount ==0)
      {
        $("#total_amount_error").html('Total amount is invalid');
        str = false;
     }
     if(min_qty_alert=='')
      {
        $("#min_qty_alert_error").html('Minimum quantity alert feild is required');
        str = false;
     }
    if(min_qty_alert!='' && min_qty_alert==0)
    {
        $("#min_qty_alert_error").html('Minimum quantity alert  is invalid');
        str = false;
     }
    if(balance > total_amount){
        $("#balance_error").html('Balance should be less than total amount');
        str = false;
    }
 if(bill_image!='' && image_validate(bill_image)==0){$('#order_bill_error').html('It allows Jpeg,jpg,png files only');str=false;}
     return str;
  });
</script>
</body>
</html>
