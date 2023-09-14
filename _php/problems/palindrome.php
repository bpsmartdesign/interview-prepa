/**** PROBLEM 5 [Longest Palindromic Substring]
 * Given a string, find the longest substring that is a palindrome. A palindrome is a word,
 * phrase, number, or other sequence of characters that reads the same forward and backward.
 */

function palindrome (string $str): string {
  $maxSub = [];

  for ($i = 1; $i < strlen($str) - 1; $i++) {
    $pad = min($i, strlen($str) - $i - 1);
    $currentSub = [$str[$i]];

    for ($j = 1; $j <= $pad; $j++) {
      if ($str[$i - $j] === $str[$i + $j]) {
        array_push($currentSub, $str[$i - $j]);
        array_unshift($currentSub, $str[$i - $j]);
      } else {
        break;
      }
    }

    if (count($currentSub) > count($maxSub)) {
      $maxSub = $currentSub;
    }
  }

  return implode('', $maxSub);
}