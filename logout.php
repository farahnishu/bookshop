<?php
session_start();
session_destroy();
if(isset($_SESSION['login_success'])){
    unset($_SESSION['login_success']);
    unset($_SESSION['logId']);
    unset($_SESSION['name']);
}
header("location:index.php");
?>