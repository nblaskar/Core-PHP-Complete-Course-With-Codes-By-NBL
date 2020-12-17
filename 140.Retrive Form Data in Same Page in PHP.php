<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programming</title>
</head>
<body>

    <?php
        if(isset($_POST['name']) && isset($_POST['roll'])){
            echo "<h1>Form Submitted!</h1>";
            echo "Name= " . $_POST['name'] . "<br/>";
            echo "Roll= " . $_POST['roll'] . "<br/>";
        } else {
    ?>


    <form action="" method="POST">
       Name:<input type="text" name="name"><br><br>
       Roll:<input type="text" name="roll"><br><br>
        <input type="submit" value="Submit">
    </form>
    <?php  } ?>
</body>
</html>