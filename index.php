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
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title></title> 
    <?php include 'head.php'; ?>
</head>
<body class="bkgbody">
    <div><img src="assets/images/logo-full.png" margin="auto"></div>
    <h1>BE WARNED</h1>
    <div style="padding-top: 12rem;"><h2>Tread carefully on the path you choose.<br>He is waiting for the ones who lose.</h2></div>
    <div><a href="<?php echo filter_var($authUrl, FILTER_SANITIZE_URL); ?>" style="font-size: 1.5rem; font-weight: bold; text-decoration: underline;">Sign in with Google.</a></div>
</body>
</html>