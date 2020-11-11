<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web development</title>
</head>
<body>

    <?php
        $my_str = "Welcome to the world of computer programming";
        $our_str = 'Learning coding at the comfort of my home';

        $name = "John";
        $lastNme = "Doe";

        echo strlen($my_str);
        echo "<br>";

        echo str_word_count($my_str);

        echo '<br> Welcome Mr. ' . $name . ' ' . $lastNme;

        // String trimming
        $str =  "    Hello World! ";
        $stc = "hello world, how are you all doing today";
        echo "<br>  without trimming: " . $str;
        echo "<br> with trim:" . trim($str);

        // Convert upper and lower case
        echo '<br>' . ucfirst($stc);  # capitalize only de first word
        echo '<br>' . ucwords($stc);
        echo "<br> <br>";

        
        // conditional statements
        $day = date("D");
        if ($day == "Fri"){
            echo "Have a nice weekend";
        } elseif ($day == "Sun"){
            echo "Have a nice week ahead";
        } else {
            echo "Have a nice day";
        } 


    ?>
</body>
</html>