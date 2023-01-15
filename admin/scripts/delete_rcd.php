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
/* +++++++++++++ delete general rcd ++++++++++++++ */
if(isset($_POST['delete_g'])) {
    $g_id = $_POST['g_id'];
    $delq_3 = "delete from general where id='$g_id'";

    if($tb_conn->query($delq_3)) {
        echo "Record Deleted";
        header("Location: http://localhost/Travelogue/admin/adminPanel.php");
    }
    else {
        echo "Failed to delete".$tb_conn->error;
        
    }
}

/* +++++++++++++ delete general rcd ++++++++++++++ */
if(isset($_POST['delete_c'])) {
    $c_id = $_POST['c_id'];
    $delq_4 = "delete from carddetails where id='$c_id'";

    if($tb_conn->query($delq_4)) {
        echo "Record Deleted";
        header("Location: http://localhost/Travelogue/admin/adminPanel.php");
    }
    else {
        echo "Failed to delete".$tb_conn->error;
        
    }
}