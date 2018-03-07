<?php
include '../config.php';
$query = "select * from link_cat where id in (select distinct categury from insta where status='enable') order by categury";
?>

<table border="1">
<tr>
	<td>Pic</td>
	<td>Name</td>
	<td>Email</td>
	<td>Current Level</td>
	<td>Time taken (in Sec.)</td>
</tr>
<?php
$query="select name,email,pic,level,TIMESTAMPDIFF(SECOND, reg_time, last_time) as timetaken from user order by level desc,timetaken";
$results = mysqli_query($con,$query);
while ($row = mysqli_fetch_array($results))
{
	echo '<tr>
	<td><img src="'.$row['pic'].'" width="50" height="50"></td>
	<td>'.$row['name'].'</td>
	<td>'.$row['email'].'</td>
	<td>'.$row['level'].'</td>
	<td>'.$row['timetaken'].'</td>
	</tr>';
}
?>
</table>