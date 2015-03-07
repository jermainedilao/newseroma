<?php

	
	if(isset($_POST['submit']))
	{
    $finishesid = $_POST['finishesid'];
		del_finishes($finishesid);
		
		echo "<div class = 'alert alert-success' style = 'width: 265px;'>Successfully deleted unit finish.</div>";
    header("Refresh:1");
	}
  
  $getfinishes = get_finishes();
?>

<!DOCTYPE html>
<html>
	<head><title>delfinishes.php</title>
	<body>
		<h4>DELETE FINISHES</h4>
			<div class = "col-md-3">
				<form class = "form" method="POST">
					<div class = "form-group">
						<select class = "form-control" name = "finishesid" required = "required">
							<option value = "" disabled>Please select</option>
							<?php foreach($getfinishes as $d): ?>
								<option value = "<?php echo htmlentities($d['finishesid']); ?>"><?php echo htmlentities($d['finishesname']); ?></option>
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