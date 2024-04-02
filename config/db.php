<?php

return [
  'host' => 'localhost',
  'dbname' => 'practicedb',
  'username' => 'root',
  'password' => '',
  'charset' => 'utf8', // utf8mb4
  'options' => [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    // PDO::ATTR_ERRMODE => pdo::ERRMODE_EXCEPTION,
  ],
];
