<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <meta name="description" content=" It My Tutor Is A Big Venture Started with a vision of organizing the home tuitions in Hyderabad.  Parents can get Experienced And The Best Home Tutors nearby to your location. For More Details Call us on 9676372122">
    <title><?php echo TITLE_PATH;?></title>
    <style>
      .hgh420{height: 420px}
    </style>

<!-- Bootstrap -->
<link href="<?php echo MYCSS_PATH;?>bootstrap.min.css" type="text/css" rel="stylesheet"  />
<!--custom css-->
  <link href="<?php echo MYCSS_PATH;?>custom.css" type="text/css" rel="stylesheet"  />
 <!--menu-->
  <link href="<?php echo MYCSS_PATH;?>menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo MYCSS_PATH;?>icomoon.css">
  <link href="<?php echo MYCSS_PATH;?>font-awesome.min.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
  </head>
  <body>
   <?php $this->load->view('includes/header.php'); ?>
   <div class="clearfix"></div>
  <!--section banner start-->
  <section class="banner">
      
      <div class="container-fluid no-padd">
       <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php  echo MYIMAGES_PATH;?>banner2.jpg" alt="img1" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php  echo MYIMAGES_PATH;?>banner3.jpg" alt="img2" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="<?php  echo MYIMAGES_PATH;?>banner.jpg" alt="img3" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
      </div>
<!--
      <img src="<?php  echo MYIMAGES_PATH;?>banner.jpg" class="img-responsive" alt="itutors" />
      <div class="banner-main hidden">
          <div class="col-lg-7 pull-right text-left">
          <h4>Register with Itutor and get 100% Service Satisfaction.<br> Unless We Guarantee you <span>100% Money Back</span></h4>
          <div class="col-lg-12 text-center">
              <a href="<?php base_url();?>registration/signup_load" class="btn btn-warning">Start Now</a>
          </div>
          <div class="clearfix"></div>
          </div>
     </div>
-->
  </section>
  <!--section banner end-->
  <div class="clearfix"></div>
  <!-- Pay strip section  start  -->
  <section>
    <div class="container-fluid payonce">
      <div class="container">
        <div class="col-sm-1 col-xs-2 no-padd">
          <img src="<?php echo MYIMAGES_PATH;?>1000.png" class="img-responsive">
        </div>
        <div class="col-sm-7 col-xs-6">
          <h2 class="m-t-16">Pay Once and use for Lifetime <a href="#" class="pay-more"><span class="f14">Know more</span></a></h2>
        </div>
        <div class="col-sm-4 col-xs-2">
          <button type="button" class="btn btn-danger2 no-bod-rad  col-sm-8 col-sm-offset-2" style="margin-top: 16px;" onclick="navigate_now();">Start Now</button>
        </div>
      </div>
    </div>
  </section>
    <!-- Pay strip section end  -->
  <div class="clearfix"></div>
  <section class="banner-list">
        <div class="container">
            <div class="col-md-12">
              <div class="clearfix">&nbsp;</div>
               <div class="clearfix">&nbsp;</div>
                 <div class="col-md-12 text-center">
              <h2><b> How <span class="tl-site">Itsmytutor </span> Works</b></h2>
          </div>
                 <div class="clearfix">&nbsp;</div>
                  <div class="clearfix">&nbsp;</div>
                <div class="col-md-4 no-pad">
                    <div class="col-md-12 banner-list-hight text-center">
                      <img src="<?php echo MYIMAGES_PATH;?>icon1.png" alt="icon1" />
                      <div class="clearfix"></div>
                      <h3>Post your learning requirements</h3>
                      <p>Be clear about your requirement and post on itsmytutor</p>
                    </div>
                </div>
                <div class="col-md-4 no-pad">
                    <div class="col-md-12 banner-list-hight1 text-center">
                      <img src="<?php echo MYIMAGES_PATH;?>icon2.png" alt="icon2" />
                      <div class="clearfix"></div>
                      <h3>Get Response from Professional Tutors</h3>
                      <p>Tutors will get notified and they will respond as per you requirement</p>
                    </div>
                </div>
                <div class="col-md-4 no-pad">
                    <div class="col-md-12 banner-list-hight2 text-center">
                      <img src="<?php echo MYIMAGES_PATH;?>icon3.png" alt="icon3" />
                      <div class="clearfix"></div>
                      <h3>Hire the Best Tutor Near by You</h3>
                      <p>Compare profiles and hire Best  Tutor</p>
                    </div>
                </div>
            </div>
        </div>
  </section>


 <section class="welcome">
      <div class="container">
          <div class="col-md-12 text-center">
              <h2><b>This is How <span class="tl-site">Itsmytutor </span> Works for Students &nbsp;&amp;&nbsp;Parents</b></h2>
          </div>
          <div class="clearfix"></div>
       
          <div class="clearfix">&nbsp;</div>
          <div class="col-md-12">
            <div class="col-md-7">
<!--              <h3>Welcome to <span>ITSMYTUTOR</span></h3>-->
              <div class="clearfix"></div>
                <div class="clearfix">&nbsp;</div>
              <p>Itsmytutor.com is a startup venture with a vision of organizing the home tuitions in Hyderabad. We are specialized in providing Professional, Experienced and Dedicated Home Tutors at your home only. Parents can get "The Best Tutors" nearby to your location among our huge database.</p>
              <p>We understand that each student learns differently, so we work with your learning style and academic needs, customizing our approach to create a programme that meets your goals. And students can focus on studying in the comfort of their home and never deal with the stress and bother of transportation to sessions.
</p>
              <div class="clearfix"></div>
           
              <div class="clearfix"></div>
            </div>
            <div class="col-md-5">
              <img src="<?php echo MYIMAGES_PATH;?>about.png" alt="itutors" class="img-responsive" width="100%" />
            </div>
              <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
                   <div class="col-sm-12 tutor-imgs">
              
                <div class="col-sm-4 text-center"><img src="<?php echo MYIMAGES_PATH;?>tutor.png" alt="tutors"/> <p class="f18"> <b>&nbsp;Over <span class="tl-site">2000</span> Tutors </b></p></div>
                       <div class="col-sm-4 text-center"><img src="<?php echo MYIMAGES_PATH;?>students.png" alt="students"/> <p class="f18"><b>&nbsp;Over <span class="tl-site">5000</span> Students</b></p></div>
<!--                       <div class="col-sm-3 text-center"><img src="<?php echo MYIMAGES_PATH;?>subjects.png" alt="tutors"/> <p class="f18"><b>&nbsp;Over <span class="tl-site">35</span> Subjects</b></p></div>-->
                    <div class="col-sm-4 text-center"><img src="<?php echo MYIMAGES_PATH;?>jobs.png" alt="tutors"/><p class="f18"><b>&nbsp;Over <span class="tl-site">2500</span> Jobs </b></p></div>

                    </div>
          </div>
          <div class="clearfix"></div>
      </div>
      <div class="clearfix">&nbsp;</div>
      <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
 </section>
 <section class="student-succcess">
   <div class="container">
     <div class="col-md-12">
     <h4 class="text-center">Student's Success Stories</h4>
       <div class="col-md-12" data-wow-delay="0.2s">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/rssems/128.jpg" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/adellecharles/128.jpg" alt="">
                                </li>
                            </ol>

                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center carousel-hgh">

                                <!-- Quote 1 -->
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                                <small>Someone famous</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <!-- Carousel Buttons Next/Prev -->
                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
     </div>
   </div>
 </section>
 <section class="popular">
   <div class="container">
     <div class="col-md-12">
        <h4 class="text-center">Popular Subjects</h4>
        <div class="clearfix">&nbsp;</div>  <div class="clearfix">&nbsp;</div>
          <div class="col-md-3">
            <div class="col-md-12 popular-mian text-center">
                <img src="<?php echo MYIMAGES_PATH;?>p1.jpg" alt="itutors" class="m-b-6" />
                <div class="clearfix"></div>
                 <a href="#"><b> Knowmore </b></a>
<!--                <h3>Mathematics</h3>-->
<!--
                <p>Mathematics solves problems by using logic. Mathematicians often use deduction. Deduction is
a special way of thinking to discover and prove new truths using old truths.  mathematics developed from counting, calculation, measurement, and the systematic study of the shapes and motions of physical objects.
</p>
-->
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="col-md-3">
            <div class="col-md-12 popular-mian text-center">
                <img src="<?php echo MYIMAGES_PATH;?>p2.jpg" alt="itutors" class="m-b-6" />
                <div class="clearfix"></div>
                 <a href="#"><b> Knowmore</b></a>
<!--                <h3>Physical Science</h3>-->
<!--
                <p>Science is the study of the nature and behaviour of natural things and the knowledge that we
obtain about them. It is the total of physics, chemistry, biology,geology and astronomy. Science makes use of mathematics, and it makes observations and experiments.
 </p>
-->
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="col-md-3">
            <div class="col-md-12 popular-mian text-center">
                <img src="<?php echo MYIMAGES_PATH;?>p3.jpg" alt="itutors" class="m-b-6" />
                <div class="clearfix"></div>
                 <a href="#"><b> Knowmore </b></a>
<!--                <h3>Chemistry</h3>-->
<!--
                <p>Chemistry is important because this is the subject that teaches the history of the world and
the history of a nation. The subject plays a vital and crucial role in the civic, social and intellectual development of the individual student.
 </p>
-->
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="col-md-3">
            <div class="col-md-12 popular-mian text-center">
                <img src="<?php echo MYIMAGES_PATH;?>p4.jpg" alt="itutors" class="m-b-6" />
                <div class="clearfix"></div>
                <a href="#"><b> Knowmore</b></a>
<!--                <h3> English</h3>-->
<!--
                <p>English Language is a essential to the field of education. In many countries, children are taught
and encouraged to learn English as a second language. At the university level, students in many countries study almost all their subjects in English in order to make the material more accessible to international students.
</p>
-->
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
           <div class="clearfix">&nbsp;</div> 
        <div class="clearfix"></div>
     </div>
   </div>
 </section>

 <section class="tutor-testmonial">
   <div class="col-md-12 no-pad">
       <div class="col-md-6 tutor-testmonial-left">
       <div class="col-sm-10 col-md-push-2">
       <div class="clearfix">&nbsp;</div>
         <h4><span>Tutor&nbsp;&amp;&nbsp;Trainer Testmonials</span></h4>
         <div class="clearfix">&nbsp;</div>

    <div class='col-md-12'>
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
         <div class="carousel-inner" style="min-height:200px !important;">

          <!-- Quote 1 -->
          <div class="item active">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="http://www.reactiongifs.com/r/overbite.gif" style="width: 100px;height:100px;">
                  <!--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">-->
                </div>
                <div class="col-sm-9">
                  <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
                  <small>Someone famous</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 2 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/mijustin/128.jpg" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
                  <small>Someone famous</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 3 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/keizgoesboom/128.jpg" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
                  <small>Someone famous</small>
                </div>
              </div>
            </blockquote>
          </div>
        </div>

      </div>
    </div>
         <div class="clearfix">&nbsp;</div>
       </div>
     <div class="clearfix"></div>
     </div>
     <div class="col-md-6 no-pad">
       <div class="col-md-12 tutor-testmonial-right">
          <div class="col-md-12  text-center">
          <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h4>
          <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</h5>
          <div class="clearfix"></div>
          <a href="<?php base_url();?>registration/signup_load" class="btn btn-warning btn-md">Create Your Profile</a>
          <div class="clearfix"></div>
          </div>
       </div>
     </div>
     <div class="clearfix"></div>
   </div>
   <div class="clearfix"></div>
 </section>
 <div class="clearfix"></div>
<!--  <section class="student-review">
   <div class="container">
     <div class="col-md-12">
       <h4 class="text-center">Student Review</h4>
       <div class="clearfix">&nbsp;</div>
       <div class="col-md-3">
            <div class="col-md-12 student-reviewmian">
            <h5>Lorem Ipsum is simply dummy text of the printing and typesetting </h5>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard  of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                <div class="clearfix"></div>
                <div class="col-md-12 student-review-left">
                <img src="images/down-arrow.png" alt="arrow" class="ar" />
                    <ul class="list-inline">
                      <li class="col-md-4"><img src="images/man.jpg" alt="man" class="img-responsive" /></li>
                      <li><h6>Sc mouli</h6><p>B.Tech Studnet</p></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="col-md-3">
            <div class="col-md-12 student-reviewmian">
            <h5>Lorem Ipsum is simply dummy text of the printing and typesetting </h5>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard  of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                <div class="clearfix"></div>
                <div class="col-md-12 student-review-left">
                <img src="images/down-arrow.png" alt="arrow" class="ar" />
                    <ul class="list-inline">
                      <li class="col-md-4"><img src="images/man.jpg" alt="man" class="img-responsive" /></li>
                      <li><h6>Sc mouli</h6><p>B.Tech Studnet</p></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="col-md-3">
            <div class="col-md-12 student-reviewmian">
            <h5>Lorem Ipsum is simply dummy text of the printing and typesetting </h5>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard  of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                <div class="clearfix"></div>
                <div class="col-md-12 student-review-left">
                <img src="images/down-arrow.png" alt="arrow" class="ar" />
                    <ul class="list-inline">
                      <li class="col-md-4"><img src="images/man.jpg" alt="man" class="img-responsive" /></li>
                      <li><h6>Sc mouli</h6><p>B.Tech Studnet</p></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="col-md-3">
            <div class="col-md-12 student-reviewmian">
            <h5>Lorem Ipsum is simply dummy text of the printing and typesetting </h5>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard  of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                <div class="clearfix"></div>
                <div class="col-md-12 student-review-left">
                <img src="images/down-arrow.png" alt="arrow" class="ar" />
                    <ul class="list-inline">
                      <li class="col-md-4"><img src="images/man.jpg" alt="man" class="img-responsive" /></li>
                      <li><h6>Sc mouli</h6><p>B.Tech Studnet</p></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
     </div>
   </div>
 </section> -->
 <div class="clearfix"></div>


 <div class="clearfix">&nbsp;</div>
  <!-- <div class="clearfix">&nbsp;</div>
  <section class="tutors-review">
   <div class="container">
     <div class="col-md-12">
       <h4 class="text-center">Tutors Review</h4>
       <div class="clearfix">&nbsp;</div>
       <div class="col-md-3">
            <div class="col-md-12 student-reviewmian">
            <h5>Lorem Ipsum is simply dummy text of the printing and typesetting </h5>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard  of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                <div class="clearfix"></div>
                <div class="col-md-12 tutors-review-left">
                <img src="images/down-arrow.png" alt="arrow" class="ar" />
                    <ul class="list-inline">
                      <li class="col-md-4"><img src="images/man.jpg" alt="man" class="img-responsive" /></li>
                      <li><h6>Sc mouli</h6><p>B.Tech Studnet</p></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="col-md-3">
            <div class="col-md-12 student-reviewmian">
            <h5>Lorem Ipsum is simply dummy text of the printing and typesetting </h5>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard  of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                <div class="clearfix"></div>
                <div class="col-md-12 tutors-review-left">
                <img src="images/down-arrow.png" alt="arrow" class="ar" />
                    <ul class="list-inline">
                      <li class="col-md-4"><img src="images/man.jpg" alt="man" class="img-responsive" /></li>
                      <li><h6>Sc mouli</h6><p>B.Tech Studnet</p></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="col-md-3">
            <div class="col-md-12 student-reviewmian">
            <h5>Lorem Ipsum is simply dummy text of the printing and typesetting </h5>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard  of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                <div class="clearfix"></div>
                <div class="col-md-12 tutors-review-left">
                <img src="images/down-arrow.png" alt="arrow" class="ar" />
                    <ul class="list-inline">
                      <li class="col-md-4"><img src="images/man.jpg" alt="man" class="img-responsive" /></li>
                      <li><h6>Sc mouli</h6><p>B.Tech Studnet</p></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="col-md-3">
            <div class="col-md-12 student-reviewmian">
            <h5>Lorem Ipsum is simply dummy text of the printing and typesetting </h5>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard  of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                <div class="clearfix"></div>
                <div class="col-md-12 tutors-review-left">
                <img src="images/down-arrow.png" alt="arrow" class="ar" />
                    <ul class="list-inline">
                      <li class="col-md-4"><img src="images/man.jpg" alt="man" class="img-responsive" /></li>
                      <li><h6>Sc mouli</h6><p>B.Tech Studnet</p></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
     </div>
   </div>
 </section> -->
 <div class="clearfix"></div>
 <section class="whytutor">
 <div class="container">
   <div class="col-md-12">
       
     <h2 class="text-center"><b>Why <span class="tl-site">Itsmytutor </span></b></h2>
     <div class="clearfix">&nbsp;</div>
       <div class="col-sm-12 br-bt"><h3>For Parents</h3></div>
     <div class="clearfix">&nbsp;</div>

          <div class="col-md-4">
            <div class="col-md-12 whytutor-mian no-padd">
                <div class="col-md-3">
                  <img src="<?php echo MYIMAGES_PATH;?>whyits/verified-tutor.png" alt="itutors"/>
                </div>
                <div class="col-md-9">
                <h4>Verified Tutors</h4>
                <p><b>We verify personal and Professional at Details </b></p>
                    </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>  
       <div class="col-md-4">
            <div class="col-md-12 whytutor-mian no-padd">
                <div class="col-md-3">
                  <img src="<?php echo MYIMAGES_PATH;?>whyits/commissions.png" alt="itutors"/>
                </div>
                <div class="col-md-9">
                <h4>Mobile App Services</h4>
                  <p><b>Offering you free 1st time  in india with complete tracking. </b></p>
                    </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>  
       <div class="col-md-4">
            <div class="col-md-12 whytutor-mian no-padd">
                <div class="col-md-3">
                  <img src="<?php echo MYIMAGES_PATH;?>whyits/profile-ratings.png" alt="itutors"/>
                </div>
                <div class="col-md-9">
                <h4>Profile Ratings</h4>
                  <p><b>Genuine Ratings from Students or Parents </b></p>
                    </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div> 
       <div class="clearfix">&nbsp;</div>
       <div class="col-md-4">
            <div class="col-md-12 whytutor-mian no-padd">
                <div class="col-md-3">
                  <img src="<?php echo MYIMAGES_PATH;?>whyits/extra-activities.png" alt="itutors"/>
                </div>
                <div class="col-md-9">
                <h4>Extra Activities</h4>
                  <p><b>You can access all extra Activity Centers like dance,music,Robotic etc </b></p>
                    </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>   
       <div class="col-md-4">
            <div class="col-md-12 whytutor-mian no-padd">
                <div class="col-md-3">
                  <img src="<?php echo MYIMAGES_PATH;?>whyits/unique-subscription.png" alt="itutors"/>
                </div>
                <div class="col-md-9">
                <h4>Unique Subscription</h4>
                  <p><b>One time subscription fee for the services offered to you any where in india</b></p>
                    </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
       <div class="clearfix">&nbsp;</div>
       <div class="col-sm-12 br-bt"><h3>For Tutors</h3></div>
     <div class="clearfix">&nbsp;</div>
            <div class="col-md-4">
            <div class="col-md-12 whytutor-mian no-padd">
                <div class="col-md-3">
                  <img src="<?php echo MYIMAGES_PATH;?>whyits/unique-subscription.png" alt="itutors"/>
                </div>
                <div class="col-md-9">
                <h4>Unique Subscription</h4>
                  <p><b>Our </b></p>
                    </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
<!--
          <div class="col-md-3">
            <div class="col-md-12 whytutor-mian text-center">
                  <img src="<?php echo MYIMAGES_PATH;?>ful-fill.png" alt="itutors"/>
                <h4><b>Fulfilling Potential</b></h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="col-md-3">
            <div class="col-md-12 whytutor-mian text-center">
                  <img src="<?php echo MYIMAGES_PATH;?>mc.png" alt="itutors"  />
                <h4>Making Chance</h4>
                   <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>  
       <div class="col-md-3">
            <div class="col-md-12 whytutor-mian text-center">
                  <img src="<?php echo MYIMAGES_PATH;?>findb.png" alt="itutors" />
                <h4>Finding Balance</h4>
                   <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
-->
       <div class="clearfix">&nbsp;</div>
       <div class="clearfix">&nbsp;</div>
       <div class="clearfix">&nbsp;</div>
   </div>
 </div>
 </section>
<?php $this->load->view('includes/modal.php'); ?>
 <?php $this->load->view('includes/footer.php'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo MYJS_PATH;?>jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo MYJS_PATH;?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo MYJS_PATH;?>menu.js"></script>
    <script type="text/javascript">
      function navigate_now(){
        location.href="<?php base_url();?>registration/signup_load";
      }
    </script>

  </body>
</html>
