<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Itsmyutor</title>
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
        .list-learn{
              background: #222d32 ! important;
    color: white ! important;;
        }
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php $this->load->view("superadmin/includes/header");?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <?php $this->load->view("superadmin/includes/sidebar");?>
    <!-- /.sid$this->load->view("includes/header.php")bar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Requirement Post 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Requirement Post </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
     
     

        <div class="col-md-12 col-sm-12 ">
        <div class="col-md-9">
         <span id="fail"></span>
           <span id="failmessage"></span>
           <span id="success"></span>
           <span id="successmessage"></span>
           
        </div>
        <div class="col-md-3 form-inline">
          

          <button  class="btn btn-success   btn-md" onclick="updateActivationStatus('1')"> Active </button>
            <button  class="btn btn-warning   btn-md"  onclick="updateActivationStatus('0')">In  Active </button>  
                                 
           <span onclick="return confirm('Confirm to delete')"><button  class="btn btn-danger  btn-md" onclick="commonDelete();"> Delete </button></span>
          
        </div>
        
      </div>


            <!-- /.box-header -->
            <div class="box-body">
              <div id="mTable" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row">
              <div class="col-sm-12 table-responsive">
              <table width="100%" class="table table-striped table-bordered table-hover table-bordered">
                        <thead>

                            <tr class="list-learn">
                               <th>
                                    <input type="checkbox" id="checkAll">
                                </th>
                                <th>Sl.No</th>
                                <th> Name </th>
                                <th>Email</th>
                                <th> Mobile </th>
                                <th> Syllabus </th>
                                <th> Categary </th>
                                <th> Class</th>
                                <th>Subject</th>
                                <th>Preferred Timing</th>
                                <th>Duration</th>
                                <th>Location</th>
                                <th>Maximum Tutor Request</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $i = 1;
                            if(!empty($return_result)){
                              $results =$return_result;
                              //print_r($results);die;
                             if (count($results)>0) {
                                foreach ($results as $key=>$value) {
                                 // print_r($row);
                                    ?>
                                    <tr class="">
                                      <td><input type="checkbox" class="checkbox" name="multiple[]" value="<?php echo $value->id;?>"> </td>
                                       <td><?php echo $i; ?> </td>
                                        <td><?php echo $value->name; ?></td>
                                        <td><?php echo $value->email; ?></td>
                                        <td><?php echo $value->mobile; ?></td>
                                        <td><?php echo $value->syllabus_name; ?></td>
                                        <td><?php echo $value->category_name; ?></td>
                                        <td><?php echo $value->class_name; ?></td>
                                        <td><?php echo $value->subject_name; ?></td>
                                        <td><?php echo $value->tuition_time; ?></td>
                                        <td><?php echo $value->duration; ?></td>
                                        <td><?php echo $value->location; ?></td>
                                         <td><a href="#" data-toggle="modal" data-target="#myModal" onclick="populate_tutor_req('<?php echo $value->id; ?>')"><?php echo $value->maximum_tutor_request; ?></a></td>
                                         <td id="myresponse<?php echo $value->id; ?>" class="hidden"><?php echo $value->maximum_tutor_request; ?></td>
                                         <td><?php if($value->status==1){ echo '<span class="label label-success">Active</span>'; }else{ echo '<span class="label label-warning">Inactive</span>'; }  ?></td>
                                        
                                    </tr> 
                                    <?php $i++;
                                }
                           } }else { ?>
                                <tr><td colspan="10" style="text-align:center; color:red;font-size:20px;">No Records Found...</td></tr>
                             <?php }
                             ?>  


                        </tbody>
                        </tbody>
                    </table>
                         <div class="text-center">
             <?php echo $this->pagination->create_links(); ?>
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
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js""></script>    
<script src="<?php echo base_url(); ?>superadmin_assets/datatable/jquery.tablesorter.min.js"></script>
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

<!-- Bootstrap 3.3.6 -->


<!-- <script type="text/javascript" src="<?php //echo base_url(); ?>superadmin_assets/datatable/jquery-3.3.1.js"></script> --> 

</body>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Maximum Response of Post</h4>
      </div>
      <div class="modal-body">
        <form name="maxtutorresponse" id="maxtutorresponse" action="" method="post">
          <input type="number" class="form-control number_class" name="maxresponse" id="maxresponse">
          <input type="hidden"  name="editid" id="editid">
          <div class="clear-fix">&nbsp;</div>
          <button type="submit" name="btnsub" id="btnsub">Save</button>
         
          
        </form>

      </div> <div class="clear-fix">&nbsp;</div>
       <span id="successinmodal"></span>
           <span id="successinmodalmessage"></span>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</html>
<script type="text/javascript">
    $("#checkAll").change(function () {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
});
</script>
<script type="text/javascript">
    function commonDelete(){
    var listarray=new Array();
      $('input[name="multiple[]"]:checked').each(function(){listarray.push($(this).val());});
        var checklist=""+listarray;
        //alert(checklist);
      if(checklist!=''){
         $('#fail').hide();
         $.ajax({
          dataType:'json',
          type:'post',
          data:{'tablename':'post_requirement','updatelist':checklist},
          url:'<?php echo base_url();?>superadmin/Admin/commonDelete/',
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
   function updateActivationStatus(s) {
        var listarray = new Array();
        $('input[name="multiple[]"]:checked').each(function () {
            listarray.push($(this).val());
        });
        var checklist = "" + listarray;
        if (!isNaN(s) && (s == '1' || s == '0') && checklist != '') {
            $('#fail').hide();
            $.ajax({
                dataType: 'json',
                type: 'post',
                data: {'tablename': 'requirement_post', 'updatelist': checklist, 'activity': s},
                url: '<?php echo base_url(); ?>superadmin/Admin/commonStatusActivity/',
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
            $('#failmessage').html('*Please select a record');
        }
    }
</script>

<script type="text/javascript">
//$(document).ready(function(){ $('.table-bordered').tablesorter(); });
</script>
<script type="text/javascript">
  function populate_tutor_req(id) {
   var newres = $("#myresponse"+id).text();  
   $("#maxresponse").val(newres);
   $("#editid").val(id);
  }
</script>
<script type="text/javascript">
  $("#maxtutorresponse").on('submit',function() {
   var editid =$("#editid").val();
   var maxresponse =$("#maxresponse").val();
   if(editid!='' && maxresponse!=''){
      $.ajax({
          dataType:'json',
          type:'post',
          data:{'editId':editid,'maxResponse':maxresponse},
          url:'<?php echo base_url();?>superadmin/Admin/edit_max_response',
          success:function(u){
              if(u.code=='200'){
          console.log(u);
          $('#successinmodalmessage').html(u.description).addClass('alert alert-success');
          setTimeout(function() {window.location=location.href;},2000);
          }
    if(u.code=='204' || u.code=='301' || u.code=='422'){
    $('#fail').show();$('#failmessage').html(u.description).addClass('alert alert-danger');}
                 },
          error:function(er){
            console.log(er);
          }
        });
      //return false;
   }
  })
</script>