<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		/* Always set the map height explicitly to define the size of the div
       * element that contains the map. */

		#map {
			height: 300px;
			width: 800px;
		}

		#block-wrp {
			width: 784px;
			display: flex;
			display: -webkit-flex;
			justify-content: space-around;
			flex-wrap: wrap;
		}

		#block-wrp .block-item {
			height: 400px;
			width: 48%;
			position: relative;
			display: flex;
			display: -webkit-flex;
			flex-direction: column;
			-webkit-flex-direction: column
		}

		#block-wrp .block-item .map-item {
			height: 90%
		}

	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>United PhilBrokers, Inc.</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo ('');?> assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->

	<link rel="stylesheet" href="<?php echo ('');?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo ('');?>assets/vendor/simple-line-icons/css/simple-line-icons.css">
	<link href="<?php echo ('');?>https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="<?php echo ('');?>https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="<?php echo ('');?>https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
	<!-- Plugin CSS -->
	<link rel="stylesheet" href="<?php echo ('');?>/device-mockups/device-mockups.min.css" media="all" type="text/css">

	<!-- Custom styles for this template -->
	<link href="<?php echo ('');?>assets/css/new-age.min.css" rel="stylesheet">

	<!-- My CSS TEMPLATE-->
	<link href="<?php echo ('');?>assets/css/navbar-style.css" rel="stylesheet" media="all" type="text/css">
	<link href="<?php echo ('');?> assets/css/parallax.css" rel="stylesheet">

	<!-- MY JS TEMPLATE -->
	<script src="<?php echo ('');?>https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="<?php echo ('');?>assets/js/parallax.js"></script>
</head>

<body id="page-top">
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top " id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('welcome'); ?>">
				<img src="<?php echo base_url();?>assets/img/logo-1.png">
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
			aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fa fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="<?php echo base_url('welcome'); ?>#events">Events</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="<?php echo base_url('welcome'); ?>#whoweare">Who We Are</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="<?php echo base_url('welcome'); ?>#missionvision">Mission/Vision</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="<?php echo base_url('welcome'); ?>#contact">Contact Us</a>
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Interested?
							<span class="caret"></span>
						</a>
						<ul id="login-dp" class="dropdown-menu dropdown-menu-right">
							<li>
								<div class="row">
									<div class="col-md-12 ">

										<!--<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
										</div>
										-->
										<div class="text-center w-100">APPLYING AS:</div>

										<a href="<?php echo ('clientbuyer'); ?>">
											<div class="form-group">
												<button type="submit" class="btn btn-primary btn-block">BUYER</button>
											</div>
										</a>
										<a href="<?php echo ('clientseller'); ?>">
											<div class="form-group">
												<button type="submit" class="btn btn-primary btn-block">SELLER</button>
											</div>
										</a>

									</div>

									<div class="bottom text-center w-100">
										Are you Interested?
										<br>
										<a href="<?php echo ('Infolocation'); ?>">
											<b>Look Now!</b>
										</a>
									</div>

								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<header class="infolocathead">
		<div class="container h-100">
			<div class="row h-100">
				<div class="col-lg-7 my-auto">
					<div class="header-content mx-auto">
						<h1 class="mb-auto sr-contact">
							<b>Discover your home</b>
						</h1>
						<h5 class="ml-1 mb-4 sr-contact">Our map is open to help you with all your adventures.</h5>
					</div>
				</div>
				<div class="col-lg-4 my-auto">
				</div>

			</div>
		</div>
	</header>
	<!--
    <header class="infolocathead2">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto">
				<h1 class="mb-auto sr-contact"><b>Satisfaction is our aim</b></h1>
             	 <h5 class="ml-1 mb-4 sr-contact">Guided to your ventures, and have a classy real estate acquisitions.</h5>
              </div>
          </div>
          <div class="col-lg-4 my-auto">
          </div>
        
		</div>
      </div>
    </header>
    -->
	<section id="services" style="background:#f8f9fa;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">At Your Service</h2>
					<hr class="my-4">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 text-center">
					<div class="service-box mt-5 mx-auto">
						<i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
						<h3 class="mb-3">Diamond is Life</h3>
						<p class="text-muted mb-0">Lorem ipsum dolor sit amet, et dolore magna aliqua. </p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center">
					<div class="service-box mt-5 mx-auto">
						<i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
						<h3 class="mb-3">Ready to Ship</h3>
						<p class="text-muted mb-0">Lorem ipsum dolor sit amet, et dolore magna aliqua. </p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center">
					<div class="service-box mt-5 mx-auto">
						<i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
						<h3 class="mb-3">Up to Date</h3>
						<p class="text-muted mb-0">Lorem ipsum dolor sit amet, et dolore magna aliqua. </p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center">
					<div class="service-box mt-5 mx-auto">
						<i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
						<h3 class="mb-3">Made with Love</h3>
						<p class="text-muted mb-0">Lorem ipsum dolor sit amet, et dolore magna aliqua. </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- B.E. JOYCE -->
	<section class="p-0" id="portfolio" style="background:#f8f9fa;">
		<div class="container-fluid p-0">
			<div class="row no-gutters popup-gallery">
				<?php if (isset($view_table)){
            foreach($view_table as $view_cities){echo
				'<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="#myModal'.$view_cities->LOC_NUM.'" data-toggle="modal">
						<img class="img-fluid" src="https://airyougotravels.com/wp-content/uploads/2016/05/baguio.jpg" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<i class="fa fa-search fa-5x "></i>
							</div>
						</div>
					</a>
				</div>';
			}?>
			</div>
		</div>
	</section>
	<!-- B.E. JOYCE -->
	<!-- B.E. MODAL JOYCE -->
	<?php foreach($view_table as $view_cities){ 
		$vcity = $view_cities->CITY;
		$vprov = $view_cities->PROVINCE;
		$loc = $view_cities->LOC_NUM;
	?>
	<div class="modal fade" id="myModal<?php echo $view_cities->LOC_NUM; ?>">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<button style="position:absolute;margin-right:10px;right:0; z-index:2000;" class="close" data-dismiss="modal">&times;</button>
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 img-fluid rounded-top" style="background:url('https://airyougotravels.com/wp-content/uploads/2016/05/baguio.jpg'); position:relative;width:100%;padding-top:100px;padding-bottom:100px;color:#fff;no-repeat :center center;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;background-repeat:no-repeat;"
						alt="Responsive image">
							<div class="col-lg-12 text-center">
								<h1 class="section-heading" style="color:white;text-shadow:0 0 20px #000;">
									<?php echo $view_cities->CITY; ?>
								</h1>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="modal-body" style="text-align:justify; padding-top:30px; margin-left:2.5%; margin-right:2.5%;">
							<p>
								<?php echo $view_cities->DESCR.' '.$loc; ?>
							</p>
						</div>
					</div>
					<div class="row">
						<script type="text/javascript">
							var map = [];
							var marker=[];
							var pyrmont=[];
							var j = <?php echo $loc; ?>;
							var stmap = "map"+<?php echo $loc; ?>;

							function initMap() {
								<?php
                              $city = str_replace(" ","+",$vcity);
                              $prov = urldecode($vprov);  
                              $url = "http://maps.googleapis.com/maps/api/geocode/json?address=$city+$prov";
                              $json_data = file_get_contents($url);
                              $result = json_decode($json_data, TRUE);
                              $latitude = $result['results'][0]['geometry']['location']['lat'];
                              $longitude = $result['results'][0]['geometry']['location']['lng'];
                              echo 'pyrmont[j] = {lat:'. $latitude.', lng:'. $longitude.'};';
                          ?>

								map[j] = new google.maps.Map(document.getElementById(stmap), {
									center: pyrmont[j],
									zoom: 15,
									styles: [{
											"featureType": "water",
											"elementType": "geometry",
											"stylers": [{
													"visibility": "on"
												},
												{
													"color": "#aee2e0"
												}
											]
										},
										{
											"featureType": "landscape",
											"elementType": "geometry.fill",
											"stylers": [{
												"color": "#abce83"
											}]
										},
										{
											"featureType": "poi",
											"elementType": "geometry.fill",
											"stylers": [{
												"color": "#769E72"
											}]
										},
										{
											"featureType": "poi",
											"elementType": "labels.text.fill",
											"stylers": [{
												"color": "#7B8758"
											}]
										},
										{
											"featureType": "poi",
											"elementType": "labels.text.stroke",
											"stylers": [{
												"color": "#EBF4A4"
											}]
										},
										{
											"featureType": "poi.park",
											"elementType": "geometry",
											"stylers": [{
													"visibility": "simplified"
												},
												{
													"color": "#8dab68"
												}
											]
										},
										{
											"featureType": "road",
											"elementType": "geometry.fill",
											"stylers": [{
												"visibility": "simplified"
											}]
										},
										{
											"featureType": "road",
											"elementType": "labels.text.fill",
											"stylers": [{
												"color": "#5B5B3F"
											}]
										},
										{
											"featureType": "road",
											"elementType": "labels.text.stroke",
											"stylers": [{
												"color": "#ABCE83"
											}]
										},
										{
											"featureType": "road",
											"elementType": "labels.icon",
											"stylers": [{
												"visibility": "off"
											}]
										},
										{
											"featureType": "road.local",
											"elementType": "geometry",
											"stylers": [{
												"color": "#A4C67D"
											}]
										},
										{
											"featureType": "road.arterial",
											"elementType": "geometry",
											"stylers": [{
												"color": "#9BBF72"
											}]
										},
										{
											"featureType": "road.highway",
											"elementType": "geometry",
											"stylers": [{
												"color": "#EBF4A4"
											}]
										},
										{
											"featureType": "transit",
											"stylers": [{
												"visibility": "off"
											}]
										},
										{
											"featureType": "administrative",
											"elementType": "geometry.stroke",
											"stylers": [{
													"visibility": "on"
												},
												{
													"color": "#87ae79"
												}
											]
										},
										{
											"featureType": "administrative",
											"elementType": "geometry.fill",
											"stylers": [{
													"color": "#7f2200"
												},
												{
													"visibility": "off"
												}
											]
										},
										{
											"featureType": "administrative",
											"elementType": "labels.text.stroke",
											"stylers": [{
													"color": "#ffffff"
												},
												{
													"visibility": "on"
												},
												{
													"weight": 4.1
												}
											]
										},
										{
											"featureType": "administrative",
											"elementType": "labels.text.fill",
											"stylers": [{
												"color": "#495421"
											}]
										},
										{
											"featureType": "administrative.neighborhood",
											"elementType": "labels",
											"stylers": [{
												"visibility": "off"
											}]
										}
									]
								});

								infowindow = new google.maps.InfoWindow();
								var service = new google.maps.places.PlacesService(map[j]);
								service.nearbySearch({
									location: pyrmont[j],
									radius: 500,
									type: ['store']
								}, callback);

								service.nearbySearch({
									location: pyrmont[j],
									radius: 500,
									type: ['school']
								}, callback);

								service.nearbySearch({
									location: pyrmont[j],
									radius: 500,
									type: ['hospital']
								}, callback);

							}


							function callback(results, status) {
								if (status === google.maps.places.PlacesServiceStatus.OK) {
									for (var i = 0; i < results.length; i++) {
										createMarker(results[i]);
									}
								}
							}

							function createMarker(place) {
								var placeLoc = place.geometry.location;
								var image = {
									url: place.icon,
									size: new google.maps.Size(71, 71),
									origin: new google.maps.Point(0, 0),
									anchor: new google.maps.Point(17, 34),
									scaledSize: new google.maps.Size(25, 25)
								};
								marker[j] = new google.maps.Marker({
									map: map[j],
									position: place.geometry.location,
									icon: image
								});

								google.maps.event.addListener(marker, 'click', function () {
									infowindow.setContent(place.name);
									infowindow.open(stmap, this);
								});
							}

							//document.write("<div id=\"gallery"+id+"\">"+id+" <img id=\"ts"+id+"\" src=\"thumb"+id+".jpg\" /></div>");
							document.write(stmap);
							document.write("<div id=" + stmap + " style=\"height:300px; width:800px\"></div>");

						</script>
					</div>
				</div>
				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>
	<?php
			}}
	?>
	<!-- B.E. MODAL JOYCE -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 h-100 text-center text-lg-left my-auto">
					<p class="text-muted small mb-4 mb-lg-0">&copy; United Philbrokers 2018. All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 h-100 text-center text-lg-right my-auto">
					<ul class="list-inline mb-0">
						<li class="list-inline-item mr-3">
							<a href="#">
								<i class="fa fa-facebook fa-2x fa-fw"></i>
							</a>
						</li>
						<li class="list-inline-item mr-3">
							<a href="#">
								<i class="fa fa-twitter fa-2x fa-fw"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="#">
								<i class="fa fa-google-plus fa-2x fa-fw"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- Bootstrap core JavaScript -->
	<script src="<?php echo ('');?>assets/vendor/jquery/jquery.min.js">


	</script>
	<script src="<?php echo ('');?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js">


	</script>

	<!-- Plugin JavaScript -->
	<script src="<?php echo ('');?>assets/vendor/jquery-easing/jquery.easing.min.js">


	</script>
	<script src="<?php echo ('');?>assets/vendor/scrollreveal/scrollreveal.min.js">


	</script>
	<!-- Custom scripts for this template -->
	<script src="<?php echo ('');?>assets/js/new-age.min.js">


	</script>
	<script src="<?php echo ('');?>assets/js/creative.min.js">


	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSuxK7yQseuK-JaBwQNwi3jIMTKRZxgfQ&libraries=places&callback=initMap"
	async defer>


	</script>



</body>

</html>
