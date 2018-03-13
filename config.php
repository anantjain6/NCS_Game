<?php
error_reporting(E_ERROR | E_PARSE);

$con=mysqli_connect("localhost","root","","ncs_game");
if(mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

date_default_timezone_set('Asia/Kolkata');
$current_time=date('Hi');
$lockStart=800;
$lockEnd=2000;
if($lockStart < $current_time && $current_time < $lockEnd)
{
	// include 'lock.php';
	// die();
}

require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
if($detect->isMobile())
{
    echo "<script>
    alert('He mocks at the puny devices humans operate.
It makes them an easier target.');
    </script>";
	die();
}

function mysqli_result($res,$row=0,$col=0)
{ 
    $numrows = mysqli_num_rows($res); 
    if ($numrows && $row <= ($numrows-1) && $row >=0){
        mysqli_data_seek($res,$row);
        $resrow = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
        if (isset($resrow[$col])){
            return $resrow[$col];
        }
    }
    return false;
}
?>


<audio volume="0.05" loop autoplay>
  <source src="assets/audio/shinigami.mp3">
</audio>