<?php include_once("header.php"); 
	$conn = mysqli_connect('localhost','admin','CS4320FG7','SEFinalProject') or die ("error connecting to database"); ?>
	
	<!-- STUB CALLS
		Sections of code in this document will include:
			calls to open the connection to the database: openConnection()
			search for user information: getUser()
			display user information: showUser()
			get user's manifests: userManifests()
			display manifests as table: displayManifests() -->
	
	<div id="sidebar" class="sidebar">
  		<div class="content">
  			<form action="search.php" method="post">
				<input type="text" name="search" id="search">
				<input type="submit" value="Search">
			</form>
			<a href="userInfo.php"><h4>Your Account</h4></a>
			<a href="create-edit.php"><h4>Manifest Editor</h4></a>
			<form action="logout.php">
			<button id="logout" class="button" onclick="">Log Out</button>
            </form>
		</div>
	</div>
	<div class="content column full">
		<div class="page-head">
			<h2><?php echo $fname." ".$lname;?>: Your info</h2>
		</div>
		<div class="maifestList column two-thirds">
			<h3>Your Manifests</h3>
			<p>Display list of manifests as a table, up to so many items. Anything beyond will be scrolled to, in a scroll container.
			Title, date, list of files. SQL and php implementation.
			Clicking on the title should go to the view page, where there will be options to edit if they are the author, going to the edit page.</p>
		
			<div class="scroll-container">
				<div class="scroll-box">
					<?php 	
						//Show user's mainfests

						$printquery = "SELECT * FROM manifest WHERE ownerID LIKE 1";
        				
						$result = mysqli_query($conn, $printquery);
       					while ($row = mysqli_fetch_assoc($result)){
				        	echo "<table><tr><th>Manifest ID</th><th>Version</th><th>Category</th><th>Last Edit</th><th>Upload Date</th><th>Title</th><th>Owner ID</th><th>Content</th></tr><tr><td>".$row['manifest_id']."</td><td>".$row['version']."</td><td>".$row['category']."</td><td>".$row['last_edit']."</td><td>".$row['upload_date']."</td><td>".$row['title']."</td><td>".$row['ownerID']."</td><td>".$row['data']."</td></tr></table>";
       					}
					?>
				</div>
			</div>
		</div>	
	</div>
<?php include_once("footer.php"); ?>