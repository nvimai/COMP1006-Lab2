
<!-- Loading header -->
<?php $title = 'Add a club'; 
include('global/header.php'); ?>
<!-- Loading validation -->
<?php include('add-validation.php'); ?>
<!-- Loading body -->
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	<div>
		<label for="club_name">Club Name</label>
		<input type="text" id="club_name" name="club_name" placeholder="Club Name" maxlength="50" required autofocus="" value="<?php echo (isset($club_name))?$club_name:'';?>">
	</div>
	<div>
		<label for="ground">Ground</label>
		<input type="text" id="ground" name="ground" placeholder="Ground" maxlength="50" required autofocus="" value="<?php echo (isset($ground))?$ground:'';?>">
	</div>
	<button type="submit">Add</button>
</form>
<?php include('global/disconnect.php'); ?>
<!-- Loading footer -->
<?php include('global/footer.php'); ?>