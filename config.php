<?php
session_start();
try {
    $pdo = new PDO(
        'mysql:host=127.0.0.1;port=3306;dbname=bhcms;charset=utf8',
        'root',
        '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    die('DB Connection failed: ' . $e->getMessage());
}