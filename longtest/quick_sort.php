<?php
include 'createLongArray.php';

function core($e){
    if(count($e) <= 1){
        return $e;
    }
    else{
        $pivot = $e[0];
        $left = array();
        $right = array();
        for($i = 1; $i < count($e); $i++)
        {
            if($e[$i] < $pivot){
                $left[] = $e[$i];
            }
            else{
                $right[] = $e[$i];
            }
        }
        return array_merge(core($left), array($pivot), core($right));
    }
}
function quick_sort($e)
 {
    $interation=0;
    $start=microtime(true);
    $test=$e;
    $e2=array_map('floatval', explode(';', $test));
    echo "Serie : ",implode(";",$e2),"\n";

    $res=core($e2);

    $diff=microtime(true)-$start;
    echo "Resultat : ",implode(";",$res),"\n";
     echo "Temps (sec) : $diff\n";
     echo "Nb d'itération : $interation\n";
}
$e= createArray();
quick_sort($e);
