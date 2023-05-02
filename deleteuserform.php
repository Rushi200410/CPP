<?php
session_start();
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

$UserName = $_SESSION['UserName']; // assign the value of username session variable to $UserName

// sql to delete a record
$sql = "DELETE FROM form WHERE username='$UserName'";

if ($conn->query($sql) === TRUE) {
  echo "<h1 align='center'> Record deleted successfully</h1><br><br>";
  echo "<div align='center'><a href='feedbackform.php' align='center'><button align='center'>Create New Feedback</button></a></div>";

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>