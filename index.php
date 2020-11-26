<?php   
session_start();
if(!isset($_SESSION["user_sesije"])){  
    header("location:login.php");  
} else {  
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
		<link rel="icon" href="Slike/favicon_io/favicon.ico" type="image/x-icon"/>
		<link href="bootstrap.css" rel="stylesheet" />
		<link href="custom.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
		<title>Projekt - CRM sustav</title>
	</head>
	<body>
		<div id="wrapper">
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="adjust-nav">
					<div class="navbar-header">
						<a class="navbar-brand">
							<img src="Slike/crm-logo.jpg" />
						</a>
					</div>
                <span class="logout-spn" >
                <a href="odjava.php" style="color:#fff;">LOGOUT</a>  
                </span>
				</div>
			</div>
			<nav class="navbar-default navbar-side" role="navigation">
				<div class="sidebar-collapse">
					<ul class="nav" id="main-menu">
						<li>
							<a href="#">Dodaj Administratora</a>
						</li>
					</ul>
                </div>
			</nav>
			<div id="page-wrapper" >
				<div id="page-inner">
					<div class="row">
						<div class="col-md-12">
							<h2>Primjer stranice </h2>   
						</div>
					</div>              
					<hr />        
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="row">
				<div class="col-lg-12" >
					&copy;  Martin Franković 2020
				</div>
			</div>
		</div>       
	</body>
</html>
<?php  
}  
?> 