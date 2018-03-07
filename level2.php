<?php
include 'config.php';
if($_GET['room']=="darker")
{
	echo "<script>
	window.location = 'level3.php';
	</script>";
}
if (strpos($_SERVER["HTTP_REFERER"], 'level1.php') !== false)
{
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Can U See Me!.</title>
</head>
<body>
	<div>
		<img src="assets/images/img-2.jpg" margin="auto">
	</div>
	<h4></h4>
</body>
</html>
<?php
}
else
{
	echo "Don't be oversmart :P";
}
?>