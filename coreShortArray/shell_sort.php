<?php

function shell_sort($argv){

    foreach ($argv as $arg) {
        $e=explode(";",$arg);
        if(count($e)==2)
            $_GET[$e[0]]=$e[1];
        else   
            $_GET[$e[0]]=0;
    }
    echo "Série : ",implode(",",$e),"\n"; 
    $start=microtime(true);
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
    echo "Résultat : ",implode(",",$e),"\n";
    echo "Temps (sec) : $diff\n";
    echo "Nb d'itération : $interation\n";
	return $argv;
}
shell_sort($argv);