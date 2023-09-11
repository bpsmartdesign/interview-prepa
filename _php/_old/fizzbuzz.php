<?php

function fizzbuzz($maxN) {
  function processTransform($n, $maxN, $str) {
    if ($n === $maxN) {
      return $str;
    }

    if ($n % 3 === 0) {
      $str .= 'fizz';
    } elseif ($n % 5 === 0) {
      $str .= 'buzz';
    } elseif ($n % 5 === 0 && $n % 3 === 0) {
      $str .= 'fizzbuzz';
    } else {
      $str .= $n;
    }

    $n++;
    return processTransform($n++, $maxN, $str);
  }

  return processTransform(1, $maxN, '');
}

print_r(fizzbuzz(22));
