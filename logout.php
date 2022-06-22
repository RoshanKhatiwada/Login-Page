<?php 
	setcookie('user',"vb",time()-167);
	setcookie('pass',"vb",time()-167);
	session_start();
	session_destroy();
	echo "All cookie cleared";
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