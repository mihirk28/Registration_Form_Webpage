

<?php

session_start();

$con = mysqli_connect('localhost','root','root');

mysqli_select_db($con, 'userregistration');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email']; 
$username = $_POST['username'];
$pass = $_POST['password'];

$s = " select * from usertable where username = '$username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	 echo"  Username Is Already Taken"; 
}
else{
	$reg= " insert into usertable(firstname , lastname , gender , age , email , username , password) values('$firstname' , '$lastname' , '$gender' , '$age' , '$email' , '$username' , '$pass')";

	mysqli_query($con, $reg);
	echo" The Registration is Successful. 
	Please go back to login page";

}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Confirmation Page </title>
</head>
<body>
				
<a href="logout.php">Click Here</a> 
</div>
</body>
</html>

