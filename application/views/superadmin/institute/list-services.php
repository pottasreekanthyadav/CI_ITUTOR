<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Its My Tutor|Dashboard</title>
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
<?php $this->load->view("superadmin/includes/header");?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
   <?php $this->load->view("superadmin/includes/sidebar");?>
    <!-- /.sid$this->load->view("includes/header")bar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Manage Services
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Manage Services</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div id="successmessage"><?php if($this->session->flashdata('successmessage')){echo $this->session->flashdata('successmessage');} ?></div>
              <div id="failmessage"></div> 
              <div class="col-sm-12">
        <form method="post" action="<?php echo base_url();?>superadmin/Tuitioncenter_controller/search_service" >
           <div class="col-sm-2">
                   <input type="text" class="form-control" name="loc_search" id="loc_search" placeholder="Search">
              </div>
           <?php //print_r($institute_type); ?>
                <div class="col-sm-2">
                  <select class="form-control" name="institute_type" id="institute_type">
                     <option value="0">--Institute Type--</option>
                     <?php $newda = json_decode($institute_type);
                     if($newda->code==SUCCESS_CODE){ 
                      foreach($newda->result as $row=>$value){ ?>
<option value="<?php echo $value->institute_type_id;?>"><?php echo $value->institute_type_name; ?></option>
                   <?php   } }
                      ?>
               
                   </select>
                 </div>

                  <?php //print_r($institute_type); ?>
                <div class="col-sm-2">
                  <select class="form-control" name="institute_name" id="institute_name">
                   <option value="0">--Institute Name--</option>
                     <?php $newname = json_decode($institute_name_d);
                     if($newname->code==SUCCESS_CODE){ 
                      foreach($newname->result as $row=>$value){ ?>
<option value="<?php echo $value->institute_id;?>"><?php echo $value->institute_name; ?></option>
                   <?php   } }
                      ?>
                   </select>
                 </div>
                 
                 <div class="col-sm-2">
            <input type="submit" name="search" class="btn btn-md btn-info" value="Search">
         </div></form>
         <div class="col-md-4">
          
           <a href="<?php echo SUPER_ADMIN_LINK; ?>Tuitioncenter_controller/add_services" class="btn btn-primary   btn-md">Add</a>
          <button  class="btn btn-success   btn-md" onclick="updateActivationStatus('1')"> Active </button>
            <button  class="btn btn-warning   btn-md"  onclick="updateActivationStatus('0')">In  Active </button>  
                                 
           <span onclick="return confirm('Confirm to delete')"><button  class="btn btn-danger  btn-md" onclick="commonDelete();"> Delete </button></span>
        </div>
       
       </div>

              
			<div class="col-md-12 col-sm-12 ">
        <div class="col-md-9"> 
          <div>&nbsp;</div>
        </div>
        
        
      </div>
      <div style="height: 35px;"></div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row">
              <div class="col-sm-12">
              <table width="100%" class="table table-striped table-bordered table-hover table-responsive" >
                        <thead>

                            <tr>
                                <th>
                                    <input type="checkbox" id="checkAll" >
                                </th>
                                <th>Sl.No</th>
                                <th>Institute Name</th>
                                <th>Institute Type</th>
                                 <th>Service Name</th>
                                <th>Course Image</th>
                                <th>Banner Image</th>
                                <th>About</th>
                               
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $i = 1;
                            $result = $service;
                            //print_r($result);
                            if (!empty($result)) {
                                foreach ($result as $row) {
                                    ?>
                                    <tr class="">
                                        <td><input type="checkbox" class="checkbox" name="multiple[]" value="<?php echo $row->service_id;?>"> </td>
                                        <td><?php echo $i; ?> </td>
                                        <td><?php echo $row->institute_name; ?></td>
                                         <td><?php echo $row->institute_type_name; ?></td>
                                          <td><?php echo $row->course_title; ?></td>
                                         <td><img height="100" width="200" src="<?php echo base_url(); ?>uploads/serviceimage/<?php echo $row->course_img; ?>"></td>
                                         <td><img height="100" width="200" src="<?php echo base_url(); ?>uploads/serviceimage/<?php echo $row->banner_img; ?>"></td>
                                         <!-- <td><?php //echo $row->about_course; ?></td> -->
                                          <?php 
                                         $string=$row->about_course;
                                  if (strlen($string) > 100) {
$stringCut = substr($string, 0, 50);
$endPoint = strrpos($stringCut, ' ');
$string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
$string .= '...';
}
?>
                                      <td> <?php echo $string; ?><?php if(strlen($string)>50){ ?><a  data-toggle="modal" data-target="#myModal12" href="#" onclick="populate_more('<?php echo $row->service_id; ?>')" class="text-primary bb"><b>Read More</b></a><?php } ?></td>
                                        <p style="display:none" id='mydescreption<?php echo $row->service_id; ?>'><?php echo $row->about_course; ?></p>
                                        
                                        <td class="text-success"><b> <?php if ($row->service_status == 1) {
                                                    echo "<b style='color:green'>Active</b>";
                                                } elseif($row->service_status == 0) {
                                                    echo "<b style='color:red'>Inactive</b>";
                                                } ?>   </b></td>
                                                <td><a href="<?php echo base_url("superadmin/Tuitioncenter_controller/edit_services/$row->service_id") ?>" class="btn btn-xs btn-warning ">Update<i class="glyphicon glyphicon-upload"> </i></a></td>
                                        
                                    </tr> 
                                    <?php $i++;
                                }
                            } else { ?>
                                <tr><td colspan="10" style="text-align:center; color:red;font-size:20px;">No Records Found...</td></tr>
                            <?php }
                            ?>
                        </tbody>
                        </tbody>
                    </table>
                         <div class="text-center">
              <td colspan="4" > <p class="pages"><?php echo $this->pagination->create_links(); ?></p></td>
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
      <?php $this->load->view("superadmin/includes/footer");?>
      
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
<!--modal for read more-->
<div id="myModal12" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                           <h4 class="modal-title" id="myModalLabel">Details Service</h4>
                                       </div>
                                       <div class="modal-body">
                                         <p id="content-post"></p>
                                       </div>
                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                                       </div>
                                   </div>
                                   <!-- /.modal-content -->
                               </div>
                               <!-- /.modal-dialog -->
                           </div>
<!--modal end read more-->
<script type="text/javascript">
    $("#checkAll").change(function () {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
});
</script>
<script type="text/javascript">
   function updateActivationStatus(s) 
   {
        var listarray = new Array();
        //check this line for name filed
        
        $('input[name="multiple[]"]:checked').each(function () {
            listarray.push($(this).val());
        });
        //alert off if not nessearry
      // alert(listarray);
        var checklist = "" + listarray;
         //alert off if not nessearry
        //alert(checklist);
        if (!isNaN(s) && (s == '1' || s == '0') && checklist != '') {
            $('#fail').hide();
            $.ajax({
                dataType: 'json',
                type: 'post',
                data: {'tablename': 'service', 'updatelist': checklist, 'activity': s},
                url: '<?php echo base_url(); ?>superadmin/Tuitioncenter_controller/commonStatus/',
                success: function (u) {
                    console.log(u);
                    if(u.code=='200'){$('#success').show();$('#successmessage').html(u.description).addClass('alert alert-success');setTimeout(function() {window.location=location.href;},2000);}
    if(u.code=='204' || u.code=='301' || u.code=='422'){$('#fail').show();$('#failmessage').html(u.description).addClass('alert alert-danger');}
                },
                error: function (er) {
                    console.log(er);
                }
            });
        } else {
            $('#fail').show();
            $('#failmessage').html('*  Please select a record').addClass('alert alert-danger');
        }
    }
</script>

<script type="text/javascript">
    function commonDelete(){
    var listarray=new Array();
      $('input[name="multiple[]"]:checked').each(function(){
        listarray.push($(this).val());
      });
        var checklist=""+listarray;
        //alert(checklist);
      if(checklist!=''){
         $('#fail').hide();
         $.ajax({
          dataType:'json',
          type:'post',
          data:{'tablename':'service','updatelist':checklist},
          url:'<?php echo base_url();?>superadmin/Tuitioncenter_controller/commonDelete',
          success:function(u){
           // console.log(u);
            if(u.code=='200'){$('#success').show();$('#successmessage').html(u.description).addClass('alert alert-success');setTimeout(function() {window.location=location.href;},2000);}
                    if(u.code=='204' || u.code=='301' || u.code=='422'){$('#fail').show();$('#failmessage').html(u.description).addClass('alert alert-danger');}
                 },
          error:function(er){
            console.log(er);
          }
        });
      }
      else{
       $('#fail').show();$('#failmessage').html('*  Please Select ').addClass('alert alert-danger');
      }
    }
</script>
<script type="text/javascript">
 function  populate_more(id){
var newss = $("#mydescreption"+id).text();
   var nee = $("#content-post").text(newss);
   }
</script>