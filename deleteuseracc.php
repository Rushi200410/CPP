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

// sql to delete records
$sql1 = "DELETE FROM form WHERE username='$UserName'";
$sql2 = "DELETE FROM login WHERE username='$UserName'";

if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
  echo "<h1 align='center'>Records deleted successfully</h1><br><br>";
  echo "<div align='center'><a href='CreateAcc.php' align='center'><button align='center'>create new account </button></a></div>";

} else {
  echo "Error deleting records: " . $conn->error;
}

$conn->close();
?>