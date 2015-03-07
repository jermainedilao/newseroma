<?php
	$viewbrokerprofile = view_broker_profile($_SESSION['userid']);
?>
<!DOCTYPE html>
<head><title>Broker</title></head>
<html>
	<body>
		<h4>BROKER PROFILE</h4><hr/>
			<div class = "col-md-3">
				<div>
					<h5><b>Name:</b></h5>
					<?php echo htmlentities($viewbrokerprofile['name']);?>
				</div><br/>
				<div>
					<h5><b>Email:</b></h5>
					<?php echo htmlentities($viewbrokerprofile['email']);?>
				</div><br/>
				<div>
					<h5><b>Contact:</b></h5>
					<?php echo htmlentities($viewbrokerprofile['contact']);?>
				</div>
			</div>
	</body>
</html>