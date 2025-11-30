<?php
require 'db.php';

$challengeId = $_GET['id'] ?? 1;

$stmt = $pdo->prepare('SELECT * FROM challenges WHERE id = ?');
$stmt->execute([$challengeId]);
$challenge = $stmt->fetch();

include 'challenge.html';
?>
