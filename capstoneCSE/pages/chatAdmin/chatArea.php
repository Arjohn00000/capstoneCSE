<?php 
  session_start();

  include "../chatAdmin/config.php";
  if(!isset($_SESSION['user_id'])){
    header("location: ../../index.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../chatAdmin/chat.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="icon" type="image/x-icon" href="../../images/CSE.png">

	<title>chat</title>
</head>
<body>
	

	<div class="body">
		<div class="wrapper">
			<section class="chat-area">
				<header>
					<?php 
						include '../chatAdmin/config.php';
						$user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
						$sql = mysqli_query($conn, "SELECT * FROM users WHERE user_id = {$user_id}");
						if(mysqli_num_rows($sql) > 0) {
							$row = mysqli_fetch_assoc($sql);
						}

					?>
					<a class="back-icon" href="../chatAdmin/chat.php"><i class="bi bi-arrow-left"></i></a>
					<img src="../chatCustomer/customer.png">
					<div class="details">
						<span><?php echo $row['username'];?></span>
						<p><?php echo $row['status'];?></p>
					</div>
				</header>
				<div class="chat-box">
					
					
				</div>
				<form action="#" class="typing-area" autocomplete="off">
					<input type="text" name="outgoing_id" value="<?php echo $_SESSION['user_id']; ?>" hidden>
					<input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
					<input type="text" name="message" class="input-field" placeholder="Type a message here...">
					<button><i class="bi bi-telegram"></i></button>
				</form>
			</section>
		</div>
	</div>
	

	<script src="../chatAdmin/chat.js"></script>
</body>
</html>