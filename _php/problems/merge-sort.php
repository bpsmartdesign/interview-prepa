<?php
/**** PROBLEM 4 [Merge Sort]
 * Implement the merge sort algorithm to sort an array of integers in ascending order.
 */

 function processMerge (array $left, array $right): array {
  $result = [];

  while (count($left) > 0 && count($right) > 0) {
    $result[] = $left[0] <= $right[0] ? array_shift($left) : array_shift($right);
  }

  $result = array_merge($result, $left, $right);
  
  return $result;
}

function mergeSort (array $array): array {
  if (count($array) <= 1) return $array;

  $mid = floor(count($array) / 2);
  $left = array_slice($array, 0, $mid);
  $right = array_slice($array, $mid);

  $left = mergeSort($left);
  $right = mergeSort($right);
  
  return processMerge($left, $right);
}

$arr0 = [2, 3, 1];
$arr1 = [30, 29, 27, 26, 28, 32, 31];
$arr2 = [25, 12, 18, 7, 35, 29, 16, 21, 6, 14, 31, 9, 27, 3, 20, 2, 10, 32, 19, 23];
$arr3 = [50, 12, 35, 27, 42, 8, 19, 30, 16, 6, 48, 21, 3, 39, 14, 45, 9, 24, 33, 1, 38, 29, 18, 7, 11, 47, 32, 25, 4, 17];
$arr4 = [100, 75, 84, 63, 42, 91, 56, 37, 68, 29, 88, 47, 26, 66, 95, 54, 73, 82, 61, 40, 79, 58, 19, 98, 35, 74, 43, 22, 97, 15, 76, 45, 24, 93, 32, 71, 50, 89, 38, 67, 86, 65, 44, 83, 20, 59, 78, 57, 36, 85, 64, 21, 80, 39, 10, 99, 16, 55, 34, 77, 46, 94, 13, 92, 31, 70, 90, 69, 48, 27, 96, 5, 18, 87, 60, 49, 28, 7, 81, 41, 30, 9, 72, 51, 33, 12, 61, 23, 8, 62, 11, 52, 1, 53, 14, 5, 17, 4, 25, 2, 3, 6];
$arr5 = [500, 250, 125, 375, 62, 31, 187, 93, 468, 234, 117, 351, 175, 87, 421, 79, 496, 248, 124, 62, 31, 15, 483, 241, 120, 60, 30, 15, 7, 476, 238, 119, 57, 28, 14, 7, 3, 466, 233, 116, 58, 29, 14, 7, 3, 1, 498, 249, 124, 62, 31, 15, 7, 3, 1, 499, 250, 125, 62, 31, 15, 7, 3, 1, 500, 250, 125, 62, 31, 15, 7, 3, 1, 497, 249, 124, 62, 31, 15, 7, 3, 1, 498, 249, 124, 62, 31, 15, 7, 3, 1, 495, 248, 124, 62, 31, 15, 7, 3, 1, 494, 247, 123, 61, 30, 15, 7, 3, 1, 492, 246, 123, 61, 30, 15, 7, 3, 1, 493, 246, 123, 61, 30, 15, 7, 3, 1];

print_r(mergeSort($arr2));