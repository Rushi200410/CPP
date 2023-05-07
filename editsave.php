<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CPP";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Read data from form
$UserName=$_SESSION['UserName'];
$a=$_GET["Pass"];

$sql = "UPDATE login SET Pass = '$a' WHERE username = '$UserName'";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "<br><h3 align='center'> Your Password is Updated successfully. </h3>";
  echo "</u></h2>";
  echo "<h3 align='center'><br><br>Thank You for your contribution Mr./Mrs. <u>";
  echo "<h1>Your Password is  ********</h1>";
  echo "</u></h3><br><br><br>_______________________________________________________________________________________________________________________________________________________________________________________________<br><br>";
  echo "<form action='home.php' align='center'> <input type= 'submit' value= 'View Chart' ></form>";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  echo "<h1> Plz Try Again Later </h1>";
}

$conn->close();
?>