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
	<style>
		.logout {
			cursor: pointer;
		}
	</style>
</head>
<body>

	<div class="body">
		
		<div class="wrapper">
			<section class="users">
				<header>
					<div class="content">
						<img src="../chatAdmin/admin.png">
						<div class="details">
							<span><?php echo $_SESSION['username'];?></span>
							<p>Active now</p>
						</div>
					</div>
					<a id="btn-logout" class="logout">Logout</a>
				</header>
				<div class="search">
					<span>Select an user to start chat</span>
					<input type="text" placeholder="Enter name to search">
					<button><i class="bi bi-search"></i></button>
				</div>
				<div class="users-list">
					
					
				</div>
			</section>
		</div>
	</div>
	
	<script src="../../plugins/privacy/jquery.js"></script>
	<script src="../chatAdmin/users.js"></script>
  <script src="../../plugins/privacy/logout.js"></script>

</body>
</html>