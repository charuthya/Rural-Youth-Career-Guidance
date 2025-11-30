<?php
require 'db.php';

$stmt = $pdo->query('SELECT * FROM challenges');
$challenges = $stmt->fetchAll();

include 'index.html';
?>
