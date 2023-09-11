<?php
function twoSum($arr, $targetNbr) {
  $indices = [];
  $values = [];

  foreach ($arr as $id => $nbr) {
    $missingNbr = $targetNbr - $nbr;

    if (isset($indices[$missingNbr])) {
      $values[] = [$indices[$missingNbr], $id];
    }

    $indices[$nbr] = $id;
  }

  return $values;
}

print_r(twoSum([2, 4, 6, 8, 10], 14));
