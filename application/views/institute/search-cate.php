<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo TITLE_PATH;?></title>

<!-- Bootstrap -->
<link href="<?php echo MYCSS_PATH;?>bootstrap.min.css" type="text/css" rel="stylesheet"  />
<!--custom css-->
  <link href="<?php echo MYCSS_PATH;?>custom.css" type="text/css" rel="stylesheet"  />
 <!--menu-->
  <link href="<?php echo MYCSS_PATH;?>menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo MYCSS_PATH;?>icomoon.css">
  <link href="<?php echo MYCSS_PATH;?>font-awesome.min.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .register .input-group .input-group-addon{border: 1px solid #ccc;border-right: none;}
/*      .register .input-group {padding: 9px 2px;} */
        .register .input-group {padding-top: 15px;}
        .register .input-group .form-control{height: 45px !important}
        .pad5{    padding: 5px 21px 6px 0px !important}
        .btn-label {border: 1px solid #fff;padding: 10px 10px}
        .btn-facebook { color: #fff!important;background-color: #3b5998!important;}
        .btn-googleplus { color: #fff!important;background-color: #dd4b39!important;}
        .bod-danger{border:1px solid #a94442 !important}
        .bod-success{border:1px solid green !important}
        .mt0{margin-bottom: 0px}
        .panel-title{font-size: 21px}
        .panel-group .panel{    border-radius: 0px;}
        .panel-title > a:before {float: right !important;font-family: FontAwesome;content:"\f055";padding-right: 5px;}
.panel-title > a.collapsed:before {float: right !important;content:"\f056";}
.panel-title > a:hover, 
.panel-title > a:active, 
.panel-title > a:focus  {
    text-decoration:none;
}
.m-t-25{margin-top: 25px} .m-t-6{margin-top: 6px !important}
        .panel-body p{    padding: 6px 30px;}
        .col-wh{color: #fff !important}
        .cate-search{background-image: url(<?php echo base_url();?>assets/images/category-bg.jpg);background-repeat: no-repeat;background-size: 100% 100%;height: 247px}
      </style>
  </head>
  <body class="bg-wh">
  <?php $this->load->view('includes/header'); ?>
   <div class="clearfix"></div>
  
   <section>
         <div class="container-fluid no-padd cate-search">
         
            <div class="col-sm-12" style="background: rgba(0,0,0,0.5);    margin-top: 12%;">
        <div class="col-sm-10 col-sm-offset-1" >
    <?php echo form_open('Businessdirectory_controller/search_category_institute',array('name'=>'searchfrm','id'=>'searchfrm')); ?>
   <div class="form-group col-sm-3">
  <label for="sel1" class="col-wh m-t-6"> Categories:</label>
  <select class="form-control no-bod-rad" id="sel1">
    <option value="0">Select Category</option>
      <?php if($institute_cate->code==200){
            foreach ($institute_cate->result as $key => $value) { 
              ?>
    <option value="<?php echo $value->institute_type_id; ?>"><?php echo $value->institute_type_name; ?></option>
      <?php           }
          } 
          ?>
  </select>
</div>
 <div class="form-group col-sm-3">
  <label for="sel1" class="col-wh m-t-6"> Sub-Categories:</label>
  <select class="form-control no-bod-rad" id="sel1">
    <option>Select</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
</div>
   <div class="form-group col-sm-3">
    <label class="col-wh m-t-6"> Location:</label>
   <input type="text" class="form-control  no-bod-rad" id="searchlocation" name="searchlocation" placeholder="Location">
  </div>
  <div class="col-sm-3">
  <button type="submit" class="btn btn-danger2 no-bod-rad col-sm-12 m-t-30">  <i class="fa fa-search"></i>&nbsp; Search</button>
</div>
<?php echo form_close(); ?>
<div class="clearfix">&nbsp;</div>
</div>
       </div>
  
     </div>
      </section>
  <!--section signup start-->
  <section>
        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>
      <div class="container">
        <div class="col-sm-12">
          <?php 
          //print_r($institute_cat);
          if(!empty($institute_cat)){
            foreach ($institute_cat as $key => $value) { 
              ?>
             

          <div class="col-sm-3">
            <div class="" style="border:1px solid #ccc">
               <img src="<?php echo base_url();?>uploads/institutetypeimage/<?php echo $value->institutetype_image; ?>" class="img-responsive" style="width:100%;" alt="itutors" />
               <h4><b> &nbsp; <?php echo $value->institute_type_name; ?></b></h4>
               <p> &nbsp; 15 tutors</p>
            </div> 
          </div>
     <?php           }
          } 
          ?>
          <!-- 2 -->
            <div class="col-sm-3">
            <div class="" style="border:1px solid #ccc">
               <img src="<?php echo base_url();?>assets/images/category/19.png" class="img-responsive" style="width:100%;" alt="itutors" />
               <h4><b> &nbsp; Abacus classes</b></h4>
               <p> &nbsp; 15 tutors</p>
            </div> 
          </div>
          <!-- 2end -->
          <!-- 3 -->
            <div class="col-sm-3">
            <div class="" style="border:1px solid #ccc">
               <img src="<?php echo base_url();?>assets/images/category/20.png" class="img-responsive" style="width:100%;" alt="itutors" />
               <h4><b> &nbsp; Vedic maths</b></h4>
               <p> &nbsp; 15 tutors</p>
            </div> 
          </div>
          <!-- 4 start -->
            <div class="col-sm-3">
            <div class="" style="border:1px solid #ccc">
               <img src="<?php echo base_url();?>assets/images/category/21.jpg" class="img-responsive" style="width:100%;" alt="itutors" />
               <h4><b> &nbsp; Arts &amp; crafts</b></h4>
               <p> &nbsp; 15 tutors</p>
            </div> 
          </div>
          <!-- 4 end -->
          <div class="clearfix">&nbsp;</div>
             <!-- 5 start -->
            <div class="col-sm-3">
            <div class="" style="border:1px solid #ccc">
               <img src="<?php echo base_url();?>assets/images/category/5.jpg" class="img-responsive" style="width:100%;" alt="itutors" />
               <h4><b> &nbsp; Computing &amp; Robotics</b></h4>
               <p> &nbsp; 15 tutors</p>
            </div> 
          </div>
          <!-- 5 end -->
                  <!-- 6 start -->
            <div class="col-sm-3">
            <div class="" style="border:1px solid #ccc">
               <img src="<?php echo base_url();?>assets/images/category/6.jpg" class="img-responsive" style="width:100%;" alt="itutors" />
               <h4><b> &nbsp; Cooking &amp; baking</b></h4>
               <p> &nbsp; 15 tutors</p>
            </div> 
          </div>
          <!-- 6 end -->
                  <!-- 7 start -->
            <div class="col-sm-3">
            <div class="" style="border:1px solid #ccc">
               <img src="<?php echo base_url();?>assets/images/category/1.jpg" class="img-responsive" style="width:100%;" alt="itutors" />
               <h4><b> &nbsp; Dance</b></h4>
               <p> &nbsp; 15 tutors</p>
            </div> 
          </div>
          <!-- 7 end -->
                  <!-- 8 start -->
            <div class="col-sm-3">
            <div class="" style="border:1px solid #ccc">
               <img src="<?php echo base_url();?>assets/images/category/8.jpg" class="img-responsive" style="width:100%;" alt="itutors" />
               <h4><b> &nbsp; Fitness &amp; yoga</b></h4>
               <p> &nbsp; 15 tutors</p>
            </div> 
          </div>
          <!-- 8 end -->
                <div class="clearfix">&nbsp;</div>
                  <!-- 9 start -->
            <div class="col-sm-3">
            <div class="" style="border:1px solid #ccc">
               <img src="<?php echo base_url();?>assets/images/category/9.jpg" class="img-responsive" style="width:100%;" alt="itutors" />
               <h4><b> &nbsp; Fun &amp; places</b></h4>
               <p> &nbsp; 15 tutors</p>
            </div> 
          </div>
          <!-- 9 end -->
                  <!-- 10 start -->
            <div class="col-sm-3">
            <div class="" style="border:1px solid #ccc">
               <img src="<?php echo base_url();?>assets/images/category/10.jpg" class="img-responsive" style="width:100%;" alt="itutors" />
               <h4><b> &nbsp; Handwriting &amp; calligraphy</b></h4>
               <p> &nbsp; 15 tutors</p>
            </div> 
          </div>
          <!-- 10 end -->
                  <!-- 11 start -->
            <div class="col-sm-3">
            <div class="" style="border:1px solid #ccc">
               <img src="<?php echo base_url();?>assets/images/category/11.jpg" class="img-responsive" style="width:100%;" alt="itutors" />
               <h4><b> &nbsp; Library</b></h4>
               <p> &nbsp; 15 tutors</p>
            </div> 
          </div>
          <!-- 11 end -->
                  <!-- 12 start -->
            <div class="col-sm-3">
            <div class="" style="border:1px solid #ccc">
               <img src="<?php echo base_url();?>assets/images/category/3.jpg" class="img-responsive" style="width:100%;" alt="itutors" />
               <h4><b> &nbsp; Music</b></h4>
               <p> &nbsp; 15 tutors</p>
            </div> 
          </div>
          <!-- 12 end -->
                <div class="clearfix">&nbsp;</div>
                  <!-- 13 start -->
            <div class="col-sm-3">
            <div class="" style="border:1px solid #ccc">
               <img src="<?php echo base_url();?>assets/images/category/13.jpg" class="img-responsive" style="width:100%;" alt="itutors" />
               <h4><b> &nbsp; Photography</b></h4>
               <p> &nbsp; 15 tutors</p>
            </div> 
          </div>
          <!-- 13 end -->
                  <!-- 14 start -->
            <div class="col-sm-3">
            <div class="" style="border:1px solid #ccc">
               <img src="<?php echo base_url();?>assets/images/category/14.jpg" class="img-responsive" style="width:100%;" alt="itutors" />
               <h4><b> &nbsp; Sports &amp; Games</b></h4>
               <p> &nbsp; 15 tutors</p>
            </div> 
          </div>
          <!-- 14 end -->
                  <!-- 15 start -->
            <div class="col-sm-3">
            <div class="" style="border:1px solid #ccc">
               <img src="<?php echo base_url();?>assets/images/category/16.jpg" class="img-responsive" style="width:100%;" alt="itutors" />
               <h4><b> &nbsp; Play schools Baby cares</b></h4>
               <p> &nbsp; 15 tutors</p>
            </div> 
          </div>
          <!-- 15 end -->
                  <!-- 16 start -->
            <div class="col-sm-3">
            <div class="" style="border:1px solid #ccc">
               <img src="<?php echo base_url();?>assets/images/category/15.jpg" class="img-responsive" style="width:100%;" alt="itutors" />
               <h4><b> &nbsp; Swimming clubs</b></h4>
               <p> &nbsp; 15 tutors</p>
            </div> 
          </div>
          <!-- 16 end -->
                <div class="clearfix">&nbsp;</div>
                  <!-- 17 start -->
            <div class="col-sm-3">
            <div class="" style="border:1px solid #ccc">
               <img src="<?php echo base_url();?>assets/images/category/17.jpg" class="img-responsive" style="width:100%;" alt="itutors" />
               <h4><b> &nbsp; Driving schools</b></h4>
               <p> &nbsp; 15 tutors</p>
            </div> 
          </div>
          <!-- 17 end -->
                  <!-- 18 start -->
            <div class="col-sm-3">
            <div class="" style="border:1px solid #ccc">
               <img src="<?php echo base_url();?>assets/images/category/18.jpg" class="img-responsive" style="width:100%;" alt="itutors" />
               <h4><b> &nbsp; Others</b></h4>
               <p> &nbsp; 15 tutors</p>
            </div> 
          </div>
          <!-- 18 end -->
         
          </div>
           <?php echo $this->pagination->create_links(); ?>
<div class="clearfix">&nbsp;</div>       
      </div>
      </section>
     
  <!--section signup end-->
      <?php $this->load->view('includes/modal'); ?>
 <div class="clearfix"></div>
 <?php $this->load->view('includes/footer'); ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo MYJS_PATH;?>jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo MYJS_PATH;?>/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo MYJS_PATH;?>/menu.js"></script>
    <script type="text/javascript" src="<?php echo MYJS_PATH;?>/validator.js"></script>

  </body>
</html>
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