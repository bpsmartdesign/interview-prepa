<?php

function printFolderTree (string $path, int $indent): void {
  if (!is_dir($path)) 
    throw new Exception('Invalid path');
  
  $files = scandir($path);
  $indentSize = 4;

  foreach ($files as $file) {
    if ($file === '.' || $file === '..')
      continue;

    if (is_dir($path . '/' . $file)) {
      echo str_repeat('-', $indent * $indentSize) . $file . PHP_EOL;
      printFolderTree($path . '/' . $file, $indent + 1);
    } else {
      echo str_repeat('-', $indent * $indentSize) . $file . PHP_EOL;
    }
  }
}  

printFolderTree('./main', 0);
?>