<?php include($root."header.php"); ?>

<!-- STUB CALLS
	Sections of code in this document will include:
	calls to open the connection to the database: openConnection()
	search database for specific mainfest: search()
	display information related to the manifest: display() -->

<style>
table, th, td {
border: 1px solid black;
}
</style>	  <div id="sidebar" class="sidebar">
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
			<?php $conn = mysqli_connect('localhost','admin','CS4320FG7','SEFinalProject') or die ("error connecting to database");
        $printquery = "SELECT * FROM manifest";
        $result = mysqli_query($conn, $printquery);
        while ($row = mysqli_fetch_assoc($result)){
        echo "<table><tr><th>Manifest ID</th><th>Version</th><th>Category</th><th>Last Edit</th><th>Upload Date</th><th>Title</th><th>Owner ID</th><th>Content</th></tr><tr><td>".$row['manifest_id']."</td><td>".$row['version']."</td><td>".$row['category']."</td><td>".$row['last_edit']."</td><td>".$row['upload_date']."</td><td>".$row['title']."</td><td>".$row['ownerID']."</td><td>".$row['data']."</td></tr></table>";}?>		
		</div>	
	</div>
<?php include($root."footer.php"); ?>
