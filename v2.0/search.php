<?php include "header.php";
 ?>
<script src="jquery-3.1.1.min.js"></script>


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
	}
</script> 
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
							if ($row = mysqli_fetch_assoc($result)){
							echo"<table class='table table-bordered table-hover table-striped'>
								<tr>
								<th>Title</th>
								<th>Version</th>
								<th>Category</th>
								<th>Last Edit</th>
								<th>Upload Date</th>
							</tr>";

					        echo
					        "<tr>
						        <td>".$row['title']."</td>
						        <td>".$row['version']."</td>
						        <td>".$row['category']."</td>
						        <td>".$row['last_edit']."</td>
						        <td>".$row['upload_date']."</td>
						        <td><button class='manifest' onClick='sendID(" . $row['manifest_id'].");'>Select</button></td>
					        </tr>";

					        //So, I need to pass manifest data to the next page, so that view can query for it. Obvious choice is the manifest ID (no security risk?)
					        //Send forward the manifest ID to php script, it will query and return data.
					        //Then ajax call, on success, return then redirect to view 


					        
					        while ($row = mysqli_fetch_assoc($result)){
					        	echo 
					        		"<tr>
						        		<td>".$row['title']."</td>
						        		<td>".$row['version']."</td>
						        		<td>".$row['category']."</td>
						        		<td>".$row['last_edit']."</td>
						        		<td>".$row['upload_date']."</td>
						        		 <td><button class='manifest' onClick='sendID(" . $row['manifest_id'].");'>Select</button></td>
					        		</tr>";
					        }
					    
					       	} else {
					    	echo"<text>Search did not return results</text>";
					    	}
					    } 
					}		
				}				
					?>
				</div>
			</div>
		</div>	
	</div>
