<!DOCTYPE html>
<html lang="en">
  <head>
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
<link rel="canonical" href="<?php echo base_url(); ?>tutor/view-profile" />
<!-- Bootstrap -->
<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"  />
<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
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
        .pad5{padding: 5px 21px 6px 0px !important}
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
         .project-images{ width: 24%;height: 220px;}
        .info {background-color: #e7f3fe;border-left: 6px solid #2196F3;}
        .no-bod-rad{border-radius: 0px !important}
        label{margin-top: 10px;margin-bottom: 10px}
        .form-control{border-radius: 0px !important}
        .site-col{color: #ed3f40}
        .filter-right-main p{margin:8px 0px}
        .rattingtutor li a i {color: #ea003d;}
        .rattingtutor {list-style: none;display: inline-flex;padding: 0px 15px;}
        .filter-right-main p{font-size: 14px !important }
           .tutor_img2{    width: 100px;height: 100px;border-radius: 0px;z-index: 999;}
         @media (min-width:320px) and (max-width:640px){
             .filter-right-main p {font-size: 7px !important;margin: 8px 0px;}
             .tutor_img2{    width: 100px;height: 100px;border-radius: 0px;z-index: 999;}
          }

</style>
  </head>
  <body class="bg-wh">
   <?php $this->load->view('includes/header.php'); ?>
   <div class="clearfix"></div>

  <!--section dashboard start-->
  <section>
       <div class="bg-back container-fluid"  style="background-image:url('<?php echo base_url();?>assets/images/bg-back.jpg')">
      <div class="container">
      <?php $this->load->view("tutors/tutor-dash-sidebar.php");?>
<div class="col-md-10 no-pad m-t-10">
    
              <div class="col-md-12 filter-right"><!--filter right start-->
<h4 class="title-hd m-b-0" style="margin-bottom:0px"><strong>Your Profile</strong> <span class="pull-right"> <a href="<?php echo base_url();?>tutor/profile-update" class="btn btn-red no-bod-rad btn-sm col-wh" style="margin-top: -5px;">Edit Profile</a></span></h4>
                       <div class="col-md-12 filter-right-main" style="background:#fff">
                        <div class="col-md-12 col-xs-12 filter-right-main-head" style="background: #fff;margin-bottom:0px">
                            <div class=" col-md-offset-5 col-md-6 col-xs-offset-3 col-xs-6 no-pad">
                                <div class="clearfix">&nbsp;</div>
                                                              <ul class="list-inline">
                      <?php 
                      //print_r($tutor_recs);
                      foreach($tutor_recs as $row)
                              {
                                ?>                                              
        <div class="col-md-4 col-xs-6"><img src="<?php echo base_url();?>uploads/tutor_pic/<?php echo $row->photo;?>" alt="itutors" class="tutor_img2">                                                   
        </div>
                                                       <div class="clearfix"></div>
     <div class="col-xs-12 col-md-6 no-padd">
       <div class="clearfix"></div>
      <h3 class="fs20"><?php echo ucwords($row->name);?> <span style="font-size: 12px;"> <?php echo $views;?> views</span></h3>
          <ul class="rattingtutor" style="display:none">
    <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
    <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
    <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
    <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
    <li><a><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
    </ul>
          <div class="clearfix"></div>
        
    </div>
                                                        
<!--    <div class="col-sm-6"> <a href="#" class="btn btn-blue col-wh no-bod-rad btn-sm">Edit Profile</a> </div>   -->

                                </ul>
                            </div>
                              <div class="col-md-4 filter-right-main-head-left pull-right hidden">
                                <h3 class="f18 m-t-12 text-right"><b>5 Views </b></h3>
                                <ul>
                                <li><a><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                              </div>

                            </div><!--fliter head end-->
                        <!-- <div class="col-sm-12" style="background: #efeeec;">
                          <div class="col-sm-2 col-sm-offset-1"><p> &nbsp;  <img src="http://192.168.1.124/itsmytutor/assets/images/thumbsup.png" alt="thumbsup"> 18 Leads</p></div>
                          <div class="col-sm-3"><p> <img src="http://192.168.1.124/itsmytutor/assets/images/leads.png" alt="thumbsup"> 18 Feedbacks</p></div>
                          <div class="col-sm-6" style="margin-top: 4px;">
                           <button class="btn btn-blue btn-sm no-bod-rad pull-right col-sm-5 col-sm-offset-1"><a href="http://192.168.1.124/itsmytutor/tuition-center" style="color:#fff">Send Enquiry </a></button>
                            <button class="btn btn-blue no-bod-rad btn-sm pull-right col-sm-5 col-sm-offset-1"> <a href="http://192.168.1.124/itsmytutor/contact" style="color:#fff">Contact us</a></button>
                                </div>

                        </div> -->
                            <div class="clearfix"></div>
                            <div class="col-md-6 col-xs-12">
                              <div class="col-md-4 col-md-offset-2 col-xs-6">
                                  <div class="clearfix">&nbsp;</div>
                              <p><b>YourID</b></p>
                              <p><b>Gender</b></p>
                              <p><b>Age:</b></p>
                              <p><b>Experience</b></p>
                              <p><b>Qualification</b></p>
                              <p><b>Teaches</b></p>
                             
                              </div>
                              <div class="col-md-5 col-xs-6">
                                      <div class="clearfix">&nbsp;</div>
                                   <p>&nbsp;:&nbsp;<?php echo ucfirst($row->unique_id); ?></p>   
                                   <p>&nbsp;:&nbsp;<?php echo ucfirst($row->gender);?></p>
                              <p>&nbsp;:&nbsp;<?php echo get_age($row->dob);?> Years</p>
                              <p>&nbsp;:&nbsp;<?php echo $row->experience;?> <?php if($row->experience==1){?>Year<?php } else { ?> Years <?php }?>&nbsp;</p>
                              <p>&nbsp;:&nbsp;<?php echo ucwords($row->qualification);?></p>
                              <p style="word-break: break-all;">&nbsp;:&nbsp;<span><?php echo ucwords($row->subjects);?></span></p>
                             </div>
                               <div class="clearfix"></div>
                              </div>
                              <div class="col-md-6 col-xs-12">
                                  <div class="col-md-5 col-xs-6">
                                          <div class="clearfix">&nbsp;</div>
                               <p><b>Syllabus</b></p>
                               <p><b>Languages</b></p>
                               <p><b>Timings</b></p>
                               <p style="display:none"><b>Contact us</b></p>
                               <p><b>Teaching Classes</b></p>
                                  </div>
                                <div class="col-md-6 col-xs-6">
                                        <div class="clearfix">&nbsp;</div>
                               <p style="word-break: break-all;"> &nbsp;:&nbsp;<?php echo ucwords($row->syls);?>&nbsp;&nbsp;&nbsp;</p>
                               <p> &nbsp;:&nbsp;<?php echo ucwords($row->langs);?>&nbsp;</p>
                               <p>&nbsp;:&nbsp;<?php echo $row->times;?></p>
                               <p style="display:none"> &nbsp;:&nbsp;&nbsp;9676372122&nbsp;</p>
                               <p> &nbsp;:&nbsp;<?php echo $row->cats;?>&nbsp;</p>
                                  </div>
<?php } ?>
                              <div class="clearfix"></div>

                            </div>
                            <div class="col-sm-10 col-sm-offset-1">
                              <div class="col-sm-2">
                               <p><b>Area</b></p>
                             </div>
                             <div class="col-sm-10">
                                <p> &nbsp; &nbsp; :&nbsp;<?php echo ucwords($row->location);?>&nbsp;&nbsp;&nbsp;</p>
                              </div>
                            </div>
                                <div class="col-md-12">
                                <ul class="list-inline text-center">
                                  <div class="clearfix">&nbsp;</div>

                                  <li class="col-md-3"></li>
                                <li class="col-md-3 no-padd"></li>
                               <li class="col-md-3 no-padd"></li>
                                <div class="clearfix"></div>
                              </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
<!--about section start-->
    <div class="col-sm-12 bg-wh">
      <h3 class="col-blue"><b>About :</b></h3>
      <p><?php echo ucfirst($row->about_tutor);?></p>
    <div class="clearfix">&nbsp;</div>
    </div>
<!--about section end-->


                      <div class="col-sm-12" style="padding-top: 10px">

<!--

  <div class="tab-content">
    <div id="profile" class="tab-pane fade in active">
      <h3>Profile</h3>
      <p>hiiiiii this is jitendrahiiiiii this is jitendrahiiiiii this is jitendrahiiiiii this is jitendrahiiiiii this is jitendravhiiiiii this is jitendrahiiiiii this is jitendrahiiiiii this is jitendrahiiiiii this is jitendrahiiiiii this is jitendrahiiiiii this is jitendrahiiiiii this is jitendrahiiiiii this is jitendrahiiiiii this is jitendrahiiiiii this is jitendrahiiiiii this is jitendrahiiiiii this is jitendrahiiiiii this is jitendrahiiiiii this is jitendrahiiiiii this is jitendrahiiiiii this is jitendrahiiiiii this is jitendrahiiiiii this is jitendrahiiiiii this is jitendrahiiiiii this is jitendrahiiiiii this is jitendra</p>

    </div>




  </div>
-->
                      </div>
                        <div class="clearfix"></div>

                  <div class="clearfix"></div>
              </div><!--filter right end-->
              <div class="clearfix"></div>
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
 <!--  <script type="text/javascript">
      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('location')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }
 </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUlB6Eh-d9yy-kbAVPFbC9WcIYQCtJXJE&libraries=places&callback=initAutocomplete"
        async defer></script> -->
<!--
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUlB6Eh-d9yy-kbAVPFbC9WcIYQCtJXJE&libraries=places&callback=initAutocomplete"
async defer></script>
-->
</script>
<script type="text/javascript">
            var placeSearch, autocomplete;
            var componentForm = {
                location: 'long_name',
                locality: 'long_name',
                administrative_area_level_1: 'long_name',
                country: 'long_name',
                postal_code: 'short_name'
            };
            function initAutocomplete() {
            // Create the autocomplete object, restricting the search to geographical
            // location types.
            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */(document.getElementById('location')),
                {types: ['geocode'],
                    componentRestrictions: {country: "in"}
                });

            // When the user selects an address from the dropdown, populate the address
            // fields in the form.
            autocomplete.addListener('place_changed', fillInAddress);
            }
         function fillInAddress() {
          // Get the place details from the autocomplete object.
          var place = autocomplete.getPlace();
         var latitude = place.geometry.location.lat();
         var longitude = place.geometry.location.lng();

         // console.log(latitude);
         // console.log(longitude);
          document.getElementById('postal_code').value = 0;
          document.getElementById('locality').value = '';
          document.getElementById('lat').value = 0;
          document.getElementById('lng').value = 0;

         document.getElementById('lat').value = latitude;
         document.getElementById('lng').value = longitude;

           for (var i = 0; i < place.address_components.length; i++) {
      for (var j = 0; j < place.address_components[i].types.length; j++) {
        if (place.address_components[i].types[j] == "postal_code") {
           // console.log( place.address_components[i].long_name);
          document.getElementById('postal_code').value = place.address_components[i].long_name;
        }
        if (place.address_components[i].types[j] == "locality") {
          document.getElementById('locality').value = place.address_components[i].long_name;
        }
      }
    }
        }
    </script>
    <script type="text/javascript">
     $("#next1").click(function(){
      flag=true;
   var college=$('#college').val().trim();
   var category=$('#category').val();
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
           $('#gender').css('border','1px solid green');
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
          $('#college').css('border','1px solid green');
      }
      if(category!=null && category.length>2)
      {
        flag=false;
        $('#category').css('border','1px solid red');
      }
      else
      {
          $('#category').css('border','1px solid green');
      }

       if(tutor=="")
      {
          flag=false;
          $('#tutor').css('border','1px solid red');
      }
      else
      {
        $('#tutor').css('border','1px solid green');
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
           $(".home").removeClass("active");
          $(".menu1").addClass("active");
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
         $("[name^=frm_time]").each(function () {
           var frm_time=$(this).val();
        if($(this).val()!="" && !timepattern.test(frm_time))
          {
              flag=false;
           $("[name^=frm_time]").css('border','1px solid red');
          }
          else
          {
              $("[name^=frm_time]").css('border','1px solid green');
          }
       });
         $("[name^=to1_time").each(function () {
          var to1_time=$(this).val();
          if($(this).val()!="" && !timepattern.test(to1_time))
          {
              flag=false;
           $("[name^=to1_time]").css('border','1px solid red');
          }
          else
          {
           $("[name^=to1_time]").css('border','1px solid green');
          }
          });
   if(location=="")
      {
          flag=false;
          $('#location').css('border','1px solid red');
    }
    else if (location!="" && !loc_pattern.test(location))
    {
          flag=false;
          $('#location').css('border','1px solid red');
    }
       else
       {
           $('#location').css('border','1px solid green');
       }

       if(tutor=="")
      {
          flag=false;
          $('#tutor').css('border','1px solid red');
      }
      else
      {
        $('#tutor').css('border','1px solid green');
      }
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
           $('#subject').css('border','1px solid green');
           $('#subject_error').html("");
        }
      }
      if(tutor==33)
      {
        if((subject!=null || subject!="") && subject.length<=4)
        {
           $('#subject').css('border','1px solid green');
           $('#subject_error').html("");
        }
       else
       {
        flag=false;
         $('#subject').css('border','1px solid red');
           $('#subject_error').html("more than 4 subjects not allowed");
       }
      }
       if(flag==false)
      {
        $("#next2").attr("href","");
      }
      else
      {
          $("#next2").attr("href","#menu2");
          $(".menu1").removeClass("active");
          $(".menu2").addClass("active");

      }
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
    var location=$('#location').val().trim();
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
   if(category!=null && category.length>2)
      {
        flag=false;
        $('#category').css('border','1px solid red');
      }
      else
      {
          $('#category').css('border','1px solid green');
      }
      // if(tutor=='--select--')
      // {
      //     flag=false;
      //     $('#tutor').css('border','1px solid red');
      // }
      // else
      // {
      //     $('#tutor').css('border','1px solid green');
      // }

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
          $('#college').css('border','1px solid green');
      }
   if(location=='')
      {
          flag=false;
          $('#location').css('border','1px solid red');
    }
    else if (location!="" && !loc_pattern.test(location))
    {
          flag=false;
          $('#location').css('border','1px solid red');
    }
       else
       {
           $('#location').css('border','1px solid green');
       }

       if(birth=="")
       {
           flag=false;
           $('#birth').css('border','1px solid red');
       }
       else
       {
           $('#birth').css('border','1px solid green');
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
           $('#mobile').css('border','1px solid green');
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
           $('#email').css('border','1px solid green');
       }
       if(resume_error!="")
       {
           flag=false;
           $('#resume').css('border','1px solid red');
       }
       else
       {
           $('#resume').css('border','1px solid green');
       }
        if(pic_error!="")
       {
           flag=false;
           $('#picture').css('border','1px solid red');
       }
       else
       {
           $('#picture').css('border','1px solid green');
       }
      if(adhaar==""||adhaar.length!=12 || !num_pattern.test(adhaar))
       {
           flag=false;
           $('#adhaar').css('border','1px solid red');
       }
       else
       {
           $('#adhaar').css('border','1px solid green');
       }

       if(adhaar_proof_error!="")
       {
           flag=false;
           $('.adhaar_proof').css('border','1px solid red');
       }
       else
       {
           $('.adhaar_proof').css('border','1px solid green');
       }
       if($('input[name=gender]:checked').length<=0)
       {
               flag=false;
           $('#gender').css('border','1px solid red');
       }
       else
       {
           $('#gender').css('border','1px solid green');
       }
      $("[name^=frm_time]").each(function () {
           var frm_time=$(this).val();

        if($(this).val()!="" && !timepattern.test(frm_time))
          {
              flag=false;
           $("[name^=frm_time]").css('border','1px solid red');
          }
          else
          {
              $("[name^=frm_time]").css('border','1px solid green');
          }

          });
         $("[name^=to1_time").each(function () {
          var to1_time=$(this).val();
          if($(this).val()!="" && !timepattern.test(to1_time))
          {
              flag=false;
           $("[name^=to1_time]").css('border','1px solid red');
          }
          else
          {
           $("[name^=to1_time]").css('border','1px solid green');
          }
          });
          if(qualification=='')
      {
          flag=false;
          $('#qualification').css('border','1px solid red');
      }
      else
      {
          $('#qualification').css('border','1px solid green');
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
            $("#about").css('border','1px solid green');
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
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $("#app"); //Fields wrapper
    var add_button      = $("#add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){
            x++; //text box increment
            $(wrapper).append('<div id="my_append"><div class="form-group col-sm-12"><div class="form-group col-sm-5">from:<input type="text" name="frm_time[]" class="form-control time_picker1" placeholder="09:20am" onfocus="mytime()"></div><div class="form-group col-sm-5">to:<input type="text" name="to1_time[]" class="form-control time_picker1" placeholder="02:30pm" onfocus="mytime()"></div><span class="form-group col-sm-2"><button class="btn btn-danger btn_remove"  id="remove_field" style="margin-top:19px">x</button></span></div></div>');
        }
    });

    $(document).on("click","#remove_field", function(e){ //user click on remove text
        e.preventDefault(); $("#my_append").remove(); x--;
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
           $('#subject').css('border','1px solid green');
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
                        if (imageSize1 > 1048576)
                        {
                          $("#adhaar_proof_error").html(imageSize.files[i].name+ " is more than 1 mb max size 1 mb allowed only")
                        $(':submit').prop("disabled",true);                 }
                        else if(imageCount>2)
                        {
                           $("#adhaar_proof_error").html("two images allowed only")
                        $(':submit').prop("disabled",true);
                        }
                        else
                        {
                          $("#adhaar_proof_error").html("")
                          $(':submit').prop("disabled",false);
                        }

              }
 });
</script>

</body>
</html>
