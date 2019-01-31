  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#parent-menu" style="margin-top: -50px;">
       <i class="fa fa-bars bar-icon"></i>                       
      </button>
<div class="col-sm-2 no-pad side-menu m-t-10 collapse navbar-collapse" id="parent-menu">   
          <ul>
             <?php $activepage = $this->uri->segment('2'); ?>
              <li  class="<?php if($activepage=='dashboard'){ echo 'active'; } ?>"><i class="fa fa-tachometer"></i>
              <a href="<?php echo base_url();?>parent/dashboard" > &nbsp; Dashboard</a></li>
 <li class="<?php if($activepage=='profile'){ echo 'active'; } ?>"><i class="fa fa-user-circle-o"></i><a href="<?php echo base_url();?>parent/profile"> &nbsp; Update Profile</a></li>
             <li class="<?php if($activepage=='requirements'){ echo 'active'; } ?>"><!--<i class="fa fa-male"></i>--><img src="<?php echo base_url(); ?>assets/images/parents.png" style="width:19px"><a href="<?php echo base_url();?>parent/requirements"> &nbsp;Your Requirements</a></li>
              
              <li style="display:none"><!--<i class="fa fa-hand-pointer-o"></i>--><img src="<?php echo base_url(); ?>assets/images/finger.png"><a href="#"> &nbsp; Subscriptions</a></li> 
               <li class="<?php if($activepage=='parent-payment'){ echo 'active'; } ?>"><i class="fa fa-money" aria-hidden="true"></i><a href="<?php echo base_url();?>parent/parent-payment"> &nbsp; Payment</a></li>
                 <li  class="<?php if($activepage=='viewed-tutor'){ echo 'active'; } ?>"><i class="fa fa-money" aria-hidden="true"></i><a href="<?php echo base_url();?>parent/viewed-tutor"> &nbsp; Viewed Tutors</a></li>     
              <!--<li><i class="fa fa-unlock-alt"></i>--><!-- <img src="<?php //echo base_url(); ?>assets/images/lock.png" style=" width: 19px;"><a href="table.php"> &nbsp; &nbsp; Table</a></li>  -->
              <li><!--<i class="fa fa-power-off"></i>--><a href="#"  data-toggle="modal" data-target="#myModal"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp; Post New Requirements</a></li>
            
              <li class="<?php if($activepage=='change-password'){ echo 'active'; } ?>"><i class="fa fa-lock"></i><a href="<?php echo base_url();?>parent/change-password"> &nbsp; &nbsp;Change Password</a></li>
                 <li class="<?php if($activepage=='support'){ echo 'active'; } ?>"><i class="fa fa-life-ring"></i><a href="<?php echo base_url();?>parent/support"> &nbsp; Support</a></li> 
              <li class="<?php if($activepage=='logout'){ echo 'active'; } ?>"><!--<i class="fa fa-power-off"></i>--><i class="fa fa-power-off"></i><a href="<?php echo base_url();?>parent/logout"> &nbsp; &nbsp;Logout</a></li> </ul>
          </div>
         
 