<?php include_once("header.php");
	error_reporting(E_ALL);
	ini_set('display_errors', 1);?>

	<!-- STUB CALLS
		Sections of code in this document will include:
			calls to open the connection to the database: openConnection()
			search for user information: getUser()
			display user information: showUser()
			get user's manifests: userManifests()
			display manifests as table: displayManifests() -->

<script type="text/javascript">
$.extend(
	{
	    redirectPost: function(location, args)
	    {
	        var form = '';
	        $.each( args, function( key, value ) {
	            form += '<input type="hidden" name="'+key+'" value="'+value+'">';
	        });
	        $('<form action="'+location+'" method="POST">'+form+'</form>').appendTo('body').submit();
	    }
	});

	function sendID(id) {
		var redirect = 'create-edit.php';
		$.redirectPost(redirect, {'id' : id});
	}</script>
	<div class="content column full">
		<div class="maifestList column two-thirds">
			<h3>Your Manifests</h3>
			<div class="scroll-container">
				<div class="scroll-box">
					<?php 	if ($_SESSION['email'] == NULL){
		echo "<h1> Error you must be signed in to view content</h1>";
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	} else {
	
		$conn = mysqli_connect('localhost','admin','CS4320FG7','SEFinalProject') or die ("error connecting to database");
        $id = $_SESSION['userid'];
        $printquery = "SELECT * FROM manifest WHERE ownerID = $id";
        $result = mysqli_query($conn, $printquery);
        echo"<table class='table table-bordered table-hover table-striped'>
			<tr>
				<th>Title</th>
				<th>Version</th>
				<th>Category</th>
				<th>Last Edit</th>
				<th>Upload Date</th>
                <th>Edit</th>
			</tr>";
        while ($row = mysqli_fetch_assoc($result)){
        echo 
        	"<tr>
	            <td>".$row['title']."</td>
	            <td>".$row['version']."</td>
	            <td>".$row['category']."</td>
	            <td>".$row['last_edit']."</td>
	            <td>".$row['upload_date']."</td>
	            <td><button class='manifest' onClick='sendID(" . $row['manifest_id'].");'>View</button></td>
            </tr>";
        }
        echo"</table>";
    }

?>
				</div>
			</div>
		</div>

				<h3>Edit Your Information</h3>
				<!--
					TODO: display current settings of user
				-->
				<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
		            <div class="row form-group">
							<input class='form-control' type="text" name="first_name" placeholder="First Name"><!--<span>Current first name: <?php //echo $firstname?></span>-->
					</div>
		            <div class="row form-group">
							<input class='form-control' type="text" name="last_name" placeholder="Last Name"><!--<span>Current last name: <?php //echo $lastname?></span>-->
					</div>
					<div class="row form-group">
							<input class='form-control' type="email" name="email" placeholder="email"><!--<span>Current email: <?php //echo $_SESSION["email"]?></span>-->
					</div>
					<div class="row form-group">
							<input class='form-control' type="password" name="old_password" placeholder="old password">
					</div>
					<div class="row form-group">
							<input class='form-control' type="password" name="password" placeholder="password">
					</div>
					<div class="row form-group">
							<input class=" btn btn-info" type="submit" name="submit" value="Update Account"/>
					</div>
				</form>
				<?php
					ini_set('display_errors', 1);
					if(isset($_POST['submit'])) {


						if (!empty($_POST['first_name'])) {
							$conn = mysqli_connect('localhost','admin','CS4320FG7','SEFinalProject') or die ("error connecting to database");
							$sql = "UPDATE user SET first_name = ? WHERE ID = ?";
							if ($stmt = mysqli_prepare($conn, $sql)) {
								$fname = $_POST['first_name'];
								$id = $_SESSION['userid'];
								mysqli_stmt_bind_param($stmt, "si", $fname, $id) or die("bind param");
								if(mysqli_stmt_execute($stmt)) {
									echo "<div class='alert alert-success' role='alert'>First name changed successfully</div>";
								} else {
									echo "<div class='alert alert-danger' role='alert'>First name not changed</div>";
								}
								$result = mysqli_stmt_get_result($stmt);
							} else {
								die("prepare failed1");
							}
							mysqli_close($conn);
						}

						if (!empty($_POST['last_name'])) {
							$conn = mysqli_connect('localhost','admin','CS4320FG7','SEFinalProject') or die ("error connecting to database");
							$sql = "UPDATE user SET last_name = ? WHERE ID = ?";
							if ($stmt = mysqli_prepare($conn, $sql)) {
								$lname = $_POST['last_name'];
								$id = $_SESSION['userid'];
								mysqli_stmt_bind_param($stmt, "si", $lname, $id) or die("bind param");
								if(mysqli_stmt_execute($stmt)) {
									echo "<div class='alert alert-success' role='alert'>Last name changed successfully</div>";
								} else {
									echo "<div class='alert alert-danger' role='alert'>Last name not changed</div>";
								}
								$result = mysqli_stmt_get_result($stmt);
							} else {
								die("prepare failed2");
							}
							mysqli_close($conn);
						}

						if (!empty($_POST['email'])) {
							$conn = mysqli_connect('localhost','admin','CS4320FG7','SEFinalProject') or die ("error connecting to database");
							$sql = "UPDATE user SET email = ? WHERE ID = ?";
							if ($stmt = mysqli_prepare($conn, $sql)) {
								$mail = $_POST['email'];
								$id = $_SESSION['userid'];
								mysqli_stmt_bind_param($stmt, "si", $mail, $id) or die("bind param");
								if(mysqli_stmt_execute($stmt)) {
									echo "<div class='alert alert-success' role='alert'>Email changed successfully</div>";
								} else {
									echo "<div class='alert alert-danger' role='alert'>Email not changed</div>";
								}
								$result = mysqli_stmt_get_result($stmt);
							} else {
								die("prepare failed3");
							}
							mysqli_close($conn);
						}

						if (!empty($_POST['password'] && !empty($_POST['old_password']))) {//checks to make sure there is a value in both password fields.
						    $conn = mysqli_connect('localhost','admin','CS4320FG7','SEFinalProject') or die ("error connecting to database");
							$correct = false;
							$sql = "SELECT salt, hash, permission_level, ID FROM user WHERE email=?";
							if($stmt = mysqli_prepare($conn, $sql)) {
								$user = $_SESSION['email'];
								$password = $_POST['old_password'];
								mysqli_stmt_bind_param($stmt, "s", $user) or die("bind param");
								if(mysqli_stmt_execute($stmt)){
									mysqli_stmt_bind_result($stmt, $salt ,$hpass, $uType, $id);
									if(mysqli_stmt_fetch($stmt)){
										if(password_verify($salt.$password, $hpass)){
											$correct = true;

										} else {
											echo "<div class='alert alert-danger' role='alert'>Old password incorrect</div>";
										}
									}


								}
							}else {
								die("prepare failed4");
							}
							mysqli_close($conn);

							if($correct){




								$conn = mysqli_connect('localhost','admin','CS4320FG7','SEFinalProject') or die ("error connecting to database");
								$sql = "UPDATE user SET salt = ?, hash = ? WHERE ID = ?";
								if ($stmt = mysqli_prepare($conn, $sql)) {
									$id = $_SESSION['userid'];
									$salt = mt_rand();
									$hpass = password_hash($salt.$_POST['password'], PASSWORD_BCRYPT)  or die("bind param");
									mysqli_stmt_bind_param($stmt, "isi", $salt, $hpass, $id) or die("bind param");
									if(mysqli_stmt_execute($stmt)) {
										echo "<div class='alert alert-success' role='alert'>Password changed successfully</div>";
									} else {
										echo "<div class='alert alert-danger' role='alert'>Password not changed</div>";
									}
									$result = mysqli_stmt_get_result($stmt);
								} else {
									die("prepare failed5");
								}
								mysqli_close($conn);
							}
						}

					}
				?>
	</div>


</body>
</html>
