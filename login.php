<html>
<link rel="stylesheet" href="res/css/bootstrap.min.css">
<link rel="stylesheet" href="res/css/bootstrap-theme.min.css">
<?php

	session_start();

	$user = $_POST['username'];
	$pass = $_POST['password'];
	require_once 'inc/functions.php';
	if ($user&&$pass) {
		connectDB();

		$query = mysql_query("SELECT * FROM accounts WHERE username='$user'");

		$res = mysql_num_rows($query);

		if ($res == 0) {
			die('<div class="jumbotron"><center>
				<h1>Username \''.$user.'\' does not exist</h1>
				<p>Click <a href="/system">here</a> to go back</p>
				</center></div>');
		} else {
			while ($row = mysql_fetch_assoc($query)) {
				$resUser = $row['username'];
				$resPass = $row['password'];
			}
			//Check Username and password
			if ($user == $resUser && $pass == $resPass) {
				header("refresh:0; url=home.php");
				echo '<div class="jumbotron"><center>
				<h1>Redirecting to Home Page</h1>
				<p>Click <a href="home.php">here</a> if nothing happens</p>
				</center></div>';
				$_SESSION['username'] = $resUser;
			} else {
				die('<div class="jumbotron"><center>
					<h1>Incorrect Password!</h1>
					<p>Click <a href="/system">here</a> to go back</p>
					</center></div>');
			}
			
		}
	} else {
		die('<div class="jumbotron"><center>
			<h1>Enter a username and password</h1><br><br>
			<p>Click <a href="/system">here</a> to go back</p>
			</center></div>');
	}


?>
</html>