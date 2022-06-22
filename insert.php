
<?php 
	include ('connection.php');

	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$sql ="INSERT INTO userinfo(user,pass) VALUES('$user','$pass')";

	$res=mysqli_query($conn,$sql);

	if ($res) {
		echo "success";
	}else{
		echo "error";
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 		<br>
 		<a href="index.php">Go to Homepage</a>
 </body>
 </html>