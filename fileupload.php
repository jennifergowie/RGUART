<!DOCTYPE html>
<!--This file calls the uploads.php file to load the users profile picture.
This php file uploads the choosen profile picture to the user profile database.
For this http://www.php-mysql-tutorial.com/wikis/mysql-tutorials/uploading-files-to-mysql-database.aspx
was consulted.-->

<?php include("SessionCheck.php");?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Profile Picture</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/styleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">
</head>
<body>

<header style="display: inline">
    <div class="bg">
        <br/>
        <center><img style="vertical-align: top; display: inline; height: 75px; width: 300px" src="Resources/Images/Robert_Gordon_University.png" alt="Logo"></center><br/>
            <br/>
            <form method="post" action="uploads.php" enctype="multipart/form-data">
            <table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
                <tr>
                <td width="246">
                    <input name="userfile" type="file" id="userfile">
                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                </td>
                <td width="80"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
                </tr>
                </table>
</form>
    </div>
</header>

</main>
</body>
<?php
include("Resources/HeaderandFooterSections/RGUArtistFooterSection.php");
?>

</html>