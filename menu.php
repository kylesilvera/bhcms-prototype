<?php
require 'config.php';
// Redirect if not logged in
if (!isset($_SESSION['user_id'])) {
  header('Location: login.php');
  exit;
}
// Fetch all menu items
$items = $pdo->query('SELECT * FROM menu_items')->fetchAll();
?>
<!doctype html>
<html>
<head><title>Menu</title></head>
<body>
  <h2>Menu</h2>
  <form action="order_process.php" method="post">
    <?php foreach ($items as $i): ?>
      <div>
        <strong><?= htmlspecialchars($i['name']) ?></strong> —
        $<?= number_format($i['price'],2) ?><br>
        <input
          type="number"
          name="qty[<?= $i['id'] ?>]"
          min="0"
          value="0"
        >
      </div>
      <hr>
    <?php endforeach; ?>
    <button type="submit">Place Order</button>
  </form>
  <p><a href="logout.php">Log out</a></p>
</body>
</html>