<?php 
    session_start();  
    if(!isset($_SESSION['user_id'])){
        header('location:../../');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>OldUser</title>
    <link rel="icon" type="image/x-icon" href="../../images/CSE.png">
	
</head>
<body>
	<h1>hi oldUser</h1>

	<a id="btn-logout"  href="">logout</a>

	<script src="../../plugins/privacy/jquery.js"></script>
	<script src="../../plugins/privacy/logout.js"></script>

</body>
</html>