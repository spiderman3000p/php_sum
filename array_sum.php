<?php
$numbers = [];
$i = 10;
while(count($numbers) < 10){
    if(str_contains($i."", "7")){
        $str_digits = str_split($i);
        $toNumberFn = function($str){
            return intval($str);
        };
        $digits = array_map($toNumberFn, $str_digits);
        $sum = array_sum($digits);
        if($sum == 10){
            echo "$i,";
            array_push($numbers, $i);
        }
    }
    $i++;
}
?>