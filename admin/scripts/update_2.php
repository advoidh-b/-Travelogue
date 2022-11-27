<?php

$conn_up = new mysqli('localhost', 'root', '', 'travelogue');

if(isset($_POST['up_btn'])) {

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$uq = "update users set user_name='$username', email='$email', password='$password' where id ='$id' ";

if($conn_up->query($uq)) {
  echo "Record Updated";
  header("Location: ../adminPanel.php");
  
}
else {
  echo "Failed";
  echo $conn_up->error;
}
} 
?>