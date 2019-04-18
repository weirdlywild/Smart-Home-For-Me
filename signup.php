<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Smart Home For Me</title>
    <link rel="stylesheet" href="css/login_style.css">
    <link rel = "icon" href ="images/logo_title.png" type = "image/x-icon">
    <link rel="stylesheet" href="css/dashbord_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        var check = function() {
        if (document.getElementById('pass').value !== document.getElementById('cfmpass').value) {
            document.getElementById('msg').style.color = 'red';
            document.getElementById('msg').innerHTML = 'password not matching';
        }
        else{
            document.getElementById('msg').style.color = 'green';
            document.getElementById('msg').innerHTML = '';
        }
        }
    </script>


    <style>
        input:required:invalid, input:focus:invalid {
            background-image: url(images/wrong.png);
            background-position: right top;
            background-repeat: no-repeat;
            -moz-box-shadow: none;
        }
        input:required:valid {
            background-image: url(images/right.png);
            background-position: right top;
            background-repeat: no-repeat;
        }

    </style>
</head>
<body>
<div class="container">
    <h1>SIGN UP</h1>
    <form action="signup_code.php" method="post">
        <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" id="txtname" name="txtname" placeholder="Name" required="" autocomplete="on" autofocus>
        </div>
        <div class="textbox">
            <i class="fas fa-envelope"></i>
            <input type="email" id="txtemail" name="txtemail" placeholder="Email" required="" autocomplete="on">
        </div>
        <div class="textbox">
            <i class="fas fa-mobile"></i>
            <input type="tel" id="txtmobile" name="txtmobile" placeholder="Mobile Number" pattern="^\d{10}" required="" autocomplete="on">
        </div>
        <div class="textbox">
            <i class="fas fa-key"></i>
            <input type="password" id="pass" name="pass" placeholder="Password" onkeyup='check();' required="" autocomplete="off">
        </div>
        <div class="textbox">
            <i class="fas fa-key"></i>
            <input type="password" id="cfmpass" name="cfmpass" placeholder="Confirm Password" onkeyup='check();' required="" autocomplete="off">
        </div>
        <span id="msg"></span>
        <input type="submit" id="btnsignup" class="btn" value="Sign Up">
    </form>
    <a id="login" class="lg" href="login.php">Already Have An Account ?</a>
</div>
</body>
</html>
