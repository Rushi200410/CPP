<?php
session_start();
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
$_SESSION['username'] = $UserName;

$sql = "SELECT * FROM login where UserName='$UserName'";
$result = $conn->query($sql);

$row = mysqli_fetch_assoc($result);
echo "<html>
<head><style>
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
// check if username is correct
if ($result->num_rows > 0) 
{
	// Check if the password matches the password in the database and if the user is authenticated
	if ($row['Pass'] == $Pass) 
    {
        // chech if the user is not authencated
        if ($row['Authenticated'] == '0')
        {
            echo " <h1>Welcome To FeedBackForm Website<h1><br><br>
            <a href='feedbackform.php'><button style='font-size: 24px;' id='next-button'>Next</button></a>"; //goes to feedbackform
        } 
        else  // user is authecanted
        {
            echo "<h1> You Are an authorized user <br> click on the button whose table you want to see</h1><br>
            <a href='logintable.php'><button style='font-size: 24px;' id='next-button'>View Login Page</button><br><br>
            <a href='formtable.php'><button style='font-size: 24px;' id='next-button'>View Feed-Backs</button></a>";// goes to tables
        }
    }
    else // incorrect pass
    {
        echo "<h1>Plz type correct UserName and Password</h1>";
        echo "<br><br><a href='login.php'><button style='font-size: 24px;' id='next-button'>Back</button></a>";// goes to login pg
    }
}
else // incorrect username
{
    echo "<h1>Plz enter correct UserName </h1>";
    echo "<br><br><a href='login.php'><button style='font-size: 24px;' id='next-button' onclick='login()'>Back</button></a>"; // goes to login pg
}

echo "</body></html>";
	// Close the database connection
	mysqli_close($conn);
?>