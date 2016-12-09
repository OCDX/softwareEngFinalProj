<?php
	if ($_POST['manifest']){
		$contents = $_POST['manifest'];

		$file = fopen("files/manifest.json", "w");
		fwrite($file, $contents);
		fclose($file);	
		$attachment_location = "files/manifest.json";

		if (file_exists($attachment_location)) {
			header($_SERVER["SERVER_PROTOCOL"] . " 200 OK");
			header("Content-Type: application/text");
			header("Content-Transfer-Encoding: Binary");
			header("Content-Length:".filesize($attachment_location));
			header("Content-Disposition: attachment; filename=manifest.json");
			readfile($attachment_location);
            die();
		} else {
			print('error');
		}
	} else {
		print('no post sent');
	}
?>