<?php
session_start();
include 'config.php';
if(isset($_POST['username']))
{
	$row=mysqli_query($con,"select id from user where username='".$_POST['username']."'' && binary password='".$_POST['password']."");
    $num= mysqli_num_rows($row);
    if(num==1){
	$_SESSION['user']=$_POST['password'];
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Login</title>
</head>
<body>
    <div class="login_page">
    	<div class="form">
    		<form class="register_form hidden" id="register_form">
    			<input type="text" name="login_username" placeholder="Username">
    			<input type="text" name="login_password" placeholder="Password">
    			<input type="text" name="login_email" placeholder="Email">
    			<button>Create</button>
                 <p class="message">Already Registered?<a href="#"> Login</a>
                 </p>
    		</form>
            <form class="login_form" id="login_form">
                <input type="text" name="login_username" placeholder="Username">
                <input type="password" name="login_password" placeholder="Password">
                <button>login</button>
                <p class="message">Not Registered?<a href="#" id="msg">Register</a></p>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        document.getElementById("msg").addEventListener('click',function(){document.getElementById("register_form").classList.remove("hidden");document.getElementById("login_form").className += " hidden";});
    </script>
</body>
</html>

<?php
mysqli_close($con);
?>