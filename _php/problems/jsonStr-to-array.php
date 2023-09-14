<?php
/**** PROBLEM 1
 * Write a php function to convert a json to an array,
 * consider the fact that one or more values in the json can also be the json.
 * So your function should take that in consideration and transform everything,
 * at the end, we should have valid array , and all json should be transformed to array.
 * Your input json is a string
 */

function cleanJson (string $json): string {
  $json = trim($json);
  $json = preg_replace('/[\s\r\n]+/', ' ', $json);

  return $json;
}
function isValidJson (string $json): bool {
  return preg_match('/^(\{)(.*)(\})$/', $json);
}

// personal solution using regexp and recursion
function jsonToArray (string $json): array {
  $json = cleanJson($json);
  $array = [];

  // check if the string is a valid json
  if (!isValidJson($json)) return $json;

  // using regexp, retrieve all the keys and values
  $pattern = '/"(.*?)":\s*(?:(?<!\\\\)".*?(?<!\\\\)"|\d+|true|false|null|\{(?:[^{}]|(?R))*\}|\[.*?\])/s'; // this handle nested json with unlimited depth and next-line characters
  preg_match_all($pattern, $json, $matches);
  $elements = $matches[0];

  // loop through the elements
  foreach ($elements as $element) {
    $pKey = '/^"(.*?)":.*?$/';
    $pVal = '/^".*?":(.*?)$/';

    preg_match($pKey, $element, $kMatches);
    preg_match($pVal, $element, $vMatches);

    $key = trim($kMatches[1]);
    $val = trim($vMatches[1]);

    if (isValidJson($val)) $array[$key] = jsonToArray($val);
    else $array[$key] = $val;
  }

  return $array;
}

$t1 = '{"name": "John", "age": 30, "city": "New York"}';
$t2 = '{"user": {"name": "Alice", "age": 25}, "languages": ["PHP", "JavaScript", "Python"]}';
$t3 = '{"fruits": ["apple", "orange", "banana"], "numbers": [1, 2, 3]}';
$t4 = '{
  "name": "John Doe",
  "age": 30,
  "email": "johndoe@example.com",
  "address": {
      "street": "123 Main St",
      "city": "New York",
      "country": "USA"
  },
  "hobbies": [
    "reading",
    "traveling",
    "photography"
  ]
}';

print_r(jsonToArray($t1));
// print_r(jsonToArray($t2));
// print_r(jsonToArray($t3));
// print_r(jsonToArray($t4));