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
<link rel="canonical" href="<?php echo base_url(); ?>parent/parent-payment"/>
<!-- Bootstrap -->
<link href="<?php echo MYCSS_PATH;?>bootstrap.min.css" type="text/css" rel="stylesheet"  />
<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
<!--custom css-->
  <link href="<?php echo MYCSS_PATH;?>custom.css" type="text/css" rel="stylesheet"  />
 <!--menu-->
  <link href="<?php echo MYCSS_PATH;?>menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo MYCSS_PATH;?>icomoon.css">
  <link href="<?php echo MYCSS_PATH;?>font-awesome.min.css" rel="stylesheet" />
 
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
       .pv-lg {padding-top: 15px!important;padding-bottom: 15px!important;}
        .mt0{margin-top: 0px}
        .side-menu ul li a{color: #fff; font-size: 13px;text-decoration: none}
        .mt9{margin-top: 9px}
        .bootstrap-tagsinput { border: 1px solid #e4e7ea;border-radius: 0px; box-shadow: none; display: block; padding: 7px 12px;}
        .labell-bg {background: #fff;color: #bbb;border: 1px solid;}
        .btn-bg{background-color: #ed3f40;color: #fff}
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
      <?php $this->load->view("parents/parent-sidebar.php");?>

      <div class="col-sm-10">
          <div class="col-sm-12 inner-bg no-padd m-t-10">
             
           <h4 class="title-hd"><strong>Payment</strong></h4>
       
          <div class="col-sm-12">
            <?php if($this->session->flashdata('success_parent')) { ?>
                                <div class="alert alert-success" id="temp">
                                <?php echo $this->session->flashdata('success_parent'); ?>
                                </div>
                                <?php } ?>

  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr class="tb-head">
                                <th>Name</th>
                                <th>Payment Plan</th>
                                <th>Transaction Id</th>
                                <th> Status</th>
                                <th>Payment_date</th>

                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            if (!empty($payment_recs)) {
                                  // print_r($payment_recs);exit;
                                    ?>
                                    <tr class="">
                                        <td><?php echo $payment_recs->name; ?> </td>
                                        <td><?php echo $payment_recs->amount; ?></td>
                                         <td><?php echo $payment_recs->transaction_id; ?></td>
                                        <td class="text-success"><b> <?php if ($payment_recs->payment_status == 1) {
                                                    echo "<span class='label label-success'>Life Time Pack is Active</span>";
                                                } elseif($payment_recs->payment_status == 0) {
                                                    echo "<span class='label label-danger'>Inactive</span>";
                                                } ?>   </b></td>
                                                <td><?php echo date('d-m-Y H:i:s',strtotime($payment_recs->payment_date));?></td>
                                    </tr> 
                                    <?php
                               
                            } else { ?>
                                <tr><td colspan="10" style="text-align:center; color:red;font-size:20px;">No Parent Found...</td></tr>
                            <?php }
                            ?>


                        </tbody>
               
                    </table>
                    <?php if($payment_recs->payment_status==0||empty($payment_recs))
                    {
                      ?>
               <section>
    <div class="container-fluid payonce">
      <div class="">
         <div class="col-sm-1 col-xs-2 no-padd currency" style="background-image:url('<?php echo base_url();?>assets/images/red-banner.png')">
  <h4 class="col-wh"><i><?php echo $plan;?></i></h4>
        </div>
        <div class="col-sm-7 col-xs-6">
          <h3 class="m-t-10">Pay Once and use for Lifetime <a href="#" class="pay-more"><span class="f14">Know more</span></a></h3>
        </div>
        <div class="col-sm-4 col-xs-2">
           <a href="<?php echo base_url();?>payment/1"><button type="button" class="btn btn-danger3 no-bod-rad  col-sm-8 col-sm-offset-2" style="margin-top: 9px;">Start Now</button></a>
        </div>
      </div>
    </div>
                   <div class="clearfix">&nbsp;</div>
  </section>
          <?php
                    }
                    ?>
    </div></div>
          </div></div>
      <div class="clearfix">&nbsp;</div>
     </div>
      </section>
  <!--section dashboard end-->
      <?php $this->load->view('includes/modal.php'); ?>
 <div class="clearfix"></div>
 <?php $this->load->view('includes/footer.php'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo MYJS_PATH;?>/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo MYJS_PATH;?>/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo MYJS_PATH;?>/menu.js"></script>

  </body>
</html>
 <script type="text/javascript">
      function navigate_now(){
        location.href="<?php echo base_url();?>/payment/1";
      }
    </script>