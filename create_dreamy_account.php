<?php
//array for JSON response
$response = array();

if(isset($_POST['accountName']) && isset($_POST['email']) && isset($_POST(['password'])) {
	$accountName = $_POST['accountName'];
	$email = $_POST['email'];
	$password = $_POST['description'];
	
	require_once __DIR__ . '/db_connect.php';
	
	$db = new DB_CONNECT();
	
	$result = mysql_query("INSERT INTO Dreamy_account(accountName, email, password) VALUES('$accountName', '$email', '$password')");
	
} else {
	$response["message"] = "Required field(s) is missing";
}
?>