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
// sql to delete a record
$sql = "DELETE FROM login WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "<h1 align='center'> Record deleted successfully</h1><br><br>";
  echo "<form action='LoginTable.php' align='center'> <input type= 'submit' value= 'View Login Table' ></form>";

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>