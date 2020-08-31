<?php

session_start();


$con = mysqli_connect('localhost','root','root');

mysqli_select_db($con, 'userregistration');

$username = $_POST['loginUsername']; 
$pass = $_POST['loginPassword'];

$s = " select * from usertable where username = '$username' && password = '$pass'  " ;

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	 $_SESSION['username'] = $username; 
	header('location:home.php');
	
}
else{
	header('location:login.html');
		
}


?>