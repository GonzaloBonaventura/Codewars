
 <?php
 /*takes in a string of one or more words
 all five or more letter words reversed
 Spaces will be included only when more than one word is present.
 Strings passed in will consist of only letters and spaces. */
$emitir = spinWords(" hola Amigo mIo ");
echo $emitir . "<br>";
echo spinWords($emitir);

 function spinWords(string $str): string {
  $str = trim(preg_replace("/[^a-zA-Z -]+/", "", $str), " ");
  $strarr = str_split($str);
  $recop = "";
  $output = "";
  foreach ($strarr as $key => $value) {
  	if ($value == " ") {
      $output .= ((strlen($recop) >= 5) ? strrev($recop) : $recop) . " ";
      $recop = "";
  	}else{
  		$recop .= $value;
  	}
    if(strlen($str) == $key + 1){
      $output .= (strlen($recop) >= 5) ? strrev($recop) : $recop;
    }
  }
  return($output);
}
 ?>