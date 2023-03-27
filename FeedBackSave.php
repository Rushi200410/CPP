<?php 
// to connect with the server 
$servername = "localhost"; 
$username = "root";
$password = "";
// to connect with the database 
$dbname = "Web_Data";
// to inport the walues from html page 
$a=$_GET["firstname"];
$b=$_GET["lastname"];
$c=$_GET["fathername"];
$d=$_GET["mothername"];
$e=$_GET["number"];
$f=$_GET["bulding"];
$g=$_GET["Locality"];
$h=$_GET["City"];
$i=$_GET["age"];
$j=$_GET["Email"];

// for connectivity
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
// if there is any error in the connectivity 
{
die("Connection failed: " . $conn->connect_error);
}

//     to add the data in the sql page     the code of sql

$sql = "INSERT INTO input 
(
    FIRSTName, 
    LASTName, 
    FatherName, 
    MotherName, 
    Phone_Number, 
    Bulding, 
    Locality, 
    City, 
    Age, 
    Email
    )
VALUES 
(
    '$a','$b','$c','$d','$e','$f','$g','$h','$i','$j'
    )";


if ($conn->query($sql) === TRUE) 
// if the data is stored in the database Successfully 
{
echo "Your Record Stored Successfully";
} 
else 
//     if there is a error in the input of data 
//     it may be a logical error or may a typing mistake

{
echo"<h1 style='color : #FF0000;' align='center'><br>!!!Error!!!</h1>";
}

$conn->close();
?>

<!-- DELETE FROM table_name WHERE condition; -->