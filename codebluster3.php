<?php
	include_once('input.php');
	
	$name = $_post('name');
	$age = $_post('age');
	
	if(mysql_query("INSERT INTO REGISTER VALUES("$name",'$age')")){
		echo "sucessfully Inserted";
	}
?>


https://youtu.be/gvGb5Z0yMFY