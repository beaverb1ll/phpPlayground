<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="VMware5"; // Mysql password 
$db_name="manager"; // Database name 
$tbl_name="customers"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect to SQL"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['incoming_Username']; 
$mypassword=$_POST['incoming_Password']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

// $mypassword = md5($mypassword);
$sql = "SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
echo $mypassword;
$result = mysql_query($sql);

// Mysql_num_row is counting table row
$count = mysql_num_rows($result);
echo $count;
// If result matched $myusername and $mypassword, table row must be 1 row
if ($count == 1) {

	session_start();
	// Register $myusername, $mypassword and redirect to file "login_success.php"
	$_SESSION['username'] = $myusername;
	header("location:home.php");
}
else {
	echo "    Wrong Username or Password. Try Again <a href=/Manager/index.php>Here</a>";
}

ob_end_flush();

?>