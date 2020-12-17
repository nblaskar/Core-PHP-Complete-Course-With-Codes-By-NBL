<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programming</title>
</head>
<body>
    <?php

    //its wrong way.you will get error if all are not checked
        // echo "You Have Selected: <br/>";
        // echo $_REQUEST["check1"] . "<br/>";
        // echo $_REQUEST["check2"] . "<br/>";
        // echo $_REQUEST["check3"] . "<br/>";


    //Correct way is:-
    echo "You have selected: <br/>";
    if(isset($_REQUEST["check1"])){
        echo $_REQUEST["check1"]."<br/>";
    }
    if(isset($_REQUEST["check2"])){
        echo $_REQUEST["check2"]."<br/>";
    }
    if(isset($_REQUEST["check3"])){
        echo $_REQUEST["check3"]."<br/>";
    }
    
    ?>
</body>
</html