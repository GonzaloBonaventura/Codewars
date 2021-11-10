<?php
echo alphabet_position("hola a todos");
function alphabet_position(string $s): string {
  $s = strtolower(preg_replace("/[^a-zA-Z]+/", "", $s));
  $alphabet = range('a', 'z');
  if (strlen($s) == 0) {
		return $s;
  }
  $strarr = str_split($s);
  $output = "";
  foreach ($strarr as $value) {
  	$output .= (array_search($value, $alphabet) + 1) . " ";
  }
  return(rtrim($output));

}
?>