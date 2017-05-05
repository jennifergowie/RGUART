<?php

session_start();
session_unset();
session_destroy();

?>

<!DOCTYPE html>

<html lang="en">
<
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/styleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">
</head>


<body>

<div class="bg">
    <br/>
    <center><img style="vertical-align: top; display: inline; height: 75px; width: 300px" src="Resources/Images/Robert_Gordon_University.png" alt="Logo"></center>


    <h3>You are logged out</h3>
    <h3>Thankyou for using RGU Student Art</h3>

    <center><span>Click to <a href="login.php">login</a> again</span></center>

    <?php
    include("Resources/HeaderandFooterSections/RGUArtistFooterSection.php");
    ?>
</div>
</body>

</footer>

</html>