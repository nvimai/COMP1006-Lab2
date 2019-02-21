
<!-- Loading header -->
<?php $title = 'Clubs'; include('global/header.php'); ?>

<!-- Loading body -->
<?php 
	// Connect to the database
	include('global/connect.php');
	//Set up the SQL 
	$sql = 'SELECT * FROM clubs
	ORDER BY club_name';
	//Execute the SQL command in the db; store the whole dataset in a $result variable
	$result = mysqli_query($conn, $sql) or die('Error querying database.');
	echo '<table border="1">';
	echo '<th>Club Name</th><th>Ground</th><th>Update</th>';
		//Loop throught the collection of data
	while ($row = mysqli_fetch_array($result)) {
		echo 
		'<tr>
			<td>' . $row['club_name'] . '</td>
			<td>' . $row['ground'] . '</td>
			<td><a href="delete.php?id=' . $row['club_id'] . '" onclick="return confirm(\'Are you sure you want to delete ' . $row['club_name'] . '?\');">Delete</a>/<a href="update.php?id=' . $row['club_id'] . '"
			onclick="return confirm(\'Are you sure you want to edit ' . $row['club_name'] . '?\');">Edit</a></td>
		</tr>';
	}
	echo '</table>';
?>

<?php include('global/disconnect.php'); ?>
<!-- Loading footer -->
<?php include('global/footer.php'); ?>