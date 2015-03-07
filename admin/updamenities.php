<?php
  if (isset($_POST['submit']))
  {
    $amenityname = $_POST['amenityname'];
    $amenityid = $_POST['amenityid'];
	$amenitystatus = isset($_POST['amenitystatus']) ? $_POST['amenitystatus'] : '';
	
    update_amenities($amenityname, $amenityid, $amenitystatus);
    
    echo "<div class = 'alert alert-success' style = 'width: 265px;'>Successfully updated amenities.</div>";
		header("Refresh:1");
  }
  $getupdateamenities = get_update_amenities();
 ?>
<!DOCTYPE html>
<html>
	<head><title>updamenities.php</title>
	<body>
		<br>
		<h4>UPDATE AMENITIES</h4>
			<div class = "col-md-3">
				<form class = "form" method = "POST">
					<div class = "form-group">
						<label>Amenity</label>
						<select name = "amenityid" class = "form-control" required="required">
						  <option value = "" disabled>Please select</option>
						  <?php foreach($getupdateamenities as $d): ?>
								<option value = "<?php echo htmlentities($d['amenityid']); ?>"><?php echo htmlentities($d['amenityname']); ?></option>
						  <?php endforeach; ?>
						</select>
					</div>
					<div class = "form-group">
						<label>Update Selected Amenity:</label>
						<textarea class = "form-control" rows = "3" name = "amenityname" ></textarea>
					</div>
					<div class = "form-group">
						<label>Update Status:</label>
						<select class = "form-control" name = "amenitystatus">
							<option value = "" disabled = "disabled" selected = "selected">Please select</option>
							<option value = "1">Active</option>
						</select>
					</div>
					<div class = "form-group">
						<button type = "submit" name = "submit" class = "btn">Save</button>
					</div>
				</form>
			</div>
	</body>
</html>