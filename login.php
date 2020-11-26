<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="login.css">
		<link rel="icon" href="Slike/favicon_io/favicon.ico" type="image/x-icon"/>
		<title>Projekt - CRM sustav</title>
	</head>
	<body>
		<form class="login-form" action="" method="POST">
			<div style="padding: 0 0 0 60px;"><img src="Slike/lock1.jpg"></div>
			<div><p id="boja">Prijava u sustav CRM-a</p></div>
			<input type="email" name="email" class="login-username" autofocus="true" required="true" placeholder="Email" />
			<input type="password" name="password" class="login-password" required="true" placeholder="password" />
			<input type="submit" name="submit" value="Prijava" class="login-submit" />
		</form>
		<?php  
			if(isset($_POST["submit"])){
			
			if(!empty($_POST['email']) && !empty($_POST['password'])){
			$email = $_POST['email'];
			$password = $_POST['password'];

			$conn = new mysqli('localhost', 'root', '', 'administratori') or die(mysqli_error());

			$db = mysqli_select_db($conn, 'administratori') or die("databse error");

			$query = mysqli_query($conn, "SELECT * FROM prijava WHERE email='$email' AND password='$password'");
			$numrows = mysqli_num_rows($query);
			if($numrows !=0)
			{
			while($row = mysqli_fetch_assoc($query))
			{
			$dbemail=$row['email'];
			$dbpassword=$row['password'];
			}
			if($email == $dbemail && $password == $dbpassword)
			{
			session_start();
			$_SESSION['user_sesije']=$email;
			header("Location:index.php");
			}
			}
			else
			{
			echo "Neispravni unosi!";
			}
			}
			else
			{
			echo "Potrebna sva polja!";
			}
			} 
		?>
		<div class="underlay-black"></div> 
	</body>
</html>