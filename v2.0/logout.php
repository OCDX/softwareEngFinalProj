<!--
Just a real short script to destroy the session.

-->

<?php
 session_start();

  echo "Logout Successfully ";
  session_destroy();   // function that Destroys Session
  header("Location: index.php");
?>
