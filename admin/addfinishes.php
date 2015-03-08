<?php
	if(isset($_POST['submit']))
	{
		$finishesname = $_POST['finishesname'];
		add_finishes($finishesname);
		echo "<div class = 'alert alert-success' style = 'width: 265px;'>New finishes has been added.</div>";
	}
?>
<!DOCTYPE html>
<html>
	<head><title>Add Finish</title>
	<body>
		<h4>ADD UNIT FINISH</h4><hr/>
			<div class = "col-md-3">
				<form class = "form" method = "post">
					<div class = "form-group">
						<label>New Unit Finish:</label>
						<input type = "text" class="form-control" name = "finishesname" required = "required">
					</div>
					<div class = "form-group">
						<button type = "submit" class = "btn" name = "submit">Save</button>
					</div>
				</form>
			</div>
	</body>
</html>