<?php
	function connection_db($host='localhost', $user='root', $password='', $db_name='jokes'){
		global $link;
		$link = mysqli_connect($host, $user, $password, $db_name);
		mysqli_query($link, "SET NAMES 'utf8'");
	} 
	function allRecords($table_name, $text){
		global $link;
		$query = "SELECT * FROM $table_name $text";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		for ($data=[]; $row = mysqli_fetch_assoc($result); $data=$row);
		return $result;

	}
?>