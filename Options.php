<!DOCTYPE html>
<!--Displays menu options to the user, they can access their account information, search for an user and logout.-->

<?php include("SessionCheck.php");?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Options</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/styleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">
</head>
<body>

<header style="display: inline">
    <div class="bg">
        <br/>
        <center><img style="vertical-align: top; display: inline; height: 75px; width: 300px" src="Resources/Images/Robert_Gordon_University.png" alt="Logo"><br/>
        <br/>

        <nav style="margin-top: 5px">
        <ul>
            <li><a href="UserProfileAdmin.php" class="centered"><img height="50" width="50" class="navBarIcon centered" src="Resources/Images/Spring Filled-50.png" alt="AccountIcon;">Your Account</a></li>
            <li><a href="SearchForUser.php" class="centered"><img height="50" width="50" class="navBarIcon centered" src="Resources/Images/Spring Filled-50.png" alt="SearchOthers">View Other Profiles</a></li>
            <li><a href="Logout.php" class="centered"><img height="50" width="50" class="navBarIcon centered" src="Resources/Images/Spring Filled-50.png" alt="LogoutIcon">Logout</a></li
        </ul>
    </nav>

<?php
include("Resources/HeaderandFooterSections/RGUArtistFooterSection.php");
?>
</header>
</body>
</html>