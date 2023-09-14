<?php
/**** PROBLEM 2
 * Write a php function that is going to move files in a main folder, to subfolders.
 * For example, for example, if i am in a folder 'main', and i have '15' files i should be
 * able to call the function and pass a parameter which is the number of maximum files '3'. at the end,
 * i should have 5 subfolders, each with 3 files. 
 */
function moveFiles (string $path, int $maxFiles): void {
  if (!is_dir($path)) {
    echo 'The given path is not a folder';
    return;
  }

  if (!is_int($maxFiles)) {
    echo 'Please provide a valid number of files';
    return;
  }

  $mixed = scandir($path);
  $files = [];

  if ($mixed === false) {
    echo 'An error occured while reading the folder';
    return;
  }

  foreach($mixed as $element) {
    if (is_file($path . '/' . $element)) $files[] = $element;
  }

  $nbrSubfolders = ceil(count($files) / $maxFiles);

  for ($i = 0; $i < $nbrSubfolders; $i++) {
    $subfolderPath = $path . '/subfolder-' . ($i + 1) . '/';

    if (!file_exists($subfolderPath)) mkdir($subfolderPath, 0777, true);
    if (file_exists($subfolderPath) && !is_dir($subfolderPath)) mkdir($subfolderPath, 0777, true);

    for ($j = 0; $j < $maxFiles; $j++) {
      if ($i * $maxFiles + $j >= count($files)) break;

      if (rename($path . '/' . $files[$i * $maxFiles + $j], $subfolderPath . $files[$i * $maxFiles + $j]))
        echo 'File ' . $files[$i * $maxFiles + $j] . ' moved to ' . $subfolderPath . PHP_EOL;
      else
        echo 'An error occured while moving file ' . $files[$i * $maxFiles + $j] . PHP_EOL;
    }
  }
}

moveFiles('./../main', 5);