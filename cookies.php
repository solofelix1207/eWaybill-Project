<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookies</title>
</head>
<body>
    <?php 
    
    setcookie("username","John Cater", time()+30*24*60);

    // echo $_COOKIE["username];
    if (isset($_COOKIE["username"])) {
        echo $_COOKIE["username"];
    } else {
        echo "welcome guest";
    }
    ?>
</body>
</html>