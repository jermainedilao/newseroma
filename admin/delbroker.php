<?php
	//ready to use
	$delgetbrokers = del_get_brokers();
	$id = null;
	if(isset($_POST['submit']))
	{
		delete_brokers($_POST['id']);
		header("Refresh:1");
		echo "Broker Successfully Deleted";
	}
?>
<!DOCTYPE html>
<html>
	<head><title>Delete Broker</title>
	<body>
		<br>
		<h4>DELETE BROKER<h4>
		<div class = "row">
			<div class = "col-md-3">
				<form class = "form" method = "post">
					<div class = "form-group">
					    <select class = "form-control" name = "id" required = "required">
							<option value = "" disabled>Please select</option>
							<?php foreach($delgetbrokers as $d): ?>
								<option value = "<?php echo htmlentities($d['id']); ?>"><?php echo htmlentities($d['name']); ?></option>
							<?php endforeach; ?>
						 </select>
					</div>
					<div class = "form-group">
						<button type = "submit" name = "submit" class = "btn">Delete</button>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>