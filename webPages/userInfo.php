<?php include($root."header.php"); ?>
	<div id="sidebar" class="sidebar">
  		<div class="content">
  			<form action="search.php" method="post">
				<input type="text" name="search" id="search">
				<input type="submit" value="Search">
			</form>
			<a href="https://mizzou.tech/userInfo.php"><h4>Your Account</h4></a>
			<a href="https://mizzou.tech/create-edit.php"><h4>Manifest Editor</h4></a>
			<button id="logout" class="button" onclick="">Log Out</button>
		</div>
	</div>
	<div class="content column full">
		<div class="page-head">
			<h2>Username: Your info</h2>
		</div>
		<div class="maifestList column two-thirds">
			<h3>Your Manifests</h3>
			<p>Display list of manifests as a table, up to 20 items. Anything beyond will be scrolled to, in an iframe.
			Title, date, list of files. SQL and php implementation.
			Clicking on the title should go to the view page, where there will be options to edit if they are the author, going to the edit page.</p>
		</div>	
	</div>
<?php include($root."footer.php"); ?>
