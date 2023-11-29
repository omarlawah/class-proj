<?php
include "connect.php";

if(isset($_POST['button5'])){
    $date = date("Y-m-d");
    $workerid = $_POST['workerid'];
    $vehicleid = $_POST['vehicleid'];
    $customerid = $_POST['customerid'];
    $descriptionofwork = $_POST['descriptionofwork'];
    $hoursworked = $_POST['hoursworked'];
    $cost = $_POST['cost'];
    $sql = "INSERT INTO workdone(workerid, date, descriptionofwork, hoursworked, customerid, vehicleid,cost)
    VALUES ('$workerid','$date','$descriptionofwork','$hoursworked', '$customerid', '$vehicleid','$cost')";
    $result= mysqli_query($connect,$sql);
    if($result){
        header("Location: ../dashboard.php?e=success");
    }else{
        header("Location: ../dashboard.php?e=unsuccessful");
    }
}
?>