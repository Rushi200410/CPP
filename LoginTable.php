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
  echo "<head>
  <style>
  table, th, td {
  border: 2px solid blue;
  }
  </style>
  </head>
  <body align='center'>";
  echo "<table align='center'>
  <tr>
  <th>&nbsp;&nbsp;&nbsp; ID &nbsp;&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;&nbsp; UserName &nbsp;&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;&nbsp; Password &nbsp;&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;&nbsp; Authenticated &nbsp;&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;&nbsp; Delete Account &nbsp;&nbsp;&nbsp;</th>
  </tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "
    <tr align='center'>
    <td>".$row["id"]."</td>
    <td>".$row["UserName"]."</td>
    <td>".$row["Pass"]."</td>
    <td>".$row["Authenticated"]."</td>
    <td>&nbsp;&nbsp;<button onclick='deleteRecord(" . $row["id"] . ")'>Delete</button>&nbsp;&nbsp;</td>
    </tr>";
  }
  echo "</table>";
  echo "<div align='center'><br><button id='next-button' onclick='login()'>Back</button>
        <script src='buttonscript.js'></script></div>";
} else {
  echo "0 results";
}
$conn->close();
?>
<html>
  <body>
    <script>
      function deleteRecord(id) {
      if (confirm("Are you sure you want to delete this record?")) {
        window.location.href = "deleteloginacc.php?id=" + id;
        }
      }
    </script>
  </body>
</html>