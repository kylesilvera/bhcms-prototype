<?php
require 'config.php';
if ($_SESSION['role'] !== 'staff') die('Access denied');
$orderId = (int)($_GET['id'] ?? 0);
$stmt = $pdo->prepare("
  SELECT mi.name, oi.quantity
  FROM order_items oi
  JOIN menu_items mi ON oi.item_id = mi.id
  WHERE oi.order_id = ?
");
$stmt->execute([$orderId]);
$items = $stmt->fetchAll();
?>
<!doctype html>
<html><body>
  <h2>Order #<?= $orderId ?> Details</h2>
  <ul>
    <?php foreach ($items as $i): ?>
      <li><?= htmlspecialchars($i['name']) ?> x <?= $i['quantity'] ?></li>
    <?php endforeach; ?>
  </ul>
  <p><a href="staff_orders.php">Back to orders</a></p>
</body></html>