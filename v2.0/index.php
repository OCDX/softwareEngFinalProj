<!DOCTYPE html>
<html>
<style>
html {
background-color: #343434;
}
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: gold;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 75px;

}

.registerForm{
    float: left;
}
.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>
<h2>Manifest Database</h2>
<div style="background-color: white; width: 50%; margin-left: auto; margin-right: auto">
<form action="index.php" method="post">
  <div class="imgcontainer">
    <img src="images/logo.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input placeholder="email" type="text" name="email" id="username">

    <label><b>Password</b></label>
    <input placeholder="password" type="password" name="password" id="password">

    <button id="login" class="loginbtn" type="submit" name="submit">Log In</button>
  </div>
</form>


<form class="registerForm" action="userregistration.php"  method="post">
<div class="container" style="background-color:#f1f1f1">
    <button class="cancelbtn" onClick="window.location='userregistration.php';">User Registration</button>
   <!-- <button class="cancelbtn" onClick="window.location='userResetPW.php';">Forgot Password?</button>-->
  </div>
</form>
<form action="userResetPW.php"  method="post">
<div class="container" style="background-color:#f1f1f1">
    <!--<button class="cancelbtn" onClick="window.location='userregistration.php';">User Registration</button>-->
    <button class="cancelbtn" onClick="window.location='userResetPW.php';">Forgot Password?</button>
  </div>
</form>

    </div>

                    <?php
        session_start();
        if ($_SESSION['email'] != NULL){
        echo "<meta http-equiv='refresh' content='0;url=view.php'>";
        }
        else{
        if(isset($_POST['submit'])){ // was the form submitted?
          $link = mysqli_connect("localhost", "admin", "CS4320FG7", "SEFinalProject") or die ("connection Error " . mysqli_error($link));
          $sql = "SELECT salt, hash, permission_level FROM user WHERE email=?";
          if($stmt = mysqli_prepare($link, $sql)) {
                                                $user = $_POST['email'];
                                                $password = $_POST['password'];
                                                mysqli_stmt_bind_param($stmt, "s", $user) or die("bind param");
                                                if(mysqli_stmt_execute($stmt)){
                                                        mysqli_stmt_bind_result($stmt, $salt ,$hpass, $uType);
                                                        if(mysqli_stmt_fetch($stmt)){
                                                                if(password_verify($salt.$password, $hpass)){
                                                                        $_SESSION["email"] = $user;
                                                                        $_SESSION["permission_level"] = $uType;
                                                                        //echo "<h4>Session started</h4>";
                                                                        echo "<script> window.location.assign('view.php'); </script>";
                                                                } else {
                                                                        echo "<h4>Login failed</h4><br>wrong username or password...";
                                                                }
                                                        }


                                                }
        }
}}
       ?>
    </body>
</html>