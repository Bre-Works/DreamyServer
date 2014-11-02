<?php
//array for JSON response
$response = array();

if(isset(isset($_POST['ToDoList'])) {
	$ToDoList = $_POST['ToDoList'];
	
	require_once __DIR__ . '/db_connect.php';
	
	$db = new DB_CONNECT();
	
	$result = mysql_query("INSERT INTO ToDoList(ToDoList) VALUES('$ToDoList')");
	
} else {
	$response["message"] = "Required field(s) is missing";
}
?>