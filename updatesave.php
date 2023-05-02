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
$a=$_GET["firstname"];
$b=$_GET["lastname"];
$c=$_GET["number"];
$d=$_GET["Locality"];
$e=$_GET["City"];
$f=$_GET["age"];
$h=$_GET["About"];
$i=$_GET["Improved"];
$j=$_GET["Exprience"];
$k=$_GET["Satisfied"];
$l=$_GET["Email"];

$sql = "UPDATE form SET firstname = '$a', lastname = '$b', num = '$c', locality = '$d', city = '$e', Age = '$f', About = '$h', Improved = '$i', Exprience = '$j', Exprience = '$k', Email = '$l' WHERE username = '$UserName'";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "<br><h3 align='center'> Your record is Updated successfully. </h3>";
  echo "</u></h2>";
  echo "<h3 align='center'><br><br>Thank You for your contribution Mr./Mrs. <u>" . $a;
  echo " " . $b;
  echo "</u></h3><br><br><br>_____________________________________________________________________________________________________________________________________________________________________________________________________<br><br>";
  echo "<form action='home.php' align='center'> <input type= 'submit' value= 'View Chart' ></form>";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>