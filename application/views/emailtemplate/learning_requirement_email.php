<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width , initial-scale=1">
<!--Google Fonts CDN-->
<link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Poppins|Quattrocento+Sans|Josefin+Sans" rel="stylesheet">

<title> Email</title>
</head>
<body style="font-family: 'Lato', sans-serif;">
<div style="width:600px;margin: 0 auto">
<div style="background:#82ddf7;">
<img src="<?php echo base_url(); ?>assets/images/logo.png" style="margin: 7px 1px 14px 35px;">
<div style="float: right"> 
    <p style="margin-top: 40px;margin-right: 33px"> Call : +91 9553113456  </p>
    <div style="float: right;margin-right: 35px">
      
   
    </div>
    </div></div>
<div style="border: 1px solid #ccc;text-align: center">

 <h4>Hi <?php $senddata = $emaildata[0];
echo $senddata->name;
/*
echo $emaildata['location'];
echo $emaildata['category'];
echo $emaildata['class'];
echo $emaildata['preferred_timing'];
echo $emaildata['subject'];
echo $emaildata['duration'];
*/
  ?>,</h4>
<p>Thanks for Contact with us</p> 


<div style="background: #e8e2e2;padding: 1px;text-align: center;margin:0px 50px">
    <p>Syllabus : <a href="#"><?php echo $senddata->syllabus_name; ?></a></p>
   
</div>
   
    <h4>Message:: </h4>
<div style="background: #e8e2e2;padding: 5px;text-align: left;margin:10px 40px 0px">
    <div style="padding: 0px 17px">
     <p>Mobile : <a href="#"><?php echo $senddata->mobile; ?></a></p>
     <p>Email : <a href="#"><?php echo $senddata->email; ?></a></p>
     <p>Duration : <a href="#"><?php echo $senddata->duration; ?></a></p> 
    <p>Location : <a href="#"><?php echo $senddata->location; ?></a></p>
       <p>Subject : <a href="#"><?php echo $senddata->subject_name; ?></a></p>
    <p>Timing : <a href="#"><?php  echo $senddata->tuition_time; 
     ?></a></p>
    <p>Class : <a href="#"><?php echo $senddata->class_name; ?></a></p>
    <p>Category : <a href="#"><?php echo $senddata->category_name; ?></a></p>
    <p>Syllabus : <a href="#"><?php echo $senddata->syllabus_name; ?></a></p>
     <?php //print_r($senddata);die; ?>
</div>
</div>
    <a herf="<?php base_url();?>"><button type="button" style="padding: 10px 20px;background: #0a91d9; color: #fff;margin-bottom: 15px;margin-top: 10px"> Contact us</button></a>
</div>
<div style="background: #ccc;padding: 1px;text-align: center">
<h5 style="margin-bottom: 10px;margin-top: 10px">Thanks &amp; Regrads</h5>  
<h5 style="margin-top: 0px;margin-bottom: 10px"><b>itsmytutor.com</b></h5>
</div>
</div>
</body>
</html>