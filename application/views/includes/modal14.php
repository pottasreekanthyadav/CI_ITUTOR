<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header text-center" style="background:#ed3f40;color:#fff">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Post Learning Requirement</h4>
        </div>
        <div class="modal-body">
     
       <form name="formrequirement" id="formrequirement" method="post" action="#">
         <div class="print-error-msg"></div>
 <div class="form-group col-sm-6">
            <label>Name of Student</label>
            <?php 
            $email = $this->session->userdata('user_email');
           $mobile = $this->session->userdata('user_mobile');
           $user_name = $this->session->userdata('user_name');
          ?>
           <input type="text" class="form-control" name="name" id="learn_name" placeholder="Enter Name" value="<?php if($user_name){ echo $user_name; } ?>">
            <p id="learn_name_error"></p>
           </div> 
          <div class="form-group col-sm-6">
            <label>Email</label>
           <input type="text" class="form-control" name="email" id="learningemail" placeholder="Enter Email" value="<?php if($email){ echo $email; } ?>" onchange="check_tutor_email_or_not()">
           <p id="learningemail_error" style="color:red;"></p>
           </div>
           <div class="form-group col-sm-6">
            <label>Mobile</label>
           <input type="text" class="form-control" name="mobile" id="learningmobile" maxlength="10" minlength="10" placeholder="Enter mobile" value="<?php if($mobile){ echo $mobile; } ?>" onchange="check_tutor_mobile_or_not()">
           <p id="learningmobile_error" style="color:red;"></p>
           </div>
           <div class="form-group col-sm-6">
            <label>Syllabus</label>
           <!-- <input type="text" class="form-control" value="" placeholder=" Enter Your Syllabus" id="syllabus" name="syllabus" onkeypress="get_syllabus()" autocomplete="off"> -->
 <select id="syllabus_name" name="syllabus" class="form-control">
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
 <div class="form-group col-sm-6">
            <label>Category</label>
          <select id="categorie" name="categorie" class="form-control">

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
           <div class="form-group col-sm-6">
            <label>Class</label>
           <select id="classsession" name="class" class="form-control">
 <option value="">Choose Class</option>
          </select>
           <p id="class_error"></p>
           </div>
           <div class="form-group col-sm-6">
            <label>Subjects</label>
           <select id="subjects" name="subjects[]" class="form-control subjectssession" multiple>
            <option value="">Choose Subjects</option>
          </select>
           <p id="subjects_error"></p>
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
           <div class="form-group col-sm-6">
                <label class="control-label" for="time">Preferable Time:</label>
                <div id="apprequirement">
                <div class="col-sm-12 no-padd">
                <div class="col-sm-5 one-padd">
                From:<input type="text" id="timepickerfrom" name="from_time[]" class="timepicker form-control timefrom" multiple>
                </div>
                <span id="timepickerfrom_error"></span>            
                <div class="col-sm-5 one-padd">
                To:<input type="text" id="timepickerto" name="to_time[]" class="timepicker form-control timeto" multiple>
                </div>
                <p id="timepickerto_error"></p> 
                <div class="col-sm-2 one-padd">
                <span><button class="fcbtn btn btn-info btn-outline btn-1e  no-bod-rad m-t-9"  id="add_field_button_requirement"><i class="fa fa-plus"></i> </button></span>
                </div>
                </div>
                </div>
           </div>

           <div class="form-group col-sm-6">
            <label>Duration In Hours</label>
           <input type="text" class="form-control number_class" id="duration" name="duration" placeholder="Enter duration in hours"  autocomplete="off">
         
           <p id="duration_error"></p>
           </div>
           <div class="form-group col-sm-6">
            <label>Location</label>
           <input type="text" class="form-control" id="searchlocation" name="searchlocation" placeholder="Enter Your Location" onclick="modal_loc();initAutocomplete();">
           <span id="searchlocation_error"></span>
           </div>
            <div class="clearfix">&nbsp;</div>
           <div class="col-sm-offset-5">
        <button type="submit" class="btn btn-bg col-sm-4" name="submit">Submit</button>
      </div>
            </form>
            <div class="clearfix">&nbsp;</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    <script type="text/javascript">
  
    </div>
  </div>
  