<?php 
    $usname = $_POST['usname'];

    $conn = new mysqli("localhost", "root", "", "travelogue");

    if(!$conn) {
        echo "connect err";
    }
    else {
        $cancel_q = "delete from bookings where username='$usname'";
        if($conn->query($cancel_q)) {
            echo "<script> alert('Booking Cancelled'); </script>";
            header("Location: ../forms/user_settings.php");
            $conn->close();
        }
        else {
            echo $conn->error;
        }
    }
?>