<?php require_once('header.php'); ?>

<div class="clearfix">
		<div class="row clearfix">
			<div class="column full">
				<div class="content">
<form action="register.php" method="POST">
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

<?php
 if(isset($_POST['submit'])) { // Was the form submitted?
          $link = mysqli_connect('localhost', 'admin', 'CS4320FG7', 'SEFinalProject') or die ("Connection Error " . mysqli_error($link));
          $sql = "INSERT INTO user(email,salt,hash,permission_level) VALUES (?,?,?,?)";
          if ($stmt = mysqli_prepare($link, $sql)) {
            $userType = 1;
            $user = $_POST['username'];
            $salt = mt_rand();
            $hpass = password_hash($salt.$_POST['password'], PASSWORD_BCRYPT)  or die("bind param");
            mysqli_stmt_bind_param($stmt, "ssss", $user, $salt, $hpass, $userType) or die("bind param");
            if(mysqli_stmt_execute($stmt)) {
              echo "<h2>User Created</h2>";
	 
		header('Refresh: 3; URL=testlogin.php');
            } else {
              echo "<h4>Account creation for $user failed...</h4>";
            }
            $result = mysqli_stmt_get_result($stmt);
          } 
        }
?>