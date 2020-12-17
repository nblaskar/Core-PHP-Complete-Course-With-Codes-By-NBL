<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programming</title>
</head>
<body>
    <?php
    foreach($_REQUEST as $key => $values){
        if(is_array($values)){
            foreach($values as $data){
                echo "$key= $data" . "<br>";
            }

        } else{
            echo "$key=  $values" . "<br/>";
        }

    }
  
    ?>
</body>
</html