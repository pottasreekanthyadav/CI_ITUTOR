<html>
<body>
<div style='border:1px solid red;width:600px'>
<p><img src='http://hostelsincity.com/assets/img/logo.png'/></p>
<p style='padding-left:10px;'><b>Dear User,</b></p>
<p><?php echo $user_details['msg'];?></p> 
<p style='color:red;'>This is testing email</p>
<a href="<?php echo $user_details['url'];?>" 
style='background:blue;color:#ffffff;'>Click here
</a>
</div>
</body>
</html>