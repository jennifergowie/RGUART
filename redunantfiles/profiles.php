<?php include("SessionCheck.php");?>

<!DOCTYPE html>

<!-- NB: add comments, sort formatting! -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RGU Student Art -Create User Profile</title>
    <link rel="stylesheet" type="text/css" href="../Resources/CSS/styleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">
</head>

<?php
include("LoadUserProfile.php");

?>
    <div class="bg">
        <body>
        <main>
            <div class="bg">
                <br/>
                <center><img style="vertical-align: top; display: inline; height: 75px; width: 300px" src="../Resources/Images/Robert_Gordon_University.png" alt="Logo"><br/>
                <br/>

        <h2>Update your profile</h2>
            <form action="UploadProfile.php" method="post" autocomplete="off" enctype="multipart/form-data">
            <input type="UserName" name="UserName" placeholder="User Name" onfocus="this.placeholder=''" onblur="this.placeholder='UserName'" required/>
            <input type="StudentName" name="StudentName" placeholder="Student Name" onfocus="this.placeholder=''" onblur="this.placeholder='StudentName'" required/>
            <input type="email" name="email" placeholder="Email Address" onfocus="this.placeholder=''" onblur="this.placeholder='Email Address'" required/>
            <input type="password" name="password" placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder='Password'" required/>
            <input type="tel" name="phone" placeholder="Mobile Number" onfocus="this.placeholder=''" onblur="this.placeholder='Mobile Number'" required/>
            <input type="Course" name="Course" placeholder="Course" onfocus="this.placeholder=''" onblur="this.placeholder='Course'" required/>
            <input type="Year" name="Year" placeholder="Year" onfocus="this.placeholder=''" onblur="this.placeholder='Year'" required/>
            <br><br>
            <input class="inputButton" type="submit" name="submit" value="Create your profile"/>
        </form>

            <?php
            include("resources/HeaderandFooterSections/RGUArtistFooterSection.php");
            ?>

        </main>
        </body>
    </div>
</html>

</html>
