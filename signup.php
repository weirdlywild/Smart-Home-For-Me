<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart Home For Me</title>
    <link rel="stylesheet" href="index_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        var check = function() {
        if (document.getElementById('pass').value != document.getElementById('cfmpass').value) {
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
        .icon-bar {
            position: fixed;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .icon-bar a {
            display: block;
            text-align: center;
            padding: 16px;
            transition: all 0.3s ease;
            color: white;
            font-size: 20px;
        }

        .icon-bar a:hover {
            background-color: #000;
        }

        .facebook {
            background: #3B5998;
            color: white;
        }

        .twitter {
            background: #55ACEE;
            color: white;
        }

        .google {
            background: #dd4b39;
            color: white;
        }

        .linkedin {
            background: #007bb5;
            color: white;
        }

        .youtube {
            background: #bb0000;
            color: white;
        }
    </style>
</head>
<body>
​<div class="icon-bar">
    <a href="https://www.facebook.com/Smart-Home-For-Me-581063565745191ss" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
    <a href="#" class="google"><i class="fa fa-google"></i></a>
    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
</div>
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
    <a id="login" class="lg" href="index.php">Already Have An Account ?</a>
</div>
</body>
</html>