<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programming</title>
</head>
<body>
    <?php
    echo "Date of Birth: ";
        // echo $_REQUEST["dob"];

        $new_date=date('d-m-Y',strtotime( $_REQUEST["dob"]));
        echo $new_date;
     ?>
</body>
</html