<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EXAMPLE OF PHP GET METHOD</title>
</head>
<body>

	<form action="" method="post">
		<label for="">Name</label>
		<input type="text" name="come">
		<input type="Submit" name="submit" value="Submit">
	</form>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
~
		$name = $_POST["come"];

		if(empty($name)){
			echo "<br>" . "Get out, box shouldn't be empty :(";
		} else {
			echo "<p>Hi, " . $name . "</p>";
		}
	}

	?>
	
</body>
</html>