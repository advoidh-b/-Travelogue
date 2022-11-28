<?php

$tb_conn = new mysqli('localhost', 'root', '', 'travelogue');

if(isset($_POST['delete_u'])) {
    $id = $_POST['usid'];
    $delq = "delete from users where id='$id'";

    if($tb_conn->query($delq)) {
        echo "Record Deleted";
        header("Location: http://localhost/Travelogue/admin/adminPanel.php");
    }
    else {
        echo "Failed to delete".$tb_conn->error;
        
    }
}
if(isset($_POST['delete_b'])) {
    $id_2 = $_POST['usid_2'];
    $delq_2 = "delete from bookings where id='$id_2'";

    if($tb_conn->query($delq_2)) {
        echo "Record Deleted";
        header("Location: http://localhost/Travelogue/admin/adminPanel.php");
    }
    else {
        echo "Failed to delete".$tb_conn->error;
        
    }
}

