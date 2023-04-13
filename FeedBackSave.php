<?php 
session_start();
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "CPP";

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
$UserName=$_SESSION['UserName'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO form (username, firstname, lastname, num, locality, city, Age, About, Improved, Exprience, Satisfied, email) VALUES ('$UserName','$a','$b','$c','$d','$e','$f','$h','$i','$j','$k','$l')";

if ($conn->query($sql) === TRUE) {
echo "<div align='center'>Your Record Stored Successfully<br><br><br>
    <a href='home.php'><button style='font-size: 24px;' id='next-button'>Next</button></a></div>";
}

else {
echo"<div align='center'><h1 style='color : #FF0000;' align='center'><br>!!!Error!!!</h1><br><br> 
    <a href='feedbackform.php'><button style='font-size: 24px;' id='next-button'>Back</button></a></div>";
}

$conn->close();
?>
