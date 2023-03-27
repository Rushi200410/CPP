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

$sql = "SELECT * FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border='3' align='center' bordercolor='blue'><tr><th>&nbsp;&nbsp;&nbsp;ID&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;UserName&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;Password&nbsp;&nbsp;&nbsp;</th><th>&nbsp;&nbsp;&nbsp;Authenticated &nbsp;&nbsp;&nbsp;</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr align='center'><td>".$row["id"]."</td><td>".$row["UserName"]."</td><td>".$row["Pass"]."</td><td>".$row["Authenticated"]."</tr>";
  }
  echo "</table>";
  echo "<div align='center'><br><button id='next-button' onclick='login()'>Back</button>
        <script src='buttonscript.js'></script></div>";
} else {
  echo "0 results";
}
$conn->close();
?>