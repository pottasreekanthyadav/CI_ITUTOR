
<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
    .active_step{
      font-weight: 600;
      font-size: 17px;
    }
  </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
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
<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32"> 
<!-- Bootstrap -->
<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"  />
<!--custom css-->
  <link href="<?php echo base_url(); ?>/assets/css/custom.css" type="text/css" rel="stylesheet"  />
 <!--menu-->
  <link href="<?php echo base_url(); ?>/assets/css/menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/icomoon.css">
  <link href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file: -->
    <!--[if lt IE 9]>
      <script src="https:oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .register .input-group .input-group-addon{border: 1px solid #ccc;border-right: none;}
        .register .input-group {padding: 9px 2px;}
        .register .input-group .form-control{height: 45px !important}
        .pad5{    padding: 5px 21px 6px 0px !important}
        .btn-label {border: 1px solid #fff;padding: 10px 10px}
        .btn-facebook { color: #fff!important;background-color: #3b5998!important;}
        .btn-googleplus { color: #fff!important;background-color: #dd4b39!important;}

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
         .project-images{ width: 24%;height: 220px;}
        .info {background-color: #e7f3fe;border-left: 6px solid #2196F3;}
        .no-bod-rad{border-radius: 0px !important}
        label{margin-top: 10px;margin-bottom: 10px}
        .form-control{border-radius: 0px !important}
        .site-col{color: #ed3f40}
</style>
  </head>
  <body class="bg-wh">
   <?php $this->load->view('includes/header.php'); ?>
   <div class="clearfix"></div>

  <!--section dashboard T-->
  <section>
    <form id="tutor_update" method="post" action="<?php echo base_url();?>tutor/update-profile" enctype="multipart/form-data">
       <div class="bg-back container-fluid"  style="background-image:url('<?php echo base_url();?>assets/images/bg-back.jpg')">
      <div class="container">
      <?php $this->load->view("tutors/tutor-dash-sidebar.php");?>
      <div class="col-sm-10">
          <div class="col-sm-12 no-padd bg-wh m-t-10">
             
           <h4 class="title-hd"><strong>Update Profile</strong></h4>
     
          <div class="col-sm-12 updateprofile m-t-10">
            <ul class="nav nav-tabs">
                <li class="active col-sm-3 text-center no-padd home active_step" id="step1">Step 1</li>
                <li class="col-sm-3 text-center no-padd menu1" id="step2"><span>Step 2</span></li>
                <li class="col-sm-3 text-center no-padd menu2" id="step3"><span>Step 3</span></li>
            </ul>
  <div class="tab-content">
     
    <div id="home" class="tab-pane fade in active">
     <div class="col-sm-12">
      <p class="text-success"><?php $msg=$this->session->flashdata('msg'); if(!empty($msg)) echo $msg;?></p>
            <p class="text-danger"><?php $err_msg=$this->session->flashdata('err_msg'); if(!empty($err_msg)) echo $err_msg;?></p>
       

          <div class="clearfix">&nbsp;</div>     
        <div class="col-sm-6">
          <div class="form-group ">
              <?php if(!empty($multi_cats))
              {
              foreach($multi_cats as $row)
                       {
                        ?>
<!--                        <div class="fcbtn btn btn-info btn-outline btn-1e  no-bod-rad">-->
  <p style="font-size: 13px !important;margin-bottom: 4px !important;" class="bg-primary"><strong> &nbsp; Selected Categories : </strong><?php echo common_str($row->cats);?></p>
<!--/div>-->
                <?php
                       }
                     }
                       ?>
    </div>
    <label class="control-label" for="category">Select Categories(Max 2 Categories):</label>
   
    <div class="col-sm-12 fm-bd cat1"> 
    <?php $cat3=$multi_catsid[0];
    $cat_arr= explode(',',$cat3->catsid); ?>
 <?php 
    if(!empty($cat))
    {
    foreach($cat as $row)
    {
      // foreach($multi_catsid as $row1)
      //                  {
?>
     <div class="col-sm-6">
    <label class="customcheck"><?php echo ucwords($row->category_name);?>
          <input type="checkbox" name="category[]" value="<?php echo $row->category_id;?>"  id="category" <?php if(in_array($row->category_id, $cat_arr)){echo "checked"; } ?>>
          <span class="checkmark"></span>
        </label> 
    </div>
   
          <?php
    // }
  }
  }
    ?>
  </div>
  <?php echo form_error('category'); ?>
  </div>
<div class="col-sm-6">
    <div class="form-group">
              <?php
              if(!empty($multi_lang))
              {
               foreach($multi_lang as $row)
                       {
                        ?>
                     

  <p style="font-size: 13px !important;
    margin-bottom: 4px !important;" class="bg-primary"><strong> &nbsp;  Selected Languages: </strong><?php echo common_str($row->langs);?></p>

                <?php
                       }
                     }
                       ?>
    </div>
      <label class="control-label" for="language">Language Know:</label><br/>

    <div class="col-sm-12 fm-bd lang1">
     <?php $lang3=$multi_langid[0];
    $lang_arr= explode(',',$lang3->langid); ?> 
   <?php
    if(!empty($language))
    {
    foreach($language as $row)
    {
      ?>
    <div class="col-sm-6">
    <label class="customcheck"><?php echo ucfirst($row->language);?>
          <input type="checkbox"  name="language[]"  value="<?php echo $row->lid;?>" id="language" <?php if(in_array($row->lid,$lang_arr)) echo "checked" ;?>>
          <span class="checkmark"></span>
        </label> 
    </div>
         <?php
    }
}
    ?>
  </div>
  <?php echo form_error('language'); ?>
   </div>
   <div class="form-group col-sm-6 gender">
      <label class="control-label">Gender</label>    
      <div class="form-group col-sm-12" id="gender">
        <div class="form-group col-sm-6">
          <?php 
          if(!empty($user_data))
          {
          if($user_data->gender=="male")
          {
            ?>
       <input type="radio" name="gender" value="male" checked> Male</div>

     <div class="form-group col-sm-6">
  <input type="radio" name="gender" value="female">Female
</div>
<?php }
else
{
  ?>
<input type="radio" name="gender" value="male"> Male</div>

     <div class="form-group col-sm-6">
  <input type="radio" name="gender" value="female" checked>Female
</div>
<?php } } ?>

    </div>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label" for="qualification">Qualification:</label>
   <select class="form-control" name="qualification" id="qualification" tabindex="4">
    <option disabled="disabled"value="">--select--</option>
    <?php
    if(!empty($resp))
    {

    foreach($resp as $row)
    {

      ?>
      <option value="<?php echo $row->qid;?>" <?php if($user_data->qualification==$row->qid) echo "selected";?>><?php echo 
      ucwords($row->qualification);?></option>
      <?php
    }
  }
    ?>
  </select>
  <?php echo form_error('qualification'); ?>
   </div>
     <div class="form-group col-sm-6 class">

       </div>
   <div class="form-group col-sm-6">
      <label class="control-label" for="college">College/University Name:</label>
     <input type="text" class="form-control" name="college" id="college" value="<?php echo $user_data->collage_name;?>" placeholder="College/University Name">
     <?php echo form_error('college'); ?>
    </div>
    

    
         <div class="col-sm-12 text-center">
             <div class="clearfix">&nbsp;</div>
             <div class="clearfix">&nbsp;</div>
           <button type="button" class="btn btn-warning no-bod-rad col-sm-4 col-sm-offset-4 btn-lg" id="next1" data-toggle="tab"> Next</button>
         </div>
        </div>
    </div>
    <div id="menu1" class="tab-pane fade">
    <div class="form-group col-sm-6">
     <div class="form-group">
              <?php if(!empty($multi_syl)) 
              {
              foreach($multi_syl as $row)
                       {
                        ?>
                     
  <p style="font-size: 13px !important;
    margin-bottom: 4px !important;margin-top: 16px;" class="bg-primary"><strong> &nbsp; Selected Syllabus: </strong><?php echo common_str($row->syllabus);?></p>

                <?php
                       }
                     }
                       ?>
            
    </div>
      <label class="control-label" for="syllabus">Select Syllabus:</label><br/>
<div class="col-sm-12 fm-bd">
   <?php $syl3=$multi_sylid[0];
    $syl_arr= explode(',',$syl3->sylid); ?> 
  <?php 
    if(!empty($syllabus))
    {
    foreach($syllabus as $row)
    {                 
      ?>
     <div class="col-sm-6">
    <label class="customcheck"><?php echo strtoupper($row->syllabus_name);?>
          <input type="checkbox" name="syllabus[]" id="syllabus" value="<?php echo $row->syllabus_id;?>" <?php if(in_array($row->syllabus_id,$syl_arr)) echo "checked";?>>
          <span class="checkmark"></span>
        </label> 
    </div>  
          <?php
    // }
  }
  }
    ?>
  </div>
  <?php echo form_error('syllabus'); ?>
     </div>
        
        <div class="col-sm-6">
    <div class="form-group">
      <?php //print_r($multi_sub); ?>
            <?php if(!empty($multi_sub))
              {
                        ?>
                      
  <p style="font-size: 13px !important;
    margin-bottom: 4px !important;margin-top: 16px;" class="bg-primary"><strong> &nbsp; Selected Subjects: </strong><?php echo common_str($multi_sub->subjects);?></p>

                <?php
                     }
                       ?>
    </div>
     <?php $sub3=$multi_subid[0];
     $sub = $sub3->subid;
    $sub_arr= explode(',',$sub); ?>
        <label class="control-label" for="subject">Select Subject:</label><br/>

        <div class="col-sm-12 fm-bd sub1">
          
  </div>
  <div id="subject_error" style="color:red"></div>
  <?php echo form_error('subject'); ?>
   </div>
        
        <div class="form-group col-sm-6">
      <label class="control-label" for="teaching">Teaching Experience:</label>
   <select class="form-control" style="margin-top: 18px;" name="teaching" id="teaching_exp" tabindex="4">
    <option disabled="disabled" value="">--select--</option>
  <option value="1" <?php echo set_select('teaching','1 year');if(!empty($user_data->experience)&& ($user_data->experience=="1"))echo "selected"; ?> >0-1 Year</option>
    <option value="2" <?php echo set_select('teaching','2 year');if(!empty($user_data->experience) && ($user_data->experience=="2")) echo "selected";?>>2 Years</option>
    <option value="3" <?php echo set_select('teaching','3 year');if(!empty($user_data->experience) && ($user_data->experience=="3")) echo "selected";?>>3 Years</option>
    <option value="4" <?php echo set_select('teaching','4 year');if(!empty($user_data->experience) && ($user_data->experience=="4"))echo "selected";?>>4 Years</option>
    <option value="5" <?php echo set_select('teaching','5 year');if(!empty($user_data->experience) && ($user_data->experience=="5")) echo "selected";?>>5 Years</option>
    <option value="6" <?php echo set_select('teaching','6 year');if(!empty($user_data->experience) && ($user_data->experience=="6")) echo "selected";?>>6 Years</option>
    <option value="7" <?php echo set_select('teaching','7 year'); if(!empty($user_data->experience)&& ($user_data->experience=="7")) echo "selected";?>>7 Years</option>
    <option value="8" <?php echo set_select('teaching','8 year'); if(!empty($user_data->experience) && ($user_data->experience=="8"))echo "selected";?>>8 Years</option>
    <option value="9" <?php echo set_select('teaching','9 year'); if(!empty($user_data->experience) && ($user_data->experience=="9")) echo "selected";?>>9 Years</option>
    <option value="10" <?php echo set_select('teaching','10 year'); if(!empty($user_data->experience) && ($user_data->experience=="10")) echo "selected";?>>10 Years</option>
     <option value="11" <?php echo set_select('teaching','11 year'); if(!empty($user_data->experience) && ($user_data->experience=="11")) echo "selected";?>>11 Years</option>
    <option value="12" <?php echo set_select('teaching','12 year'); if(!empty($user_data->experience) && ($user_data->experience=="12")) echo "selected";?>>12 Years</option>
    <option value="13" <?php echo set_select('teaching','13 year'); if(!empty($user_data->experience) && ($user_data->experience=="13")) echo "selected";?>>13 Years</option>
    <option value="14" <?php echo set_select('teaching','14 year'); if(!empty($user_data->experience) && ($user_data->experience=="14")) echo "selected";?>>14 Years</option>
    <option value="15" <?php echo set_select('teaching','15 year'); if(!empty($user_data->experience) && ($user_data->experience=="15")) echo "selected";?>>15 Years</option>
    <option value="15+" <?php echo set_select('teaching','10 year'); if(!empty($user_data->experience) && ($user_data->experience=="15+")) echo "selected";?>>15+</option>
  </select>
  <?php echo form_error('teaching'); ?>
     </div>
        
        <div class="form-group col-sm-6">
  <label class="control-label" for="time">Preferable Time:</label>
  <div id="app">
    <?php
    if(!empty($multi_times))
    {
      $i=0;
    foreach($multi_times as $time)
    {
      $timing=explode('to', $time->timing);
      $from_time = rtrim($timing[0]);
    if($from_time=='12:00am')
    {
      $from_time_val=1;
    }elseif($from_time=='12:30am')
    {
      $from_time_val=2;
    }
    elseif($from_time=='1:00am')
    {
      $from_time_val=3;
    }    elseif($from_time=='1:30am')
    {
      $from_time_val=4;
    }    elseif($from_time=='2:00am')
    {
      $from_time_val=5;
    }    elseif($from_time=='2:30am')
    {
      $from_time_val=6;
    }    elseif($from_time=='3:00am')
    {
      $from_time_val=7;
    }    elseif($from_time=='3:30am')
    {
      $from_time_val=8;
    }    elseif($from_time=='4:00am')
    {
      $from_time_val=9;
    }    elseif($from_time=='4:30am')
    {
      $from_time_val=10;
    }    elseif($from_time=='5:00am')
    {
      $from_time_val=11;
    }    elseif($from_time=='5:30am')
    {
      $from_time_val=12;
    }    elseif($from_time=='6:00am')
    {
      $from_time_val=13;
    }    elseif($from_time=='6:30am')
    {
      $from_time_val=14;
    } elseif($from_time=='7:00am')
    {
      $from_time_val=15;
    } elseif($from_time=='7:30am')
    {
      $from_time_val=16;
    } elseif($from_time=='8:00am')
    {
      $from_time_val=17;
    } elseif($from_time=='8:30am')
    {
      $from_time_val=18;
    } elseif($from_time=='9:00am')
    {
      $from_time_val=19;
    } elseif($from_time=='9:30am')
    {
      $from_time_val=20;
    } elseif($from_time=='10:00am')
    {
      $from_time_val=21;
    } elseif($from_time=='10:30am')
    {
      $from_time_val=22;
    } elseif($from_time=='11:00am')
    {
      $from_time_val=23;
    } elseif($from_time=='11:30am')
    {
      $from_time_val=24;
    } elseif($from_time=='12:00pm')
    {
      $from_time_val=25;
    } elseif($from_time=='12:30pm')
    {
      $from_time_val=26;
    } elseif($from_time=='1:00pm')
    {
      $from_time_val=27;
    } elseif($from_time=='1:30pm')
    {
      $from_time_val=28;
    } elseif($from_time=='2:00pm')
    {
      $from_time_val=29;
    } elseif($from_time=='2:30pm')
    {
      $from_time_val=30;
    } elseif($from_time=='3:00pm')
    {
      $from_time_val=31;
    } elseif($from_time=='3:30pm')
    {
      $from_time_val=32;
    } elseif($from_time=='4:00pm')
    {
      $from_time_val=33;
    } elseif($from_time=='4:30pm')
    {
      $from_time_val=34;
    } elseif($from_time=='5:00pm')
    {
      $from_time_val=35;
    } elseif($from_time=='5:30pm')
    {
      $from_time_val=36;
    } elseif($from_time=='6:00pm')
    {
      $from_time_val=37;
    } elseif($from_time=='6:30pm')
    {
      $from_time_val=38;
    } elseif($from_time=='7:00pm')
    {
      $from_time_val=39;
    } elseif($from_time=='7:30pm')
    {
      $from_time_val=40;
    } elseif($from_time=='8:00pm')
    {
      $from_time_val=41;
    } elseif($from_time=='8:30pm')
    {
      $from_time_val=42;
    } elseif($from_time=='9:00pm')
    {
      $from_time_val=43;
    } elseif($from_time=='9:30pm')
    {
      $from_time_val=44;
    } elseif($from_time=='10:00pm')
    {
      $from_time_val=45;
    } elseif($from_time=='10:30pm')
    {
      $from_time_val=46;
    } elseif($from_time=='11:00pm')
    {
      $from_time_val=47;
    }
     elseif($from_time=='11:30pm')
    {
      $from_time_val=48;
    }
    else
    {
      $from_time_val='';
    }
    //echo $from_time_val;exit;
    $to = ltrim($timing[1]);
    if($to=='12:00am')
    {
      $to_time_value=1;
    }elseif($to=='12:30am')
    {
      $to_time_value=2;
    }
    elseif($to=='1:00am')
    {
      $to_time_value=3;
    }    elseif($to=='1:30am')
    {
      $to_time_value=4;
    }    elseif($to=='2:00am')
    {
      $to_time_value=5;
    }    elseif($to=='2:30am')
    {
      $to_time_value=6;
    }    elseif($to=='3:00am')
    {
      $to_time_value=7;
    }    elseif($to=='3:30am')
    {
      $to_time_value=8;
    }    elseif($to=='4:00am')
    {
      $to_time_value=9;
    }    elseif($to=='4:30am')
    {
      $to_time_value=10;
    }    elseif($to=='5:00am')
    {
      $to_time_value=11;
    }    elseif($to=='5:30am')
    {
      $to_time_value=12;
    }    elseif($to=='6:00am')
    {
      $to_time_value=13;
    }    elseif($to=='6:30am')
    {
      $to_time_value=14;
    } elseif($to=='7:00am')
    {
      $to_time_value=15;
    } elseif($to=='7:30am')
    {
      $to_time_value=16;
    } elseif($to=='8:00am')
    {
      $to_time_value=17;
    } elseif($to=='8:30am')
    {
      $to_time_value=18;
    } elseif($to=='9:00am')
    {
      $to_time_value=19;
    } elseif($to=='9:30am')
    {
      $to_time_value=20;
    } elseif($to=='10:00am')
    {
      $to_time_value=21;
    } elseif($to=='10:30am')
    {
      $to_time_value=22;
    } elseif($to=='11:00am')
    {
      $to_time_value=23;
    } elseif($to=='11:30am')
    {
      $to_time_value=24;
    } elseif($to=='12:00pm')
    {
      $to_time_value=25;
    } elseif($to=='12:30pm')
    {
      $to_time_value=26;
    } elseif($to=='1:00pm')
    {
      $to_time_value=27;
    } elseif($to=='1:30pm')
    {
      $to_time_value=28;
    } elseif($to=='2:00pm')
    {
      $to_time_value=29;
    } elseif($to=='2:30pm')
    {
      $to_time_value=30;
    } elseif($to=='3:00pm')
    {
      $to_time_value=31;
    } elseif($to=='3:30pm')
    {
      $to_time_value=32;
    } elseif($to=='4:00pm')
    {
      $to_time_value=33;
    } elseif($to=='4:30pm')
    {
      $to_time_value=34;
    } elseif($to=='5:00pm')
    {
      $to_time_value=35;
    } elseif($to=='5:30pm')
    {
      $to_time_value=36;
    } elseif($to=='6:00pm')
    {
      $to_time_value=37;
    } elseif($to=='6:30pm')
    {
      $to_time_value=38;
    } elseif($to=='7:00pm')
    {
      $to_time_value=39;
    } elseif($to=='7:30pm')
    {
      $to_time_value=40;
    } elseif($to=='8:00pm')
    {
      $to_time_value=41;
    } elseif($to=='8:30pm')
    {
      $to_time_value=42;
    } elseif($to=='9:00pm')
    {
      $to_time_value=43;
    } elseif($to=='9:30pm')
    {
      $to_time_value=44;
    } elseif($to=='10:00pm')
    {
      $to_time_value=45;
    } elseif($to=='10:30pm')
    {
      $to_time_value=46;
    } elseif($to=='11:00pm')
    {
      $to_time_value=47;
    }
     elseif($to=='11:30pm')
    {
      $to_time_value=48;
    }
    else
    {
      $to_time_value='';
    }
        ?>
       <div class="form-group col-sm-12">
            <div class="form-group col-sm-5">
              From:<select name="frm_time[]" class="form-control time_picker ui-timepicker-input frm_time" placeholder="09:20am" autocomplete="off"><option value='<?php echo $from_time_val; ?>'><?php echo $from_time; ?></option></select>
      </div>
          <div class="form-group col-sm-5">
            To:<select type="text" name="to1_time[]" class="form-control time_picker ui-timepicker-input to_time" placeholder="01:30pm" autocomplete="off"><option value="<?php echo $to_time_value; ?>"><?php echo $to; ?></option></select>
          </div>
          <?php
          if($i==0)
          {
            ?>
          <div class="form-group col-sm-2">
            <span><p class="fcbtn btn btn-info btn-outline btn-1e  no-bod-rad" id="add_field_button" style="margin-top: 19px"><i class="fa fa-plus"></i> </p></span>
          </div>
          <?php
        }
        else
        {
          ?>
          <span class="form-group col-sm-2"><button class="btn btn-danger btn_remove"  id="remove_field" style="margin-top:19px">x</button></span>
          <?php
        }
        ?>
          </div>    
          <?php   
          $i++; 
      }
     
    }
 ?>
  </div>
   </div>
      
   <div class="form-group col-sm-6">
  <label class="control-label" for="birth">Location:</label>
  <?php
  $multi_locations = json_decode($multi_locations);
  if($multi_locations->code == 204)
  {
    ?>
      <div id="area_fields">
      <div class="clearfix">
      <div class="form-group col-sm-10">
    <input type="text" class="form-control" name="location[]" id="location" placeholder="Enter location" onclick="a(this.id);">
    <input type="hidden" id="lat" name="latitude[]" value="0">
    <input type="hidden" id="lng" name="longitude[]" value="0">
  </div>
     <div class="form-group col-sm-2">
        <span><p class="fcbtn btn btn-info btn-outline btn-1e  no-bod-rad" id="add"><i class="fa fa-plus"></i></p></span>
      </div>
    </div>
    </div>
    <?php
  }
  else
  {
    $count = $multi_locations->count;
     $res = $multi_locations->res;
    for($i = 0; $i < $count; $i++)
    {
       $lat = $res[$i]->latitude;
       $lng = $res[$i]->longitude;
       $location = $res[$i]->location;
        ?>
          <div id="area_fields">
          <div class="clearfix">
          <div class="form-group col-sm-10">
        <input type="text" class="form-control" name="location[]" id="location" placeholder="Enter location" onclick="a(this.id);" value="<?php echo $location; ?>">
        <input type="hidden" id="lat" name="latitude[]" value="<?php echo $lat; ?>">
        <input type="hidden" id="lng" name="longitude[]" value="<?php echo $lng; ?>">
      </div>
      <?php
      if($i == 0)
      {
        ?>
         <div class="form-group col-sm-2">
            <span><p class="fcbtn btn btn-info btn-outline btn-1e  no-bod-rad" id="add"><i class="fa fa-plus"></i></p></span>
          </div>
      <?php
      }
      else
      {
        ?>
        <div class="form-group col-sm-2"><p class="btn btn-danger btn_remove"  id="remove_field" style="margin-top:19px">x</p></div>
        <?php
      }
      ?>
        </div>
        </div>
<?php
    }
  }
  ?>
<!--   <div id="area_fields">
    <div class="clearfix">
    <div class="form-group col-sm-10">
  <input type="text" class="form-control" name="location[]" id="location" placeholder="Enter location" onclick="a(this.id);">
  <input type="hidden" id="lat" name="latitude[]" value="0">
  <input type="hidden" id="lng" name="longitude[]" value="0">
</div>
   <div class="form-group col-sm-2">
      <span><p class="fcbtn btn btn-info btn-outline btn-1e  no-bod-rad" id="add"><i class="fa fa-plus"></i></p></span>
    </div>
  </div>
  </div> -->
</div>
<div class="form-group col-sm-6">
      <label class="control-label" for="tutor">Select Tutor Type:</label>
  <select class="form-control" name="tutor_type" id="tutor" value="" tabindex="4">
    <!-- <option value="" disabled="disabled">--select--</option>
      <option value="<?php echo $user_data->tutor_type_id;?>"><?php echo ucwords($user_data->tutor_type);?></option> -->

  </select> 
  <?php echo form_error('tutor'); ?>
   </div>
   <div class="form-group col-sm-6" id="working_text">
      <label class="control-label" for="working">Working school/college:</label>
   <select class="form-control" name="working" id="working" tabindex="2">
    <option value=''>--select--</option>
    <option value="yes" <?php if($user_data->working_status == 'yes'){echo "selected"; } ?>>Yes</option>
    <option value="no" <?php if($user_data->working_status == 'no'){echo "selected"; } ?>>No</option>
  </select>
  <?php echo form_error('working'); ?>
   </div>
      <div class="col-sm-12 text-center">
             <div class="clearfix">&nbsp;</div>
             <div class="clearfix">&nbsp;</div>
             <div class="col-sm-12">
            <button type="button" class="btn btn-warning no-bod-rad col-sm-4  btn-lg" id="back2" data-toggle="tab" style="margin-right:40px;margin-left:60px">Back</button><button type="button" class="btn btn-warning no-bod-rad col-sm-4  btn-lg" id="next2" data-toggle="tab"> Next</button>
          </div>
         </div>
         <div class="clearfix">&nbsp;</div>   
    </div>
    <div id="menu2" class="tab-pane fade">
        
      <div class="form-group col-sm-6">
          <div class="clearfix">&nbsp;</div>
      <label class="control-label" for="birth">Date Of Birth:</label>
          <input type="text" class="form-control" name="birth" value="<?php echo (date('d-m-Y',strtotime($user_data->dob)));?>" id="birth" placeholder="Enter your Date of Birth" autocomplete="off">
     <?php echo form_error('birth'); ?>
     <span id="birth_error" style="color:red"></span>
    </div>
    <div class="form-group col-sm-6">
         <div class="clearfix">&nbsp;</div>
      <label class="control-label" for="mobile">Mobile No:</label>
     <input type="text" class="form-control" name="mobile" id="mobile" value="<?php $mobile=$this->session->userdata('user_mobile');if(!empty($mobile)) echo $mobile;?>"  placeholder="enter mobile no." >
     <?php echo form_error('mobile'); ?>
     <span style="color:red" id="mobile_error"></span>
    </div>
              
    <div class="form-group col-sm-6">
      <label class="control-label" for="email">Email:</label>
   <input type="email" class="form-control email" name="email" id="email" value="<?php $email=$this->session->userdata('user_email'); if(!empty($email)) echo $email;?>" placeholder="abc@gmail.com" >
   <?php echo form_error('email'); ?>
   <span style="color:red" id="email_error"></span>
    </div>
    <div class="form-group col-sm-6">
      <label class="control-label">Adhaar Number:</label>
     <input type="text" class="form-control" name="adhaar" id="adhaar" value="<?php echo $user_data->adhaar_no;?>" placeholder="Enter Adhaar number" maxlength="12">
     <?php echo form_error('adhaar'); ?>
     <span style="color:red" id="adhaar_error"></span>
    </div>
 
    <div class="form-group col-sm-6">
        <div class="form-group sky-form">                      
        <label>Upload your Resume<sup>*</sup></label>
            <input type="file" name="resume" id="resume" class="form-control myresume" accept=".doc,.docx,.pdf">
            <span class="resume_error" style="color:red"></span>
            </div>
            <b>Previous resume : <a href="<?php echo base_url(); ?>uploads/resume/<?php echo $user_data->resume; ?>" download="resume"><?php echo $user_data->resume;?></a></b>
              <p class="err">&nbsp;</p>
              <?php echo form_error('resume'); ?>
      
              <?php if(!empty($resume_err)) echo $resume_err;?>
    </div>
    <div class="form-group col-sm-6">
        <div class="form-group sky-form">

           <label>Uploaded Adhaar<sup>*</sup></label>
          <div>
         <?php  if(!empty($multi_adhaar))
          { 
          foreach($multi_adhaar as $row)
          {
            ?>
            <span><img style="width:180px;height:100px;float: left;" src="<?php echo base_url();?>uploads/adhaar/<?php echo $row->adhaar;?>" alt="itutors"></span>
            <?php 
          }
        }
          ?>
        </div>
        <label>Upload your Adhaar<sup>*</sup></label>
            <input type="file" name="adhaar_proof[]" id="file-input" multiple="multiple" class="form-control adhaar_proof" accept=".jpg,.jpeg,.png">
            <span id="adhaar_proof_error" style="color:red"></span>
            </div>
            <div id="preview"></div>
              <?php echo form_error('adhaar_proof'); ?>

    </div>
                      <div class="clearfix"></div>
                         <div class="form-group col-sm-6">
        <div class="form-group sky-form">
          <P><b>Uploaded Pic</b></P>
            <p  class="col-md-4"><img style="width:50px;height:50px" src="<?php echo base_url();?>uploads/tutor_pic/<?php echo $user_data->photo;?>" alt="itutors"></p>
                              
            <label>Upload your Picture<sup>*uploading your picture will give you more opportunities</sup></label>
              <input type="file" name="picture" id="picture" class="form-control" accept=".jpg,.jpeg,.png">
              <span class="pic_error" style="color:red"></span>
              <div id="pic_preview"></div>
        </div>
          <p class="err">&nbsp;</p>
          <?php echo form_error('picture'); ?>
    </div>
    <div class="form-group col-sm-12">
          <div class="form-group sky-form">
            <label>About you(Min 200 Character)<sup>*</sup></label>
              <textarea class="form-control" name="about" id="about" style="resize:none"><?php if(!empty($user_data->about_tutor)) echo set_value('about',$user_data->about_tutor);?></textarea>
          </div>
          <span id="about_error" style="color:red"></span>
          <?php echo form_error('about'); ?>
    </div>
          <div class="col-sm-12 text-center">
             <div class="clearfix">&nbsp;</div>
             <div class="clearfix">&nbsp;</div>
            <button type="button" class="btn btn-warning no-bod-rad col-sm-4  btn-lg" id="back3" data-toggle="tab" style="margin-right:40px;margin-left:60px">Back</button><button type="submit" class="btn btn-warning no-bod-rad col-sm-4 btn-lg" name="update"> Submit</button>
         </form>
         </div>
         <div class="clearfix">&nbsp;</div>   
    </div>
   <div class="clearfix">&nbsp;</div>           
         
  </div>
          </div>
   
                

          </div>
       <div class="clearfix">&nbsp;</div>    <div class="clearfix">&nbsp;</div>    <div class="clearfix">&nbsp;</div>   
      </div>
      </div>
      </div>
      </section>
       <?php $user_id=$this->session->userdata('user_id');?>
    <input type="hidden" id="user_id" value="<?php if(!empty($user_id)) echo $user_id;?>">  
<!--section dashboard end-->
<?php $this->load->view('includes/modal.php'); ?>
 <div class="clearfix"></div>
 <?php $this->load->view('includes/footer.php'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script type="<?php echo base_url(); ?>/assets/text/javascript" src="js/menu.js"></script>
<!--    <link rel="stylesheet" href="code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
<!--
<script src="https:code.jquery.com/jquery-1.12.4.js"></script>
<script src="https:code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
-->
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>

    <script type="text/javascript">
     $("#next1").click(function(){
      flag=true;
   var college=$('#college').val().trim();
   var language=$('#language').val();
   var qualification=$('#qualification').val();
    var tutor=$('#tutor').val();
      var clg_pattern=/^[a-zA-Z, ]*$/;
    // alert(tutor);
    if($('input[name=gender]:checked').length<=0)
       {
               flag=false;
           $('#gender').css('border','1px solid red');
       }
       else
       {
           $('#gender').css('border','');
       }

      if(college!="" && !clg_pattern.test(college))
      { 
          flag=false;
          $('#college').css('border','1px solid red');
      }
      else if (college=="")
      { 
        flag=false;
         $('#college').css('border','1px solid red');
      }
      else
      {
          $('#college').css('border','');
      }
     var cat= $("input[name='category[]']").serializeArray(); 
    if (cat.length>2) 
    { 
      flag=false;
       $('.cat1').css('border','1px solid red');
    } 
    else
    {
      $('.cat1').css('border','');
    }
     var listarray = new Array();
  $('input[name="category[]"]:checked').each(function () {
            listarray.push($(this).val());
        });
        var checklist = "" + listarray;
        if(checklist!="")
        {
          if($.inArray("42",listarray)!=-1)
          {
           var exam= $("input[name='class[]']").serializeArray(); 
           if(exam.length==0)
           {
            flag=false;
            $('.class_valid').css('border','1px solid red');
            } 
            else
            {
               $('.class_valid').css('border','');
            }
           }
          }
   
      
      // alert(tutor);
      //  alert(subject.length);
      if(flag==false)
      {
        $("#next1").attr("href","");
        
      }
      else
      {
          $("#next1").attr("href","#menu1");
           $(".home").removeClass("active_step");
          $(".menu1").addClass("active_step");
      }
 });
       $("#next2").click(function(){
        flag=true;
         var tutor=$('#tutor').val();
        var syllabus=$('#syllabus').val();
        var subject=$('#subject').val();
        var location=$('#location').val().trim();
        var time=$('#time').val();
        var teaching_exp=$('#teaching_exp').val();
        var timepattern =/^[0-9]{1,2}\:[0-9]{1,2}[a,p,m]{2}$/;
        var loc_pattern=/^[a-zA-Z0-9, ]*$/;
          $(".frm_time").each(function(){
     $(this).css('border','');
     $(this).parent().parent().find('.to_time').css('border','');
    var startTime = ($(this).val());
    if(startTime == '')
    {
      flag = false;
      $(this).css('border','1px solid red');
    }
    var endTime = ($(this).parent().parent().find('.to_time').val());
   if(endTime == '')
    {
      $(this).parent().parent().find('.to_time').css('border','1px solid red');
    }
    if (startTime!='' && endTime!='' && (parseInt(startTime) == parseInt(endTime)) || (parseInt(startTime) > parseInt(endTime))) {
               $(this).parent().parent().find('.to_time').css('border','1px solid red');
               flag=false;
              }
  });
          $("[name^=location]").each(function () {
          var location=$(this).val().trim();
          if(location!="" && !loc_pattern.test(location))
          {
              flag=false;
           $("[name^=location]").css('border','1px solid red');
          }
          else
          {
              $("[name^=location]").css('border','');
          }
    
          });  
       if(tutor=="")
      {
          flag=false;
          $('#tutor').css('border','1px solid red');
      }
      else
      {
        $('#tutor').css('border','');
      }

var subject= $("input[name='subject[]']").serializeArray();
 var cat= $("input[name='category[]']").serializeArray(); 
 if(cat.length>0)
 {
  if(subject.length==0)
  {
    $('.sub1').css('border','1px solid red');
  }
  else
  {
    $('.sub1').css('border','');
  }
 }
       if(tutor==1)
       {
        if(subject.length>4)
        {
          flag=false;
           $('.sub1').css('border','1px solid red');
           $('#subject_error').html("maximum four subjects allowed only");
        }
        else
        {
           $('.sub1').css('border','');
           $('#subject_error').html("");
        }
      }
       if(tutor==2)
       {
        if(subject.length>2)
        {
          flag=false;
           $('.sub1').css('border','1px solid red');
           $('#subject_error').html("maximum two subjects allowed only");
        }
        else
        {
           $('.sub1').css('border','');
           $('#subject_error').html("");
        }
      }
      if(tutor==3)
      {
        if(subject.length<=5)
        {
           $('#subject').css('border','');
           $('#subject_error').html("");
        }
       else
       {
        flag=false;
         $('#subject').css('border','1px solid red');
           $('#subject_error').html("more than 5 subjects not allowed");
       }
      }
       if(flag==false)
      {
        $("#next2").attr("href","");
      }
      else
      {
          $("#next2").attr("href","#menu2");
          $(".menu1").removeClass("active_step");
          $(".menu2").addClass("active_step");

      }
});
    </script>
    <script type="text/javascript">
     $("#back2").click(function(){
     $("#back2").attr("href","#home");
     $(".menu1").removeClass("active_step");
     $(".home").addClass("active_step");
     }); 
      $("#back3").click(function(){
     $("#back3").attr("href","#menu1");
     $(".menu2").removeClass("active_step");
     $(".menu1").addClass("active_step");
     }); 
    </script>
    <script type="text/javascript">
  $("#tutor_update").submit(function(){
     var flag=true;
    var category=$('#category').val();

    var tutor=$('#tutor').val();
    var language=$('#language').val();
    var qualification=$('#qualification').val();
    var college=$('#college').val().trim();
    var working=$('#working').val();
    var teaching_exp=$('#teaching_exp').val();
    var syllabus=$('#syllabus').val();
    var subject=$('#subject').val();
    var time=$('#time').val();
    var birth=$('#birth').val().trim();
    var mobile=$('#mobile').val();
     var mobile_error=$("#mobile_error").text().trim();
     // alert(mobile_error);
    var email=$('#email').val().trim();
    var email_error=$("#email_error").text().trim();
    // alert('error'+email_error);
    var reference=$('#reference').val();
     var picture=$('#picture').val();
     var resume=$('#resume').val();
     var adhaar=$('#adhaar').val();
    var about=$('#about').val().trim();
    var adhaar_proof=$(".adhaar_proof").val();
    adhaar_proof_error=$("#adhaar_proof_error").html();
    var resume_error=$('.resume_error').html();
    var pic_error=$('.pic_error').html();
    var d=new Date();
    var birth_year = birth.substr(6,10);
    var about_pattern=/^[0-9a-zA-z,. ]*$/
    var num_pattern=/^[0-9]*$/;
    //var birth_year=birth.getFullYear();
    //alert(birth_year);
      email_pattern=/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
      var mobile_pattern=/^[6-9]{1}[0-9]{9}$/;
      //college_pattern=/^[a-zA-Z ]*$/;
      var adhaar_pattern=/^[0-9]*$/;
       var timepattern =/^[0-9]{1,2}\:[0-9]{1,2}[a,p,m]{2}$/;
        var clg_pattern=/^[a-zA-Z, ]*$/;
        var loc_pattern=/^[a-zA-Z0-9, ]*$/;
        var subject= $("input[name='subject[]']").serializeArray();
       if(tutor==1)
       {
        if(subject.length>4)
        {
          flag=false;
           $('.sub1').css('border','1px solid red');
           $('#subject_error').html("maximum four subjects allowed");
        }
        else
        {
           $('.sub1').css('border','');
           $('#subject_error').html("");
        }
      }
       if(tutor==2)
       {
        if(subject.length>2)
        {
          flag=false;
           $('.sub1').css('border','1px solid red');
           $('#subject_error').html("maximum two subjects allowed");
        }
        else
        {
           $('.sub1').css('border','');
           $('#subject_error').html("");
        }
      }

      if(tutor==3)
      {
        if(subject.length<=5)
        {
           $('#subject').css('border','');
           $('#subject_error').html("");
        }
       else
       {
        flag=false;
         $('#subject').css('border','1px solid red');
           $('#subject_error').html("more than five subjects not allowed");
       }
      }
         if(tutor=="")
      {
          flag=false;
          $('#tutor').css('border','1px solid red');
      }
      else
      {
        $('#tutor').css('border','');
      }
   var cat= $("input[name='category[]']").serializeArray(); 
    if (cat.length>2) 
    { 
      flag=false;
       $('.cat1').css('border','1px solid red');
    } 
    else
    {
      $('.cat1').css('border','');
    }

      if(college!="" && !clg_pattern.test(college))
      {
          flag=false;
          $('#college').css('border','1px solid red');
      }
      else if (college=="")
      { 
        flag=false;
         $('#college').css('border','1px solid red');
      }
      else
      {
          $('#college').css('border','');
      }

      $("[name^=location]").each(function () {
          var location=$(this).val().trim();
          if(location!="" && !loc_pattern.test(location))
          {
              flag=false;
           $("[name^=location]").css('border','1px solid red');
          }
          else
          {
              $("[name^=location]").css('border','');
          }
    
          });  


       if(birth=="")
       {
           flag=false;
           $('#birth').css('border','1px solid red');
       }
       else
       {
           $('#birth').css('border','');
       }
        if (birth_year >(d.getFullYear()-20))
       {
           flag=false;
           $('#birth').css('border','1px solid red');
           $('#birth_error').html("minimum 20 years old tutor allowed");
       }
       else
       {
           $('#birth_error').html('');
       }
       if(mobile=="")
       {
           flag=false;
           $('#mobile').css('border','1px solid red');
       }
       else if(mobile!='' && !mobile_pattern.test(mobile))
       {
        flag=false;
         $('#mobile').css('border','1px solid red');
       }
       else if(mobile_error!="" && mobile_error.length >2)
       {
        flag=false;
        $("#mobile").css("border","1px solid red");
       }
       else
       {
           $('#mobile').css('border','');
       }

     if(email=="")
       {
           flag=false;
           $('#email').css('border','1px solid red');
       }
       else if(email!='' && !email_pattern.test(email))
       {
        
        flag=false;
           $('#email').css('border','1px solid red');
        }
         else if(email_error!="" && email_error.length>2)
       {
        //alert(email_error.length);
        flag=false;
        $("#email").css("border","1px solid red");
       }
       else
       {
           $('#email').css('border','');
       }
       if(resume_error!="")
       {
           flag=false;
           $('#resume').css('border','1px solid red');
       }
       else
       {
           $('#resume').css('border','');
       }
        if(pic_error!="")
       {
           flag=false;
           $('#picture').css('border','1px solid red');
       }
       else
       {
           $('#picture').css('border','');
       }
      if(adhaar==""||adhaar.length!=12 || !num_pattern.test(adhaar))
       {
           flag=false;
           $('#adhaar').css('border','1px solid red');
       }
       else
       {
           $('#adhaar').css('border','');
       }

       if(adhaar_proof_error!="")
       {
           flag=false;
           $('.adhaar_proof').css('border','1px solid red');
       }
       else
       {
           $('.adhaar_proof').css('border','');
       }
       if($('input[name=gender]:checked').length<=0)
       {
               flag=false;
           $('#gender').css('border','1px solid red');
       }
       else
       {
           $('#gender').css('border','');
       }

          if(qualification=='')
      {
          flag=false;
          $('#qualification').css('border','1px solid red');
      }
      else
      {
          $('#qualification').css('border','');
      }

           if( about!="" && about.length<200)
           {
            flag=false;
            $("#about").css('border','1px solid red');
            $("#about_error").html("minimum 200 character mandatory,please write atleast in 200 character");
           }
           else if(about!="" && !about_pattern.test(about))
           {
              flag=false;
            $("#about").css('border','1px solid red');
            $("#about_error").html("only alpha,number some special character(like ,space and % allowed");
           }
           else if(about=="")
           {
            flag=false;
            $("#about").css('border','1px solid red');
              $("#about_error").html("");
           }
           else
           {
            $("#about").css('border','');
            $("#about_error").html("");
           }

return flag;
});
</script>


   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
  var d=new Date();
  //var year=d.getFullYear();
d.setFullYear(d.getFullYear()-20);
var current=d.getFullYear();
var yearRange= "1970:"+current;
 //alert(yearRange);
  $('#birth').datepicker({
    changeMonth: true,
      changeYear: true,
      yearRange: "1970:"+current,
      //maxDate:new Date(1998,01,01),
    dateFormat:"dd-mm-yy"
  });
  $('#to').datepicker({dateFormat:"dd-mm-yy"});

</script>
<script type="text/javascript">
  var time="<option value='1'>12:00am</option><option value='2'>12:30am</option><option value='3'>1:00am</option><option value='4'>1:30am</option><option value='5'>2:00am</option><option value='6'>2:30am</option><option value='7'>3:00am</option><option value='8'>3:30am</option><option value='9'>4:00am</option><option value='10'>4:30am</option><option value='11'>5:00am</option><option value='12'>5:30am</option><option value='13'>6:00am</option><option value='14'>6:30am</option><option value='15'>7:00am</option><option value='16'>7:30am</option><option value='17'>8:00am</option><option value='18'>8:30am</option><option value='19'>9:00am</option><option value='20'>9:30am</option><option value='21'>10:00am</option><option value='22'>10:30am</option><option value='23'>11:00am</option><option value='24'>11:30am</option><option value='25'>12:00pm</option><option value='26'>12:30pm</option><option value='27'>1:00pm</option><option value='28'>1:30pm</option><option value='29'>2:00pm</option><option value='30'>2:30pm</option><option value='31'>3:00pm</option><option value='32'>3:30pm</option><option value='33'>4:00pm</option><option value='34'>4:30pm</option><option value='35'>5:00pm</option><option value='36'>5:30pm</option><option value='37'>6:00pm</option><option value='38'>6:30pm</option><option value='39'>7:00pm</option><option value='40'>7:30pm</option><option value='41'>8:00pm</option><option value='42'>8:30pm</option><option value='43'>9:00pm</option><option value='44'>9:30pm</option><option value='45'>10:00pm</option><option value='46'>10:30pm</option><option value='47'>11:00pm</option><option value='48'>11:30pm</option>";   
  // $(".from_time").each(function(){
  //   $(this).append(time);
  // });
     $(".frm_time").append(time);
     $(".to_time").append(time);
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $("#app"); //Fields wrapper
    var add_button      = $("#add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){
            x++; //text box increment
            $(wrapper).append('<div id="my_append"><div class="form-group col-sm-12"><div class="form-group col-sm-5">From:<select name="frm_time[]" class="form-control time_picker1 frm_time" placeholder="From" onfocus="mytime()"><option value="">From</option>'+time+'</select></div><div class="form-group col-sm-5">To:<select type="text" name="to1_time[]" class="form-control time_picker ui-timepicker-input to_time" placeholder="01:30pm" autocomplete="off"><option value="">To</option>'+time+'</select></div><span class="form-group col-sm-2"><p class="btn btn-danger btn_remove"  id="remove_field" style="margin-top:19px">x</p></span></div></div>');
        }
    });
    
    $(document).on("click","#remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent().parent().remove(); x--;
    })
});
</script>
<script type="text/javascript">
function validateImage(id) {

   var formData = new FormData();

   var file = document.getElementById(id).files[0];

   formData.append("Filedata", file);
   var t = file.type.split('/').pop().toLowerCase();
   if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
      $("#adhaar_proof").css('border','1px solid red').focus();$("#project_multiple_picerror").html('File type should be jpg,png,jpeg,gif,bmp only accepted');
      // alert('Please select a valid image file');
       document.getElementById(id).value = '';
       return false;
   }
   if (file.size > 1024000) {
         $("#adhaar_proof").css('border','1px solid red').focus();
         $("#adhaar_proof").html('Max Upload size is 1MB only');
       document.getElementById(id).value = '';
       $(':input[type="submit"]').prop('disabled', true);
       return false;
   }
   return true;
}
</script>
<script type="text/javascript">
function previewImages() {

  var $preview = $('#preview').empty();
  if (this.files) $.each(this.files, readAndPreview);

  function readAndPreview(i, file) {
    
    if (!/\.(jpeg|png|gif|jpg)$/i.test(file.name)){
       $("#adhaar_proof_error").html("please upload valid image");
    }
      else
      {
          $("#adhaar_proof_error").html("");
      }// else...
    
    var reader = new FileReader();

    $(reader).on("load", function() {
      $preview.append($("<img/>", {src:this.result, height:100}));
    });

    reader.readAsDataURL(file);
    
  }

}

$('#file-input').on("change", previewImages);
function previewPicture() {

  var $preview2 = $('#pic_preview').empty();
  if (this.files) $.each(this.files, readAndPreview);

  function readAndPreview(i, file) {
    
    var reader = new FileReader();

    $(reader).on("load", function() {
      $preview2.append($("<img/>", {src:this.result, height:100}));
    });

    reader.readAsDataURL(file);
    
  }

}
$('#picture').on("change", previewPicture);
</script>
<script type="text/javascript">
$("#adhaar").on('focusout',function(){
  // alert("hii");
    var adhaar=$("#adhaar").val();
    // alert(adhaar);
    var user_id=$("#user_id").val();
    // alert(user_id);
    if(adhaar!="" && user_id!="")
    {
      // alert('test');
    $.ajax({
          dataType:'text',
          type:'post',
          data:{'condition':'adhaar','data':adhaar,'user_id':user_id,'table':'rl_tutor_tbl'},
          url:'<?php echo base_url();?>frontend/common_check_existence',
          success:function(res){
            $("#adhaar_error").html(res);
          },
          error:function(res){
            console.log(res);
          }
  });
}
  });
</script>
  <script type="text/javascript">
   $("#email").on('focusout',function(){
    // alert("hii");
    var email=$("#email").val();
    var user_id=$("#user_id").val();
    // alert(user_id);
    if(email!="" && user_id!="")
    {
    $.ajax({
          dataType:'text',
          type:'post',
          data:{'condition':'email_update','data':email,'user_id':user_id,'table':'rl_users_tbl'},
          url:'<?php echo base_url();?>frontend/common_check_existence',
          success:function(res){
            $("#email_error").html(res);
          },
          error:function(res){
            console.log(res);
          }
  });
}
  });
   $("#mobile").on('focusout',function(){
    // alert("hii");
    var mobile=$("#mobile").val();
     var user_id=$("#user_id").val();
    if(mobile!="" && user_id!="")
    {
    $.ajax({
          dataType:'text',
          type:'post',
          data:{'condition':'mobile_update','data':mobile,'user_id':user_id,'table':'rl_users_tbl'},
          url:'<?php echo base_url();?>frontend/common_check_existence',
          success:function(res){
            $("#mobile_error").html(res);
          },
          error:function(res){
            console.log(res);
          }
  });
}
  });  
</script> 
<!--
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
-->
   <script type="text/javascript">
  $('#resume').change(function(){
    var res = $(this).val();
    // var size = (this.files[0].size);
    switch(res.substring(res.lastIndexOf('.') + 1).toLowerCase()){
        case 'doc': case 'docx': case 'txt':
           $('.resume_error').html(''); 
            break;
        default:
            $(this).val('');
            $('.resume_error').html('please upload valid resume');
            break;
          }
        });
  
</script>
 
<script type="text/javascript">
//   $('#picture').on('change',function(){
//     // alert("hi pic");
//     var pic=$('#picture').val();
//     // alert(pic[0]);
//     var pic = this.files[0];
//     // alert(pic);
// var fileType = file["type"];
// var ValidImageTypes = ["image/gif", "image/jpeg", "image/png"];
// if ($.inArray(fileType, ValidImageTypes) < 0) {
//      // invalid file type code goes here.
// }
//   });
  
</script>
<!-- <script type="text/javascript">
  $('#picture').on('change',function(){
    // alert('hii');
    // alert("hi pic");
    var val = $(this).val();
    var picsize = (this.files[0].size);
   var mypic=val.substring(val.lastIndexOf('.') + 1).toLowerCase();
   // alert(mypic);
    switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
        case 'gif': case 'jpg': case 'png': case 'jpeg':
         $('.pic_error').html('');
            break;
        default:
            $(this).val('');
            $('.pic_error').html('please upload valid image');
            break;
          }
        });
      </script> -->
    
<script type="text/javascript">
function image_validate(image)
{
    var ext = image.match(/\.(.+)$/)[1];
    ext=ext.toLowerCase();
    validformat='';
    switch(ext) 
    {
        case 'jpg': case 'jpeg': case 'bmp': case 'png': case 'tif': case 'gif':
        validformat=1; break;
        default: validformat=0; 
    }
    return validformat;
}
</script>
<!-- <script type="text/javascript">
$("#adhaar_proof").change(function(){
    var imageSizeArr = 0;
     var imageSize = document.getElementById('adhaar_proof');
     alert(imageSize.files.length);
     var i;
    for (i = 0; i<imageSize.files.length; i++)
    {
         var imageSize = imageSize.files[i].size;
         alert("hii");
         if (imageSize >51200) {
             var imageSizeArr = 1;
         }
         if (imageSizeArr == 1)
         {
             $('#adhaar_proof_error').text('max 1 mb allowed');
              $('button[type="submit"]').prop('disabled', true);
         }
         else
         {
           $('#adhaar_proof_error').text('');
            $('button[type="submit"]').prop('disabled',false);
         }
         
     }
 });
 </script>  -->
 <script type="text/javascript">
  $("#subject").change(function(){
    // alert('hii');
 var tutor=$("#tutor").val();
 // alert(tutor);
  var subject=$('#subject').val();

       if(tutor==29 || tutor==30)
       {
        if(subject!=null && subject.length>2)
        {
          flag=false;
           $('#subject').css('border','1px solid red');
           $('#subject_error').html("maximum two subjects allowed");
        }
        else 
        {
           $('#subject').css('border','');
           $('#subject_error').html("");
        }
      }
   });

  $('#picture').on('change',function(){
    var val = $(this).val();
    var picsize = (this.files[0].size);
   var mypic=val.substring(val.lastIndexOf('.') + 1).toLowerCase();
   // alert(mypic);
    switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
        case 'gif': case 'jpg': case 'png': case 'jpeg':
         $('.pic_error').html('');
            break;
        default:
            $(this).val('');
            $('.pic_error').html('please upload valid image');
            break;
          }
      if(picsize>1048576)
      {
 $('.pic_error').html('max size is 1mb only allowed');
      }
      if(picsize<=1048576)
      {
$('.pic_error').html('');  
      }
        });
   $('#resume').change(function(){
    var res = $(this).val();
     var resume_size = (this.files[0].size);
    switch(res.substring(res.lastIndexOf('.') + 1).toLowerCase()){
        case 'doc': case 'docx': case 'txt': case 'pdf':
           $('.resume_error').html(''); 
            break;
        default:
            $(this).val('');
            $('.resume_error').html('please upload valid resume');
            break;
          }
          if(resume_size>1048576)
           {
             $('.resume_error').html('max 1 mb allowed only');
           }
         if(resume_size<=1048576)
           {
            $('.resume_error').html('');
           }
        });
      </script>
<script type="text/javascript">
  $('#adhaar_proof').validate({
       rules: {
           "adhaar_proof[]": {
                         required: true,
                         extension: "jpg|jpeg|png",
                         filesize: 20971520,  
                      }
              }
});
</script>
<script type="text/javascript">
  $('.adhaar_proof').change(function(){
    var imageSize = document.getElementById('file-input'); 
                var imageCount = imageSize.files.length;
              
                for (var i=0;i<imageCount; i++)
                {
                    var imageSize1 = imageSize.files[i].size;
                        if (imageSize1> 1048576) 
                        {
                          $("#adhaar_proof_error").html(imageSize.files[i].name+ " is more than 1 mb max size 1 mb allowed only")
                        $(':submit').prop("disabled",true); 
                        break;
                        } 
                        else if(imageCount>2)
                        {
                           $("#adhaar_proof_error").html("two images allowed only")
                        $(':submit').prop("disabled",true); 
                        break;  
                        }
                        else
                        {
                          $("#adhaar_proof_error").html("")
                          $(':submit').prop("disabled",false); 
                        }

              }
 }); 
</script>
<script type="text/javascript">

 $(document).ready(function () {
        var max_fields = 10;
        var wrapper1 = $("#area_fields");
        var add_button1 = $("#add");
    
  
     var x = 2; //initlal text box count
        $(add_button1).click(function (e) { //on add input button click
            e.preventDefault();
            var location_input=$('<div id="my_app"><div class="clearfix"><div class="form-group col-sm-10"><input type="text" class="form-control" name="location[]" id="location'+x+'" placeholder="Enter location" onclick="a(this.id);"><input type="hidden" id="lat'+x+'" name="latitude[]" value="0"><input type="hidden" id="lng'+x+'" name="longitude[]" value="0"></div><div class="form-group col-sm-2"><span><p class="btn btn-danger" id="remove_field1">x</button></p></span></div></div></div><br/>');

   if (x < max_fields) { //max input box allowed
                x++; //text box increment
               $(wrapper1).append(location_input);
                  //add input box
                          }
        });

        $(wrapper1).on("click", "#remove_field1", function (e) { //user click on remove text
            e.preventDefault();
          $(this).parent().parent().parent().remove(); x--;
        })
    });
</script>
<script type="text/javascript">
  
  function a(id){
    // var last=lastIndexOf(id);
   var last=id.substring(id.lastIndexOf('n') + 1);
   // alert(last);
   if(last=="")
   {
   var lat_id="lat";
   var lng_id="lng";
   }
   else
   {
    var lat_id="lat"+last;
     var lng_id="lng"+last;
   }
   // alert(lat_id);

            var placeSearch, autocomplete;
            var componentForm = {
                location: 'long_name',
                locality: 'long_name',
                administrative_area_level_1: 'long_name',
                country: 'long_name',
                postal_code: 'short_name'
            };
            function initAutocomplete() {
            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */(document.getElementById(id)),
                {types: ['geocode'],
                    componentRestrictions: {country: "in"}
                });
            autocomplete.addListener('place_changed', fillInAddress);
            }
             initAutocomplete();
         function fillInAddress() {
          
          // alert(lat_id);
          var place = autocomplete.getPlace();
         var latitude = place.geometry.location.lat();
         var longitude = place.geometry.location.lng();
          document.getElementById(lat_id).value = 0;
          document.getElementById(lng_id).value = 0;
          document.getElementById(lat_id).value = latitude;
         document.getElementById(lng_id).value = longitude;
        }
        fillInAddress();
      }
 
    </script>
  <!-- <script type="text/javascript">
       function get_sub(){
        var exam=document.getElementById('exams').value;
     $.ajax({
    method:'POST',
    data:{'id':exam},
    dataType:'JSON',
     url:'<?php echo base_url();?>tutor/get_class_subject',
    'success':function(data){
      console.log(data);
      $(".sub1").html(data);
    },
    error:function(err){
      console.log(err);
    }
  });
  }
    </script> -->
    <script type="text/javascript">
    $("#next1").on('click',function(){
  var listarray = new Array();
  $('input[name="category[]"]:checked').each(function () {
            listarray.push($(this).val());
        });
        var checklist = "" + listarray;
        if(checklist!="")
        {
          if($.inArray("42",listarray)!=-1)
          {
     var listClass = new Array();
  $('input[name="class[]"]:checked').each(function () {
            listClass.push($(this).val());
        });
        var checklist_class = "" + listClass;
        
  $.ajax({
    method:'POST',
    data:{'id':checklist_class},
    dataType:'JSON',
     url:'<?php echo base_url();?>tutor/get_class_subject1',
    'success':function(data){
      console.log(data);
      $(".sub1").html(data);
    },
    error:function(err){
      console.log(err);
    }
  });
}
}
});
</script>
      <script type="text/javascript">
$("#next1").on('click',function(){
  var listarray = new Array();
  $('input[name="category[]"]:checked').each(function () {
            listarray.push($(this).val());
        });
        var checklist = "" + listarray;
        if(checklist!="")
        {
  $.ajax({
    method:'POST',
    data:{'cat_id':checklist},
    dataType:'JSON',
     url:'<?php echo base_url();?>tutor/getTutortype1',
    'success':function(data){
      console.log(data);
      $("#tutor").html(data);
    },
    error:function(err){
      console.log(err);
    }
  });
}
});
</script>
 <script type="text/javascript">
$("#next1").on('click',function(){
  var listarray = new Array();
  $('input[name="category[]"]:checked').each(function () {
            listarray.push($(this).val());
        });
        var checklist = "" + listarray;
        if(checklist!="")
        {
          if($.inArray("42",listarray)==-1)
          {
  $.ajax({
    method:'POST',
    data:{'cat_id':checklist},
    dataType:'JSON',
     url:'<?php echo base_url();?>tutor/getSubjects1',
    'success':function(data){
      console.log(data);
      $(".sub1").html(data);
    },
    error:function(err){
      console.log(err);
    }
  });
}
}
});
</script>
<script type="text/javascript">
 $('input[name="category[]"]').on('click',function(){
   var listarray = new Array();
 $('input[name="category[]"]:checked').each(function () {
  listarray.push($(this).val());
        });
        var checklist = "" + listarray;
        if(checklist!="")
        {
          if($.inArray("42",listarray)!=-1)
        {
      $.ajax({
        url:'<?php echo base_url(); ?>tutor/get_class',
        method:'POST',
        dataType:'JSON',
        cache: false,
        data:{'id':42},
        success:function(s){
          console.log(s);
          $(".class").show();
             $(".class").html(s);
        },
        error:function(er){
          console.log(er);
        }
      });
      }
       else
    {
      $(".class").html();
      $(".class").hide();
    }
    }
    else
    {
      $(".class").html();
      $(".class").hide();
    }
   
    });

</script>
 
   <script type="text/javascript">
$(".menu1").on('click',function(){
  var listarray = new Array();
  $('input[name="category[]"]:checked').each(function () {
            listarray.push($(this).val());
        });
        var checklist = "" + listarray;
        if(checklist!="")
        {
  $.ajax({
    method:'POST',
    data:{'cat_id':checklist},
    dataType:'JSON',
     url:'<?php echo base_url();?>tutor/getTutortype',
    'success':function(data){
      console.log(data);
      $("#tutor").html(data);
    },
    error:function(err){
      console.log(err);
    }
  });
}
});
</script>
 <script type="text/javascript">
$(".menu1").on('click',function(){
  var listarray = new Array();
  $('input[name="category[]"]:checked').each(function () {
            listarray.push($(this).val());
        });
        var checklist = "" + listarray;
  $.ajax({
    method:'POST',
    data:{'cat_id':checklist},
    dataType:'JSON',
     url:'<?php echo base_url();?>tutor/getTutortype',
    'success':function(data){
      console.log(data);
      $("#tutor").html(data);
    },
    error:function(err){
      console.log(err);
    }
  });
});
</script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
         <script>
  function mytime(){
    //alert("hii");
   $('input.time_picker1').timepicker();
  }
  </script>
<script type="text/javascript">
     $('input.time_picker').timepicker();
</script>
<script type="text/javascript">
   $('input[name="category[]"]').on('click',function(){
  //         });
var cat= $("input[name='category[]']").serializeArray(); 
    if (cat.length>2) 
    { 
      flag=false;
       $('.cat1').css('border','1px solid red');
    } 
    else
    {
      $('.cat1').css('border','');
    }
      });
</script>
</body>
</html> 