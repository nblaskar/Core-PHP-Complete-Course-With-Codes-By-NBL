<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programming</title>
</head>
<body>
   <form action="139.script.php" method="POST">
        Name: <input type="text" name="name"><br>
        Roll: <input type="text" name="roll"><br>
        Course: <br>
            <select name="course[]" multiple>
                <option value="PHP">PHP</option>
                <option value="Java">Java</option>
                <option value="JS">JS</option>
                <option value="CSS">CSS</option>
            </select><br>  
        <input type="submit" value="Submit">
    </form>
</body>
</html