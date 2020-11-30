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
		<link rel="icon" href="Slike/favicon_io/favicon.ico" type="image/x-icon"/>
		<link href="stil.css" rel="stylesheet" />
		<link href="email.css" rel="stylesheet" />
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
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="admin.php">Dodaj Administratora</a>
						</li>
						<li>
							<a href="pristigli_email.php">Pristigli E-mail</a>
						</li>
						<li>
							<a href="poslani_email.php">Pošalji E-mail</a>
						</li>
					</ul>
                </div>
			</nav>
			<div id="page-wrapper" >
				<div id="page-inner">
					<div class="row">
						<div class="col-md-12">
							<h2>Pošalji E-mail</h2>   
						</div>
					</div>              
					<hr />
					<form action="" method="POST">
						<div class="container">
						
							<label for="posiljatelj"><b>Pošiljatelj</b></label>
							<input type="text" placeholder="Upiši Email pošiljatelja" name="posiljatelj" id="posiljatelj" required>
						
							<label for="primaoc"><b>Primaoc</b></label>
							<input type="text" placeholder="Upiši Email primaoca" name="primaoc" id="primaoc" required>
						
							<label for="kopija"><b>Kopija</b></label>
							<input type="text" placeholder="Upiši Email za kopiju" name="kopija" id="kopija" required>
						
							<label for="skriven"><b>Skrivena kopija</b></label>
							<input type="text" placeholder="Upiši Email za skrivenu kopiju" name="skriven" id="skriven" required>
							
							<label for="naslov"><b>Naslov</b></label>
							<input type="text" placeholder="Upiši naslov" name="naslov" id="naslov" required>
						
							<label for="tekst"><b>Tekst</b></label>
							<input type="text" placeholder="Upiši tekst" name="tekst" id="tekst" required>
							<!--<textarea></textarea>-->
							<hr>
						
							<button type="submit" name="submit" class="registerbtn">Pošalji Email</button>
						</div>				
					</form>
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