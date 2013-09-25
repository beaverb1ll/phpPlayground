<?php

session_start();
if ( !isset($_SESSION['username']) ) {
	header("location:index.php");
}

include_once "searchFunction.php";

define("TABLENAME", "customers");

if (!empty($_POST['bNameInput']) ) {

	

	$searchCategory = "business_name";
	$searchValue = $_POST['bNameInput'];


	echo "Results for Business Name " . $searchValue . ":<br>";
	
	$results = searchDatabase(TABLENAME, $searchCategory, $searchValue);
	
	if ($results->num_rows == 0)
		echo "No Results found. <br>";
	else {

		while ( $row = mysqli_fetch_object($results) ) {
    		echo "<a href='/Manager/results.php?bNum=" . $row->cust_num . "'>" . $row->business_name . "</a><br />";
		}
	}

} 

if (!empty($_POST['bPhoneInput'])) {

	$searchCategory = "phone";
	$searchValue = $_POST['bPhoneInput'];

	echo "Results for Phone Number " . $searchValue . ":<br>";

	$results = searchDatabase(TABLENAME, $searchCategory, $searchValue);

	if ($results->num_rows == 0)
		echo "No Results found. <br>";
	else {

		while ( $row = mysqli_fetch_object($results) ) {
    		echo "<a href='/Manager/results.php?bNum=" . $row->cust_num . "'>" . $row->business_name . "</a><br />";
		}
	}
}

if (!empty($_POST['bAddressInput'] )) {

	$searchCategory = "address";
	$searchValue = $_POST['bAddressInput'];

	echo "Results for Address " . $searchValue . ":<br>";

	$results = searchDatabase(TABLENAME, $searchCategory, $searchValue);

	if ($results->num_rows == 0)
		echo "No Results found. <br>";
	else {

		while ( $row = mysqli_fetch_object($results) ) {
    		echo "<a href='/Manager/results.php?bNum=" . $row->cust_num . "'>" . $row->business_name . "</a><br />";
		}
	}
}

if ( !empty($_POST['custNumInput'])) {

	$searchCategory = "cust_num";
	$searchValue = $_POST['custNumInput'];

	echo "Results for Customer Number " . $searchValue . ":<br>";

	$results = searchDatabase(TABLENAME, $searchCategory, $searchValue);

	if ($results->num_rows == 0)
		echo "No Results found. <br>";
	else {

		while ( $row = mysqli_fetch_object($results) ) {
    		echo "<a href='/Manager/results.php?bNum=" . $row->cust_num . "'>" . $row->business_name . "</a><br />";
		}
	}
}

if (empty($searchCategory)) {
	echo "Error: No Search Input.";
	exit;
}

echo "<a href='/Manager/home.php'>New Search</a>";

// $count = mysql_num_rows($result);


?>