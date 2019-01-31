<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Itutor | Order Details</title>
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
         Order Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo SUPER_ADMIN_FOLDER_PATH; ?>Admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="<?php echo base_url(); ?>books/manage-orders"><i class="fa fa-dashboard"></i>Manage Orders</a></li>
        <li class="active">Order Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <form action="<?php echo base_url()."books/save-slider"?>" method="post" enctype="multipart/form-data">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Order Details</h3>
            <a href="<?php echo base_url(); ?>books/manage-orders" class="btn btn-primary pull-right">Manage  Orders</a>
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
            </div>
            <?php $row=$order_result->row() ?>
            <div class="box-body">
            <div class="col-md-4">
                <b><p>Order Id :</b> IMTB<?php  echo $row->order_id;?></p>
                        <p><b>Order Date and Time :</b> <?php echo date('d-m-Y h:i A',strtotime($row->order_date)) ?></p>
            </div>
        
           <?php 
           
           foreach($shipping_result->result() as $row){
            ?>
            <div class="col-md-6">
              <p><b>Shipping address:</b> <br/> <?php echo $row->name; ?>,  <br/>  <?php echo $row->address ?>, <?php echo $row->landmark ?>, <?php echo $row->locality ?>, <?php echo $row->district ?>, <?php echo $row->state ?>-<?php echo $row->pincode ?>.</p>
            </div>
          
             <?php } ?>
          
                  <div class="clearfix"></div>                                        
           <hr>
            
            <div class="box">
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody><tr>
                    <th>S.No</th>
                  <th>Book name</th>
                  <th>Quantity</th>
                 <th> Total shipping charge</th>
                  <th>Price</th>
                  <th>Total</th>
                </tr>
                <?php 
                $i=1;
                foreach($book_result->result() as $row){
                 ?>
                 <tr>
                    <td><?php echo $i ?></td>
                  <td><?php echo $row->title ?></td>
                  <td><?php echo $row->qty ?></td>
                  <td><?php echo $row->total_shipcharge ?></td>
                  <td><?php echo $row->selling_price ?></td>
                  <td><?php echo $row->total ?></td>
                </tr>
                <?php 
                $i++;
              }
              ?>
                  <?php $total = $total_result->row() ?>
                <tr style="border-top:1px solid #333 !important;">
                  <th colspan="4"></th>
                  <th>Total Discount</th>
                  <th><?php echo $total->discount_amt ?></th>
                </tr>
                    <tr style="border-top:2px solid #333 !important;border-bottom:2px solid #333 !important">
                  
                        <th colspan="4"></th>
                        <th >Grand Total</th>
                
                    
                    <th><?php echo $total->total_amt ?></th>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>

           <hr>
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

<script type="text/javascript" src="<?php echo base_url(); ?>tinymce/tinymce.min.js"></script>
