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
 .open>.dropdown-menu {
  display: contents;z-index: 99999;
}

#header1{overflow: hidden;}
.suggestions li {
  color: #000;
  padding: 5px 8px;
  border-bottom: 1px dashed #aaa;
  cursor: pointer;
  text-align: center;
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 999
}

.sticky + .content {
  padding-top: 60px;
}
</style>
<section id="header">
 <div class="container-fluid no-padd sticky" id="header1">
  <div class="col-md-12 header-top">
   <div class="container">
    <div class="col-md-12">
      <div class="col-md-2 col-xs-6 header-top-left">
        <ul class="nav navbar-nav mob-m-0">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;<?php $segent=$this->uri->segment(3);if($segent== 'hyd' || $segent ==''){echo 'Hyderabad'; }else{echo 'Bengluru'; } ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url();?>tutor-location/hyd">Hyderabad</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo base_url();?>tutor-location/bng">Bengluru</a></li>
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
                        <div class="col-md-6 no-padd">
                          <ul class="header-social hidden-xs">
                            <!--                  <a href="#" class="col-wh"> <i class="fa fa-phone" aria-hidden="true"></i><b> +91 96 7637 2122 &nbsp; </b></a> -->
                            <a href="#" class="col-wh"> <i class="fa fa-phone" aria-hidden="true"></i><b> +91 7032 575757 &nbsp; </b></a>
                            <a href="#" class="col-wh"> <i class="fa fa-phone" aria-hidden="true"></i><b> +91 7032 676767 &nbsp; </b></a>

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
              <p style="margin: 3px 0px;" class="fs13"P> <i class="fa fa-phone" aria-hidden="true"></i> &nbsp; +91 96 7637 2122</p>
            </div>
          -->

          <div class="col-md-4 col-xs-6 no-padd header-top-right">
            <ul class="list-inline">
             <?php
             $user_id=$this->session->userdata('user_id');
             $user_type=$this->session->userdata('user_type');
             $otp_check=$this->session->userdata('otp_active');
             if(empty($user_id) || empty($otp_check))
             {
               ?>
               <li style="margin-top: 2px;" class="fs13"><a href="<?php echo base_url();?>signup" class="no-bd"> <b>Signup</b></a></li>
               <li style="margin-top: 2px;" class="fs13"><a href="<?php echo base_url();?>signup"><b>Login</b></a></li>
               <?php
             }
             elseif($user_type==1 && !empty($user_id) && !empty($otp_check))
             {
               ?>
               <li><a href="<?php echo base_url();?>books/logout">Logout</a></li>
               <li><a href="<?php echo base_url();?>tutor/dashboard"><?php $name= ucfirst($this->session->userdata('user_name')); $extracteddata = explode(' ',$name); echo $extracteddata[0]; ?></a></li>
               <?php
             }elseif($user_type==2 && !empty($user_id) && !empty($otp_check)){ ?>
              <li><a href="<?php echo base_url();?>parent/logout">Logout</a></li>
              <li><a href="<?php echo base_url();?>parent/dashboard"><?php $name= ucfirst($this->session->userdata('user_name')); $extracteddata = explode(' ',$name); echo $extracteddata[0]; ?></a></li><?php
            }
            ?>
            <?php
            if(!empty($user_id) && !empty($otp_check))
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
            </script>
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
   <div class="col-md-2 no-pad logo">
    <a href="<?php echo base_url().'book';?>">
      <img src="<?php echo base_url();?>assets/images/logo.png" alt="logo" class="img-responsive logo-size" /></a></div>
      <?php $menu=$this->session->userdata('menu_display');
      if(empty($menu))
        { ?>
          <div class="col-md-10 header-menulist">
            <div class="col-sm-3">
              <div class="dropdown">
                <button class="btn btn-browse  dropdown-toggle m-t-15" type="button" data-toggle="dropdown">Browse by Categories &nbsp;
                  <span class="fa fa-bars"></span></button>
                  <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">

                    <li class="dropdown-submenu">
                      <a class="test" tabindex="-1" href="#">Category Name 1</a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="#">Subcategory 1</a></li>
                        <li><a tabindex="-1" href="#">Subcategory 2</a></li>
                      </ul>
                    </li>

                    <li class="dropdown-submenu">
                      <a tabindex="-1" href="#">Category Name 2</a>
                      <ul class="dropdown-menu">
                      </ul>
                    </li>

                    <li class="dropdown-submenu">
                      <a tabindex="-1" href="#">Category Name 3</a>
                      <ul class="dropdown-menu">
                      </ul>
                    </li>

                    <li class="dropdown-submenu">
                      <a tabindex="-1" href="#">Category Name 4</a>
                      <ul class="dropdown-menu">
                      </ul>
                    </li>

                    <li class="dropdown-submenu">
                      <a tabindex="-1" href="#">Category Name 5</a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="#">Harry1</a></li>
                      </ul>
                    </li>

                    <li class="dropdown-submenu">
                      <a tabindex="-1" href="#">Category Name 6</a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="#">Night</a></li>
                      </ul>
                    </li>

                    <li class="dropdown-submenu">
                      <a tabindex="-1" href="#">Category Name 7</a>
                      <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="#">Marvel birth</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>


                <div class="col-sm-5">
                <form method="post" action="<?php echo base_url()."books/search"?>" onsubmit="return validate()">
                  <div class="input-group m-t-15">
                    <input id="searchstr" type="text" class="form-control no-bod-rad" value="<?php echo set_value('searchstr'); ?>" placeholder="Search for Books, Authors" name="searchstr">
                    <div class="input-group-btn">
                      <button class="btn btn-default no-bod-rad" type="submit" name="search">
                        <i class="glyphicon glyphicon-search"></i>
                      </button>
                    </div>
                  </div>
                  <span id="search_err" style="text-align: center; color: #a270d2;"></span>
                  </form>
                </div>

              <div class="col-sm-1">
                <?php if(!empty($this->session->userdata('user_id'))){ ?>
                 <div class="pull-right">
                  <a href="<?php echo base_url().'book/myorders' ?>" style="text-decoration: none; color: inherit;"><h4 style="font-family: 'MavenPro-Medium';
                  padding: 14px 0px;
                  font-size: 14px;">ORDERS</h4></a></div>
                <?php } ?>
              </div>
              <div class="col-sm-1">
                <?php if(!empty($this->session->userdata('user_id'))){ ?>
                 <div class="pull-right">
                  <a href="<?php echo base_url().'book/wishlist' ?>" style="text-decoration: none; color: inherit;"><h4 style="font-family: 'MavenPro-Medium';
                  padding: 14px 0px;
                  font-size: 14px;">WISHLIST</h4></a></div>
                <?php } ?>
              </div>
              <div class="col-sm-2">
                <div class="pull-right">
                  <h4 style="font-family: 'MavenPro-Medium';
                  padding: 14px 0px;
                  font-size: 14px;"> <?php if(!empty($this->session->userdata('user_id'))){ ?><a style="text-decoration: none; color: inherit;" href="<?php echo base_url();?>checkout"><i class="fa fa-shopping-cart"></i> Cart(<?php if(isset($total_item->qty)){ echo $total_item->qty;} else echo"0";?> items) </a>
                <?php }else{ ?><i class="fa fa-shopping-cart"></i> Cart<?php } ?>
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  <div class="clearfix"></div>
</div>
</section>

<!--section header end-->
<script type="text/javascript">
  function validate(){
    var str = true;
    var search = document.getElementById("searchstr").value;
    if(search == ""){
      str = false;
      //document.getElementById("search_err").innerHTML = "Enter book name or author";
      document.getElementById('searchstr').style.border="1px solid #a270d2";
    }
    else{
     document.getElementById("search_err").innerHTML = "";
    }
    return str;
  }
</script>

  <!-- menu end -->
