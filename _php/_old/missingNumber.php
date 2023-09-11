<?php

function missingNumber0 ($arr) {
  $max = max($arr);
  $min = min($arr);
  $flipped = array_flip($arr);
  $missing = null;

  for ($i = $min; $i < $max; $i++) {
    if (!isset($flipped[$i])) {
      $missing = $i;
    }
  }

  return $missing;
}

function missingNumber ($arr) {
  $max = max($arr);
  $min = min($arr);
  $expectedSum = (((count($arr) + 1) / 2) * ($max + $min));
  $currentSum = array_sum($arr);

  return $expectedSum - $currentSum;
}

print_r(missingNumber([5, 9, 8, 7]));
