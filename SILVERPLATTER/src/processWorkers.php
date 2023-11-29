<?php
include "connect.php";

if(isset($_POST['button1'])){
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $position = $_POST['position'];
    $fixedsalary = $_POST['fixedsalary'];
    $allowance = $_POST['allowance'];
    $bankaccount = $_POST['bankaccount'];
    $nextofkin = $_POST['nextofkin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO workers (name,contact, position, fixedsalary, allowance, bankaccount, nextofkin, username, password)
     VALUES ('$name', '$contact', '$position', '$fixedsalary','$allowance' ,'$bankaccount', '$nextofkin', '$username', '$password')";
    $result = mysqli_query($connect, $sql);

    if($result){
        header("location: ../dashboard.php?e=successful");

    }else{
        header("location: ../dashboard.php?e=unsuccessful");
    }
}
   
?>