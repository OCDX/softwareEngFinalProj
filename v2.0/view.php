<?php include_once("header.php"); ?>
<script src="jquery-3.1.1.min.js"></script>
<script type="text/javascript">
$.extend(
	{
	    redirectPost: function(location, args)
	    {
	        var form = '';
	        $.each( args, function( key, value ) {
	            form += '<input type="hidden" name="'+key+'" value="'+value+'">';
	        });
	        $('<form action="'+location+'" method="POST">'+form+'</form>').appendTo('body').submit();
	    }
	});

	function sendID(id) {
		var redirect = 'create-edit.php';
		$.redirectPost(redirect, {'id' : id});
	}</script>

<!-- STUB CALLS
	Sections of code in this document will include:
	calls to open the connection to the database: openConnection()
	search database for specific mainfest: search()
	display information related to the manifest: display() -->
		 <div id="sidebar" class="sidebar">
  		<div class="content">
  		
		</div>
	</div>

<?php 	if ($_SESSION['email'] == NULL){
		echo "<h1> Error you must be signed in to view content</h1>";
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	} else {
	
		$conn = mysqli_connect('localhost','admin','CS4320FG7','SEFinalProject') or die ("error connecting to database");
        $printquery = "SELECT * FROM manifest";
        $result = mysqli_query($conn, $printquery);
        echo"<table class='table table-bordered table-hover table-striped'>
			<tr>
				<th>Title</th>
				<th>Version</th>
				<th>Category</th>
				<th>Last Edit</th>
				<th>Upload Date</th>
			</tr>";
        while ($row = mysqli_fetch_assoc($result)){
        echo 
        	"<tr>
	            <td>".$row['title']."</td>
	            <td>".$row['version']."</td>
	            <td>".$row['category']."</td>
	            <td>".$row['last_edit']."</td>
	            <td>".$row['upload_date']."</td>
	            <td><button class='manifest' onClick='sendID(" . $row['manifest_id'].");'>View</button></td>
            </tr>";
        }
        echo"</table>";
    }

?>		
	</div>	
	</div>
</body>
</html>
