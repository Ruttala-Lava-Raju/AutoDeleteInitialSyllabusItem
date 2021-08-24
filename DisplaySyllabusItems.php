<?php
	session_start();
	include "MySQLConnection.php";
	$SelectQuery = "SELECT * FROM ExpSyllabus";
	$result = $dbConn->query($SelectQuery);
	$syllabusItems = array();
	if ($result -> num_rows != 0) 
	{
		while ($row = $result->fetch_assoc()) 
		{
			$syllabusItems[] = $row;
		}
		$syllabusItems = json_encode($syllabusItems);
		echo $syllabusItems;
	}
	$dbConn -> close();
?>