<?php

include('configs/db.php');
include('classes/general.php');
//AT POST
$sessionId = $_POST['sessionId'];
$isActive  = $_POST['isActive'];
$direction = $_POST['direction'];
$callerNumber = $_POST['callerNumber'];
$destinationNumber = $_POST['destinationNumber'];
$dtmfDigits  = $_POST['dtmfDigits'];
$recordingUrl = $_POST['recordingUrl'];
$durationInSeconds  = $_POST['durationInSeconds'];
$currencyCode  = $_POST['currencyCode'];
$amount  = $_POST['amount'];


switch($dtmfDigits){

    case "0":
        // leave message ... Compose the response
        $response  = '<?xml version="1.0" encoding="UTF-8"?>';
        $response .= '<Response>';
        $response .= '<Record finishOnKey="#" trimSilence="true" playBeep="true">';
        $response .= '<Say>Please leave a message after Tone.</Say>';    
        $response .= '</Record>';
        $response .= '</Response>';

        // Print the response onto the page so that our gateway can read it
        header('Content-type: text/plain');
        echo $response;
    break;
        case "1":
        $get = new Fetch();
        $det = $get->show_nums(); 
        // Talk to team... Compose the response
        $response  = '<?xml version="1.0" encoding="UTF-8"?>';
        $response .= '<Response>';
        $response .= '<Say>Please hold while we connect you to the team.</Say>';   
        $response .= '<Dial phoneNumbers="'.$det.'" record="true" sequential="true"/>';
        $response .= '</Response>';

        // Print the response onto the page so that our gateway can read it
        header('Content-type: text/plain');
        echo $response;
        break;

/*    case "2":
        // Talk listen again... Compose the response
        $response  = '<?xml version="1.0" encoding="UTF-8"?>';
        $response .= '<Response>';
        $response .= '<Redirect>http://maxmass.ngrok.io/Atvoice/getdail.php</Redirect>';
        $response .= '</Response>';

        // Print the response onto the page so that our gateway can read it
        header('Content-type: text/plain');
        echo $response;
        break;
*/
    default:

        $exe = $pdo->prepare("INSERT INTO `incoming`(`incoming_id`, `call_time`, `incoming_date`, `call_source`, `call_recording`, `received_by`) 
            VALUES(null,'$durationInSeconds',NOW(),'$callerNumber','$recordingUrl','$destinationNumber')");
        $exe->execute();
        // Talk to support... Compose the response
        $response  = '<?xml version="1.0" encoding="UTF-8"?>';
        $response .= '<Response>';
        $response .= '<Say>Please try again. Thank you.</Say>';        
        $response .= '</Response>';
    
        // Print the response onto the page so that our gateway can read it
        header('Content-type: text/plain');
        echo $response;
    break;

}


?>
