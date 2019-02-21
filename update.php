
<!-- Loading header -->
<?php $title = 'Update'; 
include('global/header.php'); ?>
<!-- Loading validation -->
<?php include('update-validation.php'); ?>
<!-- Loading body -->
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	<div>
		<input hidden type="text" id="club_id" name="club_id" value="<?php echo (isset($id))?$id:'';?>">
		<label for="club_name">Club Name</label>
		<input type="text" id="club_name" name="club_name" placeholder="Club Name" maxlength="50" required autofocus="" value="<?php echo (isset($club_name))?$club_name:'';?>">
	</div>
	<div>
		<label for="ground">Ground</label>
		<input type="text" id="ground" name="ground" placeholder="Ground" maxlength="50" required autofocus="" value="<?php echo (isset($ground))?$ground:'';?>">
	</div>
	<button type="submit">Save</button>
</form>
<?php include('global/disconnect.php'); ?>
<!-- Loading footer -->
<?php include('global/footer.php'); ?>