<?php

function execute($query) {
  echo $query;
  return [];
}

function fromDB() {
  $query = "SELECT name, price, description, quantity, createdAt, createdBy FROM product";
  $batchSize = 100;
  $filePath = 'records.csv';
  $file = fopen($filePath, 'w');
  $headers = ['name', 'price', 'description', 'quantity', 'createdAt', 'createdBy'];

  fputcsv($file, $headers);

  $offset = 0;
  $totalRecords = null;

  while ($totalRecords === null || $offset < $totalRecords) {
    $queryWithPagination = $query . " LIMIT $offset, $batchSize";
    $result = execute($queryWithPagination);

    if ($totalRecords === null)
      $totalRecords = count($result);

    foreach ($result as $record) {
      $rowData = [
        $record['name'],
        $record['price'],
        $record['description'],
        $record['quantity'],
        $record['createdAt'],
        $record['createdBy']
      ];

      fputcsv($file, $rowData);
    }

    $offset += $batchSize;
  }

  fclose($file);
  echo "CSV file generated successfully. File path: " . $filePath;
}

fromDB();
