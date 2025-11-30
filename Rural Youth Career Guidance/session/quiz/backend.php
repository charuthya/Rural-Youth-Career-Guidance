<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["action"])) {
        if ($_POST["action"] == "submitScore") {
            $score = $_POST["score"];
            $sql = "INSERT INTO quiz_scores (score) VALUES ('$score')";
            
            if ($conn->query($sql) === TRUE) {
                echo json_encode(["message" => "Score submitted successfully"]);
            } else {
                echo json_encode(["error" => "Error: " . $sql . "<br>" . $conn->error]);
            }
        }
    }
}

$conn->close();
?>
