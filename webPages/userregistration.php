<!--
This file is drawn directly from my 3380 final project.

//TODO: Styling needs to change to match the rest of the site.
-->

<?php
	if (!isset($_SERVER['HTTP']) || !$_SERVER['HTTPS']) { // if request is not secure, redirect to secure url
	   $url = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	   header('Location: ' . $url);
	    //exit;

      /* TODO: should we check to see if an active session is in progress and prevent
      logged in users from registering? */
	}
	error_reporting(E_ALL);
	session_start();
?>
<?php include($root."header.php"); ?>
<html>
	<head>
		<!--  I USE BOOTSTRAP BECAUSE IT MAKES FORMATTING/LIFE EASIER -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"><!-- Optional theme -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script><!-- Latest compiled and minified JavaScript -->
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-3"></div>
				<div class="col-md-4 col-sm-4 col-xs-6">
					<h2>Create a user</h2>
					<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
            <div class="row form-group">
								<input class='form-control' type="text" name="first_name" placeholder="First Name">
						</div>
            <div class="row form-group">
								<input class='form-control' type="text" name="last_name" placeholder="Last Name">
						</div>
						<div class="row form-group">
								<input class='form-control' type="text" name="email" placeholder="email">
						</div>
						<div class="row form-group">
								<input class='form-control' type="password" name="password" placeholder="password">
						</div>
						<div class="row form-group">
								<input class=" btn btn-info" type="submit" name="submit" value="Register"/>
						</div>
					</form>
					<a href="login.php" class="">Already have an account?<br>Login here.</a>
				</div>
			</div>
			<?php
				if(isset($_POST['submit'])) { // Was the form submitted?
//TODO: Need to check if email has already been used
//TODO: need to change name of DB and the passwprd for it.
					$link = mysqli_connect("localhost", "root", "password", "<databaseName>") or die ("Connection Error " . mysqli_error($link));
					$sql = "INSERT INTO user(first_name,last_name,email,salt,hashed_password,permission_level) VALUES (?,?,?,?,?,1)";
					if ($stmt = mysqli_prepare($link, $sql)) {
            $fname = $_POST['first_name'];
            $lname = $_POST['last_name'];
						$email = $_POST['email'];
						$salt = mt_rand();
						$hpass = password_hash($salt.$_POST['password'], PASSWORD_BCRYPT)  or die("bind param");
						mysqli_stmt_bind_param($stmt, "sssis", $fname, $lname, $email, $salt, $hpass) or die("bind param");
						if(mysqli_stmt_execute($stmt)) {
							echo "<h4>Success</h4>";
              //TODO: add header to send to next page upon completion. Login page, perhaps?
						} else {
							echo "<h4>Failed</h4>";
						}
						$result = mysqli_stmt_get_result($stmt);
					} else {
						die("prepare failed");
					}
				}
			?>
		</div>
	</body>
</html>
