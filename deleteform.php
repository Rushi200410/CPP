<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cpp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id=$_GET["id"];
echo "<html><head><link rel='icon' href='logo.png'><title>delete</title></head><body>";
// sql to delete a record
$sql = "DELETE FROM form WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "<h1 align='center'> Record deleted successfully</h1><br><br>";
  echo "<div align='center'><a href='formtable.php' align='center'><button align='center'>view feedbacks</button></a></div>";

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>