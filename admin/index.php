<?php
	include "../db.php";
	
	if($_SESSION['isloginadmin'] == true)
	{
		$page = isset($_GET['p']) ? $_GET['p'] : 'addarticle';
		
		$content = $page.".php";
		
		if(isset($_GET['l']))
		{
			logout();
			header('Location:../');
		}
	}
	else
	{
		if($_SESSION['isloginbroker'] == true)
			header('Location:../broker');
		else
			header('Location:../');
	}
?>
<!DOCTYPE html>
<html>
	<head><title>Administrator</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
	<link rel="shortcut icon" href="../seroma.favicon" />		
		<style>
			.header{
				background-image: url("../images/headerbg.jpg");
			    background-size: 1140px 250px;
				background-repeat: no-repeat;
				margin-top: -20px;
				height: 250px;
			}
			
			.main-content{
				margin-top: -20px;
			}
			
			.header {
				position: relative;
			}

			.header span{
				font-family: Century Gothic;
			}
			
			.color1{
				color: white;
			}
			
			.color2{
				color: pink;
			}
			
			.header span.color1{
				font-size: 3em;
			    position: absolute;
			    bottom: 50px;
			    left: 150px;
			}
			
			.header span.color2{
				font-size: 3em;
			    position: absolute;
			    bottom: 50px;
			    left: 330px;
			}
	
			.header span.lowerheader{
				font-size: 2em;
			    position: absolute;
			    bottom: 25px;
			    left: 150px;
				font-style: italic;
			}
			.btn{
				background-color: #AB3334;
				border-color: #AB3334;
				color: #FFF;
			}
		  
			.btn:hover{
				background-color: #DDA185;
				border-color: #DDA185;
			}
		</style>
	</head>
	<body>
		<div class = "container">
			<div class = "header">
				<span class = "color1">SEROMA</span><span class = "color2">RESIDENCES</span> <br/>
				<span class = "lowerheader color2">Live the grand lifestyle</span>
			</div>
			<nav class = "navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						  </button>
						  <a class="navbar-brand" href="#">Semora</a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">			
							<li class = "dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Add<span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href ="?p=addarticle">Article</a></li>
									<li><a href ="?p=addbroker">Broker</a></li>
									<li><a href ="?p=addunits">Units</a></li>
									<li><a href ="?p=addfinishes">Finishes</a></li>
									<li><a href ="?p=addfeatures">Features</a></li>
									<li><a href ="?p=addamenities">Amenities</a></li>
								</ul>
							</li>
							<li class = "dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Update<span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href ="?p=updarticle">Article</a></li>
									<li><a href ="?p=updunits">Units</a></li>
									<li><a href ="?p=updfinishes">Finishes</a></li>
									<li><a href ="?p=updfeatures">Features</a></li>
								<li><a href ="?p=updamenities">Amenities</a></li>
								</ul>
							</li>
							<li class = "dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Delete<span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href ="?p=delarticle">Article</a></li>
									<li><a href ="?p=delunits">Units</a></li>
									<li><a href ="?p=delfinishes">Finishes</a></li>
									<li><a href ="?p=delfeatures">Features</a></li>
									<li><a href ="?p=delamenities">Amenities</a></li>
								</ul>
							</li>
							<li>
								<a href = "?p=msgs">Messages&nbsp;<span class = "badge">5</span></a>
							</li>
							<li>
								<a href = "?p=subscribers">Subscribers</a>
							</li>
							<li>
								<a href = "?l=true">Log Out</a>
							<li>
						</ul>
					</div>
				</div>
			</nav>
			<div class = "main-content">
				<br>
				<!--<h3>ADMINISTRATOR</h3>
				<div class = "col-md-12">
					<h1>Hello Bootstrap!</h1>
				</div>-->
				<?php include_once($content); ?>
			</div>
		</div>
		<script src="../bootstrap/js/jquery.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>