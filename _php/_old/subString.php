<?php
function subLength($str) {
  $maxSub = [];
  $tmpSub = [$str[0]];

  for ($i = 1; $i < strlen($str); $i++) {
    if (count($tmpSub) > count($maxSub)) {
      $maxSub = $tmpSub;
    }

    if (in_array($str[$i], $tmpSub)) {
      $maxSub = $tmpSub;
      $tmpSub = [$str[$i]];
    } else {
      $tmpSub[] = $str[$i];
    }
  }

  return implode('', $maxSub);
}

print_r(subLength('opuiupcdde'));