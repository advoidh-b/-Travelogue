<?php
include('config.php');
if(isset($_POST['signup']))
{
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob']; 
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="INSERT INTO `tb_register` (`name`, `surname`, `gender`, `dob`, `email`, `password`) VALUES ('$name', '$surname', '$gender', '$dob', '$email', '$password')";
    if(mysqli_query($conn, $sql))
    {
        header("location:../signup.html"); 
    }
    else
    {
        echo "error".$sql."<br>".mysqli_error($conn);
    }
}
?>