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
$Username=$_SESSION['UserName'];

$sql = "SELECT * FROM login WHERE username='$Username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "";
    $UserName2=$row["UserName"];
    $Pass2=$row["Pass"];
echo "<!DOCTYPE html>
<html lang='en'>
<head>
  <link rel='stylesheet' href='login.css'>
  <link rel='icon' href='logo.png'> 
  <title>Login Page</title>
  <script>
    function validateInput() {
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;
      
      if (/^[a-zA-Z0-9]*$/.test(username) == false) {
        alert('Username can only contain letters and numbers.');
        return false;
      }
      
      if (/^[a-zA-Z0-9]*$/.test(password) == false) {
        alert('Password can only contain letters and numbers.');
        return false;
      }
      
      return true;
    }
  </script>
  </head>
<body>
    <section>
        <div class='form-box'>
            <div class='form-value'>
                <form action='editsave.php' method='get' onsubmit='return validateInput()'>
                    <h2>Change Passwor</h2>
                    <div class='inputbox'>
                      <label> User Name </label><br><br>
                      <input type='text' id='username' name='username' maxlength='20' autocomplete='off' value='".$Username."' readonly>
                    </div>
                    <div class='inputbox'>
                        <input type='text' id='password' value='".$Pass2."' name='Pass' minlength='6' maxlength='8' autocomplete='off' required>
                        <label for=''>Password</label>
                    </div>
                    <button type='submit'>Log in</button>
                    <div class='register'>
                        <p>Don't have a account :&nbsp;&nbsp;<a href='CreateAcc.php'>Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type='module' src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
    <script nomodule src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>
</body>
</html>
";

}
} else {
  echo "<div align='center'><br><br><br><br><br><br>
  <h1>No Account forund</h1>
  <h2>Please try again later</h2><br><br>
  <a href='CreateAcc.php'><button style'font-size: 30px; padding: 16px 24px;'>Submit a new one</button></a>
  </div>";
}
$conn->close();
?>

