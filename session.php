<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EXAMPLE OF PHP GET METHOD</title>
</head>
<body>

	<?php
		session_start();

		// storing session data
		$_SESSION["firstname"] = 'Peter';
		$_SESSION["lastname"] = 'Parker';

		if (isset($_SESSION['lastname'])) {
			unset($_SESSION["lastname"]);
		}

		echo "Hi " . $_SESSION["lasttname"];
		// Use unset to kill a variable. use session_destroy() to kill all of them


	?>


</body>
</html>