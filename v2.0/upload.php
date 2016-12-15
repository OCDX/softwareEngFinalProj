 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
	padding-left: 10px;
}

input.fileInput{
	margin-top: 5px;
	margin-bottom: 5px;
	border: 1px solid lightgray;
    padding: 5px;
    border-radius: 5px;
}
input.inputField{
	margin-bottom: 5px;
}

button#createManifestFile{
	margin-top: 10px;
}
button.exit{
	margin-left: -10px;
}
</style>
<script src="jquery-3.1.1.min.js"></script>
<script>
	function showForm()
	{
		var form = document.getElementById("NewData");

		var html = 
			"<button class='exit' onclick='closeForm();'>X</button>" +
			"<p>Title of Manifest</p>" +
			"<input type='text' id='title' name='title' class='inputField'>" +
			"<text class='errorText' id='titleError'></text>" +
			"<p>Version</p>" +
			"<input type='text' id='manifestVersion' name='manifestVersion' class='inputField'>" +
			"<text class='errorText' id='versionError'></text>" +
			"<p>Category</p>" +
			"<input type='text' id='category' name='category' class='inputField'>" +				
			"<text class='errorText' id='categoryError'></text>" +
			"<button id='createManifestFile' onclick='createManifestFile();'>Generate & Download Manifest File</button>" +
			"<text></text>";

		var text = document.createElement('input');
		form.innerHTML = html;
		$('div#genButtonDiv').html('');
		return false;
	}

	function closeForm(){
		document.getElementById("NewData").innerHTML = '';
		$('div#genButtonDiv').html('<button onclick= "showForm(); return false;">Generate Manifest File</button>');
	}

	function createManifestFile(){
		$title = $( 'input#title');
		$version = $('input#manifestVersion');
		$category = $('input#category');
		var count = 0;

		if ($title.val().length < 6) {
			$('text#titleError').text("(min 6 characters)");
			count++;
		} else {
			$('text#titleError').text("");
		}
		if ($version.val().length < 1) {
			$('text#versionError').text("(must be filled out)");
			count++
		} else {
			$('text#versionError').text("");
		}

		if ($category.val().length < 6) {
			$('text#categoryError').text("(min 6 characters)");
			count++;
		} else {
			$('text#categoryError').text("");
		}
		
		if (count == 0){

			$.ajax({
						type: "POST",
						url: "create_manifest.php",
						data: {
								'manifest' : 
									'{' +
										'"manifest": {' +
											'"title":"' + $title.val() +'",' +
											'"category":"' + $category.val() +'",' +
											'"version":"' + $version.val() + '"' +
										'}' + 
									'}' 
							},
				success: function(data){
         			window.open('download_manifest.php'); // will open new tab on window.onload
				},
				error: function(XMLHttpRequest, textStatus, errorThown){
					console.log("error occurred with ajax");
				}
			});
		}
	}
</script>

<div id="displayContainer">
	<div id="uploadPanel">
		<form action='upload.php' method='post' enctype="multipart/form-data">
            <input type="text" class="form-control" placeholder="Title" name="title" required>
            <br>
            <input type="text" class="form-control" placeholder="Category" name="category" required>
			<h3>Add Dataset/SNC files</h3>
			<input class="fileInput" type="file" name="datasetfile" id="datasetfile" required>
			<h3>Upload Manifest.json</h3>
            <br>
			<input type="file" class="fileInput" name="manifestfile" id="manifestFile">
            <br>
            
            <button type="submit" name="submit" class="plusButton">Submit Manifest</button>
			<!-- <p>Keyword</p>
			<input type='text' id='keyword' name='keyword'></div> -->
			
			<h3>Or</h3>
			<br>
			<div id="genButtonDiv">
			<button onclick= "showForm(); return false;">Generate Manifest JSON</button>
			</div>
		</form>
	</div>
	<div id='NewData'>
	</div>
</div>
<div id="alertspace">
</div>
<?php

	if(isset($_FILES['datasetfile']))
	{
        $file = $_FILES['datasetfile'];
        $file_name = $file['name'];
        $file_name_data = $file['name'];
        $file_tmp = $file['tmp_name'];
        $file_size = $file['size'];
        $file_error = $file['error'];
        //check extension
        
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));
        $allowed = array('txt', 'json', 'rtf', 'snc', 'pdf');
        
        if(in_array($file_ext, $allowed)) {
            if($file_error === 0){
                if($file_size <= 150000000){
                    mkdir('uploads/'.$_SESSION['email'].'/'.$_POST['title'], 0744, true);
                    $file_destination = 'uploads/'.$_SESSION['email'].'/'.$_POST['title'].'/' . $file_name;
                    $file_destination_data = 'uploads/'.$_SESSION['email'].'/'.$_POST['title'].'/' . $file_name;
                    if(move_uploaded_file($file_tmp, $file_destination)) {
                        
                     
                        
                       $uploadcheck1 = true; 
                    }
                }
            }
        }
 
    }
	if(isset($_FILES['manifestfile']))
	{
        $file = $_FILES['manifestfile'];
        $file_name = $file['name'];
        $manifest_name = $file['name'];
        $file_tmp = $file['tmp_name'];
        $file_size = $file['size'];
        $file_error = $file['error'];
        //check extension
        
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));
        $allowed = array('json');
        
        if(in_array($file_ext, $allowed)) {
            if($file_error === 0){
                if($file_size <= 150000000){
                    
                    $file_destination = 'uploads/'.$_SESSION['email'].'/'.$_POST['title'].'/' . $file_name;
                     $file_destination_man = 'uploads/'.$_SESSION['email'].'/'.$_POST['title'].'/' . $file_name;
                    
                    if(move_uploaded_file($file_tmp, $file_destination)) {
                        
                     
                        
                       $uploadcheck2 = true; 
                    }
                }
            }
        }

 if ($uploadcheck1 == true && $uploadcheck2 == true){
  echo "<div class='alert alert-success alert-dismissable' style='position: fixed; right:10%'>
                    <strong>Success!</strong>Your files have been uploaded!
                        </div>";
}
else {
    echo "<div class='alert alert-danger alert-dismissable' style='position: fixed; right:10%'>
                    <strong>Error!</strong>Your files are either a non-supported format or over 15mb!
                        </div>";
}
    }

		
        if ($uploadcheck1 == true) {
        date_default_timezone_set('UTC');
        $today = date('y-m-d');
		$conn = mysqli_connect('localhost','admin','CS4320FG7','SEFinalProject') or die ("error connecting to database");
		$sql = "SELECT * FROM `user` WHERE email = '".$_SESSION['email']."';";

		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$userId = $row['ID'];


		$sql = "INSERT INTO `manifest` 
			( `version`, `category`, `last_edit`, `upload_date`, `title`, `ownerID`, `manifest_path`)  
			VALUES ( '1','". $_POST['category']."',' ".$today."', '".$today."', '".$_POST['title']."', ".$userId." ,'".$file_destination_man."');";
		$result = mysqli_query($conn, $sql);

		if ($result){
			$sql = "SELECT `manifest_id` FROM `manifest` WHERE manifest_id = (SELECT MAX(manifest_id) FROM `manifest`)";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			$manifestId = $row['manifest_id'];
		
		$sql = "INSERT INTO `dataset_files` 
			(`fileName`, `fileType`, `manifestID`, `userID`,`filePath`) 
			VALUES ( '".$file_name_data."', 'text', ".$manifestId.", ".$userId.", '".$file_destination_data."');";
		$result = mysqli_query($conn, $sql);
		}
	}?>
</div>
</body>
</html>
