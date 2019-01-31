<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Itutor | Manage Orders</title>
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
 <link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
  <link rel="stylesheet" href="<?php echo SUPER_CSS_PATH ; ?>_all-skins.min.css">
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
       Manage Orders
      </h1>
      <ol class="breadcrumb" style="display:none">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Classes</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
      <div class="col-md-12 col-sm-12 ">
        <div class="clearfix">&nbsp;</div>
        <div class="col-md-12">
        <form method="post" class="form-inline" action="<?php echo base_url(); ?>books/manage_books">
          <input type="text" name="search" id="search" placeholder="Search by title" class="form-control" value="<?php echo set_value('search'); ?>">
           <input type="submit" class="btn btn-md btn-info" value="Search" id="search_btn">
        </form>
        </div>
        <form class="form-inline" action="<?php echo base_url()?>Admin_books/update_order_status" method="post">
        <div class="col-md-12 form-inline">
          <div class="col-md-5"></div>
          <div class="col-md-7" align="right" style="margin-top:6px;">
          <button  class="btn btn-warning  btn-md" name="order_details"> Order Details </button> 
          <button  class="btn btn-primary  btn-md" name="approve"> Approve </button>
          <span onclick="return confirm('Confirm to Cancel Order')"><button  class="btn btn-danger  btn-md" name="cancel"> Cancel </button></span>
          <button  class="btn btn-success btn-md" name="delivered"> Delivered </button>
           <span style="margin-right: 4px;"><a class="btn btn-primary  btn-md" href="<?php echo base_url(); ?>books/manage-orders" title="Refresh"><i class="fa fa-refresh"></i></a></span>
        </div>
          </div>

        </div>
        
      </div>
                                      <?php if($this->session->flashdata('success_msg')){
                                  echo "<div class='alert alert-success'>".$this->session->flashdata('success_msg')."</div>";  
                                  }
                                  if($this->session->flashdata('error_msg')){
                                  echo "<div class='alert alert-danger'>".$this->session->flashdata('error_msg')."</div>"; 
                                  } 
                                ?>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row">
              <div class="col-sm-12">
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
                                <?php if(isset($not_selected)) { ?>
                                <div class="alert alert-danger" id="temp">
                                <?php echo $not_selected; ?>
                                </div>
                                <?php } ?>
                              </div>
                              <div id="success"></div>
                              <div id="failmessage"></div>
                              <!-- <form method="post" action="<?php //echo base_url();?>superadmin/Classes/updateclasspriority" id="priority"> -->
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>
                                  <input type="checkbox" id="checkAll" class="multi_select">
                                </th>
                                <th>Sl.No</th>
                                <th>Quantity</th>
                                <th>Order No.</th>
                                <th>Subtotal</th>
                                <th>Discount</th>
                                <th>Total</th>
                                <th>Order Status</th>
                                <th>Payment Type</th>
                                <th>Order Date and Time</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php 
                          $segment = $this->uri->segment(4);
                            $i = $segment+1;
                            $newresult = json_decode($order_result);
                            if ($newresult->code == SUCCESS_CODE) {
                                foreach ($newresult->common_result as $row) {
                          ?>
                                    <tr class="">
                                        <td><input type="checkbox" class="checkbox" name="multiple[]" value="<?php echo $row->order_id; ?>"> </td>
                                        <td><?php echo $i; ?> </td>
                                        <td><?php echo $row->total_qty ?></td>
                                        <td><?php echo $row->order_id ?></td>
                                        <td><?php echo $row->subtotal_amt ?></td>
                                        <td><?php echo $row->discount_amt ?></td>
                                        <td><?php echo $row->total_amt ?></td>
                                        
                                        <td><?php 
                                        if($row->order_status == 1){
                                          echo "<b style='color:#f39c12'>New Order</b>";
                                        }
                                        else if($row->order_status == 2){
                                          echo "<b style='color:#3c8dbc'>Approved</b>";
                                        }
                                        else if($row->order_status == 3){
                                          echo "<b style='color:#dd4b39'>Cancelled</b>";
                                        }
                                        else if($row->order_status == 4){
                                          echo "<b style='color:#00a65a'>Delivered</b>";
                                        }
                                        ?>
                                        </td>
                                        <td><?php 
                                        if($row->payment_type == 1){ 
                                            echo "Cash on delivery";
                                        }
                                        elseif($row->payment_type == 2){
                                          echo "Online";
                                        }
                                        ?></td>
                                        <td><?php echo $row->order_date ?></td>
                                    </tr>

                                  <?php 
                                  $i++;
                                }

                                }
                                else{
                                   ?>
                                <tr><td colspan="10" style="text-align:center; color:red;font-size:20px;">No Books Found...</td></tr>
                              <?php } ?>
                            

                        </tbody>
                     
                    </table>
                  </form>
                         <div class="text-center">
              <td colspan="4" > <p class="pages"><?php echo $links; ?></p></td>
              </div>
                    </div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
       
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <footer class="main-footer">
      <?php $this->load->view("superadmin/includes/footer.php");?>
      
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
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
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
    $("#checkAll").change(function () {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
});
    $("#status,#subcategory").change(function(){
        $("#search_btn").click();
    });
</script>

