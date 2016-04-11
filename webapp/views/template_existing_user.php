
<?php
$message = "";
if ($showerror == True) {
	$message = '<div class="alert alert-danger">
	<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	<strong>' . $errorMessage . '</strong>
	</div>';
}

if ($showUpdateSuccessMessage == True) {
	$message = '<div class="alert alert-success">
	<strong>' . $successUpdateMessage . '</strong>
	</div>';
}

echo $message;
?>



<form action="index.php" method="get" required>
	<div class="form-group">
		<label>Name:</label> <input type="text" name="name"
			value="<?php echo $username;?>" required class="form-control">
	</div>
	<div class="form-group">
		<label>Surname: </label> <input type="text" name="surname"
			value="<?php echo $surname;?>" required class="form-control">
	</div>
	<div class="form-group">
		<label>Email:</label> <input type="email" name="email"
			value="<?php echo $email;?>" required class="form-control">
	</div>

	<input type="hidden" name="idUser" value="<?php echo $idUser;?>"> <input
		type='hidden' name='action' value='updateUserInfo'> <input
		type="submit" value='Update' class='btn btn-success'>
</form>
