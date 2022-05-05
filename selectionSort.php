<?php

function swap (array $array, $firstIndex, $secondIndex) {
    echo '<pre>';
  //  echo $firstIndex;
    $temp = $array[$firstIndex];
    $array[$firstIndex] = $array[$secondIndex];
    $array[$secondIndex] = $temp;

     return $array;
};

function indexOfMinimum(array $numbers,$startIndex){

   
    $minValue = $numbers[$startIndex];
    $minIndex = $startIndex;

    for($i = $minIndex + 1; $i < count($numbers);$i++){
        echo '<pre>';

      if($numbers[$i] < $minValue ){
            $minIndex = $i;
            $minValue = $numbers[$i];
          
      }
    }
    return $minIndex;
}

 function findsmallest(array $array){
        $smallest = $array[0] ;
        $smallest_index = 0;
        for($i = 0; $i < count($array);$i++){
           
            if($array[$i] < $smallest){
                $smallest = $array[$i];
                $smallest_index = $i;
            }
        }
        return $smallest_index;
};


$selectionSort = function(array $array){
    $newArr = [];
    $sortArray = 0;
    for($i = 0; $i < count($array);$i++){
       // $smallest = indexOfMinimum($array,2);
        $sortArray = indexOfMinimum($array,$i);
        $array = swap($array,$sortArray,$i);
      
    }
    
  return $array;
};


print_r($selectionSort([5,3,6,2,10,-1,0]));

