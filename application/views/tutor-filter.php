<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Registration is Free. Whether you're new to tutoring or an experienced tutor, Join It's My Tutor, Fastest growing website for connecting tutors with students. The procedure to get Register or to become a Home tutor is very simple. Just fill the Tutor joining form on our site, Showcase your talent to Students and become a successful tutor">
    <title><?php echo TITLE_PATH;?> - Tutor Registration || Home Tuitions || Best Home Tutors</title>
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
<link rel="canonical" href="<?php echo base_url(); ?>tutor-list" />

<!-- Bootstrap -->
<link href="<?php echo MYCSS_PATH;?>bootstrap.min.css" type="text/css" rel="stylesheet"  />
<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
<!--custom css-->
  <link href="<?php echo MYCSS_PATH;?>custom.css" type="text/css" rel="stylesheet"  />
 <!--menu-->
  <link href="<?php echo MYCSS_PATH;?>menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="echo MYCSS_PATH;?>icomoon.css">
  <link href="<?php echo MYCSS_PATH;?>font-awesome.min.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <style>
          .filter-right-main p{margin: 6px 0px;}
      </style>
  </head>
  <body class="inner-bg">
  <div class="clearfix"></div>
    <?php $this->load->view('includes/header.php'); ?>
  <div class="clearfix"></div>
 <!--  <section>
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
     </section> -->
  <!-- <section class="breadgram">
    <div class="container">
      <div class="col-md-12">
        <ul class="list-inline">
          <li><a href="#">Home</a></li>
          <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
          <li>Filter</li>
        </ul>
      </div>
    </div>
  </section> -->


   <section>
      <div class="container-fluid no-padd">
                <img src="<?php echo base_url();?>assets/images/tutor-banner.jpg" class="img-responsive" style="width:100%" alt="itutors" />

      </div>
 <div class="clearfix">&nbsp;</div>
      </section>
  <!--section filter start-->
      <section class="filter">
        <div class="container">
          <div class="col-md-12 no-pad">
            <div class="col-md-3 no-pad">
              <?php echo form_error('loc_search');?>
              <div class="col-md-12 filter-left"><!--filter left start-->
              <form method="post" action="<?php echo base_url();?>tutor/search" id="form_search">
                  <div class="form-group">
                  <label for="inputEmail">City/Location</label>
                   <input type="text" class="form-control l" name="loc_search" id="location" onclick="a();">
                    <input type="hidden" id="locality" name="city" value="">
  <input type="hidden" id="postal_code" name="pincode" value="0">
  <input type="hidden" id="lat" name="lat" value="0">
  <input type="hidden" id="lng" name="lon" value="0">
                           <label for="nearby" style="margin-top:10px">Near by  in km</label>
  <input type="text" class="form-control" name="nearby" id="nearby" placeholder="Near by in km">
                  <p></p>
              </div>
              <div class="form-group">
                
                  <label for="inputEmail">Categories</label>
                  <select class="form-control" name="cat_search"
                   id="category">
                     <option value=''>--select--</option>
                    <?php
                    if(!empty($cat))
                    {
                     foreach($cat as $row)
                    {
                      ?>
                    <option value="<?php echo $row->category_id;?>"><?php echo $row->category_name;?></option>
                    <?php } } ?>
                  </select>
                  <p></p>
              </div>
              <div class="form-group">
                  <label >Syllabus</label>
                  <select class="form-control" name="syl_search" id="syllabus">
                     <option value=''>--select--</option>
                <?php if(!empty($syl)) { foreach($syl as $row)
                    {
                      ?>
                    <option value="<?php echo $row->syllabus_id;?>"><?php echo $row->syllabus_name;?></option>
                    <?php } } ?>
                   </select>
                  <p></p>
              </div>
              <div class="form-group">
                  <label for="inputEmail">Tutor Type</label>
                  <select class="form-control" name="gender" id="gender">
                     <option value=''>--select--</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                   </select>
                  <p></p>
              </div>
              <div class="form-group" style="display:none">
                  <label for="inputEmail">Qualification</label>
                  <select class="form-control" name="qual_search" id="qualification">
                     <option value=''>--select--</option>
                    <?php if(!empty($qual)) { foreach($qual as $row)
                    { 
                      ?>
                    <option value="<?php echo $row->qid;?>"><?php echo $row->qualification;?></option>
                    <?php } } ?>
                   
                  </select>
                  <p></p>
              </div>
              <div class="clearfix"></div>
                <ul class="list-inline">
                  <li class="col-md-6">
                    <input type="submit" class="btn btn-sm col-md-8" value="Filter" name="search" id="search" />
                  </li>
                  <li class="col-md-6 text-right">
                    <input type="reset" class="btn btn-sm pull-right col-md-8" value="Reset" />
                  </li>
                </ul>
              </form>
              <div class="clearfix">&nbsp;</div>
              <div class="col-md-12 ned-hlp"><!--ned-hlp start-->
                  <h4>Need Help&nbsp;?</h4>
                  <div class="clearfix"></div>
                  <p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;info@itsmytutor.com</p>
                  <p><i class="fa fa-commenting-o" aria-hidden="true"></i>&nbsp;&nbsp;+91 9676372122</p>
                  <p><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;&nbsp;+91 9676372122</p>
              </div><!--ned-hlp end-->
              <div class="col-md-12 ned-hlp"><!--ned-hlp start-->
                  <h4>Find a Greate Teacher</h4>
                  <div class="clearfix"></div>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has </p>
                 <div class="text-center">
                   <a href="#" class="btn btn-default">Request Now</a>
                 </div>
              </div><!--ned-hlp end-->
              <div class="col-md-12 ned-hlp"><!--ned-hlp start-->
                  <h4>Ask a Study Qustion</h4>
                  <div class="clearfix"></div>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has </p>
                 <div class="text-center">
                   <a href="#" class="btn btn-default">Ask Now</a>
                 </div>
              </div><!--ned-hlp end-->
              <div class="clearfix"></div>
                  
              </div><!--filter left end-->
               <div class="clearfix">&nbsp;</div>
                <div class="clearfix">&nbsp;</div>
                <div class="clearfix">&nbsp;</div>

              <div class="clearfix"></div>
            </div>
               
            <div class="col-md-9 no-pad">
              <div class="col-md-12 filter-right"><!--filter right start--> <?php
                  if(empty($msg))
                  {
                  $page=$this->uri->segment(3);
                                    if(!empty($page))
                                     $i=$page+1;
                               else
                            $i=1;
                        foreach($tutor_recs as $row)
                        {
                          
                          
                          ?>
                       <div class="col-md-6"><!--tutodiv start-->
                    <div class="col-md-12 no-padd"><!--tutodiv start-->
               <div class="col-md-12 filter-right-main">
                        <div class="col-md-12 filter-right-main-head">
                            <div class="col-md-8 no-pad">
                                <ul class="list-inline">
                                  <?php if($row->photo!="")
                                  { ?>
                                <li class="col-md-4"><img src="<?php echo base_url();?>uploads/tutor_pic/<?php echo $row->photo;?>" alt="itutors"></li>
                              <?php } else { ?>
                                <li class="col-md-4"><img src="<?php echo base_url();?>uploads/tutor_pic/tutor.png" alt="itutors"></li>
                                <?php }?>
                                <li class="col-md-8"><h3><?php echo ucwords($row->name);?></h3>
                                    <p><?php echo $row->unique_id;?></p>
                                </li>
                                </ul>
                            </div>
                            <div class="col-md-4 filter-right-main-head-left pull-right">
                                <h3 class="f18 m-t-12 text-right"><b><?php echo $row->views;?> Views </b></h3>
                                <ul style="display:none">
                                <li><a><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                               
                                </ul>
                                <ul class="hidden">
                                  <li><a href="#" data-toggle="tooltip" title="" data-original-title="Location"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="" data-original-title="Rating"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="" data-original-title="Mobile"><i class="fa fa-mobile" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="" data-original-title="Email"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            </div><!--fliter head end-->
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                              <p>Gender:<?php echo ucfirst($row->gender);?></p> 
                              <p>Age: <?php echo get_age($row->dob);?> Years</p>
                               <p>Experience:&nbsp;:&nbsp;<?php echo $row->experience;?> <?php if($row->experience==1){?>Year<?php } else { ?> Years <?php }?>&nbsp;</p>
                              <p>Qualification&nbsp;:&nbsp;<?php echo ucwords($row->qualification);?></p>
                              <p>Teaches&nbsp;:&nbsp;<span><?php echo $row->subjects;?></span></p>
                              <p>Area&nbsp;:&nbsp;<?php echo ucwords(substr($row->location,0,35)).'...';?>&nbsp;&nbsp;&nbsp;</p>
                              <div style="display:none" class="col-sm-6"><p> <img src="<?php echo base_url();?>assets/images/thumbsup.png" alt="thumbsup"> 18 Leads</p></div><div style="display:none" class="col-sm-6"><p> <img src="<?php echo base_url();?>assets/images/leads.png" alt="itutors">  18 Leads</p></div>
                              <ul class="list-inline">
                              
                                <li class="col-md-6">
                                  <a href="<?php echo base_url();?>tutor/profile/<?php echo $row->user_id;?>" class="btn btn-blue no-bod-rad f12 text-white col-sm-10" style="margin: 10px 0px;"> &nbsp; View Profile &nbsp; &nbsp;</a></li>
                            
<!--                                <li class="col-md-4"><a href="<?php echo base_url();?>tuition-center" class="btn btn-blue no-bod-rad f12 text-white" style="margin: 10px 0px;"> &nbsp; Send Enquiry  &nbsp; </a></li>-->
                                <li class="col-md-6"><a href="<?php base_url();?>registration/signup_load" class="btn btn-blue no-bod-rad f12 text-white col-sm-11" style="margin: 10px 0px;">Sign up and Contact Tutor</a></li>
                                <div class="clearfix"></div>
                              </ul>
                          </div>
                            <div class="clearfix"></div>
                        </div>
                         <div class="clearfix"></div>
                      </div>
                        <div class="clearfix"></div>
                      </div>
                      <?php $i++;
                       }
                             }else  { ?> <tr><td colspan="10" style="text-align:center; color:red;font-size:20px;">Tutors not Found...</td></tr>
                             <?php }
                             ?> 
                           </div>
                
                         </div>
                       </div>
                      <!--tutodiv end-->
       

        <div class="col-sm-12 text-center">
          <?php if(!empty($tutor_links)) echo $tutor_links;?>
        </div>
          </div>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
</section> 
<?php $this->load->view("includes/modal");?>
<!--section filter end-->
 <div class="clearfix"></div>
 <?php $this->load->view("includes/footer") ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo MYJS_PATH;?>jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo MYJS_PATH;?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo MYJS_PATH;?>menu.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip({
              placement : 'top'
          });
      });
</script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUlB6Eh-d9yy-kbAVPFbC9WcIYQCtJXJE&libraries=places&callback=initAutocomplete"
        async defer></script>

<script type="text/javascript">
  
  function a(){
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
                /** @type {!HTMLInputElement} */(document.getElementById('location')),
                {types: ['geocode'],
                    componentRestrictions: {country: "in"}
                });
            autocomplete.addListener('place_changed', fillInAddress);
            }
             initAutocomplete();
         function fillInAddress() {
          var place = autocomplete.getPlace();
         var latitude = place.geometry.location.lat();
         var longitude = place.geometry.location.lng();
          document.getElementById('postal_code').value = 0;
          document.getElementById('locality').value = '';
          document.getElementById('lat').value = 0;
          document.getElementById('lng').value = 0;
          document.getElementById('lat').value = latitude;
         document.getElementById('lng').value = longitude;
          for (var i = 0; i < place.address_components.length; i++) {
      for (var j = 0; j < place.address_components[i].types.length; j++) {
        if (place.address_components[i].types[j] == "postal_code") {
          document.getElementById('postal_code').value = place.address_components[i].long_name;
        }
        if (place.address_components[i].types[j] == "locality") {
          document.getElementById('locality').value = place.address_components[i].long_name;
        }
      }
    }
        }
        fillInAddress();
      }
    </script>
<script type="text/javascript">
  $("#form_search").submit(function(){
    var nearby_pattern=/^[0-9]*$/;
      var flag=true;
    var location=$('#location').val();
    // alert(location);
    var category=$('#category').val();
    // alert('cat-'+ category);
    var syllabus=$('#syllabus').val();
// alert('syl'+ syllabus);
    var gender=$('#gender').val();
    var nearby=$('#nearby').val();
    if(nearby!="" && !nearby_pattern.test(nearby))
    {
      flag=false;
      $("#nearby").css("border","1px solid red");
    }
    else
    {
       $("#nearby").css("border","");
    }
    //alert('qual'+ qualification);
    if(category=="" && gender=="" && location=="" && syllabus=="")
      {
          flag=false;
      }

      return flag;
});
</script>

  </body>
</html>
