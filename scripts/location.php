<?php
include("config.php");
    $email = $_GET["email"];
    $password = $_GET["password"];

    if($email && $password != "") {
        /* sql1 holds values -users- and -passwords- from table column*/
        $sql1 = "select * from `users` where `email` = '$email' and `password` = '$password'";
        /* select connected data from -sql1- to res1 */
        $res1 = mysqli_query($conn, $sql1);
        /* count no.of rows in current table to -count1- */
        $count1 = mysqli_num_rows($res1);
        /*  */
        if($count1 > 0) {
            header("loc: signup.html");
        }

        else if($email && $password != "") {
            $sql = "select * from `admin` where `email` = '$email' and `password` = '$password'";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);

            if($count > 0) {
                header("loc: log-form.html");
            }
        }

        else {
            echo "<script> window.alert("Inncorrect details"); </script>";
            echo "Error";
        }
    }

?>