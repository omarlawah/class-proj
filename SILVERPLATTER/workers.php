<?php   
include "src/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered workers</title>
</head>
<body>
    <h1 style="text-align: center;">Workers report</h1>
            <table style="text-align: center; width: 100%;">
                <tr>
                    <th class="header">Name</th>
                    <th class="header">Contact</th>
                    <th class="header">Position</th>
                    <th class="header">Fixed salary</th>
                    <th class="header">Allowance</th>
                    <th class="header">Bank account</th>
                    <th class="header">Next of kin</th>
                    <th class="header">Username</th>
                    <th class="header">Password</th>
                    <th class="header">Total salary</th>
                </tr>
                <?php
                $sql = "SELECT * FROM workers";
                $result = $connect->query($sql);
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["contact"]. "</td><td>" . $row["position"]. "</td><td>" . $row["fixedsalary"]. "</td><td>" . $row["allowance"]. "</td><td>" . $row["bankaccount"]. "</td><td>" . $row["nextofkin"]. "</td><td>" . $row["username"]. "</td><td>" . $row["password"]. "</td><td>" . $row["fixedsalary"]+$row["allowance"]. "</td></tr>" ;
                    }
                
                    echo "</table>";
                }
                ?>
            </table>
</body>
</html>



<style>
    *{
        box-sizing: border-box;
    }
  
    table, td, th {
        height: 50px;  
        border: 1px solid black;  
    }  
   
    table {  
        border: none;
        border-collapse: collapse;  
    } 
    .header{
        background-color: black;
        color:white;
        border:1px solid white;
        font-size:18px;
    }
</style>
