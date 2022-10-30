<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U-Cred</title>
    <style>
        body {
            font: 400 14px "Arial", "Tahoma", sans-serif;
        }
        table > tr, td {
            border: 1px dotted #55f;
            padding: 10px;
        }
        .del {
            background: #d66;
            padding: 8px 10px;
            color: #fff;
        }
    </style>
</head>
<body>
    <table>        
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Emai</th>
            <th>Password</th>
        </tr>
    <?php 
     echo "<br>";
     $t_conn = new mysqli("localhost","root","","user_creden");

     if($t_conn->connect_error) {
        echo "Connect Error";
     }
     else {
        $v_query = "SELECT id, username, email, password FROM tb_user";
        $q_out = $t_conn->query($v_query);

        if($q_out->num_rows > 0) {

            while($recd = $q_out->fetch_assoc()) {

                $usid = $recd["id"];
                $usn = $recd["username"];
                $use = $recd["email"];
                $usp = $recd["password"];

                echo "<tr>";

                echo "<td>".$usid."</td>";
                echo "<td>".$usn."</td>";
                echo "<td>".$use."</td>";
                echo "<td>".$usp."</td>";
                echo "<td>";
                echo "<a href='#' class='del'>Delete</a>";
                echo "</td>";
                
                echo "</tr>";
                
            }
    
        }
        else {
            echo "No results";
        }
     }
     
    ?>
    </table>
</body>
</html>