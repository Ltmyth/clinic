<?php
	$user = $_REQUEST['username'];
	$key = $_REQUEST['password'];
	
	// Create connection
	require_once('configs/db.php');
	
	// Check connection
	if ($connect->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	else{
		//sql
		$sql = "SELECT * FROM users WHERE username like'$user' AND password='$key'";
		//Query db
		$result = $connect->query($sql);
		if ($result->num_rows){
		    //login
		    session_start();
		    $row = mysqli_fetch_row($result);

		   
		    if( $user =="doctor1"){
		    	$u_name = $row[3];
		    	$_SESSION['user'] = $u_name;
		    	header("Location:admin_home.php");
		    }else{
		    	$u_name = $row[3];
		    	$_SESSION['user'] = $u_name;
		    	header("Location:user_home.php");
		    }		    
		}
		else {
		    echo("<div style='margin-top:16%;' class='row'>
		    	<hr>
		    	<div class='container'>
		    	<br><center style='padding-top:100;'><h2>Wrong Username or Password!</h2></center><br>
		    	<center><a href='index.php'>Try Again</a></center>
		    	<br></div>
		    	</div>
		    	<hr>");
		}
		$connect->close();
	}
?>