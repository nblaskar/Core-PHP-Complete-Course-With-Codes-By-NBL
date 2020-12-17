<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programming</title>
</head>
<body>
    <?php
    //-->Wrong Way
//    echo $_REQUEST["gender"];
    //Correct Way
    if(isset($_REQUEST["gender"])){
        echo $_REQUEST["gender"];
    } else{
        echo "Please select Gender....";
    }
    
    ?>
</body>
</html