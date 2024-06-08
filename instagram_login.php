<?php
$username = $_POST['username'];
$password = $_POST['password'];
// Connect to the database
$conn = new mysqli('localhost', 'username', 'password', 'database');
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Insert the data into the database
$sql = "INSERT INTO credentials (username, password) VALUES ('$username', '$password')";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
