<!DOCTYPE html>

<!-- NB: add comments, sort formatting! -->

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registration Page</title>
        <link rel="stylesheet" type="text/css" href="../Resources/CSS/styleSheet.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">

    </head>


    <body>

    <main>

        <div class="bg">
            <br/>
            <img style="vertical-align: top; display: inline; height: 75px; width: 300px" src="../Resources/Images/Robert_Gordon_University.png" alt="Logo">
            <h2>Create New Account</h2>
            <form action="RegisterUser.php" method="post" autocomplete="off">
                <input type="username" name="username" placeholder="Username" onfocus="this.placeholder=''" onblur="this.placeholder='Username'" required/>
                <input type="email" name="email" placeholder="Email Address" onfocus="this.placeholder=''" onblur="this.placeholder='Email Address'" required/>
                <input type="password" name="password" placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder='Password'" required/>
                <input type="tel" name="phone" placeholder="Mobile Number" onfocus="this.placeholder=''" onblur="this.placeholder='Mobile Number'" required/>
                <br><br>
                <input class="inputButton" type="submit" name="submit" value="Create Your Account">
            </form>

            <p>Already have an account? <a href="../Login/login.php">Click here</a> to login</p>
        </div>

    </main>

    </body>

</html>