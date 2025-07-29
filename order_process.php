<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require 'config.php';

// 1) must be logged in
if (!isset($_SESSION['user_id'])) {
  header('Location: login.php');
  exit;
}
// 2) must submit via POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: menu.php');
  exit;
}
// 3) data check
if (!isset($_POST['qty']) || !is_array($_POST['qty'])) {
  die('Invalid form submission.');
}

$userId = $_SESSION['user_id'];

// 4) create the order
$stmt = $pdo->prepare('INSERT INTO orders (user_id) VALUES (?)');
$stmt->execute([$userId]);
$orderId = $pdo->lastInsertId();

// 5) confirm at least one item
$hasItems = false;
foreach ($_POST['qty'] as $q) {
  if ((int)$q > 0) {
    $hasItems = true;
    break;
  }
}
if (!$hasItems) {
  echo "<p>No items selected. <a href='menu.php'>Back</a></p>";
  exit;
}

// 6) insert order items
foreach ($_POST['qty'] as $itemId => $qty) {
  $qty = (int)$qty;
  if ($qty > 0) {
    $stmt = $pdo->prepare(
      'INSERT INTO order_items (order_id, item_id, quantity) VALUES (?, ?, ?)'
    );
    $stmt->execute([$orderId, $itemId, $qty]);
  }
}

// 7) success page
echo "<p>Order #{$orderId} placed! <a href='menu.php'>Back to menu</a></p>";