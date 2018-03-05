<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>
	<div><img src="assets/images/logo-full.png" margin="auto"></div>
	<h1>Be Warned!.</h1>
	<div class="content"><h1>He awaits for you eagerly.<br>But it's not time yet.</h1></div>
  <div class="countdown"><a href="#" id="demo"></a>
	
</body>
<script type="text/javascript">
  var x = setInterval(function() {
  var d = new Date();
  var h = 19-d.getHours();
  var m = 60-d.getMinutes();
  var s = 60-d.getSeconds();
  document.getElementById("demo").innerHTML = h + ":"
  + m + ":" + s+" to go";
}, 1000);
</script>
</html>