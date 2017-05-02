<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RGU Student Art - Login Page</title>
    <link rel="stylesheet" type="text/css" href="../Resources/CSS/styleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">

</head>
<body>
<form action="LoginValidation.php" method="post">
    <main>
        <div class="bg">
            <br/>
            <img style="vertical-align: top; display: inline; height: 75px; width: 300px" src="../Resources/Images/Robert_Gordon_University.png" alt="Logo"><br/>
            <br/>

            <h2>Welcome to RGU Artist</h2>

            <input type="username" name="username" placeholder="User Name" onfocus="this.placeholder=''" onblur="this.placeholder='Matriculation Number'" required><br>
            <input type="password" name="password" placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder='Password'" required><br>
            <button class="inputButton" type="submit">Login</button><br/>
            <span><input type="checkbox" checked="checked">Keep me logged in</span><br/>
        </form>
            <div class="container">
                <br/>
                <br/>
                <span>Don't have an account? Click <a href="../RegisterUser/Register.php">here</a> to register</span>
            </div>


        <?php
        include("../Resources/HeaderandFooterSections/RGUArtistFooterSection.php");
        ?>

</main>
</body>

</html>

