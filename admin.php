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
		<link href="administracija.css" rel="stylesheet" />
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
							<h2>Dodaj Administratora</h2>   
						</div>
					</div>              
					<hr /> 
					<form action="" method="POST">
						<div class="container">
							<h1>Forma za dodavanje administratora</h1>
							<hr>
						
							<label for="email"><b>Email</b></label>
							<input type="text" placeholder="Upiši Email" name="email" id="email" required>
						
							<label for="password"><b>Zaporka</b></label>
							<input type="password" placeholder="Upiši zaporku" name="password" id="psw" required>
						
							<label for="passwword-repeat"><b>Ponovno upiši zaporku</b></label>
							<input type="password" placeholder="Repeat Password" name="password-repeat" id="psw-repeat" required>
							<hr>
						
							<button type="submit" name="submit" class="registerbtn">Dodaj</button>
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
		<?php    
		if(isset($_POST["submit"])){
				$pass=$_POST['password']; 
				$passr=$_POST['password-repeat']; 
		if(!empty($_POST['email']) && !empty($_POST['password']) && $pass == $passr) {    
			$email=$_POST['email'];    
			$password=$_POST['password'];    
			
			$conn = new mysqli('localhost', 'root', '', 'administratori') or die(mysqli_error());

			$db = mysqli_select_db($conn, 'administratori') or die("databse error"); 
			
			$query=mysqli_query($conn, "SELECT * FROM prijava WHERE email='$email'");    
			$numrows=mysqli_num_rows($query);    
			if($numrows==0)    
			{    
			$sql="INSERT INTO prijava(email,password) VALUES('$email','$password')";    
			
			$result=mysqli_query($conn, $sql);    
				if($result){    
			echo "Account Successfully Created";    
			} else {    
			echo "Failure!";    
			}    
			} else {    
			echo "That username already exists! Please try again with another.";    
			}    
		} else {    
			echo "All fields are required!";    
		}    
		}    
		?>		
	</body>
</html>
<?php  
}  
?> 