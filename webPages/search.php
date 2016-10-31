<?php include($root."header.php"); ?>
	<div id="sidebar" class="sidebar">
  		<div class="content">
  			<form action="search.php" method="post">
				<input type="text" name="search" id="search">
				<input type="submit" value="Search">
			</form>
			<a href="http://mizzou.tech/userInfo.php"><h4>Your Account</h4></a>
			<a href="http://mizzou.tech/create-edit.php"><h4>Manifest Editor</h4></a>
			<button id="logout" class="button">Log Out</button>
		</div>
	</div>
	<div class="content column full">
		<div class="page-head">
			<h2>Search</h2>
			<form action="search.php" method="post">
				<input type="text" name="search" id="search">
				<input type="submit" value="Search">
			</form>
		</div>
		<div class="search-results column two-thirds">
			<p>Display results in table form. Title, author, date, files associated.</p>
		</div>	
	</div>
<?php include($root."footer.php"); ?>