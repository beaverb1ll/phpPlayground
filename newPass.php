<?php
session_start();
if (!isset($_SESSION['username'])) {
	header("location:index.php");
}
?>

<html>

<form id='newPassword' action='changePass.php' method='post' accept-charset='UTF-8'>
	<fieldset>
		<legend>Login</legend>
		<input type='hidden' name='submitted' id='submitted' value='1'/>
		<label for='Password' >New Password:</label>
		<input type='password' name='new_Password' id='new_Password' maxlength="50" />
		<input type='submit' name='Submit' value='Submit' />
	</fieldset>
</form>

</html>