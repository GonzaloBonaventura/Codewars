<?php
echo (DNA_strand("a/sd fg/hjkt /sa/da/ sdwqe23324234c/"));
echo "<br><br>";
echo (DNA_strand("aattggcc"));

function DNA_strand($dna) {
  return strtr(preg_replace("/[^ATGC]+/", "", strtoupper($dna)), ['T' => 'A', 'A' => 'T', 'G' => 'C', 'C' => 'G']);
}
?>