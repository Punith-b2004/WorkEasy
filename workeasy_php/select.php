<?php include("connection2.php"); 
error_reporting(0);?>

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
			SELECTING THE LABOUR
		</div>
		<div class="form">
			<div class="input_field">
				<label> lcn of labour</label>
				<input type="text" class="input" name="lcn">
			</div>
			<div class="input_field">
				<label> Domain</label>
				<input type="text" class="input" name="domain">
			</div>
			<div class="input_field">
				<label>salary</label>
				<input type="text" class="input" name="salary" >
			</div>
			
			
			<div class="input_field">
				<label>place of work</label>
				<input type="text" class="input" name="place" >

			</div>
			<div class="input_field">
				<label>Contact number </label>
				<input type="text" class="input" name="contact" >

			</div>
			
			
			<div class="input_field">
			  <input type="submit" value="select" class="btn" name="register"  >
				</div>
		</div>
		
		</form>
	</div>

</body>
</html>
<?php
  if($_POST['register'])
  {
  	$lcn       =$_POST['lcn'];
  	$domain    =$_POST['domain'];
  	$salary    =$_POST['salary'];
  	$place    =$_POST['place'];
  	$contact   =$_POST['contact'];
  	

  	if($domain !="" && $salary !="" && $place!="" && $contact!="" && $lcn!="" )
    {

  	$query="INSERT INTO sform values('$domain','$salary','$place','$contact','$lcn')";
  	$data=mysqli_query($conn,$query);
  	if($data)
  	{
  		echo "data inserted into database";
		  header("Location:successful4.php");
  	}
  	else
  	{
  		echo "failed";
  	}
}
	else
	{
		echo "<script>alert('Fill the form first');</script>";
	

	}
  }