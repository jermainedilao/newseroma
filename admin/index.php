<?php
	include "../db.php";
	ob_start();
	if($_SESSION['isloginadmin'] == true)
	{
		$page = isset($_GET['p']) ? $_GET['p'] : 'addarticle';
		
		$id = $_SESSION['userid'];
		$countnewmsg = count_new_msg($id);
		
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
        margin-top: 130px;
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
						  <a class="navbar-brand" href="#" style = "color: #AB3334;">Seroma</a>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">			
							<li class = "dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Add<span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href ="?p=addarticle">Article</a></li>
									<li><a href ="?p=addbroker">Broker</a></li>
									<li><a href ="?p=addunits">Unit</a></li>
									<li><a href ="?p=addfinishes">Unit Finish</a></li>
									<li><a href ="?p=addfeatures">Condominium Feature</a></li>
									<li><a href ="?p=addamenities">Condominium Amenity</a></li>
								</ul>
							</li>
							<li class = "dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Update<span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href ="?p=updarticle">Article</a></li>
									<li><a href ="?p=updunits">Unit</a></li>
									<li><a href ="?p=updfinishes">Unit Finish</a></li>
									<li><a href ="?p=updfeatures">Condominium Feature</a></li>
								<li><a href ="?p=updamenities">Condominium Amenity</a></li>
								</ul>
							</li>
							<li class = "dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Delete<span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href ="?p=delarticle">Article</a></li>
									<li><a href ="?p=delunits">Unit</a></li>
									<li><a href ="?p=delfinishes">Unit Finish</a></li>
									<li><a href ="?p=delfeatures">Condominium Feature</a></li>
									<li><a href ="?p=delamenities">Condominium Amenity</a></li>
								</ul>
							</li>
							<li>
								<a href = "?p=adminmsg">Messages&nbsp;<?php if($countnewmsg != false){ ?><span class = "badge"><?php echo htmlentities($countnewmsg);?></span> <?php } ?> </a>
							</li>
							<li>
								<a href = "?p=adminansmsg">Answered Messages</a>
							</li>
							<li>
								<a href = "?p=adminallmsg">All Messages</a>
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
    
    <div class="footer pull-bottom">
        &copy; Seroma Residences, 2015
     </div>
    
		<script src="../bootstrap/js/jquery.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>