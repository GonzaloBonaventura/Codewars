function brainfuck(string $code, string $input): string {
  $codepointer = 0;
  $ptr = 0;
  $memory = array_fill(0, 2000, 0);
  $codearr = str_split($code);
  $inputarr = str_split($input);
  $output = "";
  while ($codepointer <= strlen($code)-1) {
    //,+[-.,+]
    switch ($codearr[$codepointer]) {
      case '>':
        $ptr++;
        break;
      case '<':
        $ptr--;
        break;
      case '+':
        $memory[$ptr]++;
        if ($memory[$ptr] == 256) {
          $memory[$ptr] = 0;
        }
        break;
      case '-':
        $memory[$ptr]--;
        if ($memory[$ptr] == -1) {
          $memory[$ptr] = 255;
        }
        break;
      case ',':
        if (count($inputarr) == 0) {
          break;
        }
        $memory[$ptr] = ord($inputarr[0]);
        array_shift($inputarr);
        break;
      case '.':
        $output .= chr($memory[$ptr]);
        break;
      case '[':
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