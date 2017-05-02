<?php include("SessionCheck.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Options</title>
    <link rel="stylesheet" type="text/css" href="../Resources/CSS/styleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">
</head>
<body>

<header style="display: inline">
    <div class="bg">
        <br/>
        <center><img style="vertical-align: top; display: inline; height: 75px; width: 300px" src="../Resources/Images/Robert_Gordon_University.png" alt="Logo"><br/>
        <br/>

        <nav style="margin-top: 5px">
        <ul>
            <li><a href="Account.php" class="centered"><img height="50" width="50" class="navBarIcon centered" src="../Resources/Images/clematis.png" alt="AccountIcon;">Your Account</a></li>
            <li><a href="../SearchandDisplayUsers/SearchForUser.php" class="centered"><img height="50" width="50" class="navBarIcon centered" src="../Resources/Images/clematis.png" alt="HomeIcon;">View Other Profiles</a></li>
            <li><a href="../Logout/Logout.php" class="centered"><img height="50" width="50" class="navBarIcon centered" src="../Resources/Images/clematis.png" alt="LogoutIcon">Logout</a></li>
            <li><a href="../Testing/MasterDelete.php" class="centered"><img height="50" width="50" class="navBarIcon centered"
            src="../Resources/Images/clematis.png" alt="AccountIcon;">COMMENT OUT MASTER DATABASE DELETE</a></li>

        </ul>
    </nav>

<?php
include("../Resources/HeaderandFooterSections/RGUArtistFooterSection.php");
?>
</header>
</body>
</html>