<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web development</title>
</head>
<body>

    <?php

        echo "<h1>web-development</h1>";

        # variables
        $txt = 'hello world';
        $alpha = "<h4 style='color:red;'>IIPGH</h4>";

       echo $txt;
       echo $alpha;

       # data types
       $a = 123;
       var_dump($a);

       $b = -123
       ;
       var_dump($b);

       echo '<br>';

       $show_error = true;
       var_dump($show_error);

    //    Operators

        $x = 25;
        $y = 15;
        $z = "25";

        // echo $x % $y;

        var_dump($x == $z);
        var_dump($x === $z);

        //logical comparison


        $year = 2020;
        if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))){
            echo $year . " is a leap year";
        } else {
            echo $year . " is not a leap year";
        }


        


    ?>
</body>
</html>