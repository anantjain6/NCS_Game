<?php
include 'config.php';
?>
<html>
<head>
	<title>Leaderboard | Night Knitting</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <?php include 'head.php'; ?>
</head>
<body>
	<div><img src="assets/images/logo-full.png" margin="auto"></div>
	<h1>BE WARNED</h1>
	<div class="table-container">
	<h4>Leaderboard.</h4>
<table>
<?php
$query="select name,email,pic,level from user order by level desc,last_time";
$results = mysqli_query($con,$query);
while ($row = mysqli_fetch_array($results))
{
	echo '<tr>
	<td valign="middle"><img src="'.$row['pic'].'" width="50" height="50"></td>
	<td valign="middle">'.$row['name'].'</td>
	<td valign="middle">'.$row['email'].'</td>
	<td valign="middle">'.$row['level'].'0</td>
	</tr>';
}
?>
</table>
</div>
</body>
</html>