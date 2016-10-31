<?php include($root."header.php"); ?>
	  <div id="sidebar" class="sidebar">
  		<div class="content">
  			<form action="search.php" method="post">
				<input type="text" name="searchtext" id="searchtext">
				<input type="submit" value="Search">
			</form>
			<a href="https://mizzou.tech/userInfo.php"><h4>Your Account</h4></a>
			<a href="https://mizzou.tech/create-edit.php"><h4>Manifest Editor</h4></a>
			<button id="logout" class="button" onclick="">Log Out</button>
		</div>
	</div>
	<div class="content column full">
		<div class="page-head">
			<h2>Manifest Title</h2>
		</div>
		<div class="viewer column two-thirds">
			<h3>Manifest author</h3>
			<p>Display all files as a table that are associated with manifest.</p>
		</div>	
	</div>
<?php include($root."footer.php"); ?>
