<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet"/>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        $n = 12;
        echo '<table border="1px solid">
        <th>';
        
        for ($i = 0 ; $i <= $n ; $i++) {
            echo '<td>', $i, '</td>';
        }
        echo '</th>';
        echo '<tr>';
        echo '<td>', $n , '</td>';
        for ($i = 0; $i <= $n; $i++) {
            echo '<td>', $i * $n, '</td>';
        }
        echo '</tr>';
        echo '</table>';
        ?>


    </body>
</html>
