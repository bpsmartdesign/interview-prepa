<?php

function moveFiles0($limit) {
  $folder = './main';
  $files = scandir($folder);
  $fileList = [];
  $fileNbr = 0;

  // Count the number of files in side the folder
  foreach ($files as $file) {
    if (is_file($folder . '/' . $file)) {
      array_push($fileList, $file);
      $fileNbr++;
    }
  }

  // count the number of folder to create
  $subFolderNbr = ceil($fileNbr / $limit);

  // create folders
  for ($i = 0; $i < $subFolderNbr; $i++) {
    $folderName = $folder . '/folder' . $i;

    if (!file_exists($folderName)) {
      mkdir($folderName, 0777, true);
    }

    $startId = $i * $limit;
    $endId = ($i + 1) * $limit - 1;
    $realEndId = $endId > count($fileList) ? count($fileList) - 1 : $endId;

    // copy files in each folder
    for ($j = $startId; $j <= $realEndId; $j++) {
      copy($folder . '/' . $fileList[$j], $folderName . '/' . $fileList[$j]);
    }
  }
}

function moveFiles ($path, $limit) {
  if (!is_dir($path))
    die('The given path is not a folder');

  $files = scandir($path);
  $fileList = [];
  $fileNbr = 0;

  // Count the number of files in side the path
  foreach ($files as $file) {
    if (is_file($path . '/' . $file)) {
      array_push($fileList, $file);
      $fileNbr++;
    }
  } 
  
  function processCopy ($id, $end, $folder, $path, $fileList) {
    if ($id >= $end)
      return;

    copy($path .'/'. $fileList[$id], $folder .'/'. $fileList[$id]);

    $id++;

    processCopy($id, $end, $folder, $path, $fileList);
  }

  for ($i = 0; $i < ceil($fileNbr / $limit); $i++) {
    $folder = $path .'/folder-'. $i;
    $startId = $i * $limit;
    $endId = ($i + 1) * $limit;
    $realEndId = $endId > count($fileList) ? count($fileList) : $endId;

    if (!file_exists($folder))
      mkdir($folder, 0777, true);

    processCopy($startId, $realEndId, $folder, $path, $fileList);
  }
}

moveFiles('./mains', 5);
