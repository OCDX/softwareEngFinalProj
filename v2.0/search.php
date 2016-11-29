<?php include($root."header.php");
 ?>
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
			<div class="scroll-container">
				<div class="scroll-box">
					<?php  if ($_SESSION['email'] == NULL){
                        echo "<h1>Error: You must be signed in to view this content</h1>";
                        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
                        } 
			else {
						
					if(isset($_POST['search'])){
						$link = mysqli_connect("localhost", "admin", "CS4320FG7", "SEFinalProject") or die ("error");

						$searcher = $_POST['search'] . '%';
						$query = "SELECT * FROM manifest WHERE category LIKE '".$searcher."';";
						$result = mysqli_query($link, $query);
						if ($result){
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
					        	echo "<tr><td>".$row['manifest_id']."</td><td>".$row['version']."</td><td>".$row['category']."</td><td>".$row['last_edit']."</td><td>".$row['upload_date']."</td><td>".$row['title']."</td><td><a class='manifest'>View</a></td></tr>";
					        }
					       	
					    	echo"</table>";
					    } else {
					    	echo"<text>Search did not return results";
					    }
						
					}	
				}				
					?>
				</div>
			</div>
		</div>	
	</div>