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
if(isset($_POST['up_btn_b'])) {

  $id = $_POST['id'];
  $username = $_POST['username'];
  $dest = $_POST['dest'];
  $hot = $_POST['hot'];
  $serv = $_POST['serv'];
  $vdate = $_POST['vdate'];
  $refid = $_POST['refid'];
  
  $uq = "update bookings set destination='$dest', hotel='$hot', service='$serv', vis_date='$vdate', refid='$refid' where id='$id' ";
  
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