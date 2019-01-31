
<section class="referaltype">
 <div class="col-md-12">
   <div class="container">
     <div class="col-md-10 referal col-md-push-1">
       <div class="col-md-12 referal-main">
         <div class="col-md-3 text-center">
           <img src="<?php echo base_url();?>assets/images/icon4.png" alt="itutor" />
         </div>
         <div class="col-md-9 no-pad">
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
    <footer>
      <div class="container">
        <div class="col-md-12 footer-main">
       <div class="clearfix">&nbsp;</div>
                   <div class="col-md-3 no-padd">
                 <div class="col-md-12 footer-main-left">
              <h2>About Us</h2>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever </p>
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
                <li><a href="#">Home</a></li>
                <li><a href="#">Terms &amp; Conditons</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Advantage</a></li>
                <li><a href="#">Faq's</a></li>
                <li><a href="#">Contact Us</a></li>
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
                  <a><img src="<?php echo base_url();?>assets/images/fb.png" alt="fb"></a>
                  <a><img src="<?php echo base_url();?>assets/images/googlepluse.png" alt="gp"></a>
                  <a><img src="<?php echo base_url();?>assets/images/twitter.png" alt="tw"></a>
                  <a><img src="<?php echo base_url();?>assets/images/linkedin.png" alt="ld"></a>
              </ul>
            </div>
          </div>
     
      </div>

      <div class="col-md-12 subfooter">
      <div class="container">
      <div class="col-md-12 subfooter-main">
        <ul class="list-inline">
          <li class="col-md-6 text-left">2018 All &copy;&nbsp;Reserved&nbsp;@itsmytutor.com</li>
          <li class="col-md-6 text-right">Designed&nbsp;&amp;&nbsp;Developed By&nbsp;:&nbsp;<a href="#" target="_blank">Richlabz It Solutions Pvt.Ltd</a></li>
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
    //alert('die');
      var  str = true;
  var namepatern=/^[A-Za-z ]*$/;
  var mobilepattern = /^[0-9-]+$/;
  var emailpattern = /^[a-zA-Z0-9][a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

   $("#name_error,learningemail_error,mobile_error,#syllabus_error,#categorie_error,#class_error ,#subjects_error,#duration_error,#searchlocation_error").html('');
   $("#name,#syllabus,#learningemail,#mobile,#categorie,#class ,#subjects,#timings,#duration,#searchlocation").css('border','');
   var name = $('#learn_name').val().trim();
  var syllabus = $("#syllabus").val().trim();
  var categorie = $("#categorie").val().trim();
  var classs = $("#class").val();
  var subjects = $(".subjects").val();
  var fromtime = $(".timefrom").val();

  //alert(fromtime);
  var totime = $(".timeto").val();
  var searchlocation = $("#searchlocation").val().trim();
  var email = $("#learningemail").val().trim();
  var mobile = $("#learningmobile").val().trim(); 
  var duration = $("#duration").val().trim(); 
   var other_data = $('formrequirement').serializeArray();
    $.each(other_data,function(key,input){
        fd.append(input.timefrom,input.value);
    });
     $("[name^=from_time]").each(function () {
         if($(this).val()=="")
         {
           flag=false;
          $("[name^=from_time]").css('border','1px solid red');
         }
         else
         {
             $("[name^=from_time]").css('border','1px solid green');
         }
   
         });
        $("[name^=to_time").each(function () {
         if($(this).val()=="")
         {
           flag=false;
          $("[name^=to_time]").css('border','1px solid red');
         }
         else
         {
          $("[name^=to1_time]").css('border','1px solid green');
         }
         });
if(name=="" || name=='0'){ $("#learn_name").css('border','1px solid red').focus();$("#learn_name_error").html('Please Enter name');str=false;}else{$("#learn_name").css('border','').focus();$("#learn_name_error").html('');}
if(email=="" || email=='0'){ $("#learningemail").css('border','1px solid red').focus();$("#learningemail_error").html('Please Enter email');str=false;}else{$("#learningemail").css('border','').focus();$("#learningemail_error").html('');}
if(mobile=="" || mobile=='0'){ $("#learningmobile").css('border','1px solid red').focus();$("#learningmobile_error").html('Please Enter mobile');str=false;}else{$("#learningmobile").css('border','').focus();$("#learningmobile_error").html('');}

   if(syllabus=="" || syllabus=='0'){ $("#syllabus").css('border','1px solid red').focus();$("#syllabus_error").html('Please Enter Title');str=false;}else{$("#syllabus").css('border','').focus();$("#syllabus_error").html('');}

   if(categorie=="" || categorie=='0'){ $("#categorie").css('border','1px solid red').focus();$("#categorie_error").html('Please Enter category');str=false;}else{$("#categorie").css('border','').focus();$("#categorie_error").html('');}
    if(classs=="" || classs=='0'){ $("#class").css('border','1px solid red').focus();$("#class_error").html('Please Enter Class');str=false;}else{$("#class").css('border','').focus();$("#class_error").html('');}
    if(subjects=="" || subjects=='0'){ $("#subjects").css('border','1px solid red').focus();$("#subjects_error").html('Please Enter subjects');str=false;}else{$("#class").css('border','').focus();$("#subjects_error").html('');}
  if(fromtime=="" || fromtime=='0'){ $("#timepickerfrom").css('border','1px solid red').focus();$("#timepickerfrom_error").html('Please Enter timings');str=false;}else{$("#timepickerfrom").css('border','').focus();$("#timepickerfrom_error").html('');}

  if(totime=="" || totime=='0'){ $("#timepickerfrom").css('border','1px solid red').focus();$("#timepickerto_error").html('Please Enter timings');str=false;}else{$("#timepickerfrom").css('border','').focus();$("#timepickerto_error").html('');}

    if(duration=="" || duration=='0'){ $("#duration").css('border','1px solid red').focus();$("#duration_error").html('Please Enter duration');str=false;}else{$("#duration").css('border','').focus();$("#duration_error").html('');}
if(email!='' && !emailpattern.test(email)){ 
  $("#learningemail").css('border','1px solid red').focus();
  $("#learningemail_error").html('Invalid email.');str=false; }
    
if(mobile!='' && !mobilepattern.test(mobile)){ 
  $("#learningmobile").css('border','1px solid red').focus();
  $("#learningmobile_error").html('Invalid mobile.');str=false; }

    if(searchlocation=="" || searchlocation =='0'){ 
      $("#searchlocation").css('border','1px solid red').focus();
      $("#searchlocation_error").html('Please Enter Location');str=false;
    }else{$("#searchlocation_error").css('border','').focus();
      $("#searchlocation").html('');
    }
if(name!='' && !namepatern.test(name)){ 
  $("#learn_name").css('border','1px solid red').focus();
  $("#learn_name_error").html('Invalid Name.');str=false; }
    if(str==true){
      $.ajax({
                    dataType:'JSON',
                    method:'POST',
                    contentType: false,
                    cache: false,
                    processData: false,
                   // data:{'name':name,'email':email,'mobile':mobile,'searchlocation':searchlocation,'duration':duration,'from_time':fromtime,'to_time':totime,'classs':classs,'categorie':categorie,'subjects':subjects,'syllabus':syllabus},
                   data:new FormData(this),
                    url:"<?php echo base_url(). 'registration/save_post_requirement_data';?>",
                   success:function(s){
                    console.log(s);
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

                      }
                     },
                   error:function(e){console.log(e);

                });
    }
    return false;
     //return str;
    });
  })
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
                } $('#class').html(appenddata);
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
 <script type="text/javascript">
   $("#class").on('change',function(){
    var newclass = $("#class").val();
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
<script type="text/javascript">
     $('input.timepicker').timepicker(); 
      function getnew(){
      
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
           $(wrapper).append('<div id="my_append_requirement"><div class="form-group col-sm-12  no-padd"><div class="form-group col-sm-5 one-padd">From:<input type="text"  name="from_time[]" class="form-control timepicker timefrom" onfocus="getnew()"></div><div class="form-group col-sm-5 one-padd">To:<input type="text"  name="to_time[]" class="form-control timepicker timeto" onfocus="getnew()"></div><span class="form-group col-sm-2 one-padd"><button class="btn btn-danger btn_remove m-t-20"  id="remove_field_requirement">x</button></span></div></div>');
       }

   });
   
   $(document).on("click","#remove_field_requirement", function(e){ //user click on remove text
       e.preventDefault(); $("#my_append_requirement").remove(); x--;
   })
});

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
            /** @type {!HTMLInputElement} */(document.getElementById('searchlocation')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }
 </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUlB6Eh-d9yy-kbAVPFbC9WcIYQCtJXJE&libraries=places&callback=initAutocomplete"
        async defer></script>
<script type="text/javascript">
var btnContainer = document.getElementById("myDIV");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>        