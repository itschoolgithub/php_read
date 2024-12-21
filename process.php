<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $description = $_POST['description'];
    $amount = $_POST['amount'];

    $stmt = $pdo->prepare("INSERT INTO expenses (description, amount, created_at) VALUES (?, ?, NOW())");
    $stmt->execute([$description, $amount]);

    header('Location: index.php');
    exit;
}
