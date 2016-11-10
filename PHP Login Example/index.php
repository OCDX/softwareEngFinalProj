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
		<?php
			session_unset();
			session_destroy();	
		?>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-3"></div>
				<div class="col-md-4 col-sm-4 col-xs-6">
					<h2>Create a user</h2>
					<form action="/lab8/index.php" method="POST">
						<div class="row form-group">
								<input class='form-control' type="text" name="username" placeholder="username">
						</div>
						<div class="row form-group">
								<input class='form-control' type="password" name="password" placeholder="password">
						</div>
						<div class="row form-group">
								<input class=" btn btn-info" type="submit" name="submit" value="Register"/>
						</div>
					</form>
					Already registered? Go <a href="login.php" class="">here</a> to login.
				</div>
			</div>

      <?php
	    
        if(isset($_POST['submit'])) { // Was the form submitted?

          $link = mysqli_connect("localhost", "root", "", "Lab8") or die ("Connection Error " . mysqli_error($link));
          $sql = "INSERT INTO user(username,salt,hashed_password,userType) VALUES (?,?,?,?)";
          if ($stmt = mysqli_prepare($link, $sql)) {
            $userType = 2;
            $user = $_POST['username'];
            $salt = mt_rand();
            $hpass = password_hash($salt.$_POST['password'], PASSWORD_BCRYPT)  or die("bind param");
            mysqli_stmt_bind_param($stmt, "ssss", $user, $salt, $hpass, $userType) or die("bind param");
            if(mysqli_stmt_execute($stmt)) {
              echo "<h4>User $user has been created!</h4>";
            } else {
              echo "<h4>Account creation for $user failed...</h4>";
            }
            $result = mysqli_stmt_get_result($stmt);
          } 
        }
      ?>

					</div>
	</body>
</html>
