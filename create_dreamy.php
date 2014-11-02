<?php
//array for JSON response
$response = array();

if(isset($_POST['Dream_name'])) {
	$Dream_name = $_POST['Dream_name'];
	
	require_once __DIR__ . '/db_connect.php';
	
	$db = new DB_CONNECT();
	
	$result = mysql_query("INSERT INTO Dreamy(Dream_name) VALUES('$Dream_name')");
	
} else {
	$response["message"] = "Required field(s) is missing";
}
?>