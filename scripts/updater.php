<?php
    $t_conn = new mysqli("localhost","root","","user_creden");
    /** Default Username */
    $username = $_POST['username'];
    //$id =  $_POST['id'];
    $fname_n = $_POST['fname_n'];
    $uname_n = $_POST['uname_n'];
    $email_n = $_POST['email_n'];
    $pass_n = $_POST['pass_n'];

    if($t_conn->connect_error) {
        echo "Connect Error";
     }
     else {
        if(isset($_POST['up_fname'])) {
            $fnameq = ("update tb_user set fullname='$fname_n' where username='$username'");
            $t_conn->query($fnameq);
        }
        if(isset($_POST['up_uname'])) {
            $unameq = ("update tb_user set username='$uname_n' where username='$username'");
            $t_conn->query($unameq);
        }
        if(isset($_POST['up_email'])) {
            $emailq = ("update tb_user set email='$email_n' where username='$username'");
            $t_conn->query($emailq);
        }
        if(isset($_POST['up_pass'])) {
            $passq = ("update tb_user set password='$pass_n' where username='$username'");
            $t_conn->query($passq);
        }
        /** BULK RECORD UPDATE */
        if(isset($_POST['up_all'])) {
            $bulkq = ("update tb_user set fullname='$fname_n', password='$pass_n', username='$uname_n', email='$email_n'  where username='$username'");
            $t_conn->query($bulkq);
        }
        /** DELETE RECORD */
        if(isset($_POST['del_all'])) {
            $bulkDELq = ("delete from tb_user where username='$username'");
            $t_conn->query($bulkDELq);
        }

        echo "<a href='http://localhost/phpmyadmin/index.php?route=/sql&db=user_creden&table=tb_user&pos=0' style='background-color: #05445e; text-decoration: none; padding: 0.8rem; display: block; margin: 50pt auto; color: #fff; width: 30%; text-align: center; font-family: sans-serif; letter-spacing: 1.2px;'>Open Sql Panel</a>";
        // viewer page
        echo "<a href='http://localhost/travelogue/scripts/viewer.php' style='background-color: #05445e; text-decoration: none; padding: 0.8rem; display: block; margin: 50pt auto; color: #fff; width: 30%; text-align: center; font-family: sans-serif; letter-spacing: 1.2px;' text>Website Database Panel</a>";


     }
?>