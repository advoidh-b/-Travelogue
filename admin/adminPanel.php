
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

  

  <div class="nav-cont">
    <a href="#" >
      <i class="material-icons">home</i>
      <span class="nav-label">Home</span>
    </a>

    <a href="#" >
      <i class="material-icons">search</i>
      <span class="nav-label">Search</span>
    </a>

    <a href="#">
      <i class="material-icons">book</i>
      <span class="nav-label">Bookings</span>
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

</div>

</aside>

<main>
  <section>
    <div class="table-cont">
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
        $v_query = "SELECT id, user_name, email, password FROM users";
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
                echo "<td> <form method='post' action='../scripts/delete_rcd.php'> <input type='hidden' size='2' name='usid' value='$usi' > <button name='delete_u' type='submit' class='tb-btn d-btn'>
                Delete</button> </form></td>";
                echo "<td> <form method='post' action='../scripts/update_rcd.php'> <input type='hidden' size='2' name='usid' value='$usi' > <button name='update_u' type='submit' class='tb-btn'>
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

<footer>
</footer>
  <script src="./scripts/home-script.js"></script>
</body>
</html>
