<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programming</title>
</head>
<body>
   <form action="137.script.php" method="POST">
       Date of Birth: <input type="date" name="dob" value="<?php echo date('d-m-Y') ?>">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html