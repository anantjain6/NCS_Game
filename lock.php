<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
    <?php include 'head.php'; ?>
</head>
<body>
	<div><img src="assets/images/logo-full.png" margin="auto"></div>
	<h1>BE WARNED</h1>
	<div class="content"><h1>HE awaits for you eagerly.<br>But it's not time yet.</h1></div>
  <div class="countdown"><a href="#" id="demo" style="font-size: 6rem; font-weight: bold;"></a>
     <div style="padding-top: 7rem; padding-left: 8rem; text-align: left;"><a href="home.php" style="font-size: 1.5rem; font-weight: bold; text-decoration: underline;">Home.</a>
    </div>
	
</body>
<script type="text/javascript">
  var x = setInterval(function() {
  var d = new Date();
  var h = 19-d.getHours();
  var m = 60-d.getMinutes();
  var s = 60-d.getSeconds();
  if(h==0&&m==0&&s==0)
    window.location = '/'
  else
  document.getElementById("demo").innerHTML = h + ":"
  + m + ":" + s;
}, 1000);
</script>
</html>