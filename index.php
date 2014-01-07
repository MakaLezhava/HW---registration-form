<?php

session_start();

$success = FALSE;
if(!empty($_SESSION['last_inserted_id']) && is_numeric($_SESSION['last_inserted_id']) > 0){
  $success = TRUE;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	
<link rel="stylesheet" href="style.css">
<script src = "jquery-1.10.2.min.js"></script>
<script src = "script.js"></script>
</head>
  <body id="body-color">
	<div id="Sign-Up">
	<fieldset style="width:15%">
	  <legend>Registration</legend>
	<form action="adduser.php" method="post" id="regform">
		Username:  <input type="text" name="username"><br>
		First Name: <input type="text" name="firstname"><br>
		Last Name: <input type="text" name="lastname"><br>
		Email: <input type="email" name="email"><br>
		Password: <input type ="password" name="password"><br>
		Confirm Password: <input type="password" name="cpassword"><br>
		Gender: <select name="gender">
			<option value="Male">Male</option>
			<option value="Female">Female</option><br>
			</select><br>
		<input type="submit" name="submit" value="Sign-Up">
	</form>

</fieldset>

  <?php if($success): ?>
    <p class = "success"> Successfuly registered! </p>
	<?php session_destroy(); ?>
  <?php endif; ?>

</div>
</body>


</html>