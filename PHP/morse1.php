<?php
echo decode_morse('...');

	function decode_morse(string $code): string {
		$morsecode = array(
		    '.-'    => 'A',
		    '-...'  => 'B',
		    '-.-.'  => 'C',
		    '-..'   => 'D',
		    '.'     => 'E',
		    '..-.'  => 'F',
		    '--.'   => 'G',
		    '....'  => 'H',
		    '..'    => 'I',
		    '.---'  => 'J',
		    '-.-'   => 'K',
		    '.-..'  => 'L',
		    '--'    => 'M',
		    '-.'    => 'N',
		    '---'   => 'O',
		    '.--.'  => 'P',
		    '--.-'  => 'Q',
		    '.-.'   => 'R',
		    '...'   => 'S',
		    '-'     => 'T',
		    '..-'   => 'U',
		    '...-'  => 'V',
		    '.--'   => 'W',
		    '-..-'  => 'X',
		    '-.--'  => 'Y',
		    '--..'  => 'Z',
		    '.----' => '1',
		    '..---' => '2',
		    '...--' => '3',
		    '....-' => '4',
		    '.....' => '5',
		    '-....' => '6',
		    '--...' => '7',
		    '---..' => '8',
		    '----.' => '9',
		    '-----' => '0',
		    '...---...' => 'SOS',
		    '-.-.--' => '!',
		    '.-.-.-' => '.',
		    '---...' => ':',
		    '--..-' => ',',
		    '..--..' => '?',
		    '.-..-.' => '"',
		    '.-...' => '&',
		    '.--.-.' => '@',
		    '-..-.' => '/',
		    '-.--.' => '(',
		    '-.--.-' => ')',
		    '-...-' => '=',
		    '.-.-.' => '+',
		    '-....-' => '-',
		    '.----.' => '\'',

		  );
		$morsew = "";
		$output = "";
		$start = false;
		$space = false;
    	$length = strlen($code);
    	for ($n=0; $n < $length; $n++) { 
    		$c = $code[$n];
    		if ($c == "." || $c == "-" || $c == " ") {
    			//omite espacios iniciales:
	    		if ($start == false) {
	    			if ($c != " ") {
	    				$start = true;
	    				if ($c == "-") {
		    				$morsew .= "-";
		    			}
		    			if ($c == ".") {
		    				$morsew .= ".";
		    			}
	    			}
	    		}else{
	    			if ($c != " "){
	    				if ($space == true ) {
	    					var_dump($morsew);
	    					$output .= $morsecode[$morsew];
	    					$morsew = "";
	    					$space = false;
	    				}
	    				if ($c == "-") {
		    				$morsew .= "-";
		    			}
		    			if ($c == ".") {
		    				$morsew .= ".";
		    			}
	    				
	    			}
	    			if ($c == " "){
	    				if ($morsew != ""){
	    					if ($space == false) {
		    					$space = true;
		    				}else{
		    						$output .= $morsecode[$morsew] . " ";
		    						$morsew = "";
		    						$space = false;
		    				}
	    				}
	    			}
	    		}
    		}
    		
    	}//for end
    	if ($morsew != "") {
    		$output .= $morsecode[$morsew];
    	}
    	return($output);
	}//function end
?>