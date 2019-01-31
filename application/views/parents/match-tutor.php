<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" "/>

<meta name="keywords" content=""/>
<meta name="author" content=""/>
<meta name="rating" CONTENT="General"/>
<meta name="revisit-after" CONTENT="2 days"/>
<meta name="robots" content=" ALL, index, follow"/>
<meta name="distribution" content="Global" />
<meta name="rating" content="Safe For All" />
<meta name="language" content="English" />
<meta http-equiv="window-target" content="_top"/>
<meta http-equiv="pics-label" content="for all ages"/>
<meta name="rating" content="general"/>
<meta content="All, FOLLOW" name="GOOGLEBOTS"/>
<meta content="All, FOLLOW" name="YAHOOBOTS"/>
<meta content="All, FOLLOW" name="MSNBOTS"/>
<meta content="All, FOLLOW" name="BINGBOTS"/>
<meta content="all" name="Googlebot-Image"/>
<meta content="all" name="Slurp"/>
<meta content="all" name="Scooter"/>
<meta content="ALL" name="WEBCRAWLERS"/>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo TITLE_PATH;?></title>
<meta name="description" content=" "/>
<meta name="keywords" content="  "/>
<meta name="author" content="  "/>
<meta name="rating" CONTENT="General"/>
<meta name="revisit-after" CONTENT="2 days"/>
<meta name="robots" content=" ALL, index, follow"/>
<meta name="distribution" content="Global" />
<meta name="rating" content="Safe For All" />
<meta name="language" content="English" />
<meta http-equiv="window-target" content="_top"/>
<meta http-equiv="pics-label" content="for all ages"/>
<meta name="rating" content="general"/>
<meta content="All, FOLLOW" name="GOOGLEBOTS"/>
<meta content="All, FOLLOW" name="YAHOOBOTS"/>
<meta content="All, FOLLOW" name="MSNBOTS"/>
<meta content="All, FOLLOW" name="BINGBOTS"/>
<meta content="all" name="Googlebot-Image"/>
<meta content="all" name="Slurp"/>
<meta content="all" name="Scooter"/>
<meta content="ALL" name="WEBCRAWLERS"/>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1"/>
<link rel="canonical" href="<?php echo base_url(); ?>parent/matching-tutor" />
<!-- Bootstrap -->
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet"  />
<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
<!--custom css-->
  <link href="<?php echo base_url();?>assets/css/custom.css" type="text/css" rel="stylesheet"  />
 <!--menu-->
  <link href="<?php echo base_url();?>assets/css/menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/icomoon.css">
  <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .register .input-group .input-group-addon{border: 1px solid #ccc;border-right: none;}
        .register .input-group {padding: 9px 2px;}
        .register .input-group .form-control{height: 45px !important}
        .pad5{    padding: 5px 21px 6px 0px !important}
        .btn-label {border: 1px solid #fff;padding: 10px 10px}
        .btn-facebook { color: #fff!important;background-color: #3b5998!important;}
        .btn-googleplus { color: #fff!important;background-color: #dd4b39!important;}

        .f14{font-size: 14px !important}
        .mt0{margin-top: 0px}
        .side-menu ul li a{color: #fff; font-size: 13px;text-decoration: none}
        .mt9{margin-top: 9px}
        .bootstrap-tagsinput { border: 1px solid #e4e7ea;border-radius: 0px; box-shadow: none; display: block; padding: 7px 12px;}
        .labell-bg {background: #fff;color: #bbb;border: 1px solid;}
        .btn-bg{background-color: #ed3f40;color: #fff}
        .text-white{color: #fff !important}
        .filter-right-main-head-left ul li {list-style: none; float: right; margin: 22px 0px 0px 3px;}
        .filter-right-main p{margin: 9px 10px;}
        .filter-right { padding: 9px 0px 21px;}
		.rattingtutor li a i{color:#ed3f40}
      </style>
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125562697-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125562697-1');
</script>
  </head>
  <body class="bg-wh">
  <?php $this->load->view('includes/header.php'); ?>
   <div class="clearfix"></div>

  <section>
        <div class="bg-back container-fluid"  style="background-image:url('<?php echo base_url();?>assets/images/bg-back.jpg')">
      <div class="container">
    <?php $this->load->view('parents/parent-sidebar'); ?>
      <div class="col-sm-10">
          <div class="col-sm-12 inner-bg no-padd m-t-10">
            
           <h4 class="title-hd"><strong>Viewed Tutor</strong><span class="pull-right"> <a href="<?php echo base_url();?>parent/requirements" class="btn btn-red no-bod-rad btn-sm col-wh" style="margin-top: -5px;">Back</a></span></h4>
   
      <form method="post" action="<?php echo base_url(); ?>/parents/parent_ctrl/matching_tutor_search">
          <div class="col-sm-12">
                 <div class="col-sm-3">
                  <div class="form-group">
                   <input type="text" class="form-control" name="loc_search" id="location" onclick="a();" placeholder="enter location">
                    <input type="hidden" id="locality" name="city" value="">
  <input type="hidden" id="postal_code" name="pincode" value="0">
  <input type="hidden" id="lat" name="lat" value="0">
  <input type="hidden" id="lng" name="lon" value="0">
  
                 </div>
               </div>
                 <div class="col-sm-3">
                  <div class="form-group">
                 <input type="text" class="form-control" name="nearby" id="nearby" placeholder="near by in km">
                 </div>
               </div>
                <div class="col-sm-3">
                  <select class="form-control no-bod-rad" name="gender" id="gender">
                     <option value=''>--select--</option>
                    <option value="male">Male</option>
                    <option value="fe">Female</option>
                   </select>
                 </div>
                 <div class="col-sm-2">
            <input type="submit" name="search" class="btn btn-md btn-info no-bod-rad" value="Search">
         </div>
       </div>
   
        </form>
            <div class="col-md-12 filter-right"><!--filter right start--> <?php
                  if(!empty($post_list))
                  {
                  $page=$this->uri->segment(5);
                                    if(!empty($page))
                                     $i=$page+1;
                               else
                            $i=1;
						////print_r($post_list);die;
                        foreach($post_list as $row)
                        {
                          
                          
                          ?>
                       <div class="col-md-6 "><!--tutodiv start-->
                           
                      <div class="col-md-12 no-pad"><!--tutodiv start-->
               <div class="col-md-12 filter-right-main">
                        <div class="col-md-12 filter-right-main-head">
                            <div class="col-md-8 no-pad">
                                <ul class="list-inline">
                                 <?php if($row->photo!="")
                                  { ?>
                                <li class="col-md-5"><img src="<?php echo base_url();?>uploads/tutor_pic/<?php echo $row->photo;?>" alt="itutors"></li>
                              <?php } else { ?>
                                <li class="col-md-5"><img src="<?php echo base_url();?>uploads/tutor_pic/tutor.png" alt="itutors"></li>
                                <?php }?>
                                <li><h3><?php echo $row->name;?></h3>
                                    <p><?php echo $row->unique_id;?></p>
                                </li>
                                </ul>
                            </div>
                            <div class="col-md-4 filter-right-main-head-left">
                                <ul style="display:none">
                                  <li><a href="#" data-toggle="tooltip" title="" data-original-title="Location"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="" data-original-title="Rating"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="" data-original-title="Mobile"><i class="fa fa-mobile" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="" data-original-title="Email"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                </ul>
                            </div><button  style="display:none" class="btn btn-blue" data-toggle="modal" data-target="#rating_view">Give Rating</button>
                            </div><!--fliter head end-->
							
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                              <p>Gender:<?php echo $row->gender;?></p> 
                              <p>Age: <?php echo get_age($row->dob);?> Years</p>
                           <p>Experience:&nbsp;:&nbsp;<?php echo $row->experience;?> <?php if($row->experience==1){?>Year<?php } else { ?> Years <?php }?>&nbsp;</p>
                              <p>Qualification&nbsp;:&nbsp;<?php echo $row->qualification;?></p>
                              <p>Teaches&nbsp;:&nbsp;<span><?php echo implode(',',$row->subjects);?></span></p>
                              <p>Area&nbsp;:&nbsp;<?php echo ucwords(substr($row->location_my,0,35)).'...';?>&nbsp;&nbsp;&nbsp;</p>
                                <p style="display:none" id='mydescreption<?php echo $row->user_id; ?>'><?php echo $row->user_id;?></p>
                                <p style="display:none" id="reqid"><?php echo $this->uri->segment(3);?></p>
                              <ul class="list-inline text-center">
                             
                                <li class="col-md-4">
                                  <a href="<?php echo base_url();?>tutor/profile/<?php echo $row->user_id;?>/<?php echo $this->uri->segment(3);?>" class="btn btn-red no-bod-rad f14 text-white">View profile</a></li>
                                  <li class="col-md-4">
                                <a href="#" class="btn btn-blue no-bod-rad f14 text-white" onclick="viewtutor(<?php echo $row->user_id; ?>)" data-toggle="modal" data-target="#myModalleadsview">View contacts</a>
                                  </li>
                                   <li class="col-md-4">
                                  <a href="#" class="btn btn-red text-white f14 no-bod-rad" onclick="populate_more('<?php echo $row->user_id;?>')" data-toggle="modal" data-target="#feedback_view">Feedback</a></li> 
                                    </ul>
                              <div class="clearfix"></div>
                              <ul class="list-inline">
                                  <li class="col-md-1"></li>
                                <li class="col-md-5" style="display:none"><a href="#" class="btn btn-default no-bod-rad" style="margin: 10px 0px;"><i class="fa fa-commenting-o" aria-hidden="true"></i>&nbsp;Send Enquiry</a></li>
                                <li class="col-md-5" style="display:none"><a href="#" class="btn btn-default no-bod-rad" style="margin: 10px 0px;"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Contact Tutor</a></li>
                                <div class="clearfix"></div>
                              </ul>
                              
                             
                            </div>

                            <div class="clearfix"></div>
                        </div>

                        <div class="clearfix"></div>
                      </div>

                        
                        <div class="clearfix"></div>
                      </div>
                      <?php $i++;
                       }
                             }else { ?>
                                <p style="text-align:center; color:red;font-size:20px;">Tutor Not Found...</p>
                            <?php } ?>
                           </div>
						   <div class="col-sm-12 text-center">
              <?php if(!empty($links)) echo $links;?>
         
      </div>
    </div>
  </div>
      </section>
  <!--section dashboard end-->
  <div id="myModalleadsview" class="modal fade" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header btn-blue text-white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-family: 'MavenPro-Regular';">Tutor Contact Details</h4>
        <h3 id="messageleads"></h3>
      </div>
      <div class="modal-body">
       
   
     <div class="table-responsive col-sm-12" id="noview">
       <table class="table table-striped custab table-bordered">
    <thead>
    
        <tr>
           <th id="email_head">Email</th>
            <th id="mobile_head">Mobile</th>
        </tr>
    </thead>
            <tr>
                
                <td  id="emaillead"></td>
                <td id="mobilelead"></td>
               <!--  <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-add"></span> Accept</a></td> -->
            </tr>
            
    </table>
         </div>
      </div>
      <div class="modal-footer" style="border-top: none">
        <button type="button" class="btn btn-default no-bod-rad" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> 
<!--feedback view-->
<div id="feedback_view" class="modal fade" role="dialog">
  <div class="modal-dialog"  style="font-family:MavenPro-Regular">
  <div class="modal-content">
    
      <div class="modal-header btn-blue text-white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-family:MavenPro-Regular">Feedback</h4>
      </div>
      <div class="modal-body">
         <p id="content-post" style="display:none"></p>
         <p id="req_post" style="display:none"></p>
       <form id="myform" action="" method="post">
<!--
         <div class="form-group col-sm-6">
             <label>Name</label>
           <input type="text" class="form-control no-bod-rad" placeholder="Name">
         </div> 
           <div class="form-group col-sm-6">
               <label>Email</label>
           <input type="text" class="form-control no-bod-rad" placeholder="Email">
         </div> 
-->
           <div id="feedback_msg"></div>
           <div class="form-group col-sm-12 m-t-10">
               <label>Your Feedback is Valuble for us</label>
           <textarea class="form-control no-bod-rad" rows="5" id="feedback"></textarea>
           <label>Meeting</label>
           <select class="form-control" id="meeting" name="meeting">
            <option value="">select meeting status</option>
            <option value="1">success</option>
            <option value="2">fail</option>
              </select>
            <div class="form-group col-sm-12 timing">
      <div class="form-group col-sm-6">
        from:<input type="text" name="frm_time" id="frm_time" class="form-control time_picker" placeholder="09:20am">
</div>
    <div class="form-group col-sm-6">
      to:<input type="text" name="to_time" id="to_time"class="form-control time_picker" placeholder="01:30pm">
    </div>
           </div>
        
     </div>
    
      <div class="modal-footer text-center col-sm-12" style="border-top: none; text-align: center;">
        <button type="submit" class="btn btn-blue no-bod-rad text-white" id="feedback_submit" onclick="validate_feedback();">submit</button>
      </form>
          <button type="button" class="btn btn-red no-bod-rad text-white" data-dismiss="modal">Close</button>
      </div>
      <div class="clearfix">&nbsp;</div>
    </div>
</div>
</div>
</form>
</div>
<!--start rating and review-->
<div id="rating_view" class="modal fade" role="dialog">
  <div class="modal-dialog"  style="font-family:MavenPro-Regular">
  <div class="modal-content">
    
      <div class="modal-header btn-blue text-white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-family:MavenPro-Regular">Your Review</h4>
      </div>
      <div class="modal-body">
       <form id="rateing-form" action="" method="post">
<!--
         <div class="form-group col-sm-6">
             <label>Name</label>
           <input type="text" class="form-control no-bod-rad" placeholder="Name">
         </div> 
           <div class="form-group col-sm-6">
               <label>Email</label>
           <input type="text" class="form-control no-bod-rad" placeholder="Email">
         </div> 
-->     
		<div id="ratingid" class="col-sm-12">
		<ul class="rattingtutor">
    <li><a><i class="fa fa-heart" aria-hidden="true" data-rating="1"></i></a></li>
    <li><a><i class="fa fa-heart" aria-hidden="true" data-rating="2"></i></a></li>
    <li><a><i class="fa fa-heart" aria-hidden="true" data-rating="3"></i></a></li>
    <li><a><i class="fa fa-heart" aria-hidden="true" data-rating="4"></i></a></li>
    <li><a><i class="fa fa-heart-o" aria-hidden="true" data-rating="5"></i></a></li>
    </ul>
	</div>
		<div id="rating_msg"></div>
           <div class="form-group col-sm-12 m-t-10">
               <label>Your comments is Valuble for us</label>
           <textarea class="form-control no-bod-rad" rows="5" id="feedback"></textarea>
     </div>
    
      <div class="modal-footer text-center col-sm-12" style="border-top: none; text-align: center;">
        <button type="submit" class="btn btn-blue no-bod-rad text-white"  onclick="post_rating()" id="feedback_submit" onclick="validate_feedback();">submit</button>
      </form>
          <button type="button" class="btn btn-red no-bod-rad text-white" data-dismiss="modal">Close</button>
      </div>
      <div class="clearfix">&nbsp;</div>
    </div>
</div>
</div>
</form>
</div>
<!--end rating-->
</div>
</div>
</div>
</div>
</section>
 <?php $this->load->view('includes/modal'); ?>
 <div class="clearfix"></div>
 <?php $this->load->view('includes/footer'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/menu.js"></script>
     <script type="text/javascript">
 function  populate_more(id){
  $("#feedback_submit").prop('disabled',false);
var newss = $("#mydescreption"+id).text();
var req=$("#reqid").text();
  $("#content-post").html(newss);
  $("#req_post").html(req);
  $("#feedback_msg").html('');
  $("#feedback").val('');
   }
  
</script>
<script type="text/javascript">
</script>
<script type="text/javascript">
  $("#myform").on('submit',function(e){
   e.preventDefault();
  });
</script>
<script type="text/javascript">
  function validate_feedback(){

    str=true;
       var feedback=$('#feedback').val();
       var meeting=$('#meeting').val();
       var id=$("#content-post").text();
        var req_id=$("#req_post").text();
        if(meeting==1)
        {
          var frm_time=$('#frm_time').val();
          var to_time=$('#to_time').val();
          var timing=frm_time+" to "+to_time;
        }
  if(feedback=="")
  {
    str=false;
    $("#feedback").css('border','1px solid red');
  }
  else
  {
    $("#feedback").css('border','');
  }
   if(meeting=="")
  {
    str=false;
    $("#meeting").css('border','1px solid red');
  }
  else
  {
    $("#meeting").css('border','');
  }

       if(str==true)
       {
      if(id!="" && feedback!="" && meeting!="")
      {
      $.ajax({
                  dataType:'JSON',
                   method:'POST',
                   data:{"tutor_id":id,'feedback':feedback,'meeting':meeting,'req_id':req_id,'timing':timing},                  
                   url:"<?php echo base_url(); ?>tutor/add_parent_feedback",
                    success:function(s){
                      if(s.code==200){
                        $("#feedback_msg").html(s.description).addClass('bg-success');
                         $("#feedback_submit").prop('disabled', true);
                      }
                      else if(s.code==422)
                      {
                         $("#feedback_msg").html(s.description).addClass('bg-info');
                         $("#feedback_submit").prop('disabled', true);
                      }
                      else{
                        $("#feedback_msg").html("something went wrong");

                      }
                    },
                    error:function(er){
                      console.log(er);
                    },
      });
    }

}
return false;
}
</script>
    <script type="text/javascript">
  function viewtutor(id){
    if(id!="")
    {
      // alert('entered');
      $.ajax({
                  dataType:'JSON',
                   method:'POST',
                   data:{"postid":id},                  
                   url:"<?php echo base_url(); ?>Tutor/get_tutor_contact",
                    success:function(s){
                      console.log(s);
                      if(s.code==200){
                        var mypostdata = s.result;
                        console.log(mypostdata.email);
                        $("#noview").css('display','block');
                        $("#emaillead").html(mypostdata.email);
                        $("#mobilelead").html(mypostdata.mobile);
                         $("#messageleads").html('');
                      }else{
                        $("#messageleads").html(s.description);
                        $("#noview").css('display','none');
                        $("#emaillead").html('');
                        $("#mobilelead").html('');
                      }
                    },
                    error:function(er){
                      console.log(er);
                    },
      });
    }
  }
</script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
   <script type="text/javascript">
        $('input.time_picker').timepicker();

   </script>
   <script type="text/javascript">
     $("document").ready(function(){
       var meeting=$("#meeting").val();
       if(meeting=="" || meeting==2)
        $(".timing").hide();
   });
     $("#meeting").change(function(){
    var meeting=$("#meeting").val();
    if(meeting==1)
       {
        $(".timing").show()
       }
       else
       {
        $(".timing").hide()
       }
   });
</script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUlB6Eh-d9yy-kbAVPFbC9WcIYQCtJXJE&libraries=places&callback=initAutocomplete"
        async defer></script>

<script type="text/javascript">
  
  function a(){
            var placeSearch, autocomplete;
            var componentForm = {
                location: 'long_name',
                locality: 'long_name',
                administrative_area_level_1: 'long_name',
                country: 'long_name',
                postal_code: 'short_name'
            };
            function initAutocomplete() {
            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */(document.getElementById('location')),
                {types: ['geocode'],
                    componentRestrictions: {country: "in"}
                });
            autocomplete.addListener('place_changed', fillInAddress);
            }
             initAutocomplete();
         function fillInAddress() {
          var place = autocomplete.getPlace();
         var latitude = place.geometry.location.lat();
         var longitude = place.geometry.location.lng();
          document.getElementById('postal_code').value = 0;
          document.getElementById('locality').value = '';
          document.getElementById('lat').value = 0;
          document.getElementById('lng').value = 0;
          document.getElementById('lat').value = latitude;
         document.getElementById('lng').value = longitude;
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
        fillInAddress();
      }
    </script>
   <script>
   function post_rating() {
    var blogid = $('#blog_id').val();
    var comment_rating = $('#comment_rating').val();
    var starcount = $star_rating.siblings('input.rating-value').val();
    if (starcount&&comment_rating) {
    $.ajax({
        url: "<?php echo base_url(); ?>",
        data: {starcount: starcount, blogid: blogid, comment_rating: comment_rating},
        type: "POST",
        success: function (data) {

            location.reload();

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('error in insert rating data');
        }
    });
    }else{
        alert("Please rate and comment");
    }

}
var $star_rating = $('.star-rating .fa');
var SetRatingStar = function() {
    return $star_rating.each(function() {
    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {

    return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
        return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
});

};
// alert($star_rating.siblings('input.rating-value').val());

$star_rating.on('click', function() {
    $star_rating.siblings('input.rating-value').val($(this).data('rating'));
    return SetRatingStar();
});
   </script>
  
  </body>
</html>