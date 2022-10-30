<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U-Cred</title>
</head>
<body>
    <?php 
     echo "File Load Okay<br>"
     $t_conn = new mysqli("localhost", "root", "", "user_creden");

     if($t_conn->connect_err) {
        echo "Connect Error";
     }
     else {
        $v_query = "select id, username, email, password from tb_user";
        $q_out = $t_conn->query($v_query);

        if($q_out->num_rows > 0) {

            while($recd = $q_out->fetch_assoc()) {
                echo $recd["id"]." ".$recd["username"]." ".$recd["email"];
            }
        }
        else {
            echo "No results";
        }
     }
     $t_conn->close();
    ?>
</body>
</html>