<?php
include 'config.php';
//Include GP config file && User class
include_once 'gpConfig.php';

if(isset($_SESSION['user']))
{
	$sql="SELECT level FROM user WHERE email='".$_SESSION['user']."'";
	$result=mysqli_query($con,$sql);
	$user_level=mysqli_result($result,0);
	
	echo"<script type='text/javascript'>
	window.location.href='level".$user_level.".php';
	</script>";
	die();
}
$authUrl = $gClient->createAuthUrl();
?>
<a href="<?php echo filter_var($authUrl, FILTER_SANITIZE_URL); ?>">
	<img src="assets/images/glogin.png" alt=""/>
</a>