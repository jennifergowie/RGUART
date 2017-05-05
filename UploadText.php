<!DOCTYPE html>
<!--This file calls the Textfileupload.php to load the text files.
For this http://www.php-mysql-tutorial.com/wikis/mysql-tutorials/uploading-files-to-mysql-database.aspx
was consulted.-->

<?php include("SessionCheck.php");?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Text file</title>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/styleSheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rakkas|Quicksand">
</head>
<body>

<header style="display: inline">
    <div class="bg">
        <br/>
        <center><img style="vertical-align: top; display: inline; height: 75px; width: 300px" src="Resources/Images/Robert_Gordon_University.png" alt="Logo"></center><br/>
        <br/>
        <form method="post" action="TextFileUpload.php" enctype="multipart/form-data">
            <h3>Upload Text file</h3>
            <center><table>
                    <tr>
                        <td width="246">

                            <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                            <input name="userfile" type="file" id="userfile">

                        </td>
                        <td width="80"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
                    </tr>
            </center></table>
        </form>
        <?php
        include("Resources/HeaderandFooterSections/RGUArtistFooterSection.php");
        ?>

    </div>

</header>

</main>
</body>


</html>