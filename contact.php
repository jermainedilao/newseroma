<?php	
	if(isset($_POST['submit']))
	{
		$subscriberemail = trim($_POST['subscriberemail']);
		add_subscriber($subscriberemail);
	}

  if (isset($_POST['send']))
  {
    $sender = trim($_POST['sender']);
    $senderemail = trim($_POST['senderemail']);
    $recipient = trim($_POST['recipient']);
    $message = trim($_POST['message']);
    send_message($sender, $senderemail, $recipient, $message);
    echo "<div class = 'alert alert-success' style = 'width: 100%;'>Message sent.</div>";
    //header("Refresh:1");
  }
  $getactiveusers = get_active_users(); 
?>
<!DOCTYPE html>
<head><title>Contact Us</title></head>
<html>
	<body>
		<div class = "col-md-3">
			<form class = "form" method = "post">
				<br>
				<p>
					<h4>Seroma Residences Sales Office</h4>

					Diamille Avenue corner Meacher St.,<br />
					Cebu City, Philippines 6000<br />
					<br />
					Tel(63-32)777-7777</br>
					Fax(63-32)333-3333

				<h3>Subscribe</h3>
				<div class = "form-group">
					<label>
						Email:
					</label>
					<br/>
					<input type = "text" name = "subscriberemail" class = "form-control" required = "required"/>
				</div>
				<br/>
				<div class = "form-group">
					<button type = "submit" name = "submit" class = "btn">Subscribe</button>
				</div>
			</form>
		</div>
		<div class = "col-md-9">
			<h2 class = "pull-left">CONTACT US</h2>
			<br><br><br><br>
			<div class = "col-md-8">
			<form class = "form" method = "post">
				<div class = "form-group">
					<label>Name</label><br>
						<input type = "text" name = "sender" class = "form-control"><br>
					<label>Email</label><br>
						<input type = "email" name = "senderemail" class = "form-control"><br>
          <label>Send message to:</label>  
						<select name = "recipient" class = "form-control" required="required">
						  <option value = "" disabled>Please select</option>
							<?php foreach($getactiveusers as $d): ?>
								<option value = "<?php echo htmlentities($d['id']); ?>"><?php echo htmlentities($d['name']); ?></option>
							<?php endforeach; ?>
						</select>
					<label>Message</label><br>
					<textarea class="form-control" name = "message" cols="60" rows="5"></textarea><br>
					<button type = "submit" name="send" class = "btn">Send</button>
				</div>
			</form>
			</div>
		</div>
	</body>
</html>