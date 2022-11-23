<?php 
session_start();

	include("../php/connection.php");
	include("../php/functions.php");

    $user_data = check_login($con);

    $usname = $user_data['user_name'];

    //echo $user_data;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/settings.css">

    <meta name="author" content="Advoidh Biju (Adwaith-B, Advoidh-B)">

    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400&family=Space+Grotesk&display=swap" rel="stylesheet">
  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>User Settings - Travelogue</title>   

</head>
<body>
    <section class="sec-one">
        <div class="tabs-cont"> 
            <a href="#" onclick="tabs(0)">Bookings</a>
            <a href="#" onclick="tabs(1)">Two</a>
            <a href="#" onclick="tabs(2)">Three</a>
        </div>

            <div class="tabDiv def-tab">


        <?php
            $t_conn = new mysqli("localhost","root","","travelogue");
     
            if($t_conn->connect_error) {
               echo "Connect Error";
            }
            else {
               $v_query = "SELECT destination, hotel, vis_date, refid, service FROM bookings where username='$usname' limit 1";

               $q_out = $t_conn->query($v_query);
       
               if($q_out->num_rows > 0) {
       
                   while($recd = $q_out->fetch_assoc()) {
       
                       $dest = $recd["destination"];
                       $hotel = $recd["hotel"];
                       $serv = $recd["service"];
                       $vis_date = $recd["vis_date"];
                       $refid = $recd['refid'];
                       
                    echo "<p>Selected:  ".$dest."</p>";
                    echo "<p>Hotel:  ".$hotel."</p>";
                    echo "<p>Refid: ".$refid."</p>";
                    
                    echo "<p>Date of Arrival  : ".$vis_date."</p>";
                    
                   }
                   $t_conn->close();
           
               }
               else {
                   echo "No results";
               }
            }
        ?>

            </div>

            <div class="tabDiv">
                tab2
            </div>

            <div class="tabDiv">
            <a href="http://localhost/travelogue/php/logout.php" class="logout">
                    Log Out
                </a>
            </div>
        
    </section>

    <!-- *********** Script ************ -->
    <script>

     function tabs(n) {
        let tabs = document.getElementsByClassName("tabDiv");
        for(let tab_i = 0; tab_i <= tabs.length; ++tab_i) {
        
        tabs[tab_i].style.display = "none";

        if(n == tab_i) {
            tabs[tab_i].style.display = "block";
            
        if(n > "0") {
                tabs[0].style.display = "none";
            }
        }
     }
    }
</script>

</body>

</html>