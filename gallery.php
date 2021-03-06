<?php	
	if(isset($_POST['submit']))
	{
		$subscriberemail = trim($_POST['subscriberemail']);
		add_subscriber($subscriberemail);
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Gallery</title>
		
		<meta charset="utf-8">
  
    <title>Basic jQuery Slider - Demo</title>
      
    <!-- bjqs.css contains the *essential* css needed for the slider to work -->
    <link rel="stylesheet" href="gallery_files/bjqs.css">


    <!-- demo.css contains additional styles used to set up this demo page - not required for the slider --> 
    <link rel="stylesheet" href="gallery_files/demo.css">

    <!-- load jQuery and the plugin -->
    <script src="gallery_files/js/jquery-1.7.1.min.js"></script>
    <script src="gallery_files/js/bjqs-1.3.min.js"></script>
		
		
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<form class = "form" method = "post">
						<h3>Subscribe</h3>
						<div class = "form-group">
							<label>
								Email:
							</label>
							<br/>
							<input type = "text" name = "subscriberemail" class = "form-control" required = "required"/>
						</div>
						<br/>
						<div class = "form-group">
							<button type = "submit" name = "submit" class = "btn">Subscribe</button>
						</div>
					</form>
				</div>
				<div class="col-md-9" style="margin-top: 60px;">
					<div id="container">

						<div class="form-group">
							<h3 style="font-family: arial;">Condominium Gallery</h3>
						</div>

						<!--  Outer wrapper for presentation only, this can be anything you like -->
						<div id="banner-fade">
							<!-- start Basic Jquery Slider -->
							<ul class="bjqs">
								<li><img src="gallery_files/img/1.jpg" title = "Take a stroll in your own private paradise."></li>
								<li><img src="gallery_files/img/2.jpg" title = "A grand design for urban living."></li>
								<li><img src="gallery_files/img/3.jpg" title = "Live within a grand island destination."></li>
								<li><img src="gallery_files/img/4.jpg" title = "A grand address at the heart of Cebu."></li>
								<li><img src="gallery_files/img/5.jpg" title = "Embark your own grand vacation today."></li>
								<li><img src="gallery_files/img/6.jpg" title = "Fun has never been this fun!"></li>
								<li><img src="gallery_files/img/7.jpg" title = "Built around you and how you're meant to live."></li>
								<li><img src="gallery_files/img/8.jpg" title = "A grander perspective."></li>
								<li><img src="gallery_files/img/9.jpg" title = "A grander lifestyle."></li>
								<li><img src="gallery_files/img/10.jpg" title = "Seroma: My City. My Resort. My Home."></li>
							</ul>
							<!-- end Basic jQuery Slider -->
						</div>
						<!-- End outer wrapper -->
						<script class="secret-source">
							jQuery(document).ready(function($) {
					
							$('#banner-fade').bjqs({
								height      : 320,
								width       : 620,
								responsive  : true
							});
					
							});
						</script>
					</div>
				</div>	
			</div>
		</div>
	</body>
</html>
