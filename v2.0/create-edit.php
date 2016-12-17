<script src="jquery-3.1.1.min.js"></script>
<script type="text/javascript">

function remove(id){
	$.ajax({
						type: "POST",
						url: "removeManifest.php",
						data: { 'id' : id },
				
				success: function(data){
         			alert(data); // will open new tab on window.onload
				},
				error: function(XMLHttpRequest, textStatus, errorThown){
					console.log("error occurred with ajax");
				}
			});
}
</script>
<?php include_once('header.php'); 

 	if ($_SESSION['email'] == NULL){
                        echo "<h1>Error: You must be signed in to view this content</h1>";
                        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
        } else if( isset($_POST['id'])){
        	$link = mysqli_connect("localhost", "admin", "CS4320FG7", "SEFinalProject") or die ("error");
        	$query = "SELECT * FROM `dataset_files` WHERE manifestID = ".$_POST['id'].";";
        	$result = mysqli_query($link, $query);
        	$row = mysqli_fetch_assoc($result);
        	$data_file_path = $row['filePath'];
        	$data_file = $row['fileName'];

			$query = "SELECT * FROM `manifest` WHERE manifest_id = ".$_POST['id'].";";
			$result = mysqli_query($link, $query);
			
			if ($row = mysqli_fetch_assoc($result)){
				
			$query = "SELECT * FROM `user` WHERE email = '".$_SESSION['email']."'";
			$result2 = mysqli_query($link, $query);

			$row2 = mysqli_fetch_assoc($result2);

			 if( $row['ownerID'] == $row2['ID'] ){
			 	$removeBtn = "<button onclick=\"remove(${_POST['id']})\">Remove</button>";
			 } else {
			 	$removeBtn = "";
			 }

			echo"
					<h2>Manifest Editor</h2>
					</div>
					<div>	
							<a href=\"${row['manifest_path']}\" download=\"manifest.json\">Download Manifest File</a>
							<a href=\"${data_file_path}\" download=\"${data_file}\">Download Dataset File</a>

					</div>
					<div class='viewer column two-thirds'>
						<div id='new'>
							<form action='create-edit.php' method='POST'>
								<h3>Title of Manifest</h3>
								<input type='text' value=\"{$row['title']}\">
								<h3>Version</h3>
								<input type='text' value=\"{$row['version']}\">
								<h3>Category</h3>
								<input type='text' value=\"{$row['category']}\">
								<h3>Upload new File</h3>
								<input type='file' name='upload new File'>
													
								<br>
								<input type='submit' value='Submit'>
								".$removeBtn."
							</form>
						</div>";
				}
			
		} else {
				echo"
					<h2>Manifest Editor</h2>
					</div>
					<div>
					<button>Download Dataset/SNC files (Zip if more than one)</button>
							<button>Download manifest file</button>
					</div>
					<div class='viewer column two-thirds'>
						<div id='new'>
							<form action='create-edit.php' method='POST'>
								<h3>Title of Manifest</h3>
								<input type='text' id='title' name='title'>
								<h3>Version</h3>
								<input type='text' id='manifestVersion' name='manifestVersion'>
								<h3>Category</h3>
								<input type='text' id='category' name='category'>
								<h3>Upload new File</h3>
								<input type='file' name='upload new File'>
													
								<br>
								<input type='submit' value='Submit'>
							</form>
						</div>
	";}?>
<?php include_once("footer.php"); ?>
