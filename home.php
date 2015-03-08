<?php
	$error = '';
	$username = '';
	$password = '';
	
	if(isset($_POST['login']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(login($username, $password))
		{
			if($_SESSION['isloginadmin'] == true)
				header('Location:admin');
			else if($_SESSION['isloginbroker'] == true)
				header('Location:broker');
		}
		else
			$error = "<code>Incorrect username or password</code>";

	}
	
	if(isset($_POST['subscribe']))
	{
		$subscriberemail = trim($_POST['subscriberemail']);
		add_subscriber($subscriberemail);
	}
	
	$articles = get_articles();
?>

<!Doctype html>
<html>
	<head>
		<title>Home</title>
	</head>
	<body>
		<div id="fb-root"></div>
		<script>
		//facebook share and recommend
			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
		</script>
		
		<div class="col-md-3">
			<div style="margin-top: 40px;">
				<form role="form" method = "post">
					<div class="form-group">	
						<h4>Log in</h4>
						<label><h4>Username</h4></label>
						<input class="form-control" value = "<?php echo htmlentities($username); ?>" type="text" name="username" required = "required"/>
					</div>
					<div class="form-group">	
						<label><h4>Password</h4></label>
						<input type="password" name = "password" class="form-control" required = "required"/>
					</div>
					<?php if($error != ''){ echo $error; } ?>
					<div class="form-group">
						<button type="submit" class="btn" name="login">Log In</button>
					</div>
				</form>
			</div>
			<div style = "margin-top: 50px;">
			<form class = "form" method = "post">
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
					<button type = "submit" name = "subscribe" class = "btn">Subscribe</button>
				</div>
			</form>
			</div>
		</div>

		<div class="col-md-9" style="margin-bottom: 20px;">
			<?php foreach($articles as $a): ?>
				<div id="article-title">
					<h1><?php echo htmlentities($a['articletitle']); ?></h1>
				</div><br />
				
				<div id="article-image">
					<img src="<?php echo htmlentities($a['articleimgurl']); ?>" class = "image-responsive" style = "width: 100%;"/>
				</div><br />
				
				<div id="article-description">
					<p>
						<?php echo htmlentities($a['articlebody']); ?>
					</p>
				<div class="fb-like" data-href="https://seroma.com" data-layout="standard" data-action="recommend" data-show-faces="true" data-share="true"></div>	
				</div><br />
			<?php endforeach; ?>	
		</div>
	</body>
</html>