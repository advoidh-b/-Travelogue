
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="author" content="Advoidh Biju (Adwaith-B, Advoidh-B)">

  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400&family=Space+Grotesk&display=swap" rel="stylesheet">
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <title>Admins.Travelogue</title>
  
  <link rel="stylesheet" href="../css/home.css">
  <link rel="stylesheet" href="../css/settings.css">
  
  <!--<script src="https://kit.fontawesome.com/e1e8a204ee.js" crossorigin="anonymous">
  </script>-->
  
</head>

<body>
  
<header>
  <nav class="nav-panel">

    <div class="logo-container">
      <a href="#" class="logo">
       Admin.Travelogue
      </a>
    </div>
     <div class="nav-profile">
    <div class="top-nav">
      <a href="">HOME</a>
       <a href="">GALLERY</a>
    </div>
    </div>

    </nav>

</header> 

<!-- ######## Side bar ######## -->

<aside>

  <div class="aside-cont">

  
<div class='pad-overkill'></div>

  <div class="nav-cont">
    <a href="./adminPanel.php" >
      <i class="material-icons">home</i>
      <span class="nav-label">Overview</span>
    </a>

    <a href="#" onclick='tabs(0)'>
      <i class="material-icons">book</i>
      <span class="nav-label"> User Record</span>
    </a>

    <a href="#" onclick='tabs(1)'>
      <i class="material-icons">book</i>
      <span class="nav-label">Booking Record</span>
    </a>

    <a href="#">
      <i class="material-icons">settings</i>
      <span class="nav-label">Settings</span>
    </a>
    <a href="#">
      <i class="material-icons"></i>
      <span class="nav-label"></span>
    </a>
    <a href="#">
      <i class="material-icons"></i>
      <span class="nav-label"></span>
    </a>
    <a href="#">
      <i class="material-icons"></i>
      <span class="nav-label"></span>
    </a>
    <a href="#">
      <i class="material-icons"></i>
      <span class="nav-label"></span>
    </a>

  </div>

  <div class='pad-overkill'></div>

</div>

</aside>

<main>
  <section>
    <div class="table-cont" class='def-tab'>
    <p>Table: users</p>
    <table class="users">        
        <tr>
            <th>Id</th>
            <th>Username</th>
            
            <th>Emai</th>
            <th>Password</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>

    <?php 
     echo "<br>";
     $t_conn = new mysqli("localhost","root","","travelogue");

     if($t_conn->connect_error) {
        echo "Connect Error";
     }
     else {
        $v_query = "SELECT id,  user_name, email, password FROM users";
        $q_out = $t_conn->query($v_query);

        if($q_out->num_rows > 0) {

            while($recd = $q_out->fetch_assoc()) {

                $usi = $recd["id"];
                $usn = $recd["user_name"];
                $use = $recd["email"];
                $usp = $recd["password"];
                

                echo "<tr>";

                echo "<td>".$usi."</td>";
                
                echo "<td>".$usn."</td>";
                echo "<td>".$use."</td>";
                echo "<td>".$usp."</td>";
                echo "<td> <form method='post' action='./scripts/delete_rcd.php'> <input type='hidden' size='2' name='usid' value='$usi' > <button name='delete_u' type='submit' class='tb-btn d-btn'>
                Delete</button> </form></td>";
                echo "<td> <form method='post' action='./scripts/update_rcd.php'> <input type='hidden' size='2' name='usid' value='$usi' > <button name='update_u' type='submit' class='tb-btn'>
                Update</button> </form></td>";
                
                echo "</tr>";
                
            }
          
        }
        else {
            echo "No results";
        }
     }
     
     ?>
     </table>
    </div>

    <!-- +++++++++++++ Bookings Table ++++++++++++++++ -->


    <div class="table-cont">
    <p>Table: Bookings</p>
    <table class="users">        
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Destination</th>
            <th>Service</th>
            <th>Transport</th>
            <th>Date</th>
            <th>Ref.Id</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>

    <?php 

     echo "<br>";
     $bkc = new mysqli("localhost","root","","travelogue");

     if($bkc->connect_error) {
        echo "Connect Error";
     }
     else {
        $query_2 = "SELECT id, 	username, destination, hotel, service, vis_date, refid from bookings";
        $qout_2 = $bkc->query($query_2);

        if($qout_2->num_rows > 0) {

            while($recd_2 = $qout_2->fetch_assoc()) {

                $usi_2 = $recd_2["id"];
                $usn_2 = $recd_2["username"];
                $usd_2 = $recd_2["destination"];
                $usp_2 = $recd_2["hotel"];
                $serv = $recd_2["service"];
                $vdate = $recd_2["vis_date"];
                $refid = $recd_2["refid"];

                echo "<tr>";

                echo "<td>".$usi_2."</td>";
                echo "<td>".$usn_2."</td>";
                echo "<td>".$usd_2."</td>";
                echo "<td>".$usp_2."</td>";
                echo "<td>".$serv."</td>";
                echo "<td>".$vdate."</td>";
                echo "<td>".$refid."</td>";

                echo "<td> <form method='post' action='./scripts/delete_rcd.php'> <input type='text' size='2' name='usid_2' value='$usi_2' > <button name='delete_b' type='submit' class='tb-btn d-btn'>
                Delete</button> </form></td>";

                echo "<td> <form method='post' action='./scripts/update_rcd_b.php'> <input type='text' size='2' name='usid_2' value='$usi_2' > <button name='update_b' type='submit' class='tb-btn'>
                Update</button> </form></td>";
                
                echo "</tr>";
                
            }
    
        }
        else {
            echo "No results";
        }
     }
     
    ?>
     </table>
    </div>

    <!-- +++++++++++++ Agent Table ++++++++++++++++ -->

    <div class="table-cont">
    <p>Table: General</p>
    <table class="users">        
        <tr>
            <th>Id</th>
            <th>Location</th>
            <th>Hotels</th>
            <th>Services</th>
            <th>Type</th>
            <th>Status</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>

    <?php 

     echo "<br>";
     $gc = new mysqli("localhost","root","","travelogue");

     if($gc->connect_error) {
        echo "Connect Error";
     }
     else {
        $query_3 = "SELECT id, 	location, hotel, service, type, status from general";
        $qout_3 = $gc->query($query_3);

        if($qout_3->num_rows > 0) {

            while($recd_3 = $qout_3->fetch_assoc()) {

                $gid = $recd_3["id"];
                $gloc = $recd_3["location"];
                $ghotel = $recd_3["hotel"];
                $gserv = $recd_3["service"];
                $gtype = $recd_3["type"];
                $gstatus = $recd_3["status"];

                echo "<tr>";

                echo "<td>".$gid."</td>";
                echo "<td>".$gloc."</td>";
                echo "<td>".$ghotel."</td>";
                echo "<td>".$gserv."</td>";
                echo "<td>".$gtype."</td>";
                echo "<td>".$gstatus."</td>";

                echo "<td> <form method='post' action='./scripts/delete_rcd.php'> <input type='text' size='2' name='g_id' value='$gid' > <button name='delete_g' type='submit' class='tb-btn d-btn'>
                Delete</button> </form></td>";

                echo "<td> <form method='post' action='./scripts/update_rcd_g.php'> <input type='text' size='2' name='g_id' value='$gid' > <button name='update_g' type='submit' class='tb-btn'>
                Update</button> </form></td>";
                
                echo "</tr>";
                
            }
    
        }
        else {
            echo "No results";
        }
     }
     
    ?>
     </table>
    </div>

    </section>

</main>
  
<script>

     function tabs(n) {
        let tabs = document.getElementsByClassName("table-cont");
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
