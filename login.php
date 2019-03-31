<?php
/**
 * Created by PhpStorm.
 * User: PRUTHVI
 * Date: 15-03-2019
 * Time: 11:15 AM
 */
    echo "It work properly";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart Home For Me</title>
    <link rel="stylesheet" href="css/login_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
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
<body>
​<div class="icon-bar">
    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
    <a href="#" class="google"><i class="fa fa-google"></i></a>
    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
</div>
    <div class="container">
        <h1>LOG IN</h1>
        <form action="login_code.php" method="post">
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="email" id="txtemail" name="txtemail" placeholder="Email Id">
            </div>
            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" id="pass" name="pass" placeholder="Password">
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
