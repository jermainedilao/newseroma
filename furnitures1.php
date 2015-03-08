<?php	
	if(isset($_POST['submit']))
	{
		$subscriberemail = trim($_POST['subscriberemail']);
		add_subscriber($subscriberemail);
	}
  
  $getfeatures = get_features();
  $getamenities = get_amenities();
?>
<!DOCTYPE html>
<html>
	<head><title>Features & Amenities</title></head>
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
			<h2 class = "pull-left">FEATURES</h2><br/>
				<div class = "row">
					<div class = "col-md-5" style = "clear: both;">
						<img src = "images/image1.jpg" width = "350" height = "250"/>
					</div>
					<div class = "col-md-6">
						<p class = "pull-left">
                <ul style = "margin-top: 20px;">
                  <?php foreach($getfeatures as $gf): ?>
                      <li><?php echo htmlentities($gf['featurename']); ?></li>
                  <?php endforeach; ?>
                </ul>			
						</p>
					</div>
				</div>
      <br />
			<hr />
			<h2 class = "pull-right">AMENITIES</h2><br/><br/><br/><br/>
				<div class = "row">

					<div class = "col-md-6" style = "clear: both;">
						<p class = "pull-left">
              <ul style = "margin-top: 20px;">
                    <?php foreach($getamenities as $ga): ?>
                      <li><?php echo htmlentities($ga['amenityname']); ?></li>
                  <?php endforeach; ?>
              </ul>		
						</p>
					</div>
					<div class = "col-md-5 pull-right">
						<img src = "images/image1.jpg" width = "350" height = "250"/>
					</div>
				</div>
		</div>
    <div class="fordeletemodule"></div>
	</body>
</html>