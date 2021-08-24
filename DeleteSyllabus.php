<?php
	session_start();
	include "MySQLConnection.php";
	$jsonString = file_get_contents('php://input');
	$newJsonString = json_decode($jsonString, true);
	$syllabusNumber = $newJsonString["syllabusNumber"];
	$updateQuery = "DELETE FROM ExpSyllabus WHERE syllabusID = $syllabusNumber";
	if($dbConn -> query($updateQuery) === TRUE)
	{
		http_response_code(204);
	}
	else 
	{
		http_response_code(400);
	}
?>