<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz_db";

$input = json_decode(file_get_contents('php://input'), true);
$selectedOption = $input['selectedOption'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT answer FROM aptitude WHERE id = " . $input['questionId'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $correct = ($row['answer'] === $selectedOption);
    echo json_encode(["correct" => $correct]);
} else {
    echo json_encode(["error" => "Question not found"]);
}

$conn->close();
?>
