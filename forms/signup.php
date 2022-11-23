<?php 
session_start();

	include("../php/connection.php");
	include("../php/functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,email,password) values ('$user_id','$user_name','$email','$password')";

			mysqli_query($con, $query);

			header("Location: http://localhost/travelogue/forms/login.php");
			
		}else
		{
			echo "<script>alert('Error: Invalid Details. Please retry.');</script>";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="Advoidh Biju (Adwaith-B, Advoidh-B)">

    <title>Sign up - Travelogue</title>

    <link rel="stylesheet" href="../css/signup.css">

    <link rel="icon" type="image/x-icon" href="./images/dp/logo.png">

    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400&family=Space+Grotesk&display=swap" rel="stylesheet">
  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    
        <div class="form-cont">
            <div class="form-title">
                <h2 class="form-title-h">
                    Let's get Started!
                </h2>
            </div>

            <form method="post" class="signup" onsubmit="return validateForms()">

                <label for="username" >Username</label>
                <input type="text" name="user_name" id="username" required>

                <label for="email" >Email</label>
                <input type="email" name="email" id="email" required>

                <label for="password" >Password</label>
                <input type="password" min="6" name="password" id="password" required>
                
                <button type="submit" class="create-acc-btn" value="" name="signup" id="button">
                    Create Account
                </button>
                <p id="log"></p>
            </form>

            <div class="login">
                <p>Existing User?</p>
                <a href="login.php" class="login-btn">Log In</a>
            </div>

        </div>
    <script type="text/javascript">

        function validateForms() { 
            let username = document.getElementsByName('user_name')[0].value,
                email = document.getElementsByName('email')[0].value,
                password = document.getElementsByName('password')[0].value,
                logp = document.getElementById('log');

            let ip_array = [user_name, email, password];

            for(i of ip_array)  {
                if(i =="" || i == "null" || i == "undefined") {
                    
                    logp.textContent = "Please fill out the above fields";
                    return false;
                }
            }
        }
    </script>
</body>
</html>