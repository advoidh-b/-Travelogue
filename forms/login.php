<?php 

session_start();

	include("../php/connection.php");
	include("../php/functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: http://localhost/travelogue/home.php");
						die;
                        
					}
                 
				}
			}

            

			echo "<script>alert('Error: Incorrect Credentials');</script>";
		}else
		{
			echo "<script>alert('Wrong Username or Password');</script>";
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

    <title>Log In - Travelogue</title>

    <link rel="stylesheet" href="../css/signup.css">

    <link rel="icon" type="image/x-icon" href="./images/dp/logo.png">

    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400&family=Space+Grotesk&display=swap" rel="stylesheet">
  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    
        <div class="form-cont">
            <div class="form-title">
                <h2 class="form-title-h">
                    Log in to Account
                </h2>
            </div>

            <form method="post" class="signup" onsubmit="return validateForms()">

                <label for="username" >Username</label>
                <input type="text" name="user_name" id="username">

         

                <label for="password" >Password</label>
                <input type="password" min="6" name="password" id="password">
                
                <button type="submit" class="create-acc-btn" value="" name="signup" id="button">
                    Login to Account
                </button>
                <p id="log"></p>
            </form>

            <div class="login">
                <p>New User?</p>
                <a href="signup.php" class="login-btn">Create Account</a>
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