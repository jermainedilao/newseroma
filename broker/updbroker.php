<?php
	$updgetbrokers = upd_get_brokers();
	
	$brokerid = $_SESSION['userid'];
	$viewbrokerprofile = view_broker_profile($brokerid);
	$brokerusername = '';
	$brokerpassword = '';
	$brokername = '';
	$brokercontact = '';
	$brokeremail = '';
	$brokerstatus = '';
	
	if(isset($_POST['submit']))
	{			
		$brokerusername = $_POST['username'];
		$brokerpassword = $_POST['password'];
		$brokername = $_POST['name'];
		$brokercontact = $_POST['contact'];
		$brokeremail = $_POST['email'];
		$brokerstatus = isset($_POST['status']) ? $_POST['status'] : '';
			
		if ($brokerusername == '' and $brokerpassword == '' and $brokername == '' and $brokercontact == '' and $brokeremail == '' and $brokerstatus == '')
		{
			echo '<code>Update Atleast A Field</code>';
		}
		else
		{
			update_brokers($brokerid, $brokerusername, $brokerpassword, $brokername, $brokercontact, $brokeremail, $brokerstatus);
			echo "<div class = 'alert alert-success' style = 'width: 265px;'>Successfuly updated broker.</div>";
			header("Refresh:1");
		}
	}
?>
<!DOCTYPE html>
<html>
	<head><title>Update Broker</title></head>
	<body>
		<h4>UPDATE PROFILE</h4><hr/>
			<div class = "col-md-3">
				<form class = "form" method = "post" enctype="multipart/form-data">
					<div class = "form-group">
						<label>Broker Name:</label>
						<input type = "text" value = "<?php htmlentities($brokername); ?>" name = "name" class = "form-control" placeholder = "New Broker Name"/>
					</div>
					<div class = "form-group">
						<label>Broker Username:</label>
						<input type = "text" value = "<?php htmlentities($brokerusername); ?>" name = "username" class = "form-control" placeholder = "New Broker Username"/>
					</div>						
					<div class = "form-group">
						<label>Broker Password:</label>
						<input type = "password" value = "<?php htmlentities($brokerpassword); ?>" name = "password" class = "form-control" placeholder = "New Broker Password"/>
					</div>	
					<div class = "form-group">
						<label>Broker Contact Detail:</label>
						<input type = "text" value = "<?php htmlentities($brokercontact); ?>" name = "contact" class = "form-control" placeholder = "New Broker Contact Detail"/>
					</div>
					<div class = "form-group">
						<label>Broker E-mail:</label>
						<input type = "email" value = "<?php htmlentities($brokeremail); ?>" name = "email" class = "form-control" placeholder = "New Broker E-mail"/>
					</div>
					<div class = "form-group">
						<label>Broker Status:</label>
						<select class="form-control" name = "status">
							<option value = '' disabled = "disabled" selected="selected">Please Select</option>
							<option value = '1'>Active</option>
							<option value = '0'>Inactive</option>
						</select>
					</div>
					<div class = "form-group">
						<button type = "submit" class = "btn" name = "submit">Update</button>
					</div>
				</form>
			</div>
	</body>
</html>