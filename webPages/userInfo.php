<?php include($root."header.php"); ?>
	<div id="sidebar" class="sidebar">
  		<div class="content">
  			<form action="search.php" method="post">
				<input type="text" name="search" id="search">
				<input type="submit" value="Search">
			</form>
			<a href="https://mizzou.tech/userInfo.php"><h4>Your Account</h4></a>
			<a href="https://mizzou.tech/create-edit.php"><h4>Manifest Editor</h4></a>
			<button id="logout" class="button" onclick="">Log Out</button>
		</div>
	</div>
	<div class="content column full">
		<div class="page-head">
			<h2>Username: Your info</h2>
		</div>
		<div class="maifestList column two-thirds">
			<h3>Your Manifests</h3>
			<p>Display list of manifests as a table, up to so many items. Anything beyond will be scrolled to, in a scroll container.
			Title, date, list of files. SQL and php implementation.
			Clicking on the title should go to the view page, where there will be options to edit if they are the author, going to the edit page.</p>
		
			<div class="scroll-container">
				<div class="scroll-box">
					<?php 
						$conn = mysqli_connect('localhost','admin','CS4320FG7','SEFinalProject') or die ("error connecting to database");	

//						Show user's mainfests

//						$searcher = $username;
//
//							if($stmt = mysqli_prepare($conn, "SELECT * from <table> WHERE author LIKE ?")){
//								mysqli_stmt_bind_param($stmt, 's', htmlspecialchars($searcher));
//								mysqli_stmt_execute($stmt);
//								mysqli_stmt_bind_result($stmt, $obj_field);
//								call_user_func_array(array($sec, "bind_result"), $setter);
//
//								$data = $stmt->result_metadata();
//								while($fetcher = $data->fetch_field()){
//									$answer[] = &$row[$fetcher->name];
//								}
//								call_user_func_array(array($stmt, 'bind_result'), $answer);
//
//								while($stmt->fetch()){
//									foreach($row as $c=> $num){
//											$section[$c]=$num;
//									}
//
//									$ans[] = $section;
//								}
//
//								$arraylist = array(<table fields>);
//								echo '<table class = "table table-hover">';
//								echo '<table class = "table table-hover">';
//									echo '<tr><th></th><th></th>';
//									foreach($arraylist AS $col){
//										echo '<th>' . $col . '</th>';
//									}
//
//									echo '</tr>';
//								$number = 0;
//								$i = 0;
//
//								foreach($ans AS $row){
//									echo '<form action = "create-edit.php" method = "POST"><tr>';
									echo '<td><button type = "submit" class = "btn btn-info" name = "edit">Edit</button></td>';
//									foreach($row AS $area){
//										echo '<td>' . $area . '</td>';
//										echo "<input type = 'hidden' name = $arraylist[$i] value = $area>";
//										$i++;
//									}
//
//									echo '</tr>';
//									$number++;
//									$i=0;
//									echo '</form>';
//
//								}
//
//								echo '</table><h1>' . $number . ' Rows</h1>';
//							}
					?>
				</div>
			</div>
		
		</div>	
	</div>
<?php include($root."footer.php"); ?>
