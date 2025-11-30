<?php
$username = $_POST['username'];
$password = $_POST['password'];
$coursetitle = $_POST['coursetitle'];
$author = $_POST['author'];


$conn = new mysqli('localhost','root','','test');
if($conn->connect_error)
{
die('Connection Failed : '.$conn->connect_error);
}
else
{
$stmt = $conn->prepare("insert into registration(username, password, coursetitle, author) values(?, ?, ?, ?)");
$stmt->bind_param("ssss",$username, $password, $coursetitle, $author);
$stmt->execute();
echo "Connected Successfully";

$stmt->close();
$conn->close();



}

?>