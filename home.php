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
    <title>Night Knitting</title> 
    <?php include 'head.php'; ?>
</head>
<body class="bkgbody">
    <div><img src="assets/images/logo-full.png" margin="auto"></div>
    <h1>BE WARNED</h1>
    <div style="padding-top: 8rem"><a href="level<?php echo $user_level; ?>.php" style="font-size: 1.5rem; font-weight: bold; text-decoration: underline;"><?php
    if($user_level==0)
        echo "Start game.";
    else
        echo "Resume game.";
    ?></a>
    </div>
    <div style="padding-top: 1rem"><a href="rule.php" style="font-size: 1.5rem; font-weight: bold; text-decoration: underline;">Rules.</a>
    </div>
    <div style="padding-top: 1rem"><a href="https://youtu.be/OhP9Sp0JGL8" style="font-size: 1.5rem; font-weight: bold; text-decoration: underline;">How to play.</a>
    </div>
    <div style="padding-top: 1rem"><a href="leadboard.php" style="font-size: 1.5rem; font-weight: bold; text-decoration: underline;">Leaderboard.</a>
    </div>
    <div style="padding-top: 1rem"><a href="signout.php" style="font-size: 1.5rem; font-weight: bold; text-decoration: underline;">Sign out.</a>
    </div>
</body>
</html>
<!-- <a href="level1.php?lights=on"></a> -->
<?php
}
?>