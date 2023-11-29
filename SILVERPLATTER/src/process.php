<?php
$adminname = $_POST['adminname'];
$adminpassword = $_POST['adminpassword'];
if(isset($_POST['login'])){
    if($adminname =="admin" && $adminpassword == "password"){
        header("location: ../dashboard.php?e=1");
    }else{
        header("location: ../index.php?e=incorrect credentials");
    }
}

?>