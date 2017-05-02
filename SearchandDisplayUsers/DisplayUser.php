<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Other Profile</title>
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
                <span>User Name </span><?php echo "<b>{$_SESSION["searchedStudentsName"]}</b>"?><br>
                <span>Student Name </span><?php echo "<b>{$_SESSION["searchedStudentsCourse"]}</b>"?><br>
                <span>Profile Picture </span><?php echo "<b>{$_SESSION["searchedStudentProfilePicture"]}</b>"?><br>
                <span>Year </span><?php echo "<b>{$_SESSION["searchedStudentYear"]}</b>"?><br>

    <nav style="margin-top: 5px">
    <ul>

        <li><a href="../Options.php" class="centered"><img height="50" width="50" class="navBarIcon centered"
        src="../Resources/Images/clematis.png" alt="HomeIcon;">View Published Art</a></li>
        <li><a href="..\Main\Options.php" class="centered"><img height="50" width="50" class="navBarIcon centered"
        src="../Resources/Images/clematis.png" alt="AccountIcon;">Main Menu</a></li>

    </ul>
</nav>
</body>
</html>