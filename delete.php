<!-- Loading header -->
<?php $title = 'Delete Club'; include('global/header.php'); ?>

<!-- Loading body -->
<?php
	require 'global/connect.php';
	//retrieve the selected id from the url querystring and save it to a variable
	$id = $_GET['id'];
	//write and run the sql command
	$sql = "DELETE FROM clubs WHERE club_id = $id";
	echo $sql;
	// $conn -> exec($sql);
	$conn->query($sql);

	//disconnect
	$conn = null;

	//redirect back to updated persons_table page
	header('location:clubs.php');
?>

<?php include('global/disconnect.php'); ?>
<!-- Loading footer -->
<?php include('global/footer.php'); ?>
