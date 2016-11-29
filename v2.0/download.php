<<<<<<< HEAD
=======

>>>>>>> refs/remotes/origin/master
<?php
$conn = mysqli_connect('localhost','admin','CS4320FG7','SEFinalProject') or die ("error connecting to database");

function download(){
          $id = $row['manifest_id'];
          $query = "SELECT * " ."FROM manifest WHERE manifest_id = '$id'";
          $result2 = mysqli_query($connection,$query)
                     or die('Error, query failed');
         list($id, $file, $type, $size,$content) =   mysqli_fetch_array($result2);
           //echo $id . $file . $type . $size;
         header("Content-length: $size");
         header("Content-type: $type");
         header("Content-Disposition: attachment; filename=$file");
         ob_clean();
         flush();
         echo $content;
         mysqli_close($connection);
         exit;
}
download();
        ?>

