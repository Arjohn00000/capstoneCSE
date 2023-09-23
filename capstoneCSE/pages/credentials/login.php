<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>login</title>
    <link rel="icon" type="image/x-icon" href="../../images/CSE.png">
	

	<style>
		.row {
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			height: 400px;
		}
		.btn {
			display: flex;
			margin: auto;
		}
	</style>
</head>
<body>
	<section>
		<div class="container">
			<div class="login-wrap">
				<div class="row">
					<div class="col-12 col-lg-4">
						<div class="col mb-2">
							<input type="text" id="username" name="username" class="form-control" placeholder="Username">
						</div>
						<div class="col  mb-2">
							<input type="email" id="email" name="email" class="form-control" placeholder="Email">
						</div>
						<div class="col  mb-2">
							<input type="password" id="password" name="password" class="form-control" placeholder="Password">
						</div>
						<div class="col  mb-2">
							<button id="btnlogIn" class="btn btn-sm btn-info">Sign In</button>
							<p>Don't have an Accont <a href="register.php">Register</a></p>
							<a href="../../index.php">Back</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="../../plugins/privacy/jquery.js"></script>
	<script src="../../plugins/privacy/login.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>