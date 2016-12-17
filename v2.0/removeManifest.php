<?php

if(isset($_POST['id'])){
	$link = mysqli_connect("localhost", "admin", "CS4320FG7", "SEFinalProject") or die ("error");
	$query = "DELETE FROM `dataset_files` WHERE manifestID = ".$_POST['id'].";";
	$result = mysqli_query($link, $query);

	$query = "DELETE FROM `manifest` WHERE manifest_id = ".$_POST['id'].";";
	
	$result = mysqli_query($link, $query);
	echo$query;
	// echo "success";
} else {
	print"error";
}
?>