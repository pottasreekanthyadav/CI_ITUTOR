 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 	<title> Home Tuitions | Home Tutors Providers in hyderabad</title>
 	<meta name= "Description" content=" its my tutor is Provide Home Tuitions in Hyderabad with qualified Home Tutors for individual and focused classes at your door step in Gachibowli, Kondapur, Madhapur, Manikonda, home tutor Srinagar Colony, Hitech city, Banjarahills, Jubilee Hills, home tuition in Begumpet, Khairatabad,Towli choki, Sanath Nagar, Mehdipatnam ,BHEL , ameerpet, Sr Nagar, Erragadda, Telangana "/>
 	<meta name= "Keyword" Content= "Home Tuitions in Hyderabad , Home Tutors in Gachibowli, Kondapur, Madhapur, Manikonda, home tutor Srinagar Colony, Hitech city, Banjarahills, Jubilee Hills, home tuition in Begumpet, Khairatabad, Towli choki, Sanath Nagar, Mehdipatnam ,BHEL , ameerpet, Sr Nagar, Erragadda, Telangana "/>
 	<meta name="author" content=" Its My Tutor "/>
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
 	<link rel="canonical" href="<?php echo base_url(); ?>" />
 	<!-- Bootstrap -->
 	<link href="<?php echo MYCSS_PATH;?>bootstrap.min.css" type="text/css" rel="stylesheet"  />
 	<link rel="shortcut icon" href="<?php  echo MYIMAGES_PATH;?>favicon.png" size="32*32">
 	<!--custom css-->
 	<link href="<?php echo MYCSS_PATH;?>custom.css" type="text/css" rel="stylesheet"  />
 	<!--menu-->
 	<link href="<?php echo MYCSS_PATH;?>menu.css" type="text/css" rel="stylesheet"  />
 	<!-- Icomoon Icon Fonts-->
 	<link rel="stylesheet" href="<?php echo MYCSS_PATH;?>icomoon.css">
 	<link href="<?php echo MYCSS_PATH;?>font-awesome.min.css" rel="stylesheet" />
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
 	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
 	<style>
 	.panel-heading .accordion-toggle:after {
 		/* symbol for "opening" panels */
 		font-family: 'Glyphicons Halflings';  /* essential for enabling glyphicon */
 		content: "\e114";    /* adjust as needed, taken from bootstrap.css */
 		float: right;        /* adjust as needed */
 		color: grey;         /* adjust as needed */
 	}
 	.panel-heading .accordion-toggle.collapsed:after {
 		/* symbol for "collapsed" panels */
 		content: "\e080";    /* adjust as needed, taken from bootstrap.css */
 	}

 </style>
</head>
<body class="rentbg">
	<header>
		<?php $this->load->view('rentabook/includes/header_new');?>
		<!-- menu end -->
	</header>
	<div class="clearfix"></div>
	<!-- books section start-->
	<section>
		<div class="container-fluid">
			<div class="container no-padd" style="padding-left:15px !important">
				<div class="col-sm-12 bg-wh bookarent">
					<div class="col-sm-3"> 
						<h4 class="tl-site"><b> Filter By </b></h4>
						<div style="border-bottom:1px solid #ddd"></div>
					<form method="post" action="<?php echo base_url().'books/search';?>">
						<div class="panel-group" id="accordion">
							<!-- <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
											New Arrivals
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
									<div class="panel-body">
										<div class="checkbox">
											<label><input type="checkbox" value="">Last 30 days</label>
										</div>
										<div class="checkbox">
											<label><input type="checkbox" value="">Last 60 days</label>
										</div>
										<div class="checkbox">
											<label><input type="checkbox" value="">Last 90 days</label>
										</div>
									</div>
								</div>
							</div> -->
							<?php if(!empty($author)){ ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											Author
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="panel-body">
										<?php foreach ($author as $arow) {
										 ?>
										<div class="checkbox">
											<label>
												<input name="bookAuthor[]" type="checkbox" value="<?php echo $arow->author; ?>">
												<?php echo ucwords(strtolower($arow->author)) ?>
											</label>
										</div>
									<?php } ?>
									</div>
								</div>
							</div>
						<?php } ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											Format
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="checkbox">
											<label><input type="checkbox" value="">Paper Back</label>
										</div>
										<div class="checkbox">
											<label><input type="checkbox" value="">Binded</label>
										</div>
									</div>
								</div>
							</div> 
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
											Price 
										</a>
									</h4>
								</div>
								<div id="collapseFour" class="panel-collapse collapse">
									<div class="panel-body">
										<?php echo $maxPrice->price;
										 ?>
										<div class="checkbox">
											<label>
											<input type="checkbox" value="">upto 100</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" value="">100 - 500</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" value="">500 - 1000</label>
										</div>
										<div class="checkbox">
											<label>
											<input type="checkbox" value="">above 1000</label>
										</div>
										
									</div>
								</div>
							</div>
							<?php if(!empty($language)){ ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
											Languages
										</a>
									</h4>
								</div>
								<div id="collapseFive" class="panel-collapse collapse">
									<div class="panel-body">
										<?php 
											foreach ($language as $lrow) {
										 ?>
										<div class="checkbox" >
											<label><input name="language[]" onclick="this.form.submit()" type="checkbox" value="<?php echo $lrow->language; ?>"><?php echo ucfirst(strtolower($lrow->language)); ?></label>
										</div>
									<?php } ?>
									</div>
								</div>
							</div>
						<?php } ?>
						</div>
					</form>
					</div>
					<div class="col-sm-9 no-padd"> 
						<div class="col-sm-12"></div>
						<?php if(isset($count)){ ?>
						<div class="col-sm-5"><h4 class="m-b-18"> <b><?php if($count == 1){echo $count." Book";}elseif($count>1){echo $count." Books";}elseif($count == 0){echo "No Book";} ?> found...</b></h4>
						</div>
					<?php } ?>
						<div class="col-sm-2 col-sm-offset-5">
							<form method="post" action="<?php echo base_url().'books/search' ?>">
								<select id="sortby" onchange="this.form.submit()" class="form-control no-bod-rad" style="margin-top: 4px;" name="sort">
									 <option value="">Sort by</option>
									<option value="asc" <?php echo  set_select('sort', 'asc'); ?>>Low-High</option>
									<option value="desc" <?php echo  set_select('sort', 'desc'); ?>>High-Low</option>
								</select>
							</form>
						</div>
						<div class="clearfix">&nbsp;</div>
						<?php foreach($search as $srow){?>
							<div class="col-sm-3">

								<div class="bookhead text-center">
									<i class="fa fa-rupee pull-left" style="margin-left: 10px; font-size: 15px"> <?php echo $srow->selling_price ?></i>
									<?php //echo $srow->wb_id; 
									$uid = $this->session->userdata('user_id');
									if((!is_null($srow->wb_id)) && ($srow->user_id == $uid)) {
										?>
										<li style="list-style-type: none" class="wishlist" value="<?php echo $srow->book_id;?>">
										<i class='fa fa-heart tl-site'></i>
									</li>
									<?php
									}
									else{
										?>
										<li style="list-style-type: none" class="wishlist" value="<?php echo $srow->book_id;?>" >
										<i class='fa fa-heart-o tl-site'></i>
									    </li>
									<?php
									}
									?>

									<!-- <i class="fa fa-heart-o tl-site"></i> -->
									<a href="<?php echo base_url();?>book/book_description/<?php echo str_replace('?','',$srow->title);?>/<?php echo base64_encode($srow->book_id);?>">  
										<img src="<?php  echo ALL_IMAGE_PATH;?><?php echo $srow->image;?>" alt="book" class="m-t-15"></a>
										<p class="m-t-10 m-b-0"><b><?php echo ucwords(strtolower(strlen($srow->title)>17?substr($srow->title,0,17).'...':$srow->title));?></b></p>
										<!-- <p class="m-t-10 m-b-0"><b class='fa fa-rupee'> <?php //echo $srow->selling_price ?></b></p> -->
										<a href="<?php echo base_url();?>book/book_description/<?php echo str_replace('?','',$srow->title);?>/<?php echo base64_encode($srow->book_id);?>">  
											<button type="button" class="btn btn-outline no-bod-rad btn-sm"> BUY NOW</button></a>
										</div>
									</div>
								<?php }?>

							</div>  
						</div>
					</div>
				</div>
			</section>
			<div class="text-center">
				<td colspan="4" > <p class="pages"><?php if(isset($links)){echo $links;} ?></p></td>
			</div>
			<!-- books section end-->
			<!--footer strart end-->
			<footer>
				<?php $this->load->view('rentabook/includes/footer');?>
			</footer>
			<!--footer strart end-->
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="<?php echo MYJS_PATH;?>jquery.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="<?php echo MYJS_PATH;?>bootstrap.min.js"></script>
			<script type="text/javascript" src="<?php echo MYJS_PATH;?>menu.js"></script>
			<script type="text/javascript">
				function navigate_now(){
					location.href="<?php base_url();?>registration/signup_load";
				}
			</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.wishlist').on('click',function(){
		if($(this).find("i").attr('class') == "fa fa-heart tl-site"){
			$(this).find("i").removeClass();
			$(this).find("i").addClass("fa fa-heart-o tl-site");	
		}
		else{
			$(this).find("i").removeClass();
			$(this).find("i").addClass("fa fa-heart tl-site");		
		}
		var book_id=$(this).val();
		if(book_id)
		{
             $.ajax({
             	method:"POST",
             	url:"<?php echo base_url();?>rentabook/frontend/addRemoveWishlist",
             	data:{b_id:book_id}
             });
		}
	});
});
</script> 

<!-- <script>
$(document).ready(function(){

 function load_country_data(page)
 {
  $.ajax({
   url:"<?php //echo base_url(); ?>frontend/search/"+page,
   method:"GET",
   dataType:"json",
   success:function(data)
   {
    $('#country_table').html(data.country_table);
    $('#pagination_link').html(data.pagination_link);
   }
  });
 }
 
 load_country_data(1);

 $(document).on("click", ".pagination li a", function(event){
  event.preventDefault();
  var page = $(this).data("ci-pagination-page");
  load_country_data(page);
 });

});
</script> -->
</body>
</html>
