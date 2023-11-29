<?php
include "connect.php";
if(isset($_POST['button4'])){
    $productname = $_POST['productname'];
    $viability = $_POST['viability'];
    $price = $_POST['price'];
    $sql="INSERT INTO products(productname,viability,price)
     VALUES ('$productname','$viability', '$price')";
    $result = mysqli_query($connect, $sql);
    if($result){
        header("location: ../dashboard.php?e=successful");
    }else{
        header("location: ../dashboard.php?e=unsuccessful");
    }

}
?>