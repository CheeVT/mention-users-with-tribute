<?php

$query = $_GET['q'];

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

$result = array_filter($data, function($name) use($query) {
  return strpos($name['name'], $query) == 0;
}); 

header('Content-Type: application/json');

echo json_encode($data);