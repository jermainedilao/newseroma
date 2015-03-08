<?php	
	if(isset($_POST['submit']))
	{
		$subscriberemail = trim($_POST['subscriberemail']);
		add_subscriber($subscriberemail);
	}
?>
<!DOCTYPE html>
<head><title>About</title></head>
<html>
	<body>
		<div class = "col-md-3">
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
		<div class = "col-md-9">
			<h2 class = "pull-left">ABOUT</h2><br />
			<div style = "clear: both;">
				<img src = "images/about.jpg" class="img-responsive" style = "width: 100%; height: 300px;"/>
				<p><em>Advancing a Grand Vision for Life.</em></p>
			</div><br />
			<div>
				<p>
					Taking its cue from nature and placing natural landscapes right at the core of its development philosophy,
					Seroma Residences' pioneer landmark aims to raise the bar for urban master planned communities within Cebu City's main business district.
				</p>
				<p>
					Seroma Residences is synonymous with outstanding levels of service and comfort delivered with utmost style. And today, we deliver even more to makesure we maintain our position at the forefront of the hospitality industry now and in the future.
				</p>
				<p>
					We are service driven, responsible, socially and locally connected and demonstrate a modern friendly attitude in everything we do. Our aim is to deliver our outstanding Yes I Can! service, comfort and style where you need us.
				</p>
			</div>	
		</div>
	</body>
</html>