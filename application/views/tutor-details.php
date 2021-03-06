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
<link href="<?php echo MYCSS_PATH;?>bootstrap.min.css" type="text/css" rel="stylesheet"  />
<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
<!--custom css-->
  <link href="<?php echo MYCSS_PATH;?>custom.css" type="text/css" rel="stylesheet"  />
 <!--menu-->
  <link href="<?php echo MYCSS_PATH;?>menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo MYCSS_PATH;?>icomoon.css">
  <link href="<?php echo MYCSS_PATH;?>font-awesome.min.css" rel="stylesheet" />    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <style>
      .bg-wh{background: #fff;}
      .filter-right-main p{font-size:13px !important;margin: 8px 0px;}
      .tutor_img{width: 85px !important; height: 85px !important;    position: absolute;z-index: 999;}
          @media (min-width:320px) and (max-width:640px){
              .tutor_img { width: 40px !important;height: 50px !important;position: absolute;z-index: 999;}
          }
     </style>
  </head>
  <body class="inner-bg">
   <?php $this->load->view("includes/header.php"); ?>
   <div class="clearfix"></div>
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
      </section>
  <!--section filter start-->
      <section class="filter">
        <div class="container">
          <div class="col-md-12 no-pad">
            <div class="col-md-3 no-pad">
              <div class="col-md-12 filter-left"><!--filter left start-->
              <img src="<?php echo MYIMAGES_PATH;?>ad.jpg" class="img-responsive">
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
              <div class="clearfix"></div>
            </div>
            <div class="col-md-9 no-pad">
                <div class="clearfix">&nbsp;</div>
              <div class="col-md-12 filter-right"><!--filter right start-->
                 
                       <div class="col-md-12 filter-right-main" style="background:#fff">
                        <div class="col-md-12 col-xs-12 filter-right-main-head" style="background: #336BFC;margin-bottom:0px">
                            <div class="col-md-8 col-xs-9 no-pad"> 
                              <?php 
                              $data = $profile_data['tutor_recs'];
                              $views = $profile_data['views'];
                              if(!empty($contact_data) && ($this->session->userdata('user_type'))==2)
                              {
                                $mobile=$contact_data->mobile;
                                $email=$contact_data->email;
                              }
                              else
                              {
                                $mobile='';
                                $email='';                                
                              }
                              foreach($data as $row)
                              {
                                ?>
                                <ul class="list-inline">
                                <li class="col-md-3 col-xs-3"><img src="<?php echo base_url();?>uploads/tutor_pic/<?php echo $row->photo; ?>"  alt="itutors" style="" class="tutor_img"></li>
                                <li class="col-md-9 col-xs-9"><h3 class="col-wh"><?php echo ucwords($row->name);?> <span style="font-size: 12px;"> <?php echo $views;?> views</span></h3>
                                      <ul class="rattingtutor" style="display:none">
                                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                <li><a><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                </ul>
                                </li>
                                </ul>
                            </div>
                              <div class="col-md-4 filter-right-main-head-left pull-right hidden">
                                <h3 class="f18 m-t-12 text-right"><b><?php echo $views;?> Views </b></h3>
                                <ul>
                                <li><a><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                </ul>
                              </div>
                                <?php $user_type=$this->session->userdata('user_type');?>
                                <?php $uri1=$this->uri->segment(4);?>
                                <?php if($user_type!=2 && empty($uri1))
                                {?>
                          <p><span class="pull-right"> <a href="<?php echo base_url();?>tutor-list" class="btn btn-red no-bod-rad btn-sm col-wh m-t-10">Back</a> &nbsp; &nbsp;</span> </p> 
                        <?php }
                        else if(!empty($uri1)){ ?>
                             <p><span class="pull-right"> <a href="<?php echo base_url();?>parent/matching-tutor/<?php echo $this->uri->segment(4);?>" class="btn btn-red no-bod-rad btn-sm col-wh m-t-10">Back</a> &nbsp; &nbsp;</span> </p> 
                        <?php }
                        else
                        { ?>
  <p><span class="pull-right"> <a href="<?php echo base_url();?>tutor-list" class="btn btn-red no-bod-rad btn-sm col-wh m-t-10">Back</a> &nbsp; &nbsp;</span> </p> 
                  <?php }
                          ?>
                            </div><!--fliter head end-->
                        <div style="display:none" class="col-sm-12" style="background: #efeeec;">
                          <div class="col-sm-2 col-sm-offset-1"><p> &nbsp;  <img src="<?php echo base_url();?>assets/images/thumbsup.png" alt="thumbsup"> 18 Leads</p></div>
                          <div style="display:none"class="col-sm-3"><p> <img src="<?php echo base_url();?>assets/images/leads.png" alt="thumbsup"> 18 Feedbacks</p></div>
                          <div class="col-sm-6" style="margin-top: 4px;">
                           <button class="btn btn-blue btn-sm no-bod-rad pull-right col-sm-5 col-sm-offset-1"><a href="<?php echo base_url();?>tuition-center" style="color:#fff">Send Enquiry </a></button> 
                            <button class="btn btn-blue no-bod-rad btn-sm pull-right col-sm-5 col-sm-offset-1"> <a href="<?php echo base_url();?>contact" style="color:#fff">Contact us</a></button>
                                </div>
                             
                        </div>
                            <div class="clearfix"></div>
                            <div class="col-md-6 col-xs-12">
                              <div class="col-md-4 col-md-offset-2 col-xs-6">
                                  <div class="clearfix">&nbsp;</div>
                                   <p><b>Gender:</b></p>
                              <p><b>Age:</b></p>
                              <p><b>Experience</b></p>
                              <p><b>Qualification</b></p>
                              <p><b>Teaches</b></p>
                              
                              </div>
                              <div class="col-md-5 col-xs-6">
                                      <div class="clearfix">&nbsp;</div>
                                   <p>&nbsp;:&nbsp;<?php echo ucfirst($row->gender);?></p>
                              <p>&nbsp;:&nbsp;<?php echo get_age($row->dob);?> Years</p>
                              <p>&nbsp;:&nbsp;<?php echo $row->experience;?> <?php if($row->experience==1){?>Year<?php } else { ?> Years <?php }?>&nbsp;</p>
                              <p>&nbsp;:&nbsp;<?php echo ucwords($row->qualification);?></p>
                              <p style="word-break: break-all;">:&nbsp;<span><?php echo ucwords($row->subjects);?></span></p>
                              
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
                            <p style="word-break: break-all;">&nbsp; : <?php echo ucwords($row->syls);?> </p>
                            <p> &nbsp;:&nbsp;<?php echo ucwords($row->langs);?>&nbsp;</p>
                            <p>&nbsp;:&nbsp;<?php echo $row->times;?></p>
                            <p style="display:none"> &nbsp;:&nbsp;&nbsp;9676372122&nbsp;</p>
                            <p> &nbsp;:&nbsp;<?php echo $row->cats;?>&nbsp;</p>
                                  </div>

                              <div class="clearfix"></div>

                            </div>
                               <div class="col-sm-10 col-sm-offset-1">
                              <div class="col-sm-2">
                               <p><b>Area</b></p>
                             </div>
                             <div class="col-sm-10">
                                <p> &nbsp; &nbsp;&nbsp;:&nbsp;<?php echo ucwords($row->location);?>&nbsp;</p>
                              </div>
                            </div>
                          <div class="col-sm-10 col-sm-offset-1">
                                <?php if(!empty($mobile)){echo "<div class='col-sm-6'><b>Mobile:</b> $mobile</div>"; }?>
                                  <?php if(!empty($email)){echo "<div class='col-sm-6'><b>Email:</b> $email</div>"; }?>
                            </div>

                            <div class="clearfix"></div>
                        </div>
<!--about section start-->
    <div class="col-sm-12 bg-wh">
      <h3 class="col-blue"><b>About :</b></h3>
      <p><?php echo ucfirst($row->about_tutor);?></p>
    </div>
<!--about section end-->
                  
<!--reviews section start-->
    <div class="col-sm-12 bg-wh hidden">
      <h3 class="col-blue"><b>Reviews :</b></h3>
        <hr>
    <div class="col-sm-12 no-padd review-scroll">
      <div class="col-sm-12">
        <h4>James Cameroan</h4>
          <div class="ratiing">
             <ul style="display:none">
                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                <li><a><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
             </ul>
          </div>
      <p class="f14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged..</p>
    </div>  
  <div class="col-sm-12">
        <h4>James Cameroan</h4>
          <div class="ratiing">
             <ul> 
                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                <li><a><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
             </ul>
          </div>
      <p class="f14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged..</p>
    </div>  
        <div class="col-sm-12">
        <h4>James Cameroan</h4>
          <div class="ratiing">
             <ul>
                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                <li><a><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
             </ul>
          </div>
      <p class="f14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged..</p>
    </div>  
        <div class="col-sm-12">
        <h4>James Cameroan</h4>
          <div class="ratiing">
             <ul>
                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                <li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                <li><a><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
             </ul>
          </div>
      <p class="f14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged..</p>
    </div>
        </div>
           <div class="clearfix">&nbsp;</div> <div class="clearfix">&nbsp;</div>
        </div>
<!--reviews section end-->
                      <div class="col-sm-12" style="padding-top: 10px">
          
<!--

  <div class="tab-content">
    <div id="profile" class="tab-pane fade in active">
      <h3>Profile</h3>
      <p><?php echo $row->about_tutor;?></p>

    </div>
     <?php }?>


   
  
  </div>
-->
                          <div class="clearfix">&nbsp;</div> <div class="clearfix">&nbsp;</div> <div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
                      </div>
                        <div class="clearfix"></div>
                   
                  <div class="clearfix"></div>
              </div><!--filter right end-->
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
      </section>
  <!--section filter end-->
       <?php $this->load->view("includes/modal.php"); ?>
 <div class="clearfix"></div>
 <?php $this->load->view("includes/modal.php"); ?>
  <div class="clearfix"></div><div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
 <?php $this->load->view("includes/footer") ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo  MYJS_PATH;?>jquery.min.js"></script>
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
  </body>
</html>
