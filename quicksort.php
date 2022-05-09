<?php

function quicksort(array $array){
    // pick a povit from array
    if(count($array) < 2){
        return $array;
    }else{
     // partition the array
        $pivot = $array[0];
        $listLeft = [];
        $listRight = [];
        for($i = 1; $i < count($array);$i++){
            if($array[$i] <= $pivot){
              array_push($listLeft,$array[$i]);
            }else{
                $listRight[] = $array[$i];
            }
        }      
    }

    return array_merge(quicksort($listLeft),[$pivot],quicksort($listRight));
}


$number = [10,5,2,3];

var_dump(quicksort($number));