<?php
session_start();
include'config.php';
if(isset($_SESSION['user']))
{
	$sql="SELECT level FROM user WHERE email='".$_SESSION['user']."'";
	$result=mysqli_query($con,$sql);
	$user_level=mysqli_result($result,0);
	if($user_level!=1)
		die("Oops its level 1 but you are at level ".$user_level);
?>
<html>
<head>
	    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>
	<div>
        <img id="level1img" src="assets/images/img-1.jpg" usemap="#map" margin="auto">
    </div>
    <map name="map">
        <area shape="rect" coords="130,335,175,375" href="#" onclick="toggleLights(event)"> 
    </map>
	<script type="text/javascript">
		window.helpme = "Turn off the lights";
		var imgElem = document.getElementById('level1img');
		function toggleLights(event) {
			event.preventDefault();
			imgElem.src = 'assets/images/img-2.jpg'
			setTimeout(function() {
				window.location = 'level1_validate.php';
			}, 1500);
		}
	</script>
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