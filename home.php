<?php

session_start();
if(!isset($_SESSION['username'])){
	header('location:login.html');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	
	<div class="profile-box">
		
	
<img src="qrcode.jpg" alt="usercode" width="100" height="100"><br><br>
<h1> Welcome <?php echo $_SESSION['username'];  ?> </h1>
<h3>  Your registration is confirmed. Please show the QR-code at security entrance to access the entry for event. </h3> 
<h4> Venue: Central Hall, Paris <br> Entry Time: 8pm </h4>
<h2> THANK YOU </h2>
<a href="logout.php">LOGOUT</a> 
</div>
</body>
</html>
