<?php
session_start();
include'config.php';
$thislevel=5;
if(isset($_SESSION['user']))
{
	if(!isset($_GET['ans']))
	{
		echo "<script>
		window.location = 'level5.php?ans=';
		</script>";
		die();
	}
	$sql="SELECT level FROM user WHERE email='".$_SESSION['user']."'";
	$result=mysqli_query($con,$sql);
	$user_level=mysqli_result($result,0);

	include 'validate.php';
	if($_GET['ans']=="11bx1371")
	{
		$sql="UPDATE user SET level=6,last_time='".date('Y-m-d H:i:s')."' WHERE email='".$_SESSION['user']."'";
		$result=mysqli_query($con,$sql);
		echo "<script>
		window.location = 'level6.php';
		</script>";
		die();
	}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Watch what follows</title>
    <?php include 'head.php'; ?>
</head>
<body>
	
	<div>
		<img src="assets/images/ishouldntbehere.jpg" margin="auto">
	</div>
	<script type="text/javascript">
		window.helpme = "Don't I scare you?";
		window.yes = "Then don't come to me";
		window.no = "Fine.. I will help you on this one. You are missing something..";
		window.sorry = "Ok fine.. You are missing something..";
	</script>
	 <div style="padding-top: 7rem; padding-left: 8rem; text-align: left;"><a href="home.php" style="font-size: 1.5rem; font-weight: bold; text-decoration: underline;">Home.</a>
    </div>
	<h4></h4>
</body>
</html>
<?php
}
else
{
	echo"<script type='text/javascript'>
	window.location.href='index.php';
	</script>";
}
?>