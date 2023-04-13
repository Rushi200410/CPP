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

$sql = "SELECT * FROM form";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<head>
  <style>
  table, th, td {
  border: 3px solid blue;
  }
  </style>
  </head>
  <body align='center'>";
  echo "<table align='center'>
  <tr>
  <th>&nbsp;&nbsp;&nbsp; ID &nbsp;&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;&nbsp; UserName &nbsp;&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;&nbsp; FirstName &nbsp;&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;&nbsp; LastName &nbsp;&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;&nbsp; Phone Number &nbsp;&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;&nbsp; Locality (area) &nbsp;&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;&nbsp; City &nbsp;&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;&nbsp; Age &nbsp;&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;&nbsp; how did you learn about us &nbsp;&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;&nbsp; what can be improved &nbsp;&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;&nbsp; How was your exprience &nbsp;&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;&nbsp; How Satisfied are you from our product &nbsp;&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;&nbsp; Email Address &nbsp;&nbsp;&nbsp;</th>
  <th>&nbsp;&nbsp;&nbsp; Delete Account &nbsp;&nbsp;&nbsp;</th>
  </tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "
    <tr align='center'>
    <td>".$row["id"]."</td>
    <td>".$row["username"]."</td>
    <td>".$row["firstname"]."</td>
    <td>".$row["lastname"]."</td>
    <td>".$row["num"]."</td>
    <td>".$row["locality"]."</td>
    <td>".$row["city"]."</td>
    <td>".$row["Age"]."</td>
    <td>".$row["About"]."</td>
    <td>".$row["Improved"]."</td>
    <td>".$row["Exprience"]."</td>
    <td>".$row["Satisfied"]."</td>
    <td>".$row["email"]."</td>
    <td>&nbsp;&nbsp;<button onclick='deleteRecord(" . $row["id"] . ")'>Delete</button>&nbsp;&nbsp;</td>
    </tr>";
  }
  echo "</table>";
  echo "<div align='center'><br><a href='login.php'><button id='next-button'>Back</button></a></div>";
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
        window.location.href = "deleteform.php?id=" + id;
        }
      }
    </script>
  </body>
</html>