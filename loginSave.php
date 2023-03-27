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


$UserName=$_GET["UserName"];
$Pass=$_GET["Pass"];

$sql = "SELECT * FROM login where UserName='$UserName'";
$result = $conn->query($sql);

$row = mysqli_fetch_assoc($result);

if ($result->num_rows > 0) 
{
	// Check if the password matches the hashed password in the database and if the user is authenticated
	if ($row['Pass'] == $Pass) 
    {
        if ($row['Authenticated'] == '0')
        {
            echo "<button id='next-button' onclick='UnautotherizedPage()'>Next</button>
            <script src='buttonscript.js'></script>";
        } 
        else 
        {
            echo "<button id='next-button' onclick='AutotherizedLogin()'>View Login Page</button>
            <script src='buttonscript.js'></script><br><br>
            <button id='next-button' onclick='autotherizedPage2()'>View Feed-Backs</button>
            <script src='buttonscript.js'></script>";
        }
    }
    else
    {
        echo "plz type correct UserName and Password";
        echo "<br><button id='next-button' onclick='login()'>Back</button>
            <script src='buttonscript.js'></script>";
    }
}
else 
{
    echo "Plz enter correct UserName";
    echo "<br><button id='next-button' onclick='login()'>Back</button>
    <script src='buttonscript.js'></script>";
}


	// Close the database connection
	mysqli_close($conn);
?>