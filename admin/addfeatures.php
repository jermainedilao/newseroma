<?php
	if(isset($_POST['submit']))
	{
		$featurename = $_POST['featurename'];
		add_feature($featurename);
		echo "<div class = 'alert alert-success' style = 'width: 265px;'>New feature has been added.</div>";
	}
?>

<!DOCTYPE html>
<html>
	<head><title>Add Condominium Feature</title>
	<body>
		<h4>ADD CONDOMINIUM FEATURE</h4><hr/>
			<div class = "col-md-3">
				<form class = "form" method="POST">
					<div class = "form-group">
						<label>New Condominium Feature:</label>
						<input type = "text" class="form-control" name="featurename" >
					</div>
					<div class = "form-group">
						<button type = "submit" name="submit" class = "btn">Save</button>
					</div>
				</form>
			</div>
	</body>
</html>