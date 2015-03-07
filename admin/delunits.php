<?php
	$getunits = get_units();
	
	if(isset($_POST['submit']))
	{
		$unitid = $_POST['unitid'];
		delete_unit($unitid);
		echo "<div class = 'alert alert-success' style = 'width: 265px;'>Successfuly deleted unit.</div>";
		header("Refresh:1");
	}
?>
<!DOCTYPE html>
<html>
	<head><title>Delete Units</title>
	<body>
		<h4>DELETE UNIT</h4>
			<div class = "col-md-3">
				<form class = "form" method = "post">
					<div class = "form-group">
						<select name = "unitid" required = "required" class = "form-control">
							<option value = "" disabled>Please select</option>
							<?php foreach($getunits as $g): ?>
								<option value = "<?php echo htmlentities($g['unitid']); ?>"><?php echo htmlentities($g['unitname']); ?></option>
							<?php endforeach; ?>
						</select>	
					</div>
					<div class = "form-group">
						<button type = "submit" class = "btn" name = "submit">Save</button>
					</div>
				</form>
			</div>
	</body>
</html>