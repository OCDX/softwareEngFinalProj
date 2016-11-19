<?php include($root."header.php"); ?>
<!--
This is code that my group from 3380 used to ensure that the user was always using https instead of http.
Granted, we may not really be worried about secure transfer of data. I do remember Zach making a certificate
for the site, though.
-->
<?php
	if (!isset($_SERVER['HTTP']) || !$_SERVER['HTTPS']) { // if request is not secure, redirect to secure url
	   $url = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	   header('Location: ' . $url);
	    //exit;
	}
	error_reporting(E_ALL);
	session_start();
	function goView() {
		header('Location: view.php');
	}

	function goForgot(){
		header('Location: userResetPW.php');
	}
?>
	<div class="clearfix">
		<div class="row clearfix">
			<div class="column full">
				<div class="content">
					<!-- login form -->
					<form action="" method="post"><h2>Login</h2>
						<!--In order to not break any styling, id is left as username-->
						<p>Username: <input type="text" name="email" id="username"><br>
						   Password: <input type="password" name="password" id="password"><br>
							
						   <button id="login" class="loginbtn" type="submit" name="submit">Log In</button></p>
						  <p><button id="Forgot" class="loginbtn" type="submit" name="forgot">Forgot Password?</button></p>
					</form>
				</div>
				<!--
Again, this is borrowed code from my 3380 final project.
If we want to use this, we need user.hashed_password and user.salt in our DB.
It also assumes that we're using sessions and that the variables userid and usertype exist in our session

			-->
				<?php
					if(isset($_POST['submit'])) { // Was the form submitted?
						//connect to DB
						$link = mysqli_connect("localhost", "root", "admin", "SEFinalProject") or die ("Connection Error " . mysqli_error($link));
						//Set up statement
						$sql = "SELECT `user`.`salt`, `user`.`hash`, `user`.`ID`, `user`.`permission_level` FROM `user` WHERE `user`.`email`=?;";
						//if it prepares
						if ($stmt = mysqli_prepare($link, $sql)) {
							//set user
							$email = $_POST['email'];
							//bind params into sql stmt
							mysqli_stmt_bind_param($stmt, "s", $email) or die("bind param");
							//if it executes
							if(mysqli_stmt_execute($stmt)) { //do nothing
							} else { //error message
								echo "<h4>Failed connecting to the database</h4>";
							}
							//set result
							$result = mysqli_stmt_get_result($stmt);
							//get info out of result
							$row = mysqli_fetch_array($result, MYSQLI_NUM);
							//set salt and hpass
							$salt = $row[0];
							$hpass = $row[1];
							$userid = $row[2];
							$usertype = $row[3];
							//if password is correct
							if(password_verify($salt.$_POST['password'], $hpass)) {
								echo "<h2>Login Sucessfull!</h2>";
								// Use session variables
								$_SESSION['userid'] = $userid;
								$_SESSION['permission_level'] = $usertype;
								//goIndex();  //TODO determine function name to send to next page.
							}
							else
								echo "<h2>Login Failed!</h2>";
						} else { //if it fails to prepare
							die("prepare failed");
						}
					}

					if(isset($_POST['forgot'])){
						goForgot();
					}
				?>
			 </div>
		</div>
	 </div>
<?php include($root."footer.php"); ?>
