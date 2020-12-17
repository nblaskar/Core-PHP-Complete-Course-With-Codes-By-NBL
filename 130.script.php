<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programming</title>
</head>
<body>
    <h1>HTML Inside PHP</h1>
<?php
	echo "<span>Your Name is: </span>" . "<span style='color:red;'>" . $_POST["names"] . "</span>";
?>
<h1>PHP Inside HTML</h1>

<span>Your Name is: </span>
<span style="color:green;"><?php echo $_POST["names"];?></span>



</body>
</html>