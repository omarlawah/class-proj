<?php   
include "src/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered workdone</title>
</head>
<body>
    <h1 style="text-align: center;">Work done report</h1>
            <table style="text-align: center; width: 100%;">
                <tr>

                    <th class="header">Worker id</th>
                    <th class="header">Date</th>
                    <th class="header">Description of work</th>
                    <th class="header">Hours worked</th>
                    <th class="header">Customer id</th>
                    <th class="header">Vehicle id</th>
                    <th class="header">Cost</th>
                </tr>
                <?php
                $result = $connect->query($sql);
                $sql = "SELECT * FROM workdone";
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["workerid"]. "</td><td>" . $row["date"]. "</td><td>" . $row["descriptionofwork"]. "</td><td>" . $row["hoursworked"]. "</td><td>" . $row["customerid"]. "</td><td>" . $row["vehicleid"]. "</td><td>" . $row["cost"]. "</td></tr>";
                               }
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
