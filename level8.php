<?php
session_start();
include'config.php';
$thislevel=6;
if(isset($_SESSION['user']))
{

	$sql="SELECT level FROM user WHERE email='".$_SESSION['user']."'";
	$result=mysqli_query($con,$sql);
	$user_level=mysqli_result($result,0);

	include 'validate.php';

	if($_POST['answer']=="lucifer")
	{
		$sql="UPDATE user SET level=9,last_time='".date('Y-m-d H:i:s')."' WHERE email='".$_SESSION['user']."'";
		$result=mysqli_query($con,$sql);
		echo "<script>
		window.location = 'level9.php';
		</script>";
		die();
	}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Encounter | Night Knitting</title>
    <?php include 'head.php'; ?>
</head>
<body>
	
	<div>
		<img src="assets/images/img-8.jpg" margin="auto">
	</div>
	<script type="text/javascript">
		window.helpme ="Answer me first! What is X+Y";
		window.X = "Perfect";
		window.what_is_X= "Perfect";
		window.Y = "Vision";
		window.what_is_Y = "Vision";
		window.PerfectVision = "Well you need that to solve this one!"; 
	</script>
	<div class="input-type-answer">
		<form method="POST" action="">
			<input type="text" id="ans" name="answer">
			<button type="submit">Submit</button>
    </form>
</div>
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