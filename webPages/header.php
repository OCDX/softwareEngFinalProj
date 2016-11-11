<?php
	session_start();
	if (!isset($_SERVER['HTTPS']) || !$_SERVER['HTTPS']) { // if request is not secure, redirect to secure url
	   $url = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	   header('Location: ' . $url);
	    //exit;
	    
	   /* TODO: should we check to see if an active session is in progress and prevent
	    logged in users from registering? */
	}
	error_reporting(E_ALL);
	session_start();
	
	$root = "https://mizzou.tech/";
?>
	<!-- header -->
	 <!DOCTYPE html>
	 <html>
		 <head>
			<title>Software Engineering Final</title>
			<link rel="stylesheet" href="<?php echo $root; ?>css/styling.css">
		 </head>
		 <body>
			 <header class="clearfix">
			 	<div class="header-container">
			 		<div class="row clearfix">
			 			<div class="column full">
			 				<div class="siteTitle">
			 					<h1>Manifest Database</h1>
			 				</div>
			 			</div>
			 		</div>
			 	</div>
			 </header>
