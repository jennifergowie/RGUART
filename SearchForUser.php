<!DOCTYPE html>
<!--A form that allows users to enter user information and this returns their profile if stored.-->

<?php include("SessionCheck.php");?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search for User</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/styleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">
</head>
<body>

<header style="display: inline">
    <div class="bg">
        <br/>
        <center><img style="vertical-align: top; display: inline; height: 75px; width: 300px" src="Resources/Images/Robert_Gordon_University.png" alt="Logo"><br/>
            <br/>

            <h2>View Other Profiles</h2>
            <form action="SearchForRegisteredUser.php" method="post" autocomplete="off">
                <input type="username" name="username" placeholder="User Name" onfocus="this.placeholder=''"
                       onblur="this.placeholder='username'" required><br>
                <button class="inputButton" type="submit">Search</button><br/>
                <nav style="margin-top: 5px">

               <centre><li><a href="Options.php" class="centered"><img height="50" width="50" class="navBarIcon centered"
               src="Resources/Images/clematis.png" alt="AccountIcon;"></a>Main Menu</li>

                </nav>
                    <?php
                include("Resources/HeaderandFooterSections/RGUArtistFooterSection.php");
                ?>

            </form>
</body>

</html>