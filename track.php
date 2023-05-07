<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cpp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$UserName=$_SESSION['UserName'];
// Retrieve data from database
$sql = "SELECT approved FROM form where username='$UserName'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $data = $row["approved"];
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Progress Bar</title>
	<style>
		/* CSS for progress bar */
		progress {
			width: 800px;
			height: 50px;
			appearance: none;
			border-radius: 30px;
			border: none;
			background-color: #eee;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
			position: relative;
			overflow: hidden;
			animation: move-progress-bar 1.5s forwards;
		}

		progress::-webkit-progress-bar {
			border-radius: 30px;
			background-color: #eee;
		}

		progress::-webkit-progress-value {
			border-radius: 30px;
			background-color: #69c;
			box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.5);
			position: absolute;
			left: 0;
			top: 0;
			bottom: 0;
		}

		progress[value="1"]::-webkit-progress-value {
			background-color: #ffa500;
		}

		progress[value="2"]::-webkit-progress-value {
			background-color: #08ff08;
		}

		.progress-label {
			font-size: 24px;
			margin-top: 10px;
			text-align: center;
		}

		.progress-bar-container {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}

		/* CSS for progress bar animation */
		@keyframes move-progress-bar {
			from {
				width: 0%;
				right: 30%;
			}
			to {
				width: calc(<?php echo $data ?> / 50%);
				right: 0;
			}
		}
		
		.slide-fwd-top {
		-webkit-animation: slide-fwd-top 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) 0.5s both;
		animation: slide-fwd-top 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) 0.5s both;
		}

		@-webkit-keyframes slide-fwd-top {
		0% {
			-webkit-transform: translateZ(0) translateY(0);
					transform: translateZ(0) translateY(0);
		}
		100% {
			-webkit-transform: translateZ(160px) translateY(-100px);
					transform: translateZ(160px) translateY(-100px);
		}
		}
		@keyframes slide-fwd-top {
		0% {
			-webkit-transform: translateZ(0) translateY(0);
					transform: translateZ(0) translateY(0);
		}
		100% {
			-webkit-transform: translateZ(160px) translateY(-100px);
					transform: translateZ(160px) translateY(-100px);
		}
		}

	</style>
</head>
<body><br><br><br><br><br>
	<div class="slide-fwd-top">
	<!-- HTML for progress bar -->
	<div class="progress-bar-container">
		<progress id="progressBar" max="2" value="<?php echo $data ?>"></progress>
		<div class="progress-label"> <br>
			<?php
			switch ($data) {
                case 0:
                    echo "<h1>Anticipation</h1> <h3> Ready to begin, Poised for Greatness.</h3>
					<br><a href='home.php'><button align='center' style='font-size: 24px; background-color: #FF5733; color: #FFFFFF; padding: 16px 32px; border: none; border-radius: 8px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);'>Back To Home Page</button></a>";
                    break;
				case 1:
					echo "<h1>In Progress</h1> <h3>Already begin, Making Headway!</h3>
					<br><a href='home.php'><button align='center' style='font-size: 24px; background-color: #DB3EB1; color: #FFFFFF; padding: 16px 32px; border: none; border-radius: 8px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);'>Back To Home Page</button></a>";
					break;
				case 2:
					echo "<h1>Achievement</h1> <h3>Mission accomplished, well done!</h3>
					<br><a href='home.php'><button align='center' style='font-size: 24px; background-color: #0b69ff; color: #FFFFFF; padding: 16px 32px; border: none; border-radius: 8px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);'>Back To Home Page</button></a>";
					break;
				default:
					echo "<h1>Anticipation</h1> <h3> Ready to begin, Poised for Greatness.</h3>
					<br><a href='home.php'><button align='center' style='font-size: 24px; background-color: #FF5733; color: #FFFFFF; padding: 16px 32px; border: none; border-radius: 8px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);'>Back To Home Page</button></a>";
			}
			?>

             <p><br>
				<div style="padding-left: 200px; padding-right: 200px;">
	
					<div align="left">
						<u>
							<b>
								Dear <?php echo $UserName ?>
							</b>
						</u>
					</div><br>
					<div align="justify">&nbsp;&nbsp;&nbsp;
						We would like to express our sincere gratitude for the feedback provided regarding our website. The insights and suggestions given were incredibly helpful in identifying areas that needed improvement and allowed us to make necessary changes to enhance the user experience.
						We appreciate the time taken to provide us with constructive feedback. The comments have not only helped us improve our website but have also shown us that there are people who are genuinely interested in seeing it succeed.
						Thank you once again for the valuable feedback. Your contribution is deeply appreciated, and we hope to continue receiving your insights in the future.<br>
						Best regards,
					</div><br>
				</div>
				<div align="right"><b>
					<div style="padding-right: 150px;">
						By Team Of This Project<br> 
						- Mudit Purohit <br> 
						- Khushi Shirkhe <br> 
						- Arnan Desai <br> 
						- Rushi Bhansali<br>
					</div>
					</b></div>
			</p>
		</div>
	</div>
	</div>
</body>
</html>