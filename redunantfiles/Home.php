<?php include("SessionCheck.php");?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RGU Student Art - Profile Page</title>
    <link rel="stylesheet" type="text/css" href="../Resources/CSS/styleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">

</head>

<body>
<main>
    <div class="bg">
        <br/>
        <img style="vertical-align: top; display: inline; height: 75px; width: 300px" src="../Resources/Images/Robert_Gordon_University.png" alt="Logo"><br/>
        <br/>
    <h2>Welcome RGU Student Art</h2>


    <a href ="../UploadUserImages/fileupload.php">here</a>
    <h4>Please click <a href="profiles.php">here </a> to edit/review your personal profile</h4>
    <h4>Please click <a href="LoadImages.php">here </a> to upload a profile picture</h4>
    <h4>Please click <a href="slideshow.php"> here </a> to edit/add a slide show</h4>
    <h4>Please click <a href="profiles.php"> here</a> to view other profiles</h4>


    <?php
        include("resources/HeaderandFooterSections/RGUArtistFooterSection.php");
    ?>

</main>
</body>

</html>

</html>


