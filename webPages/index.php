<?php include_once("header.php"); ?>
	<div class="clearfix">
		<div class="row clearfix">
			<div class="column full">
				<div class="content">
					<!-- login form -->
					<form action="indextest.php" method="post"><h2>Login</h2>
						<p>Username: <input placeholder="email" type="text" name="email" id="username"><br>
						   Password: <input placeholder="password" type="password" name="password" id="password"><br>
						   <button id="login" class="loginbtn" type="submit" name="submit">Log In</button></p>
					</form>
                    <?php
        if(isset($_POST['submit'])){ // was the form submitted?
          $link = mysqli_connect("localhost", "admin", "CS4320FG7", "SEFinalProject") or die ("connection Error " . mysqli_error($link));
          $sql = "SELECT salt, hash, permission_level FROM user WHERE email=?";
          if($stmt = mysqli_prepare($link, $sql)) {
						$user = $_POST['email'];
						$password = $_POST['password'];
						mysqli_stmt_bind_param($stmt, "s", $user) or die("bind param");
						if(mysqli_stmt_execute($stmt)){
							mysqli_stmt_bind_result($stmt, $salt ,$hpass, $uType);
							if(mysqli_stmt_fetch($stmt)){
								if(password_verify($salt.$password, $hpass)){
									$_SESSION["email"] = $user;
									$_SESSION["permission_level"] = $uType;
									//echo "<h4>Session started</h4>";
									echo "<script> window.location.assign('view.php'); </script>";
								} else {
									echo "<h4>Login failed</h4><br>wrong username or password...";
								}
							} 
						
							
						}
        }
}
       ?>
				</div>
			 </div>
		</div>
	 </div>
<?php include_once("footer.php"); ?>