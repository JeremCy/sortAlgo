<?php
include 'createLongArray.php';
function selectionSort($eString)
{
    $interation=0;
    $start=microtime(true);
    $test=$eString;
    $e=array_map('floatval', explode(';', $test));
    echo "Serie : ",implode(";",$e),"\n";     
    $eLength = count($e);
    for($i = 0; $i < $eLength; ++$i) {
        for($j = $i+1; $j < $eLength; ++$j) {
            if($e[$j] < $e[$i]) {
                $min = $e[$j];
                $e[$j] = $e[$i];
                $e[$i] = $min;
            }
        }
        $interation++; 
    }
    $diff=microtime(true)-$start;
    echo "Résultat : ",implode(";",$e),"\n";
    echo "Temps (sec) : $diff\n";
    echo "Nb d'itération : $interation\n";
}
$eString=createArray();
selectionSort($eString);