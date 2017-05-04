<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Public Profile</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/styleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">

</head>
<body>
    <main>
        <div class="bg">
            <br/>
            <img style="vertical-align: top; display: inline; height: 75px; width: 300px" src="Resources/Images/Robert_Gordon_University.png" alt="Logo"><br/>
            <br/>
            <?php
                //include "dbConnect.php";
                include "loadprofile.php";
            ?>

        <li><a href="Options.php" class="centered"><img height="50" width="50" class="navBarIcon centered"
                                                           src="Resources/Images/clematis.png" alt="HomeIcon;">View Published Art</a></li>
        <li><a href="Options.php" class="centered"><img height="50" width="50" class="navBarIcon centered"
                                                                src="Resources/Images/clematis.png" alt="AccountIcon;">Main Menu</a></li>

    </ul>
        </div>
    </main>
</nav>
</body>
</html>