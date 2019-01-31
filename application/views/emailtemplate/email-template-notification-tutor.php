<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Itsmytutors</title>
<link href="https://fonts.googleapis.com/css?family=Lato|Mukta+Mahee|Open+Sans|Roboto" rel="stylesheet">
<!--      font-family: 'Roboto', sans-serif;
font-family: 'Open Sans', sans-serif;
font-family: 'Mukta Mahee', sans-serif;
font-family: 'Lato', sans-serif;-->
 </head>
<body>
<div style="width:600px;margin:0 auto;border:1px solid #ccc;background-color:#a270d2;color:#fff;height:666px;font-family: 'Lato', sans-serif;">
    <div style="">
	<div style="width:100%;background: #fff;height: 98px;">
    <div style="float:left;width:30%"><img src="images/logo1.png" style="    width: 75%;
    padding: 18px;">
                                 </div>
<!--    <div style="float:right;background-image:url(images/contact.png);background-repeat:no-repeat;background-size:cover"></div>-->
    <div style="float:right">
    <p style="color:#a270d2;margin-right: 17px;"><b> +91 96 7637 2122 </b> </p>
	<a href="#"> <img src="images/fb.png" style="background-color:#a270d2;margin-left: 22px;"> </a>
	<a href="#"> <img src="images/googlepluse.png" style="background-color:#a270d2"> </a>
	<a href="#"> <img src="images/twitter.png" style="background-color:#a270d2"> </a>
	<a href="#"> <img src="images/linkedin.png" style="background-color:#a270d2"> </a>
	
    </div>
	</div>
    <div style="text-align;center">
      <h3>Matching Requirement Tutor.</h3>
        </div></div>
    <div style="padding: 65px 57px 0px;">
    <div style="background-color:#fff;color:#333;padding:1px 7px;border-radius:4px;text-align:center;margin-bottom: 68px;">
	<img src="images/n-i.png" style="width: 31%;padding: 30px 17px;"><?php //print_r($emaildata);  ?>
    <h4 style="text-align:center;font-family: 'Lato', sans-serif;padding:0px 15px;margin-bottom:3px">,</h4>
	<h4  style="text-align:center;font-family: 'Lato', sans-serif;padding:0px 15px;margin-top: 0px;">
        <p><b>Parent Name</b>::<?php echo $emaildata['name']; ?></p>
<p><b>Subject Name</b>::<?php echo $emaildata['subjectname']; ?></p>
<p><b>Syllabus Name</b>::<?php echo $emaildata['syllabus_name']; ?></p>
<p><b>Category Name</b>::<?php echo $emaildata['category_name']; ?></p>
<p><b>Class Name</b>::<?php echo $emaildata['class_name']; ?></p>
<p><b>Client Estimated budget</b>::<?php echo 'Rs.'.$emaildata['budget_price'].' '.$emaildata['budget_type']; ?></p>
</h4>
     <div style="text-align:center">   
        
         <a href="<?php echo base_url(); ?>contact" ><button type="submit" class="btn" style="color: #f9f9f9;
    background-color: #ed3f40 !important;padding:10px 20px;margin-bottom:18px">Contact Us</button></a>
        
        </div>
    
    </div>
    </div>
	<div style="background:#2c343f;color:#fff;text-align:center;padding:10px 0px">
	  <p style="margin-top:0px;margin-bottom:0px">Thanks &amp; Regards</p>
	  <p style="margin-top:5px;margin-bottom:0px"><a href="<?php echo base_url(); ?>">Itsmytutor</a></p>
      <p style="margin-top:5px;margin-bottom:0px"><a href="<?php echo base_url(); ?>contact">Contact US</a></p>
	</div>
    </div>
<!--    main width close-->
  </body>
</html>