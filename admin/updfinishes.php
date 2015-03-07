<?php
  if (isset($_POST['submit']))
  {
    $finishesname = $_POST['finishesname'];
    $finishesid = $_POST['finishesid'];
	$finishesstatus = isset($_POST['finishesstatus']) ? $_POST['finishesstatus'] : '';
    update_finishes($finishesname, $finishesid, $finishesstatus);
    
    echo "<div class = 'alert alert-success' style = 'width: 265px;'>Successfully updated finishes.</div>";
		header("Refresh:1");
  }
  $getupdatefinishes = get_update_finishes();
 ?>
<!DOCTYPE html>
<html>
	<head><title>updfinishes.php</title>
	<body>
		<h4>UPDATE FINISHES</h4><hr/>
			<div class = "col-md-3">
				<form class = "form" method = "POST">
					<div class = "form-group">
						<label>Finish</label>
						<select name = "finishesid" class = "form-control" required="required">
						  <option value = "" disabled>Please select</option>
							<?php foreach($getupdatefinishes as $d): ?>
								<option value = "<?php echo htmlentities($d['finishesid']); ?>"><?php echo htmlentities($d['finishesname']); ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class = "form-group">
						<label>Update Selected Unit Finish:</label>
						<textarea class = "form-control" rows = "3" name = "finishesname" ></textarea>
					</div>
					<div class = "form-group">
						<label>Update Status:</label>
						<select class = "form-control" name = "finishesstatus">
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