<?php

session_start();

include("../php/connection.php");
include("../php/functions.php");

$user_data = check_login($con);

$usname = $user_data['user_name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/payment.css">
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400&family=Space+Grotesk&display=swap" rel="stylesheet">
    <title>Payments - Travelogue</title>
</head>
<body>
    <section class="form-sec">
        <form action="../scripts/pay_confirm.php" method="post">
            <h1>
                Enter card details
            </h1>

            <div class="ip-rows">
            <div class="ip-cont">
            <label for="">Card holder's name</label>
            <input type="text" name="holdname" class="ip ip-block " maxlength="25" placeholder="John Doe" required>
            <input type="hidden" name="username" id="" value="<?php echo $usname; ?>">
            <label for="">Card Number</label>
            <input type="text" name="cardno" class="ip ip-block " maxlength="12" placeholder="XXXXXXXXXXXX" required>
            </div>

            <div class="ip-cont">
            <label for="">CVV</label>
            <input type="text" name="cvv" class="ip ip-block" maxlength="3" size="3" placeholder="XXX" required>
            <label for="">Expiry</label>
            <input type="text" name="expiry" class="ip ip-block" maxlength="4" size="5" placeholder="XXXX">
            </div>
            </div>
            <button class="pay" name="pay" type="submit">Pay Amount</button>
        </form>
    </section>
</body>
</html>
