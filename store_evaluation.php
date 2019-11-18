<?php
	session_start();

	$user = $_SESSION['user'];
	$date= $_REQUEST['date'];


	$reception = $_REQUEST['reception'];
	$reception_provider = $_REQUEST['reception_provider'];
	$reception_score = $_REQUEST['reception_score'];
	$reception_remark = $_REQUEST['reception_remark'];


	$diagnosis = $_REQUEST['diagnosis'];
	$diagnosis_provider = $_REQUEST['diagnosis_provider'];
	$diagnosis_score = $_REQUEST['diagnosis_score'];
	$diagnosis_remark = $_REQUEST['diagnosis_remark'];

	$treatment = $_REQUEST['treatment'];
	$treatment_provider = $_REQUEST['treatment_provider'];
	$treatment_score = $_REQUEST['treatment_score'];
	$treatment_remark = $_REQUEST['treatment_remark'];

	require_once('configs/db.php');

	
	$today = date_default_timezone_set('UTC'); // This object represents current date/time
	
	if($date==$today){
	   
        //all good
		//sql
		$sql1 = "INSERT INTO services (service, service_provider, score, Remark, scored_by, date_scored) VALUES('$reception', '$reception_provider', '$reception_score', '$reception_remark','$user','$date')";
		//Query db
		if ($connect->query($sql1) === TRUE) {
		    echo "New record created successfully";
		}else {
		    echo "Error: " . $sql1 . "<br>" . $connect->error;
		}


		$sql2 = "INSERT INTO services (service, service_provider, score, Remark, scored_by, date_scored) VALUES('$diagnosis', '$diagnosis_provider', '$diagnosis_score', '$diagnosis_remark','$user','$date')";
		//Query db
		if ($connect->query($sql2) === TRUE) {
		    echo "New record created successfully";
		}else {
		    echo "Error: " . $sql2. "<br>" . $connect->error;
		}


		$sql3 = "INSERT INTO services (service, service_provider, score, Remark, scored_by, date_scored) VALUES('$treatment', '$treatment_provider', '$treatment_score', '$treatment_remark','$user','$date')";
		//Query db
		if ($connect->query($sql3) === TRUE) {
		    echo "New record created successfully";
		}else {
		    echo "Error: " . $sql3. "<br>" . $connect->error;
		}

		header("Location:user_home.php");
	}else{
	    echo $today." is an invalid date";
	}
	
	$connect->close();
?>