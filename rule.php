<?php
include 'config.php';
//Include GP config file && User class
include_once 'gpConfig.php';

if(isset($_SESSION['user']))
{
    $sql="SELECT level FROM user WHERE email='".$_SESSION['user']."'";
    $result=mysqli_query($con,$sql);
    $user_level=mysqli_result($result,0);
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
    <div style="padding-top: 8rem"><h1 style="font-size: 1.5rem; font-weight: bold; text-decoration: underline;">
   </a>
    </div>
    <div style="padding-top: 1rem"><a href="" style="font-size: 1.5rem; font-weight: bold; text-decoration: underline;">Rules.</a>
    </div>
    <div style="padding-top: 1rem"><a href="" style="font-size: 1.5rem; font-weight: bold; text-decoration: underline;">Leaderboard.</a>
    </div>
    <div style="padding-top: 1rem"><a href="" style="font-size: 1.5rem; font-weight: bold; text-decoration: underline;">Sign out.</a>
    </div>
</body>
</html>
<!-- <a href="level1.php?lights=on"></a> -->
<?php
}
?>