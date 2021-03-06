<?php
session_start();
require_once ('dbconn.php');
if (empty($_SESSION['email'])){
header("Location: login.php");
}
$email = $_SESSION['email'];
$sql = "SELECT * FROM main_data WHERE email= '$email'";
$result = mysqli_query($conn , $sql);
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_assoc($result))
{
$name = $row['name'];
$email = $row['email'];
$phone =$row['phone'];
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SHFM PROFILE</title>
    <link rel = "icon" href ="images/logo_title.png" type = "image/x-icon">
    <link rel="stylesheet" href="css/dashbord_profile_style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
   <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>
  <body oncontextmenu="return false">
    <div class="container-fluid h-100">
    <div class="row h-100">
      <aside class="col-12 col-md-3  p-0 ">
          <nav class="navbar navbar-expand flex-md-column flex-row align-items-start py-2">
              <div class="collapse navbar-collapse">
                  <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                      <li class="nav-item1 hello">
                          <a class="nav-link pl-0 text-nowrap" href="dashbord.php"><i class="fa fa-home fa-fw" style="color:white;"></i> <span class="font-weight-bold logo logo__txt d-none d-md-inline" style="color:white;">SMART HOME</span></a>
                      </li>
                                  <div class="imgcontainer d-none d-md-inline">
                                   <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
                                  </div>
                        <li>
                          &nbsp
                        </li>
                      <li>
                         <span class="ur1 d-none d-md-inline" style="color:white;">
                             &nbsp<?php echo "$name"; ?>
                         </span>
                      </li>
                      <li>
                          &nbsp
                      </li>
                      <li class="nav-item">
                          <a class="nav-link pl-0" href="dashbord_profile.php"><i class="fa fa-user-circle-o fa-fw"style="color:white;"></i>&nbsp<span class="d-none d-md-inline ur"style="color:white;">EDIT PROFILE</span></a> <!-- profile -->
                      </li>
                      <li>&nbsp</li>
                      <li class="nav-item">
                          <a class="nav-link pl-0" href="dashbord_mng_dvi.php"><i class="fa fa-gears fa-fw"style="color:white;"></i>&nbsp<span class="d-none d-md-inline ur" style="color:white;">MANAGE DEVICES</span></a>  <!-- manage devices -->
                      </li>
                      <li>&nbsp</li>
                      <li class="nav-item">
                          <a class="nav-link pl-0" href="dashbord_contactus.php"><i class="fa fa-vcard-o fa-fw"style="color:white;"></i>&nbsp<span class="d-none d-md-inline ur"style="color:white;">CONTACT US</span></a> <!-- contact us  -->
                      </li>
                      <li>&nbsp</li>
                      <li class="nav-item">
                          <a class="nav-link pl-0" href="dashbord_aboutus.php"><i class="fa fa-id-badge fa-fw"style="color:white;"></i>&nbsp<span class="d-none d-md-inline ur"style="color:white;">ABOUT US</span></a> <!-- about us -->
                      </li>
                      <li>&nbsp</li>
                      <li class="nav-item">
                          <a class="nav-link pl-0" href="logout.php"><i class="fa fa-power-off fa-fw"style="color:white;"></i>&nbsp<span class="d-none d-md-inline ur"style="color:white;">LOG OUT</span></a> <!--log out -->
                      </li>
                  </ul>
              </div>
          </nav>
      </aside>
        <main class="col next">
          <br class="d-none d-md-inline">
          <br class="d-none d-md-inline">
          <br class="d-none d-md-inline">
          <div class="head_h1">
              <h1 class="heading1"><span class="heading">EDIT PROFILE</span></h1>
          </div>

          <div>
              <span><a href='change_pass.php'><button class="bnt flt_r"><strong>Change Password</strong></button></a></span>
          </div>
<div <div class="col-sm-1-12">

<div>
      <form class="f_p" action="dashbord_profile_code.php" method="post">
        <div><input type="text" id="txtname" name="txtname" class="text_box" placeholder="<?php echo "$name"; ?>" value="<?php echo "$name"; ?>"></div>
      <div><input type="text" id="txtemail" name="txtemail" class="text_box dis" placeholder="<?php echo "$email"; ?>" disabled></div>
      <div><input type="tel" id="txtmobile" name="txtmobile" class="text_box" placeholder="<?php echo "$phone"; ?>" value="<?php echo "$phone"; ?>"></div>
      <div><input type="password" id="pass" name="pass" class="text_box" placeholder="Enter Your Password" required></div>
      <div><input type="submit" id="btnsub" class="bnt mg_btn" value="Submit Changes"></div>
      </form>
</div>
</div>
     </main>
    </div>
</div>
  </body>
</html>