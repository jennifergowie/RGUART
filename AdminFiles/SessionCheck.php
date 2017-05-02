<?php
session_start();
if(!isset($_SESSION["username"])&&($_SESSION["emailaddress"])) {
    header("location: login.php");
}
?>
