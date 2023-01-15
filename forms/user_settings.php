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
        <div class='bhome'>
            <a href="../home.php" class='back'>
                <i class='material-icons'>arrow_lefthome</i>
                &nbsp; &nbsp; Back to Home
            </a>
        </div>
    <section class="sec-one">

        <div class="user-profile-cont">
            <div class="user-avatar">
                <img src="../images/dp/bean-lisa.jpg" alt="user dp">
            </div>
            <div class="user-creds">
                <p><?php echo $usname; ?></p>
            </div>
            <div class="edit-creds">
                <a href="http://localhost/travelogue/php/logout.php" class="logout">
              LOG OUT
                </a>
            </div>
        </div>

        <div class="tabs-title"> 
            <h1>Account Data</h1>
        </div>

            <div class="tabDiv def-tab">
            <h3 id='bookingsh'>Active Bookings</h3>

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
            <form action="./cancel.php" method="post">

             <input type='hidden' name='usname' value='<?php echo $usname ?>'>
             <input type="submit" name="cancel"
             value="Cancel Booking" class="cancel">

            </form>
            </div>

            <div class="tabDiv">
            <h3>Active Cards / Payments</h3>
            <?php
            $tcon_2 = new mysqli("localhost","root","","travelogue");
     
            if($tcon_2->connect_error) {
               echo "Connect Error";
            }
            else {
               $q2 = "SELECT holdername FROM carddetails where username='$usname' limit 1";

               $q_out2 = $tcon_2->query($q2);
       
               if($q_out2->num_rows > 0) {
       
                   while($recd_c = $q_out2->fetch_assoc()) {
       
                       $holdname = $recd_c["holdername"];
                       
                    echo "<p>Card holder: ".$holdname."</p>";
                    echo "<p>Card no: XXXX XXXX XXXX</p>";
                    
                   }
                   $tcon_2->close();
           
               }
               else {
                   echo "No results";
               }
            }
        ?> 
            </div>

            

        <div>
        
        </div>
    </section>

    <!-- *********** Script ************ -->
    <script>

    //  function tabs(n) {
    //     let tabs = document.getElementsByClassName("tabDiv");
    //     for(let tab_i = 0; tab_i <= tabs.length; ++tab_i) {
        
    //     tabs[tab_i].style.display = "none";

    //     if(n == tab_i) {
    //         tabs[tab_i].style.display = "block";
            
    //     if(n > "0") {
    //             tabs[0].style.display = "none";
    //         }
    //     }
    //  }
    // }
</script>

</body>

</html>