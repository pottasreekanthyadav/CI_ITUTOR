<!--section header start-->

 <link href="<?php echo base_url();?>assets/css/notification.css" rel="stylesheet" />
 <link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
<style type="text/css">
   .suggestions{
 list-style: none;
    background: #fff;
    width: 90%;
    margin: 0 1px;
    text-align: left;
    padding: 5px 6px;
    z-index: 9;
    border-radius: 5px;
    top: 58px;
    max-height: 150px;
    overflow: auto;
    width: 85%;
    position: absolute;
    box-shadow: 0px 2px 5px #ddd;
}


.suggestions li {
    color: #000;
    padding: 5px 8px;
    border-bottom: 1px dashed #aaa;
    cursor: pointer;
    text-align: center;
}
</style>
   <section id="header" class="showdiv">

<div class="col-md-12 header-top">
    <div class="container">
        <div class="col-md-12">
                    <div class="col-md-2 col-xs-6 header-top-left">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;<?php $segent=$this->uri->segment(3);if($segent== 'hyd' || $segent ==''){echo 'Hyderabad'; }else{echo 'Bengluru'; } ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                              <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url();?>frontend/tutor_location_by/hyd">Hyderabad</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url();?>frontend/tutor_location_by/bng">Bengluru</a></li>
                                <!-- <li class="divider"></li> -->
                                <!-- <li><a href="<?php echo base_url();?>frontend/tutor_location_by/hyd">Delhi</a></li> -->
                               <!--  <li class="divider"></li>
                                <li><a href="#">Kolkata</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Pune</a></li> -->
                              </ul>
                            </li>
                          </ul>
                    </div>
                 <div class="col-md-5">
              <ul class="header-social hidden-xs">
                  <a href="#" class="col-wh"> <i class="fa fa-phone" aria-hidden="true"></i><b> +91 96 7637 2122 &nbsp; </b></a>
                   <a href="https://www.facebook.com/itsmytutor" target="_blank"><img src="<?php echo base_url();?>assets/images/fb.png" alt="fb"></a>
                  <a href="https://plus.google.com/u/0/116425185998909619764" target="_blank"><img src="<?php echo base_url();?>assets/images/googlepluse.png" alt="gp"></a>
                  <a href="https://twitter.com/itsmytutor" target="_blank"><img src="<?php echo base_url();?>assets/images/twitter.png" alt="tw"></a>
                  <a href="https://www.linkedin.com/company/its-my-tutor/" target="_blank"><img src="<?php echo base_url();?>assets/images/linkedin.png" alt="ld"></a>
                  <a href="#"><img src="<?php echo base_url();?>assets/images/yt.png" alt="yt"></a>
                  <a href="https://www.instagram.com/itsmytutor/" target="_blank"><img src="<?php echo base_url();?>assets/images/it.png" alt="it"></a>
              </ul>
            </div>
<!--
            <div class="col-md-2">
              <p style="margin: 3px 0px;" class="fs13"> <i class="fa fa-phone" aria-hidden="true"></i> &nbsp; +91 96 7637 2122</p>
            </div>
-->

            <div class="col-md-5 col-xs-6 header-top-right">
                <ul class="list-inline">
               <?php
			   $user_id=$this->session->userdata('user_id');
			   $user_type=$this->session->userdata('user_type');
               if(empty($user_id))
               {
                 ?>
                    <li style="margin-top: 2px;" class="fs13"><a href="<?php echo base_url();?>signup" class="no-bd"> <b>Signup</b></a></li>
                    <li style="margin-top: 2px;" class="fs13"><a href="<?php echo base_url();?>signup"><b>Login</b></a></li>
                 <?php
               }
               elseif($user_type==1 && !empty($user_id))
               {
                 ?>
                 <li><a href="<?php echo base_url();?>tutor/logout">Logout</a></li>
                 <li><a href="<?php echo base_url();?>tutor/dashboard"><?php $name= ucfirst($this->session->userdata('user_name')); $extracteddata = explode(' ',$name); echo $extracteddata[0]; ?></a></li>
                 <?php
               }else{ ?>
                  <li><a href="<?php echo base_url();?>parent/logout">Logout</a></li>
                 <li><a href="<?php echo base_url();?>parent/dashboard"><?php $name= ucfirst($this->session->userdata('user_name')); $extracteddata = explode(' ',$name); echo $extracteddata[0]; ?></a></li><?php
               }
               ?>
               <?php
               if(!empty($user_id))
               {
                ?>
  <li>
   <a class="dropdown dropdown-toggle" href="#" id="notifications-dropdown" data-toggle="dropdown" title="Notifications" aria-haspopup="true" aria-expanded="false">
     <span> <i id="notificationsIcon" class="fa fa-bell-o" aria-hidden="true" data-toggle="tooltip" ></i> <span><i id="notificationsBadge" class="fa fa-spinner fa-pulse fa-fw noti-loading" aria-hidden="true"></i></span> </span>  

      </a>
      <div class="dropdown-menu notification-dropdown-menu" aria-labelledby="notifications-dropdown">
        <h6 class="dropdown-header btn-blue">Notifications</h6>
        <a id="notificationsLoader" class="dropdown-item dropdown-notification  text-success" href="#">
          <p class="notification-solo text-center  text-success"><i id="notificationsIcon" class="fa fa-spinner fa-pulse fa-fw" aria-hidden="true"></i> Loading notifications...</p>
        </a>

        <div id="notificationsContainer" class="notifications-container"></div>

        <!-- AUCUNE NOTIFICATION -->
        <a id="notificationAucune" class="dropdown-item dropdown-notification" href="#">
          <p class="notification-solo text-center  text-success">Recent notifications not found</p>
        </a>

        <!-- TOUTES -->
        <div class="seeall col-sm-12"><a class="dropdown-item dropdown-notification-all pull-right" style="border-right: none;color: #4530b5;" href="<?php echo base_url().'parents/parent_ctrl/see_all'; ?>">
         See All
        </a></div>

      </div>
      <!-- Notification end -->
 <!-- TEMPLATE NOTIFICATION -->
  <script id="notificationTemplate" type="text/html">
    <!-- NOTIFICATION -->
    <a class="dropdown-item dropdown-notification" href="{{href}}">
      <div class="notification-read" id="{{idn}}">
        <i class="fa fa-times" aria-hidden="true" title="mark as read"></i>
      </div>
      <div class="notifications-body">
        <p class="notification-texte">{{texte}}</p>
        <p class="notification-date text-muted">
          <i class="fa fa-clock-o" aria-hidden="true"></i>{{date}}
        </p>
      </div>
    </a>
  </script></li>
  <?php
               }
               ?>
               <?php if($user_type!=1)
               { ?>
                <li class="hidden-xs"><a href="#" class="btn btn-warning"  data-toggle="modal" data-target="#myModal">Post Learning Requirement</a></li>

                    </ul>
                  <?php } ?>
            </div>
            <div class="clearfix"></div>
            </div>
         <div class="clearfix"></div>
    </div>
</div>
<div class="clearfix"></div>
<div class="col-md-12 header-menu">
        <div class="container">
	<div class="col-md-2 no-pad logo"><a href="<?php echo base_url();?>">
<!--    <img src="<?php echo base_url();?>assets/images/Beta-Test-Image.jpg" class="beta-size" alt="logo">-->
    <img src="<?php echo base_url();?>assets/images/logo.png" alt="logo" class="img-responsive logo-size" /></a></div>
    <?php $menu=$this->session->userdata('menu_display');
    if(empty($menu))
    { ?>
      <div class="col-md-10 header-menulist">
          <div id='cssmenu' class="col-md-12 no-pad">
                    <ul>
                           <?php $activepage = $this->uri->segment('1'); ?>
                        <li class="<?php if($activepage=='contact'){ echo 'active'; } ?>"><a href='<?php echo base_url(); ?>contact'>contact us</a></li>
                        <li class="<?php if($activepage=='activity'){ echo 'active'; } ?>"><a href='<?php echo base_url();?>book'>book corner</a></li>
                         <li class="<?php if($activepage=='faq'){ echo 'active'; } ?>"><a href='<?php echo base_url();?>faq'>faq</a></li>
                          <li class="<?php if($activepage=='tuition-center'){ echo 'active'; } ?>"><a href='<?php echo base_url();?>tuition-center'>tuitions center/institute</a></li>
                           <li class="<?php if($activepage=='tutor-list'){ echo 'active'; } ?>"><a href='<?php echo base_url();?>tutor-list'>tutors</a></li>
                            <li style="display:none" class="btn"><a href='#'>parent/student</a></li>

                             <li class="<?php if($activepage=='about-us'){ echo 'active'; } ?>"><a href='<?php echo base_url(); ?>about-us'>About us</a></li>
                             <li class="<?php if($activepage==''){ echo 'active'; } ?>"><a href='<?php echo base_url();  ?>'>Home</a></li>

                        </ul>
                    </div>
                </div>
             </div>
            </div>
            <?php } ?>
    <div class="clearfix"></div>
   </div>
</section>

<section id="header" class="hidediv" style="display:none">

<div class="col-md-12 header-top hidden">
    <div class="container">
        <div class="col-md-12">
                    <div class="col-md-2 col-xs-6 header-top-left">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;<?php $segent=$this->uri->segment(3);if($segent== 'hyd' || $segent ==''){echo 'Hyderabad'; }else{echo 'Bengluru'; } ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                              <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url();?>frontend/tutor_location_by/hyd">Hyderabad</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url();?>frontend/tutor_location_by/bng">Bengluru</a></li>
                                <!-- <li class="divider"></li> -->
                                <!-- <li><a href="<?php echo base_url();?>frontend/tutor_location_by/hyd">Delhi</a></li> -->
                               <!--  <li class="divider"></li>
                                <li><a href="#">Kolkata</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Pune</a></li> -->
                              </ul>
                            </li>
                          </ul>
                    </div>
                 <div class="col-md-5">
              <ul class="header-social hidden-xs">
                  <a href="#" class="col-wh"> <i class="fa fa-phone" aria-hidden="true"></i><b> +91 96 7637 2122 &nbsp; </b></a>
                   <a href="https://www.facebook.com/itsmytutor" target="_blank"><img src="<?php echo base_url();?>assets/images/fb.png" alt="fb"></a>
                  <a href="https://plus.google.com/u/0/116425185998909619764" target="_blank"><img src="<?php echo base_url();?>assets/images/googlepluse.png" alt="gp"></a>
                  <a href="https://twitter.com/itsmytutor" target="_blank"><img src="<?php echo base_url();?>assets/images/twitter.png" alt="tw"></a>
                  <a href="https://www.linkedin.com/company/its-my-tutor/" target="_blank"><img src="<?php echo base_url();?>assets/images/linkedin.png" alt="ld"></a>
                  <a href="#"><img src="<?php echo base_url();?>assets/images/yt.png" alt="yt"></a>
                  <a href="https://www.instagram.com/itsmytutor/" target="_blank"><img src="<?php echo base_url();?>assets/images/it.png" alt="it"></a>
              </ul>
            </div>
<!--
            <div class="col-md-2">
              <p style="margin: 3px 0px;" class="fs13"> <i class="fa fa-phone" aria-hidden="true"></i> &nbsp; +91 96 7637 2122</p>
            </div>
-->

            <div class="col-md-5 col-xs-6 header-top-right">
                <ul class="list-inline">
               <?php
			   $user_id=$this->session->userdata('user_id');
			   $user_type=$this->session->userdata('user_type');
               if(empty($user_id))
               {
                 ?>
                    <li style="margin-top: 2px;" class="fs13"><a href="<?php echo base_url();?>signup" class="no-bd"> <b>Signup</b></a></li>
                    <li style="margin-top: 2px;" class="fs13"><a href="<?php echo base_url();?>signup"><b>Login</b></a></li>
                 <?php
               }
               elseif($user_type==1 && !empty($user_id))
               {
                 ?>
                 <li><a href="<?php echo base_url();?>tutor/logout">Logout</a></li>
                 <li><a href="<?php echo base_url();?>tutor/dashboard"><?php $name= ucfirst($this->session->userdata('user_name')); $extracteddata = explode(' ',$name); echo $extracteddata[0]; ?></a></li>
                 <?php
               }else{ ?>
                  <li><a href="<?php echo base_url();?>parent/logout">Logout</a></li>
                 <li><a href="<?php echo base_url();?>parent/dashboard"><?php $name= ucfirst($this->session->userdata('user_name')); $extracteddata = explode(' ',$name); echo $extracteddata[0]; ?></a></li><?php
               }
               ?>
               <?php
               if(!empty($user_id))
               {
                ?>
  <li>
   <a class="dropdown dropdown-toggle" href="#" id="notifications-dropdown" data-toggle="dropdown" title="Notifications" aria-haspopup="true" aria-expanded="false">
     <span> <i id="notificationsIcon" class="fa fa-bell-o" aria-hidden="true" data-toggle="tooltip" ></i> <span><i id="notificationsBadge" class="fa fa-spinner fa-pulse fa-fw noti-loading" aria-hidden="true"></i></span> </span>  

      </a>
      <div class="dropdown-menu notification-dropdown-menu" aria-labelledby="notifications-dropdown">
        <h6 class="dropdown-header btn-blue">Notifications</h6>
        <a id="notificationsLoader" class="dropdown-item dropdown-notification  text-success" href="#">
          <p class="notification-solo text-center  text-success"><i id="notificationsIcon" class="fa fa-spinner fa-pulse fa-fw" aria-hidden="true"></i> Loading notifications...</p>
        </a>

        <div id="notificationsContainer" class="notifications-container"></div>

        <!-- AUCUNE NOTIFICATION -->
        <a id="notificationAucune" class="dropdown-item dropdown-notification" href="#">
          <p class="notification-solo text-center  text-success">Recent notifications not found</p>
        </a>

        <!-- TOUTES -->
        <div class="seeall col-sm-12"><a class="dropdown-item dropdown-notification-all pull-right" style="border-right: none;color: #4530b5;" href="<?php echo base_url().'parents/parent_ctrl/see_all'; ?>">
         See All
        </a></div>

      </div>
      <!-- Notification end -->
 <!-- TEMPLATE NOTIFICATION -->
  <script id="notificationTemplate" type="text/html">
    <!-- NOTIFICATION -->
    <a class="dropdown-item dropdown-notification" href="{{href}}">
      <div class="notification-read" id="{{idn}}">
        <i class="fa fa-times" aria-hidden="true" title="mark as read"></i>
      </div>
      <div class="notifications-body">
        <p class="notification-texte">{{texte}}</p>
        <p class="notification-date text-muted">
          <i class="fa fa-clock-o" aria-hidden="true"></i>{{date}}
        </p>
      </div>
    </a>
  </script></li>
  <?php
               }
               ?>
               <?php if($user_type!=1)
               { ?>
                <li class="hidden-xs"><a href="#" class="btn btn-warning"  data-toggle="modal" data-target="#myModal">Post Learning Requirement</a></li>

                    </ul>
                  <?php } ?>
            </div>
            <div class="clearfix"></div>
            </div>
         <div class="clearfix"></div>
    </div>
</div>
<div class="clearfix"></div>
<div class="col-md-12 header-menu">
        <div class="container">
	<div class="col-md-2 no-pad logo"><a href="<?php echo base_url();?>">
<!--    <img src="<?php echo base_url();?>assets/images/Beta-Test-Image.jpg" class="beta-size" alt="logo">-->
    <img src="<?php echo base_url();?>assets/images/logo.png" alt="logo" class="img-responsive logo-size" /></a></div>
    <?php $menu=$this->session->userdata('menu_display');
    if(empty($menu))
    { ?>
      <div class="col-md-10 header-menulist">
          <div id='cssmenu' class="col-md-12 no-pad">
                    <ul>
                           <?php $activepage = $this->uri->segment('1'); ?>
                        <li class="<?php if($activepage=='contact'){ echo 'active'; } ?>"><a href='<?php echo base_url(); ?>contact'>contact us</a></li>
                        <li class="<?php if($activepage=='activity'){ echo 'active'; } ?>"><a href='<?php echo base_url();  ?>activity'>Hobbies Corner</a></li>
                         <li class="<?php if($activepage=='faq'){ echo 'active'; } ?>"><a href='<?php echo base_url();?>faq'>faq</a></li>
                          <li class="<?php if($activepage=='tuition-center'){ echo 'active'; } ?>"><a href='<?php echo base_url();?>tuition-center'>tuitions center/institute</a></li>
                           <li class="<?php if($activepage=='tutor-list'){ echo 'active'; } ?>"><a href='<?php echo base_url();?>tutor-list'>tutors</a></li>
                            <li style="display:none" class="btn"><a href='#'>parent/student</a></li>

                             <li class="<?php if($activepage=='about-us'){ echo 'active'; } ?>"><a href='<?php echo base_url(); ?>about-us'>About us</a></li>
                             <li class="<?php if($activepage==''){ echo 'active'; } ?>"><a href='<?php echo base_url();  ?>'>Home</a></li>

                        </ul>
                    </div>
                </div>
             </div>
            </div>
            <?php } ?>
    <div class="clearfix"></div>
   </div>
</section>
     <!--section header end-->
