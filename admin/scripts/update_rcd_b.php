

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Advoidh Biju (Adwaith-B, Advoidh-B)">

    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400&family=Space+Grotesk&display=swap" rel="stylesheet">

    <title>Update-Data</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: var(--fontdef);
          }
          html {
            font: 400 16px var(--fontdef);
            scroll-behavior: smooth;
          }
          
          /* #### hide Scrollbars ####
          html {
            scrollbar-width:  none;
            -ms-overflow-style: none;
          } 
          ::scrollbar, ::-webkit-scrollbar {
            display: none;
          }
          */
          
:root {
   --fwhite: #fffeff;
   --accent: #05445e;
   --green: #4c6;
        
   --bg: #dededf;
   --bgwhite: #fefeff;
   --cardbg: #f8f7f8;
   --carddark: #262b36;
        
   --textsub: #757785;
   --textwhite: #efefff;
   --textdark: #38383f;
   --fontdef: "Figtree", sans-serif;
  }

  body {
    font: 400 14px var(--fontdef);
    background: #ddd;
    color: var(--textsub);
    margin: 0;
    padding: 0;
    min-height: 100vh;
  }

  .form-cont {
    background: rgba(255, 250, 250, 0.8);
    width: 40%;
    padding: 2.0rem;
    margin: 20pt 2.0rem;
    box-shadow: 2px 2px 20px rgba(28, 28, 65, 0.2);
    
  }

  input[type="text"], input[type="password"], input[type="email"] {
    border: 0.1rem solid var(--accent);
    background: none;
    font: 400 1rem var(--fontdef);
    color: var(--textcol);
    outline: none;
    margin: 0.8rem 0;
  }


  input[type="text"],input[type="password"], input[type="email"], .create-acc-btn, .login-btn {
    display: block;
    padding: 0.8rem 1.2rem;
    min-width: 260px;
    width: 260px;
    font: 400 1rem var(--fontdef);
  }
  .tb-btn {
    padding: 0.8rem 1.2rem; 
    margin: 0.8rem 0;
    border: none;
    background: var(--accent);
    color: #fff;
    font: 400 1rem var(--fontdef);
  }

@media (max-width: 700px) {
  .form-cont {
    width: 100%;
  }
  input[type="text"], .create-acc-btn {
    width: 100%;
    min-width: 100%;
  }
  }
        </style>
</head>

<body>
    <section class="form-cont">
        <h1>
            Update Booking Records
        </h1>
        <p>Note: Re-assigns all record values</p>

    <form method="post" action="update_2.php">

<?php
  $tb_conn = new mysqli('localhost', 'root', '', 'travelogue');

  $userid = $_POST['usid_2'];

  /* get data from table */
  if($tb_conn->connect_error) {
    echo "Connect Error";
 }
 else {
    $v_query = "SELECT id, 	username, destination, hotel, service, vis_date, refid from bookings where id='$userid'";

    $q_out = $tb_conn->query($v_query);

    if($q_out->num_rows > 0) {

        while($recd_2 = $q_out->fetch_assoc()) {

                $usi_2 = $recd_2["id"];
                $usn_2 = $recd_2["username"];
                $dest = $recd_2["destination"];
                $hot = $recd_2["hotel"];
                $serv = $recd_2["service"];
                $vdate = $recd_2["vis_date"];
                $refid = $recd_2["refid"];

            echo "<input type='text' name='id' value='$usi_2' placeholder='user id' >";

            echo "<input type='text' name='username' value='$usn_2' placeholder='username'>";

            echo "<input type='text' name='dest' value='$dest' placeholder='destination'>";

            echo "<input type='text' name='hot' value='$hot' placeholder='hotel'>";

            echo "<input type='text' name='serv' value='$serv' placeholder='service/vehicle'>";

            echo "<input type='text' name='vdate' value='$vdate' placeholder='vis date'>";

            echo "<input type='text' name='refid' value='$refid' placeholder='refid'>";
        }
    }
    
 }

?>
      <button type='submit' class='tb-btn' name='up_btn_b'>Update Record</button>
    </form>
  </section>
</body>
</html>