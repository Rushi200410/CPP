<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cpp";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the ID of the row to update from the URL parameter
$id = $_GET['id'];

// Query the database to get the current value of the 'approved' column
$sql = "SELECT approved FROM form WHERE id = " . $id;
$result = $conn->query($sql);

echo "<body align='center'>";

if ($result->num_rows > 0) {
  // Update the 'approved' column with the new value
  $row = $result->fetch_assoc();
  $new_value = $row['approved'] + 1;
  $sql = "UPDATE form SET approved = " . $new_value . " WHERE id = " . $id;
  if ($conn->query($sql) === TRUE) {
    echo "<h1>Record updated successfully<br><br>
          <a href='formtable.php'><button> Back </button></a></h1>";
  } else {
    echo "Error updating record: " . $conn->error;
  }
} else {
  echo "Record not found";
}

$conn->close();
?>
