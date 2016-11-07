<?php include($root."header.php"); ?>
	<div id="sidebar" class="sidebar">
  		<div class="content">
  			<form action="search.php" method="post">
				<input type="text" name="search" id="search">
				<input type="submit" value="Search">
			</form>
			<a href="https://mizzou.tech/userInfo.php"><h4>Your Account</h4></a>
			<a href="https://mizzou.tech/create-edit.php"><h4>Manifest Editor</h4></a>
			<button id="logout" class="button">Log Out</button>
		</div>
	</div>
	<div class="content column full">
		<div class="page-head">
			<h2>Manifest Editor</h2>
		</div>
		<div class="viewer column two-thirds">
			<p>Taking user input, files, get date and time. Buttons for update existing or create new.</p>
			<button id="new" class="button" onclick="formNewFctn()">Create New</button><button id="edit" class="button">Edit this Manifest</button>
			<p id="new"></p>
			<p>If edit, show existing fields for maifest and associated files. Present options for uploading new files and removing old ones.
			If new, present empty fields and upload options for each file. 
			For both, take timestamp, set as most recent update.</p>
			
		<script>	
			function formNewFctn(){
		</script>
				<form action='create-edit.php' method='POST'>
					<p>Title of Manifest</p>
					<input type='text' id='title' name='title'></input>
					<p>Script</p>
					<input type='file' id='script' name='script'></input>
				</form>
		<script>
			}
		</script>
		</div>	
	</div>
<?php include($root."footer.php"); ?>
