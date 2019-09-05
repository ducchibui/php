<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My first PHP page</title>
    <style>
        h1 {
            color: green;
        }

        h4 {
            color: purple;
        }
    </style>
</head>
<body>
<?php
include "header.php";
?>
<h3>
    <?php
    //single comment
    define("GST",5);
    $name = "Chi Bui";
    $name = false;
    echo "Hello world from PHP  $name" . GST;
    ?>
</h3>
<?php
include "footer.php";
?>
</body>
</html>