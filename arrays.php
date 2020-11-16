<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array php</title>
</head>
<body>
    <?php
        $colors = array("Red", "Green", "cyan", "Blue");

        $ages = array(
            "Peter" => 22,
            "Clark" => 32,
            "John" => 28
        );

        // printing array structure
        print_r($colors);
        rsort($colors);
        echo "<br>";
        print_r($colors);
        echo "<br>";
        echo "<h3>Variable dump</h3>";
        var_dump($colors);
        echo "<br>";
        print_r($ages);
        echo "<br>";
        
        

        // multidimentional arrays

        $contacts = [["name" => "Peter Parker", "email" => "peter@gmail.com"], ["name" => "John Parker", "email" => "john@gmail.com"], ["name" => "Eric Parker", "email" => "eric@gmail.com"]];

        print_r($contacts);
        echo "<br>";

        echo "Peter Parker's name is " . $contacts[2]["name"];

    ?>
</body>
</html>