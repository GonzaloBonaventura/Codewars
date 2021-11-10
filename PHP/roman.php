<form method="post">
    <input type="text" name="roman" pattern="[A-Za-z]+" title="Introduzca letras unicamente" placeholder="Numeros romanos"><br>
    <input type="submit" name="submit">
</form>
<?php
if (isset($_POST['roman'])) {
   echo solution(strtoupper($_POST['roman']));
}
function solution ($roman) {
  $number = 0;
  
  $romans = array(
    'M' => 1000,
    'CM' => 900,
    'D' => 500,
    'CD' => 400,
    'C' => 100,
    'XC' => 90,
    'L' => 50,
    'XL' => 40,
    'X' => 10,
    'IX' => 9,
    'V' => 5,
    'IV' => 4,
    'I' => 1,
);
foreach ($romans as $key => $value) {
   while (strpos($roman, $key) === 0) {
      $number += $value;
      $roman = substr($roman, strlen($key));
   }
}

  return $number;
}
?>