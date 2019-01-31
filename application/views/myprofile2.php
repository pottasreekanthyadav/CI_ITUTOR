<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title><?php echo TITLE_PATH;?></title>

<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
<!-- Bootstrap -->
<link href="<?php echo MYCSS_PATH;?>/bootstrap.min.css" type="text/css" rel="stylesheet"  />
<!--custom css-->
  <link href="<?php echo MYCSS_PATH;?>/custom.css" type="text/css" rel="stylesheet"  />
 <!--menu-->
  <link href="<?php echo MYCSS_PATH;?>/menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo MYCSS_PATH;?>/icomoon.css">
  <link href="<?php echo MYCSS_PATH;?>/font-awesome.min.css" rel="stylesheet" />
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
        .side-menu ul { list-style-type: none;background: #ed3f40;padding-left: 0;height: 385px;}
        .side-menu ul li{border-bottom: 1px solid #bbb;padding: 10px 22px;background: #ed3f40} 
        .side-menu ul li:hover{border-bottom: 1px solid #bbb;padding: 10px 22px;background: #ca4344;color: #fff}
        .side-menu ul li.active{border-bottom: 1px solid #ccc;padding: 10px 22px;background: #ca4344;color: #fff}
        .side-menu ul li i:hover{color: #bbb;font-size: 16px;}
        .side-menu ul li i {color: #fff;font-size: 16px;}
        .bg-primary-dark { background-color: #2f80e7;color: #fff!important;}
        .bg-primary-dark2 { background-color: #ffb741;color: #fff!important;}
        .bg-primary-dark3 { background-color: #70bb44;color: #fff!important;}
        .pv-lg {padding-top: 15px!important;padding-bottom: 15px!important;}
        .mt0{margin-top: 0px}
        .side-menu ul li a{color: #fff; font-size: 13px;text-decoration: none}
        .mt9{margin-top: 9px}
        .bootstrap-tagsinput { border: 1px solid #e4e7ea;border-radius: 0px; box-shadow: none; display: block; padding: 7px 12px;}
        .labell-bg {background: #fff;color: #bbb;border: 1px solid;}
        .btn-bg{background-color: #ed3f40;color: #fff}
      </style>
  </head>
  <body class="bg-wh">
   <?php $this->load->view('includes/header.php');?>
   <div class="clearfix"></div>
   <section>
       <div class="col-md-12 signbread hidden">
           <div class="col-md-12 signbread-main">
               <div class="container">
                   <h4>Signup With Us</h4>
                   <h5>Take your Tutoring Career to a higher level with itutor.</h5>
               </div>
           </div>          
           <div class="clearfix"></div>
            <div class="container">
           <h2>Fill the form below&nbsp;:</h2>
           <h3>All below are mandatory.<sup>**</sup></h3>
           </div></div>
            <div class="clearfix">&nbsp;</div>
      </section>
  <!--section dashboard start-->
  <section>
      <div class="container">
      <div class="col-sm-2 no-pad side-menu">  
          <ul>
              <div class="clearfix">&nbsp;</div>
              <li><!--<i class="fa fa-tachometer"></i>--><img src="images/dashboard.png" style="width: 25px;">
                                                              <a href="dashboard.php" > &nbsp; Dashboard</a></li>
              <li class="active"><i class="fa fa-user-circle-o" style="    font-size: 20px;"></i><a href="myprofile.php"> &nbsp; &nbsp;My Profile</a></li> 
              <li><!--<i class="fa fa-male"></i>--><img src="images/parents.png"><a href="#"> &nbsp; Parents Data</a></li>  
              <li><!--<i class="fa fa-hand-pointer-o"></i>--><img src="images/finger.png"><a href="#"> &nbsp; Subscriptions</a></li> 
              <li><!--<i class="fa fa-unlock-alt"></i>--><img src="images/lock.png" style=" width: 19px;"><a href="#"> &nbsp; &nbsp;Change Password</a></li> 
              <li><!--<i class="fa fa-power-off"></i>--><img src="images/power.png" style="width: 19px;"><a href="#"> &nbsp; &nbsp;Logout</a></li> 
        </ul>
          </div>
      <div class="col-sm-10">
          <div class="col-sm-12 inner-bg">
              <div class="clearfix">&nbsp;</div>
           <h4><strong>Edit / Change Profile</strong></h4>
          <hr>
          
          <div>
           <form >
    <div class="form-group col-sm-6">
      <label class="control-label" for="email">Mobile No:</label>
     <input type="email" class="form-control" id="email" placeholder="9493558568" name="email">
    </div>
              
               <div class="form-group col-sm-6">
      <label class="control-label" for="email">Email:</label>
   <input type="email" class="form-control" id="email" placeholder="khaja@gmail.com" name="email">
    </div>
               <div class="clearfix">&nbsp;</div>
    <div class="form-group col-sm-6">
      <label class="control-label" for="pwd" style="margin-bottom:11px">Areas:</label>
     <div class="tags-default">
                               <span class="tag label labell-bg" style="padding:10px">Washington<span data-role="remove" style="font-size:15px">&nbsp; &times; </span></span> &nbsp;  <span class="tag label labell-bg" style="padding:10px">Washington<span data-role="remove" style="font-size:15px">&nbsp; &times; </span></span> &nbsp;  <span class="tag label labell-bg" style="padding:10px">Washington<span data-role="remove" style="font-size:15px">&nbsp; &times; </span></span> &nbsp; 
            <span class="tag label labell-bg" style="padding:10px">Washington<span data-role="remove" style="font-size:15px">&nbsp; &times; </span></span>   </div>
      </div>
   
           
    <div class="form-group col-sm-6">
      <label class="control-label" for="pwd">Timings:</label>
    <input type="password" class="form-control" id="pwd" placeholder="10:00 am to 12:00pm" name="pwd">
   </div>  
               <div class="clearfix">&nbsp;</div>
    <div class="form-group col-sm-6">
      <label class="control-label" for="pwd">Experience:</label>
   <select class="form-control" id="sel1">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
   </div>  
               <div class="form-group col-sm-6">
                    <label class="control-label" for="pwd">Options:</label>
                   <br/>
       <label class="radio-inline">
      <input type="radio" name="optradio">Option 1
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Option 2
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Option 3
    </label>
   </div>
<div class="form-group col-sm-12">
      <div class="clearfix">&nbsp;</div>
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="3" id="comment"></textarea>
</div>
    <div class="form-group">      
       <div class="clearfix">&nbsp;</div> <div class="clearfix">&nbsp;</div>
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-bg col-sm-4">Change</button>
      </div>
           <div class="clearfix">&nbsp;</div>
    </div>
  </form>
          
          </div>
          </div>
      </div>
    </div>
      </section>
  <!--section dashboard end-->
<?php $this->load->view('modal.php');?>
 <div class="clearfix"></div>
 <?php $this->load->view('footer.php');?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo MYJS_PATH;?>/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo MYJS_PATH;?>/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo MYJS_PATH;?>/menu.js"></script>

  </body>
</html>