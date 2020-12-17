<!--process-1 -->
<!-- <?php
    echo $_REQUEST["password"];
    echo "Form Submitted";
?> -->


<!-- Process-2 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programming</title>
</head>
<body>

    <!-- <h1>HTML Inside PHP</h1> -->
    <!-- Example-1 -->
    <!-- <?php
        echo "<span>Your Password is: </span>" . "<span style='font-weight:bold;'>" . $_REQUEST["password"] . "</span>";
    ?> -->
    <!-- Example-2 -->
    <!-- <?php
        if($_REQUEST["password"]=="Hello")
        {
            echo "<b>Welcome to PHP Deshboard</b>";
        }
        else
        {
            echo "You have entered Wrong Password: ". $_REQUEST["password"];
        }
    ?> -->





    <h1>PHP Inside HTML</h1>
         <!-- Example-3 -->
    <!-- <span>Your Password is: </span> <span style="color:red;"><?php echo $_REQUEST["password"];?></span> -->

    <!-- Example-4 -->
        <?php
        if($_REQUEST["password"]=="Hello") { ?> 
        <h1>Welcome to PHP Deshboard</h1>
        <?php } else { ?>
        <span>You have entered Wrong Password: </span> <?php echo $_REQUEST["password"];} ?>


</body>
</html>