<?php
include 'config.php';
include_once 'gpConfig.php';

if(isset($_GET['code']))
{
	$gClient->authenticate($_GET['code']);
	$gClient->setAccessToken($gClient->getAccessToken());
	//Get user profile data from google
	$gpUserProfile = $google_oauthV2->userinfo->get();
	
	$sql = "SELECT * FROM user WHERE email='".$gpUserProfile['email']."'";
	$result = mysqli_query($con,$sql);
	$count = mysqli_num_rows($result);
	if ($count == 1)
	{
		$sql="SELECT level FROM user WHERE email='".$gpUserProfile['email']."'";
		$result=mysqli_query($con,$sql);
		$user_level=mysqli_result($result,0);

		$_SESSION['user']=$gpUserProfile['email'];
		echo"<script type='text/javascript'>
		window.location.href='level".$user_level.".php';
		</script>";
	}
	else
	{
		$sql="INSERT INTO user VALUES (
		'".$gpUserProfile['given_name']." ".$gpUserProfile['family_name']."'
		,'".$gpUserProfile['email']."'
		,'".$gpUserProfile['picture']."'
		,'1'
		,'".date('Y-m-d H:i:s')."'
		,'".date('Y-m-d H:i:s')."'
		)";
		$result = mysqli_query($con,$sql);
		
		$_SESSION['user']=$gpUserProfile['email'];
		echo"<script type='text/javascript'>
		window.location.href='rule.php';
		</script>";
	}
}

?>