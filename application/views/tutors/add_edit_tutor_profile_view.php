
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
<!-- Bootstrap -->
<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"  />
<!--custom css-->
  <link href="<?php echo base_url(); ?>/assets/css/custom.css" type="text/css" rel="stylesheet"  />
 <!--menu-->
  <link href="<?php echo base_url(); ?>/assets/css/menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/icomoon.css">
  <link href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
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
   <?php $this->load->view('includes/header.php'); ?>
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
              <li><!--<i class="fa fa-tachometer"></i>--><img src="<?php echo base_url(); ?>/assets/images/dashboard.png" style="width: 25px;">
                <a href="dashboard.php" > &nbsp; Dashboard</a></li>
              <li class="active"><i class="fa fa-user-circle-o" style="    font-size: 20px;"></i><a href="myprofile.php"> &nbsp; &nbsp;My Profile</a></li> 
              <li><!--<i class="fa fa-male"></i>--><img src="<?php echo base_url(); ?>/assets/images/parents.png"><a href="#"> &nbsp; Parents Data</a></li>  
              <li><!--<i class="fa fa-hand-pointer-o"></i>--><img src="<?php echo base_url(); ?>/assets/images/finger.png"><a href="#"> &nbsp; Subscriptions</a></li> 
              <li><!--<i class="fa fa-unlock-alt"></i>--><img src="<?php echo base_url(); ?>/assets/images/lock.png" style=" width: 19px;"><a href="change_password.php"> &nbsp; &nbsp;Change Password</a></li>  
              <li><!--<i class="fa fa-unlock-alt"></i>--><img src="<?php echo base_url(); ?>/assets/images/lock.png" style=" width: 19px;"><a href="table.php"> &nbsp; &nbsp;Table</a></li> 
              <li><!--<i class="fa fa-power-off"></i>--><img src="<?php echo base_url(); ?>/assets/images/power.png" style="width: 19px;"><a href="#"> &nbsp; &nbsp;Logout</a></li> 
        </ul>
          </div>
      <div class="col-sm-10">
          <div class="col-sm-12 inner-bg">
              <div class="clearfix">&nbsp;</div>
           <h4><strong>Add/Edit Tutor Profile</strong></h4>
          <hr>
          
            <p class="text-success"><?php if(!empty($this->session->flashdata('msg'))) echo $this->session->flashdata('msg'); ?></p>
            <p class="text-danger"><?php if(!empty($err_msg)) echo $err_msg; ?></p>
          
          <div>
           <form name="" action="" method="post" onsubmit=" return validate_profile();" enctype="multipart/form-data" >
            
  <div class="form-group col-sm-6">
          
    <label class="control-label" for="college">selected Categories:</label>
    <input type="text" class="form-control" name="cats" id="cats" value="" readonly>
    <input type="hidden" class="form-control" name="cats_id" id="cats_id" value="" >

    <label class="control-label" for="category">Select categories(Max 2 categories):</label>
    <select class="form-control selectpicker"  name="category[]" id="category"
    style="height: 120px; overflow: auto;" tabindex="" multiple multiple data-max-options="2" data-live-search="true">
        <option value="" disabled="disabled" selected="selected">--Select--</option>
        <option value=""></option>
      <!-- <optgroup  data-max-options="2" >
        <option value=""></option>
      </optgroup> -->
    </select>
 
    <p>Press ctrl to select multiple categories</p>
  </div>
    <div class="form-group col-sm-6">
      <label class="control-label" for="tutor">Select Tutor Type:</label>
      <select class="form-control" name="tutor" id="tutor" value="" tabindex="4">
          <option value="" disabled="disabled" selected="selected">--select--</option>
          <option value=""></option>
      </select> 
    </div>
   <div class="form-group col-sm-6">
            
    <label class="control-label" for="college">selected Languages:</label>
    <input type="text" class="form-control" name="langs" id="langs" value="" readonly>
    <input type="hidden" class="form-control" name="langs_id" id="langs_id" value="" >
    <label class="control-label" for="language">Language Know:</label>
    <select class="form-control" name="language[]" id="language" multiple="multiple" style="height: 120px; overflow: auto;" tabindex="" >
        <option value="" disabled="disabled" selected="selected">--select--</option>
        <option value=""></option>
    </select>
  
    <p>Press ctrl to select multiple languages</p>
  </div>
  <div class="form-group col-sm-6">
      <label class="control-label" for="college">Qualification:</label>
      <input type="text" class="form-control" name="hqualification" id="hqualification" value="" readonly>
      <label class="control-label" for="qualification">Qualification:</label>
      <select class="form-control" name="qualification" id="qualification" tabindex="4">
        <option disabled="disabled" selected="selected">--select--</option>
        <option value="" ></option>
      </select>
  </div>
  <div class="form-group col-sm-6">
      <label class="control-label" for="college">College/University Name:</label>
      <input type="text" class="form-control" name="college" id="college" value="" placeholder="College/University Name">
  </div>
  <div class="form-group col-sm-6">
    <label class="control-label" for="working">Working school/college:</label>
      <select class="form-control" name="working" id="working" tabindex="2">
          <option disabled="disabled" selected="selected">--select--</option>
          <option value="yes" >yes</option>
          <option value="no"  >no</option>
      </select>
  </div>
  <div class="form-group col-sm-6">
      <label class="control-label" for="teaching">Teaching Experience:</label>
      <select class="form-control" name="teaching_exp" id="teaching_exp" tabindex="4">
          <option disabled="disabled" selected="selected">--select--</option>
      
          <option value="1 year"  >1 year</option>
          <option value="2 year" >2 year</option>
          <option value="3 year" >3 year</option>
          <option value="4 year" >4 year</option>
          <option value="5 year" >5 year</option>
          <option value="6 year" >6 year</option>
          <option value="7 year" >7 year</option>
          <option value="8 year" >8 year</option>
          <option value="9 year" >9 year</option>
          <option value="10 year" >10 year</option>
      </select>
  </div>
  <div class="form-group col-sm-6">
      <label class="control-label" for="syllabus">Select Syllabus:</label>
      <select class="form-control" name="syllabus" id="syllabus" tabindex="4">
          <option disabled="disabled" selected="selected">--select--</option>
          <option value=""></option>
      </select>
      <p>Press ctrl to select multiple Syllabus</p>
  </div>
   <div class="form-group col-sm-6">
      <label class="control-label" for="subject">Select Subject:</label>
      <select class="form-control" name="subject" id="subject" tabindex="3">
        <option value="" disabled="disabled" selected="selected">--select--</option>
        <option value=""></option>
      </select>
  </div>
  
    
  <div class="form-group col-sm-6">
      <label class="control-label" for="location">Location:</label>
     <input type="text" class="form-control" name="location" id="location" value="" placeholder="Madhapur" ></br>
     <input type="text" class="form-control" name="location" id="location" value=""  placeholder="Banjara Hills" >
  </div> 
    <div class="form-group col-sm-6">
      <label class="control-label" for="time">Preferable Time:</label>
   <select class="form-control" name="time" id="time" tabindex="2">
    <option disabled="disabled" selected="selected">--select--</option>
    <option value="7am-9am" >7am-9am</option>
    <option value="9am-11am" >9am-11am</option>
  </select>
  
   </div>
   <div class="form-group col-sm-6">
      <label class="control-label" for="location">Select Location:</label>
   <select class="form-control" name="location" id="location" tabindex="">
    <option disabled="disabled" selected="selected">--select--</option>
   
      <option value="></option>
     
  </select>
 
   </div>

   <div class="form-group col-sm-6">
      <label class="control-label" for="birth">Date of birth:</label>
      
     <input type="text" class="form-control" name="birth" value="" id="birth" placeholder="Enter your Date of Birth" >
    
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label" for="mobile">Mobile No:</label>
     <input type="text" class="form-control" name="mobile" id="mobile" value="" placeholder="enter mobile no." >
     
    </div>
              
    <div class="form-group col-sm-6">
      <label class="control-label" for="email">Email:</label>
   <input type="email" class="form-control" name="email" id="email" value="" placeholder="enter email id" >
   
    </div>
    
    <div class="form-group col-sm-6">
      <label class="control-label" for="reference">Reference Id:</label>
     <input type="text" class="form-control" name="reference" id="reference" value="" placeholder="Reference Id" >
     
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label" for="come">How you come to know about this website:</label>
     <input type="text" class="form-control" name="come" id="come" value="" placeholder="Ex. Friends, News paper, Social network etc,,">
     <?php echo form_error('come'); ?>
    </div>
    <div class="form-group col-sm-6">
        <div class="form-group sky-form">
            <label>Upload your Picture<sup>*</sup></label>
              <input type="file" name="picture" id="picture" class="form-control" placeholder="" />
        </div>
          <p class="err">&nbsp;</p>
          <?php echo form_error('picture'); ?>
    </div>
    <div class="form-group col-sm-6">
        <div class="form-group sky-form">
            <label>Upload your Resume<sup>*</sup></label>
            <input type="file" name="resume" id="resume" class="form-control" placeholder="" />
            </div>
              <p class="err">&nbsp;</p>
              <?php echo form_error('resume'); ?>
    </div>
    <div class=form-group col-sm-6">
          <div class="form-group sky-form">
            <label>About you(Max 300 Character)<sup>*</sup></label>
              <textarea class="form-control" name="about" id="about" style="width: 400px;"></textarea>
          </div>
          <p class="err">&nbsp;</p>
          
    </div>
    <div class="form-group">      
       <div class="clearfix">&nbsp;</div> <div class="clearfix">&nbsp;</div>
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="btn_submit" class="btn btn-bg col-sm-4">Add/Edit</button>
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
<?php $this->load->view('includes/modal.php'); ?>
 <div class="clearfix"></div>
 <?php $this->load->view('includes/footer.php'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script type="<?php echo base_url(); ?>/assets/text/javascript" src="js/menu.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </body>
</html>
<script type="text/javascript">


        $(document).ready(function() {

          var last_valid_selection = null;

          $('#category').change(function(event) {

            if ($(this).val().length > 2) {

              $(this).val(last_valid_selection);
            } else {
              last_valid_selection = $(this).val();
            }
          });
        });
        </script>
<script type="text/javascript">
  function validate_profile()
  {
    //alert('hi................');exit;
    var flag=true;
    var category=$('#category').val();
    var tutor=$('#tutor').val();
    var language=$('#language').val();
    var qualification=$('#qualification').val();
    var college=$('#college').val();
    var working=$('#working').val();
    var teaching_exp=$('#teaching_exp').val();
    
    var syllabus=$('#syllabus').val();
    var subject=$('#subject').val();
    var location=$('#location').val();
    var time=$('#time').val();
    var birth=$('#birth').val();
    var mobile=$('#mobile').val();
    var email=$('#email').val();
    var reference=$('#reference').val();
    var come=$('#come').val();
    // var picture=$('#picture').val();
    // var resume=$('#resume').val();
    var about=$('#about').val();
    if(category=="")
      {
          flag=false;
          $('#category').css('border','1px solid red');
      }
      else
      {
          $('#category').css('border','1px solid green');
      }
      if(tutor==null)
      {
          flag=false;
          $('#tutor').css('border','1px solid red');
      }
      else
      {
          $('#tutor').css('border','1px solid green');
      }
      if(language=="")
      {
          flag=false;
          $('#language').css('border','1px solid red');
      }
      else
      {
          $('#language').css('border','1px solid green');
      }
      if(qualification==null)
      {
          flag=false;
          $('#qualification').css('border','1px solid red');
      }
      else
      {
          $('#qualification').css('border','1px solid green');
      }
      if(college=="")
      {
          flag=false;
          $('#college').css('border','1px solid red');
      }
      else
      {
          $('#college').css('border','1px solid green');
      }
      if(working==null)
      {
          flag=false;
          $('#working').css('border','1px solid red');
      }
      else
      {
          $('#working').css('border','1px solid green');
      }
      if(teaching_exp==null)
      {
          flag=false;
          $('#teaching_exp').css('border','1px solid red');
      }
      else
      {
          $('#teaching_exp').css('border','1px solid green');
      }
      
      if(syllabus==null)
      {
          flag=false;
          $('#syllabus').css('border','1px solid red');
      }
      else
      {
          $('#syllabus').css('border','1px solid green');
      }
      if(subject==null)
      {
          flag=false;
          $('#subject').css('border','1px solid red');
      }
      else
      {
          $('#subject').css('border','1px solid green');
      }
      // if(location==null)
      // {
      //     flag=false;
      //     $('#location').css('border','1px solid red');
      // }
      // else
      // {
      //     $('#location').css('border','1px solid green');
      // }
      // if(time==null)
      // {
      //     flag=false;
      //     $('#time').css('border','1px solid red');
      // }
      // else
      // {
      //     $('#time').css('border','1px solid green');
      // }
      // if(birth=="")
      // {
      //     flag=false;
      //     $('#birth').css('border','1px solid red');
      // }
      // else
      // {
      //     $('#birth').css('border','1px solid green');
      // }
      // if(mobile=="")
      // {
      //     flag=false;
      //     $('#mobile').css('border','1px solid red');
      // }
      // else
      // {
      //     $('#mobile').css('border','1px solid green');
      // }
      // if(email=="")
      // {
      //     flag=false;
      //     $('#email').css('border','1px solid red');
      // }
      // else
      // {
      //     $('#email').css('border','1px solid green');
      // }
      // if(reference=="")
      // {
      //     flag=false;
      //     $('#reference').css('border','1px solid red');
      // }
      // else
      // {
      //     $('#reference').css('border','1px solid green');
      // }
      // if(come=="")
      // {
      //     flag=false;
      //     $('#come').css('border','1px solid red');
      // }
      // else
      // {
      //     $('#come').css('border','1px solid green');
      // }
      // if(upload=="")
      // {
      //     flag=false;
      //     $('#upload').css('border','1px solid red');
      // }
      // else
      // {
      //     $('#upload').css('border','1px solid green');
      // }
      // if(resume=="")
      // {
      //     flag=false;
      //     $('#resume').css('border','1px solid red');
      // }
      // else
      // {
      //     $('#resume').css('border','1px solid green');
      // }
      // if(about=="")
      // {
      //     flag=false;
      //     $('#about').css('border','1px solid red');
      // }
      // else
      // {
      //     $('#about').css('border','1px solid green');
      // }
      return flag;
  }
</script>
<script type="text/javascript">
  $('#birth').datepicker({changeMonth: true,
      changeYear: true,
      yearRange: "1970:2018",
    dateFormat:"dd-mm-yy"});
  $('#to').datepicker({dateFormat:"dd-mm-yy"});
</script>