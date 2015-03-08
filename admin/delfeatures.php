<?php

	
	if(isset($_POST['submit']))
	{
    $featureid = $_POST['featureid'];
		del_feature($featureid);
		
		echo "<div class = 'alert alert-success' style = 'width: 265px;'>Successfully deleted feature.</div>";
    header("Refresh:1");
	}
  
  $getfeatures = get_features();
?>

<!DOCTYPE html>
<html>
	<head><title>Delete Condominium Feature</title>
	<body>
		<h4>DELETE CONDOMINIUM FEATURE</h4><hr/>
			<div class = "col-md-3">
				<form class = "form" method="POST">
					<div class = "form-group">
						<select class = "form-control" name = "featureid" required = "required">
							<option value = "" disabled>Please select</option>
							<?php foreach($getfeatures as $d): ?>
								<option value = "<?php echo htmlentities($d['featureid']); ?>"><?php echo htmlentities($d['featurename']); ?></option>
							<?php endforeach; ?>
						 </select>
					</div>
					<div class = "form-group">
						<button type = "submit" name="submit" class = "btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>