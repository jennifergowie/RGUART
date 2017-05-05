<?php
//An implemented api function that should return a list of all users within the profilepictures table.
    include("dbConnect.php");

        if(function_exists($_GET['method'])){
            $_GET['method']();
    }

    //Method to get all user profile pictures
    function getAllImages(){
        $sqlImages = mysqli_query("SELECT * FROM profilepictures");
        $allImages = array();

            while($allImage = mysql_fetch_array($sqlImages)){
                $allImages[] = $allImage;
            }

            $allImages = json_encode($allImages);
            echo $_GET['jsoncallback'].'('.$allImages.')';
    }
    ?>