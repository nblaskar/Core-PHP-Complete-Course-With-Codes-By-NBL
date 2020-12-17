<!-- Validatinon -->
<?php
    if(isset($_POST['submit'])){
          $username= $_POST['username'];
          $password= $_POST['password'];
         if(strlen($username) <=8)
          {
             echo "<span style='color:red;'>Username Should be more than 8 characters</span>";
         }
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programming</title>
</head>
<body>

    <form action="" method="POST">
       Username:<input type="text" name="username"><br><br>
       Password:<input type="text" name="password"><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>