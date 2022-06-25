<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">	
</head>

<body style="margin-left: 500px;">
	
	<?php 
	include ('connection.php');
	?>
		
	<div class="center">

 		<h1>Login Page</h1>
		<form action="authentication.php" method="post">
        
 		<div class="txt_field">
			<input type="text" name="username" id="user" required>
    		<span></span>
    		<label>Username</label>
    	</div>
        
    	<div class="txt_field">
    		<input type="password" name="password" id="pass" required>
    		<span></span>
    		<label>Password</label>
    	</div>
        
    	<div class="pass">
    		<input type="checkbox" name="remember"> Remember me
    	</div>
        
    	<input type="submit" value="Login" name="save">
		<a href="create.php"><input type="button" value="Create Account"/>
		</a>

		</form>

	</div>	

	<?php 
		session_start();
		if (isset($_SESSION['usern']) and isset($_SESSION['passw']))
		{		
			$user=$_SESSION['usern'];
			$pass=$_SESSION['passw'];
			echo $user.$pass;
			echo "<script> 
				document.getElementById('username').value='$user';
				document.getElementById('password').value='$pass';
				</script>";
		}
	?>
		
</body>
</html>