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
// Read data from form
$UserName=$_GET["UserName"];
$Pass=$_GET["Pass"];

$sql = "INSERT INTO login (UserName, Pass, Authenticated) VALUES ('$UserName', '$Pass', '0')";

if ($conn->query($sql) === TRUE) {
  echo "Your Account created successfully";
  echo "<button id='next-button' onclick='UnautotherizedPage()'> Next </button>
            <script src='buttonscript.js'></script>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>