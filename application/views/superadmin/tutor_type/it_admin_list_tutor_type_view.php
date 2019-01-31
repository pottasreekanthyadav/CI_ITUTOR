<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Itutor</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
  <?php $this->load->view(SUPER_COMMON_CSS_PATH);?>
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
<?php $this->load->view(SUPER_HEADER_PATH);?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
   <?php $this->load->view(SUPER_SIDEBAR_PATH);?>
    <!-- /.sid$this->load->view("includes/header.php")bar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Manage Tutor Tasks
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Manage Tutor Tasks</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
			<div class="col-md-12 col-sm-12 ">
        <div class="col-md-7">
          <?php?>
        <form method="post" class="form-inline" action="<?php echo SUPER_ADMIN_LINK.'Tutor_type'; ?>" >
			     <input type="search" name="search" class="form-control" placeholder="Search">
           <input type="submit" class="btn btn-md btn-info" value="Search">
        </form>
           
        </div>
        <div class="col-md-3 form-inline">
        <table>
        <tr>
          <td>
            <button  class="btn btn-success   btn-md" onclick="updateActivationStatus('1')"> Active </button>
          </td>
          <td>
            <button  class="btn btn-warning   btn-md"  onclick="updateActivationStatus('0')">In  Active </button> 
          </td>
          <td>
            <span onclick="return confirm('Confirm to delete')"><button  class="btn btn-danger  btn-md" onclick="commonDelete();"> Delete </button></span>
          </td>
          <td>
            <a href="<?php echo SUPER_ADMIN_LINK; ?>Tutor_type/addTutorType" class="btn btn-primary pull-right">Add New</a></div>
          </td>
        </tr>
        </table>
        </div>
       
<!--
        <div>
          <center><div id="successmessage"></div></center>
        <center><div id="failmessage"></div></center>
        </div>
-->
        
      </div>
      <div style="height: 35px;"></div>
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
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <td  colspan="8">
                                    <div>
                                      <center><div class="" id="successmessage"></div></center>
                                    <center><div id="failmessage"></div></center>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                
                                <th>
                                    <input type="checkbox" id="checkAll" >
                                </th>
                                <th>Sl.No</th>
                                <th> Tutor Type </th>
                                <th> Status</th>
                                <th> Added On </th>
                                <th> Updated On </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $i = 1;
                            $result = json_decode($common_result);
                            //print_r($result->common_result);
                            if ($result->code == SUCCESS_CODE) {
                                foreach ($result->common_result as $tutor_types) {
                                    ?>
                                    <tr class="">
                                        <td><input type="checkbox" class="checkbox" name="multiple[]" value="<?php echo $tutor_types->tutor_type_id;?>"> </td>
                                        <td><?php echo $i; ?> </td>
                                        <td><?php echo ucwords($tutor_types->type_name); ?></td>
                                        <td class="text-success"><b> <?php if ($tutor_types->status == 1) {
                                                    echo "<b style='color:green'>Active</b>";
                                                } elseif($tutor_types->status == 0) {
                                                    echo "<b style='color:red'>Inactive</b>";
                                                } ?>   </b></td>
                                        <td><?php 
                                            if($tutor_types->added_on!='0000-00-00 00:00:00'){
                                                $date=strtotime($tutor_types->added_on);
                                                echo date('d-M-Y',$date); 
                                            }
                                            else{
                                                echo '';
                                            }
                                            ; ?></td>
                                        <td><?php 
                                            if($tutor_types->updated_on!='0000-00-00 00:00:00'){
                                                $date=strtotime($tutor_types->updated_on);
                                                echo date('d-M-Y',$date); 
                                            }
                                            else{
                                                echo '';
                                            }
                                            ; ?></td>
                                        <td>
                                            <a href="<?php echo SUPER_ADMIN_LINK.'Tutor_type/editTutorType';?>/<?php echo $tutor_types->tutor_type_id; ?>" class="btn btn-sm btn-warning "> Update <i class="glyphicon glyphicon-upload"> </i> </a><br/><br/>
                                        </td>
                                    </tr> 
                                    <?php $i++;
                                }
                            } else { ?>
                                <tr><td colspan="10" style="text-align:center; color:red;font-size:20px;">No Products Found...</td></tr>
                            <?php }
                            ?>


                        </tbody>
                        </tbody>
                    </table>
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
      <?php $this->load->view(SUPER_FOOTER_PATH);?>
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
<?php $this->load->view(SUPER_COMMON_JS_PATH);?>
</body>
</html>
<script type="text/javascript">
    $("#checkAll").change(function () {
        $("input:checkbox").prop('checked', $(this).prop("checked"));
    });
   function updateActivationStatus(s) {
        var listarray = new Array();
        //check this line for name filed
        $('input[name="multiple[]"]:checked').each(function () {
            listarray.push($(this).val());
        });
      // alert(listarray);
        var checklist = "" + listarray;
        //alert(checklist);
        if (!isNaN(s) && (s == '1' || s == '0') && checklist != '') {
            $('#fail').hide();
            $.ajax({
                dataType: 'json',
                type: 'post',
                data: {'tablename': 'tutor_types', 'updatelist': checklist, 'activity': s},
                url: '<?php echo SUPER_ADMIN_LINK;?>Admin/commonStatusActivity/',
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
            $('#failmessage').html('*  Please select a record');
        }
    }
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
          data:{'tablename':'tutor_types','updatelist':checklist},
          url:'<?php echo SUPER_ADMIN_LINK;?>Admin/commonDelete/',
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