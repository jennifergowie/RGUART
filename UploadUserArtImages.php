<!DOCTYPE html>
<!--This file calls the upLoadUserImages.php file to load the users images.
This php file uploads the user file to the userImages table.
For this http://www.php-mysql-tutorial.com/wikis/mysql-tutorials/uploading-files-to-mysql-database.aspx
was consulted.-->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Images</title>
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
        <h3>Upload Image</h3>
            <form method="post" action="uploadUserImages.php" enctype="multipart/form-data">
            <table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
                <tr>
                    <td width="246">
                        <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                        <input name="userfile" type="file" id="userfile">
            </td>
            <td width="80"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
        </tr>
    </table>
</form>

        <?php
        include("Resources/HeaderandFooterSections/RGUArtistFooterSection.php");
        ?>

</main>
</body>

</html>

