<?php
require 'config.php';
if ($_SESSION['role'] !== 'staff') die('Access denied');
$orders = $pdo->query("
  SELECT o.id, o.created_at, u.username
  FROM orders o
  JOIN users u ON o.user_id = u.id
  WHERE o.status='pending'
  ORDER BY o.created_at DESC
")->fetchAll();
?>
<!doctype html>
<html><body>
  <h2>Pending Orders</h2>
  <?php foreach ($orders as $o): ?>
    <div>
      Order #<?= $o['id'] ?> by <?= htmlspecialchars($o['username']) ?>
      at <?= $o['created_at'] ?> — 
      <a href="view_order.php?id=<?= $o['id'] ?>">View Details</a>
    </div><hr>
  <?php endforeach; ?>
  <p><a href="logout.php">Log out</a></p>
</body></html>