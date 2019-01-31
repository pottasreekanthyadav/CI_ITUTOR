<?php  $profile_count=$this->session->userdata('profile_count');?>
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#login-menu" style="margin-top: -38px;">
       <i class="fa fa-bars bar-icon"></i>                       
      </button>
<div class="col-sm-2 no-pad side-menu collapse navbar-collapse" id="login-menu">  
          <ul class="m-t-10">
             <?php $activepage = $this->uri->segment('2'); ?>
              <li  class="<?php if($activepage=='dashboard'){ echo 'active'; } ?>"><i class="fa fa-tachometer" aria-hidden="true"></i> <a href="<?php echo base_url();?>tutor/dashboard" > &nbsp; Dashboard</a> </li>
              <?php
              if($profile_count>0)
              {
                ?>
              <li class="<?php if($activepage=='view-profile'){ echo 'active'; } ?>"><i class="fa fa-user-plus"></i> <a href="<?php echo base_url();?>tutor/view-profile">&nbsp;Your Profile</a></li>
                    <?php } ?>
                            
               <?php
             if($profile_count>0)
              {
                ?>
              <li class="<?php if($activepage=='profile-update'){ echo 'active'; } ?>"><i class="fa fa-user-circle-o"></i><a href="<?php echo base_url();?>tutor/profile-update">&nbsp; &nbsp;Update Profile</a></li>
                              <?php
                            }
                       ?>
                 <?php
             if($profile_count==0)
              {
                ?>
                <li class="<?php if($activepage=='tutor_profile'){ echo 'active'; } ?>"><i class="fa fa-user-circle-o"></i><a href="<?php echo base_url();?>tutor-profile">&nbsp; &nbsp;Fill Tutor Profile</a></li>
                <?php
}
?>
<?php if($profile_count>0)
{ ?>
              <li class="<?php if($activepage=='requirements'){ echo 'active'; } ?>"><img src="<?php echo base_url();?>assets/images/parents.png" alt="parents" style="width: 19px;"><a href="<?php echo base_url(); ?>tutor/requirements"> &nbsp;Matching  Requirements</a></li>
            <?php }?>
                  <li class="<?php if($activepage=='list-past-requirement'){ echo 'active'; } ?>"> <i class="fa fa-bar-chart" aria-hidden="true"></i> <a href="<?php echo base_url(); ?>tutor/list-past-requirement"> &nbsp;  Viewed Requirements</a></li>
              <li class="<?php if($activepage=='payment'){ echo 'active'; } ?>"><i class="fa fa-money" aria-hidden="true"></i><a href="<?php echo base_url(); ?>tutor/payment"> &nbsp; Payment Basic Plan</a></li> 
              <li class="<?php if($activepage=='payment-idcard' || $activepage=='idcard' ||$activepage=='edit_mailing_address' ){ echo 'active'; } ?>"><i class="fa fa-id-card-o" aria-hidden="true"></i><a href="<?php echo base_url(); ?>tutor/payment-idcard"> &nbsp; Get Your ID card </a></li>  
              <?php if($profile_count>0)
{ ?>
              <li class="<?php if($activepage=='refer'){ echo 'active'; } ?>"> <i class="fa fa-user-plus"></i> <a href="<?php echo base_url();?>tutor/refer"> &nbsp;Refer a Friend</a></li> 
            <?php } ?>
              <li class="<?php if($activepage=='support'){ echo 'active'; } ?>"><i class="fa fa-life-ring"></i><a href="<?php echo base_url();?>tutor/support"> &nbsp; Support</a></li>
              <li style="display:none"><i class="fa fa-money" aria-hidden="true"></i><a href="<?php echo base_url(); ?>tutor/payment"> &nbsp; Payment </a></li>
            
              <li class="<?php if($activepage=='change-password'){ echo 'active'; } ?>"><i class="fa fa-lock"></i>
              <a href="<?php echo base_url();?>tutor/change-password"> &nbsp; &nbsp;Change Password</a></li>      

              <li class="<?php if($activepage=='tutor-logout'){ echo 'active'; } ?>"><i class="fa fa-power-off"></i>
              <a href="<?php echo base_url();?>tutor/logout"> &nbsp; Logout</a></li> 
        </ul>
          </div>