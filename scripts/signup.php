<?php
 include("config.php");
 
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    /* use pre-declared vars from config.php (exclude database name) */
    $conn = new mysqli($sql_servername, $sql_user, $sql_password, 'user_creden');

    if($conn->connect_error) {
        echo "connect err";
    }
    else
    {
        $squery = ("insert into tb_user (fullname, username, email, password) values ('$fullname','$username','$email','$password')");

        if($conn->query($squery)) {
            echo "<h1 style='text-align: center; color: #666; margin-top: 50pt; font-family: sans-serif;'>Welcome, $fullname</h1>";

            echo "
            <a href='http://localhost/travelogue/home.html' style='background-color: #05445e; text-decoration: none; padding: 0.8rem; display: block; margin: 50pt auto; color: #fff; width: 30%; text-align: center; font-family: sans-serif; letter-spacing: 1.2px;'>
            Go to Homepage</a>";
        }
        else {
            echo "Error:  ".$conn->error;
        }

    $conn->close();
    }

?>