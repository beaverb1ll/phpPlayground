<?php
session_start();
if (!isset($_SESSION['username'])) {
	header("location:index.php");
}


$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="VMware5"; // Mysql password 
$db_name="manager"; // Database name 
$tbl_name="customers"; // Table name 

// Connect to server and select databse.
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect to SQL"); 
mysql_select_db("$db_name", $con)or die("cannot select DB");

// password sent from form 
$newpassword = $_POST['new_Password'];
echo $newpassword;
// To protect MySQL injection (more detail about MySQL injection)
$newpassword = stripslashes($newpassword);
$newpassword = mysql_real_escape_string($newpassword);

// $newpassword = md5($newpassword);

$sql = "UPDATE customers set password = '{$newpassword}' WHERE username = '{$_SESSION['username']}'";
echo $sql;
mysql_query($sql);

// debug
$sql = "Select * where username = {$_SESSION['username']}";
$query = mysql_query($sql);
mysql_close($con);
echo $query . "<br>";

?>
<a href="/Manager/home.php">Go back to home page</a>

