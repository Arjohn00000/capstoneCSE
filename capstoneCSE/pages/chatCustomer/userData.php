<?php 
	while($row = mysqli_fetch_assoc($sql)){
		$sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['user_id']}
				OR outgoing_msg_id = {$row['user_id']}) AND (outgoing_msg_id = {$outgoing_id}
				OR outgoing_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";

		$query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);

        if(mysqli_num_rows($query2) > 0){
        	$result = $row2['message'];
        }
        else{
        	$result = "no message";
        }

        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        $you = ($row2 && $outgoing_id == $row2['outgoing_msg_id']) ? "You: " : "";
        ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";


			$output .= '<a href="../chatCustomer/chatArea.php?user_id='.$row['user_id'] .' ">
							<div class="content">
								<img src="../chatAdmin/admin.png">
								<div class="details">
									<span>' . $row['username'] . '</span>
									<p>'. $you . $msg .'</p>
								</div>
							</div>
							<div class="status-dot '. $offline .' "><i class="bi bi-circle-fill"></i></div>
						</a>';
		}

?>