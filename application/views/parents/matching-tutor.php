<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo TITLE_PATH;?></title>
<meta name="description" content=" "/>
<meta name="keywords" content="  "/>
<meta name="author" content="  "/>
<meta name="rating" CONTENT="General"/>
<meta name="revisit-after" CONTENT="2 days"/>
<meta name="robots" content=" ALL, index, follow"/>
<meta name="distribution" content="Global" />
<meta name="rating" content="Safe For All" />
<meta name="language" content="English" />
<meta http-equiv="window-target" content="_top"/>
<meta http-equiv="pics-label" content="for all ages"/>
<meta name="rating" content="general"/>
<meta content="All, FOLLOW" name="GOOGLEBOTS"/>
<meta content="All, FOLLOW" name="YAHOOBOTS"/>
<meta content="All, FOLLOW" name="MSNBOTS"/>
<meta content="All, FOLLOW" name="BINGBOTS"/>
<meta content="all" name="Googlebot-Image"/>
<meta content="all" name="Slurp"/>
<meta content="all" name="Scooter"/>
<meta content="ALL" name="WEBCRAWLERS"/>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"/>
<link rel="canonical" href="<?php echo base_url(); ?>parent/requirements" />
<!-- Bootstrap -->
<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"  />
<!--custom css-->
  <link href="<?php echo base_url();?>assets/css/custom.css" type="text/css" rel="stylesheet"  />
 <!--menu-->
  <link href="<?php echo base_url();?>assets/css/menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/icomoon.css">
  <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .register .input-group .input-group-addon{border: 1px solid #ccc;border-right: none;}
        .register .input-group {padding: 9px 2px;}
        .register .input-group .form-control{height: 45px !important}
        .pad5{    padding: 5px 21px 6px 0px !important}
        .btn-label {border: 1px solid #fff;padding: 10px 10px}
        .btn-facebook { color: #fff!important;background-color: #3b5998!important;}
        .btn-googleplus { color: #fff!important;background-color: #dd4b39!important;}
/*
        .side-menu ul { list-style-type: none;background: #ed3f40;padding-left: 0;height: 385px;}
        .side-menu ul li{border-bottom: 1px solid #bbb;padding: 10px 22px;background: #ed3f40} 
        .side-menu ul li:hover{border-bottom: 1px solid #bbb;padding: 10px 22px;background: #ca4344;color: #fff}
        .side-menu ul li.active{border-bottom: 1px solid #ccc;padding: 10px 22px;background: #ca4344;color: #fff}
        .side-menu ul li i:hover{color: #bbb;font-size: 16px;}
        .side-menu ul li i {color: #fff;font-size: 16px;}
        .bg-primary-dark { background-color: #2f80e7;color: #fff!important;}
        .bg-primary-dark2 { background-color: #ffb741;color: #fff!important;}
        .bg-primary-dark3 { background-color: #70bb44;color: #fff!important;}
*/
        .list-learn{    background: #7d7d7d;color: #fff;}
        .mt0{margin-top: 0px}
        .side-menu ul li a{color: #fff; font-size: 13px;text-decoration: none}
        .mt9{margin-top: 9px}
        .bootstrap-tagsinput { border: 1px solid #e4e7ea;border-radius: 0px; box-shadow: none; display: block; padding: 7px 12px;}
        .labell-bg {background: #fff;color: #bbb;border: 1px solid;}
        .btn-bg{background-color: #ed3f40;color: #fff}
         .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{font-size: 12px !important;padding: 8px 3px !important;font-weight: bold;}
      </style>
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125562697-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125562697-1');
</script>
  </head>
  <body class="bg-wh">
  <?php $this->load->view('includes/header.php'); ?>
   <div class="clearfix"></div>

  <section>
        <div class="bg-back container-fluid"  style="background-image:url('<?php echo base_url();?>assets/images/bg-back.jpg')">
      <div class="container">
    <?php $this->load->view('parents/parent-sidebar'); ?>
      <div class="col-sm-10">
          <div class="col-sm-12 inner-bg no-padd m-t-10">
           
           <h4 class="title-hd"><strong> Your Requirement List</strong></h4>
   
          
          <div class="table-responsive col-sm-12">
           <!-- <form > -->
    <!--  -->
     
     <table width="100%" class="table table-striped table-bordered table-hover table-bordered">
                        <thead>
                          <?php 
                          $results =$post_list;
                             if (!empty($results)) {
                          ?>
                            <tr class="list-learn">
                                <th>Sl.No</th>
                                <th>Name</th>
                                <th>Syllabus</th>
                                <th>Category</th>
                                <th>Class</th>
                                <th>Subject</th>
                                <th>Timing</th>
                                <th>Duration In Hours</th>
                                <th>Location</th>
                                <th>Gender</th>
                                <th>Class Per Week</th>
                                <th>Budget</th>
                                <th>Demo on</th>                                
                                <th>Status</th>
                                <th>Matches</th>
                            </tr>
                            <?php 

                          }
                            ?>
                        </thead>
                        <tbody>
                          <?php
                          //print_r($post_list);die;
                           
                              $results =$post_list;
                             if (!empty($results)) {
                              $i=$this->uri->segment(4,0);
                                foreach ($results as $row) {
                                 // print_r($row);
                                    ?>
                                    <tr class="">
                                      <!-- <td><input type="checkbox" class="checkbox" name="multiple[]" value="<?php //echo $row->id;?>"> </td> -->
                                       <td><?php echo  ++$i; ?> </td>
                                        <td><?php echo $row->name; ?></td>
                                        <td><?php echo $row->syllabus_name; ?></td>
                                        <td><?php echo $row->category_name; ?></td>
                                        <td><?php echo $row->class_name; ?></td>
                                        <td><?php echo $row->subject_name; ?></td>
                                        <td><?php echo $row->tuition_time; ?></td>
                                        <td><?php echo $row->duration; ?></td>
                                        <td><?php echo $row->location; ?></td>
                                        <td><?php echo $row->gender; ?></td>
                                        <td><?php echo $row->per_week_class; ?></td>
                                        <td><?php echo 'Rs.'.$row->budget_price.' '.$row->budget_type; ?></td>
                                        <td><?php echo $row->demo_date_time; ?></td>
                                         <td><?php if($row->status==1){ echo '<span class="label label-success">Avaliable</span>'; }else{ echo '<span class="label label-warning">Not avaliable</span>'; }  ?></td>
                                         <td><a href="<?php echo base_url("parent/matching-tutor/$row->id"); ?> " class="btn btn-primary btn-sm no-bod-rad" style="padding: 2px 8px;">See Matching Tutors</a></td>
                                        
                                    </tr> 
                                    <?php 
                               }
                           } else { ?>
                                <tr><td colspan="10" style="text-align:center; color:red;font-size:20px;">No Records Found...</td></tr>
                             <?php }
                             ?>  


                        </tbody>
                     
                    </table>
					 <div align="center"><?php echo $this->pagination->create_links(); ?> </div>
          </div>
          </div>
      </div>
    </div>
     <div class="clearfix">&nbsp;</div> 
  </div>
      </section>
  <!--section dashboard end-->
<?php $this->load->view('includes/modal.php'); ?>
 <div class="clearfix"></div>
 <?php $this->load->view('includes/footer.php'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/menu.js"></script>
  </body>
</html>