<?php
session_start();
include'config.php';
$thislevel=3;
if(isset($_SESSION['user']))
{

	$sql="SELECT level FROM user WHERE email='".$_SESSION['user']."'";
	$result=mysqli_query($con,$sql);
	$user_level=mysqli_result($result,0);

	include 'validate.php';

	if($_POST['answer']=="evilcorp")
	{
		$sql="UPDATE user SET level=13,last_time='".date('Y-m-d H:i:s')."' WHERE email='".$_SESSION['user']."'";
		$result=mysqli_query($con,$sql);
		echo "<script>
		window.location = 'level13.php';
		</script>";
		die();
	}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Dealings | Night Knitting</title>
    <?php include 'head.php'; ?>
</head>
<body>
	
	<div>
		<img src="assets/images/img-3-notfound.jpg" margin="auto">
	</div>
	<script type="text/javascript">
		console.log("Oh shit! HE has found us here. I can't help you now ");
		window.helpme = "Be quite he is listening us!"
	</script>
	<form method="POST" action="">
		<input type="text" id="ans" name="answer">
		<button type="submit" name="submit">Submit</button>
    </form>
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