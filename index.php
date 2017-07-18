<?php
session_start();
require_once 'inc/functions.php';
connectDB();



?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="res/css/bootstrap.min.css">
		<link rel="stylesheet" href="res/css/bootstrap-theme.min.css">
	</head>
	<style>
	.login-panel{
		margin-top: 40%;
	}
	</style>
	<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Please Sign In</h3>
					</div>
					<div class="panel-body">
						<form method="POST" action="login.php">
							<div class="form-group">
								<input class="form-control" type="text" name="username" id="username" placeholder="Username">
							</div>
							<div class="form-group">
								<input class="form-control" type="password" name="password" id="password" placeholder="Password">
							</div>
							<input class="btn btn-success btn-lg btn-block" type="submit" name="submit" value="Login">
						</form>
					</div>
					<div class="panel-footer">
						&copy OnTheJob
					</div>
				</div>
			</div>
		</div>
	</div>
	</body>
	<script src="res/js/jquery-2.1.4.min.js"></script>
	<script src="res/js/bootstrap.min.js"></script>
</html>
