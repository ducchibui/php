<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My first PHP page</title>
    <style>
        h1 {color: green;}
        h4 {color: purple;}
    </style>
</head>
<body>
<header>
    <?php
    echo "<h1>This is my header</h1>";
    ?>
</header>
<?php
    $name ="Chi Bui";
    $name = false;
    echo "Hello world from PHP  $name";
?>
<footer>
    <?php
    echo "<h4>This is my footer</h4>"
    ?>
</footer>
</body>
</html>