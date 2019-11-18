<?php
	//db connect
	$GLOBALS['connect'] = new mysqli("localhost","root","","cw");
	//check connection
	if($connect->connect_error){
		die("Connection failed:".$connect->connect_error);
	}
		
?>