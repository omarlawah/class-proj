<?php   
include "src/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered vehicles</title>
</head>
<body>
    <h1 style="text-align: center;">Vehicles report</h1>
            <table  style="text-align: center; width: 40%; left:50%; position:absolute; transform:translateX(-50%);">
                <tr>
                    <th class="header">Vehicle name</th>
                    <th class="header">Vehicle number</th>
    
                </tr>
                <?php
                $sql = "SELECT * FROM vehicle";
               $result = $connect->query($sql);
               if ($result->num_rows > 0) {
                   // Output data of each row
                   while($row = $result->fetch_assoc()) {
                       echo "<tr><td>" . $row["vtype"]. "</td><td>" . $row["vnumber"]. "</td></tr>";
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