<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
	<fieldset>
		<legend>Login</legend>
		<input type='hidden' name='submitted' id='submitted' value='1'/>
		<label for='incoming_Username' >UserName:</label>
		<input type='text' name='incoming_Username' id='incoming_Username'  maxlength="50" />
		<label for='incoming_Password' >Password:</label>
		<input type='password' name='incoming_Password' id='incoming_Password' maxlength="50" />
		<input type='submit' name='Submit' value='Submit' />
	</fieldset>
</form>


<?php
// home.php

session_start();
echo "Session variable username: {$_SESSION['username']}";
if ( isset($_SESSION['username']) ) {
	header("location:home.php");
}
?>
