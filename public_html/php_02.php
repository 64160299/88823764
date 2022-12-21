<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet"/>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        for ($i = 1 ; $i <= 100 ; $i++) {
            echo $i, "\t";
            if ($i%2 == 0) {
                echo 'Even number';
            } else if ($i%2 != 0) {
                echo 'Odd number';
            }
            echo "<br>\n";
        }
        ?>
    </body>
</html>