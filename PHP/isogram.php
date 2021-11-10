<?php
if (isIsogram("holaa")) {
	echo "true";
}else{
	echo "false";
}
	function isIsogram($string) {
		$lenght = strlen($string); // largo del string
		for ($n=0; $n < $lenght; $n++) { 
	  		$char1 = strtoupper($string[$n]);// char1 = caracter n en mayus
	  		for ($i=0; $i < $lenght; $i++) { 
	  			$char2 = strtoupper($string[$i]); //char2 = caracter i en mayus
	  			if ($char1 == $char2 && $i != $n) {
	  				return(false);	//si char1 y char 2 son iguales y $n e &i son diferentes (si son = es el mismo char)
	  			}
	  		}
	  	}
	  	return(true);
	}
?>