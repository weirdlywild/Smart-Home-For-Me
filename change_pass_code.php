<?php
/**
 * Created by PhpStorm.
 * User: PRUTHVI
 * Date: 18-03-2019
 * Time: 01:22 AM
 */
session_start();
require_once ('dbconn.php');
if (empty($_SESSION['email'])){
    header("Location: login.php");
}
$email = $_SESSION['email'];
$pwd = $_POST['opass'];
$opass = md5($pwd);
$npwd=$_POST['pass'];
$npass=md5($npwd);

$one ="SELECT * FROM main_data WHERE email = '$email' AND password='$opass' AND verified = '1'";
$oresult = mysqli_query($conn , $one);

if(mysqli_num_rows($oresult) > 0)
{
  $sql = "UPDATE `main_data` SET `password` = '$npass' WHERE `email` = '$email' AND `password` = '$opass'";
  $result = mysqli_query($conn , $sql);
  if($result === TRUE)
  {
    echo "<script>
      alert('Password Changed Successfully');
    window.location.href='dashbord_profile.php';
    </script>";
  }
}
else
  {
    echo "<script>
      alert('Wrong Old Password');
    window.location.href='change_pass.php';
    </script>";
  }
?>
