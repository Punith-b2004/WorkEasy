<?php include("connection4.php"); 
error_reporting(E_ERROR | E_PARSE);
?>

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
        <form action="#" method="POST" onsubmit="return validateForm()">
        <div class="title">
             HIERER SIGN UP
        </div>
        <div class="form">
            <div class="input_field">
                <label> Name</label>
                <input type="text" class="input" name="name">
            </div>
            <div class="input_field">
                <label>Email</label>
                <input type="text" class="input" name="email">
            </div>
        
            
            <div class="input_field">
                <label>Password</label>
                <input type="Password" class="Password" name="password">
            </div>
            
            <div class="input_field">
                <label>Confirm Password</label>
                <input type="text" class="Password" name="conpassword">
            </div>
            
            <div class="input_field terms">
                <label class="check">
                <input type="checkbox"> <span class="checkmark"></span></label>
				<a href="http://127.0.0.1:5501/term.html"><p> Agree To Terms And Conditions</p></a>
            
            </div>
            <div class="input_field">
                
              <input type="submit" value="SIGNUP" class="btn" name="sign">
              
             
             <!-- <a href="login2.php"> -->
                </div>
        </div>
        </form>
    </div>

<script>
function validateForm() {
    var name = document.forms[0]["name"].value;
    var email = document.forms[0]["email"].value;
    var pass = document.forms[0]["password"].value;
    var conpass = document.forms[0]["conpassword"].value;

    if (name == "" || email == "" || pass == "" || conpass == "") {
        alert("All fields must be filled out");
        return false;
    }
}
</script>

</body>
</html>

<?php
 if(isset($_POST['sign'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$conpass = $_POST['conpassword'];

	if(!empty($name) && !empty($email) && !empty($pass) && !empty($conpass)) {
		// Check if email already exists
		$check_query = "SELECT * FROM l2form WHERE email = '$email'";
		$check_result = mysqli_query($conn, $check_query);

		if(mysqli_num_rows($check_result) > 0) {
			echo "<script>alert('Email already exists. Please choose a different email.');</script>";
		} else {
			// Email does not exist, proceed with insertion
			$query = "INSERT INTO l2form (name, email, password, conpassword) VALUES ('$name', '$email', '$pass', '$conpass')";
			$data = mysqli_query($conn, $query);
			if($data) {
				echo "<script>alert('Data inserted into database');</script>";
				header("Location:successful2.php");
				exit();
			} else {
				echo "<script>alert('Failed to insert data');</script>";
			}
		}
	} else {
		echo "<script>alert('Fill the form first');</script>";
	}
}
?>