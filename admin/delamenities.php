<?php

	
	if(isset($_POST['submit']))
	{
    $amenityid = $_POST['amenityid'];
		del_amenity($amenityid);
		
		echo "<div class = 'alert alert-success' style = 'width: 265px;'>Successfully deleted amenity.</div>";
    header("Refresh:1");
	}
  
  $getamenities = get_amenities();
?>

<!DOCTYPE html>
<html>
	<head><title>Delete Amenities</title>
	<body>
		<h4>DELETE AMENITIES</h4><hr/>
			<div class = "col-md-3">
				<form class = "form" method="POST">
					<div class = "form-group">
						<select class = "form-control" name = "amenityid" required = "required">
							<option value = "" disabled>Please select</option>
							<?php foreach($getamenities as $d): ?>
								<option value = "<?php echo htmlentities($d['amenityid']); ?>"><?php echo htmlentities($d['amenityname']); ?></option>
							<?php endforeach; ?>
						 </select>
					</div>
					<div class = "form-group">
						<button type = "submit" name="submit" class = "btn">Save</button>
					</div>
				</form>
			</div>
	</body>
</html>