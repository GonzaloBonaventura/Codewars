<?php
function anagrams(string $word, array $words): array {
	$arrword = str_split($word);
	sort($arrword);
	$content = implode($arrword);
	$anagrams = array();
 	foreach ($words as $key => $value) {
 		if (strlen($value) === strlen($word)) {
 			$temp = str_split($value);
 			sort($temp);
 			if($content == implode($temp)){
 				$anagrams[] = $value;
 			}
 		}
 	}
 	return $anagrams;
}