<?php
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $code = $_POST['code'];

    $stmt = $pdo->prepare("INSERT INTO gift_cards (name, price, code) VALUES (?, ?, ?)");
    $stmt->execute([$name, $price, $code]);

    echo "Gift card uploaded successfully.";
}
?>

<form method="POST">
  <input type="text" name="name" placeholder="Gift Card Name" required><br>
  <input type="number" name="price" placeholder="Price in USD" required><br>
  <textarea name="code" placeholder="Code to deliver" required></textarea><br>
  <button type="submit">Upload Card</button>
</form>
