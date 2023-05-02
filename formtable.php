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
  echo "<!DOCTYPE html>";
  echo "<html>";
  echo "<head>";
  echo "<style>";
  echo "table, th, td { border: 3px solid blue; }";
  echo "</style>";
  echo "</head>";
  echo "<body align='center'>";

  echo "<table align='center'>";
  echo "<tr>";
  echo "<th>&nbsp;&nbsp;&nbsp; ID &nbsp;&nbsp;&nbsp;</th>";
  echo "<th>&nbsp;&nbsp;&nbsp; UserName &nbsp;&nbsp;&nbsp;</th>";
  echo "<th>&nbsp;&nbsp;&nbsp; FirstName &nbsp;&nbsp;&nbsp;</th>";
  echo "<th>&nbsp;&nbsp;&nbsp; LastName &nbsp;&nbsp;&nbsp;</th>";
  echo "<th>&nbsp;&nbsp;&nbsp; Phone Number &nbsp;&nbsp;&nbsp;</th>";
  echo "<th>&nbsp;&nbsp;&nbsp; Locality (area) &nbsp;&nbsp;&nbsp;</th>";
  echo "<th>&nbsp;&nbsp;&nbsp; City &nbsp;&nbsp;&nbsp;</th>";
  echo "<th>&nbsp;&nbsp;&nbsp; Age &nbsp;&nbsp;&nbsp;</th>";
  echo "<th>&nbsp;&nbsp;&nbsp; how did you learn about us &nbsp;&nbsp;&nbsp;</th>";
  echo "<th>&nbsp;&nbsp;&nbsp; what can be improved &nbsp;&nbsp;&nbsp;</th>";
  echo "<th>&nbsp;&nbsp;&nbsp; How was your exprience &nbsp;&nbsp;&nbsp;</th>";
  echo "<th>&nbsp;&nbsp;&nbsp; How Satisfied are you from our product &nbsp;&nbsp;&nbsp;</th>";
  echo "<th>&nbsp;&nbsp;&nbsp; Email Address &nbsp;&nbsp;&nbsp;</th>";
  echo "<th>&nbsp;&nbsp;&nbsp; Approved &nbsp;&nbsp;&nbsp;</th>";
  echo "<th>&nbsp;&nbsp;&nbsp; Delete Account &nbsp;&nbsp;&nbsp;</th>";
  echo "</tr>";

  // output data of each row
  while($row = $result->fetch_assoc()) {
    $data = $row["approved"];

    if ($data == 0) {
      $text = "UnRead";
    } else if ($data == 1) {
      $text = "Approved";
    } else if ($data == 2) {
      $text = "Completed";
    } else {
      $text = "Completed";
    }


    echo "<tr align='center'>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["username"]."</td>";
    echo "<td>".$row["firstname"]."</td>";
    echo "<td>".$row["lastname"]."</td>";
    echo "<td>".$row["num"]."</td>";
    echo "<td>".$row["locality"]."</td>";
    echo "<td>".$row["city"]."</td>";
    echo "<td>".$row["Age"]."</td>";
    echo "<td>".$row["About"]."</td>";
    echo "<td>".$row["Improved"]."</td>";
    echo "<td>".$row["Exprience"]."</td>";
    echo "<td>".$row["Satisfied"]."</td>";
    echo "<td>".$row["email"]."</td>";
    if ($text == "Completed") {
      echo "<td><button disabled style='color: blue;'>".$text."</button></td>";
    } else if ($text == "Approved") {
      echo "<td><button style='color: green;' onclick='approved(" . $row["id"] . ")'>".$text."</button></td>";
    }else {
      echo "<td><button style='color: red;' onclick='approved(" . $row["id"] . ")'>".$text."</button></td>";
    }
    echo "<td><button  style='color: white; background-color: red;' onclick='deleteRecord(" . $row["id"] . ")'>Deny</button></td>";
    echo "</tr>";
  }
  echo "</table>";
  echo "</body>";
  echo "</html>";
} else {
  echo "0 results";
}
$conn->close();
?>

<html>
  <body>
  <script>
    
      function approved(id) {
      if (confirm("Are you sure you want to Approve this FeedBack?")) {
        window.location.href = "approved.php?id=" + id;
        }
      }

      function deleteRecord(id) {
      if (confirm("Are you sure you want to Deny this FeedBack?")) {
        window.location.href = "deleteform.php?id=" + id;
        }
      }

    </script>
  </body>
</html>
