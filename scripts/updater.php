<?php
    $t_conn = new mysqli("localhost","root","","user_creden");
    /** Default Username */
    $username = $_POST['username'];
    //$id =  $_POST['id'];
    $fname_n = $_POST['fname_n'];


    if($t_conn->connect_error) {
        echo "Connect Error";
     }
     else {
        if(isset($_POST['up_fname'])) {
            $fnameq = ("update tb_user set fullname='$fname_n' where username='$username'");
            $t_conn->query($fnameq);
        }
        if(isset($_POST['up_uname'])) {
            $uname_n = $_POST['uname_n'];
            $unameq = ("update tb_user set username='$uname_n' where username='$username'");
            $t_conn->query($unameq);
        }
        // viewer page
        echo "<a href='http://localhost/travelogue/scripts/viewer.php' style='background-color: #05445e; text-decoration: none; padding: 0.8rem; display: block; margin: 50pt auto; color: #fff; width: 30%; text-align: center; font-family: sans-serif; letter-spacing: 1.2px;' text>Website Database Panel</a>";


     }
?>