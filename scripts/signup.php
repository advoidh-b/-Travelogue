<?php
 include("config.php");
 
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    /* use pre-declared vars from config.php (exclude database name) */
    $conn = new mysqli($sql_servername, $sql_user, $sql_password, 'user_creden');

    if($conn->connect_error) {
        echo "connect err";
    }
    else
    {
    /* insert values to respective table attrib */
    $squery = $conn->prepare("insert into tb_user(fullname, username, email, password) values (?,?,?,?)");
    $squery->bind_param("ssss", $fullname, $username, $email, $password);
    $squery->execute();
    echo "Connection successful, Values OK. Check sql panel to verify";
    // close connection after
    $squery->close();
    }

?>