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
	<title>Edit A Manifest</title>
		
	<script type="text/javascript">
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
</head>

<body>
			<h2>Manifest Editor</h2>
			<div class='viewer column two-thirds'>
			<p>Taking user input, files, get date and time. Buttons for update existing or create new.
			If edit, show existing fields for maifest and associated files. Present options for uploading new files and removing old ones.
			If new, present empty fields and upload options for each file. 
			For both, take timestamp, set as most recent update.</p>
			<button id='newBtn' class='button' onclick='formNewFctn(1)'>Create New</button><button id='edit' class='button' onclick='formEditFctn(1)'>Edit Manifest</button>
			
			<div id='new'>
				<form action='create-edit.php' method='POST'>
					<p>Title of Manifest</p>
					<input type='text' id='title' name='title'>
					<p>Version</p>
					<input type='text' id='manifestVersion' name='manifestVersion'>
					<p>Description</p>
					<input type='text' id='description' name='description'>
					<p>Category</p>
					<input type='text' id='category' name='category'>
					<p>Keywords</p>
					<input type='text' id='keyword' name='keyword'>
					<p>Script</p>
					<input type='file' id='script' name='script'>
										
					<br>
					<input type='submit' value='Submit'>
				</form>
			</div>
			
			
			
			
	";}?>
<?php include_once("footer.php"); ?>
