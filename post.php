<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EXAMPLE OF PHP GET METHOD</title>
</head>
<body>

	<?php


	// if(isset($_POST["come"])){
		// echo "<p>Hi, " . $_POST["come"] . "</p>";
	// }

	if (isset($_REQUEST["come"])) {
		echo "<h1>HELLO, " . $_REQUEST["come"] . "</h1>";
	}

	?>

	<form action="" method="post">
		<label for="">Name</label>
		<input type="text" name="come">
		<input type="Submit" name="submit" value="Submit">
	</form>
	
</body>
</html>