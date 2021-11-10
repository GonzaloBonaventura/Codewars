<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BF</title>
</head>
<body>
	<form method="post">
		<input type="text" name="code" placeholder="code">
		<input type="text" name="input" placeholder="input">
		<input type="submit" name="submit">
	</form>
	<?php
	if (isset($_POST['submit'])) {
		include "brainfuck.php";
		echo "<br>".brainfuck($_POST['code'],$_POST['input']);
	}
	?>
</body>
</html>