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
<link rel="canonical" href="<?php echo base_url(); ?>tutor/payment" />
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
      
    <style>
        .register .input-group .input-group-addon{border: 1px solid #ccc;border-right: none;}
        .register .input-group {padding: 9px 2px;}
        .register .input-group .form-control{height: 45px !important}
        .pad5{    padding: 5px 21px 6px 0px !important}
        .btn-label {border: 1px solid #fff;padding: 10px 10px}
        .btn-facebook { color: #fff!important;background-color: #3b5998!important;}
        .btn-googleplus { color: #fff!important;background-color: #dd4b39!important;}
        .mt0{margin-top: 0px}
        .side-menu ul li a{color: #fff; font-size: 13px;text-decoration: none}
        .mt9{margin-top: 9px}
        .bootstrap-tagsinput { border: 1px solid #e4e7ea;border-radius: 0px; box-shadow: none; display: block; padding: 7px 12px;}
        .labell-bg {background: #fff;color: #bbb;border: 1px solid;}
        .btn-bg{background-color: #ed3f40;color: #fff}
      </style>
  </head>
  <body class="bg-wh">
   <?php $this->load->view('rentabook/includes/header_new'); ?>
   <div class="clearfix"></div>

  <!--section dashboard start-->
 <section>
      <div class="bg-back container-fluid"  style="background-image:url('<?php echo base_url();?>assets/images/bg-back.jpg')">
      <div class="container">
      <?php $this->load->view("tutors/tutor-dash-sidebar");?>

      <div class="col-sm-10">
          <div class="col-sm-12 inner-bg no-padd m-t-10">
            
           <h4 class="title-hd"><strong>Order Details</strong></h4>
        
<div class="col-sm-12">

          
          <div class="col-sm-12 table-responsive">
            <?php if($this->session->flashdata('success_parent')) { ?>
                                <div class="alert alert-success" id="temp">
                                <?php echo $this->session->flashdata('success_parent'); ?>
                                </div>
                                <?php } ?>

  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                                <tr class="tb-head">
                                <th>Book image</th>
                                <th>Book Name</th>
                                <th>Qty</th>
                                <th> Price + Shipping</th>
                                <th>Total Price</th>
                                <th>Deliver Date</th>
                                <th>Order Status</th>

                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($orderResult as $row) {
                            
                          ?>
                    <tr>
                      <td><img src="<?php echo base_url().'uploads/books/books_images/'.$row->image;?>" class="img-responsive" style="width: 75px;height: 55px;"></td>        
                      <td><?php echo $row->title; ?></td>        
                      <td><?php echo $row->qty ?></td>        
                      <td><?php echo $row->price ?> + <?php echo $row->shipping_charge ?></td>        
                      <td><?php echo $row->total ?></td>        
                      <td>11/12/2018</td>        
                      <td><?php if($row->order_status == 1){echo "<b style='color:#f39c12'>Order Placed</b>";}
                                elseif($row->order_status == 2){echo "<b style='color:#3c8dbc'>Approved</b>";}
                                elseif($row->order_status == 3){echo "<b style='color:#dd4b39'>Cancelled</b>";}
                                elseif($row->order_status == 4){echo "<b style='color:#00a65a'>Delivered</b>";}
                       ?></td>        
                    </tr>
                  <?php } ?>


                        </tbody>
                   
                    </table>

              </div></div></div></div>
             
            <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
     </div>
          </section>
                <!--section dashboard end-->
      <?php $this->load->view('includes/modal'); ?>
 <div class="clearfix"></div>
 <?php $this->load->view('includes/footer'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--    <script src="<?php echo MYJS_PATH;?>/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo MYJS_PATH;?>/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo MYJS_PATH;?>/menu.js"></script>
      
 <script type="text/javascript">
      function navigate_now(){
        location.href="<?php base_url();?>payment/1";
      }
    </script>
  </body>
</html>
