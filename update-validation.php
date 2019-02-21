<!-- Login validation -->
<?php

if (!empty($id = $_GET['id'])) {
	include('global/connect.php');
	//write and run the sql select and store the results
	$sql = "SELECT * FROM clubs WHERE club_id = $id";
	$result = $conn -> query($sql);

	//store the name and email into variables
	foreach ($result as $row) {
		$id 		= $row['club_id'];
		$club_name	= $row['club_name'];
		$ground		= $row['ground'];
	}
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	// Store the user inputs in variables
	$club_name	= $_POST['club_name'];
	$ground		= $_POST['ground'];
	$id 		= $_POST['club_id'];
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
		// Write the sql inser
		$sql = "UPDATE clubs SET club_name = '$club_name', ground = '$ground' WHERE club_id = $id";
		if ($conn->query($sql) == TRUE) {
			echo "The record updated successfully<br />";
			// Display a confirmation message
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