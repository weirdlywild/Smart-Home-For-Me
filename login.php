<?php
/**
 * Created by PhpStorm.
 * User: PRUTHVI
 * Date: 15-03-2019
 * Time: 11:15 AM
 */
 session_start();
 require_once ('dbconn.php');
 if (!empty($_SESSION['email'])){
 header("Location: dashbord.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>SHFM Login</title>
    <link rel = "icon" href ="images/logo_title.png" type = "image/x-icon">
    <link rel="stylesheet" href="css/dashbord_style.css">
    <link rel="stylesheet" href="css/login_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/hide.js"></script> <!-- This is for dont see inspect element or code in browser -->
    <script>
        function shw_pass() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</head>
<body oncontextmenu="return false">
    <div class="container">
        <h1>LOG IN</h1>
        <form action="login_code.php" method="post">
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="email" id="txtemail" name="txtemail" placeholder="Email Id" autofocus required>
            </div>
            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" id="pass" name="pass" placeholder="Password" required>
            </div>
            <label class="so_pass">
                <input type="checkbox" onclick="shw_pass()"><strong>Show Password</strong>
                <span class="checkmark"></span>
            </label>
            <input type="submit" id="btnsubmit" class="btn" value="Login">
        </form>
        <a id="signup" class="su" href="signup.php">Don't Have An Account ?</a>
    </div>
</body>
</html>
