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

 <h4>Hi <?php //print_r($emaildata);
 //echo $emaildata['password'];

 //$senddata = $emaildata[0];
 /*[password] => 8857
    [email] => ravali@gmail.com
    [mobile] => 8989898989
    [name] => ravali*/
echo ucfirst($emaildata['name']);
  ?>, Please find Your Order Details</h4>
<p>Thanks for shopping with us</p> 


<div style="background: #e8e2e2;padding: 1px;text-align: center;margin:0px 50px">
    <p>Email : <a href="#"><?php echo $emaildata['email']; ?></a></p>
   
</div>
   
  
<div style="background: #e8e2e2;padding: 5px;text-align: left;margin:10px 40px 0px">
    <div style="padding: 0px 17px">
     <p>Mobile : <a href="#"><?php echo $emaildata['mobile']; ?></a></p>
   
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