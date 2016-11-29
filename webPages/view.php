<?php  
	if ( !isset($_SESSION['email'])){
        header('Location:  login.php', TRUE, 302);
    }

    include 'header.php'; 
?>


<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>View Manifest</title>
</head>

<body>
	<div id="sidebar" class="sidebar">
  		<div class="content">
  		
		</div>
	</div>
	<p>Display all files as a table that are associated with manifest.</p>
	
	<?php 	

		if ($_SESSION['email'] == NULL){
			echo "<h1> Error you must be signed in to view content</h1>";
			echo "<meta http-equiv='refresh' content='0;url=index.php'>";
		} else {
			$conn = mysqli_connect('localhost','admin','CS4320FG7','SEFinalProject') or die ("error connecting to database");
	        $printquery = "SELECT * FROM manifest";
	        $result = mysqli_query($conn, $printquery);
	        
	        while ($row = mysqli_fetch_assoc($result)){
	        echo "<table class='table table-bordered table-hover table-striped'>
	        		<tr>
						<th>Manifest ID</th>
						<th>Version</th>
						<th>Category</th>
						<th>Last Edit</th>
						<th>Upload Date</th>
						<th>Title</th>
						<th>Owner ID</th>
						<th>Content</th
					</tr>
	        		<tr>
	        			<td>".$row['manifest_id']."</td>
	        			<td>".$row['version']."</td><td>".$row['category']."</td>
	        			<td>".$row['last_edit']."</td><td>".$row['upload_date']."</td>
	        			<td>".$row['title']."</td><td>".$row['ownerID']."</td>
	        			<td>".$row['data']."</td>
	        		</tr>
	        	</table>";
	        }}
    ?>	

</body>
</html>
