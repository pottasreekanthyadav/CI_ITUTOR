<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo TITLE_PATH;?></title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"  />
<!--custom css-->
  <link href="css/custom.css" type="text/css" rel="stylesheet"  />
 <!--menu-->
  <link href="css/menu.css" type="text/css" rel="stylesheet"  />
   <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="inner-bg">
   <?php $this->load->view("includes/header.php"); ?>
   <div class="clearfix"></div>
   <section class="breadgram">
     <div class="container">
       <div class="col-md-12">
         <ul class="list-inline">
           <li><a href="#">Home</a></li>
           <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
           <li>Filter</li>
         </ul>
       </div>
     </div>
   </section>
   <section>
       <div class="col-md-12 signbread">
           <div class="col-md-12 signbread-main">
               <div class="container">
               <div class="col-md-12 no-pad">
               <div class="col-md-8 no-pad">
                   <h4>Find Tutors&nbsp;&amp;&nbsp;Trainers in Hyderabad</h4>
                   <h5>Lorem Ipsum is simply dummy text of the printing and typesetting</h5>
                   </div>
                   <div class="col-md-4 pull-right text-right"><a href="#" class="btn btn-warning">Post Your Requirement</a></div>
               </div>
              </div>
           </div>          
           <div class="clearfix"></div>
            <div class="container">
            <div class="col-md-12 no-pad">
              <ul class="list-inline">
                <li class="col-md-3"><h3 class="text-uppercase">Filter</h3></li>
                <li class="col-md-5"><h3 class="text-uppercase">231 Tutors found</h3></li>
                 <li class="col-md-4">
                   <div class="col-md-12 search">
                     <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for a Tutors" />
                <span class="input-group-addon"><button><i class="fa fa-search" aria-hidden="true"></i></button></span>
               </div>
                   </div>
                 </li>
              </ul>
            </div>
           </div>
            <div class="clearfix">&nbsp;</div>
      </section>
  <!--section filter start-->
      <section class="filter">
        <div class="container">
          <div class="col-md-12 no-pad">
            <div class="col-md-3 no-pad">
              <div class="col-md-12 filter-left"><!--filter left start-->
              <form>
                  <div class="form-group">
                  <label for="inputEmail">City/Location</label>
                    <input type="text" class="form-control" placeholder="City/Location" />
                  <p></p>
              </div>
              <div class="form-group">
                  <label for="inputEmail">Categories</label>
                  <select class="form-control">
                    <option>Class</option>
                    <option>LKG to 5th Class</option>
                    <option>6th to 10th Class</option>
                    <option>XI to XII Class</option>
                  </select>
                  <p></p>
              </div>
              <div class="form-group">
                  <label for="inputEmail">Syllabus</label>
                  <select class="form-control">
                    <option>CBSE</option>
                    <option>ICSE</option>
                    <option>State Syllabus</option>
                   </select>
                  <p></p>
              </div>
              <div class="form-group">
                  <label for="inputEmail">Tutor Type</label>
                  <select class="form-control">
                    <option>Male</option>
                    <option>Female</option>
                   </select>
                  <p></p>
              </div>
              <div class="form-group">
                  <label for="inputEmail">Qualification</label>
                  <select class="form-control">
                    <option>B.Tech, M.Tech, MAC, MSC</option>
                    <option>BED</option>
                    <option>Degree</option>
                   
                  </select>
                  <p></p>
              </div>
              <div class="clearfix"></div>
                <ul class="list-inline">
                  <li class="col-md-6">
                    <input type="submit" class="btn btn-sm col-md-8" value="Filter" />
                  </li>
                  <li class="col-md-6 text-right">
                    <input type="reset" class="btn btn-sm pull-right col-md-8" value="Reset" />
                  </li>
                </ul>
              </form>
              <div class="clearfix">&nbsp;</div>
              <div class="col-md-12 ned-hlp"><!--ned-hlp start-->
                  <h4>Need Help&nbsp;?</h4>
                  <div class="clearfix"></div>
                  <p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;info@itutors.com</p>
                  <p><i class="fa fa-commenting-o" aria-hidden="true"></i>&nbsp;&nbsp;+91 9876543210</p>
                  <p><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;&nbsp;123594383905</p>
              </div><!--ned-hlp end-->
              <div class="col-md-12 ned-hlp"><!--ned-hlp start-->
                  <h4>Find a Greate Teacher</h4>
                  <div class="clearfix"></div>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has </p>
                 <div class="text-center">
                   <a href="#" class="btn btn-default">Request Now</a>
                 </div>
              </div><!--ned-hlp end-->
              <div class="col-md-12 ned-hlp"><!--ned-hlp start-->
                  <h4>Ask a Study Qustion</h4>
                  <div class="clearfix"></div>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has </p>
                 <div class="text-center">
                   <a href="#" class="btn btn-default">Ask Now</a>
                 </div>
              </div><!--ned-hlp end-->
              <div class="clearfix"></div>
              </div><!--filter left end-->
              <div class="clearfix"></div>
            </div>
            <div class="col-md-9 no-pad">
              <div class="col-md-12 filter-right"><!--filter right start-->
                      <div class="col-md-6"><!--tutodiv start-->
                           
                        <div class="col-md-12 filter-right-main">
                        <div class="col-md-12 filter-right-main-head">
                            <div class="col-md-6 no-pad">
                                <ul class="list-inline">
                                <li class="col-md-5"><img src="images/man.jpg" alt="itutors"></li>
                                <li><h3>S C Mouli</h3>
                                    <p>ITU01211</p>
                                </li>
                                </ul>
                            </div>
                            <div class="col-md-6 filter-right-main-head-left">
                                <ul>
                                  <li><a href="#" data-toggle="tooltip" title="Location"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="Rating"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="Mobile"><i class="fa fa-mobile" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="Email"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            </div><!--fliter head end-->
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                              <p>Male, 27 Year's</p>
                              <p>Experience&nbsp;:&nbsp;7&nbsp;yrs</p>
                              <p>Qualification&nbsp;:&nbsp;B.Tech(CSE)</p>
                              <p>Teaches&nbsp;:&nbsp;<span>All subjects, mathmatics, physics, engineering mathmatics, JEE, spoken english</span></p>
                              <p>Area&nbsp;:&nbsp;Ameerpet&nbsp;|&nbsp;Krishna Nagar&nbsp;</p>
                              <div class="clearfix"></div>
                              <ul class="list-inline">
                                <li class="col-md-6"><a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>&nbsp;Send Enquiry</a></li>
                                <li class="col-md-6"><a href="#" class="btn btn-default">Contact Tutor</a></li>
                                <div class="clearfix"></div>
                              </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                      </div><!--tutodiv end-->
                      <div class="col-md-6"><!--tutodiv start-->
                           
                        <div class="col-md-12 filter-right-main">
                        <div class="col-md-12 filter-right-main-head">
                            <div class="col-md-6 no-pad">
                                <ul class="list-inline">
                                <li class="col-md-5"><img src="images/man.jpg" alt="itutors"></li>
                                <li><h3>S C Mouli</h3>
                                    <p>ITU01211</p>
                                </li>
                                </ul>
                            </div>
                            <div class="col-md-6 filter-right-main-head-left">
                                <ul>
                                  <li><a href="#" data-toggle="tooltip" title="Location"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="Rating"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="Mobile"><i class="fa fa-mobile" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="Email"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            </div><!--fliter head end-->
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                              <p>Male, 27 Year's</p>
                              <p>Experience&nbsp;:&nbsp;7&nbsp;yrs</p>
                              <p>Qualification&nbsp;:&nbsp;B.Tech(CSE)</p>
                              <p>Teaches&nbsp;:&nbsp;<span>All subjects, mathmatics, physics, engineering mathmatics, JEE, spoken english</span></p>
                              <p>Area&nbsp;:&nbsp;Ameerpet&nbsp;|&nbsp;Krishna Nagar&nbsp;</p>
                              <div class="clearfix"></div>
                              <ul class="list-inline">
                                <li class="col-md-6"><a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>&nbsp;Send Enquiry</a></li>
                                <li class="col-md-6"><a href="#" class="btn btn-default">Contact Tutor</a></li>
                                <div class="clearfix"></div>
                              </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                      </div><!--tutodiv end-->
                      <div class="col-md-6"><!--tutodiv start-->
                           
                        <div class="col-md-12 filter-right-main">
                        <div class="col-md-12 filter-right-main-head">
                            <div class="col-md-6 no-pad">
                                <ul class="list-inline">
                                <li class="col-md-5"><img src="images/man.jpg" alt="itutors"></li>
                                <li><h3>S C Mouli</h3>
                                    <p>ITU01211</p>
                                </li>
                                </ul>
                            </div>
                            <div class="col-md-6 filter-right-main-head-left">
                                <ul>
                                  <li><a href="#" data-toggle="tooltip" title="Location"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="Rating"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="Mobile"><i class="fa fa-mobile" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="Email"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            </div><!--fliter head end-->
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                              <p>Male, 27 Year's</p>
                              <p>Experience&nbsp;:&nbsp;7&nbsp;yrs</p>
                              <p>Qualification&nbsp;:&nbsp;B.Tech(CSE)</p>
                              <p>Teaches&nbsp;:&nbsp;<span>All subjects, mathmatics, physics, engineering mathmatics, JEE, spoken english</span></p>
                              <p>Area&nbsp;:&nbsp;Ameerpet&nbsp;|&nbsp;Krishna Nagar&nbsp;</p>
                              <div class="clearfix"></div>
                              <ul class="list-inline">
                                <li class="col-md-6"><a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>&nbsp;Send Enquiry</a></li>
                                <li class="col-md-6"><a href="#" class="btn btn-default">Contact Tutor</a></li>
                                <div class="clearfix"></div>
                              </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                      </div><!--tutodiv end-->
                      <div class="col-md-6"><!--tutodiv start-->
                           
                        <div class="col-md-12 filter-right-main">
                        <div class="col-md-12 filter-right-main-head">
                            <div class="col-md-6 no-pad">
                                <ul class="list-inline">
                                <li class="col-md-5"><img src="images/man.jpg" alt="itutors"></li>
                                <li><h3>S C Mouli</h3>
                                    <p>ITU01211</p>
                                </li>
                                </ul>
                            </div>
                            <div class="col-md-6 filter-right-main-head-left">
                                <ul>
                                  <li><a href="#" data-toggle="tooltip" title="Location"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="Rating"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="Mobile"><i class="fa fa-mobile" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="Email"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            </div><!--fliter head end-->
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                              <p>Male, 27 Year's</p>
                              <p>Experience&nbsp;:&nbsp;7&nbsp;yrs</p>
                              <p>Qualification&nbsp;:&nbsp;B.Tech(CSE)</p>
                              <p>Teaches&nbsp;:&nbsp;<span>All subjects, mathmatics, physics, engineering mathmatics, JEE, spoken english</span></p>
                              <p>Area&nbsp;:&nbsp;Ameerpet&nbsp;|&nbsp;Krishna Nagar&nbsp;</p>
                              <div class="clearfix"></div>
                              <ul class="list-inline">
                                <li class="col-md-6"><a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>&nbsp;Send Enquiry</a></li>
                                <li class="col-md-6"><a href="#" class="btn btn-default">Contact Tutor</a></li>
                                <div class="clearfix"></div>
                              </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                      </div><!--tutodiv end-->
                      <div class="col-md-6"><!--tutodiv start-->
                           
                        <div class="col-md-12 filter-right-main">
                        <div class="col-md-12 filter-right-main-head">
                            <div class="col-md-6 no-pad">
                                <ul class="list-inline">
                                <li class="col-md-5"><img src="images/man.jpg" alt="itutors"></li>
                                <li><h3>S C Mouli</h3>
                                    <p>ITU01211</p>
                                </li>
                                </ul>
                            </div>
                            <div class="col-md-6 filter-right-main-head-left">
                                <ul>
                                  <li><a href="#" data-toggle="tooltip" title="Location"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="Rating"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="Mobile"><i class="fa fa-mobile" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="Email"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            </div><!--fliter head end-->
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                              <p>Male, 27 Year's</p>
                              <p>Experience&nbsp;:&nbsp;7&nbsp;yrs</p>
                              <p>Qualification&nbsp;:&nbsp;B.Tech(CSE)</p>
                              <p>Teaches&nbsp;:&nbsp;<span>All subjects, mathmatics, physics, engineering mathmatics, JEE, spoken english</span></p>
                              <p>Area&nbsp;:&nbsp;Ameerpet&nbsp;|&nbsp;Krishna Nagar&nbsp;</p>
                              <div class="clearfix"></div>
                              <ul class="list-inline">
                                <li class="col-md-6"><a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>&nbsp;Send Enquiry</a></li>
                                <li class="col-md-6"><a href="#" class="btn btn-default">Contact Tutor</a></li>
                                <div class="clearfix"></div>
                              </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                      </div><!--tutodiv end-->
                      <div class="col-md-6"><!--tutodiv start-->
                           
                        <div class="col-md-12 filter-right-main">
                        <div class="col-md-12 filter-right-main-head">
                            <div class="col-md-6 no-pad">
                                <ul class="list-inline">
                                <li class="col-md-5"><img src="images/man.jpg" alt="itutors"></li>
                                <li><h3>S C Mouli</h3>
                                    <p>ITU01211</p>
                                </li>
                                </ul>
                            </div>
                            <div class="col-md-6 filter-right-main-head-left">
                                <ul>
                                  <li><a href="#" data-toggle="tooltip" title="Location"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="Rating"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="Mobile"><i class="fa fa-mobile" aria-hidden="true"></i></a></li>
                                  <li><a href="#" data-toggle="tooltip" title="Email"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            </div><!--fliter head end-->
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                              <p>Male, 27 Year's</p>
                              <p>Experience&nbsp;:&nbsp;7&nbsp;yrs</p>
                              <p>Qualification&nbsp;:&nbsp;B.Tech(CSE)</p>
                              <p>Teaches&nbsp;:&nbsp;<span>All subjects, mathmatics, physics, engineering mathmatics, JEE, spoken english</span></p>
                              <p>Area&nbsp;:&nbsp;Ameerpet&nbsp;|&nbsp;Krishna Nagar&nbsp;</p>
                              <div class="clearfix"></div>
                              <ul class="list-inline">
                                <li class="col-md-6"><a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i>&nbsp;Send Enquiry</a></li>
                                <li class="col-md-6"><a href="#" class="btn btn-default">Contact Tutor</a></li>
                                <div class="clearfix"></div>
                              </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                      </div><!--tutodiv end-->

                <div class="clearfix"></div>
              </div><!--filter right end-->
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
      </section>
  <!--section filter end-->
 <div class="clearfix"></div>
 <?php include'footer.php' ?>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip({
              placement : 'top'
          });
      });
</script>
  </body>
</html>