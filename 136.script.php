<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programming</title>
</head>
<body>
    <?php
        $data=$_REQUEST["family"];
        echo str_replace("\n","<br>",$data);
    ?>
</body>
</html