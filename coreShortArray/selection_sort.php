<?php
function selectionSort($argv)
{
    $interation=0;
    $start=microtime(true);

    foreach ($argv as $arg) {
        $e=explode(";",$arg);
        if(count($e)==2) $_GET[$e[0]]=$e[1];
        else $_GET[$e[0]]=0;
    }
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
selectionSort($argv);