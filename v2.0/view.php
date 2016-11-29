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

<?php 	if ($_SESSION['email'] == NULL){
		echo "<h1> Error you must be signed in to view content</h1>";
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	} else {
	
		$conn = mysqli_connect('localhost','admin','CS4320FG7','SEFinalProject') or die ("error connecting to database");
        $printquery = "SELECT * FROM manifest";
        $result = mysqli_query($conn, $printquery);
        echo"<table class='table table-bordered table-hover table-striped'>
			<tr>
				<th>Manifest ID</th>
				<th>Version</th>
				<th>Category</th>
				<th>Last Edit</th>
				<th>Upload Date</th>
				<th>Title</th>
			</tr>";
        while ($row = mysqli_fetch_assoc($result)){
        //echo "<tr><td>".$row['manifest_id']."</td><td>".$row['version']."</td><td>".$row['category']."</td><td>".$row['last_edit']."</td><td>".$row['upload_date']."</td><td>".$row['title']."</td><td><a class='manifest'>View</a></td></tr>";
        //echo "<tr><td>".$row['manifest_id']."</td><td>".$row['version']."</td><td>".$row['category']."</td><td>".$row['last_edit']."</td><td>".$row['upload_date']."</td><td>".$row['title']."</td><td><a class='manifest'>View</a></td><td><a href = 'download.php' class='manifest'>Download</a></td></tr>";
		//echo "<tr><td>".$row['manifest_id']."</td><td>".$row['version']."</td><td>".$row['category']."</td><td>".$row['last_edit']."</td><td>".$row['upload_date']."</td><td>".$row['title']."</td><td><a class='manifest'>View</a></td></tr>";
        echo "<tr><td>".$row['manifest_id']."</td><td>".$row['version']."</td><td>".$row['category']."</td><td>".$row['last_edit']."</td><td>".$row['upload_date']."</td><td>".$row['title']."</td><td><a class='manifest'>View</a></td><td><form action='download.php' method='post'><button id='download' class='manifest' type='submit' name='submit' value='$row[manifest_id]'>download</button></form></td></tr>";

		}
        echo"</table>";
    }

?>		

	</div>	
	</div>
<?php include_once("footer.php");?>
</body>
</html>
