<?php
require 'db.php';

// Redirect to challenge.php if accessed directly without POST method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirectToChallenge();
}

$challengeId = $_POST['challenge_id'] ?? null;
$userCode = $_POST['code'] ?? '';

// Validate input data
if (isEmpty($challengeId) || isEmpty($userCode)) {
    displayResult('Invalid data!');
    exit;
}

try {
    // Fetch the challenge solution code from the database
    $challenge = fetchChallengeSolution($challengeId);

    if (!$challenge) {
        displayResult('Challenge not found!');
        exit;
    }

    // Execute the user's code and check the output
    $output = executeUserFunction($userCode);

    if ($output === false) {
        displayResult('Error executing code!');
        exit;
    }

    if (isEqualOutput($output, $challenge['solution'])) {
        displayResult('Correct Answer!');
    } else {
        displayResult('Wrong Answer!');
    }
} catch (Exception $e) {
    displayResult('Error: ' . $e->getMessage());
}

function redirectToChallenge() {
    header('Location: challenge.php?id=' . $_GET['id']);
    exit;
}

function isEmpty($value) {
    return empty($value);
}

function fetchChallengeSolution($challengeId) {
    global $pdo;
    $stmt = $pdo->prepare('SELECT solution FROM challenges WHERE id = ?');
    $stmt->execute([$challengeId]);
    return $stmt->fetch();
}

function executeUserFunction($userCode) {
    ob_start();
    $return = null;

    try {
        $return = eval('?>' . $userCode);
    } catch (Exception $e) {
        return false;
    }

    ob_end_clean();
    return $return;
}

function isEqualOutput($output, $expected) {
    return $output == $expected;
}

function displayResult($message) {
    global $result;
    $result = $message;
    include 'result.html';
    exit;
}

?>
