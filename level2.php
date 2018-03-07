<?php
session_start();
include'config.php';
if(isset($_SESSION['user']))
{
	$sql="SELECT level FROM user WHERE email='".$_SESSION['user']."'";
	$result=mysqli_query($con,$sql);
	$user_level=mysqli_result($result,0);
	if($user_level!=2)
		die("Oops its level 2 but you are at level ".$user_level);

	if($_GET['room']=="darker")
	{
		$sql="UPDATE user SET level=3,last_time='".date('Y-m-d H:i:s')."' WHERE email='".$_SESSION['user']."'";
		$result=mysqli_query($con,$sql);
		echo "<script>
		window.location = 'level3.php?ans=';
		</script>";
		die();
	}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Can U See Me!.</title>
</head>
<body>
	<div>
		<img src="assets/images/img-2.jpg" margin="auto">
	</div>
	<h4></h4>
</body>
</html>
<?php
}
else
{
	echo"<script type='text/javascript'>
	window.location.href='login.php';
	</script>";
}
?>