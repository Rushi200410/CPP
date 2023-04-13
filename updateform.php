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
$Username =$_GET["Username"];
$sql = "SELECT username, firstname, lastname, num, locality, city, Age, About, Improved, Exprience, Satisfied FROM form WHERE username='$Username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "";
    $UserName2=$row["Username"];
    $firstname2=$row["firstname"];
    $lastname2=$row["lastname"];
    $num2=$row["num"];
    $locality2=$row["locality"];
    $city2=$row["city"];
    $Age2=$row["Age"];
    $About2=$row["About"];
    $Improved2=$row["Improved"];
    $Exprience2=$row["Exprience"];
    $Satisfied2=$row["Satisfied"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="form.css">
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
<body>
<section>
<div class="form-value">
<form action="updatesave.php" method="get" onsubmit="return validateInput()">
<br><br><h2>FeedBack Form</h2>

<div class="inputbox">
<ion-icon name="person-sharp"></ion-icon>
<input type="text" id="username" name="username" maxlength="20" autocomplete="off" onkeypress="return name12(event)" value="<?php echo $Username2; ?>" readonly>
<label> User Name </label>
</div>

<div class="inputbox">
<ion-icon name="person-sharp"></ion-icon>
<input type="text" id="firstname" name="firstname" maxlength="20" autocomplete="off" onkeypress="return name12(event)" value="<?php echo $firstname2; ?>" required>
<label> First Name </label>
</div>

<div class="inputbox">
<ion-icon name="people-sharp"></ion-icon>
<input type="text" id="lastname" name="lastname" maxlength="20" autocomplete="off" onkeypress="return name12(event)" value="<?php echo $lastname2; ?>" required>
<label> Last Name : </label>
</div>

<div class="inputbox">
<ion-icon name="call-sharp"></ion-icon>
<input type="text" name="number" minlength="10" maxlength="10" autocomplete="off" onkeypress="return number12(event)" value="<?php echo $num2; ?>" required>
<label>Phone Number : </label>
</div>

<div class="inputbox">
<ion-icon name="compass-sharp"></ion-icon>
<input type="text" name="Locality"  autocomplete="off" onkeypress="return other12(event)" value="<?php echo $locality2; ?>" required>
<label > Locality(Area) : </label>
</div>

<div class="select">
<label > City: </label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="City" selected="<?php echo $city2; ?>">
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

<div class="inputbox">
<input type="text" name="age" maxlength="3" autocomplete="off" onkeypress="return number12(event)" value="<?php echo $Age2; ?>" required>
<label > Age : </label>
</div>

<div class="inputbox">
<ion-icon name="mail-sharp"></ion-icon>
<input type="Email" name="Email" maxlength="50" autocomplete="off" onkeypress="return email12(event)" value="<?php echo $Email2; ?>" required> 
<label > Email Address: </label>
</div>

<div class="inputbox">
<ion-icon name="help-sharp"></ion-icon>
<input type="text" name="About" autocomplete="off" onkeypress="return other12(event)" value="<?php echo $About2; ?>" required>
<label for="learn">How did u learn about us </label>
</div>

<div class="inputbox">
<ion-icon name="help-sharp"></ion-icon>
<input type="text" name="Improved" autocomplete="off" onkeypress="return other12(event)" value="<?php echo $Improved2; ?>" required>
<label> What can be Improved  </label>
</div>

<div class="select">
<label> How was your exprience ?</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select name="Exprience" selected="<?php echo $Exprience2; ?>">
<option>Good</option>
<option>Average</option>
<option>Can Be Better</option>
<option>Bad</option>
</select>
</div>

<div class="select">
<label> How Satisfied are u with our product ?</label> &nbsp;&nbsp;&nbsp;&nbsp;
<select name="Satisfied" selected="<?php echo $Satisfied2; ?>">
<option>Good</option>
<option>Average</option>
<option>Can Be Better</option>
<option>Bad</option>
</select>
</div>
<br><br>

<button type="submit">Submit</button><br>

</form><br></div>
</section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>