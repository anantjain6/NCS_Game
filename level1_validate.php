<?php
session_start();
include'config.php';
if(isset($_SESSION['user']))
{
	$sql="SELECT level FROM user WHERE email='".$_SESSION['user']."'";
	$result=mysqli_query($con,$sql);
	$user_level=mysqli_result($result,0);
	// if($user_level!=1)
	// 	die("Oops its level 1 but you are at level ".$user_level);
	
	if (strpos($_SERVER["HTTP_REFERER"], 'level1.php') !== false)
	{
		$sql="UPDATE user SET level=2,last_time='".date('Y-m-d H:i:s')."' WHERE email='".$_SESSION['user']."'";
		$result=mysqli_query($con,$sql);
		echo "<script>
		window.location = 'level2.php?feedme=';
		</script>";
	}
	else
	{
		echo "Don't try to be over smart.";
	}
}
else
{
	echo"<script type='text/javascript'>
	window.location.href='index.php';
	</script>";
}
?>