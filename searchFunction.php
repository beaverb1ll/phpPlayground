<?php

function searchDatabase($tableName, $columnName, $searchInput) {
	$dbHost="localhost"; // Host name 
	$dbUsername="root"; // Mysql username 
	$dbPassword="VMware5"; // Mysql password 
	$dbName="manager"; // Database name 
	// $tbl_name="customers"; // Table name 

	// Connect to server and select databse.
	$dbCon = new mysqli("$dbHost", "$dbUsername", "$dbPassword", "$dbName");

	if (mysqli_connect_errno($dbCon)) {
    	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	} 

	// $columnName = mysqli_real_escape_string($columnName);
	// $searchInput = mysqli_real_escape_string($searchInput);

	$query = "SELECT * FROM " . $tableName . " WHERE " . $columnName . " like '%" . $searchInput . "%'";

	// echo "DEBUG [searchDatabase::22]:" . $query . "<br>";
	
	$result = $dbCon->query($query);

	return $result;
}

function updateDatabase($tableName, $columnName, $newInput) {
	$dbHost="localhost"; // Host name 
	$dbUsername="root"; // Mysql username 
	$dbPassword="VMware5"; // Mysql password 
	$dbName="manager"; // Database name 
	// $tbl_name="customers"; // Table name 

	// Connect to server and select databse.
	$dbCon = new mysqli("$dbHost", "$dbUsername", "$dbPassword", "$dbName");

	if (mysqli_connect_errno($dbCon)) {
    	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	} 

	$columnName = mysqli_real_escape_string($columnName);
	$newInput = mysqli_real_escape_string($newInput);

	$query = "SELECT * FROM {$tableName} WHERE {$columnName} like '%" . "{$newInput}" . "%'";
// UPDATE {$taableName} set {$columnName} = '{$newpassword}' WHERE cust_num = '{$customerNumber}'";
	// DEBUG
	// echo $query . "<br>";

	$result = $dbCon->query($query);

	return $result;
}
?>