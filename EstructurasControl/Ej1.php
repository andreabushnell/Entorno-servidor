<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        for ($i = 1; $i < 10; $i++) {
            for ($j = 1; $j <= 10; $j++) {
                echo $i * $j;
            }
            echo "<br>";
        }
        ?>
    </body>
</html>