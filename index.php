<?php
session_start();
require 'dbconfig.php/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Plan ur trip</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tourism web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Coda:400,800&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body> 
<div class="main-agile">
	<!-- banner -->
	<div id="home" class="w3ls-banner"> 
		<!-- banner-text -->
		<div class="w3layouts-banner-top">
			<div class="container">
				<div class="agileits-banner-info">
					<div class="rw-wrapper">
				<div class="rw-sentence">
					
					
				</div>
			</div>
				</div>	
				<div class="sap_tabs">	
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						<ul class="resp-tabs-list">
							<li class="resp-tab-item grid1"><span><i class="glyphicon glyphicon-home" aria-hidden="true"></i>Hotels</span></li>
							<li class="resp-tab-item grid2"><span><i class="glyphicon glyphicon-plane" aria-hidden="true"></i>Flights</span></li>
						</ul>				  	 
						<div class="resp-tabs-container">
							<div class="tab-1 resp-tab-content">
								<div class="facts">
									<form method="post" action="index.php" >
										<div class="reservation">
											<ul>		
												<li  class="span1_of_1 desti">
													 <div class="book_date">
															
															
															 <select name="destcountry" class="typeahead1 input-md form-control tt-input" / required="">
  <option value="ROME">ROME,ITALY</option>
  <option value="SYDNEY">SYDNEY,AUSTRALIA</option>
  <option value="PORTO">PORTO,PORTUGAL</option>
  <option value="LONDON">LONDON,ENGLAND</option>
  <option value="PARIS">PARIS,FRANCE</option>
  <option value="NEWYORK">NEWYORK,USA</option>
  <option value="PRAGUE">PRAGUE,CZECH REPUBLIC</option>
  <option value="BARCELONA">BARCELONA,SPAIN</option>
  <option value="DUBAI">DUBAI,UAE</option>
  <option value="SANTORINI">SANTORINI,GREECE</option>
  <option value="BALI">BALI,INDONESIA</option>


        </select>
														
													 </div>					
												 </li>
											</ul>
										</div>
										<div class="reservation">
											<ul>	
												 <li  class="span1_of_1">
													 <h5>Check In</h5>
													 <div class="book_date">
													<div class="book_date">
															<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
															<input  id="datepicker" name="date" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}">
														 
													</div>	
													 </div>		
												 </li>
												 <li  class="span1_of_1 ">
													 <h5>Check Out</h5>
													 <div class="book_date">
													 <div class="book_date">
															<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
															<input  id="datepicker" name="date" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}">
														</div>
													 </div>					
												 </li>
											</ul>
										</div>
										<div class="reservation w3l-submit">
											<ul>	
												 <li class="span1_of_3">
														<div class="date_btn">
																<button type="submit" name="Destsubmit" class="submit">Submit</button>
														</div>
												 </li>
											</ul>
										</div>
		</form>
								<div class="clearfix"></div>
								</div>
							</div>
							<div class="tab-1 resp-tab-content">
								<div class="facts">
									<form action="#" method="post">
										<div class="flights">
											<div class="reservation">
												<ul>		
													<li  class="span1_of_1 desti1">
														 <div class="book_date">
															
																<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																<input type="text" placeholder="From" class="typeahead1 input-md form-control tt-input" required="">
															
														 </div>					
													 </li>
													 <li  class="span1_of_1 desti1">
														 <div class="book_date">
														
																<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																<input type="text" placeholder="To" class="typeahead1 input-md form-control tt-input" required="">
															
														 </div>					
													 </li>
												</ul>
											</div>
											<div class="reservation">
												<ul>	
													 <li  class="span1_of_1">
														 <h5>Departure</h5>
														 <div class="book_date">
														
															<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
															<input  id="datepicker" name="date" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
														
														 </div>		
													 </li>
													 <li  class="span1_of_1 left">
														 <h5>Return</h5>
														 <div class="book_date">
														
															<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
															<input  id="datepicker" name="date" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
													
														 </div>					
													 </li>
												</ul>
											</div>
											<div class="reservation w3l-submit">
												<ul>	
													 <li class="span1_of_3">
															<div class="date_btn">
															
																	<input type="submit" value="Search Flights" />
															
															</div>
													 </li>
												</ul>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>			
</div>
<!-- //banner-text -->
<!-- //banner --> 
<!-- header -->
<div class="header-w3layouts"> 
	<!-- Navigation -->
	<nav class="navbar navbar-default">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Tourism</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div> 
		
		<div class="collapse navbar-collapse navbar-ex1-collapse">
		<img src="images\plan_your_trip_header_title.png" style="width:250px;height:200px;margin-right:-20%">
			<ul class="nav navbar-nav navbar-right">
				<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
				<li class="active"><a href="index.php">Home</a></li>
				<li><a class="" href="services.html">Services</a></li>
				<li><a class="" href="gallery.html">Gallery</a></li>
				<li><a class="" href="sponsors.html">Sponsors</a></li>
				<li><a class="" href="contact.html">Contact Us</a></li>
			</ul>
			<div class="w3ls-social-icons-2">
				<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
				<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
				<a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>
				<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
				<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
			</div>
		</div>
		<!-- //navbar-collapse -->
	</nav>  
	<div class="clearfix"> </div>
</div>	
<!-- //header -->
<!-- welcome -->
<div class="about w3layouts-agileinfo">
	<div class="container">
		<div class="about-top w3ls-agile">
			<div class="col-md-6 red-w3l">
				<img class="img-responsive" src="images/g7.jpg" style="width:500px;height:340px">
				<img class="img-responsive" src="images/g1.jpg" style="width:500px;height:340px">
				<div class="position-w3l"></div>
			</div>
			<div class="col-md-6 come">
				<div class="about-wel">
					<h5>Planning for a trip?</h5>
					<p>You need to start somewhere.This is going to be a very individual step to each person and trip. For some trips you might want a few days just to lie on the beach, while for other trips you might want to see as many different places as you can, without really needing to see anything in depth.
					You should have a list of places with a number of nights and a list of possible activities in each place. If you have multiple cities on the itinerary, you should have some notes on how you get from one to the next. You probably should have some idea on costs for hotels and transport.So....</p>
				</div>
				<div class="steps-wel">
					<h5>Just Follow Us For Easy Steps</h5>
					<div class="col-md-3 col-sm-3 col-xs-3 w3ls_banner_bottom_grids first-posi-w3l">
						<div class="w3l_banner_bottom_grid1">
							<i class="fa fa-phone hvr-pulse-shrink" aria-hidden="true"></i>
						</div>
						<div class="w3l_banner_bottom_grid1">
							<i class="fa fa-users hvr-pulse-shrink" aria-hidden="true"></i>
						</div>
						<div class="w3l_banner_bottom_grid1">
							<i class="fa fa-map-marker hvr-pulse-shrink" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2 w3ls_banner_bottom_grids">
						<h6>01</h6>
						<h6>02</h6>
						<h6>03</h6>
					</div>
					<div class="col-md-7 col-sm-7 col-xs-7 w3ls_banner_bottom_grids">
						<p>+8 974 020 852.</p>
						<p>planyourtrip@gmail.com.</p>
						<p>Room No.007 Mathura Block,Amrita University.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //welcome -->
<!-- stats -->
<div class="stats">
	<div class="container">
		<div class="stats-info">
			<div class="col-md-3 col-sm-3 stats-grid slideanim">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='5' data-delay='.5' data-increment="1">5</div>
				<h4 class="stats-info">CUSTOMERS</h4>
			</div>
			<div class="col-md-3 col-sm-3 stats-grid slideanim">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='9' data-delay='.5' data-increment="1">9</div>
				<h4 class="stats-info">DESTINATIONS</h4>
			</div>
			<div class="col-md-3 col-sm-3 stats-grid slideanim">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='2' data-delay='.5' data-increment="10">2</div>
				<h4 class="stats-info">TOURS</h4>
			</div>
			<div class="col-md-3 col-sm-3 stats-grid slideanim">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='4' data-delay='.5' data-increment="1">4</div>
				<h4 class="stats-info">TOUR TYPES</h4>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //stats -->
<!-- Popular -->
<div class="albums">
	<div class="container">
		<h3 class="agile-title">MOST POPULAR QUOTES</h3> 
		<div class="w3layouts_header">
			<p><span><i class="fa fa-plane sub-w3l" aria-hidden="true"></i></span></p>
		</div>
		<div class="col-md-6 w3lsalbums-grid">
			<div class="albums-left"> 
				<div class="wthree-almub">  
				</div>
			</div>
			<div class="albums-right" style="height:262px;width:270px">
				<h4>Robert Louis Stevenson</h4>
				<p>"For my part, I travel not to go anywhere, but to go. I travel for travel’s sake. The great affair is to move.”</p>
				<a class="w3more" href="https://www.brainyquote.com"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-6 w3lsalbums-grid">
			<div class="albums-left"> 
				<div class="wthree-almub wthree-almub2"> 
				</div> 
			</div>
			<div class="albums-right" style="height:262px;width:270px">
				<h4>Ralph Waldo Emerson</h4>
				<p>Though we travel the world over to find the beautiful, we must carry it with us or we find it not.</p>
				<a class="w3more" href="https://www.brainyquote.com"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
			</div>
			<div class="clearfix"></div>
		</div>  
		<div class="col-md-6 w3lsalbums-grid">
			<div class="albums1-right"> 
				<div class="wthree-almub wthree-almub3">  
				</div>
			</div>
			<div class="albums1-left" style="height:262px;width:270px">
				<h4>Mark Twain</h4>
				<p>“Broad, wholesome, charitable views of men and things cannot be acquired by vegetating in a corner of earth.”</p>
				<a class="w3more" href="https://www.brainyquote.com"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
			</div> 
			<div class="clearfix"></div>
		</div>
		<div class="col-md-6 w3lsalbums-grid">
			<div class="albums1-right"> 
				<div class="wthree-almub wthree-almub4">  
				</div>
			</div>
			<div class="albums1-left" style="height:262px;width:270px">
				<h4>Anias Nin</h4>
				<p>“We travel, some of us forever, to seek other places, other lives, other souls.”</p>
				<a class="w3more" href="https://www.brainyquote.com"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
			</div> 
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div> 
	</div>
</div>
<!-- //Popular --> 
<!-- footer -->
<footer>
	<div class="agileinfo-footer">
		<div class="container">
			<div class="agileits-footer-top">
				<div class="col-sm-4 w3ls-address-grid">
					<i class="glyphicon glyphicon-map-marker"></i>
					<div class="w3-address1">
						<p>Room No.007 Mathura Block,Amrita </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-sm-4 w3ls-address-grid">
					<i class="glyphicon glyphicon-phone"></i>
					<div class="w3-address1">
						<p>+8 974 020 852</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-sm-4 w3ls-address-grid">
					<i class="glyphicon glyphicon-envelope"></i>
					<div class="w3-address1">
						<p><a href="mailto:info@example.com"> planyourtrip@gmail.com</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- newsletter -->
			<div class="w3layouts-newsletter">
				<div class="col-md-5 wthree-join">
					<h2><i class="fa fa-envelope" aria-hidden="true"></i>Join our Newsletter</h2>
				</div>
				<div class="col-md-7 agileinfo-newsletter">
					<form action="#" method="post">
						<input type="email"	placeholder="Enter Your Email" name="email" required="" />
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //newsletter -->
			<!-- Counter -->
			<div class="services-bottom">
				<div class="counter-agile">
					<div class="counter-subw3l" style="margin-top:-40px;height:140px;width:180px">
						<a href="index.html"><img src="images\plan_your_trip_header_title.png" style="width:150px;height:130px;"></a>
					</div>
					<div class="ftr-menu">
						 <ul>
							<li><a class="active" href="index.php">Home </a></li>
							<li><a class="" href="services.html">Services</a></li>
							<li><a class="" href="gallery.html">Gallery</a></li>
							<li><a class="" href="sponsors.html">Sponsors</a></li>
							<li><a class="" href="contact.html">Contact Us</a></li>
						 </ul>
					</div>
					<div class="counter-subw3l w3l-right-footer">
						<ul class="w3layouts-agileits-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //Counter -->
		</div>
		</div>
</footer>
<!-- //footer -->
<!-- js-scripts -->			
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->
	<!-- Easy Responsivetabs -->
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
	<!-- //Easy Responsivetabs -->
	<!-- strat-date-piker -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	  <script>
			  $(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
			  });
	  </script>
	<!-- //End-date-piker -->
	<!-- Numscroller -->
	<script type="text/javascript" src="js/numscroller-1.0.js"></script>
	<!-- //Numscroller -->
<!-- //js-scripts -->

<?php
if(isset($_POST['Destsubmit']))
{
	//header("Location:https://www.flipkart.com/");
	$destcountry = $_POST['destcountry'];
	$query1="select * FROM package WHERE Place = '$destcountry'";

	//echo '<script type="text/javascript"> alert("countey entered") </script>';
	$query1_run = mysqli_query($con,$query1);
	//echo '<script type="text/javascript"> alert("countey entered") </script>';
	if(mysqli_num_rows($query1_run)>0)
        { 
        	//echo '<script type="text/javascript"> alert("in database") </script>';
           
        	header("Location:https://www.flipkart.com/");

        }
        else
        {
        	//header('Location:https://www.flipkart.com/');

        	echo '<script type="text/javascript"> alert("Not in database") </script>';
        }
}
?>
</body>
</html>