<?php
function createArray(){
    $n = 1000;  
$numbers = range(0, $n-1);
$rands = array();
for ($i=0; $i < $n; $i++) {
  $ok = false;
  while (!$ok) {
    $x = array_rand($numbers);
    $ok = !in_array($numbers[$x], $rands) && $numbers[$x] != $i;
  }
  $rands[$i] = $numbers[$x];
  unset($numbers[$x]);
}
$stringRand= implode(";",$rands);
return $stringRand;
}