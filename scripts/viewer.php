<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Database - Travelogue</title>
    <style>
        body {
            font: 400 14px "Arial", "Tahoma", sans-serif;
        }
        table > tr, td {
            border: 1px dotted #55f;
            padding: 10px 40pt;
        }
        input, .del {
            background: #d66;
            padding: 8px 10px;
            color: #fff;
            border: 1px solid #d66;
        }
        .a-panel-link {
            background-color: #05445e;
            text-decoration: none; 
            padding: 0.8rem; 
            display: block; 
            margin: 50pt auto;
            width: 200px; 
            color: #fff; 
            text-align: center; 
            font-family: sans-serif; 
            letter-spacing: 1.2px;
        }
    </style>
</head>
<body>
<div>
        <a href="http://localhost/Travelogue/forms/admin-panel.html" class="a-panel-link">
            Open Admin Panel
        </a>
    </div>
    <p>Table: tb_user</p>
    <table>        
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Fullname</th>
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
        $v_query = "SELECT id, username, fullname, email, password FROM tb_user";
        $q_out = $t_conn->query($v_query);

        if($q_out->num_rows > 0) {

            while($recd = $q_out->fetch_assoc()) {

                $usid = $recd["id"];
                $usn = $recd["username"];
                $fnm = $recd["fullname"];
                $use = $recd["email"];
                $usp = $recd["password"];
                echo "<tr>";

                echo "<td>".$usid."</td>";
                echo "<td>".$usn."</td>";
                echo "<td>".$fnm."</td>";
                echo "<td>".$use."</td>";
                echo "<td>".$usp."</td>";
                
                
                echo "</tr>";
                
            }
    
        }
        else {
            echo "No results";
        }
     }
     
     ?>
    </table>
    <br><br>
    <form method="post">
        
    <input type="text" name="id" placeholder="Enter id to delete">
    <input type="submit" name="del_all" value="Delete Record" class="del">
    </form>


</body>
</html>