<?php
	//ready to use
	$viewbrokers = view_brokers();
	$blocker = 0;
	
	if(isset($_POST['submit']))
	{
		$broker_username = $_POST['username'];
		$broker_password = $_POST['password'];
		$broker_name = $_POST['name'];
		$broker_contact = $_POST['contact'];
		$broker_email = $_POST['email'];
		$broker_status = 1;
		
		foreach($viewbrokers as $v)
		{
		    if($v['username'] == $broker_username)
				$blocker = 1;
		}
		
		if($blocker != 1)
		{
			add_brokers($broker_username, $broker_password, $broker_name, $broker_contact, $broker_email, $broker_status);
			echo 'Broker Successfully Added';
		}
		else
			echo '<code>Username already existing.</code>';
	}
?>

<!DOCTYPE html>
<html>
	<head><title>Add Broker</title>
	<body>
		<h4>ADD BROKER</h4>
			<div class = "col-md-3">
				<form class = "form" method="post" enctype="multipart/form-data">
					<div class = "form-group">
						<label>Username:</label><br>
						<input type = "text" class = "form-control" name = "username" class = "form-group" required = "required"><br>
						<label>Password:</label><br>
						<input type = "password" class = "form-control" name = "password" class = "form-group" required = "required"><br>
						<label>Name:</label><br>
						<input type = "text" class = "form-control" name = "name" class = "form-group" required = "required"><br>
						<label>Contact Number:</label><br>
						<input type = "text" class = "form-control" name = "contact" class = "form-group" required = "required"><br>
						<label>E-mail Address:</label><br>
						<input type = "email" class = "form-control" name = "email" class = "form-group" required = "required"><br>
					</div>
					<div class = "form-group">
						<button type = "submit" name="submit" class = "btn">Save</button>
					</div>
				</form>
			</div>
	</body>
</html>