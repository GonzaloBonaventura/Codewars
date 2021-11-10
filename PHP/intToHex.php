<form method="post">
	<input type="number" name="r" placeholder="red"><br>
	<input type="number" name="g" placeholder="green"><br>
	<input type="number" name="b" placeholder="blue"><br>

	<input type="submit" name="submit">
</form>
<?php

if (isset($_POST['r'])) {
	echo rgb($_POST['r'],$_POST['g'],$_POST['b']);
}

function rgb($r,$g,$b){
  $rs = toHex($r);
  $gs = toHex($g);
  $bs = toHex($b);
  return ($rs.$gs.$bs);
}
function toHex($num){
  if($num <= 0){
    return("00");
  }
  if($num >= 255){
    return("FF");
  }
  $hex = strtoupper(dechex($num));
  if (strlen($hex) == 1) {
  	return("0".$hex);
  }else{
  	return $hex;
  }
}
?>