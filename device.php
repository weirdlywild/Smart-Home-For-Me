
<!DOCTYPE html>
<html lang="en">
<head>
<title>ADD DEVICE</title>
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/device_style.css">
    <link rel = "icon" href ="images/logo_title.png" type = "image/x-icon">
    <link rel="stylesheet" href="css/dashbord_style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript">
        function Validate()
        {
            var e = document.getElementById("selcat");
            var strUser = e.options[e.selectedIndex].value;
            if(strUser==='null')
            {
                alert("Please select a Category");
            }
        }
    </script>

</head>
<body>
<div class="container">
    <h1 class="heading">Add Device</h1>

    <form action="device_code.php" method="post">
        <div class="slt">
            <select class="dropdown" id="selcat" name="selcat" required="">
                <option value="null">Select Category</option>
                <option value="bedroom">Bedroom</option>
                <option value="hall">Hall</option>
                <option value="kitchen">Kitchen</option>
            </select>
        </div>

        <div class="textbox">
            <i class="material-icons">&#xe1b1;</i>
            <input type="text" id="txtdname" name="txtdname" placeholder="Enter Device Name" required="" autofocus>
        </div>

        <div class="textbox">
            <i class="material-icons">&#xe0cb;</i>
            <input type="text" id="txtddis" name="txtddis" placeholder="Enter Device Description" required="">
        </div>

        <div class="textbox">
            <i class="material-icons">&#xe30f;</i>
            <input type="text" id="txtdpin" name="txtdpin" placeholder="Enter GPIO PIN" pattern="[0-9]+" required="">
        </div>

        <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" id="dpass" name="dpass" placeholder="Password" required="" autocomplete="off">
        </div>
        <input type="submit" id="btn" class="btn" value="Add Device" onclick="Validate()">
    </form>
    <a href="dashbord.php">
        <button class="btn">Go Back</button></a>

</div>
</body>
</html>
