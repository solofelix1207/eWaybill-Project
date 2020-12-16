<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    
    <?php
    // define your function
        function whatistoday(){

            echo "Today is " . date('l d-m-Y h:i:s A');
        }


        #whatistoday();
		//function to add two numbers
		function getsum($num1, $num2){
			$sum = $num1 + $num2;
			echo "Sum of the two numbers " . $num1 . " and " . $num2 . " = " . $sum;
		}
		
		//Global varia bles
		
		$x = 75;
		$y = 25;
		
		function addition(){
			$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
		}
		
		addition();
		//echo $z;
    ?>
	
	<?php
		echo $_SERVER['PHP_SELF'];
		echo "<br>";
		echo $_SERVER['SERVER_NAME'];
		echo "<br>";
		echo $_SERVER['HTTP_HOST'];
		echo "<br>";
		echo $_SERVER['HTTP_USER_AGENT'];
		echo "<br>";
		echo $_SERVER['SCRIPT_NAME'];
		echo $_SERVER['REQUEST_TIME'];
	?>

</body>
</html>