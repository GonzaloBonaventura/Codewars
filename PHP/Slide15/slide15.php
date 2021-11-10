<!DOCTYPE html>
<html>
<head>
	<title>Puzzle</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<?php
		$exist = false;
		$simpleExample = [
	    [ 1, 2, 3, 4],
	    [ 5, 0, 6, 8],
	    [ 9,10, 7,11],
	    [13,14,15,12]
		];

		
		if (isset($_GET["id"])) {
			$exist = true;
		}
		

		foreach ($simpleExample as $ids => $val) {
			foreach ($val as $ids2 => $val2) {
				if ($val2 == 0) {
					$nums = $ids;
					$nums2 = $ids2;
					//echo $ids . $ids2;
				}
			}
		}
		
		$inc = 0;
		foreach ($simpleExample as $key => $value) {
			echo "<br>";
			foreach ($value as $key2 => $value2) {
				$inc += 1;
				/*if (( ($key == $nums+1 && $key2 == $nums2) || ($key == $nums-1 && $key2 == $nums2) ) || (($key2 == $nums2+1 && $key == $nums) || ($key2 == $nums2-1 && $key == $nums))) {
					echo "<a class=\"press\" href=\"slide15.php?id=" . $inc . "\">" . $value2 . "</a>";
				}else{ */
					echo "<a class=\"press\">" . $value2 . "</a>";
				//}
			}
		}

	?>
</body>
</html>