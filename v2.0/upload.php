<?php 
session_start();
if ($_SESSION["email"] == NULL){
        header('Location:  index.php', TRUE, 302);
    }
	
include "header.php"; 

?>

<div>
	<text>Add Dataset/SNC files (zip file if more than one file included)<text>
	<input type="file">
</div>
<div>
<text>Add Manifest File if already have an existing one to provide</text>
<input type="file">
</div>
<div>
<text>Otherwise, you can generate a manifest file.</text>
<button>Generate Manifest File</button>
</div>
<div>
	<button>Upload Dataset and Manifest File</button>
</div>