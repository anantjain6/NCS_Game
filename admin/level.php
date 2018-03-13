<?php
include '../config.php';
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <?php include 'head.php'; ?>
</head>
<body>
	<div><img src="../assets/images/logo-full.png" margin="auto"></div>
	<h1>BE WARNED</h1>
	<div class="table-container">
	<h4>Leaderboard.</h4>
<table>
<?php
$query="SELECT level,count(level) as total FROM `user` group by level order by level";
$results = mysqli_query($con,$query);
while ($row = mysqli_fetch_array($results))
{
	echo '<tr>
	<td valign="middle">'.$row['level'].'</td>
	<td valign="middle">'.$row['total'].'</td>
	</tr>';
}
?>
</table>
</div>
</body>
</html>