<?php
$emitir = spinWords(" hola Amigo mIo ");
echo $emitir;
echo spinWords($emitir);
 function spinWords(string $str): string {
  	$str = trim(preg_replace("/[^a-zA-Z -]+/", "", $str), " ");
  	$strarr = explode(" ", $str);
  	$output = "";
  	foreach ($strarr as $key => $value) {
      $output .= ((strlen($strarr[$key]) >= 5) ? strrev($strarr[$key]) : $strarr[$key]) . " ";
  	}
  	return rtrim($output," ");
 }
?>