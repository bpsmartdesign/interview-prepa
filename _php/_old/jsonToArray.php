<?php

function jsonToArray0($json) {
  return json_decode($json, true);
}

function jsonToArray($jsonStr) {
  function isJson($str) {
    json_decode($str);
    return (json_last_error() === JSON_ERROR_NONE);
  }

  $data = json_decode($jsonStr, true);

  if (is_array($data)) {
    foreach ($data as $key => $value) {
      if (is_string($value) && isJson($value)) {
        $data[$key] = jsonToArray($value);
      }
    }
  }

  return $data;
}

$t1 = '{"name": "John", "age": 30, "city": "New York"}';
$t2 = '{"user": {"name": "Alice", "age": 25}, "languages": ["PHP", "JavaScript", "Python"]}';
$t3 = '{"fruits": ["apple", "orange", "banana"], "numbers": [1, 2, 3]}';

print_r(jsonToArray($t3));
