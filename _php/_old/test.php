<?php

class FolderReader {
  public function printFilesList($folderPath, $relativePath = '') {
    if ($handle = opendir($folderPath)) {
      while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
          $filePath = $folderPath . '/' . $file;

          if (is_file($filePath)) {
            echo $relativePath . '/' . $file . "\n";
          } elseif (is_dir($filePath)) {
            $newRelativePath = $relativePath . '/' . $file;
            $this->printFilesList($filePath, $newRelativePath);
          }
        }
      }
      closedir($handle);
    }
  }
}

$test = new FolderReader();
$test->printFilesList('./main');

echo ('pass123' == 0) ? 'true' : 'false';
