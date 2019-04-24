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
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONTACT US</title>
    <link rel = "icon" href ="images/logo_title.png" type = "image/x-icon">
    <link rel="stylesheet" href="css/dashbord_contactus.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
   <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>


  </head>
  <body>
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

          <h1><span class="contact_head">CONTACT US</span></h1>
          <<h2 class="hell">Say Hello To US</h2>

          <div>
            <div class="edit">
              <form action="dashbord_contactus_code.php" method="post">
                <div class="textbox">
                    <i class="fa fa-user"></i>
                    <input type="text" id="txtfname" name="txtfname" placeholder="First Name" required="" autofocus>
                </div>

                <div class="textbox">
                    <i class="fa fa-user"></i>
                    <input type="text" id="txtlname" name="txtlname" placeholder="Last Name" required="" autofocus>
                </div>

                <div class="textbox">
                    <i class="fa fa-at"></i>
                    <input type="text" id="txtmail" name="txtmail" placeholder="Email" required="" autofocus>
                </div>

                <div class="textbox">
                    <i class="fa fa-edit"></i>
                    <textarea rows="5" id="txtwrite" name="txtwrite" placeholder="Write Here..."></textarea>
                </div>
                <div class="btn_cent">
                <input type="submit" class="bnt" value="Send">
              </div>
                </form>
              </div>

              <div class="nak">
                <br class="d-none d-lg-inlie"/>
                <br class="d-none d-lg-inlie"/>
                <iframe src="https://maps.google.com/maps?q=svmit%20bharuch&t=&z=13&ie=UTF8&iwloc=&output=embed" scrolling="no"></iframe>
              </div>
          </div>
          <br>
          <br>
          <div class="col-md-12 row ll">
          <div class="col-md-4">
                    <div class="c-info">
                       <h5>Address:</h5>
                       <p> Shree S'Ad Vidya Mandal Institute Of Technology, Old NH 48, Bharuch, Gujarat 392001 </p>
                    </div>
                    <br class="d-none d-lg-inlie"/>
          </div>
          <br class="d-none d-lg-inlie"/>
          <div class="col-md-4">
                    <div class="c-info">
                       <h5>Contact:</h5>
                        <a href="tel:7405243749"><p><strong>Phone:</strong> +91 74052 43749</p></a>
                        <a href="tel:9913828798"><p><strong>Phone:</strong> +91 99138 28798</p></a>
                    </div>
                    <br class="d-none d-lg-inlie"/>
          </div>
          <br class="d-none d-lg-inlie"/>
          <div class="col-md-4">
                    <div class="c-info">
                       <h5>For More Information:</h5>
                        <p><strong>Email:</strong></p>
                        <a href="mailto:ravipatel597288@gmail.com?Subject=contact%20us" target="_top">1)    ravipatel59728@gmail.com</a>
                        <a href="mailto:jainamsutariya24@gmail.com?Subject=contact%20us" target="_top">2)    jainamsutariya24@gmail.com</a>
                    </div>
                    <br class="d-none d-lg-inlie"/>
          </div>
        </div>
        </div>
        </main>
    </div>
</div>
  </body>
</html>
