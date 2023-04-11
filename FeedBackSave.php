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
$UserName=$_SESSION['UserName'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO form (username, firstname, lastname, num, locality, city, Age, About, Improved, Exprience, Satisfied) VALUES ('$UserName','$a','$b','$c','$d','$e','$f','$h','$i','$j','$k')";

if ($conn->query($sql) === TRUE) {
echo "Your Record Stored Successfully<br>";
echo "<br><br><button style='font-size: 24px;' id='next-button' onclick='home()'>Next</button>
<script src='buttonscript2.js'></script>";
}

else {
echo"<h1 style='color : #FF0000;' align='center'><br>!!!Error!!!</h1>";
echo "<br><br><button style='font-size: 24px;' id='next-button' onclick='FeedBackForm()'>Back</button>
<script src='buttonscript.js'></script>";
}

$conn->close();
?>

