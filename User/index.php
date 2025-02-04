<?php 
    session_start();
    if(empty($_SESSION['mail'])){
        header('location: ../Admin/login.php');
    }else{
        echo 123;
    }
?>