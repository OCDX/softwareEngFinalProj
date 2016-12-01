<?php 
session_start();
if ($_SESSION["email"] == NULL){
        header('Location:  index.php', TRUE, 302);
    }
	
include "header.php"; 

?>
<style type="text/css">

div.displayContainer{
	height: 1000px;
}

div#uploadPanel{
	width: 350px;
	float: left;
}

div#NewData{
	overflow: hidden;
	width: 350px;
}

input.fileInput{
	margin-top: 5px;
	margin-bottom: 5px;
	border: 2px solid black;
}
</style>
<script src="jquery-3.1.1.min.js"></script>
<script>
	function showForm()
	{
		var form = document.getElementById("NewData");

		var html = 
			"<button>X</button>" +
			"<p>Title of Manifest</p>" +
			"<input type='text' id='title' name='title'>" +
			"<text class='errorText' id='titleError'></text>" +
			"<p>Version</p>" +
			"<input type='text' id='manifestVersion' name='manifestVersion'>" +
			"<p>Category</p>" +
			"<input type='text' id='category' name='category'>" +				
			"<button id='createManifestFile' onclick='createManifestFile();'>Generate & Download Manifest File</button>" +
			"<text></text>";

		var text = document.createElement('input');
		form.innerHTML = html;
		return false;
	}

	function createManifestFile(){
		$title = $( 'input#title');
		$version = $('input#manifestVersion');
		$category = $('input#category');
		
		if ($title.val().length < 6) {
			$('text#titleError').text("(min 8 characters)");
		} else {
			$('text#titleError').text("");
		}


		// $.ajax({
		// 			type: "POST",
		// 			url: "handleLogin.php",
		// 			data: {
		// 					'action': 'login', 
		// 					'user' : $('#userInput').val(), 
		// 					'pass' : $('#passwordInput').val()
		// 				},
		// 	success: function(data){
		// 		$('#errorTest').html(data);
		// 	},
		// 	error: function(XMLHttpRequest, textStatus, errorThown){
		// 		console.log("error occurred with ajax");
		// 	}
		// });
	}
</script>
<div id="displayContainer">
	<div id="uploadPanel">
		<form action='upload.php' method='$_POST'>
			<h3>Add Dataset/SNC files</h3>
			<input class="fileInput" type="file" id="dataset">
			<button class="plusButton">Add File Upload+</button>
			<!-- <p>Keyword</p>
			<input type='text' id='keyword' name='keyword'></div> -->
			<h3>Upload Manifest.json</h3>
			<input type="file" class="fileInput" id="manifestFile">
			<h3>If you need a manifest files</h3>
			<br>
			<button onclick= "showForm(); return false;">Generate Manifest File</button>
		</form>
	</div>
	<div id='NewData'>
	</div>
</div>
<?php
	if(isset($_POST))
	{
		// $title = $_POST['title'];
		// $version = $_POST['manifestVersion'];
		// $category = $_POST['category'];
		// $keyword = $_POST['keyword'];
		// $dataFile = $_POST['dataset'];
		// $lastEdit = date("Y-m-d");
		// $manifestFile = $_POST['manifest'];
				
		$conn = mysqli_connect('localhost','admin','CS4320FG7','SEFinalProject') or die ("error connecting to database");
		$ownerID = mysqli_prepare($conn, "SELECT ID from user WHERE email LIKE ?");
		mysqli_stmt_bind_param($ownerID, "s", $_SESSION['email']);
		mysqli_stmt_execute($ownerID);
					
		// if($_POST['submit'] == "New") //filled out form, no manifest file, new manifest
		// {
		// 	$creationDate = date("Y-m-d");
					
		// 	$insert = mysqli_prepare($conn, "INSERT INTO manifest VALUES version = ?, category = ?, last_edit = ?, upload_date = ?, data = ?, manifest = ?");
		// 	mysqli_stmt_bind_param($insert, 's', htmlspecialchars($title));
		// 	mysqli_stmt_execute($insert);
					
		// 	if($title != NULL) //filled out manifest file
		// 	{
		// 		$txt = '{"manifest": { "title":'.$title.', "version":'.$version.', "category":'.$category.', "created":'.$creationDate.'}}';
	
		// 		$jsontxt = json_encode($txt, JSON_PRETTY_PRINT);
			
		// 		$newFile = fopen($_SESSION['email']."/".$title."manifest.json","w") or die("Unable to open file");
		// 		fwrite($newFile, $jsontxt);
		// 		fclose($newFile);
					
		// 		$insertFile = mysqli_prepare($conn, "INSERT INTO manifest (category, keyword, ownerId, data, manifest) VALUES ?, ?, ?, ?, ?");
		// 		mysqli_stmt_bind_param($insert, $category, $keyword, $ownerID, $dataFile, $newFile);
		// 		mysqli_stmt_execute($insert);
		// 	}		
		// } 
	}?>
</div>
</body>
</html>
