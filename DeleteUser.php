<html lang="en">
<!--This file gets the users, user name and password and calls the DeleteUserSearch.php file to delete the profile.-->

<head>
    <meta charset="UTF-8">
    <title>Delete User Profile</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/styleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">

</head>
<body>
<form action="DeleteUserSearch.php" method="post" autocomplete="off">
    <main>
        <div class="bg">
            <br/>
            <img style="vertical-align: top; display: inline; height: 75px; width: 300px" src="Resources/Images/Robert_Gordon_University.png" alt="Logo"><br/>
            <br/>
            <h3>Delete Profile</h3>
                 <input type="username" name="username" placeholder="User Name" onfocus="this.placeholder=''" onblur="this.placeholder='Matriculation Number'" required><br>
                 <input type="password" name="password" placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder='Password'" required><br>
                 <button class="inputButton" type="submit">Delete Profile</button><br/>


            <?php
            include("Resources/HeaderandFooterSections/RGUArtistFooterSection.php");
            ?>
</form>

</body>
</html>