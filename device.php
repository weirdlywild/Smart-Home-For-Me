
<!DOCTYPE html>
<html>
<head>
<title>ADD DEVICE</title>
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
    <form action="device_code.php" method="post">
        <label for="selcat">Category</label><select id="selcat" name="selcat" required="">
            <option value="null">Select Category</option>
            <option value="bedroom">Bedroom</option>
            <option value="hall">Hall</option>
            <option value="kitchen">Kitchen</option>
        </select><br />

        <label for="txtdname">Device Name :</label><input type="text" id="txtdname" name="txtdname" placeholder="Enter Device Name" required=""><br />

        <label for="txtddis">Device Description :</label><input type="text" id="txtddis" name="txtddis" placeholder="Enter Device Description" required=""><br />

        <label for="txtdpin">GPIO PIN :</label><input type="text" id="txtdpin" name="txtdpin" placeholder="Enter GPIO PIN" pattern="[0-9]+" required=""><br />

        <label for="dpass">Password :</label><input type="password" id="dpass" name="dpass" placeholder="Password" required="" autocomplete="off"><br />

        <input type="submit" id="btn" class="btn" value="Add Device" onclick="Validate()">
        <span id="msg" > <?php echo $msg=''; ?> </span>
    </form>
</body>
</html>
