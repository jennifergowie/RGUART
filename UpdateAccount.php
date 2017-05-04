<!DOCTYPE html>

<!-- NB: add comments, sort formatting! -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/styleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">

</head>


<body>
    <?php
        include("SessionCheck.php");
    ?>

<main>

    <div class="bg">
        <br/>
        <img style="vertical-align: top; display: inline; height: 75px; width: 300px" src="Resources/Images/Robert_Gordon_University.png" alt="Logo">
        <h2>Update Account</h2>
        <form action="UpdateUserAccount.php" method="post" autocomplete="off">
            <!--<input type="username" name="username" placeholder="Username" onfocus="this.placeholder=''" onblur="this.placeholder='Username'" required/>-->
            <input type="email" name="email" placeholder="Email Address" onfocus="this.placeholder=''" onblur="this.placeholder='Email Address'" required/>
            <input type="password" name="password" placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder='Password'" required/>
            <input type="tel" name="phone" placeholder="Mobile Number" onfocus="this.placeholder=''" onblur="this.placeholder='Mobile Number'" required/>
            <input type="studentName" name="studentName" placeholder="Student Name" onfocus="this.placeholder=''" onblur="this.placeholder='StudentName'" required/>
            <input type="course" name="course" placeholder="Course" onfocus="this.placeholder=''" onblur="this.placeholder='Course'" required/>
            <input type="year" name="year" placeholder="Year" onfocus="this.placeholder=''" onblur="this.placeholder='Year'" required/>


            <br><br>
            <input class="inputButton" type="submit" name="submit" value="Update Your Account">
            <ul>
                <li><a href="Options.php" class="centered"><img height="50" width="50" class="navBarIcon centered"
                 src="Resources/Images/clematis.png" alt="LogoutIcon">Return to Menu</a></li
            </ul>

            <?php
            include("Resources/HeaderandFooterSections/RGUArtistFooterSection.php");
            ?>
        </form>

    </div>

</main>

</body>

</html>