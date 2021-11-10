	<?php
	function toCamelCase($str){
		$primero = true;
		$letters = "";
		$output = "";
		$length = strlen($str);
		$thisWordCodeVerdeeld = array();
		for ($i=0; $i<$length; $i++) {
			if ($i == 0 && $str[$i] != '-' && $str[$i] != '_') {
		  	  $output .= $str[$i];
		  	  $letters = "";
			}else{
				if ($str[$i] == '-' || $str[$i] == '_')  {
			    	if ($primero == true) {
			    		$output .= strtolower($letters);
			    		$letters = "";
			    		$primero = false;
			    	}else{
			    		$letters = strtolower($letters);
			    		$output .= ucfirst($letters);
			    		$letters = "";
			    	}

			    }else{
				    $letters .= $str[$i];
			 	}
			 	if ($i == $length -1) {
			 		if ($primero == true) {
			    		$output .= strtolower($letters);
			    		$letters = "";
			    		$primero = false;
			    	}else{
			    		$letters = strtolower($letters);
			    		$output .= ucfirst($letters);
			    		$letters = "";
			    	}
			 	}

			}


		    
		    
		}
		return($output);
	}
	?>


