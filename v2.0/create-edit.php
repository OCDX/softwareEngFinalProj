<?php include_once('header.php'); ?>
<!-- STUB CALLS
	Sections of code in this document will include:
		calls to open the connection to the database: openConnection()
		displaying the proper form for the user to fill out: chooseForm()
		parsing and cleaning user input from the main forms: prepare()
		posting changes to existing fields in the database: editEntry()
		creating new data to place in the database: newEntry()
		placing data in the database: loadData()-->
		
	<script>	
				function formNewFctn(i){
					if(i == 1)
						document.getElementById("new").style.display=block;
					else
						document.getElementById("new").style.display=none;
				}
	
				function formEditFctn(i){
					if(i == 1)
						document.getElementById("edit").style.display=block;
					else
						document.getElementById("edit").style.display=none;
				}
			</script>
<?php 	if ($_SESSION['email'] == NULL){
                        echo "<h1>Error: You must be signed in to view this content</h1>";
                        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
        } else if( isset($_POST['id'])){
			$query = "SELECT * FROM `manifest` WHERE manifest_id = ".$_POST['id'].";";
			$link = mysqli_connect("localhost", "admin", "CS4320FG7", "SEFinalProject") or die ("error");
			$result = mysqli_query($link, $query);
			
			if ($row = mysqli_fetch_assoc($result)){
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
								<input type='text' value=\"{$row['title']}\">
								<h3>Version</h3>
								<input type='text' value=\"{$row['version']}\">
								<h3>Category</h3>
								<input type='text' value=\"{$row['category']}\">
								<h3>Upload new File</h3>
								<input type='file' name='upload new File'>
													
								<br>
								<input type='submit' value='Submit'>
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
