<section class="referaltype">
 <div class="col-md-12">
   <div class="container">
     <div class="col-md-10 col-xs-12 referal col-md-push-1">
       <div class="col-md-12 col-xs-12 referal-main">
         <div class="col-md-3 col-xs-3 text-center">
           <img src="<?php echo base_url();?>assets/images/icon4.png" class="img-responsive"  alt="itutor" />
         </div>
         <?php $user_type=$this->session->userdata('user_type');
         if($user_type==2)
         { ?>
<div class="col-md-9 col-xs-8 no-pad">
           <h4 style="text-transform:capitalize">Hello Parents! Enjoy the opportunity to geting top tutors in your area Pay once and use for lifetime</h4>
         </div>
        <?php  }
        else {?>
         <div class="col-md-9 col-xs-8 no-pad">
           <h4 style="text-transform:capitalize">Hello Tutors!!! Enjoy the opportunity of Referral Reward</h4>
           <h5 style="text-transform:capitalize">Refer your friends to register with Its My Tutor&nbsp;&amp;&nbsp;get a referral cash</h5>
         </div>
       <?php } ?>
       </div>
     </div>
     <div class="clearfix"></div>
   </div>
   <div class="clearfix"></div>
  </div>
 </section>
 <!--footer start-->
    <footer class="footer">
      <div class="container">
        <div class="col-md-12 footer-main">
       <div class="clearfix">&nbsp;</div>
                   <div class="col-md-3 no-padd">
                 <div class="col-md-12 footer-main-left">
              <h2>About Us</h2>
                     <p>Its My Tutor is totally dedicated to tutors and students and our intention is explore the door for tutor and student where they can achieve their goals in best way. </p>
            </div>
<!--
          <div class="col-md-3">
            <div class="col-md-12 footer-main-left">
              <h2>Social Links</h2>
              <ul>
                <li><a href="#"><img src="images/fb.png" alt="fb" />&nbsp;Facebook</a></li>
                <div class="clearfix"></div>
                <li><a href="#"><img src="images/googlepluse.png" alt="fb" />&nbsp;Google</a></li>
                <div class="clearfix"></div>
                <li><a href="#"><img src="images/twitter.png" alt="fb" />&nbsp;Twitter</a></li>
                <div class="clearfix"></div>
                <li><a href="#"><img src="images/linkedin.png" alt="fb" />&nbsp;Linkedin</a></li>
              </ul>
            </div>
          </div>
-->
          <div class="clearfix"></div>
        </div>
          <div class="col-md-3">
            <div class="col-md-12 footer-main-left">
              <h2>Useful Links</h2>
               <ul>
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url();?>about-us">About Us</a></li>
                <li><a href="<?php echo base_url();?>tutor-list">Tutor</a></li>
                <li><a href="<?php echo base_url();?>tuition-center">Tuition Center/Institutes</a></li>
                <li><a href="<?php echo base_url();?>faq">Faq's</a></li>
                <li><a href="<?php echo base_url();?>contact">Contact Us</a></li>
              </ul>
            <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="col-md-12 footer-main-left">
              <h2>Our Coverage Area</h2>
              <ul>
                <li><a href="#">Ameerpet</a></li>
                <li><a href="#">Madhapur</a></li>
                <li><a href="#">LB Nagar</a></li>
                <li><a href="#">Hitech City</a></li>
                <li><a href="#">Koti</a></li>
                <li><a href="#">Kondapur</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="col-md-12 footer-main-left">
              <h2>Contact Us</h2>
              <ul>

                <p>Mobile&nbsp;:&nbsp;+91 96 7637 2122</p>
                <p>Email&nbsp;:&nbsp;info@itsmytutor.com</p>
                  <div class="clearfix">&nbsp;</div>
                  <a href="https://www.facebook.com/itsmytutor" target="_blank"><img src="<?php echo base_url();?>assets/images/fb.png" alt="fb"></a>
                  <a href="https://plus.google.com/u/0/116425185998909619764" target="_blank"><img src="<?php echo base_url();?>assets/images/googlepluse.png" alt="gp"></a>
                  <a href="https://twitter.com/itsmytutor" target="_blank"><img src="<?php echo base_url();?>assets/images/twitter.png" alt="tw"></a>
                  <a href="https://www.linkedin.com/company/its-my-tutor/" target="_blank"><img src="<?php echo base_url();?>assets/images/linkedin.png" alt="ld"></a> 
                  <a href="#"><img src="<?php echo base_url();?>assets/images/yt.png" alt="yt"></a>
                  <a href="https://www.instagram.com/itsmytutor/" target="_blank"><img src="<?php echo base_url();?>assets/images/it.png" alt="it"></a>
              </ul>
            </div>
          </div>

      </div>

      <div class="col-md-12 subfooter">
      <div class="container">
      <div class="col-md-12 subfooter-main">
        <ul class="list-inline">
          <li class="col-md-6 text-left">2018 All &copy;&nbsp;Reserved&nbsp;@itsmytutor.com</li>
          <li class="col-md-6 text-right">Designed&nbsp;&amp;&nbsp;Developed By&nbsp;:&nbsp;<a href="http://www.richlabz.com" target="_blank">Richlabz It Solutions Pvt.Ltd</a></li>
        </ul>
        </div>
        </div>
      </div>
    </footer>
  <!--footer end-->


      <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script>
    
    $(function(){
    $(window).scroll(function(){
        var scrollval = $(window).scrollTop();
        if(scrollval>=2)
            {
                $(".showdiv").hide();
                $(".hidediv").show();
            }
        else{
               $(".showdiv").show();
               $(".hidediv").hide();
        }
    });
});

</script>
        
 <script type="text/javascript">
  $(document).ready(function(){
  $("#formrequirement").on("submit",function(){
    //alert('die');
    //$('.ui-timepicker-wrapper').css('z-index','0');
    // alert('budget');
      var  str = true;
  var namepattern=/^[A-Za-z ]*$/;
  var loc_pattern=/^[0-9A-Za-z ,-/#:]*$/;
  //var loc_pattern = /^(?!-)(?! )(?!:)(?!#)(?!/)(?!,)(?!.*--)(?!.*,,)(?!.*##)(?!.*::)(?!.*//)[A-Za-z0-9- #,/:]+(?<!-)(?<!,)(?<!/)(?<!#)(?<! )$/;
  var mobilepattern = /^[6-9]{1}[0-9]{9}$/;
  var emailpattern = /^[a-zA-Z0-9][a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  var durationpattern =/^[1-9][0-9.]*$/;
  //var timepattern =/^[0-9]{1,2}\:[0-9]{1,2}[a,p,m,A,P,M]{2}$/;
  var timepattern =/^[0-9]{1,2}\:[0-9]{1,2}$/;
  var demodatetimepattern =/^[0-9]{1,4}\-[0-9]{1,2}\-[0-9]{1,2}$/;
   $("#subjects_error").html('');
   $("#learn_name,#syllabus_name,#learningemail,#mobile,#categorie,#classsession,#subject,#timings,#duration,#searchlocation,#timepickerfrom,#timepickerto").css('border','');
   var name = $('#learn_name').val().trim();
  var syllabus_name = $("#syllabus_name").val();  
  var categorie = $("#categorie").val().trim();
  var classs = $("#classsession").val();
  var subjects = $(this).find('input[name="subjects[]"]:checked');
  var fromtime = $("#timepickerfrom").val();
  var totime = $("#timepickerto").val();
  var searchlocation = $("#searchlocation").val().trim();
  var email = $("#learningemail").val().trim();
  var mobile = $("#learningmobile").val().trim();
  var gender=$(".gender").val().trim();
  var perweek=$("#perweek").val().trim();
  var demotime=$("#demotime").val().trim();
  var budget=$("#budget").val().trim();
    if(subjects .length == 0 && $("#subjects > div").length!=0){
             str=false;
             $("#subjects_error").html('Please check atleast one subject').css("color",'red');
         }
		 if(perweek == 0 || perweek==""){
             $("#perweek").css('border','1px solid red').focus();str=false;
         }else{
            $("#perweek").css('border','').focus();
         }
		 if(demotime == 0 || demotime==""){
             $("#demotime").css('border','1px solid red').focus();str=false;
         }else{
            $("#demotime").css('border','').focus();
         }
		 if(budget == 0 || budget==""){
             $("#budget").css('border','1px solid red').focus();str=false;
         }else{
            $("#budget").css('border','').focus();
         }
		 
		 if(perweek!="" && !durationpattern.test(perweek)){
		$("#perweek").css('border','1px solid red').focus();
		str = false;
			}

      if(demotime!="" && !demodatetimepattern.test(demotime)){
    $("#demotime").css('border','1px solid red').focus();
    str = false;
      }
		 
  var duration = $("#duration").val().trim();
   var other_data = $('formrequirement').serializeArray();
    $.each(other_data,function(key,input){
        fd.append(input.timefrom,input.value);
    });
if(name!='' && !namepattern.test(name)){
  $("#learn_name").css('border','1px solid red').focus();
 str=false;}
if(name=="" || name=='0'){ $("#learn_name").css('border','1px solid red').focus();str=false;}else{$("#learn_name").css('border','').focus();$("#learn_name_error").html('');}
if(email=="" || email=='0'){ $("#learningemail").css('border','1px solid red').focus();str=false;}else{$("#learningemail").css('border','').focus();}
if(mobile=="" || mobile=='0'){ $("#learningmobile").css('border','1px solid red').focus();str=false;}else{$("#learningmobile").css('border','').focus();}

   if(syllabus_name=="" || syllabus_name=='0'){ $("#syllabus_name").css('border','1px solid red').focus();str=false;}else{$("#syllabus_name").css('border','').focus();}

   if(categorie=="" || categorie=='0'){ $("#categorie").css('border','1px solid red').focus();str=false;}else{$("#categorie").css('border','').focus();}
    if(classs=="" || classs=='0'){ $("#classsession").css('border','1px solid red').focus();str=false;}else{$("#classsession").css('border','').focus();}
//   if(fromtime=="" || fromtime=='0'){ $("#timepickerfrom").css('border','1px solid red');
//   str=false;alert(str);}
//   if(fromtime!="" && !timepattern.test(fromtime)){
// $("#timepickerfrom").css('border','1px solid red');
//   str=false;alert(str);
//   }
//   if(totime=="" || totime=='0'){
//   $("#timepickerto").css('border','1px solid red');
//    str=false;alert(str);
//   }
//   if(totime!="" && !timepattern.test(totime)){
// $("#timepickerto").css('border','1px solid red');
//   str=false;alert(str);
//   }
//   if (fromtime!="" && !timepattern.test(fromtime)){
//       $("#timepickerfrom").css('border','1px solid red');
//       str=false;alert(str);
//     }
    if(duration=="" || duration=='0'){ $("#duration").css('border','1px solid red').focus();str=false;}else{$("#duration").css('border','').focus();}
    // if(duration!="" && !durationpattern.test(duration)){
    //   $("#duration").css('border','1px solid red').focus();
    //   str = false;
    // }
    
if(email!='' && !emailpattern.test(email)){
  $("#learningemail").css('border','1px solid red').focus();
str=false;}

if(mobile!='' && !mobilepattern.test(mobile)){
  $("#learningmobile").css('border','1px solid red').focus();
  str=false;}

    if(searchlocation=="" || searchlocation =='0'){
      $("#searchlocation").css('border','1px solid red').focus();
      str=false;
    }
    if(searchlocation!='' && !loc_pattern.test(searchlocation)){
  $("#searchlocation").css('border','1px solid red').focus();
 str=false;}
 //from to time validation
  $(".from_time").each(function(){
     $(this).css('border','');
     $(this).parent().parent().find('.to_time').css('border','');
    var startTime = ($(this).val());
    if(startTime == '')
    {
      str = false;
      $(this).css('border','1px solid red');
    }
    var endTime = ($(this).parent().parent().find('.to_time').val());
   if(endTime == '')
    {
      $(this).parent().parent().find('.to_time').css('border','1px solid red');
    }
    if (startTime!='' && endTime!='' && (parseInt(startTime) == parseInt(endTime)) || (parseInt(startTime) > parseInt(endTime))) {
               $(this).parent().parent().find('.to_time').css('border','1px solid red');
               str=false;
              }
  });

 // var mystarttym=fromtime.split(':');
 //      var tymstart1 = mystarttym[0];
 //      var tymstart2 = mystarttym[1];
 // var startsec=get_time_in_second(tymstart1,tymstart2);
 //    var myendtym=totime.split(':');
 //      var tymend1 = myendtym[0];
 //      var tymend2 = myendtym[1];
 // var endsec=get_time_in_second(tymend1,tymend2);
 // if(startsec>endsec){
 //   $("#timepickerfrom").css('border','1px solid red').focus();
 //        $("#timepickerto").css('border','1px solid red').focus();
      //   str=false;
      // }
//alert('his');
 	  /*var mystarttym=fromtime.split(':');
      var tymstr1 = mystarttym[0];
      var tymstr2 = mystarttym[1];
      var tymmeridian=tymstr2.charAt(2);
      //alert(tymmeridian);
      var timestartmint1=tymstr2.charAt(0);
      var timestartmint2=tymstr2.charAt(1);
      var minutestart=timestartmint1.concat(timestartmint2);
      var myendtym=totime.split(':');
      var tymend1 = myendtym[0];
      var tymend2 = myendtym[1];
      var tymmeridianend=tymend2.charAt(2);
      var timendmint1=tymend2.charAt(0);
      var timendmint2=tymend2.charAt(1);
      var minuteend=timendmint1.concat(timendmint2);
      if(tymmeridian=='p'){
        if(tymend1==12 && minutestart>0){
           var cuurenthre=0;   
        }else{
            var cuurenthre=12+tymstr1;   
        }
      	      	
      }else{
      	var cuurenthr=tymstr1;
      }
      if(tymmeridianend=='p'){
        if(tymend1==12 && minuteend>0){
           var cuurenthre=0;   
        }else{
            var cuurenthre=12+tymend1;   
        }
         	
      }else{
      	var cuurenthre=tymend1;
      }

      var x=get_time_in_second(cuurenthre,minuteend);
      var y=get_time_in_second(cuurenthr,minutestart);
     
      if(x<y || x==y){
      
      	$("#timepickerfrom").css('border','1px solid red').focus();
      	$("#timepickerto").css('border','1px solid red').focus();
        str=false;
      }
      if(tymmeridian=='p' && tymmeridianend=='a'){
        $("#timepickerfrom").css('border','1px solid red').focus();
        $("#timepickerto").css('border','1px solid red').focus();
        str=false;
      }*/
      $lat = $("#lat").val();
      $lng = $("#lng").val();
      $adrs = $("#searchlocation").val();
      if($lat==''|| $lng=='')
          {
            var geocoder =  new google.maps.Geocoder();
            geocoder.geocode( { 'address': $adrs}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            latitude = results[0].geometry.location.lat();
            longitude = results[0].geometry.location.lng(); 
          document.getElementById('lat').value = latitude;
          document.getElementById('lng').value = longitude;
           }
        });
          }
      $lat = $("#lat").val();
      $lng = $("#lng").val();
        if($lat==''|| $lng=='')
          {
            str = false;
            $("#searchlocation").css("border",'1px solid red');
          }
    if(str==true){
             $(':input[type="submit"]').prop('disabled', true);
      $.ajax({
                    dataType:'JSON',
                    method:'POST',
                    contentType: false,
                    cache: false,
                    processData: false,
                   // data:{'name':name,'email':email,'mobile':mobile,'searchlocation':searchlocation,'duration':duration,'from_time':fromtime,'to_time':totime,'classs':classs,'categorie':categorie,'subjects':subjects,'syllabus_name':syllabus_name},
                   data:new FormData(this),
                    url:"<?php echo base_url(). 'registration/save_post_requirement_data';?>",
                   success:function(s){
                    //console.log(s);
                      var code = s.code;
                      var payment_status = s.payment_status;
                      switch (code){
                        case 301:
                         $('.print-error-msg').removeClass('alert alert-success');
                        $('.print-error-msg').addClass('alert alert-danger');
                        $('.print-error-msg').html(s.description);
                        break;
                        case 200:
                        $('.print-error-msg').removeClass('alert alert-danger');
                        $('.print-error-msg').addClass('alert alert-success');
                        $('.print-error-msg').html(s.description);
                        <?php $user_type=$this->session->userdata('user_type');
                        if(empty($user_type))
                        { ?>
                        setTimeout(function() {window.location.href="<?php base_url();?>signup"},2000);
                     <?php 
                        } ?>
                        <?php
                        if((!empty($user_type)) && $user_type == 2)
                          { ?>
                   $('#learning_msg').modal('show');
                    $("#popup_ok").attr('href',s.redirect_url);
                 <?php }?>
                        
                         break;
                        case 201:
                        $('.print-error-msg').removeClass('alert alert-success');
                        $('.print-error-msg').addClass('alert alert-danger');
                        $('.print-error-msg').html(s.description);
                         $("#popup_ok").attr('href',s.redirect_url);
                         //setTimeout(function(){window.location=''; },4000);

                      }
                     },
                   error:function(e){console.log(e);}

                });   
    }
    return false;
    });
  })
function get_time_in_second(hr,mt) {
 var result=(hr*3600+mt*60);
 return result;
}
    </script>
<script type="text/javascript">
 function check_tutor_email_or_not(){
  $("#learningemail").css('border','');
    $("#learningemail_error").html('');
    $(':input[type="submit"]').prop('disabled', false);
var learningemail=$("#learningemail").val().trim();
if(learningemail!=""){
   $.ajax({
  url:'<?php echo base_url(); ?>Registration/get_exist_tutor_email',
        method:'POST',
        dataType:'JSON',
        data:{'email':learningemail},
        success:function (s){
            //console.log(s);
            if(s.code==200){
              $("#learningemail").css('border','1px solid red').focus()
              $("#learningemail_error").html(s.description);
              $(':input[type="submit"]').prop('disabled', true);
            }
          },
          error:function(er){
            console.log(er);
          }
      });
  }
  }
function check_tutor_mobile_or_not() {
var learningmobile=$("#learningmobile").val().trim();
    $("#learningmobile").css('border','');
    $("#learningmobile_error").html('');
    $('input[type="submit"]').prop('disabled', false);
 if(learningmobile!=""){
  $.ajax({
  url:'<?php  echo base_url(); ?>Registration/get_exist_tutor_mobile',
        method:'POST',
        dataType:'JSON',
        data:{'mobile':learningmobile},
       success:function (s){
             if(s.code==200){
              $("#learningmobile").css('border','1px solid red').focus()
              $("#learningmobile_error").html(s.description);
              $('input[type="submit"]').prop('disabled', true);
            }
          },
          error:function(er){
            console.log(er);
          }
      });
}
  }
</script>
 <script type="text/javascript">
   $("#categorie").on('change',function(){
    var newcat = $("#categorie").val();
    if(newcat==42)
    {
      $("#cls_change").html('Cometitive Exams');
    }
    else
    {
       $("#cls_change").html('Class');
    }
    if(newcat!='' && newcat!=0){
      $.ajax({
        url:'<?php echo base_url(); ?>Registration/get_class_data',
        method:'POST',
        dataType:'JSON',
        data:{'id':newcat},
        success:function(s){
          console.log(s);
           var data =  s.resultdata;
          var len =s.resultdata.length;
          var appenddata = '';
          appenddata+='<option value="0">Choose Class</option>';
          if(s.code==200){

            for(var i =0; i<len; ++i){
              appenddata+='<option value="'+data[i]['class_id']+'">'+data[i]['class_name']+'</option>';
            }

          }else{
                appenddata+='<option value="0">No results found</option>';
                } $('#classsession').html(appenddata);
        },
        error:function(er){
          console.log(er);
        }
      })
    }else{
      alert('Please Choose one of the Category');
    }
   });
 </script>
 <style>
 div.pac-container {
   z-index: 1050 !important;
}
</style>
 <script type="text/javascript">
   $("#classsession").on('change',function(){
    var newclass = $("#classsession").val();
    if(newclass!='' && newclass!=0){
      $.ajax({
        url:'<?php echo base_url(); ?>Registration/get_subject_data',
        method:'POST',
        dataType:'JSON',
        data:{'id':newclass},
        success:function(s){
            //alert('hi');
          console.log(s);
           var data =  s.resultdata;
          //alert(s.resultdata.length);
          var len =s.resultdata.length;
          var appenddata = '';
          // appenddata+='<option value="0" disabled="disabled">Choose Subject</option>';
          if(s.code==200){

            for(var i =0; i<len; ++i){
              appenddata+='<div class="col-sm-6" style="padding:0px;"><input type="checkbox" name="subjects[]" value="'+data[i]['subject_id']+'">'+ ' '+data[i]['subject_name']+'</div>';
            }

          }else{
                appenddata+='<option value="0">No results found</option>';
                } $('#subjects').html(appenddata);
        },
        error:function(er){
          console.log(er);
        }
      })
    }else{
      alert('Please Choose one of the Subject');
    }
   });
 </script>
 <!-- <script src="<?php //echo base_url(); ?>assets/js/jquery.min.js"></script> -->



    <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/achari_valiadation.js"></script>

     
	 <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script> -->


    <script type="text/javascript">
      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */
            (document.getElementById('searchlocation')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }
       function fillInAddress() {
          // Get the place details from the autocomplete object.
         var place = autocomplete.getPlace();
         var adrs = place.formatted_address;
         var latitude =  place.geometry.location.lat();
         var longitude = place.geometry.location.lng();

          document.getElementById('postal_code').value = 0;
          document.getElementById('locality').value = '';
          document.getElementById('lat').value = latitude;
          document.getElementById('lng').value = longitude;
          // Get each component of the address from the place details
          // and fill the corresponding field on the form.

          // for (var i = 0; i < place.address_components.length; i++) {
          //   var addressType = place.address_components[i].types[0];
          //    if (componentForm[addressType]) { 
          //     var val = place.address_components[i][componentForm[addressType]];
          //     alert(val);
          //     document.getElementById(addressType).value = val;
          //   }
          // }
          
           for (var i = 0; i < place.address_components.length; i++) {
      for (var j = 0; j < place.address_components[i].types.length; j++) {
        if (place.address_components[i].types[j] == "postal_code") {
          document.getElementById('postal_code').value = place.address_components[i].long_name;
        }
        if (place.address_components[i].types[j] == "locality") {
          document.getElementById('locality').value = place.address_components[i].long_name;
        }
      }
    }
        }

 </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUlB6Eh-d9yy-kbAVPFbC9WcIYQCtJXJE&libraries=places&callback=initAutocomplete"
        async defer></script>
<script type="text/javascript">
    /*  var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };
      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} *///(document.getElementById('searchlocation')),
            //{types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
       // autocomplete.addListener('place_changed', fillInAddress);
      //}*/
 </script>
</script>
         <script type="text/javascript">
 $(window).on('load',function(){
  // alert('hii');
                $.ajax({
                        type: 'POST',
                        data: {'table_name' : 'rl_notification_tbl'}, 
                        url: "<?php echo base_url(); ?>parents/parent_ctrl/get_notification",
                        dataType: 'json',                      
                        success: function(resp) {
                          console.log(resp);  
                           var count = resp.count;
                           var notifications = resp.notifications;
                           var response = JSON.stringify(notifications);
                           test(count,response);
                          },
                          error: function(error){
                          console.log(error);     
                                // alert('Error while request..');
                          }
                });
 
 function test(count, response) {
  // alert('hii');
  var count = count;
  var response = jQuery.parseJSON(response);
  var lastCount = 0;
  var notifications = new Array();     
  for( var i=0; i<count; i++){
     notifications.push({
        idn: response[i].id,
         href: response[i].url_link,
        texte: response[i].notification_msg,
        date: response[i].added_on
    });
     // alert(notifications[0].texte);
  }
  function makeBadge(texte) {
    return "<span class=\"badge badge-default\">" + texte + "</span>";
  }

  appNotifications = {

    // Initialisation
    init: function () {
      $("#notificationsBadge").hide();
      $("#notificationAucune").hide();
      $("#notifications-dropdown").on('click', function () {

        var open = $("#notifications-dropdown").attr("aria-expanded");
        if (open === "false") {
          appNotifications.loadAll();
        }

      });
     appNotifications.loadAll();
      setInterval(function () {
        appNotifications.loadNumber();
      }, 180000);
      $('.notification-read-desktop').on('click', function (event) {
        appNotifications.markAsReadDesktop(event, $(this));
      });

    },

    loadAll: function () {
      if (count !== lastCount || count === 0) {
        appNotifications.load();
      }
      appNotifications.loadNumber();

    },

    badgeLoadingMask: function (show) {
      if (show === true) {
        $("#notificationsBadge").html(appNotifications.badgeSpinner);
        $("#notificationsBadge").show();
        // Mobile
        $("#notificationsBadgeMobile").html(count);
        $("#notificationsBadgeMobile").show();
      }
      else {
        $("#notificationsBadge").html(count);
        if (count > 0) {
          $("#notificationsIcon").removeClass("fa-bell-o");
          $("#notificationsIcon").addClass("fa-bell");
          $("#notificationsBadge").show();
          // Mobile
          $("#notificationsIconMobile").removeClass("fa-bell-o");
          $("#notificationsIconMobile").addClass("fa-bell");
          $("#notificationsBadgeMobile").show();
        }
        else {
          $("#notificationsIcon").addClass("fa-bell-o");
          $("#notificationsBadge").hide();
          // Mobile
          $("#notificationsIconMobile").addClass("fa-bell-o");
          $("#notificationsBadgeMobile").hide();
        }

      }
    },

    loadingMask: function (show) {

      if (show === true) {
        $("#notificationAucune").hide();
        $("#notificationsLoader").hide();
      } else {
        $("#notificationsLoader").hide();
        if (count > 0) {
          $("#notificationAucune").hide();
        }
        else {
          $("#notificationAucune").show();
        }
      }

    },

    loadNumber: function () {
      appNotifications.badgeLoadingMask(true);
      setTimeout(function () {
        $("#notificationsBadge").html(count);
        appNotifications.badgeLoadingMask(false);
      }, 1000);
    },

    load: function () {
      appNotifications.loadingMask(true);

      $('#notificationsContainer').html("");
      lastCount = count;
      setTimeout(function () {
        // alert('settime');
        for (i = 0; i < count; i++) {
          var template = $('#notificationTemplate').html();
           template = template.replace("{{idn}}", notifications[i].idn);
          template = template.replace("{{href}}", notifications[i].href);
          template = template.replace("{{texte}}", notifications[i].texte);
          template = template.replace("{{date}}", notifications[i].date);

          $('#notificationsContainer').append(template);
        }

        $('.notification-read').on('click', function (event) {
          appNotifications.markAsRead(event, $(this), $(this).attr('id'));
        });
        appNotifications.loadingMask(false);
        $("#notifications-dropdown").prop("disabled", false);
      }, 1000);
    },
    markAsRead: function (event, elem, id) {
      $.ajax({
              type: 'POST',
              data: {'id': id,'table_name' : 'rl_notification_tbl'}, 
              url: "<?php echo base_url(); ?>parents/parent_ctrl/markAsReadNotification",
              dataType: 'json',                      
              success: function(resp) {
                console.log(resp);  
              },
              error: function(error){
                console.log(error);     
                   // alert('Error while request..');
              }
        });
      event.preventDefault();
      event.stopPropagation();
      elem.parent('.dropdown-notification').remove();
      count--;
      appNotifications.loadAll();
    },
    markAsReadDesktop: function (event, elem) {
      event.preventDefault();
      event.stopPropagation();
      elem.parent('.dropdown-notification').removeClass("notification-unread");
      elem.remove();
      if (document.activeElement) {
        document.activeElement.blur();
      }
     count--;
      appNotifications.loadAll();
    },

    add: function () {
      lastCount = count;
      count++;
    },
    badgeSpinner: '<i class="fa fa-spinner fa-pulse fa-fw" aria-hidden="true"></i>'
  };

  appNotifications.init();

}
 });
 </script>
 <script type="text/javascript">
   function get_budget() {
    $('#budget').html('<option value="0">Choose budget</option>');
    var newcat = $("#categorie").val();
    if(newcat!='' && newcat!=0){
      $.ajax({
        url:'<?php echo base_url(); ?>Registration/get_budget_data',
        method:'POST',
        dataType:'JSON',
        data:{'id':newcat},
        success:function(s){
          console.log(s);
           var data =  s.resultdata;
          var len =s.resultdata.length;
          var appenddata = '';
          appenddata+='<option value="0">Choose budget</option>';
          if(s.code==200){
            for(var i =0; i<len; ++i){
              appenddata+='<option value="'+data[i]['budget_id']+'">'+'Rs.'+data[i]['budget_price']+' '+data[i]['budget_type']+'</option>';
            }
          }else{
                appenddata+='<option value="0">No results found</option>';
                } $('#budget').html(appenddata);
        },
        error:function(er){
          console.log(er);
        }
      })
    }else{
      alert('Please Choose one of the Category');
    }
   }
 </script>
  <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
 <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
  <script>
   jQuery(document).ready(function ($) {
    $('#demotime').datetimepicker({
      format: 'YYYY-MM-DD',
    minDate:new Date()
     // mindate:true
    });
});
   </script>
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
    <!-- <script type="text/javascript">
     $('input.timepicker').timepicker({
      'timeFormat':'H:i'
     });
</script> -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ba4b656c666d426648af913/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
 <script type="text/javascript">
$(document).ready(function() {
   var max_fields      = 5; //maximum input boxes allowed
   var wrapper         = $("#apprequirement"); //Fields wrapper
   var append_time      = $(".add_field_button_requirement"); //Add button ID
   var x = 1; //initlal text box count
   
   $(append_time).click(function(e){ //on add input button click
       e.preventDefault();
       if(x < max_fields){
           x++; 
  // if('input[type=text]').keypress(function(){
  //   $(wrapper).append();
  // }
  //   else
  //   {
   //text box increment
   var jkl12="<option value='1'>12:00am</option><option value='2'>12:30am</option><option value='3'>1:00am</option><option value='4'>1:30am</option><option value='5'>2:00am</option><option value='6'>2:30am</option><option value='7'>3:00am</option><option value='8'>3:30am</option><option value='9'>4:00am</option><option value='10'>4:30am</option><option value='11'>5:00am</option><option value='12'>5:30am</option><option value='13'>6:00am</option><option value='14'>6:30am</option><option value='15'>7:00am</option><option value='16'>7:30am</option><option value='17'>8:00am</option><option value='18'>8:30am</option><option value='19'>9:00am</option><option value='20'>9:30am</option><option value='21'>10:00am</option><option value='22'>10:30am</option><option value='23'>11:00am</option><option value='24'>11:30am</option><option value='25'>12:00pm</option><option value='26'>12:30pm</option><option value='27'>1:00pm</option><option value='28'>1:30pm</option><option value='29'>2:00pm</option><option value='30'>2:30pm</option><option value='31'>3:00pm</option><option value='32'>3:30pm</option><option value='33'>4:00pm</option><option value='34'>4:30pm</option><option value='35'>5:00pm</option><option value='36'>5:30pm</option><option value='37'>6:00pm</option><option value='38'>6:30pm</option><option value='39'>7:00pm</option><option value='40'>7:30pm</option><option value='41'>8:00pm</option><option value='42'>8:30pm</option><option value='43'>9:00pm</option><option value='44'>9:30pm</option><option value='45'>10:00pm</option><option value='46'>10:30pm</option><option value='47'>11:00pm</option><option value='48'>11:30pm</option>";
           $(wrapper).append('<div id="my_append_requirement"><div class="form-group col-sm-12  no-padd"><div class="form-group col-sm-5 one-padd">From:<select class="form-control from_time" name="from_time[]"><option value="">From</option>'+jkl12+'</select></div><div class="form-group col-sm-5 one-padd">To:<select class="form-control to_time" name="to_time[]"><option value="">To</option>'+jkl12+'</select></div><span class="form-group col-sm-2 one-padd"><p class="btn btn-danger btn_remove m-t-20 no-bod-rad"  id="remove_field_requirement">x</p></span></div></div>');
       }
     // }

   });

   $(document).on("click","#remove_field_requirement", function(e){ //user click on remove text
       e.preventDefault(); $(this).parent().parent().remove(); x--;
   })
});
/*function callmytime(){
       $('input.timepicker').timepicker(); 
      }*/
    var time="<option value='1'>12:00am</option><option value='2'>12:30am</option><option value='3'>1:00am</option><option value='4'>1:30am</option><option value='5'>2:00am</option><option value='6'>2:30am</option><option value='7'>3:00am</option><option value='8'>3:30am</option><option value='9'>4:00am</option><option value='10'>4:30am</option><option value='11'>5:00am</option><option value='12'>5:30am</option><option value='13'>6:00am</option><option value='14'>6:30am</option><option value='15'>7:00am</option><option value='16'>7:30am</option><option value='17'>8:00am</option><option value='18'>8:30am</option><option value='19'>9:00am</option><option value='20'>9:30am</option><option value='21'>10:00am</option><option value='22'>10:30am</option><option value='23'>11:00am</option><option value='24'>11:30am</option><option value='25'>12:00pm</option><option value='26'>12:30pm</option><option value='27'>1:00pm</option><option value='28'>1:30pm</option><option value='29'>2:00pm</option><option value='30'>2:30pm</option><option value='31'>3:00pm</option><option value='32'>3:30pm</option><option value='33'>4:00pm</option><option value='34'>4:30pm</option><option value='35'>5:00pm</option><option value='36'>5:30pm</option><option value='37'>6:00pm</option><option value='38'>6:30pm</option><option value='39'>7:00pm</option><option value='40'>7:30pm</option><option value='41'>8:00pm</option><option value='42'>8:30pm</option><option value='43'>9:00pm</option><option value='44'>9:30pm</option><option value='45'>10:00pm</option><option value='46'>10:30pm</option><option value='47'>11:00pm</option><option value='48'>11:30pm</option>";   
  // $(".from_time").each(function(){
  //   $(this).append(time);
  // });
     $(".from_time").append(time);
     // $(".from_time").change(function(){
     //    alert($(".from_time").val());
     // })
   
     $(".to_time").append(time);
</script> 
<!--End of Tawk.to Script-->
<!--End of Tawk.to Script-->


<!-- <script type="text/javascript">
  $(document).ready(function(){
    $('input[type=text]').keypress(function(e){
      $('.submit').click();
    });
});
</script> -->