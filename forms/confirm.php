<?php 

session_start();

	include("../php/connection.php");
	include("../php/functions.php");
    $user_data = check_login($con);
    /* <?php echo $user_data['user_name']; ?> */
?>

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
        <div class="form-cont">
            <h1>Confirm Booking</h1>

            <form method="post" action="../scripts/booking_action.php" onsubmit="return validateBook()">
                <div class="selections">
                    <p>Selected destination</p>
                    <input type="text" name="loc_name" class="ip-text dest">

                    <p>Hotel Service selected</p>
                    <input type="text" name="hotel_name" class="ip-text hotel">

                </div>
                
                    <p>Enter your visiting date</p>
                <div class="d-o-visit">
                    
                    <input type="text"  maxlength="2" size="2" name="day" id="day" max="29"  class="dates" placeholder="dd" required> 

                    <input type="text"  maxlength="2" size="2" name="month" id="month" class="dates" max="12" placeholder="mm" required>

                    <input type="text"  maxlength="4" size="4" name="year" id="year" class="dates" max="2024" placeholder="yyyy" required>
                    
                    <span class="ic-label">Time</span>

                    <input type="time"   size="8" name="time" id="time" class="time" required>

                    <input id="username" name="usname" type="hidden" value="<?php echo $user_data['user_name']; ?>">

                    <p class="e-date ep"></p>  
                </div>

                <div class="optiional-service">
                    <p>Choose a vehicle service (optional)</p>
                <div class="vehicle-services">
                    
                <div class="service-partners">
                        <input type="radio" name="radio" class="radio-btn-t" value="uber.inc">
                    </div>
                    <div class="service-partners serv-two">
                        <input type="radio" name="radio" class="radio-btn-t" value="ctaxi.inc">
                    </div>
                </div>

                <div>
                    <p>Select a vehicle type (Default: Four seater)</p>

                    <select name="cars" id="car-type" class="veh">
                        <option value="four">Four seater</option>
                        <option value="six">Six seater</option>
                        <option value="six-2">Six seater(x2)</option>
                    </select>

                    <input type="hidden" name="refid" id="refid">
                    
                </div>

            </div>

        <button type="submit" id="conf-bk" class="confirm-bk">
        <span class="">Confirm Booking</span>
        </button>

            </form>
        </div>
    </section>

    <!-- ------- Script ----- -->
    <script src="../scripts/confirm-script.js"></script>
</body>
</html>