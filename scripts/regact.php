<?php

include('config.php');

if (isset($_POST['signup'])) { //the button
    $name=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="INSERT INTO `tb_register` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";

    if(mysqli_query($conn, $sql)) {
        header("location:../forms/signup.html");
    }
    else
    {
        echo mysqli_error($conn);
    }

}

?>