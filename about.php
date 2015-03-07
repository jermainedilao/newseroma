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
				<img src = "images/headerbg.jpg" class="img-responsive" style = "width: 100%; height: 250px;"/>
			</div><br />
			<div>
				<p>
					Place about description here. Place about description here. Place about description here. Place about description here. 
					Place about description here. Place about description here. Place about description here. Place about description here. 
					Place about description here. Place about description here. Place about description here. Place about description here. 
				</p>
			</div>	
		</div>
	</body>
</html>