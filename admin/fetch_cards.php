<?php
require_once '../config/db.php';

$stmt = $pdo->query("SELECT id, name, price FROM gift_cards ORDER BY id DESC");
$cards = $stmt->fetchAll();
echo json_encode($cards);
?>
