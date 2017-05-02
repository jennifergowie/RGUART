<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete User</title>
    <link rel="stylesheet" type="text/css" href="../Resources/CSS/styleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">

</head>
<body>
<form action="DeleteUserSearch.php" method="post" autocomplete="off">
    <main>
        <div class="bg">
            <br/>
            <img style="vertical-align: top; display: inline; height: 75px; width: 300px" src="../Resources/Images/Robert_Gordon_University.png" alt="Logo"><br/>
            <br/>
            <h2>Delete Profile</h2>
                 <input type="username" name="username" placeholder="User Name" onfocus="this.placeholder=''" onblur="this.placeholder='Matriculation Number'" required><br>
                 <input type="password" name="password" placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder='Password'" required><br>
                 <button class="inputButton" type="submit">Delete Profile</button><br/>


            <?php
            include("../Resources/HeaderandFooterSections/RGUArtistFooterSection.php");
            ?>
</form>

</body>
</html>