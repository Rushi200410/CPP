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

$sql = "INSERT INTO form (username, firstname, lastname, num, locality, city, Age, About, Improved, Exprience, Satisfied, email, approved) VALUES ('$UserName','$a','$b','$c','$d','$e','$f','$h','$i','$j','$k','$l','0')";
echo "<html>
<head>
<link rel='icon' href='logo.png'><title>Lgoin Account</title>
<style>
.scale-up-center {
	-webkit-animation: scale-up-center 0.5s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0s alternate both;
	        animation: scale-up-center 0.5s cubic-bezier(0.390, 0.575, 0.565, 1.000) 0s alternate both;
}
@-webkit-keyframes scale-up-center {
  0% {
    -webkit-transform: scale(0.5);
            transform: scale(0.5);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@keyframes scale-up-center {
  0% {
    -webkit-transform: scale(0.5);
            transform: scale(0.5);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
</style></head><body class='scale-up-center' align='center'><br><br><br><br><br><br><br><br><br><br>";

if ($conn->query($sql) === TRUE) {
echo "<h1>Your Record Stored Successfully</h1><br><br>
    <a href='home.php'><button style='font-size: 24px;' id='next-button'>Next</button></a>";

    $sender_phone_number = "9321542278"; // Replace with the desired sender phone number

    // Execute the Python script with sender and recipient phone numbers as arguments
    exec("python send_whatsapp_message.py $c $sender_phone_number");
}

else {
echo"<div align='center'><h1 style='color : #FF0000;' align='center'><br>!!!Error!!!</h1><br><br> 
    <a href='feedbackform.php'><button style='font-size: 24px;' id='next-button'>Back</button></a></div>";
}

$conn->close();
?>
