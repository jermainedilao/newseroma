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
	<head><title>Add Finishes</title>
	<body>
		<h4>ADD FINISHES</h4>
			<div class = "col-md-3">
				<form class = "form" method = "post">
					<div class = "form-group">
						<label>Description:</label>
						<textarea class="form-control" rows="3" name = "finishesname" required = "required"></textarea>
					</div>
					<div class = "form-group">
						<button type = "submit" class = "btn" name = "submit">Save</button>
					</div>
				</form>
			</div>
	</body>
</html>