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
	<head><title>addamenities.php</title>
	<body>
		<h4>ADD AMENITIES</h4><hr/>
			<div class = "col-md-3">
				<form class = "form" method="POST">
					<div class = "form-group">
						<label>Description:</label>
						<textarea class="form-control" name="amenityname" rows="3"></textarea>
					</div>
					<div class = "form-group">
						<button type = "submit" name="submit" class = "btn">Save</button>
					</div>
				</form>
			</div>
	</body>
</html>