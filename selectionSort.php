<?php

function swap(array $array, $firstIndex, $secondIndex)
{
  $temp = $array[$firstIndex];
  $array[$firstIndex] = $array[$secondIndex];
  $array[$secondIndex] = $temp;

  return $array;
};

function indexOfMinimum(array $numbers, $startIndex)
{


  $minValue = $numbers[$startIndex];
  $minIndex = $startIndex;
  for ($i = $minIndex + 1; $i < count($numbers); $i++) {
    if ($numbers[$i] < $minValue) {
      $minIndex = $i;
      $minValue = $numbers[$i];
    }
  }
  return $minIndex;
}


$selectionSort = function (array $array) {
  $sortArray = 0;
  for ($i = 0; $i < count($array); $i++) {

    $sortArray = indexOfMinimum($array, $i);
    $array = swap($array, $sortArray, $i);
  }
  return $array;
};


print_r($selectionSort([5, 3, 6, 2, 10, -1, 0]));
