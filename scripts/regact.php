<?php

include('config.php');

if (isset($_POST['signup'])) { //the button
    $name=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    

    if($conn->connect_error) {
        echo "connect err";
    }
    else
    {
    $sql="INSERT INTO `tb_register` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
    }

}

?>