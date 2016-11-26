<?php require_once('header.php'); ?>

<div class="clearfix">
                <div class="row clearfix">
                        <div class="column full">
                                <div class="content">
<form action="" method="POST">
                                                <div class="row form-group">
                                                ^?<h2>Reset Password</h2>
                                                                <input class='form-control' type="email" name="username" placeholder="email">
                                                </div>
                                                                <input class=" btn btn-info" type="submit" name="submit" value="Reset"/>
                                                </div>
                                        </form>

<?php
ini_set("display_errors",1);
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

 if(isset($_POST['submit'])) { // Was the form submitted?
          $randomString =  generateRandomString();
          $email = $_POST['username'];
          $link = mysqli_connect('localhost', 'admin', 'CS4320FG7', 'SEFinalProject') or die ("Connection Error " . mysqli_error($link));

          $sql = "UPDATE user SET hash = '$randomString' WHERE email = '$email'";
          if (mysqli_query($link, $sql)) {
                echo "Record updated successfully";

                $message = "Hello $email.\r\nYour new password is: $randomString\r\nIf you did not request this please contact a system administrator immediately.";

                // In case any of our lines are larger than 70 characters, we should use wordwrap()
                $message = wordwrap($message, 70, "\r\n");
                // Send
                mail('gahyvb@gmail.com', 'Your new password is: ', $message);

         }
          else {
                echo "Error updating record: " . mysqli_error($link);
          }

        }
?>

^?