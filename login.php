<?php
session_start();
include 'config.php';
if(isset($_POST['username']))
{
	$row=mysqli_query($con,"select id from user where username='".$_POST['username']."'' && binary password='".$_POST['password']."");
    $num= mysqli_num_rows($row);
    if(num==1){
	$_SESSION['user']=$_POST['password'];
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="POST" action="">
		<table>
			<tr><td>Username</td><td><input type="email" name="login_email" placeholder="Enter you email" required></td></tr>
			<tr><td>Password</td><td><input type="password" name="login_password" required></td></tr>
			<tr><td></td><td><input type="submit" name="login_submit"></td></tr>
		</table>

</form>

</body>
</html>

<?php
mysqli_close($con);
?>