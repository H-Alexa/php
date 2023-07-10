<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <h3 style="color: purple; text-align:center">Learning about variables</h3> 
    <?php
        $a = 3;
        $b = 6;
        echo $a+$b;
        echo "<br>";
        echo $a-$b;
        echo "<br>";
        echo $a*$b;
        echo "<br>";
        echo $a/$b;
        echo "<br>";
        echo $a%$b;
        echo "<br>";
        
        $name = "Tatin";
        echo $name;
        echo "<br>";

        function myfun()
        {
            echo "<h4>Ho ho ho</h4>";
            $name ="Meow";
            echo $name;
            global $name;
        }
        
        myfun();
        echo $name;
    ?>
</body>
</html>