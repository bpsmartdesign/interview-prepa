<?php

// Reduce variable declarations and number of variable
const VOWELS = ['a', 'e', 'i', 'o', 'u'];

// This function has a complexity of O(n^2) due to reccursivity
function countVowels0 ($str) {
  function processCount0 ($sub, $vowelNbr) {
    if (strlen($sub) === 0) {
      return $vowelNbr;
    }

    if (isset(array_flip(VOWELS)[$sub[0]])) {
      $vowelNbr++;
    }

    return processCount0(substr($sub, 1), $vowelNbr);
  }

  return processCount0($str, 0);
}

// This function has a complexity of O(n) due to one loop and hash table
function countVowels ($str) {
  $vowelNbr = 0;
  $vowelHash = array_flip(VOWELS);

  for ($i = 0; $i < strlen($str); $i++) {
    if (isset($vowelHash[$str[$i]])) {
      $vowelNbr++;
    }
  }

  return $vowelNbr;
}

print_r(countVowels('bonjourno'));
