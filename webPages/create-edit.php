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
	<div id="sidebar" class="sidebar">
  		<div class="content">
  			<form action="search.php" method="post">
				<input type="text" name="search" id="search">
				<input type="submit" value="Search">
			</form>
			<a href="userInfo.php"><h4>Your Account</h4></a>
			<a href="create-edit.php"><h4>Manifest Editor</h4></a>
			<form action="logout.php">
			<button id="logout" class="button" onclick="">Log Out</button>
            </form>
		</div>
	</div>
	<div class="content column full">
		<div class="page-head">
			<h2>Manifest Editor</h2>
		</div>
		<div class="viewer column two-thirds">
			<p>Taking user input, files, get date and time. Buttons for update existing or create new.
			If edit, show existing fields for maifest and associated files. Present options for uploading new files and removing old ones.
			If new, present empty fields and upload options for each file. 
			For both, take timestamp, set as most recent update.</p>
			<button id="newBtn" class="button" onclick="formNewFctn(1)">Create New</button><button id="edit" class="button" onclick="formEditFctn(1)">Edit Manifest</button>
			
			<div id="new">
				<form action="create-edit.php" method="POST">
					<p>Title of Manifest</p>
					<input type="text" id="title" name="title">
					<p>Version</p>
					<input type="text" id="manifestVersion" name="manifestVersion">
					<p>Description</p>
					<input type="text" id="description" name="description">
					<p>Category</p>
					<input type="text" id="category" name="category">
					<p>Keywords</p>
					<input type="text" id="keyword" name="keyword">
					<p>Script</p>
					<input type="file" id="script" name="script">
										
					<br>
					<input type="submit" value="Submit">
				</form>
				<?php 
					//take fields and timestamp then load into tables
				?>
			</div>
			
			<!-- <div id="edit">
				<form action="create-edit.php" method="POST">
					<p>Title of Manifest</p>
					<input type="text" id="title" name="title">
					<p>Version</p>
					<input type="text" id="manifestVersion" name="manifestVersion">
					<p>Description</p>
					<input type="text" id="description" name="description">
					<p>Category</p>
					<input type="text" id="category" name="category">
					<p>Keywords</p>
					<input type="text" id="keyword" name="keyword">
					<p>Script</p>
					<input type="file" id="script" name="script">
										
					<br>
					<input type="submit" value="Submit">
				</form>
				<?php 
					//take fields and timestamp then load into tables
				?>
			</div> -->
			
		</div>	
	</div>
<?php include_once("footer.php"); ?>
