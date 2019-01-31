<section class="referaltype">
 <div class="col-md-12">
   <div class="container">
     <div class="col-md-10 col-xs-12 referal col-md-push-1">
       <div class="col-md-12 col-xs-12 referal-main">
         <div class="col-md-3 col-xs-3 text-center">
           <img src="<?php echo base_url();?>assets/images/icon4.png" class="img-responsive"  alt="itutor" />
         </div>
         <div class="col-md-9 col-xs-8 no-pad">
           <h4>Hello Tutors!!! Enjoy the opportunity of Referral Reward</h4>
           <h5>Refer your friends to register with itutor&nbsp;&amp;&nbsp;get a referral cash</h5>
         </div>
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
                     <p>Itsmytutor is totally dedicated to tutors and students and our intention is explore the door for tutor and student where they can achieve their goals in best way. </p>
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
              <h2>Usefull Links</h2>
               <ul>
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url();?>about-us">About Us</a></li>
                <li><a href="<?php echo base_url();?>tutor-list">tutor</a></li>
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

                <p>Mobile&nbsp;:&nbsp;+91 9876543210</p>
                <p>Email&nbsp;:&nbsp;info@itutors.com</p>
                  <div class="clearfix">&nbsp;</div>
                  <!-- <a><img src="<?php echo base_url();?>assets/images/fb.png" alt="fb"></a>
                  <a><img src="<?php echo base_url();?>assets/images/googlepluse.png" alt="gp"></a>
                  <a><img src="<?php echo base_url();?>assets/images/twitter.png" alt="tw"></a>
                  <a><img src="<?php echo base_url();?>assets/images/linkedin.png" alt="ld"></a> -->
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

 <script type="text/javascript">
  $(document).ready(function(){
  $("#formrequirement").on("submit",function(){
    // alert('die');
    //$('.ui-timepicker-wrapper').css('z-index','0');
      var  str = true;
  var namepattern=/^[A-Za-z ]*$/;
  var loc_pattern=/^[A-Za-z, ]*$/;
  var mobilepattern = /^[6-9]{1}[0-9]{9}$/;
  var emailpattern = /^[a-zA-Z0-9][a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  var durationpattern =/^[1-9][0-9.]*$/;
  var timepattern =/^[0-9]{1,2}\:[0-9]{1,2}[a,p,m,A,P,M]{2}$/;
   /*$("#name_error,learningemail_error,mobile_error,#syllabus_name_error,#categorie_error,#class_error ,#subjects_error,#duration_error,#searchlocation_error").html('');*/
   $("#learn_name,#syllabus_name,#learningemail,#mobile,#categorie,#classsession,#subject,#timings,#duration,#searchlocation,#timepickerfrom,#timepickerto").css('border','');
   var name = $('#learn_name').val().trim();
  var syllabus_name = $("#syllabus_name").val();  
  var categorie = $("#categorie").val().trim();
  var classs = $("#classsession").val();
  var subjects = $('#subjects> option:selected');
  var fromtime = $("#timepickerfrom").val();
  var totime = $("#timepickerto").val();
  var searchlocation = $("#searchlocation").val().trim();
  var email = $("#learningemail").val().trim();
  var mobile = $("#learningmobile").val().trim();
         if(subjects .length == 0){
             $("#subjects").css('border','1px solid red').focus();str=false;
         }else{
            $("#subjects").css('border','').focus();
         }
  var duration = $("#duration").val().trim();
   var other_data = $('formrequirement').serializeArray();
    $.each(other_data,function(key,input){
        fd.append(input.timefrom,input.value);
    });
     $("[name^=from_time]").each(function (){
         if($(this).val()=="")
         {
           flag=false;
          $("[name^=from_time]").css('border','1px solid red');
         }
          else if($(this).val()!="" && !timepattern.test($(this).val()))
         {
            flag=false;
            $("[name^=from_time]").css('border','1px solid red'); 
         }
         else
         {
           $("[name^=from_time]").css('border','');
         }

         });
        $("[name^=to_time").each(function () {
          var to=$(this).val();
         if($(this).val()=="")
         {
           flag=false;
          $("[name^=to_time]").css('border','1px solid red');
         }
         else if(to!="" && !timepattern.test(to))
         {
            flag=false;
            $("[name^=to_time]").css('border','1px solid red'); 
         }else
         {
          $("[name^=to_time]").css('border','');
         }
         });
if(name=="" || name=='0'){ $("#learn_name").css('border','1px solid red').focus();str=false;}else{$("#learn_name").css('border','').focus();$("#learn_name_error").html('');}
if(email=="" || email=='0'){ $("#learningemail").css('border','1px solid red').focus();str=false;}else{$("#learningemail").css('border','').focus();}
if(mobile=="" || mobile=='0'){ $("#learningmobile").css('border','1px solid red').focus();str=false;}else{$("#learningmobile").css('border','').focus();}

   if(syllabus_name=="" || syllabus_name=='0'){ $("#syllabus_name").css('border','1px solid red').focus();str=false;}else{$("#syllabus_name").css('border','').focus();}

   if(categorie=="" || categorie=='0'){ $("#categorie").css('border','1px solid red').focus();str=false;}else{$("#categorie").css('border','').focus();}
    if(classs=="" || classs=='0'){ $("#classsession").css('border','1px solid red').focus();str=false;}else{$("#classsession").css('border','').focus();}
  if(fromtime=="" || fromtime=='0'){ $("#timepickerfrom").css('border','1px solid red');
  str=false;}
  if(fromtime!="" && !timepattern.test(fromtime)){
$("#timepickerfrom").css('border','1px solid red');
  str=false;
  }
  if(totime=="" || totime=='0'){
  $("#timepickerto").css('border','1px solid red');
   str=false;
  }
  if(totime!="" && !timepattern.test(totime)){
$("#timepickerto").css('border','1px solid red');
  str=false;
  }
  if (fromtime!="" && !timepattern.test(fromtime)){
      $("#timepickerfrom").css('border','1px solid red');
      str=false;
    }
    if(duration=="" || duration=='0'){ $("#duration").css('border','1px solid red').focus();str=false;}else{$("#duration").css('border','').focus();}
    if(duration!="" && !durationpattern.test(duration)){
      $("#duration").css('border','1px solid red').focus();
      str = false;
    }
    
if(email!='' && !emailpattern.test(email)){
  $("#learningemail").css('border','1px solid red').focus();
str=false; }

if(mobile!='' && !mobilepattern.test(mobile)){
  $("#learningmobile").css('border','1px solid red').focus();
  str=false; }

    if(searchlocation=="" || searchlocation =='0'){
      $("#searchlocation").css('border','1px solid red').focus();
      str=false;
    }else{$("#searchlocation").css('border','').focus();
      
    }
    if(searchlocation!='' && !loc_pattern.test(searchlocation)){
  $("#searchlocation").css('border','1px solid red').focus();
 str=false; }

if(name!='' && !namepattern.test(name)){
  $("#learn_name").css('border','1px solid red').focus();
 str=false; }
    if(str==true){
      // alert('hii');
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
                         setTimeout(function(){window.location=''; },4000);
                         break;
                        case 201:
                        $('.print-error-msg').removeClass('alert alert-success');
                        $('.print-error-msg').addClass('alert alert-danger');
                        $('.print-error-msg').html(s.description);
                         //setTimeout(function(){window.location=''; },4000);

                      }
                     },
                   error:function(e){console.log(e);}

                });
    }
    return false;
     //return str;
    });
  })
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
          appenddata+='<option value="0">Choose Subject</option>';
          if(s.code==200){

            for(var i =0; i<len; ++i){
              appenddata+='<option value="'+data[i]['subject_id']+'">'+data[i]['subject_name']+'</option>';
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

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
<script type="text/javascript">
  // $('.timepicker').on('focus',function(){

  // })
     $('input.timepicker').timepicker();
      function tell_mytime(){
         $('input.timepicker').timepicker();
      }
      
</script>
 <script type="text/javascript">
$(document).ready(function() {
   var max_fields      = 5; //maximum input boxes allowed
   var wrapper         = $("#apprequirement"); //Fields wrapper
   var add_button      = $("#add_field_button_requirement"); //Add button ID
   var x = 1; //initlal text box count
   $(add_button).click(function(e){ //on add input button click
       e.preventDefault();
       if(x < max_fields){
           x++; //text box increment
           $(wrapper).append('<div id="my_append_requirement"><div class="form-group col-sm-12  no-padd"><div class="form-group col-sm-5 one-padd">From:<input type="text"  name="from_time[]" class="form-control timepicker timefrom no-bod-rad" onclick="tell_mytime()"></div><div class="form-group col-sm-5 one-padd">To:<input type="text"  name="to_time[]" class="form-control timepicker timeto no-bod-rad" onclick="tell_mytime()"></div><span class="form-group col-sm-2 one-padd"><button class="btn btn-danger btn_remove m-t-20 no-bod-rad"  id="remove_field_requirement">x</button></span></div></div>');
       }

   });

   $(document).on("click","#remove_field_requirement", function(e){ //user click on remove text
       e.preventDefault(); $("#my_append_requirement").remove(); x--;
   })
});
/*function callmytime(){
       $('input.timepicker').timepicker(); 
      }*/
      
      //$('.timepicker', newElem).removeClass('hastimepicker').timepicker()
     
</script>
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
         var latitude = place.geometry.location.lat();
         var longitude = place.geometry.location.lng();
          console.log(latitude);
          console.log(longitude);
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
        $("#notificationsLoader").show();
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
 