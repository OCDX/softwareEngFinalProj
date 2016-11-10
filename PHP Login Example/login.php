<?php
session_start();
	if (!isset($_SERVER['HTTPS']) || !$_SERVER['HTTPS']) { // if request is not secure, redirect to secure url
	   $url = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	   header('Location: ' . $url);
	    //exit;
	}
?>
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
					<h2>Login</h2>
					<form action="/lab8/login.php" method="POST">
						<div class="row form-group">
								<input class='form-control' type="text" name="username" placeholder="username">
						</div>
						<div class="row form-group">
								<input class='form-control' type="password" name="password" placeholder="password">
						</div>
						<div class="row form-group">
								<input class=" btn btn-info" type="submit" name="submit" value="Login"/>
						</div>
					</form>
					New? Go <a href="index.php">here</a> to register.
				</div>
			</div>
      <?php
        if(isset($_POST['submit'])){ // was the form submitted?

          $link = mysqli_connect("localhost", "root", "", "Lab8") or die ("connection Error " . mysqli_error($link));
          $sql = "SELECT salt, hashed_password, userType FROM user WHERE username=?";
          if($stmt = mysqli_prepare($link, $sql)) {
						$user = $_POST['username'];
						$password = $_POST['password'];
						mysqli_stmt_bind_param($stmt, "s", $user) or die("bind param");
						if(mysqli_stmt_execute($stmt)){
							mysqli_stmt_bind_result($stmt, $salt ,$hpass, $uType);
							if(mysqli_stmt_fetch($stmt)){
								if(password_verify($salt.$password, $hpass)){
									$_SESSION["username"] = $user;
									$_SESSION["userType"] = $uType;
									echo "<h4>Session started</h4>";
									echo "<script> window.location.assign('welcome.php'); </script>";
								} else {
									echo "<h4>Login failed</h4><br>wrong username or password...";
								}
							} 
						
							
						}
        }
}
       ?>
					</div>
	</body>
</html>

