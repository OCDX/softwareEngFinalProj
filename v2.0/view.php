<?php include_once("header.php"); ?>

<!-- STUB CALLS
	Sections of code in this document will include:
	calls to open the connection to the database: openConnection()
	search database for specific mainfest: search()
	display information related to the manifest: display() -->
		 <div id="sidebar" class="sidebar">
  		<div class="content">
  		
		</div>
	</div>
			<p>Display all files as a table that are associated with manifest.</p>
	
<?php 	if ($_SESSION['email'] == NULL){
		echo "<h1> Error you must be signed in to view content</h1>";
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
	else{
	$conn = mysqli_connect('localhost','admin','CS4320FG7','SEFinalProject') or die ("error connecting to database");
        $printquery = "SELECT * FROM manifest";
        $result = mysqli_query($conn, $printquery);
        while ($row = mysqli_fetch_assoc($result)){
        echo "<table class='table table-bordered table-hover table-striped'><tr><th>Manifest ID</th><th>Version</th><th>Category</th><th>Last Edit</th><th>Upload Date</th><th>Title</th><th>Owner ID</th><th>Content</th></tr><tr><td>".$row['manifest_id']."</td><td>".$row['version']."</td><td>".$row['category']."</td><td>".$row['last_edit']."</td><td>".$row['upload_date']."</td><td>".$row['title']."</td><td>".$row['ownerID']."</td><td>".$row['data']."</td></tr></table>";}}?>		
	</div>	
	</div>
<?php include_once("footer.php");?>
</body>
</html>
