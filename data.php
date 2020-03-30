<?php

$data = [
  [
    'key' => 1,
    'name' => 'Marko'
  ],
  [
    'key' => 2,
    'name' => 'Stanko'
  ],
  [
    'key' => 3,
    'name' => 'CheeVT'
  ]
];

header('Content-Type: application/json');

echo json_encode($data);