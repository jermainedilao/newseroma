<?php
	include "db.php";
	ob_start();
	if(isset($_SESSION['isloginadmin']) && $_SESSION['isloginadmin'] == true)
		header('Location:admin');
	else if(isset($_SESSION['isloginbroker']) && $_SESSION['isloginbroker'] == true)
		header('Location:broker');
		
	$page = isset($_GET['p']) ? $_GET['p'] : 'home';
	$content = $page.".php";

?>
<!DOCTYPE html>
<html>
	<head><title>Seroma</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
		<link rel="shortcut icon" href="seroma.favicon" />
		<style>
			.header{
				background-image: url("images/headerbg.jpg");
				background-size: cover;
				background-repeat: no-repeat;
				margin-top: -10px;
				margin-bottom: auto;
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
				color: #fff;
			}
			
			.color2{
				color: #FDD3C9;
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
      
      .container{
        margin-bottom: 100px; 
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
      
      .footer{
				background-color: #AB3334;
        color: #fff;
        text-align: center;
        height: 70px;
        vertical-align: middle;
        line-height: 70px;  
        bottom: inherit;
        width: 100%;
			}
      
      .fordeletemodule{
        height: 250px;
      }
      
      @media all and (max-height: 600px )  {
        .footer{
          background-color: #AB3334;
          color: #fff;
          text-align: center;
          height: 70px;
          vertical-align: middle;
          line-height: 70px;  
          width: 100%;
          margin-top: 70px;
          bottom: inherit;
        }
          
      }
      
      @media all and (max-width: 700px )  {
        .header span.color1{
          font-size: 2em;
            position: absolute;
            bottom: 50px;
            left: 10px;
        }
        
        .header span.color2{
          font-size: 2em;
            position: absolute;
            bottom: 50px;
            left: 130px;
        }
        
        .header span.lowerheader{
          font-size: 1.5em;
          position: absolute;
          bottom: 25px;
          left: 10px;
          font-style: italic;
        }
      }
      
      @media all and (max-width: 390px ) {
        .header span.color1{
          font-size: 1em;
            position: absolute;
            bottom: 50px;
            left: 20px;
        }
        
        .header span.color2{
          font-size: 1em;
            position: absolute;
            bottom: 50px;
            left: 80px;
        }
        
        .header span.lowerheader{
          font-size: 0.7em;
          position: absolute;
          bottom: 25px;
          left: 20px;
          font-style: italic;
        }
      }
		</style>
	</head>
	<body>
		<div class = "container">
			<div class = "header page-header">
				<p><span class = "color1">SEROMA</span><span class = "color2">RESIDENCES</span></p>
				<p><span class = "lowerheader color2">Live the grand lifestyle</span></p>
			</div>
			<nav class = "navbar navbar-default">
				<div class = "container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						</button>
						<a class="navbar-brand" href="#" style = "color: #AB3334;">Seroma</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class = "nav navbar-nav">
							<li><a href ="?p=home" id = "home">Home</a></li>
							<li><a href ="?p=units">Units</a></li>
							<li><a href ="?p=furnitures1">Features & Amenities</a></li>
							<li><a href ="?p=gallery">Gallery</a></li>
							<li><a href ="?p=contact">Contact</a></li>
							<li><a href ="?p=about">About</a></li>
						</ul>
					</div>
				</div>	
			</nav>
			<div class = "main-content">
				<?php include_once($content); ?>
			</div>
		</div>
		
    <div class="footer">
        &copy; Seroma Residences, 2015
    </div>
    
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>