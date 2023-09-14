<?php
// php script to reogranise a folder
// folder_path as param
// move files in new-folder and subfolders wich are ext names

function deleteDirectory($dirPath) {
  if (is_dir($dirPath)) {
     $files = scandir($dirPath);
     foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
           $filePath = $dirPath . '/' . $file;
           if (is_dir($filePath)) {
              deleteDirectory($filePath);
           } else {
              unlink($filePath);
           }
        }
     }
     rmdir($dirPath);
  }
}

function phpFilesResults (string $path): void {
  if (!is_dir($path)) {
    echo "Please provide a correct folder";
    return;
  }

  $files = [];

  function retrieveFiles (string $sub, array &$files) {
    
    if (is_dir($sub)) {
      $subFiles = scandir($sub);

      foreach($subFiles as $file) {
        if ($file === '.' || $file === '..') continue;
        if (is_file($file)) {
          $files[] = $file;
          echo $file;
        } else  {
          retrieveFiles($sub . '/' . $file, $files);
        }
      }
    } else {
      $files[] = $sub;
    }
  }

  retrieveFiles($path, $files);

  foreach($files as $file) {
    $parts = explode('.', $file);
    $ext = array_pop($parts);
    $file_parts = explode('/', $file);
    $newFile = array_pop($file_parts);

    if (!file_exists($path . '/' . $ext)) {
      mkdir($path . '/' . $ext);
    }

    rename($file, $path . '/' . $ext . '/' . $newFile);
  }

  $folders = scandir($path);
  
  foreach($folders as $folder) {
    $subs = [];
    retrieveFiles($path . '/' . $folder, $subs);

    if(count($subs) === 0) {
      deleteDirectory($path . '/' . $folder);
    }
  }
}

phpFilesResults('files');