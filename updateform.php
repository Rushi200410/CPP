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

$sql = "SELECT username, firstname, lastname, num, locality, city, Age, About, Improved, Exprience, Satisfied, email FROM form WHERE username='$Username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "";
    $firstname2=$row["firstname"];
    $lastname2=$row["lastname"];
    $num2=$row["num"];
    $locality2=$row["locality"];
    $city2=$row["city"];
    $Age2=$row["Age"];
	$Email2=$row["email"];
    $About2=$row["About"];
    $Improved2=$row["Improved"];
    $Exprience2=$row["Exprience"];
    $Satisfied2=$row["Satisfied"];
	echo "<div align='center'> 
<h1>If You have submeted multiple feedbacks </h1>
<h3> plz scrol down to edit it</h3>
</div>";	


	echo "
<!DOCTYPE html>
<html lang='en'>
<head>
<link rel='icon' href='logo.png'>
<link rel='stylesheet' href='form.css'>
<title> ASSIGNMENT FORM </title>
    <script>
		function name12(event) {
			const disallowedChars = [',', '.', '!', '?', '@', '#', '$', '%', '^', '&', '*', '[', ']', '{', '}', '|', '\\', '/', '`', '~', '+', '=', ';', ':', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '<', '>', '₹'];
			const keyPressed = String.fromCharCode(event.keyCode);
			if (disallowedChars.includes(keyPressed)) {
				event.preventDefault();
				return false;
			}
			return true;
		}
	</script>
	<script>
		function email12(event) {
			const disallowedChars = [',', '(', ')', '[', ']', '\\', ';', ':', '<', '>' ];
			const keyPressed = String.fromCharCode(event.keyCode);
			if (disallowedChars.includes(keyPressed)) {
				event.preventDefault();
				return false;
			}
			return true;
		}
	</script>
    <script>
		function number12(event) {
			const disallowedChars = [',', '!', '?', '@', '#', '$', '%', '^', '&', '*', '[', ']', '{', '}', '|', '\\', '/', '`', '~', '+', '=', ';', ':', '<', '>', '₹', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z' ];
			const keyPressed = String.fromCharCode(event.keyCode);
			if (disallowedChars.includes(keyPressed)) {
				event.preventDefault();
				return false;
			}
			return true;
		}
	</script>
    <script>
		function other12(event) {
			const disallowedChars = ['$', '%', '^', '&', '*', '[', ']', '{', '}', '`', '~', '+', '=', ';', '<', '>', '₹'];
			const keyPressed = String.fromCharCode(event.keyCode);
			if (disallowedChars.includes(keyPressed)) {
				event.preventDefault();
				return false;
			}
			return true;
		}
	</script>

</head>
<body><br>
<section>
<div class='form-value'>
<form action='updatesave.php' method='get' onsubmit='return validateInput()'>
<br><br><h2>FeedBack Form</h2>


<div class='inputbox'>
<label> User Name </label><br><br>
<input type='text' id='username' name='username' maxlength='20' autocomplete='off' onkeypress='return name12(event)' value='".$Username."' readonly>
</div>

<div class='inputbox'>
<ion-icon name='person-sharp'></ion-icon>
<input type='text' id='firstname' name='firstname' maxlength='20' autocomplete='off' onkeypress='return name12(event)' value='".$firstname2."' required>
<label> First Name </label>
</div>

<div class='inputbox'>
<ion-icon name='people-sharp'></ion-icon>
<input type='text' id='lastname' name='lastname' maxlength='20' autocomplete='off' onkeypress='return name12(event)' value='".$lastname2."' required>
<label> Last Name : </label>
</div>

<div class='inputbox'>
<ion-icon name='call-sharp'></ion-icon>
<input type='text' name='number' minlength='10' maxlength='10' autocomplete='off' onkeypress='return number12(event)' value='".$num2."' required>
<label>Phone Number : </label>
</div>

<div class='inputbox'>
<ion-icon name='compass-sharp'></ion-icon>
<input type='text' name='Locality'  autocomplete='off' onkeypress='return other12(event)' value='".$locality2."' required>
<label > Locality(Area) : </label>
</div>

<div class='select'>
<label > City: </label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name='City' selected='".$city2."'>
<option>Ahmadnagar</option>
<option>Akola</option>
<option>Amravati</option>
<option>Aurangabad</option>
<option>Bhandara</option>
<option>Bhusawal</option>
<option>Bid</option>
<option>Buldhana</option>
<option>Chandrupur</option>
<option>Daulatabad</option>
<option>Dhule</option>
<option>Jalgaon</option>
<option>Kalyan</option>
<option>Kari</option>
<option>Kolapur</option>
<option>Mahabaleshwar</option>
<option>Malegaon</option>
<option>Mumbai</option><!-- to set Mumbai as default -->
<option>Nagpur</option>
<option>Nanded</option>
<option>Nashik</option>
<option>Osmanabad</option>
<option>Pandharpur</option>
<option>Parbhani</option>
<option>Pune</option>
<option>Ratnagiri</option>
<option>Sangli</option>
<option>Satara</option>
<option>Sevagram</option>
<option>Solapur</option>
<option>Thane</option>
<option>Ulhasnagar</option>
<option>Vasai-Virar</option>
<option>Wardha</option>
<option>Yavatmal</option>
</select>
</div>

<div class='inputbox'>
<input type='text' name='age' maxlength='3' autocomplete='off' onkeypress='return number12(event)' value='".$Age2."' required>
<label > Age : </label>
</div>

<div class='inputbox'>
<ion-icon name='mail-sharp'></ion-icon>
<input type='Email' name='Email' maxlength='50' autocomplete='off' onkeypress='return email12(event)' value='".$Email2."' required> 
<label > Email Address: </label>
</div>

<div class='inputbox'>
<ion-icon name='help-sharp'></ion-icon>
<input type='text' name='About' autocomplete='off' onkeypress='return other12(event)' value='".$About2."' required>
<label for='learn'>How did u learn about us </label>
</div>

<div class='inputbox'>
<ion-icon name='help-sharp'></ion-icon>
<input type='text' name='Improved' autocomplete='off' onkeypress='return other12(event)' value='".$Improved2."' required>
<label> What can be Improved  </label>
</div>

<div class='select'>
<label> How was your exprience ?</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name='Exprience' selected='".$Exprience2."'>
<option>Good</option>
<option>Average</option>
<option>Can Be Better</option>
<option>Bad</option>
</select>
</div>

<div class='select'>
<label> How Satisfied are u with our product ?</label> &nbsp;&nbsp;&nbsp;&nbsp;
<select name='Satisfied' selected='".$Satisfied2."'>
<option>Good</option>
<option>Average</option>
<option>Can Be Better</option>
<option>Bad</option>
</select>
</div>
<br><br>

<button type='submit'>Submit</button><br><br>

</form>
<a href='home.php'><button>Skip</button></a><br><br>
</div>
</section>
<script type='module' src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
<script nomodule src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>
</body>
</html>";

}
} else {
  echo "<div align='center'><br><br><br><br><br><br>
  <h1>No FeedBack Submited Yet</h1>
  <h2>You would have deleted it</h2><br><br>
  <a href='feedbackform.php'><button style'font-size: 30px; padding: 16px 24px;'>Submit a new one</button></a>
  </div>";
}
$conn->close();
?>