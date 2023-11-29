<?php
include "connect.php";


if(isset($_POST['button2'])){
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql = "INSERT INTO customers(name, contact, email, address) 
    VALUES('$name','$contact','$email','$address')";
    $result = mysqli_query($connect, $sql);
    if($result){
        header("location: ../dashboard.php?e=successful");
    }else{
        header("location: ../dashboard.php?e=unsuccessful");
    }
}
?>