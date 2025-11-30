<?php
session_start();

// Sample quiz answers (in real world, these would come from a database)
$answers = array(
    'q1' => 'Paris',
    'q2' => 'H2O'
);

// Initialize score
$score = 0;

// Check submitted answers
foreach ($answers as $question => $correct_answer) {
    if (isset($_POST[$question]) && $_POST[$question] === $correct_answer) {
        $score++;
    }
}

// Store score in session
$_SESSION['quiz_score'] = $score;

// Redirect to result page
header('Location: quiz_result.php');
exit;
?>
