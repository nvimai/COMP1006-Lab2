<!-- Login validation -->
<?php
$id			= "";
$club_name	= "";
$ground		= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Store the user inputs in variables
	$club_name	= $_POST['club_name'];
	$ground		= $_POST['ground'];
	//create variable indicating if form is complete or not
	$valid = true;
	// Check each user input & show any error messages
	if (empty($club_name)) {
		echo 'Club Name is required<br />';
		$valid = false;
	}
	else if(strlen($club_name) > 50) {
		echo 'Club Name is less than 50 characters<br />';
		$valid = false;
	}
	if (empty($ground)) {
		echo 'Ground is required<br />';
		$valid = false;
	}
	else if(strlen($ground) > 50) {
		echo 'Ground is less than 50 characters<br />';
		$valid = false;
	}
	// Check if there any errors, if not connect
	if ($valid == true) {
		// Connect to the database
		include('global/connect.php');
		// Write the sql insert
		$sql = "INSERT INTO clubs (club_name, ground) VALUES ('$club_name', '$ground')";
		// Execute the save
		if ($conn->query($sql) == TRUE) {
			echo "New record created successfully<br />";
			// Display a confirmation message
			echo "Your subscription was saved<br />";
			echo "You will be redirecting to Clubs Page<br />";
			//sleep for 5 seconds
			header("refresh:5; url=clubs.php");
		} 
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
}
?>