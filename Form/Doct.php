<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example of php GET METHOD</title>
</head>
<body>
    <?php
    if(isset($_GET["name"])){
        echo "<p> HI ," .$_GET["name"]."</p>";
    }

    ?>
    <form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="inputName">Name</label>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="submit">
    </form>
    
    
</body>
</html>