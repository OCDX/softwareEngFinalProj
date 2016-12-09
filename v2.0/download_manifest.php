<?php
$attachment_location = "files/manifest.json";
		if (file_exists($attachment_location)) {
			header($_SERVER["SERVER_PROTOCOL"] . " 200 OK");
			header("Content-Length:".filesize($attachment_location));
			header("Content-Disposition: attachment; filename=manifest.json");
			readfile($attachment_location);
            die();
		} else {
			print('error');
		}
?>