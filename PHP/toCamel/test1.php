<!DOCTYPE html>
<html>
<head>
	<title>To Camel</title>
</head>
<body>
	<?php
	echo toCamelCase2("_hola_HOLA_hOlA");
		function toCamelCase2($str){
	 	 return preg_replace_callback("~[_-](\w)~", function($m) { return strtoupper($m[1]); }, $str);
		}
		include('ConverttringToCamelCase.php');
	echo toCamelCase("_hola_HOLA_hOlA");

	?>
</body>
</html>