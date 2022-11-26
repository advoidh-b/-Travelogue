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

