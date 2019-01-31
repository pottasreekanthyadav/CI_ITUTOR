
<div class="modal fade" id="myModal" role="dialog">
   <form name="formrequirement" id="formrequirement" method="post" action="#">
    <div class="modal-dialog modal-lg postrequirment">
    
      <!-- Modal content-->
      <div class="modal-content no-bod-rad">
        <div class="modal-header text-center" style="background:#a270d2;color:#fff">
          <button type="button" class="close" style="opacity:2" data-dismiss="modal"><i class="fa fa-times col-wh" style="margin-top: 2px;" aria-hidden="true"></i></button>
          <h5 class="modal-title f18"><b>Post Learning Requirement</b></h5>
        </div>
        <div class="modal-body">
     
      
         <div class="print-error-msg"></div>
 <div class="form-group col-sm-4">
            <label>Name of Student</label>
            <?php 
            $email = $this->session->userdata('user_email');
           $mobile = $this->session->userdata('user_mobile');
           $user_name = $this->session->userdata('user_name');
          ?>
           <input type="text" class="form-control no-bod-rad" name="name" id="learn_name" placeholder="Enter Name" value="<?php if($user_name){ echo $user_name; } ?>">
            <p id="learn_name_error"></p>
           </div> 
          <div class="form-group col-sm-4">
            <label>Email</label>
           <input type="text" class="form-control no-bod-rad" name="email" id="learningemail" placeholder="Enter Email" value="<?php if($email){ echo $email; } ?>" onchange="check_tutor_email_or_not()">
           <p id="learningemail_error" style="color:red;"></p>
           </div>
           <div class="form-group col-sm-4">
            <label>Mobile</label>
           <input type="text" class="form-control no-bod-rad" name="mobile" id="learningmobile" maxlength="10" minlength="10" placeholder="Enter mobile" value="<?php if($mobile){ echo $mobile; } ?>" onchange="check_tutor_mobile_or_not()">
           <!-- <input type="text" class="timepicker form-control timefrom no-bod-rad"> -->
           <p id="learningmobile_error" style="color:red;"></p>
           </div>
           <div class="form-group col-sm-4">
            <label>Syllabus</label>
           <!-- <input type="text" class="form-control" value="" placeholder=" Enter Your Syllabus" id="syllabus" name="syllabus" onkeypress="get_syllabus()" autocomplete="off"> -->
 <select id="syllabus_name" name="syllabus" class="form-control no-bod-rad">
 <option value="">Choose Syllabus</option>
            <?php 
            $syllabus_master_data = get_syllabus_master_data();
            //print_r($help);die;
            $syllabus_result = json_decode($syllabus_master_data);
            $count = count($syllabus_result->result);
            if($count > 0)
            {
              foreach($syllabus_result->result as $key=>$value)
              {
              ?>
              <option value="<?php echo $value->syllabus_id; ?>"><?php echo $value->syllabus_name; ?></option>
              <?php
            }
            }
            //print_r($syllabus_res);
            ?>
 </select>
 <p id="syllabus_error"></p>
 </div>
 <div class="form-group col-sm-4">
            <label>Category</label>
          <select id="categorie" name="categorie" class="form-control no-bod-rad" onchange="get_budget()">

            <option value="0">Choose Category</option>
            <?php 
            $cat_master_data=get_cat_master_data();
            $category_result = json_decode($cat_master_data);
            $count = count($category_result->result);
            if($count > 0)
            {
              foreach($category_result->result as $key=>$value)
              {
              ?>
              <option value="<?php echo $value->category_id; ?>"><?php echo $value->category_name; ?></option>
              <?php
            }
            }
            //print_r($syllabus_res);
            ?>

          </select>
 <p id="categorie_error"></p>
           </div>   
           <div class="form-group col-sm-4">
            <label id="cls_change">Class</label>
           <select id="classsession" name="class" class="form-control no-bod-rad">
			     <option value="">Choose Class</option>
          </select>
           <p id="class_error"></p>
           </div>
           <div class="form-group col-sm-8">
                <label>Subjects</label>
               <div class="col-sm-12" style="border:1px solid #ccc;overflow-y: scroll;
    height: 55px;">
            <span id="subjects_error"></span>
           <div id="subjects" name="subjects[]" class="no-bod-rad subjectssession hgh-60" >
            </div>
          </div>
           </div>
           <!-- <div class="form-group col-sm-6">
            <label>Preferable timings</label>
            <select id="timings" name="timings[]" class="form-control" multiple>

            <option value="0">Choose Timings</option>
            <?php //$master_timeing_data = get_master_timeing_data();
            // $preferable_timing_result = json_decode($master_timeing_data);
           // print_r($preferable_timing_result);
            // $count = count($preferable_timing_result->result);
            // if($count > 0)
            // {
              // foreach($preferable_timing_result->result as $key=>$value)
              // {
              ?>
              <option value="<?php //echo $value->timing_id; ?>"><?php //echo $value->timings; ?></option>
              <?php
            //}
          //  }
            //print_r($syllabus_res);
            ?>

          </select>
           <p id="timings_error"></p>
           </div> -->


           <div class="form-group col-sm-4">
            <label>Duration In Minutes</label>
           <input type="text" class="form-control number_class no-bod-rad m-t-18" id="duration" name="duration" placeholder="Enter duration in minutes"  autocomplete="off">
         
           <p id="duration_error"></p>
           </div>
           <div class="clearfix"></div>
		   <div class="form-group col-sm-4 m-t-10">
            <label>Preferable Gender</label><br>
			 <input type="radio" name="gender" class="gender" value="male"> Male &nbsp;
			<input type="radio" name="gender" class="gender" value="female"> Female &nbsp;
			<input type="radio" name="gender" class="gender" value="both" checked> Both
           <p id="gender_error"></p>
           </div>
		   <div class="form-group col-sm-4 m-t-10">
            <label>Class Per Week</label>
			<input type="text" name="perweek" id="perweek" placeholder="Enter number of days."  class="form-control no-bod-rad number_class">
           <p id="perweek_error"></p>
           </div>
		   <div class="form-group col-sm-4">
            <label>Demo Date &amp; Time</label>
			 <input type="text" name="demotime" id="demotime" placeholder="YYYY-MM-DD" class="form-control no-bod-rad">
           <p id="demotime_error"></p>
           </div>
            <div class="clearfix"></div>
		   <div class="form-group col-sm-4">
            <label>Estimated Budget</label>
               <p></p>
			<select name="budget" id="budget" class="form-control no-bod-rad">
			<option value="0">Choose Budget</option>
               </select>
           <p id="budget_error"></p>
           </div>
           <div class="form-group col-sm-4">
           
            <div class="col-sm-12 no-padd" >
            <label>Location</label>
                <p></p>
                
           <input type="text" class="form-control no-bod-rad" id="searchlocation" name="searchlocation" placeholder="Enter Your Location" >
           <input type="hidden" name="postal_code" id="postal_code" value="">
           <input type="hidden" name="locality" id="locality" value="">
           <input type="text" name="lat" id="lat" value="">
           <input type="text" name="lng" id="lng" value="">
           <span id="searchlocation_error"></span>
         </div>
                   
        <!--  <div class="col-sm-1">
            <label style="visibility: hidden;">Location</label>
             <p></p>
            <a href="void:(0)" onclick="getLocation()" title="Locate Me"><image src="<?php //echo IMG_PATH; ?>marker.png"></a>
           </div> -->
          
               </div>
                       <div class="form-group col-sm-4">
                <label class="control-label" for="time">Preferable Time:</label>
                <div id="apprequirement">
                <div class="col-sm-12 no-padd">
                <div class="col-sm-5 one-padd">
                From:<select class="form-control from_time" name="from_time[]">
                  <option value="">From</option>
              </select>
                </div>
              <span id="timepickerfrom_error"></span>            
                <div class="col-sm-5 one-padd">
                To:<select class="form-control to_time" name="to_time[]">
                <option value="">To</option>
              </select>
                </div>
                <p id="timepickerto_error"></p> 
                <div class="col-sm-2 one-padd">
                <span><p class="fcbtn btn btn-info btn-outline btn-1e no-bod-rad m-t-9 add_field_button_requirement"  id="add_field_button_requirement"><i class="fa fa-plus"></i> </p></span> 
                </div>
                </div>
                </div>
           </div>
            <div class="clearfix">&nbsp;</div>
           <div class="col-sm-offset-5">
        <button type="submit" class="btn btn-bg col-sm-4 submit" name="submit">Submit</button>
      </div>
            </form>
    <form action="" method="post"  id="cur_submit_form" style="display: none;">
<input type="text" id="cur_lat" name="cur_lat">
<input type="text" id="cur_lng" name="cur_lng">
<input type="submit" id="cur_submit" name="cur_submit">
</form>
            <div class="clearfix">&nbsp;</div>
        </div>
        <div class="modal-footer" style="border-top:none;padding: 2px;">
<!--          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
        </div>
      </div>
    </div>
  </div>
  <!-- welcome message -->
   <div class="modal fade" id="learning_msg" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content no-bod-rad">
        <div class="modal-header" style="border-bottom:none">
          <button type="button" style="box-shadow: none;opacity:2 " class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body text-center">
          <div class="col-sm-10 col-sm-offset-1">
             <img src="<?php echo base_url();?>assets/images/jobs.png" alt="logo" //>
             <div class="clearfix">&nbsp;</div>
              <p><i><b>Thanks for Posting learning requiremnet Please see matching tutor by clicking on your requirenment link in your sidebar</b></i></p>
                  
             <div class="clearfix">&nbsp;</div>
             <div class="clearfix">&nbsp;</div>
              
            </div>

        </div>
        <div class="modal-footer" style="border-top:none">
             <div class="clearfix">&nbsp;</div>
          <a href=""  class="btn btn-default" id="popup_ok">OK</a>
        </div>
      </div>
      
    </div>
  </div>

<script>
var x = document.getElementById("demo");
function getLocation() {

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    var lat = position.coords.latitude; 
    var lng = position.coords.longitude;
  $("#cur_lat").val(lat);$("#cur_lng").val(lng);
  $("#cur_submit").click();
}

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$("#cur_submit_form").submit(function(){
    //e.preventDefault();
    var lat = $("#cur_lat").val();
    var lng = $("#cur_lng").val();
      $.ajax({
      type: "POST",
                dataType: "json",
                data:{'lat':lat,'lng':lng},
                url: "<?php echo base_url();?>Welcome/get_cur_location_name",
                success: function(bd) {
                  //console.log(bd.location_name);
                  $("#searchlocation").val(bd.location_name);
             },
             error:function(e)
             {
              console.log(e);
             }
        });
      return false;
});

</script>