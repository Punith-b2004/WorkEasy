<?php include("pumpkinconnection.php");
error_reporting(E_ERROR | E_PARSE);; ?>

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
			Order Details
		</div>
		<div class="form">
			<div class="input_field">
				<label> Name</label>
				<input type="text" class="input" name="name" required>
			</div>
			<div class="input_field">
				<label> Product ID=00002</label>
				<!-- <input type="text" class="input" name="productid" required> -->
			</div>

			<div class="input_field">
				<label>Contact number</label>
				<input type="text" class="input" name="contact" required>
			</div>
			
			<div class="input_field">
				<label>Address</label>
				<textarea class="textarea" name="address" required></textarea>
			</div>
			<div class="input_field">
				<label> Pincode</label>
				<input type="text" class="input" name="pincode" required>
			</div>
			<div class="input_field terms">
				<label class="check" >
				<input type="checkbox" > <span class="checkmark"></span></label>
				<a href="http://127.0.0.1: 5501/term.html"><p> Agree To Terms And Conditions</p></a>
			
			</div>
			<div class="input_field">
			  <input type="submit" value="go to payment" class="btn" name="register" onclick="openlink()" >
			<!--  <a href="http://localhost/crud/thank.php"> -->
				</div>
		
		<script >
			function submitform()
			{
				alert('Your Order is confirmed')
			}
				function openlink()
			{
				var linktoopen='http://localhost/crud/pumpkindisplay.php';
				window.open(linktoopen,'_blank');
			}
		
		</script>
		</form>
	</div>

</body>
</html>
<?php
  if($_POST['register'])
  {
  	$name    =$_POST['name'];
  	// $productid=$_POST['productid'];
  	$contact=$_POST['contact'];
  	$address =$_POST['address'];
  	$pincode =$_POST['pincode'];


  	// if($name !="" && $age !="" && $gen!="" && $lcn!="" && $phonenum!="" && $address!="" && $pincode!="")
  	// {

  	$query="INSERT INTO pumpform values('$name','$contact','$address','$pincode')";
  	$data=mysqli_query($conn,$query);
  	if($data)
  	{
  		echo "data inserted into database";
  	}
  	else
  	{
  		echo "failed";
  	}
  }
  // else{
  // 	echo "<script>alert('Fill the form first');</script>";
  // }



?>