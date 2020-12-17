<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programming</title>
</head>
<body>
    <?php
    //To Access the Information of a File
    //Process-1
    // print_r($_FILES["myfile"]);


    //Process-2
    // echo $_FILES["myfile"]["name"] . "<br>";
    // echo $_FILES["myfile"]["type"] . "<br>";
    // echo $_FILES["myfile"]["tmp_name"] . "<br>";
    // echo $_FILES["myfile"]["error"] . "<br>";
    // echo $_FILES["myfile"]["size"] . "<br>";

    //To Save the file Permanently
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"138.images/".$_FILES["myfile"]["name"])){
        echo "Upload Successfull!";
    } else {
        echo "Failed to Upload";
    }
    
    ?>
</body>
</html