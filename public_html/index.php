<!DOCTYPE html>
<html>

<head>
    <h1>This is head</h1>
</head>

<body>
    <?php
    // Scope GLOBAL
        $x = 4;
        function assignx()
        {
            // Scope LOCAL           
            $x = 0;
            print "\$x inside function is $x. <br />";
            global $x; // Decare to use GLOBAL        
            print "\$x (2) inside function is $x. <br />";
            // STATIC        
            static $a = 0;
            $a++;
            echo "\$a is $a\n";
            echo "<br>";
        }
        assignx();
        assignx();
        assignx();
        print "\$x outside of function is $x. <br />";
    ?>
</body>

</html>