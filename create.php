<!DOCTYPE html>
<html>
<head>
	<title>Create an account</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	include ('connection.php');
	 ?>
	<div class="center">
	<h1>Enter new username and password</h1>
	<form action="insert.php" method="post">
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
		<a href="insert.php"><input type="button" name="save" value="Submit"></a>
	</form>	
	</div>
</body>
</html>