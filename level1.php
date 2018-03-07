<html>
<head>
	    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>
	<div>
        <img id="level1img" src="assets/images/img-1.jpg" usemap="#map" margin="auto">
    </div>
    <map name="map">
        <area shape="rect" coords="130,335,175,375" href="#" onclick="toggleLights(event)"> 
    </map>
	<script type="text/javascript">
		window.helpme = "Turn off the lights";
		var imgElem = document.getElementById('level1img');
		function toggleLights(event) {
			event.preventDefault();
			imgElem.src = 'assets/images/img-2.jpg'
			setTimeout(function() {
				window.location = 'level2.php?room=';
			}, 1500);
		}
	</script>
</body>
</html>