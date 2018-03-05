<?php
session_start();
include 'config.php';
if(isset($_POST['login_username']))
{
	$login_email=mysqli_real_escape_string($con, $_POST['login_email']);
	$login_password=mysqli_real_escape_string($con, $_POST['login_password']);
    $sql="select id from user where email='".$login_email."'' && password='".md5($login_password)."'";
	$row=mysqli_query($con,$sql);
	if (!$row)
	{
		die('Error: ' . mysqli_error($con));
	}
    $num= mysqli_num_rows($row);
    if(num==1)
	{
		$sql="SELECT id FROM user WHERE email='".$login_email."'";
		$result=mysqli_query($con,$sql);
		$user_id=mysqli_result($result,0);
		
		$sql="SELECT level FROM userdetail WHERE id='".$user_id."'";
		$result=mysqli_query($con,$sql);
		$user_level=mysqli_result($result,0);

		$_SESSION['user']=$register_email;
		echo"<script type='text/javascript'>
		window.location.href='q".$user_level.".php';
		</script>";
		die();
	}
	else
	{
		echo"<script type='text/javascript'>
		alert('Invalid Login Password');
		</script>";
	}
}
if(isset($_POST['register_username']))
{
	$register_email=mysqli_real_escape_string($con, $_POST['register_email']);
	$register_password1=mysqli_real_escape_string($con, $_POST['register_password1']);
	$register_password2=mysqli_real_escape_string($con, $_POST['register_password2']);
	if($register_password1=="")
	{
		echo"<script type='text/javascript'>
		alert('Password can not be blank');
		</script>";
	}
	else if($register_password1!=$register_password12)
	{
		echo"<script type='text/javascript'>
		alert('Password do not match');
		</script>";
	}
	else if($register_email=="")
	{
		echo"<script type='text/javascript'>
		alert('Email can not be blank');
		</script>";
	}
	else if (!filter_var($register_email, FILTER_VALIDATE_EMAIL))
	{
		echo "<script type='text/javascript'>
		alert('You had entered an Invalid Email');
		</script>";
	}
	else
	{
		$sql = "SELECT * FROM user WHERE email='".$register_email."'";
		$result = mysqli_query($connection,$sql);
		$count = mysqli_num_rows($result);
		if ($count == 1)
		{
			echo "<script type='text/javascript'>
			alert('This Email is already registered with us');
			</script>";
		}
		else
		{
			$sql = "INSERT INTO user(`email`, `password`) VALUES ('" . $register_email . "','" . $register_password1 . "')";
			$result = mysqli_query($con,$sql);
			$sql = "INSERT INTO userdetail VALUES ('" . mysqli_insert_id($con) . "','1','" . date('Y-m-d H:i:s') . "','" . date('Y-m-d H:i:s') . "')";
			$result = mysqli_query($con,$sql);
			
			$_SESSION['user']=$register_email;
			echo"<script type='text/javascript'>
			window.location.href='rule.php';
			</script>";
			die();
		}
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
            <form class="register_form hidden" id="register_form" action="" method="POST">
                <input type="email" name="register_email" placeholder="Email" class="form_control_custom" required>
                <input type="password" name="register_password" placeholder="Password" class="form_control_custom" required>
                <input type="password" name="register_password2" placeholder="Confirm Password" class="form_control_custom" required>
                <button type="submit">Create</button>
                 <p class="message">Already Registered?<a href="#" id="msg1" style="font-size: 12px"> Login</a>
                 </p>
            </form>
            <form class="login_form" id="login_form" action="" method="POST">
                <input type="text" name="login_username" placeholder="Username" class="form_control_custom" required>
                <input type="password" name="login_password" placeholder="Password" class="form_control_custom" required>
                <button type="submit">LOGIN</button>
                <p class="message">Not Registered?<a href="#" id="msg" style="font-size: 12px">Register</a></p>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        document.getElementById("msg").addEventListener('click',function(){document.getElementById("register_form").classList.remove("hidden");document.getElementById("login_form").className += " hidden";});
        document.getElementById("msg1").addEventListener('click',function(){document.getElementById("login_form").classList.remove("hidden");document.getElementById("register_form").className += " hidden";});
    </script>
</body>
</html>

<?php
mysqli_close($con);
?>