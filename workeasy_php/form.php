<?php
session_start();

 ?>
<?php include("connection.php"); 
error_reporting(E_ERROR | E_PARSE);?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>php crud</title>
	<link rel="stylesheet" type="text/css" href="s.css">
</head>
<body>
	<div class="container">
		<form action="#" method="POST">
		<div class="title">
			Registration form
		</div>
		<div class="form">
			<div class="input_field">
				<label> Name</label>
				<input type="text" class="input" name="name" >
			</div>
			<div class="input_field">
				<label>Age</label>
				<input type="text" class="input" name="age" >
			</div>
			<div class="input_field">
				<label>gender</label>
				<div class="customselect">
				<select name="gen"  >
					<option value="">select</option>
					<option value="Male">male</option>
					<option value="Female">female</option>
				</select>
			</div>
			</div>
			
			<div class="input_field">
				<label>Labour Card Number</label>
				<input type="text" class="input" name="lcd" >

			</div>
			
			<div class="input_field">
				<label>phone number</label>
				<input type="text" class="input" name="phonenum" >
			</div>
			<div class="input_field">
				<label>skills</label>
				<input type="text" class="input" name="skills" >
			</div>
			<div class="input_field">
				<label>address</label>
				<textarea class="textarea" name="address"></textarea>
			</div>
			<div class="input_field">
				<label> Pincode</label>
				<input type="text" class="input" name="pincode">
			</div>
			<div class="input_field terms">
				<label class="check" >
				<input type="checkbox" > <span class="checkmark" ></span></label>
				<a href="http://127.0.0.1:5501/term.html"><p> Agree To Terms And Conditions</p></a>
			
			</div>
			<div class="input_field">
				
			  <input type="submit" value="register" class="btn" name="reg">
			  
			 
			<!--  <a href="http://localhost/crud/thank.php"> -->
				</div>
		</div>
		<script >
			// function submitform()
			// {
			// 	alert('Apllication Submitted')
			// }
			// function openlink()
			// {
			// 	var linktoopen='http://localhost/crud/thank.php';
			// 	window.open(linktoopen,'_blank');
			// }
		</script>
		</form>
	</div>

</body>
</html>
<?php
$userprofile=$_SESSION['username'];
if($userprofile==true)
{

}
else
{
	header('location:login.php');
}

  if($_POST['reg'])
  {
  	$name    =$_POST['name'];
  	$age     =$_POST['age'];
  	$gen     =$_POST['gen'];
  	$lcd    =$_POST['lcd'];
  	$phonenum=$_POST['phonenum'];
  	$skills=$_POST['skills'];
  	$address =$_POST['address'];
  	$pincode =$_POST['pincode'];


  	if($name !="" && $age !="" && $gen!="" && $lcd!="" && $phonenum!="" && $address!="" && $pincode!="")
  	{
		$check_query = "SELECT * FROM form WHERE lcd = '$lcd'";
		$check_result = mysqli_query($conn, $check_query);

		if(mysqli_num_rows($check_result) > 0) {
			echo "<script>alert('Labour already exists');</script>";
		} else {

  	$query="INSERT INTO form values('$name','$age','$gen','$lcd','$phonenum','$skills','$address','$pincode')";
  	$data=mysqli_query($conn,$query);
  	if($data)
  	{
		header("Location:successful3.php");
  	}
  	else
  	{
  		echo "failed";
  	}
  }
	}
  else{
  	echo "<script>alert('Fill the form first');</script>";
  }
}



?>