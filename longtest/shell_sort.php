<?php
include 'createLongArray.php';
function shell_sort($eString){

    $start=microtime(true);
    $test=$eString;
    $e=array_map('floatval', explode(';', $test)); 
    echo "Série : ",implode(";",$e),"\n"; 
    $n= count($e);
    $inc = round(count($e)/2);
    $interation=0;
    while($inc>0){
        for ($i = 0; $i <=$n ; $i++) {
            $temp=$e[$i];
            $j=$i;
            while($j >= $inc && $e[$j-$inc] > $temp)
            {
				$e[$j] = $e[$j - $inc];
				$j -= $inc;
			}
			$e[$j] = $temp;
		}
        $inc = round($inc/2.2);
        $interation++; 
    }
    $stop=microtime(true);
    $diff=$stop-$start;
    echo "Résultat : ",implode(";",$e),"\n";
    echo "Temps (sec) : $diff\n";
    echo "Nb d'itération : $interation\n";
}
$eString=createArray();
shell_sort($eString);