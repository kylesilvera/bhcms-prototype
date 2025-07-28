<?php
// config.php — start session & connect to MySQL
session_start();
try {
  $pdo = new PDO(
    'mysql:host=localhost;dbname=bhcms;charset=utf8',
    'root',
    ''
  );
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die('DB Connection failed: ' . $e->getMessage());
}