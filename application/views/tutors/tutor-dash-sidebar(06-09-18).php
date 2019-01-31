<?php  $profile_count=$this->session->userdata('profile_count');?>
<div class="col-sm-2 no-pad side-menu">  
          <ul class="m-t-10">
             
              <li  class="active"><i class="fa fa-tachometer" aria-hidden="true"></i> <a href="<?php echo base_url();?>tutors/Tutor/load_dashboard" > &nbsp; Dashboard</a> </li>
              <?php
              if($profile_count>0)
              {
                ?>
              <li><i class="fa fa-user-plus"></i> <a href="<?php echo base_url();?>tutor/view_profile">&nbsp;Your Profile</a></li>
                    <?php } ?>
                            
               <?php
             if($profile_count>0)
              {
                ?>
              <li><i class="fa fa-user-circle-o"></i><a href="<?php echo base_url();?>tutor/tutor_profile_update">&nbsp; &nbsp;Update Profile</a></li>
                              <?php
                            }
                       ?>
                 <?php
             if($profile_count==0)
              {
                ?>
                <li><i class="fa fa-user-circle-o"></i><a href="<?php echo base_url();?>tutor/tutor_profile">&nbsp; &nbsp;Fill Tutor Profile</a></li>
                <?php
}
?>
              <li><img src="<?php echo base_url();?>assets/images/parents.png" alt="parents" style="width: 19px;"><a href="<?php echo base_url(); ?>Tutor/listing_requirement"> &nbsp;Matching  Requirments</a></li>
                  <li> <i class="fa fa-bar-chart" aria-hidden="true"></i> <a href="<?php echo base_url(); ?>tutor/list-past-requirement"> &nbsp;  Viewed Requirements</a></li>
              <li><i class="fa fa-money" aria-hidden="true"></i><a href="<?php echo base_url(); ?>tutor/payment"> &nbsp; Payment Basic Plan</a></li> 
              <li><i class="fa fa-id-card-o" aria-hidden="true"></i><a href="<?php echo base_url(); ?>tutor/payment-idcard"> &nbsp; Get Your ID card </a></li>  
              <li> <i class="fa fa-user-plus"></i> <a href="<?php echo base_url();?>tutor/refer"> &nbsp;Refer a Friend</a></li> 
              <li><i class="fa fa-life-ring"></i><a href="<?php echo base_url();?>tutor/support"> &nbsp; Support</a></li> 
              <li style="display:none"><i class="fa fa-money" aria-hidden="true"></i><a href="<?php echo base_url(); ?>tutor/payment"> &nbsp; Payment </a></li>
            
              <li><i class="fa fa-lock"></i>
              <a href="<?php echo base_url();?>tutor/change-password"> &nbsp; &nbsp;Change Password</a></li>      

              <li><i class="fa fa-power-off"></i>
              <a href="<?php echo base_url();?>tutors/Tutor/tutor_log_out"> &nbsp; Logout</a></li> 
        </ul>
          </div>