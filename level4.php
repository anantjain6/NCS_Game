<?php
session_start();
include'config.php';
$thislevel=4;
if(isset($_SESSION['user']))
{
	
	$sql="SELECT level FROM user WHERE email='".$_SESSION['user']."'";
	$result=mysqli_query($con,$sql);
	$user_level=mysqli_result($result,0);

	include 'validate.php';

	if($_POST['ans']=="cemetry")
	{
		$sql="UPDATE user SET level=5,last_time='".date('Y-m-d H:i:s')."' WHERE email='".$_SESSION['user']."'";
		$result=mysqli_query($con,$sql);
		echo "<script>
		window.location = 'level5.php?ans=';
		</script>";
		die();
	}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Pursuit | Night Knitting</title>
    <?php include 'head.php'; ?>
</head>
<body>
	
	<div>
		<iframe src= "nothing.php" frameborder="0" allowTransparency="true" margin="auto">
		</iframe>
		<img src="assets/images/img-4.jpg" margin="auto">
	</div>
	<script type="text/javascript">
		window.helpme = "Why do u need help? It's nothing!";
	</script>
	<div class="input-type-answer">
		<form method="POST" action="">
			<input type="text" id="ans" name="ans">
			<button type="submit">Submit</button>
		</form>
	</div>
	<div style="padding-top: 6rem; padding-left: 8rem; text-align: left;"><a href="home.php" style="font-size: 1.5rem; font-weight: bold; text-decoration: underline; position: fixed; bottom: 30;">Home.</a>
    </div>
	<br>
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