<?php
session_start();
include'config.php';
$thislevel=2;
if(isset($_SESSION['user']))
{
	if(!isset($_GET['feedme']))
	{
		echo "<script>
		window.location = 'level2.php?feedme=';
		</script>";
		die();
	}
	
	$sql="SELECT level FROM user WHERE email='".$_SESSION['user']."'";
	$result=mysqli_query($con,$sql);
	$user_level=mysqli_result($result,0);
	$_SESSION['level'] = $user_level;

	include 'validate.php';

	if($_GET['feedme']=="more")
	{
		$sql="UPDATE user SET level=3,last_time='".date('Y-m-d H:i:s')."' WHERE email='".$_SESSION['user']."'";
		$result=mysqli_query($con,$sql);
		echo "<script>
		window.location = 'level3.php';
		</script>";
		die();
	}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Confrontation | Night Knitting</title>
    <?php include 'head.php'; ?>
</head>
<body>
	
	<div>
		<img class="quesImg" src="assets/images/img-2.jpg" margin="auto" >
	</div>
	 <div style="padding-top: 6rem; padding-left: 8rem; text-align: left;"><a href="home.php" style="font-size: 1.5rem; font-weight: bold; text-decoration: underline; position: fixed; bottom: 30;">Home.</a>
    </div>
    <div style="padding-top: 6rem; "><a href="home.php" style="font-size: 1.5rem; font-weight: bold; text-decoration: underline; position: fixed; bottom: 30; right: 132;">Leaderboard.</a>
 	</div>
	<script type="text/javascript">


		window.helpme = "Run !! HE is hungry.. fulfill his wishes or die to his WRATH !!";



		window.onload = function () {
			var imgElem = document.querySelector('.quesImg');
			setInterval(function() {
				imgElem.style.visibility = 'hidden';
			}, 300)
			setInterval(function() {
				imgElem.style.visibility = 'initial';
			}, 500)
		}
	</script>
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