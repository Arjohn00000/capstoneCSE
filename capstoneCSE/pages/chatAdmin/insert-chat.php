<?php 
	session_start();
    if(isset($_SESSION['user_id'])){

    	include '../chatAdmin/config.php';
    	$outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
    	$incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
    	$message = mysqli_real_escape_string($conn, $_POST['message']);

    	if(!empty($message)){
    		$sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, message)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')") or die();
    	}
    }
    else{
    	header('location: ../../index.php');

    }

?>