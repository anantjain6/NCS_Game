<?php
session_start();
include'config.php';
$thislevel=1;
if(isset($_SESSION['user']))
{
	if(!isset($_GET['lights']))
	{
		echo "<script>
		window.location = 'level1.php?lights=on';
		</script>";
		die();
	}
	$sql="SELECT level FROM user WHERE email='".$_SESSION['user']."'";
	$result=mysqli_query($con,$sql);
	$user_level=mysqli_result($result,0);

	include 'validate.php';

	if($_GET['lights']=="off")
	{
		$sql="UPDATE user SET level=2,last_time='".date('Y-m-d H:i:s')."' WHERE email='".$_SESSION['user']."'";
		$result=mysqli_query($con,$sql);
		echo "<script>
		window.location = 'level2.php?feedme=';
		</script>";
		die();
	}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Rebirth | Night Knitting</title>
    <?php include 'head.php'; ?>
</head>
<body>
	
	<div>
        <img id="level1img" src="assets/images/img-1.jpg" usemap="#map" margin="auto">
    </div>
    <map name="map">
        <area shape="rect" coords="130,335,175,375" href="#" onclick="toggleLights(event)"> 
    </map>
    <div style="padding-top: 6rem; padding-left: 8rem; text-align: left;"><a href="home.php" style="font-size: 1.5rem; font-weight: bold; text-decoration: underline; position: fixed; bottom: 30;">Home.</a>
    </div>
	<script type="text/javascript">
		window.helpme = "It's too bright here! Ryuk hates Light";
		var imgElem = document.getElementById('level1img');
		function toggleLights(event) {
			event.preventDefault();
			imgElem.src = 'assets/images/img-1-dark.jpg'
			setTimeout(function() {
				window.location = 'level1_validate.php';
			}, 1000);
		}
	</script
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