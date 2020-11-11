<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web development</title>
</head>
<body>

    <?php
        $today = date("D");

        switch($today){
            case "Mon":
                echo "Today is Monday";
                break;
            case "Tue":
                echo 'Today is Tuesday';
                break;
            case "Wed":
                echo 'Today is Wednesday';
                break;
            case "Thur":
                echo 'Today is Thursday';
                break;
            case "Fri":
                echo 'Today is Friday';
                break;
            case "Sat":
                echo 'Today is Saturday';
                break;
            case "Sun":
                echo 'Today is Sunday';
                break;
            default:
                echo "No information available for that day";
            break;


        }

    ?>
</body>
</html>