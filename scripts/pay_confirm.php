<?php

if(isset($_POST['pay'])) {

    $carddet_con = new mysqli('localhost', 'root', '', 'travelogue');

    $username = $_POST['username'];
    $holdname = $_POST['holdname'];
    $cardno = $_POST['cardno'];
    $cvv = $_POST['cvv'];
    $expiry = $_POST['expiry'];

    // $q_in = "insert into carddetails (username, holdername, cardno, cvv, expiry) values ('$username', '$holdname', '$cardno', '$cvv', '$expiry')";

    $q_up = "update carddetails set holdername='$holdname', cardno='69', cvv='$cvv', expiry='$expiry' where username='$username'";

    if($carddet_con->query($q_up)) {
        echo "Successful";
        header("Location: ../forms/user_settings.php");
    }
    else {
        echo "Error: ". $carddet_con->error;
    }
    
}