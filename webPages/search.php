<?php include_once("header.php"); ?>

<!-- STUB CALLS
	Sections of code in this document will include:
		calls to open the connection to the database: openConnection()
		display search form: searchForm()
		take in user input and clean and parse it: prepare()
		compare user input to database: search
		display search results: results() -->

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
			<h2>Search</h2>
			<form action="search.php" method="post">
				<input type="text" name="search" id="search">
				<input checked = "check" type = "radio" name = "radios" value = 0>Title
				<input type = "radio" name = "radios" value = 1>Author
				<input type = "radio" name = "radios" value = 2>Keyword
				<input type = "radio" name = "radios" value = 3>Category
				<input type="submit" value="Search">
			</form>
		</div>
		<div class="search-results column two-thirds">
			<p>Display results in table form. Title, author, date, files associated.</p>
			<div class="scroll-container">
				<div class="scroll-box">
					<?php 
						$conn = mysqli_connect('localhost','admin','CS4320FG7','SEFinalProject') or die ("error connecting to database");
					
					//this is the display results for case 0, repeat for each case, edit the table names and sql queries per result
						
//					if(isset($_POST['userinput'])){
//					$pick = $_POST['radios'];
//					$searcher = $_POST['userinput'] . '%';
//
//					switch($pick){
//						case '0':
//							if($stmt = mysqli_prepare($conn, "SELECT * from manifest WHERE title LIKE ?")){
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
//
//							break;
					?>
				</div>
			</div>
		</div>	
	</div>
<?php include_once("footer.php"); ?>