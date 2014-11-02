<?php
//array for JSON response
$response = array();

if(isset(isset($_POST['MilestoneName'])) {
	$MilestoneName = $_POST['MilestoneName'];
	require_once __DIR__ . '/db_connect.php';
	
	$db = new DB_CONNECT();
	
	$result = mysql_query("INSERT INTO Milestone(MilestoneName) VALUES('$MilestoneName)");
	
} else {
	$response["message"] = "Required field(s) is missing";
}
?>