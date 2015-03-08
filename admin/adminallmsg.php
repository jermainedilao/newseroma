<?php
	$viewbrokerprofile = view_broker_profile($_SESSION['userid']);
	$id = $_SESSION['userid'];
	$getallmsgs = get_all_msgs();
?>

<!DOCTYPE html>
<head><title>Answered Messages</title></head>
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
		<div class = "col-md-8">
		    <h3 class = "pull-left">ANSWERED MESSAGES</h3>
			<br /><br /><br /><br />
			<?php foreach($getallmsgs as $m): ?>
				<b>Name:</b> <?php echo htmlentities($m['sender']); ?><br><br>
				<b>Email:</b> <?php echo htmlentities($m['senderemail']); ?><br><br>
				<small><em><b>Received: </b><?php echo htmlentities($m['timestamp']); ?></em></small><br><br>
				<b>Message:</b> <br><?php echo htmlentities($m['message']); ?><br><br>
				<b>To:</b><br> <?php $getbroker = get_broker($m['recipient']); echo htmlentities($getbroker['name']); ?><br><br/>
				<b>Reply:</b><br> <?php echo htmlentities($m['reply']); ?><br>
				<hr><br>
			<?php endforeach; ?>	
		</div>
	</body>
</html>