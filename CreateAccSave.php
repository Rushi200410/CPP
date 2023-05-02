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

// Read data from form
$UserName = $_GET["UserName"];
$Pass = $_GET["Pass"];
echo "<html>
<head>
<link rel='icon' href='logo.png'><title>Created Account</title>
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
</style>
</head>
<body class='scale-up-center' align='center'><br><br>";
try {
    // Your code to insert the new account into the database goes here
    $sql = "INSERT INTO login (UserName, Pass, Authenticated) VALUES ('$UserName', '$Pass', '0')";
    
    $conn->query($sql);
    $_SESSION['UserName'] = $UserName;
    echo "<br><br><br><h1>Your Account created successfully</h1>";
    echo "<a href='feedbackform.php'><button style='font-size: 24px;' id='next-button'> Next </button></a>";
} catch (mysqli_sql_exception $e) {
    // Catch the mysqli_sql_exception and display a custom error message to the user
    if ($e->getCode() == 1062) {
        // Duplicate entry error code
        echo "<h1><br><br><br><br>The username you entered is already taken. <br> Please choose a different username.</h1>";
        echo "<a href='CreateAcc.php'><button id='next-button'>Back</button></a>";
        
    } else { 
        // Other mysqli_sql_exception error code
        echo "An error occurred while creating your account. Please try again later.";
    }
}

$conn->close();
?>
</body></html>