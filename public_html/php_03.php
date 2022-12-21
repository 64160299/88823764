<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet"/>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="php_03.php" method="post">
            Enter Number: <input type="text" name="num">
            <input type="submit">
        </form>
        <?php
            $n;
            isset($_POST["num"]) ? $n = $_POST["num"] : $n = 0;
            echo "<br>\n";

            echo "Multiplication table for number " , $n;
            echo '<table border="1px solid">
            <th>';
            
            for ($i = 0 ; $i <= 12 ; $i++) {
                echo '<td>', $i, '</td>';
            }
            echo '</th>';
            echo '<tr>';
            echo '<td>', $n , '</td>';
            for ($i = 0; $i <= 12; $i++) {
                echo '<td>', $i * $n, '</td>';
            }
            echo '</tr>';
            echo '</table>';
        ?>

    </body>
</html>
