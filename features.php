<?php	
	if(isset($_POST['submit']))
	{
		$subscriberemail = trim($_POST['subscriberemail']);
		add_subscriber($subscriberemail);
	}
?>
<!DOCTYPE html>
<head><title>Feature and Amenities</title></head>
<html>
	<body>
		
		<div class = "row">
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
			<div class = "col-md-8">
				<h2 class = "pull-left">FEATURES</h2>
				<br><br><br><br>

				<td><img width="300" height="300" src="images/pic1.jpg"></img></td>
		
				<h2 align="right" style="padding-top:2em;">AMENITIES</h2>
				<img align="right" width="300" height="300" src="images/pic2.jpg"></img>
			</div>
		</div>
	</body>
</html>