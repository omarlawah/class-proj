<?php
include "src/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered products</title>
</head>
<body>
    <h1 style="text-align: center;">products report</h1>
            <table style="text-align: center; width: 100%;">
                <tr>
                    <th class="header">Product name</th>
                    <th class="header">viability</th>
                    <th class="header">Product price</th>
                </tr>
                <?php
                $sql = "SELECT * FROM products";
                $result = $connect->query($sql);
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["productname"]. "</td><td>" . $row["viability"]. "</td><td>" . $row["price"]. "</td></tr>";
                    }
                
                    echo "</table>";
                } else {
                    echo "0 results";
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

