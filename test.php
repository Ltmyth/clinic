<?php
include('configs/db.php');
include('classes/general.php');

   $exe = $pdo->prepare("INSERT INTO `incoming`(`incoming_id`, `call_time`, `incoming_date`, `call_source`, `call_recording`, `received_by`) VALUES(null,'40',NOW(),'15155515','551515cfcfc','079797999779')");
        $exe->execute();

print_r($r);

?>