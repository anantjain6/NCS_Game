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

	if($_POST['answer']=="hornburg")
	{
		$sql="UPDATE user SET level=7,last_time='".date('Y-m-d H:i:s')."' WHERE email='".$_SESSION['user']."'";
		$result=mysqli_query($con,$sql);
		echo "<script>
		window.location = 'level7.php?iam=afraid';
		</script>";
		die();
	}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
    <?php include 'head.php'; ?>
</head>
<body>
	
	<div>
		<img src="assets/images/img-6.jpg" margin="auto">
	</div>
	<div class="input-type-answer">
		<form method="POST" action="">
			<input type="text" id="ans" name="answer">
			<button type="submit">Submit</button>
    	</form>
	</div>
	<script type="text/javascript">
		window.helpme = "What question is it?";
	</script>
	 <div style="padding-top: 7rem; padding-left: 8rem; text-align: left;"><a href="home.php" style="font-size: 1.5rem; font-weight: bold; text-decoration: underline;">Home.</a>
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