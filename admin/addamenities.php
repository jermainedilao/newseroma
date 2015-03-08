<?php
	if(isset($_POST['submit']))
	{
		$amenityname = $_POST['amenityname'];
		add_amenity($amenityname);
		echo "<div class = 'alert alert-success' style = 'width: 265px;'>New amenity has been added.</div>";
	}
?>

<!DOCTYPE html>
<html>
	<head><title>Add Condominium Amenity</title>
	<body>
		<h4>ADD CONDOMINIUM AMENITY</h4><hr/>
			<div class = "col-md-3">
				<form class = "form" method="POST">
					<div class = "form-group">
						<label>New Condominium Amenity:</label>
						<input type = "text" class="form-control" name="amenityname">
					</div>
					<div class = "form-group">
						<button type = "submit" name="submit" class = "btn">Save</button>
					</div>
				</form>
			</div>
	</body>
</html>