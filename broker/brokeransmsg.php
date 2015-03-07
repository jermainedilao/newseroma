<?php
	$viewbrokerprofile = view_broker_profile($_SESSION['userid']);
  $id = $_SESSION['userid'];
  set_msg($id);
  $getbrokermsgs = get_broker_msgs($id);
  $countnewmsg = count_new_msg($id);
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
          <?php foreach($getbrokermsgs as $m): ?>
            Name: <?php echo htmlentities($m['sender']); ?><br>
            Email: <?php echo htmlentities($m['senderemail']); ?><br>
            <small><?php echo htmlentities($m['timestamp']); ?></small><br>
            Message: <?php echo htmlentities($m['message']); ?><br>
            <hr><br>
          <?php endforeach; ?>	
		</div>
	</body>
</html>