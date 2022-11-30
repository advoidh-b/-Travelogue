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

/* +++++++++++ BOOKINGS +++++++++++ */
if(isset($_POST['up_btn_g'])) {

  $gid = $_POST['gid'];
  $gloc = $_POST['gloc'];
  $ghot = $_POST['ghot'];
  $gserv = $_POST['gserv'];
  $gtype = $_POST['gtype'];
  $gstatus = $_POST['gstatus'];
  
  $uq = "update bookings set location='$gloc', hotel='$ghot', service='$serv', type='$gtype', status='$gstatus' where id='$gid' ";
  
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