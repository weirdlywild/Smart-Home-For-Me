<html lang="en">
<head>
<title>Change Password</title>
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/device_style.css">
    <link rel = "icon" href ="images/logo_title.png" type = "image/x-icon">
    <link rel="stylesheet" href="css/dashbord_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script>
        var check = function() {
        if (document.getElementById('pass').value !== document.getElementById('cfmpass').value) {
            document.getElementById('msg').style.color = 'red';
            document.getElementById('msg').innerHTML = 'Password Not Matching';
        }
        else{
            document.getElementById('msg').style.color = 'green';
            document.getElementById('msg').innerHTML = '';
        }
        }
    </script>
    <style>
    .mesg{
      margin-left: 50px;
    }
    .head{
      width: 100%;
	border-bottom: 6px solid #4caf50;
  }
    </style>
</head>
<body>
<div class="container">
    <h1 class="head">Change Password</h1>

    <form action="change_pass_code.php" method="post">
        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" id="opass" name="opass" placeholder="Enter Your Old Password" required="" autocomplete="off">
        </div>
        <div class="textbox">
            <i class="fas fa-key"></i>
            <input type="password" id="pass" name="pass" placeholder="Enter Your New Password" onkeyup='check();' required="" autocomplete="off">
        </div>
        <div class="textbox">
            <i class="fas fa-key"></i>
            <input type="password" id="cfmpass" name="cfmpass" placeholder="Confirm Your New Password" onkeyup='check();' required="" autocomplete="off">
        </div>
        <span class="mesg" id="msg"></span>
        <input type="submit" id="btn" class="btn" value="Change Password" onclick="Validate()">
    </form>
    <a href="dashbord_profile.php">
        <button class="btn">Go Back</button></a>

</div>
</body>
</html>
