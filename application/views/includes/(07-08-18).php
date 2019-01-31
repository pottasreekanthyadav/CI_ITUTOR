<!--section header start-->

 <link href="<?php echo base_url();?>assets/css/notification.css" rel="stylesheet" />
<!-- <style type="text/css">
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
</style> -->
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
   <section id="header">

<div class="col-md-12 header-top">
    <div class="container">
        <div class="col-md-12">
                    <div class="col-md-2 col-xs-6 header-top-left">
<!--
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;Hyderabad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Banglore</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Chennai</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Delhi</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Kolkata</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Pune</a></li>
                              </ul>
                            </li>
                          </ul>
-->
                        <p style="margin: 3px 0px;"> <i class="fa fa-mobile" aria-hidden="true"></i> +91 96 7637 2122</p>
                    </div>
            <div class="col-md-6 col-xs-6 header-top-right">
                <ul class="list-inline">
               <?php
			   $user_id=$this->session->userdata('user_id');
			   $user_type=$this->session->userdata('user_type');
               if(empty($user_id))
               {
                 ?>
                  <li style="margin-top: 5px;"><a href="<?php echo base_url();?>signup" class="no-bd">Signup</a></li>
                  <li style="margin-top: 5px;"><a href="<?php echo base_url();?>signup">Login</a></li>
                 <?php
               }
               elseif($user_type==1 && !empty($user_id))
               {
                 ?>
                 <li><a href="<?php echo base_url();?>tutor/logout">Logout</a></li>
                 <li><a href="<?php echo base_url();?>tutor/dashboard"> <?php echo ucfirst($this->session->userdata('user_name')); ?></a></li>
                 <?php
               }else{ ?>
                  <li><a href="<?php echo base_url();?>parent/logout">Logout</a></li>
                 <li><a href="<?php echo base_url();?>parent/dashboard">Hi <?php echo ucfirst($this->session->userdata('user_name')); ?></a></li><?php
               }
               ?>
               <?php
               if(!empty($user_id))
               {
                ?>
  <li>                
   <a class="dropdown dropdown-toggle" href="#" id="notifications-dropdown" data-toggle="dropdown" title="Notifications" aria-haspopup="true" aria-expanded="false">
        <i id="notificationsIcon" class="fa fa-bell-o" aria-hidden="true" data-toggle="tooltip" ></i>
        <span id="notificationsBadge" class="badge badge-danger"><i class="fa fa-spinner fa-pulse fa-fw" aria-hidden="true"></i></span>
      </a>
      <div class="dropdown-menu notification-dropdown-menu" aria-labelledby="notifications-dropdown">
        <h6 class="dropdown-header text-success">Notifications</h6>
        <a id="notificationsLoader" class="dropdown-item dropdown-notification  text-success" href="#">
          <p class="notification-solo text-center  text-success"><i id="notificationsIcon" class="fa fa-spinner fa-pulse fa-fw" aria-hidden="true"></i> Loading notifications...</p>
        </a>

        <div id="notificationsContainer" class="notifications-container"></div>

        <!-- AUCUNE NOTIFICATION -->
        <a id="notificationAucune" class="dropdown-item dropdown-notification" href="#">
          <p class="notification-solo text-center  text-success">Recent notifications not found</p>
        </a>

        <!-- TOUTES -->
        <div class="seeall col-sm-12"><a class="dropdown-item dropdown-notification-all" href="<?php echo base_url().'parents/parent_ctrl/see_all'; ?>">
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
    <img src="<?php echo base_url();?>assets/images/Beta-Test-Image.jpg" class="beta-size" alt="logo">
    <img src="<?php echo base_url();?>assets/images/logo.png" alt="logo" /></a></div>
      <div class="col-md-10 header-menulist">
          <div id='cssmenu' class="col-md-12 no-pad">
                    <ul>
                           <?php $activepage = $this->uri->segment('1'); ?>
                        <li class="<?php if($activepage=='contact'){ echo 'active'; } ?>"><a href='<?php echo base_url(); ?>contact'>contact us</a></li>
                         <li class="<?php if($activepage=='faq'){ echo 'active'; } ?>"><a href='<?php echo base_url();?>faq'>faq</a></li>
                          <li class="<?php if($activepage=='tuition-center'){ echo 'active'; } ?>"><a href='<?php echo base_url();?>tuition-center'>tuitions center/institute</a></li>
                           <li class="<?php if($activepage=='tutor-list'){ echo 'active'; } ?>"><a href='<?php echo base_url();?>tutor-list'>tutor</a></li>
                            <li style="display:none" class="btn"><a href='#'>parent/student</a></li>
                             <li class="<?php if($activepage=='about-us'){ echo 'active'; } ?>"><a href='<?php echo base_url(); ?>about-us'>About us</a></li>
                             <li class="<?php if($activepage==''){ echo 'active'; } ?>"><a href='<?php echo base_url();  ?>'>Home</a></li>
                        </ul>
                    </div>
                </div>
             </div>
            </div>
    <div class="clearfix"></div>
   </div>
</section>
     <!--section header end-->
