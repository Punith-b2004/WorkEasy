<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="lo.css">
	<title></title>
</head>
<body>
	<div class="center" >
		<h1> Hierer Login</h1>
		<form action="#" method="POST" autocomplete="off">
		<div class="form">
			<input type="text" name="username" class="textfield" placeholder="Username">
			<input type="password" name="password" class="textfield" placeholder="Password">
			<div class="forgetpass">
				<a href="#" class="link" onclick="message()" > Forgot Password</a>

				
			</div>
			<input type="submit" name="login" value="Login" class="btn">

		</div>
		<div class="signup">New Member ? <a href="form4.php" class="link"> Signup</a></div>
	</div>
	</form>
	<script>
		function message()
		{
			alert("try to remember!");
		}
	</script>

</body>
</html>
<?php
	include("connection4.php");
	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$query=" SELECT * FROM l2form WHERE email='$username' && password='$password'";
		$data=mysqli_query($conn,$query);
		$total=mysqli_num_rows($data);
		//echo $total;
		if($total==1)
		{
			$_SESSION['username']=$username;
			// echo "login ok";
			header('location:http://127.0.0.1:5501/index3.html');

		}
		else
		{
			echo "<script>alert('Failed to login');</script>";
		}
	}




?>
