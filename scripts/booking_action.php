
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Advoidh Biju (Adwaith-B, Advoidh-B)">

  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400&family=Space+Grotesk&display=swap" rel="stylesheet">
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>-</title>

    <link rel="stylesheet" href="../css/confirm.css">

</head>
<body>
    
    <section class="sec-one">
    <?php 

include("../php/connection.php");

$conn = new mysqli("localhost", "root", "", "travelogue");

$dest = $_POST['loc_name'];
$hotel = $_POST['hotel_name'];
$usname = $_POST['usname'];
$service = $_POST['radio'];
$vis_date = $_POST['day']."-".$_POST['month']."-".$_POST['year'];
$refid = $_POST['refid'];


$query_i = ("insert into bookings(username, destination, hotel, service, vis_date, refid) values ('$usname', '$dest', '$hotel', '$service',  '$vis_date', '$refid')");

?> 

    <div class="form-cont">
     <h1>Booking Placed!</h1>

<?php
    if($conn->query($query_i)) {
    echo "<a href='../forms/user_settings.php' class='confirm-bk'>View in Bookings</a>";

    $conn->close();
}
else {
    echo "<p>Error: ".$conn->error."</p>";
}

?>

    </div>

 </section>
</body>
</html>