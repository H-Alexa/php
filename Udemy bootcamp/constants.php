<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<body>
    <?php
    define("name","Tatinee");
    define("sp","<br>");
    define("A",19);
    define("B",10);
    echo name,sp;
    
    function fun()
    {
        define("in","in function");
        echo A+B,sp;
        echo A-B,sp;
        echo A*B,sp;
        echo A/B,sp;
    }
    fun();
    echo in,sp;
    ?>
</body>
</html>