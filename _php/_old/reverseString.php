<?php

function reverseString($str) {
  function processReverse($sub, $reversed) {
    if (strlen($sub) === 0) return $reversed;
    $reversed .= substr($sub, -1);
    return processReverse(substr($sub, 0, -1), $reversed);
  }

  $reversed = substr($str, -1);
  $sub = substr($str, 0, -1);

  return processReverse($sub, $reversed);
}

print_r(reverseString('bonjour'));
