<?php
session_start();
include'config.php';
$thislevel=2;
if(isset($_SESSION['user']))
{
	if(!isset($_GET['iam']))
	{
		echo "<script>
		window.location = 'level7.php?iam=afraid';
		</script>";
		die();
	}
	
	$sql="SELECT level FROM user WHERE email='".$_SESSION['user']."'";
	$result=mysqli_query($con,$sql);
	$user_level=mysqli_result($result,0);
	$_SESSION['level'] = $user_level;

	include 'validate.php';
	// include 'country.php';
	// if($ipdata['country'] !== "America"){
	// 	echo "<script>"
	// 	window.location = 'changecountry.php';
	// 	</script>;
	// 	die();
	// }

	if($_GET['iam']=="notafraid")
	{
		$sql="UPDATE user SET level=8,last_time='".date('Y-m-d H:i:s')."' WHERE email='".$_SESSION['user']."'";
		$result=mysqli_query($con,$sql);
		echo "<script>
		window.location = 'level8.php';
		</script>";
		die();
	}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Overcast | Night Knitting</title>
    <?php include 'head.php'; ?>
</head>
<body>
	
	<div>
		<img src="assets/images/img-7.jpg" margin="auto">
	</div>
	<script type="text/javascript">
		window.helpme = "https://goo.gl/vwjnAu";
	</script>
	<div style="padding-top: 6rem; padding-left: 8rem; text-align: left;"><a href="home.php" style="font-size: 1.5rem; font-weight: bold; text-decoration: underline; position: fixed; bottom: 30;">Home.</a>
    </div>
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