<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programming</title>
</head>
<body>
    <?php
        if(isset($_REQUEST["location"])){
            foreach($_REQUEST["location"] as $place){
                echo $place . "<br>";
            }
        }

    ?>
</body>
</html