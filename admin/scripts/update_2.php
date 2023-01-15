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

  /* +++++++++++ Bookings +++++++++++ */
if(isset($_POST['up_btn_b'])) {

  $id = $_POST['id'];
  $destination = $_POST['dest'];
  $hot = $_POST['hot'];
  $serv = $_POST['serv'];
  $vdate = $_POST['vdate'];
  $refid = $_POST['refid'];
  
  $uq_b = "update bookings set destination='$destination', hotel='$hot', service='$serv', vis_date='$vdate', refid='$refid' where id='$id' ";
  
  if($conn_up->query($uq_b)) {
    echo "Record Updated";
    header("Location: ../adminPanel.php");
    
  }
  else {
    echo "Failed";
    echo $conn_up->error;
  }
  }
  
  /* +++++++++++ GENERAL +++++++++++ */
if(isset($_POST['up_btn_g'])) {

  $gid = $_POST['gid'];
  $gloc = $_POST['gloc'];
  $ghot = $_POST['ghot'];
  $gserv = $_POST['gserv'];
  $gtype = $_POST['gtype'];
  $gstatus = $_POST['gstatus'];
  
  $uq = "update general set location='$gloc', hotel='$ghot', service='$gserv', type='$gtype', status='$gstatus' where id='$gid' ";
  
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