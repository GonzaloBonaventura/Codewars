<?php
function brainfuck(string $code, string $input): string {
  $codepointer = 0;
  $ptr = 0;
  $memory = array_fill(0, 30000, 0);
  $codearr = str_split($code);
  $inputarr = str_split($input);
  $output = "";
  $loopcount = 0;
  while ($codepointer <= strlen($code)-1 && $loopcount != 10000) {
    //echo "CODE = " . $codepointer . ". & pointer = " . $ptr . ". & mem = " . $memory[$ptr] . ". & tempout = " . $output . "<br>";
    switch ($codearr[$codepointer]) {
      case '>':
        //echo '><br>';
        $ptr++;
        break;
      case '<':
        //echo '<<br>';
        $ptr--;
        break;
      case '+':
        //echo '+<br>';
        $memory[$ptr]++;
        if ($memory[$ptr] > 255) {
          $memory[$ptr] = 0;
        }
        break;
      case '-':
        //echo '-<br>';
        $memory[$ptr]--;
        if ($memory[$ptr] < 0) {
          $memory[$ptr] = 255;
        }
        break;
      case ',':
        //echo ',<br>';
        if (count($inputarr) == 0) {
          break;
        }
        $memory[$ptr] = ord($inputarr[0]);
        array_shift($inputarr);
        break;
      case '.':
        //echo '.<br>';
        $output .= chr($memory[$ptr]);
        break;
      case '[':
        //echo '[<br>';
        $loopcount++;
        if ($memory[$ptr] == 0){
          $ignore = 0;
          while ($ignore > -1){
            $codepointer++;
            if ($codearr[$codepointer] == '[') {
              $ignore++;
            }
            if ($codearr[$codepointer] == ']') {
              $ignore--;
            }
          }
        }
        break;
      case ']':
        //echo ']<br>';
        $ignore = 0;
          while ($ignore > -1){
            $codepointer--;
            if ($codearr[$codepointer] == ']') {
              $ignore++;
            }
            if ($codearr[$codepointer] == '[') {
              $ignore--;
            }
          }
          $codepointer--;
        break;
      default:
        $codepointer++;
        break;
    }
    $codepointer++;
  }
  return $output;
}