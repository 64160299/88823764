<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet"/>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <form action="php_04.php" method="post">
            Enter Start: <input type="text" name="num"><br>
            Enter End: <input type="text" name="num2">
            <input type="submit">
        </form>
        <?php
        $end;
        $start;
        isset($_POST["num"]) ? $start = $_POST["num"] : $start = 0;
        isset($_POST["num2"]) ? $end = $_POST["num2"] : $end = 0;
        echo "<br>\n";
        for ($i = $start ; $i <= $end ; $i++) {
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