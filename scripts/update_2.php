<?php

$t_conn = new mysqli('localhost', 'root', '', 'travelogue');

if(isset($_POST['up_btn'])) {

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$uq = "update users set id='$id', user_name='$username', email='$email', password='$password' ";

if($t_conn->query($uq)) {
  echo "Record Updated";
}
else {
  echo "Up falied";
}
} 