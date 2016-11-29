<?php include_once("header.php");
//      if ($_SESSION['permission_level'] != 1){
//       echo "<meta http-equiv='refresh' content='0;url=view.php'>";
//      }
 ?>

                <div class="container">
                        <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-3"></div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                        <h2>Create a user</h2>
                                        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
            <div class="row form-group">
                                                                <input class='form-control' type="text" name="first_name" placeholder="First Name">
                                                </div>
            <div class="row form-group">
                                                                <input class='form-control' type="text" name="last_name" placeholder="Last Name">
                                                </div>
                                                <div class="row form-group">
                                                                <input class='form-control' type="email" name="email" placeholder="email">
                                                </div>
                                                <div class="row form-group">
                                                                <input class='form-control' type="password" name="password" placeholder="password">
                                                </div>
                                                <div class="row form-group">
                                                                <input class=" btn btn-info" type="submit" name="submit" value="Register"/>
                                                </div>
                                        </form>

                                </div>
                        </div>
                        <?php
ini_set('display_errors', 1);
                                if(isset($_POST['submit'])) { // Was the form submitted?
                                        //if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
                                        //      exit("Invalid email address");
                                        $link = mysqli_connect("localhost", "admin", "CS4320FG7", "SEFinalProject") or die ("Connection Error " . mysqli_error($link));
                                        //$select = mysqli_query($link, "SELECT email FROM user WHERE email = ".$_POST['email']."") or exit(mysql_error());
                                        //if(mysql_num_rows($select))
                                        //      exit("This email is already being used");
                                        $sql = "INSERT INTO user(first_name,last_name,email,salt,hash,permission_level) VALUES (?,?,?,?,?,0)";
                                        if ($stmt = mysqli_prepare($link, $sql)) {
                                                $fname = $_POST['first_name'];
                                                $lname = $_POST['last_name'];
                                                $email = $_POST['email'];
                                                $salt = mt_rand();
                                                $hpass = password_hash($salt.$_POST['password'], PASSWORD_BCRYPT)  or die("bind param");
                                                mysqli_stmt_bind_param($stmt, "sssis", $fname, $lname, $email, $salt, $hpass) or die("bind param");
                                                if(mysqli_stmt_execute($stmt)) {
                                                        echo "<div class='alert alert-success' role='alert'>Account creation complete</div>";
              //TODO: add header to send to next page upon completion. Login page, perhaps?
                                                } else {
                                                        echo "<div class='alert alert-danger' role='alert'>Account creation failed</div>";
                                                }
                                                $result = mysqli_stmt_get_result($stmt);
                                        } else {
                                                die("prepare failed");
                                        }
                                }
                        ?>
                </div>
        <?php include_once("footer.php");?>
