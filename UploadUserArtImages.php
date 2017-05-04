<!DOCTYPE html>

<!-- NB: add comments, sort formatting! -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Profile Picture</title>
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
        <h2>Update Profile Picture</h2>
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

