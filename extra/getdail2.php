<?php

//require_once('dbConnector.php');

//AT POST
$recordingUrl = $_POST['sessionId'];
$isActive  = $_POST['isActive'];
$direction = $_POST['direction'];
$callerNumber = $_POST['callerNumber'];
$destinationNumber = $_POST['destinationNumber'];
$dtmfDigits  = $_POST['dtmfDigits'];
$recordingUrl = $_POST['recordingUrl'];
$durationInSeconds  = $_POST['durationInSeconds'];
$currencyCode  = $_POST['currencyCode'];
$amount  = $_POST['amount'];


//This will insert into table sema_table
//for the frist level response.

$sql01 = "INSERT INTO `sema_table`(`session_id`, `phoneNumber`,`level1`) VALUES('".$sessionId."','".$phoneNumber."', '".$dtmfDigits."')";
$db->query($sql10b);


//For the other level of user you can just update the table
$sql02 = "UPDATE `sema_table` SET `level2`='".$dtmfDigits."' WHERE `session_id`='".$sessionId."'";
$db->query($sql11c);




switch($dtmfDigits){
    case "0":
        // Talk to sales... Compose the response
        $response  = '<?xml version="1.0" encoding="UTF-8"?>';
        $response .= '<Response>';
        $response .= '<Say>Please hold while we connect you to Sales.</Say>';    
        $response .= '</Response>';

        // Print the response onto the page so that our gateway can read it
        header('Content-type: text/plain');
        echo $response;
        break;

    case "1":
        // Talk to support... Compose the response
        $response  = '<?xml version="1.0" encoding="UTF-8"?>';
        $response .= '<Response>';
        $response .= '<Say>Please hold while we connect you to Support.</Say>';       
        $response .= '</Response>';

        $sql="UPDATE `cers_test_tab` SET `challenge`='mark test1' where `session_id`='".$sessionId."'";
        mysqli_query($conn,$sql);

        // Print the response onto the page so that our gateway can read it
        header('Content-type: text/plain');
        echo $response;
    break;

    case "2":
        // Talk listen again... Compose the response
        $response  = '<?xml version="1.0" encoding="UTF-8"?>';
        $response .= '<Response>';
        $response .= '<Redirect>http://maxmass.ngrok.io/Atvoice/getdail.php</Redirect>';
        $response .= '</Response>';

        // Print the response onto the page so that our gateway can read it
        header('Content-type: text/plain');
        echo $response;
        break;

    default:
        // Talk to support... Compose the response
        $response  = '<?xml version="1.0" encoding="UTF-8"?>';
        $response .= '<Response>';
        $response .= '<Say>Please try agian. Thanks you SEMA.</Say>';        
        $response .= '</Response>';
    
        // Print the response onto the page so that our gateway can read it
        header('Content-type: text/plain');
        echo $response;
    break;

}


?>
