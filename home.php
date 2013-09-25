<?php
// home.php

session_start();
if ( !isset($_SESSION['username']) ) {
	header("location:index.php");
}
?>

<html>
<body>
<?php
	echo "Welcome " . $_SESSION['username'] . "! ";
?>
<a href="/Manager/newPass.php">Change Password</a>
<a href="/Manager/Logout.php">Logout</a>


<form id='businessSearch' action='searchResults.php' method='post' accept-charset='UTF-8'>
	<fieldset>
		<legend>Customer Search</legend>
		<input type='hidden' name='submitted' id='submitted' value='1'/>
		<label for='bNameInput' >Business Name:</label>
		<input type='text' name='bNameInput' id='bNameInput' maxlength="50" />
		<label for='bPhone' >Phone Number:</label>
		<input type='text' name='bPhoneInput' id='bPhoneInput' maxlength="50" />
		<label for='bNameInput' >Address:</label>
		<input type='text' name='bAddressInput' id='bAddressInput' maxlength="50" />
		<label for='custNumInput' >Customer Number:</label>
		<input type='text' name='custNumInput' id='custNumInput' maxlength="50" />
		<input type='submit' name='Submit' value='Search' />
	</fieldset>
</form>

</body>
</html>