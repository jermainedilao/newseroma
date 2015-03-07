<?php
  if (isset($_POST['submit']))
  {
    $featurename = $_POST['featurename'];
    $featureid = $_POST['featureid'];
	$featurestatus = isset($_POST['featurestatus']) ? $_POST['featurestatus'] : '';
    update_features($featurename, $featureid, $featurestatus);
    
    echo "<div class = 'alert alert-success' style = 'width: 265px;'>Successfully updated features.</div>";
		header("Refresh:1");
  }
  $getupdatefeature = get_update_features();
 ?>
<!DOCTYPE html>
<html>
	<head><title>updfeatures.php</title>
	<body>
		<h4>UPDATE FEATURES</h4>
			<div class = "col-md-3">
				<form class = "form" method = "POST">
					<div class = "form-group">
						<label>Feature</label>
						<select name = "featureid" class = "form-control" required="required">
						    <option value = "" disabled>Please select</option>
							<?php foreach($getupdatefeature as $d): ?>
								<option value = "<?php echo htmlentities($d['featureid']); ?>"><?php echo htmlentities($d['featurename']); ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class = "form-group">
						<label>Update Selected Feature:</label>
						<textarea class = "form-control" rows = "3" name = "featurename" ></textarea>
					</div>
					<div class = "form-group">
						<label>Update Status:</label>
						<select class = "form-control" name = "featurestatus">
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